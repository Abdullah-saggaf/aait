# =============================================================================
# Multi-stage Dockerfile for Laravel on Render.com
# Nginx + PHP-FPM via Supervisord | No Database Required
# =============================================================================

# -----------------------------------------------------------------------------
# Stage 1: Build frontend assets with Node.js
# -----------------------------------------------------------------------------
FROM node:20-alpine AS frontend

WORKDIR /app

# Copy package files first for better caching
COPY laravel-app/package*.json ./

# Install dependencies
RUN npm ci || npm install

# Copy ALL source files needed for Vite + Tailwind v4 build
# Tailwind v4 scans these files to determine which classes to include
COPY laravel-app/resources ./resources
COPY laravel-app/vite.config.js ./
COPY laravel-app/public ./public

# Build assets
RUN npm run build

# Verify build output exists
RUN ls -la /app/public/build/ && ls -la /app/public/build/assets/

# -----------------------------------------------------------------------------
# Stage 2: Install PHP dependencies with Composer
# -----------------------------------------------------------------------------
FROM composer:2 AS composer

WORKDIR /app

# Copy composer files
COPY laravel-app/composer.json laravel-app/composer.lock* ./

# Install dependencies without dev packages
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --no-scripts \
    --prefer-dist \
    --optimize-autoloader

# -----------------------------------------------------------------------------
# Stage 3: Production image with Nginx + PHP-FPM
# -----------------------------------------------------------------------------
FROM php:8.3-fpm-alpine

LABEL maintainer="Laravel Docker for Render.com"
LABEL description="Laravel application with Nginx and PHP-FPM"

# Install system dependencies
RUN apk add --no-cache \
    nginx \
    supervisor \
    bash \
    curl \
    sqlite-libs

# Install build dependencies and PHP extensions
RUN apk add --no-cache --virtual .build-deps \
    autoconf \
    gcc \
    g++ \
    make \
    linux-headers \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    libxml2-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    sqlite-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        mbstring \
        intl \
        zip \
        opcache \
        gd \
        pdo \
        pdo_sqlite \
    && apk add --no-cache \
        icu-libs \
        libzip \
        freetype \
        libjpeg-turbo \
        libpng \
    && apk del .build-deps \
    && rm -rf /var/cache/apk/* /tmp/*

# Configure PHP for production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Create PHP configuration for Laravel
RUN echo "[PHP]" > /usr/local/etc/php/conf.d/laravel.ini && \
    echo "expose_php = Off" >> /usr/local/etc/php/conf.d/laravel.ini && \
    echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/laravel.ini && \
    echo "max_execution_time = 60" >> /usr/local/etc/php/conf.d/laravel.ini && \
    echo "upload_max_filesize = 64M" >> /usr/local/etc/php/conf.d/laravel.ini && \
    echo "post_max_size = 64M" >> /usr/local/etc/php/conf.d/laravel.ini && \
    echo "date.timezone = UTC" >> /usr/local/etc/php/conf.d/laravel.ini

# Configure OPcache for production
RUN echo "[opcache]" > /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.enable = 1" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.memory_consumption = 128" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.interned_strings_buffer = 8" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.max_accelerated_files = 10000" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.validate_timestamps = 0" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.save_comments = 1" >> /usr/local/etc/php/conf.d/opcache.ini

# Set working directory
WORKDIR /var/www/html

# Copy application code from laravel-app subdirectory
COPY --chown=www-data:www-data laravel-app/ .

# Copy Composer dependencies from builder
COPY --from=composer /app/vendor ./vendor

# Copy built frontend assets from frontend stage
# This overwrites any existing public/build with freshly built assets
COPY --from=frontend /app/public/build/ ./public/build/

# Copy Docker configuration files
COPY laravel-app/docker/nginx.conf /etc/nginx/nginx.conf
COPY laravel-app/docker/site.conf /etc/nginx/http.d/default.conf
COPY laravel-app/docker/supervisord.conf /etc/supervisord.conf
COPY laravel-app/docker/start.sh /start.sh

# Verify assets were copied
RUN ls -la /var/www/html/public/build/ || echo "Warning: No build assets found"

# Make start script executable
RUN chmod +x /start.sh

# Create required directories and set permissions
RUN mkdir -p /var/www/html/storage/app/public \
    && mkdir -p /var/www/html/storage/framework/cache/data \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/views \
    && mkdir -p /var/www/html/storage/logs \
    && mkdir -p /var/www/html/bootstrap/cache \
    && mkdir -p /run/nginx \
    && mkdir -p /var/log/supervisor

# Set correct ownership for Laravel directories
RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Generate optimized autoload files
RUN composer dump-autoload --optimize --no-dev --classmap-authoritative 2>/dev/null || true

# Expose port 10000 (Render default)
EXPOSE 10000

# Health check
HEALTHCHECK --interval=30s --timeout=5s --start-period=10s --retries=3 \
    CMD curl -f http://localhost:10000/up || exit 1

# Start via our entry script
CMD ["/start.sh"]

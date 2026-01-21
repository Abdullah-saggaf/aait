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
COPY package*.json ./

# Install dependencies (if package.json exists and has dependencies)
RUN if [ -f package.json ] && [ -s package.json ]; then \
        npm ci --ignore-scripts 2>/dev/null || npm install --ignore-scripts 2>/dev/null || true; \
    fi

# Copy source files needed for build
COPY resources ./resources
COPY vite.config.js* ./
COPY postcss.config.js* ./
COPY tailwind.config.js* ./
COPY public ./public

# Build assets (skip gracefully if no build script)
RUN if [ -f package.json ] && grep -q '"build"' package.json 2>/dev/null; then \
        npm run build || echo "Frontend build failed or not configured, continuing..."; \
    else \
        echo "No build script found, skipping frontend build..."; \
    fi

# -----------------------------------------------------------------------------
# Stage 2: Install PHP dependencies with Composer
# -----------------------------------------------------------------------------
FROM composer:2 AS composer

WORKDIR /app

# Copy composer files
COPY composer.json composer.lock* ./

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

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libzip-dev \
    libxml2-dev \
    oniguruma-dev \
    icu-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_mysql \
        mbstring \
        bcmath \
        ctype \
        fileinfo \
        tokenizer \
        xml \
        zip \
        gd \
        intl \
        opcache \
    && rm -rf /var/cache/apk/*

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

# Copy application code
COPY --chown=www-data:www-data . .

# Copy Composer dependencies from builder
COPY --from=composer /app/vendor ./vendor

# Copy built frontend assets (if they exist)
COPY --from=frontend /app/public/build ./public/build

# Copy Docker configuration files
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/site.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/start.sh /start.sh

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

#!/bin/sh
# =============================================================================
# Laravel Container Startup Script for Render.com
# =============================================================================

set -e

echo "=========================================="
echo " Laravel Container Starting..."
echo "=========================================="

# =============================================================================
# Check for APP_KEY
# =============================================================================

if [ -z "$APP_KEY" ]; then
    echo ""
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"
    echo "  ERROR: APP_KEY environment variable is not set!"
    echo ""
    echo "  To fix this:"
    echo "  1. Generate a key locally: php artisan key:generate --show"
    echo "  2. Copy the output (e.g., base64:xxxxxxxx...)"
    echo "  3. Set APP_KEY in your Render.com environment variables"
    echo "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"
    echo ""
    # Don't exit - let the container start so logs are visible in Render
fi

# =============================================================================
# Set default environment variables for no-database mode
# =============================================================================

export DB_CONNECTION=${DB_CONNECTION:-sqlite}
export SESSION_DRIVER=${SESSION_DRIVER:-file}
export CACHE_STORE=${CACHE_STORE:-file}
export QUEUE_CONNECTION=${QUEUE_CONNECTION:-sync}
export LOG_CHANNEL=${LOG_CHANNEL:-stderr}
export LOG_LEVEL=${LOG_LEVEL:-warning}

# =============================================================================
# Ensure correct permissions
# =============================================================================

echo "[*] Setting permissions for storage and cache..."
chown -R www-data:www-data /var/www/html/storage 2>/dev/null || true
chown -R www-data:www-data /var/www/html/bootstrap/cache 2>/dev/null || true
chmod -R 775 /var/www/html/storage 2>/dev/null || true
chmod -R 775 /var/www/html/bootstrap/cache 2>/dev/null || true

# =============================================================================
# Create storage symlink (if not exists)
# =============================================================================

if [ ! -L /var/www/html/public/storage ]; then
    echo "[*] Creating storage symlink..."
    cd /var/www/html && php artisan storage:link 2>/dev/null || true
fi

# =============================================================================
# Laravel Optimization Commands (safe - don't crash on failure)
# =============================================================================

echo "[*] Running Laravel optimization commands..."

# Clear old caches first (in case of stale data)
cd /var/www/html

echo "    - Clearing old caches..."
php artisan config:clear 2>/dev/null || true
php artisan route:clear 2>/dev/null || true
php artisan view:clear 2>/dev/null || true

# Now cache everything fresh
echo "    - Caching configuration..."
php artisan config:cache 2>/dev/null || echo "    [Warning] config:cache failed, continuing..."

echo "    - Caching routes..."
php artisan route:cache 2>/dev/null || echo "    [Warning] route:cache failed, continuing..."

echo "    - Caching views..."
php artisan view:cache 2>/dev/null || echo "    [Warning] view:cache failed, continuing..."

# =============================================================================
# Display startup info
# =============================================================================

echo ""
echo "=========================================="
echo " Laravel Container Ready!"
echo "=========================================="
echo " Environment: ${APP_ENV:-production}"
echo " Debug Mode:  ${APP_DEBUG:-false}"
echo " Port:        10000"
echo "=========================================="
echo ""

# =============================================================================
# Start Supervisord (Nginx + PHP-FPM)
# =============================================================================

echo "[*] Starting Nginx and PHP-FPM via Supervisord..."
exec /usr/bin/supervisord -c /etc/supervisord.conf

#!/bin/sh
set -e

# Garante o link simbólico do storage público
if [ ! -L /var/www/html/public/storage ]; then
    echo "Criando link simbólico para storage..."
    php artisan storage:link || true
fi

# Ajusta permissões dos diretórios de cache e storage
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Otimizações de cache em produção
if [ "$APP_ENV" = "production" ]; then
    echo "Otimizando caches do Laravel para produção..."
    php artisan config:cache || true
    php artisan route:cache || true
    php artisan view:cache || true
fi

# Executa o comando padrão (php-fpm)
exec "$@"

#!/bin/sh
set -e

# Sin APP_KEY se genera una sola vez y se guarda en storage (volumen), para que sobreviva a reinicios
if [ -z "$APP_KEY" ]; then
    KEY_FILE=storage/app/private/app_key
    if [ ! -s "$KEY_FILE" ]; then
        mkdir -p storage/app/private
        php artisan key:generate --show > "$KEY_FILE"
        chown www-data:www-data "$KEY_FILE"
        chmod 600 "$KEY_FILE"
    fi
    APP_KEY=$(cat "$KEY_FILE")
    export APP_KEY
fi

# El volumen de storage puede venir vacío la primera vez
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs
chown -R www-data:www-data storage

php artisan optimize

exec "$@"

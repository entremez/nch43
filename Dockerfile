# Imagen de producción de nch43: PHP 8.3 + Apache, sin base de datos ni Node
FROM php:8.3-apache

RUN apt-get update && apt-get install -y --no-install-recommends unzip libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install gd zip opcache \
 && rm -rf /var/lib/apt/lists/* \
 && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
 && a2enmod rewrite headers \
 && printf 'ServerTokens Prod\nServerName localhost\n' > /etc/apache2/conf-available/zz-nch43.conf \
 && a2enconf zz-nch43

COPY docker/php.ini $PHP_INI_DIR/conf.d/zz-nch43.ini
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Dependencias primero, para que Docker reutilice esta capa si solo cambia el código
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --no-interaction --prefer-dist

COPY . .
RUN composer dump-autoload --optimize --no-dev \
 && rm /usr/bin/composer \
 && chown -R www-data:www-data storage bootstrap/cache

COPY docker/entrypoint.sh /usr/local/bin/nch43-entrypoint
RUN chmod +x /usr/local/bin/nch43-entrypoint

HEALTHCHECK --interval=30s --timeout=5s --start-period=20s CMD curl -fsS http://localhost/up || exit 1

ENTRYPOINT ["nch43-entrypoint"]
CMD ["apache2-foreground"]

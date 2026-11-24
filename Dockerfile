
FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libicu-dev \
    libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install bcmath exif pcntl zip intl gd \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --no-interaction \
    --prefer-dist --optimize-autoloader

RUN printf '%s\n' \
    'Listen 10000' > /etc/apache2/ports.conf \
    && printf '%s\n' \
    '<VirtualHost *:10000>' \
    'DocumentRoot /var/www/html/public' \
    '<Directory /var/www/html/public>' \
    'AllowOverride All' \
    'Require all granted' \
    '</Directory>' \
    'ErrorLog ${APACHE_LOG_DIR}/error.log' \
    'CustomLog ${APACHE_LOG_DIR}/access.log combined' \
    '</VirtualHost>' \
    > /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD ["apache2-foreground"]

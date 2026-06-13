FROM php:8.4-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl



COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-interaction --prefer-dist

RUN chmod -R 777 database storage bootstrap/cache

RUN chown -R www-data:www-data /app

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"]
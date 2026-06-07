FROM php:8.4-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    sqlite3 \
    unzip \
    git \
    curl

RUN docker-php-ext-install pdo pdo_sqlite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN chmod -R 777 database

RUN composer install --no-interaction --prefer-dist

RUN php artisan config:clear

# Run app
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
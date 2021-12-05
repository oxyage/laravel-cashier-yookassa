FROM php:8.1-cli

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN apt-get update && apt-get install -y git

WORKDIR /app/laravel-cashier-yookassa

VOLUME /app/laravel-cashier-yookassa/vendor

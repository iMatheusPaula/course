FROM php:8.3.8-fpm

RUN apt-get update && apt-get install -y \
        && pecl install xdebug \
        && docker-php-ext-enable xdebug

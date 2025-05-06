FROM php:8.2-fpm-alpine

RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS mariadb-dev \
 && docker-php-ext-install mysqli pdo pdo_mysql \
 && apk del .build-deps

 # Dodaj Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
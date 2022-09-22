FROM php:7.4-fpm-alpine

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

RUN apk add jpeg-dev libpng-dev \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd
RUN set -ex \
    && apk --no-cache add \
    postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql sockets
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer
RUN apk add git
RUN docker-php-ext-install exif

WORKDIR /app
COPY . ./app
RUN composer install

CMD php artisan serve --host=0.0.0.0
EXPOSE 8000

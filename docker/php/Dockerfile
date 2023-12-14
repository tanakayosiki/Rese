FROM php:7.4.9-fpm

COPY php.ini /usr/local/etc/php/

RUN apt-get update \
    && apt-get install -y \
                git \
                zip \
                unzip \
                libonig-dev \
                libfreetype6-dev \ 
                libjpeg62-turbo-dev \
                libpng-dev \
                libjpeg-dev \
    && docker-php-ext-install \ 
                pdo_mysql \ 
                bcmath \
                gd \
    && docker-php-ext-configure gd \
                --with-freetype=/usr/include/ \
                --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd



WORKDIR /var/www
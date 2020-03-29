FROM php:7.2-apache

RUN apt-get update \
    && apt-get install  git  libicu-dev libmcrypt-dev libzip-dev --yes
    

RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    zip 

RUN pecl install mcrypt-1.0.3 && docker-php-ext-enable mcrypt

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite headers
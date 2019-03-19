FROM php:5.6-apache

RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www/html/

RUN apt-get update && apt-get -y install git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

ENV MINIO_ACCESS_KEY P98T0S2L6ITESY94TZ5Z
ENV MINIO_SECRET_KEY TLSqMqtnYfyJas1ocPdXUqLx30HdW2Y9RCJY2G

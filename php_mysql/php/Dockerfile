FROM php:8.2-apache
RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE 80
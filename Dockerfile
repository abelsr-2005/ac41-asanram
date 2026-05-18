FROM php:8.2-apache

RUN docker-php-ext-install mysqli

RUN useradd -m asanram

RUN chown -R asanram:asanram /var/www/html

USER asanram

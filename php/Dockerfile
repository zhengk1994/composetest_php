FROM php:7.2-fpm
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
COPY php.ini /usr/local/etc/php/

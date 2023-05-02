FROM php:8.1-apache

COPY ./default.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y \
	libpq-dev \
	git \
	&& docker-php-ext-install pdo pdo_pgsql

RUN chmod -R 765 /var/www/html

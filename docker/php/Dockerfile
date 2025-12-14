FROM php:8.3-fpm

# Instalar dependencias necesarias para Laravel + PostgreSQL
RUN apt-get update && apt-get install -y \
  libpq-dev \
  unzip \
  git \
  curl \
  supervisor \
  && docker-php-ext-install pdo pdo_pgsql

WORKDIR /var/www/html

# Dockerfile

FROM php:8.1-fpm

WORKDIR /var/www/html

# Install necessary libraries and PHP extensions
RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql mbstring zip exif pcntl bcmath opcache

# Copy Composer from the official image
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Copy the application files
COPY . .

# Install PHP dependencies via Composer
RUN composer install

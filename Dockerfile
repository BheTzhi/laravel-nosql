# Gunakan base image PHP 8.3 dengan FPM
FROM php:8.3-fpm

# Install dependencies system yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libssl-dev \
    pkg-config \
    libcurl4-openssl-dev \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install mbstring zip pdo pdo_mysql

# Install ekstensi mongodb dari PECL dan aktifkan
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Install Composer secara global
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory ke folder Laravel
WORKDIR /var/www/html

# Copy seluruh file project ke container
COPY . .

# Install dependencies composer (tanpa dev untuk production)
RUN composer install --no-dev --optimize-autoloader

# Ekspos port 9000 untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM sebagai proses utama container
CMD ["php-fpm"]

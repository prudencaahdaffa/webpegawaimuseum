# Gunakan base image PHP yang diinginkan
FROM php:7.4-apache

# Menyalin file aplikasi PHP ke dalam image
COPY . /var/www/html

# Instal ekstensi PHP yang dibutuhkan
RUN apt-get update && apt-get install -y \
    default-mysql-client \
    default-libmysqlclient-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Instal composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Menyalakan modul rewrite di dalam Apache
RUN a2enmod rewrite

# Install dependensi yang diperlukan
WORKDIR /var/www/html
COPY composer.json .
RUN composer install --no-interaction --no-dev

# Konfigurasi Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Tentukan port yang akan diexpose oleh container
EXPOSE 8088

# Perintah yang akan dijalankan ketika container dijalankan
CMD ["apache2-foreground"]

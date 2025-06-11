FROM php:8.2-apache

# Install common PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Copy project files into the web root
COPY . /var/www/html/

EXPOSE 80

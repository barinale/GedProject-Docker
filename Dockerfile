FROM php:7.4-apache

WORKDIR /var/www/html

# Install PostgreSQL client and development packages
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY . /var/www/html

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]

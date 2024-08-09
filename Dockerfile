FROM php:7.4-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli
# Create a directory and set permissions
# RUN mkdir -p /var/www/html/uploads \
#     && chown -R www-data:www-data /var/www/html/uploads \
#     && chmod -R 755 /var/www/html/uploads
# RUN chown -R www-data:www-data /var/www/html
EXPOSE 80

CMD ["apache2-foreground"]

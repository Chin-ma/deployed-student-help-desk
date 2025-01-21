FROM php:8.1-apache

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    &&  chown -R 755 /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip mysqli pdo pdo_mysql \
    && a2enmod rewrite

# Existing instructions...
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80

CMD ["apache2-foreground"]

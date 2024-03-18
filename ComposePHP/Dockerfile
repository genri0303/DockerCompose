FROM php:8.1-apache

# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./src /var/www/html

WORKDIR /var/www/html

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

CMD ["apache2-foreground"]
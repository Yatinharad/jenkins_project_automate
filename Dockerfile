# Use the official PHP image as a base
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Install necessary PHP extensions and other dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Ensure the permissions are correct
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
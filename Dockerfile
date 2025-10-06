# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy your PHP code into the Apache web root
COPY api.php /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default)
EXPOSE 80

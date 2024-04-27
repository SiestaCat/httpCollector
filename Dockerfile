# Use the official image from Docker Hub
FROM php:7.4-apache

# Copy your PHP application files to the Apache server directory
COPY src/ /var/www/html/

# Expose port 80 to access the server
EXPOSE 80

# Start Apache server in the foreground
CMD ["apache2-foreground"]

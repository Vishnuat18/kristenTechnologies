FROM php:8.2-apache

# Install PostgreSQL client libraries and enable pdo_pgsql extension
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache rewrite module for handling .htaccess rules
RUN a2enmod rewrite

# Enable AllowOverride All to allow .htaccess custom routing/redirect rules
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy application source code
COPY . /var/www/html/

# Set appropriate permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Expose Apache default port
EXPOSE 80

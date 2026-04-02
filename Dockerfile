FROM php:8.2-apache

WORKDIR /var/www/html

# Enable Apache rewrite for .htaccess rules (sitemap.xml -> sitemap.php)
RUN a2enmod rewrite

# Allow .htaccess overrides in document root
COPY docker/apache-override.conf /etc/apache2/conf-available/zzz-override.conf
RUN a2enconf zzz-override

# Copy app source
COPY . /var/www/html

EXPOSE 80

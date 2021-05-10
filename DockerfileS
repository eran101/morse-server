FROM  php:7.4-apache
COPY ./server /var/www/html
RUN chown -R www-data:www-data /var/www
CMD ["apache2-foreground"]
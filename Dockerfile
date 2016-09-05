FROM eboraas/apache-php
COPY . /var/www/html
COPY 000-default.conf /etc/apache2/sites-available/
COPY php.ini /etc/php5/apache2/

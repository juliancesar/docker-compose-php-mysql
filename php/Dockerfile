FROM php
ADD app /app
ADD framework /framework
ADD aws-sdk /aws-sdk
EXPOSE 8000

RUN docker-php-ext-install pdo_mysql json 
RUN pecl install redis && docker-php-ext-enable redis 
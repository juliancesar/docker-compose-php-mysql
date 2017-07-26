FROM php
ADD app /app
EXPOSE 8000

RUN docker-php-ext-install pdo_mysql json

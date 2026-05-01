FROM php:8.3.21-zts-alpine3.21

RUN docker-php-ext-install mysqli

WORKDIR /app

COPY . /app

EXPOSE 8054

CMD ["php", "-S", "0.0.0.0:8054", "-t", "/app"]

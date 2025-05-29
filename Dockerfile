FROM php:8.3.21-zts-alpine3.21

# Install mysqli extension for MariaDB/MySQL support
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /app

# Copy the application code into the container
COPY . /app

# Expose the port your PHP server will run on
EXPOSE 8054

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8054", "-t", "/app"]

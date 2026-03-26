FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    zip \
    libicu-dev \
    libzip-dev \
    git \
    curl

# Install PHP extensions required for your app
RUN docker-php-ext-install intl zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy Laravel project
COPY . .

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Expose port
EXPOSE 8080

# Start Laravel with PHP built-in server
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8080} -t public"]
FROM php:8.2-cli

# Install PHP extensions needed for your Laravel app
RUN apt-get update && apt-get install -y \
    unzip \
    zip \
    libicu-dev \
    libzip-dev \
    git \
    curl

RUN docker-php-ext-install intl zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Expose port
EXPOSE 8080

# Use PHP built-in server pointing to Laravel's public folder
CMD php -S 0.0.0.0:8080 -t public
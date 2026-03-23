FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    zip \
    libzip-dev \
    libicu-dev \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install intl zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate key (optional if already set)
RUN php artisan key:generate || true

# Expose port
EXPOSE 8080

# Start Laravel
CMD php -S 0.0.0.0:8080 -t public
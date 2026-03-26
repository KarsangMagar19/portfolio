FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    zip \
    libicu-dev \
    libzip-dev \
    git \
    curl \
    && docker-php-ext-install intl zip pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy Laravel project
COPY . .

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Clear and cache configs for production
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan cache:clear

# Expose port 8080
EXPOSE 8080

# Start Laravel using built-in server
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
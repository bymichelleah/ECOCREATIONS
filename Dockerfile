FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libsodium-dev \
    libpq-dev \
    default-mysql-client \
    default-libmysqlclient-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_pgsql pdo_mysql mbstring exif pcntl bcmath gd zip sodium

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Node.js
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash && \
    apt-get update && apt-get install -y nodejs

# Directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos
COPY . .

# Instalar dependencias
RUN composer install
RUN npm install && npm run build

# Limpiar cachés
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# CMD corregido
CMD ["sh", "-c", "php artisan config:cache && php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=80"]


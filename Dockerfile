# 1. Usar imagen oficial de PHP con servidor Apache
FROM php:8.2-apache

# 2. Instalar dependencias del sistema requeridas por Laravel y Composer
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

# 3. Limpiar caché para optimizar el tamaño de la imagen
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# 4. Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# 5. Habilitar mod_rewrite de Apache (VITAL para que funcionen las rutas de Laravel)
RUN a2enmod rewrite

# 6. Cambiar la carpeta raíz de Apache a la carpeta "public" de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 7. Copiar todos los archivos de tu proyecto al contenedor
COPY . /var/www/html

# 8. Descargar e instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 9. Instalar las dependencias de Laravel (ignorando las de desarrollo)
RUN composer install --no-dev --optimize-autoloader

# 10. Dar permisos especiales a las carpetas que Laravel necesita modificar
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 11. Exponer el puerto 80 para la web
EXPOSE 80

# 12. Iniciar el servidor Apache
CMD ["apache2-foreground"]
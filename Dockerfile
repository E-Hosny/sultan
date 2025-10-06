# استخدام PHP 8.2 مع Apache
FROM php:8.2-apache

# تثبيت التبعيات المطلوبة
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# تنظيف cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# تثبيت PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تفعيل mod_rewrite
RUN a2enmod rewrite

# نسخ ملفات المشروع
COPY . /var/www/html

# تعيين الصلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# تثبيت dependencies
RUN composer install --no-dev --optimize-autoloader

# بناء assets
RUN npm install && npm run build

# تعيين متغيرات البيئة
ENV APP_ENV=production
ENV APP_DEBUG=false

# إنشاء ملف .env للإنتاج
RUN echo "APP_NAME=Laravel" > .env \
    && echo "APP_ENV=production" >> .env \
    && echo "APP_KEY=" >> .env \
    && echo "APP_DEBUG=false" >> .env \
    && echo "APP_URL=\${APP_URL}" >> .env \
    && echo "" >> .env \
    && echo "LOG_CHANNEL=stack" >> .env \
    && echo "LOG_DEPRECATIONS_CHANNEL=null" >> .env \
    && echo "LOG_LEVEL=error" >> .env \
    && echo "" >> .env \
    && echo "DB_CONNECTION=sqlite" >> .env \
    && echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> .env \
    && echo "" >> .env \
    && echo "BROADCAST_DRIVER=log" >> .env \
    && echo "CACHE_DRIVER=file" >> .env \
    && echo "FILESYSTEM_DISK=local" >> .env \
    && echo "QUEUE_CONNECTION=sync" >> .env \
    && echo "SESSION_DRIVER=file" >> .env \
    && echo "SESSION_LIFETIME=120" >> .env

# إنشاء قاعدة البيانات
RUN touch /var/www/html/database/database.sqlite

# تشغيل migrations
RUN php artisan migrate --force

# تنظيف cache
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# تعيين DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# تعيين port
EXPOSE 80

# تشغيل Apache
CMD ["apache2-foreground"]

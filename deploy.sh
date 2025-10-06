#!/bin/bash

# سكريبت النشر لـ Render.com

echo "🚀 بدء عملية النشر..."

# تثبيت التبعيات
echo "📦 تثبيت Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# تثبيت Node.js dependencies
echo "📦 تثبيت Node.js dependencies..."
npm install

# بناء assets
echo "🔨 بناء assets..."
npm run build

# إنشاء قاعدة البيانات إذا لم تكن موجودة
if [ ! -f "database/database.sqlite" ]; then
    echo "🗄️ إنشاء قاعدة البيانات..."
    touch database/database.sqlite
fi

# تشغيل migrations
echo "🔄 تشغيل migrations..."
php artisan migrate --force

# تنظيف cache
echo "🧹 تنظيف cache..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# تعيين الصلاحيات
echo "🔐 تعيين الصلاحيات..."
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

echo "✅ تم الانتهاء من عملية النشر!"

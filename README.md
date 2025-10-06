# سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة

موقع إلكتروني فاخر لسلطان المسعري، خبير تقييم المجوهرات والأحجار الكريمة.

## الميزات

- ✅ تصميم فاخر ومريح مع ألوان ذهبية دافئة
- ✅ شريط تنقل جانبي يعمل على الهواتف المحمولة
- ✅ تأثيرات بصرية متقدمة ورسوم متحركة
- ✅ استجابة مثالية على جميع الأجهزة
- ✅ عرض الخدمات والاستشارات بشكل واضح
- ✅ أزرار تواصل تفاعلية

## النشر على Render.com

### المتطلبات

- حساب على Render.com
- مستودع Git (GitHub/GitLab/Bitbucket)
- Laravel 12
- PHP 8.2+
- Node.js 18+

### خطوات النشر

1. **رفع الكود إلى Git**
   ```bash
   git add .
   git commit -m "Add deployment files"
   git push origin main
   ```

2. **إنشاء خدمة جديدة على Render**
   - اذهب إلى [Render.com](https://render.com)
   - انقر على "New +" ثم "Web Service"
   - اربط مستودع Git الخاص بك

3. **إعدادات النشر**
   - **Build Command**: `./deploy.sh`
   - **Start Command**: `php artisan serve --host=0.0.0.0 --port=$PORT`
   - **Environment**: `PHP`

4. **متغيرات البيئة**
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=base64:YOUR_APP_KEY_HERE
   DB_CONNECTION=sqlite
   DB_DATABASE=/opt/render/project/src/database/database.sqlite
   ```

5. **تشغيل النشر**
   - انقر على "Create Web Service"
   - انتظر اكتمال عملية البناء والنشر

### ملفات النشر المطلوبة

- `Dockerfile` - إعدادات Docker للنشر
- `render.yaml` - إعدادات Render
- `Procfile` - أوامر تشغيل التطبيق
- `deploy.sh` - سكريبت النشر
- `.dockerignore` - ملفات مستبعدة من Docker

## التطوير المحلي

### المتطلبات
- PHP 8.2+
- Composer
- Node.js 18+
- SQLite

### التثبيت
```bash
# تثبيت التبعيات
composer install
npm install

# إنشاء ملف البيئة
cp .env.example .env

# إنشاء مفتاح التطبيق
php artisan key:generate

# إنشاء قاعدة البيانات
touch database/database.sqlite

# تشغيل migrations
php artisan migrate

# بناء assets
npm run build

# تشغيل الخادم
php artisan serve
```

## البنية

```
sultan/
├── app/                 # كود التطبيق
├── resources/
│   ├── views/          # ملفات Blade
│   ├── css/            # ملفات CSS
│   └── js/             # ملفات JavaScript
├── public/             # الملفات العامة
├── routes/             # ملفات التوجيه
├── database/           # قاعدة البيانات
├── Dockerfile          # إعدادات Docker
├── render.yaml         # إعدادات Render
└── deploy.sh           # سكريبت النشر
```

## الدعم

للدعم والاستفسارات، يرجى التواصل مع:
- البريد الإلكتروني: sultan@example.com
- واتساب: +966500000000

## الترخيص

هذا المشروع مرخص تحت رخصة MIT.
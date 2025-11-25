<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,500,600,700|inter:300,400,500,600|tajawal:400,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

            <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Tajawal', 'Inter', sans-serif;
            background: linear-gradient(135deg, #0A1628 0%, #1a2942 50%, #0f1d35 100%);
            color: #F5F5F0;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Decorative Background Elements */
        .bg-decoration {
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.05;
            pointer-events: none;
            z-index: 0;
        }
        
        .bg-decoration-1 {
            top: -10%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: #C9A961;
        }
        
        .bg-decoration-2 {
            bottom: -10%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: #8B7355;
        }
        
        .bg-decoration-3 {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            background: #D4B76E;
        }
        
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }
        
        /* Navigation */
        .navbar {
            padding: 1.5rem 0;
            position: sticky;
            top: 0;
            background: rgba(10, 22, 40, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(201, 169, 97, 0.1);
            z-index: 100;
        }
        
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #C9A961;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .navbar-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        
        .nav-link {
            color: #F5F5F0;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 8px;
        }
        
        .nav-link:hover {
            color: #C9A961;
            background: rgba(201, 169, 97, 0.1);
        }
        
        .nav-link-switch {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border: 1px solid rgba(201, 169, 97, 0.3);
            border-radius: 8px;
            color: #C9A961;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .nav-link-switch:hover {
            border-color: #C9A961;
            background: rgba(201, 169, 97, 0.1);
        }
        
        /* Hero Section */
        .hero {
            padding: 6rem 0;
            text-align: center;
        }
        
        .hero-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, rgba(201, 169, 97, 0.2), rgba(212, 183, 110, 0.1));
            border: 2px solid rgba(201, 169, 97, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #C9A961;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: #C9A961;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(201, 169, 97, 0.3);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            color: #B8C5D6;
            margin-bottom: 1rem;
            font-weight: 500;
        }
        
        .hero-description {
            font-size: 1.1rem;
            color: #B8C5D6;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 1rem 2.5rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
            font-size: 1.1rem;
        }
        
        .btn-primary {
            background: #C9A961;
            color: #0A1628;
            box-shadow: 0 10px 30px rgba(201, 169, 97, 0.3);
        }
        
        .btn-primary:hover {
            background: #D4B76E;
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(201, 169, 97, 0.4);
        }
        
        .btn-secondary {
            background: transparent;
            color: #C9A961;
            border: 2px solid rgba(201, 169, 97, 0.5);
        }
        
        .btn-secondary:hover {
            background: rgba(201, 169, 97, 0.1);
            border-color: #C9A961;
        }
        
        /* Section Title */
        .section {
            padding: 5rem 0;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #C9A961;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #C9A961, transparent);
            margin: 1rem auto 0;
        }
        
        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .service-card {
            background: linear-gradient(135deg, rgba(26, 41, 66, 0.8), rgba(15, 29, 53, 0.8));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(201, 169, 97, 0.2);
            border-radius: 20px;
            padding: 2.5rem;
            transition: all 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-color: rgba(201, 169, 97, 0.5);
            box-shadow: 0 20px 60px rgba(201, 169, 97, 0.2);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background: rgba(201, 169, 97, 0.1);
            border: 2px solid rgba(201, 169, 97, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #C9A961;
            margin-bottom: 1.5rem;
        }
        
        .service-card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: #C9A961;
            margin-bottom: 1rem;
        }
        
        .service-items {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .service-item {
            background: rgba(201, 169, 97, 0.05);
            border: 1px solid rgba(201, 169, 97, 0.15);
            border-radius: 12px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .service-item:hover {
            background: rgba(201, 169, 97, 0.1);
            border-color: rgba(201, 169, 97, 0.3);
            transform: translateX(-5px);
        }
        
        .service-item-title {
            font-weight: 600;
            color: #F5F5F0;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .service-item-price {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #C9A961;
            margin: 0.5rem 0;
        }
        
        .service-item-description {
            color: #B8C5D6;
            font-size: 0.9rem;
        }
        
        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, rgba(26, 41, 66, 0.6), rgba(15, 29, 53, 0.6));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(201, 169, 97, 0.2);
            border-radius: 20px;
            padding: 3rem;
            margin: 4rem 0;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }
        
        .stat-item {
            padding: 1rem;
        }
        
        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: #C9A961;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: #B8C5D6;
            font-size: 1.1rem;
        }
        
        /* Contact Section */
        .contact-card {
            background: linear-gradient(135deg, rgba(26, 41, 66, 0.8), rgba(15, 29, 53, 0.8));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(201, 169, 97, 0.2);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .contact-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #C9A961;
            margin-bottom: 1.5rem;
        }
        
        .contact-description {
            color: #B8C5D6;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        /* Footer */
        .footer {
            padding: 3rem 0;
            text-align: center;
            border-top: 1px solid rgba(201, 169, 97, 0.1);
            margin-top: 5rem;
        }
        
        .footer-text {
            color: #B8C5D6;
            font-size: 0.9rem;
        }
        
        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: 2px solid rgba(201, 169, 97, 0.3);
            color: #C9A961;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .navbar-links {
                display: none;
                position: fixed;
                top: 0;
                right: 0;
                width: 80%;
                height: 100vh;
                background: rgba(10, 22, 40, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 4rem 2rem;
                gap: 1rem;
                border-left: 1px solid rgba(201, 169, 97, 0.2);
            }
            
            .navbar-links.active {
                display: flex;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
        }
            </style>
    </head>
<body>
    <!-- Background Decorations -->
    <div class="bg-decoration bg-decoration-1"></div>
    <div class="bg-decoration bg-decoration-2"></div>
    <div class="bg-decoration bg-decoration-3"></div>
    
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="#home" class="navbar-brand">
                    <i class="fas fa-gem"></i>
                    سلطان المسعري
                </a>
                
                <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="navbar-links" id="navbarLinks">
                    <div style="position: relative;">
                        <button onclick="toggleTemplateMenu()" class="nav-link-switch" style="cursor: pointer;">
                            <i class="fas fa-palette"></i>
                            اختر القالب
                            <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i>
                        </button>
                        <div id="templateMenu" style="display: none; position: absolute; top: 120%; left: 0; background: rgba(26, 41, 66, 0.95); backdrop-filter: blur(20px); border: 1px solid rgba(201, 169, 97, 0.3); border-radius: 12px; padding: 0.5rem; min-width: 200px; z-index: 1000;">
                            <a href="{{ route('switch.template', 'home') }}" style="display: block; padding: 0.75rem 1rem; color: #F5F5F0; text-decoration: none; border-radius: 8px; transition: all 0.3s; font-weight: 500;">
                                <i class="fas fa-star"></i> القالب الكلاسيكي
                            </a>
                            <a href="{{ route('switch.template', 'laravel') }}" style="display: block; padding: 0.75rem 1rem; color: #C9A961; text-decoration: none; border-radius: 8px; transition: all 0.3s; font-weight: 600; background: rgba(201, 169, 97, 0.1);">
                                <i class="fas fa-gem"></i> القالب الفاخر
                            </a>
                            <a href="{{ route('switch.template', 'modern') }}" style="display: block; padding: 0.75rem 1rem; color: #F5F5F0; text-decoration: none; border-radius: 8px; transition: all 0.3s; font-weight: 500;">
                                <i class="fas fa-rocket"></i> القالب العصري
                            </a>
                            <a href="{{ route('switch.template', 'minimal') }}" style="display: block; padding: 0.75rem 1rem; color: #F5F5F0; text-decoration: none; border-radius: 8px; transition: all 0.3s; font-weight: 500;">
                                <i class="fas fa-circle"></i> القالب البسيط
                            </a>
                            <a href="{{ route('switch.template', 'minimal-classic') }}" style="display: block; padding: 0.75rem 1rem; color: #F5F5F0; text-decoration: none; border-radius: 8px; transition: all 0.3s; font-weight: 500;">
                                <i class="fas fa-palette"></i> القالب البسيط الكلاسيكي
                            </a>
                        </div>
                    </div>
                    <a href="#home" class="nav-link">الرئيسية</a>
                    <a href="#services" class="nav-link">الخدمات</a>
                    <a href="#contact" class="nav-link">التواصل</a>
                </div>
            </div>
        </div>
                </nav>
    
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-icon">
                <i class="fas fa-gem"></i>
            </div>
            <h1 class="hero-title">سلطان المسعري</h1>
            <p class="hero-subtitle">خبير تقييم المجوهرات والأحجار الكريمة</p>
            <p class="hero-description">استشارات سريعة وتقارير احترافية معتمدة لتقييم مجوهراتك وأحجارك الكريمة بدقة وشفافية</p>
            <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">
                    اكتشف خدماتي
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contact" class="btn btn-secondary">
                    تواصل معي
                    <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <h2 class="section-title">الاستشارات والتقييم</h2>
            
            <div class="services-grid">
                <!-- Instant Consultations -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="service-card-title">الاستشارات الفورية</h3>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-item-title">استشارة فورية (20 دقيقة)</div>
                            <div class="service-item-price">390 ر.س</div>
                            <div class="service-item-description">تقييم سريع عبر الصور</div>
                        </div>
                        <div class="service-item">
                            <div class="service-item-title">استشارة موسعة (60 دقيقة)</div>
                            <div class="service-item-price">950 ر.س</div>
                            <div class="service-item-description">تحليل شامل ومفصل</div>
                        </div>
                    </div>
                </div>
                
                <!-- Evaluation & Reports -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3 class="service-card-title">التقييم والتقارير</h3>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-item-title">تقييم مبدئي بالصور</div>
                            <div class="service-item-price">750 ر.س</div>
                            <div class="service-item-description">تقرير مبدئي مع التوصيات</div>
                        </div>
                        <div class="service-item">
                            <div class="service-item-title">دفعة مقدمة لتقرير رسمي</div>
                            <div class="service-item-price">اتصل للتفاصيل</div>
                            <div class="service-item-description">تقرير رسمي معتمد</div>
                        </div>
                    </div>
                </div>
                </div>
            
            <h2 class="section-title">بناء البراند</h2>
            
            <div class="services-grid">
                <!-- Brand Building -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="service-card-title">خدمات تطوير العلامة التجارية</h3>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-item-title">جلسة تعريفية (20 دقيقة)</div>
                            <div class="service-item-price">مجاناً</div>
                            <div class="service-item-description">استشارة أولية مجانية</div>
                        </div>
                        <div class="service-item">
                            <div class="service-item-title">استشارة شاملة (90 دقيقة)</div>
                            <div class="service-item-price">1,500 ر.س</div>
                            <div class="service-item-description">خطة تطوير متكاملة</div>
                        </div>
                        <div class="service-item">
                            <div class="service-item-title">باقة تطوير كاملة (شهر)</div>
                            <div class="service-item-price">اتصل للتفاصيل</div>
                            <div class="service-item-description">متابعة وتطوير مستمر</div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Services -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="service-card-title">خدمات إضافية</h3>
                    <div class="service-items">
                        <div class="service-item">
                            <div class="service-item-title">استشارة تسعير</div>
                            <div class="service-item-price">500 ر.س</div>
                            <div class="service-item-description">تحديد الأسعار المناسبة</div>
                        </div>
                        <div class="service-item">
                            <div class="service-item-title">تدريب فريق العمل</div>
                            <div class="service-item-price">اتصل للتفاصيل</div>
                            <div class="service-item-description">تأهيل احترافي</div>
                        </div>
                    </div>
                </div>
        </div>

            <!-- Stats -->
            <div class="stats">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">سنوات خبرة</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">تقييم ناجح</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">رضا العملاء</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">دعم متواصل</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">تواصل معي</h2>
            <div class="contact-card">
                <div class="service-icon" style="margin: 0 auto 1.5rem;">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 class="contact-title">احجز استشارتك الآن</h3>
                <p class="contact-description">
                    للحصول على استشارة احترافية أو حجز موعد، يرجى التواصل معي مباشرة
                </p>
                <div class="hero-buttons">
                    <a href="tel:+966500000000" class="btn btn-primary">
                        <i class="fas fa-phone"></i>
                        اتصل الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="btn btn-secondary" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        واتساب
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">
                © 2024 سلطان المسعري - جميع الحقوق محفوظة
            </p>
        </div>
    </footer>
    
    <script>
        function toggleMobileMenu() {
            const navbarLinks = document.getElementById('navbarLinks');
            navbarLinks.classList.toggle('active');
        }
        
        function toggleTemplateMenu() {
            const menu = document.getElementById('templateMenu');
            menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
        }
        
        // Close template menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('templateMenu');
            const button = event.target.closest('button');
            
            if (!button || !button.onclick || button.onclick.toString().indexOf('toggleTemplateMenu') === -1) {
                if (menu) menu.style.display = 'none';
            }
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navbarLinks').classList.remove('active');
            });
        });
        
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    </body>
</html>

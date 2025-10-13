<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=ibm-plex-sans-arabic:400,500,600,700|inter:300,400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #F8F9FA;
            --secondary: #E9ECEF;
            --accent: #D4AF37;
            --text-primary: #2D3748;
            --text-secondary: #718096;
            --text-light: #A0AEC0;
            --border: #E2E8F0;
            --shadow: rgba(0, 0, 0, 0.1);
            --shadow-hover: rgba(0, 0, 0, 0.15);
            --gradient: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
        }
        
        body {
            font-family: 'IBM Plex Sans Arabic', 'Inter', sans-serif;
            background: var(--primary);
            color: var(--text-primary);
            line-height: 1.7;
            font-weight: 400;
        }
        
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Navigation */
        .navbar {
            background: rgba(248, 249, 250, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 0;
        }
        
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-brand {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .navbar-brand i {
            color: var(--accent);
            font-size: 1.25rem;
        }
        
        .navbar-links {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        
        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }
        
        .nav-link:hover {
            color: var(--text-primary);
            background: var(--secondary);
        }
        
        .template-selector {
            position: relative;
        }
        
        .template-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            background: white;
            color: var(--text-primary);
            border: 1px solid var(--border);
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 0.95rem;
        }
        
        .template-btn:hover {
            border-color: var(--accent);
            box-shadow: 0 2px 8px var(--shadow);
        }
        
        .template-dropdown {
            position: absolute;
            top: 120%;
            left: 0;
            background: white;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 0.5rem;
            min-width: 220px;
            display: none;
            box-shadow: 0 10px 40px var(--shadow);
        }
        
        .template-dropdown.active {
            display: block;
            animation: fadeIn 0.2s ease;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .template-option {
            display: block;
            padding: 0.75rem 1rem;
            color: var(--text-secondary);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s ease;
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .template-option:hover {
            background: var(--secondary);
            color: var(--text-primary);
        }
        
        .template-option.active {
            background: var(--accent);
            color: white;
        }
        
        .template-option i {
            width: 16px;
            margin-left: 0.5rem;
        }
        
        /* Hero Section */
        .hero {
            padding: 6rem 0;
            text-align: center;
            background: var(--gradient);
        }
        
        .hero-badge {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background: white;
            color: var(--text-secondary);
            border: 1px solid var(--border);
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }
        
        .hero-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 2rem;
            background: white;
            border: 2px solid var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--accent);
            box-shadow: 0 8px 32px var(--shadow);
        }
        
        .hero-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
            font-weight: 500;
        }
        
        .hero-description {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 1rem 2.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            font-family: 'IBM Plex Sans Arabic', sans-serif;
        }
        
        .btn-primary {
            background: var(--text-primary);
            color: white;
            box-shadow: 0 4px 16px var(--shadow);
        }
        
        .btn-primary:hover {
            background: #1A202C;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px var(--shadow-hover);
        }
        
        .btn-secondary {
            background: white;
            color: var(--text-primary);
            border: 1px solid var(--border);
        }
        
        .btn-secondary:hover {
            border-color: var(--accent);
            box-shadow: 0 4px 16px var(--shadow);
        }
        
        /* Section */
        .section {
            padding: 5rem 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-badge {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background: var(--secondary);
            color: var(--text-secondary);
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .section-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }
        
        .section-description {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .service-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 2.5rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px var(--shadow);
            border-color: var(--accent);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: var(--secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--accent);
            margin-bottom: 1.5rem;
        }
        
        .service-card-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
        }
        
        .service-items {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .service-item {
            background: var(--primary);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .service-item:hover {
            background: white;
            border-color: var(--accent);
            transform: translateX(-5px);
        }
        
        .service-item-title {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        
        .service-item-price {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent);
            margin: 0.5rem 0;
        }
        
        .service-item-description {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        /* Stats Section */
        .stats {
            background: white;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 3rem;
            margin: 4rem 0;
            box-shadow: 0 8px 32px var(--shadow);
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
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 1rem;
            font-weight: 500;
        }
        
        /* Contact Section */
        .contact-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 8px 32px var(--shadow);
        }
        
        .contact-icon {
            width: 80px;
            height: 80px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--accent);
            margin: 0 auto 2rem;
        }
        
        .contact-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1.5rem;
        }
        
        .contact-description {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }
        
        .contact-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        /* Footer */
        .footer {
            padding: 3rem 0;
            text-align: center;
            border-top: 1px solid var(--border);
            margin-top: 5rem;
            background: var(--primary);
        }
        
        .footer-text {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: white;
            border: 1px solid var(--border);
            color: var(--text-primary);
            font-size: 1.25rem;
            padding: 0.75rem 1rem;
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
            
            .section-title {
                font-size: 2rem;
            }
            
            .navbar-links {
                display: none;
                position: fixed;
                top: 0;
                right: 0;
                width: 85%;
                height: 100vh;
                background: rgba(248, 249, 250, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 4rem 2rem;
                gap: 0.5rem;
                border-left: 1px solid var(--border);
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
            
            .hero-buttons,
            .contact-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .hero {
                padding: 4rem 0 3rem;
            }
            
            .hero-icon {
                width: 100px;
                height: 100px;
                font-size: 2.5rem;
            }
            
            .template-dropdown {
                left: auto;
                right: 0;
            }
        }
        
        /* Subtle animations */
        .service-card,
        .stats,
        .contact-card {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 0.6s ease forwards;
        }
        
        .service-card:nth-child(1) { animation-delay: 0.1s; }
        .service-card:nth-child(2) { animation-delay: 0.2s; }
        .service-card:nth-child(3) { animation-delay: 0.3s; }
        .service-card:nth-child(4) { animation-delay: 0.4s; }
        
        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Smooth focus states */
        .btn:focus,
        .nav-link:focus,
        .template-btn:focus {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
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
                    <div class="template-selector">
                        <button class="template-btn" onclick="toggleTemplateDropdown()">
                            <i class="fas fa-palette"></i>
                            اختر القالب
                            <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i>
                        </button>
                        <div class="template-dropdown" id="templateDropdown">
                            <a href="{{ route('switch.template', 'home') }}" class="template-option">
                                <i class="fas fa-star"></i> القالب الكلاسيكي
                            </a>
                            <a href="{{ route('switch.template', 'laravel') }}" class="template-option">
                                <i class="fas fa-gem"></i> القالب الفاخر
                            </a>
                            <a href="{{ route('switch.template', 'modern') }}" class="template-option">
                                <i class="fas fa-rocket"></i> القالب العصري
                            </a>
                            <a href="{{ route('switch.template', 'minimal') }}" class="template-option active">
                                <i class="fas fa-circle"></i> القالب البسيط
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
            <div class="hero-badge">
                <i class="fas fa-certificate"></i>
                خبير معتمد في تقييم المجوهرات
            </div>
            <div class="hero-icon">
                <i class="fas fa-gem"></i>
            </div>
            <h1 class="hero-title">سلطان المسعري</h1>
            <p class="hero-subtitle">خبير تقييم المجوهرات والأحجار الكريمة</p>
            <p class="hero-description">
                استشارات سريعة وتقارير احترافية معتمدة لتقييم مجوهراتك وأحجارك الكريمة بدقة وشفافية عالية
            </p>
            <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">
                    <i class="fas fa-arrow-down"></i>
                    اكتشف خدماتي
                </a>
                <a href="#contact" class="btn btn-secondary">
                    <i class="fas fa-phone"></i>
                    تواصل معي
                </a>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-briefcase"></i>
                    خدماتنا المميزة
                </div>
                <h2 class="section-title">الاستشارات والتقييم</h2>
                <p class="section-description">
                    نقدم مجموعة شاملة من الخدمات الاحترافية لتقييم المجوهرات والأحجار الكريمة
                </p>
            </div>
            
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
                
                <!-- Brand Building -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="service-card-title">بناء البراند</h3>
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
            </div>
            
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-plus"></i>
                    المزيد من الخدمات
                </div>
                <h2 class="section-title">خدمات إضافية</h2>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="service-card-title">خدمات متنوعة</h3>
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
            <div class="section-header">
                <div class="section-badge">
                    <i class="fas fa-envelope"></i>
                    تواصل معنا
                </div>
                <h2 class="section-title">احجز استشارتك الآن</h2>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 class="contact-title">نحن هنا لخدمتك</h3>
                <p class="contact-description">
                    للحصول على استشارة احترافية أو حجز موعد، يرجى التواصل معي مباشرة عبر الهاتف أو واتساب
                </p>
                <div class="contact-buttons">
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
        // Toggle mobile menu
        function toggleMobileMenu() {
            const navbarLinks = document.getElementById('navbarLinks');
            navbarLinks.classList.toggle('active');
        }
        
        // Toggle template dropdown
        function toggleTemplateDropdown() {
            const dropdown = document.getElementById('templateDropdown');
            dropdown.classList.toggle('active');
        }
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const templateSelector = document.querySelector('.template-selector');
            const dropdown = document.getElementById('templateDropdown');
            
            if (!templateSelector.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-link, .template-option').forEach(link => {
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
        
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);
        
        // Observe animated elements
        document.querySelectorAll('.service-card, .stats, .contact-card').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cairo:400,500,600,700,800|poppins:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #8B5CF6;
            --secondary: #EC4899;
            --accent: #F59E0B;
            --dark: #1F2937;
            --light: #F3F4F6;
            --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        body {
            font-family: 'Cairo', 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #1e1b4b 100%);
            color: #F3F4F6;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }
        
        .animated-bg::before,
        .animated-bg::after {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: float 20s ease-in-out infinite;
        }
        
        .animated-bg::before {
            background: var(--gradient-1);
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }
        
        .animated-bg::after {
            background: var(--gradient-2);
            bottom: -100px;
            left: -100px;
            animation-delay: 10s;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(100px, -100px) scale(1.1); }
            66% { transform: translate(-100px, 100px) scale(0.9); }
        }
        
        /* Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            opacity: 0.3;
            animation: rise 15s linear infinite;
        }
        
        @keyframes rise {
            0% {
                transform: translateY(100vh) scale(0);
                opacity: 0;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                transform: translateY(-100vh) scale(1);
                opacity: 0;
            }
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
            background: rgba(31, 27, 75, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(139, 92, 246, 0.2);
            z-index: 100;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-brand {
            font-family: 'Cairo', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .navbar-brand i {
            background: var(--gradient-2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .navbar-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        
        .nav-link {
            color: #F3F4F6;
            text-decoration: none;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-1);
            opacity: 0;
            transition: opacity 0.3s;
            z-index: -1;
        }
        
        .nav-link:hover::before {
            opacity: 1;
        }
        
        .nav-link:hover {
            color: white;
            transform: translateY(-2px);
        }
        
        .template-selector {
            position: relative;
        }
        
        .template-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--gradient-1);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Cairo', sans-serif;
        }
        
        .template-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
        }
        
        .template-dropdown {
            position: absolute;
            top: 120%;
            left: 0;
            background: rgba(31, 27, 75, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(139, 92, 246, 0.3);
            border-radius: 15px;
            padding: 0.5rem;
            min-width: 200px;
            display: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }
        
        .template-dropdown.active {
            display: block;
            animation: slideDown 0.3s ease;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .template-option {
            display: block;
            padding: 0.75rem 1rem;
            color: #F3F4F6;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s;
            font-weight: 500;
        }
        
        .template-option:hover {
            background: var(--gradient-1);
            color: white;
        }
        
        .template-option.active {
            background: var(--gradient-2);
            color: white;
        }
        
        /* Hero Section */
        .hero {
            padding: 8rem 0 6rem;
            text-align: center;
            position: relative;
        }
        
        .hero-badge {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            background: var(--gradient-1);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .hero-icon {
            width: 150px;
            height: 150px;
            margin: 0 auto 2rem;
            background: var(--gradient-1);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
            transform: rotate(45deg);
            box-shadow: 0 20px 60px rgba(139, 92, 246, 0.4);
            animation: rotate 20s linear infinite;
        }
        
        .hero-icon i {
            transform: rotate(-45deg);
        }
        
        @keyframes rotate {
            from { transform: rotate(45deg); }
            to { transform: rotate(405deg); }
        }
        
        .hero-title {
            font-family: 'Cairo', sans-serif;
            font-size: 4rem;
            font-weight: 800;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.8rem;
            color: #EC4899;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .hero-description {
            font-size: 1.2rem;
            color: #D1D5DB;
            margin-bottom: 3rem;
            max-width: 700px;
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
            padding: 1.2rem 3rem;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            font-family: 'Cairo', sans-serif;
        }
        
        .btn-gradient {
            background: var(--gradient-1);
            color: white;
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
        }
        
        .btn-gradient:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(139, 92, 246, 0.6);
        }
        
        .btn-outline {
            background: transparent;
            color: #EC4899;
            border: 2px solid #EC4899;
        }
        
        .btn-outline:hover {
            background: var(--gradient-2);
            color: white;
            border-color: transparent;
            transform: translateY(-5px);
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
            background: rgba(139, 92, 246, 0.2);
            color: #8B5CF6;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .section-title {
            font-family: 'Cairo', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        
        .section-description {
            font-size: 1.2rem;
            color: #D1D5DB;
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
            background: rgba(31, 27, 75, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(139, 92, 246, 0.3);
            border-radius: 25px;
            padding: 2.5rem;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-1);
            opacity: 0;
            transition: opacity 0.4s;
            z-index: -1;
        }
        
        .service-card:hover::before {
            opacity: 0.1;
        }
        
        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            border-color: rgba(139, 92, 246, 0.6);
            box-shadow: 0 30px 80px rgba(139, 92, 246, 0.3);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
        }
        
        .service-card:nth-child(2) .service-icon {
            background: var(--gradient-2);
        }
        
        .service-card:nth-child(3) .service-icon {
            background: var(--gradient-3);
        }
        
        .service-card-title {
            font-family: 'Cairo', sans-serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .service-items {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .service-item {
            background: rgba(139, 92, 246, 0.1);
            border: 1px solid rgba(139, 92, 246, 0.2);
            border-radius: 15px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .service-item:hover {
            background: rgba(139, 92, 246, 0.2);
            border-color: rgba(139, 92, 246, 0.4);
            transform: translateX(-10px);
        }
        
        .service-item-title {
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .service-item-price {
            font-family: 'Cairo', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--gradient-2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0.5rem 0;
        }
        
        .service-item-description {
            color: #D1D5DB;
            font-size: 0.95rem;
        }
        
        /* Stats Section */
        .stats {
            background: var(--gradient-1);
            border-radius: 30px;
            padding: 4rem 3rem;
            margin: 5rem 0;
            box-shadow: 0 30px 80px rgba(139, 92, 246, 0.4);
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
            font-family: 'Cairo', sans-serif;
            font-size: 4rem;
            font-weight: 900;
            color: white;
            margin-bottom: 0.5rem;
            text-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }
        
        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        /* Contact Section */
        .contact-card {
            background: var(--gradient-2);
            border-radius: 30px;
            padding: 4rem 3rem;
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
            box-shadow: 0 30px 80px rgba(236, 72, 153, 0.4);
        }
        
        .contact-icon {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #EC4899;
            margin: 0 auto 2rem;
            box-shadow: 0 10px 40px rgba(255, 255, 255, 0.3);
        }
        
        .contact-title {
            font-family: 'Cairo', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .contact-description {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }
        
        .contact-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-white {
            background: white;
            color: #EC4899;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }
        
        .btn-white:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(255, 255, 255, 0.5);
        }
        
        /* Footer */
        .footer {
            padding: 3rem 0;
            text-align: center;
            border-top: 1px solid rgba(139, 92, 246, 0.2);
            margin-top: 5rem;
        }
        
        .footer-text {
            color: #D1D5DB;
            font-size: 1rem;
        }
        
        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: var(--gradient-1);
            border: none;
            color: white;
            font-size: 1.5rem;
            padding: 0.75rem 1.25rem;
            border-radius: 15px;
            cursor: pointer;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
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
                background: rgba(31, 27, 75, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 4rem 2rem;
                gap: 1rem;
                border-left: 1px solid rgba(139, 92, 246, 0.3);
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
                width: 120px;
                height: 120px;
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    
    <!-- Particles -->
    <div class="particles" id="particles"></div>
    
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
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="template-dropdown" id="templateDropdown">
                            <a href="{{ route('switch.template', 'home') }}" class="template-option">
                                <i class="fas fa-star"></i> القالب الكلاسيكي
                            </a>
                            <a href="{{ route('switch.template', 'laravel') }}" class="template-option">
                                <i class="fas fa-gem"></i> القالب الفاخر
                            </a>
                            <a href="{{ route('switch.template', 'modern') }}" class="template-option active">
                                <i class="fas fa-rocket"></i> القالب العصري
                            </a>
                            <a href="{{ route('switch.template', 'minimal') }}" class="template-option">
                                <i class="fas fa-circle"></i> القالب البسيط
                            </a>
                            <a href="{{ route('switch.template', 'minimal-classic') }}" class="template-option">
                                <i class="fas fa-palette"></i> القالب البسيط الكلاسيكي
                            </a>
                            <a href="{{ route('switch.template', 'emerald-classic') }}" class="template-option">
                                <i class="fas fa-gem"></i> القالب الزمردي الكلاسيكي
                            </a>
                            <a href="{{ route('switch.template', 'royal-classic') }}" class="template-option">
                                <i class="fas fa-crown"></i> القالب الملكي الكلاسيكي
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
                <a href="#services" class="btn btn-gradient">
                    <i class="fas fa-rocket"></i>
                    اكتشف خدماتي
                </a>
                <a href="#contact" class="btn btn-outline">
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
                    <a href="tel:+966500000000" class="btn btn-white">
                        <i class="fas fa-phone"></i>
                        اتصل الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="btn btn-outline" target="_blank">
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
        // Create particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }
        
        createParticles();
        
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
        
        // Parallax effect for hero icon
        document.addEventListener('mousemove', function(e) {
            const heroIcon = document.querySelector('.hero-icon');
            if (heroIcon) {
                const x = (e.clientX / window.innerWidth - 0.5) * 20;
                const y = (e.clientY / window.innerHeight - 0.5) * 20;
                heroIcon.style.transform = `rotate(45deg) translate(${x}px, ${y}px)`;
            }
        });
    </script>
</body>
</html>


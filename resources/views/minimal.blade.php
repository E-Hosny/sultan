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
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Quick Contact Bar */
        .quick-contact-bar {
            background: var(--text-primary);
            color: white;
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 200;
        }
        
        .quick-contact-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .contact-info {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }
        
        .contact-item i {
            color: var(--accent);
            width: 16px;
        }
        
        .contact-item a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .contact-item a:hover {
            color: var(--accent);
        }
        
        .quick-actions {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }
        
        .quick-btn {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .quick-btn.primary {
            background: var(--accent);
            color: white;
        }
        
        .quick-btn.primary:hover {
            background: #B8941F;
            transform: translateY(-1px);
        }
        
        .quick-btn.secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .quick-btn.secondary:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        /* Navigation */
        .navbar {
            background: rgba(248, 249, 250, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
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
        
        /* Main Content - Single Screen Layout */
        .main-content {
            padding: 1rem 0;
            min-height: calc(100vh - 200px);
        }
        
        /* Header Section */
        .header-section {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .header-badge {
            display: inline-block;
            padding: 0.3rem 1rem;
            background: white;
            color: var(--text-secondary);
            border: 1px solid var(--border);
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.8rem;
            margin-bottom: 0.75rem;
        }
        
        .header-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 0.75rem;
            background: white;
            border: 2px solid var(--border);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: var(--accent);
            box-shadow: 0 4px 16px var(--shadow);
        }
        
        .header-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
            line-height: 1.2;
        }
        
        .header-subtitle {
            font-size: 1rem;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .header-description {
            font-size: 0.9rem;
            color: var(--text-secondary);
            max-width: 500px;
            margin: 0 auto 1rem;
            line-height: 1.4;
        }
        
        /* Services Grid */
        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .service-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            text-align: center;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px var(--shadow);
            border-color: var(--accent);
        }
        
        .service-card.featured {
            border: 2px solid var(--accent);
        }
        
        .service-badge {
            position: absolute;
            top: -10px;
            right: 20px;
            background: var(--accent);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 10;
        }
        
        .service-icon {
            width: 50px;
            height: 50px;
            background: var(--secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: var(--accent);
            margin: 0 auto 1rem;
        }
        
        .service-card-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
        }
        
        .service-price {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }
        
        .service-description {
            color: var(--text-secondary);
            font-size: 0.85rem;
            margin-bottom: 1rem;
            line-height: 1.4;
        }
        
        .service-btn {
            display: inline-block;
            padding: 0.75rem 2rem;
            background: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            width: 100%;
            text-align: center;
        }
        
        .service-btn:hover {
            background: #B8941F;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
        }
        
        .service-btn.free {
            background: #28a745;
        }
        
        .service-btn.free:hover {
            background: #218838;
        }
        
        /* Contact Section */
        .contact-section {
            background: white;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 1.5rem;
            text-align: center;
            margin-top: 1rem;
        }
        
        .contact-title {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
        }
        
        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 0.75rem;
            margin: 1rem 0;
        }
        
        .contact-method {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem;
            background: var(--primary);
            border: 1px solid var(--border);
            border-radius: 12px;
            transition: all 0.2s ease;
        }
        
        .contact-method:hover {
            background: white;
            border-color: var(--accent);
        }
        
        .method-icon {
            width: 35px;
            height: 35px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: white;
            flex-shrink: 0;
        }
        
        .method-content h4 {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }
        
        .method-content p {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--accent);
            margin: 0;
        }
        
        .contact-buttons {
            display: flex;
            gap: 0.75rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 1rem;
        }
        
        .btn {
            padding: 1rem 2rem;
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
        
        /* Stats */
        .stats-section {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 1rem;
            margin-top: 1rem;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1rem;
            text-align: center;
        }
        
        .stat-item {
            padding: 0.25rem;
        }
        
        .stat-number {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        /* Footer */
        .footer {
            padding: 1.5rem 0;
            text-align: center;
            border-top: 1px solid var(--border);
            margin-top: 2rem;
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
            .container {
                padding: 0 0.75rem;
            }
            
            .quick-contact-content {
                flex-direction: column;
                gap: 0.75rem;
                text-align: center;
            }
            
            .contact-info {
                justify-content: center;
                gap: 1.5rem;
            }
            
            .quick-actions {
                justify-content: center;
            }
            
            .header-title {
                font-size: 2rem;
            }
            
            .header-subtitle {
                font-size: 1.1rem;
            }
            
            .services-container {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .service-card {
                padding: 1.5rem;
            }
            
            .contact-methods {
                grid-template-columns: 1fr;
            }
            
            .contact-method {
                flex-direction: column;
                text-align: center;
            }
            
            .contact-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
        }
        
        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .header-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .service-price {
                font-size: 1.5rem;
            }
        }
        
        /* Subtle animations */
        .service-card,
        .contact-section,
        .stats-section {
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
        .template-btn:focus {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <!-- Quick Contact Bar -->
    <div class="quick-contact-bar">
        <div class="container">
            <div class="quick-contact-content">
                <div class="contact-info">
                    <span class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+966500000000">+966 50 000 0000</a>
                    </span>
                    <span class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://wa.me/966500000000" target="_blank">واتساب</a>
                    </span>
                </div>
                <div class="quick-actions">
                    <a href="tel:+966500000000" class="quick-btn primary">
                        <i class="fas fa-phone"></i>
                        احجز الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="quick-btn secondary" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        واتساب سريع
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-content">
                <a href="#" class="navbar-brand">
                    <i class="fas fa-gem"></i>
                    سلطان المسعري
                </a>
                
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
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Header Section -->
            <div class="header-section">
                <div class="header-badge">
                    <i class="fas fa-certificate"></i>
                    خبير معتمد في تقييم المجوهرات
                </div>
                <div class="header-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h1 class="header-title">سلطان المسعري</h1>
                <p class="header-subtitle">خبير تقييم المجوهرات والأحجار الكريمة</p>
                <p class="header-description">
                    استشارات سريعة وتقارير احترافية معتمدة لتقييم مجوهراتك وأحجارك الكريمة بدقة وشفافية عالية
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="services-container">
                <!-- الاستشارات الفورية -->
                <div class="service-card featured">
                    <div class="service-badge">الأكثر طلباً</div>
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="service-card-title">الاستشارات الفورية</h3>
                    <div class="service-price">390 ر.س</div>
                    <p class="service-description">استشارة فورية لمدة 20 دقيقة عبر الصور مع تقييم سريع ومفصل</p>
                    <a href="tel:+966500000000" class="service-btn">احجز الآن</a>
                </div>
                
                <!-- التقييم بالصور -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3 class="service-card-title">التقييم بالصور</h3>
                    <div class="service-price">750 ر.س</div>
                    <p class="service-description">تقييم مبدئي شامل بالصور مع تقرير مفصل والتوصيات</p>
                    <a href="tel:+966500000000" class="service-btn">احجز الآن</a>
                </div>
                
                <!-- الاستشارة الشاملة -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="service-card-title">الاستشارة الشاملة</h3>
                    <div class="service-price">1,500 ر.س</div>
                    <p class="service-description">استشارة شاملة لمدة 90 دقيقة مع خطة تطوير متكاملة</p>
                    <a href="tel:+966500000000" class="service-btn">احجز الآن</a>
                </div>
                
                <!-- الاستشارة المجانية -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3 class="service-card-title">جلسة تعريفية</h3>
                    <div class="service-price">مجاناً</div>
                    <p class="service-description">جلسة تعريفية لمدة 20 دقيقة للتعرف على خدماتنا</p>
                    <a href="tel:+966500000000" class="service-btn free">احجز مجاناً</a>
                </div>
            </div>
            
            <!-- Contact Section -->
            <div class="contact-section">
                <h3 class="contact-title">تواصل معنا الآن</h3>
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="method-content">
                            <h4>اتصل مباشرة</h4>
                            <p>+966 50 000 0000</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="method-content">
                            <h4>واتساب سريع</h4>
                            <p>+966 50 000 0000</p>
                        </div>
                    </div>
                </div>
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
            
            <!-- Stats Section -->
            <div class="stats-section">
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
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">
                © 2024 سلطان المسعري - جميع الحقوق محفوظة
            </p>
        </div>
    </footer>
    
    <script>
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
        document.querySelectorAll('.service-card, .contact-section, .stats-section').forEach(el => {
            observer.observe(el);
        });
        
        // Add click animation to service cards
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (e.target.classList.contains('service-btn')) return;
                
                const serviceBtn = this.querySelector('.service-btn');
                if (serviceBtn) {
                    serviceBtn.click();
                }
            });
        });
    </script>
</body>
</html>
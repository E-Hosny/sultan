<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gold: #D4AF37;
            --secondary-gold: #B8860B;
            --dark-bg: #0F0F0F;
            --card-bg: #1A1A1A;
            --text-light: #F5F5F5;
            --text-muted: #B0B0B0;
            --accent-color: #8B4513;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: "Cairo", sans-serif;
            background: linear-gradient(135deg, var(--dark-bg) 0%, #1a1a2e 50%, #16213e 100%);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url("https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .profile-container {
            text-align: center;
            background: rgba(26, 26, 26, 0.95);
            border-radius: 20px;
            padding: 3rem;
            backdrop-filter: blur(10px);
            border: 2px solid var(--primary-gold);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
            max-width: 500px;
            margin: 0 auto;
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary-gold), var(--secondary-gold));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            border: 4px solid var(--primary-gold);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
        }
        
        .profile-image i {
            font-size: 4rem;
            color: var(--dark-bg);
        }
        
        .profile-name {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-gold);
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .profile-title {
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        .services-section {
            padding: 5rem 0;
            background: var(--dark-bg);
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-gold);
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-gold), var(--secondary-gold));
            border-radius: 2px;
        }
        
        .service-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(212, 175, 55, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.5s ease;
        }
        
        .service-card:hover::before {
            left: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-gold);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.2);
        }
        
        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-gold);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .service-title i {
            margin-left: 1rem;
            font-size: 1.8rem;
        }
        
        .service-item {
            background: rgba(212, 175, 55, 0.1);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .service-item:hover {
            background: rgba(212, 175, 55, 0.2);
            border-color: var(--primary-gold);
            transform: scale(1.02);
        }
        
        .service-item.primary {
            background: linear-gradient(45deg, var(--primary-gold), var(--secondary-gold));
            color: var(--dark-bg);
            border: none;
        }
        
        .service-item.primary:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4);
        }
        
        .service-price {
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }
        
        .contact-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--card-bg) 0%, #2a2a2a 100%);
        }
        
        .contact-item {
            background: var(--card-bg);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .contact-item:hover {
            border-color: var(--primary-gold);
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.2);
        }
        
        .contact-item i {
            font-size: 3rem;
            color: var(--primary-gold);
            margin-bottom: 1rem;
        }
        
        .contact-text {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-light);
        }
        
        .payment-methods {
            background: rgba(212, 175, 55, 0.1);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            margin: 3rem 0;
        }
        
        .payment-text {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }
        
        .payment-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .payment-icon {
            background: var(--card-bg);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 10px;
            padding: 0.5rem 1rem;
            color: var(--text-light);
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .payment-icon:hover {
            border-color: var(--primary-gold);
            color: var(--primary-gold);
        }
        
        .footer {
            background: var(--dark-bg);
            text-align: center;
            padding: 2rem 0;
            border-top: 2px solid var(--primary-gold);
        }
        
        .footer-text {
            color: var(--text-muted);
            font-size: 1rem;
        }
        
        @media (max-width: 768px) {
            .profile-container {
                margin: 1rem;
                padding: 2rem;
            }
            
            .profile-name {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .service-card {
                padding: 1.5rem;
            }
        }
        
        .floating-gem {
            position: fixed;
            width: 20px;
            height: 20px;
            background: var(--primary-gold);
            border-radius: 50%;
            pointer-events: none;
            animation: float 6s ease-in-out infinite;
            opacity: 0.6;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body>
    <!-- Floating Gems Animation -->
    <div class="floating-gem" style="top: 10%; left: 10%; animation-delay: 0s;"></div>
    <div class="floating-gem" style="top: 20%; right: 15%; animation-delay: 1s;"></div>
    <div class="floating-gem" style="top: 60%; left: 5%; animation-delay: 2s;"></div>
    <div class="floating-gem" style="top: 80%; right: 10%; animation-delay: 3s;"></div>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="profile-container">
                <div class="profile-image">
                    <i class="fas fa-gem"></i>
                </div>
                <h1 class="profile-name">سلطان المسعري</h1>
                <p class="profile-title">خبير تقييم المجوهرات والأحجار الكريمة<br>استشارات سريعة وتقارير احترافية</p>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">الاستشارات والتقييم</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-card">
                        <h3 class="service-title">
                            <i class="fas fa-clock"></i>
                            الاستشارات الفورية
                        </h3>
                        <div class="service-item primary">
                            <strong>استشارة فورية (20 دقيقة)</strong>
                            <div class="service-price">390 ر.س</div>
                        </div>
                        <div class="service-item primary">
                            <strong>استشارة موسعة (60 دقيقة)</strong>
                            <div class="service-price">950 ر.س</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-card">
                        <h3 class="service-title">
                            <i class="fas fa-camera"></i>
                            التقييم والتقارير
                        </h3>
                        <div class="service-item">
                            <strong>تقييم مبدئي بالصور</strong>
                            <div class="service-price">750 ر.س</div>
                        </div>
                        <div class="service-item">
                            <strong>دفعة مقدمة لتقرير رسمي</strong>
                            <div class="service-price">اتصل للتفاصيل</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h2 class="section-title">بناء البراند</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="service-card">
                        <h3 class="service-title">
                            <i class="fas fa-crown"></i>
                            خدمات تطوير العلامة التجارية
                        </h3>
                        <div class="service-item primary">
                            <strong>جلسة تعريفية (20 دقيقة)</strong>
                            <div class="service-price">مجاناً</div>
                        </div>
                        <div class="service-item">
                            <strong>استشارة براند (60 دقيقة)</strong>
                            <div class="service-price">950 ر.س</div>
                        </div>
                        <div class="service-item">
                            <strong>خطة براند (جلستان)</strong>
                            <div class="service-price">3,900 ر.س</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">حجز وتواصل</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div class="contact-text">حجز موعد<br><small>(Calendly)</small></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div class="contact-text">واتساب الأعمال</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-text">البريد الإلكتروني</div>
                    </div>
                </div>
            </div>
            
            <div class="payment-methods">
                <div class="payment-text">طرق الدفع المتاحة</div>
                <div class="payment-icons">
                    <span class="payment-icon">مدى</span>
                    <span class="payment-icon">STC Pay</span>
                    <span class="payment-icon">Visa</span>
                    <span class="payment-icon">MasterCard</span>
                    <span class="payment-icon">Apple Pay</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">© سلطان المسعري - جميع الحقوق محفوظة</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth scrolling
        document.querySelectorAll("a[href^="#"]").forEach(anchor => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute("href")).scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
        
        // Add scroll reveal effect
        window.addEventListener("scroll", () => {
            const cards = document.querySelectorAll(".service-card, .contact-item");
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                const cardVisible = 150;
                
                if (cardTop < window.innerHeight - cardVisible) {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }
            });
        });
        
        // Initialize cards
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(".service-card, .contact-item");
            cards.forEach(card => {
                card.style.opacity = "0";
                card.style.transform = "translateY(30px)";
                card.style.transition = "all 0.6s ease";
            });
        });
    </script>
</body>
</html>

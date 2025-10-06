<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            /* ألوان فاخرة ودافئة */
            --luxury-gold: #C9A96E;
            --deep-gold: #B8860B;
            --warm-cream: #F5F5DC;
            --rich-brown: #8B4513;
            --soft-beige: #FDF5E6;
            --dark-chocolate: #2F1B14;
            --warm-white: #FFFEF7;
            --muted-gold: #D4AF37;
            --platinum: #E5E4E2;
            --rose-gold: #E8B4B8;
            --emerald: #50C878;
            
            /* تدرجات فاخرة */
            --luxury-gradient: linear-gradient(135deg, #C9A96E 0%, #B8860B 50%, #8B4513 100%);
            --warm-gradient: linear-gradient(135deg, #FDF5E6 0%, #F5F5DC 100%);
            --dark-gradient: linear-gradient(135deg, #2F1B14 0%, #1A0F0A 100%);
            --platinum-gradient: linear-gradient(135deg, #E5E4E2 0%, #C0C0C0 100%);
            --rose-gradient: linear-gradient(135deg, #E8B4B8 0%, #D4A5A5 100%);
            --emerald-gradient: linear-gradient(135deg, #50C878 0%, #228B22 100%);
            
            /* ظلال فاخرة */
            --luxury-shadow: 0 20px 60px rgba(201, 169, 110, 0.3);
            --soft-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --elegant-shadow: 0 15px 40px rgba(139, 69, 19, 0.2);
            --platinum-shadow: 0 25px 70px rgba(229, 228, 226, 0.4);
            --rose-shadow: 0 20px 50px rgba(232, 180, 184, 0.3);
            --emerald-shadow: 0 20px 50px rgba(80, 200, 120, 0.3);
            
            /* تأثيرات متقدمة */
            --glass-effect: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --neon-glow: 0 0 20px rgba(201, 169, 110, 0.5);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: "Cairo", sans-serif;
            background: var(--warm-gradient);
            color: var(--dark-chocolate);
            line-height: 1.8;
            overflow-x: hidden;
            scroll-behavior: smooth;
            font-weight: 400;
            position: relative;
        }

        /* خلفية متحركة متقدمة */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(201, 169, 110, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(139, 69, 19, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(232, 180, 184, 0.05) 0%, transparent 50%);
            animation: backgroundFloat 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(1deg); }
            66% { transform: translateY(10px) rotate(-1deg); }
        }

        /* تأثير الجسيمات المتحركة */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--luxury-gold);
            border-radius: 50%;
            opacity: 0.6;
            animation: floatParticle 15s linear infinite;
        }

        @keyframes floatParticle {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 0.6;
            }
            90% {
                opacity: 0.6;
            }
            100% {
                transform: translateY(-100px) translateX(100px);
                opacity: 0;
            }
        }

        /* شريط التنقل الفاخر */
        .navbar-luxury {
            background: rgba(255, 254, 247, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 3px solid var(--luxury-gold);
            padding: 1.5rem 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            box-shadow: var(--soft-shadow);
        }

        .navbar-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, var(--glass-effect), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .navbar-luxury:hover::before {
            opacity: 1;
        }

        .navbar-luxury.scrolled {
            background: rgba(255, 254, 247, 0.98);
            box-shadow: var(--luxury-shadow);
            padding: 1rem 0;
            border-bottom: 3px solid var(--deep-gold);
        }

        .navbar-luxury.scrolled::before {
            opacity: 1;
        }

        .navbar-brand-luxury {
            font-size: 2rem;
            font-weight: 700;
            background: var(--luxury-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .nav-link-luxury {
            color: var(--dark-chocolate) !important;
            font-weight: 500;
            margin: 0 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            font-size: 1.1rem;
        }

        .nav-link-luxury:hover {
            color: var(--luxury-gold) !important;
            transform: translateY(-2px);
        }

        .nav-link-luxury::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--luxury-gradient);
            transition: width 0.4s ease;
            border-radius: 2px;
        }

        .nav-link-luxury:hover::after {
            width: 100%;
        }

        .cta-button-luxury {
            background: var(--luxury-gradient);
            color: var(--warm-white);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.4s ease;
            border: none;
            box-shadow: var(--luxury-shadow);
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .cta-button-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .cta-button-luxury:hover::before {
            left: 100%;
        }

        .cta-button-luxury:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 25px 60px rgba(201, 169, 110, 0.4), var(--neon-glow);
            color: var(--warm-white);
        }

        .cta-button-luxury:active {
            transform: translateY(-2px) scale(1.02);
        }

        /* إضافة مساحة للشريط الثابت */
        .main-content-luxury {
            margin-top: 100px;
        }
        
        .hero-section-luxury {
            min-height: 100vh;
            background: var(--dark-gradient);
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-section-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.3;
            z-index: 1;
        }

        .hero-section-luxury::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--dark-gradient);
            z-index: 2;
        }

        .profile-container-luxury {
            text-align: center;
            background: rgba(255, 254, 247, 0.95);
            border-radius: 30px;
            padding: 4rem 3rem;
            backdrop-filter: blur(20px);
            border: 3px solid var(--luxury-gold);
            box-shadow: var(--luxury-shadow);
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
            overflow: hidden;
        }

        .profile-container-luxury::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, var(--luxury-gold), transparent, var(--rose-gold), transparent);
            animation: rotateBorder 8s linear infinite;
            z-index: -1;
        }

        .profile-container-luxury::after {
            content: '';
            position: absolute;
            top: 3px;
            left: 3px;
            right: 3px;
            bottom: 3px;
            background: rgba(255, 254, 247, 0.95);
            border-radius: 27px;
            z-index: -1;
        }

        @keyframes rotateBorder {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .profile-image-luxury {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: var(--luxury-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2.5rem;
            border: 5px solid var(--luxury-gold);
            box-shadow: var(--luxury-shadow);
            position: relative;
            overflow: hidden;
        }

        .profile-image-luxury::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(transparent, var(--luxury-gold), transparent);
            animation: rotate 3s linear infinite;
        }

        .profile-image-luxury i {
            font-size: 5rem;
            color: var(--warm-white);
            z-index: 2;
            position: relative;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .profile-name-luxury {
            font-size: 3rem;
            font-weight: 700;
            background: var(--luxury-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            letter-spacing: 1px;
        }

        .profile-title-luxury {
            font-size: 1.4rem;
            color: var(--dark-chocolate);
            margin-bottom: 3rem;
            line-height: 2;
            font-weight: 400;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .services-section-luxury {
            padding: 6rem 0;
            background: var(--warm-gradient);
            position: relative;
        }

        .services-section-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23C9A96E' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: 1;
        }

        .section-title-luxury {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            background: var(--luxury-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 4rem;
            position: relative;
            z-index: 2;
            letter-spacing: 1px;
        }

        .section-title-luxury::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: var(--luxury-gradient);
            border-radius: 2px;
        }

        .service-card-luxury {
            background: var(--warm-white);
            border-radius: 25px;
            padding: 3rem;
            margin-bottom: 3rem;
            border: 2px solid var(--luxury-gold);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: var(--soft-shadow);
            z-index: 2;
            backdrop-filter: blur(10px);
        }

        .service-card-luxury::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(201, 169, 110, 0.05) 0%, rgba(232, 180, 184, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .service-card-luxury:hover::after {
            opacity: 1;
        }

        .service-card-luxury::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(201, 169, 110, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .service-card-luxury:hover::before {
            left: 100%;
        }

        .service-card-luxury:hover {
            transform: translateY(-10px);
            border-color: var(--deep-gold);
            box-shadow: var(--luxury-shadow);
        }

        .service-title-luxury {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--dark-chocolate);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-title-luxury i {
            margin-left: 1rem;
            font-size: 2rem;
            color: var(--luxury-gold);
        }

        .service-item-luxury {
            background: var(--soft-beige);
            border: 2px solid var(--luxury-gold);
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .service-item-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(201, 169, 110, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .service-item-luxury:hover::before {
            left: 100%;
        }

        .service-item-luxury:hover {
            background: rgba(201, 169, 110, 0.1);
            border-color: var(--deep-gold);
            transform: translateY(-5px);
            box-shadow: var(--elegant-shadow);
        }

        .service-item-luxury.primary {
            background: var(--luxury-gradient);
            color: var(--warm-white);
            border: none;
            box-shadow: var(--luxury-shadow);
            position: relative;
        }

        .service-item-luxury.primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-item-luxury.primary:hover::after {
            opacity: 1;
        }

        .service-item-luxury.primary:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 60px rgba(201, 169, 110, 0.4), var(--neon-glow);
        }

        .service-item-luxury.primary::before {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
        }

        .service-price-luxury {
            font-weight: 700;
            font-size: 1.3rem;
            margin-top: 1rem;
            color: var(--rich-brown);
        }

        .service-item-luxury.primary .service-price-luxury {
            color: var(--warm-white);
        }
        
        .contact-section-luxury {
            padding: 6rem 0;
            background: var(--dark-gradient);
            position: relative;
        }

        .contact-section-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23C9A96E' fill-opacity='0.03'%3E%3Cpath d='M40 40c0-11.046-8.954-20-20-20s-20 8.954-20 20 8.954 20 20 20 20-8.954 20-20zm0 0c0 11.046 8.954 20 20 20s20-8.954 20-20-8.954-20-20-20-20 8.954-20 20z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: 1;
        }

        .contact-item-luxury {
            background: var(--warm-white);
            border: 3px solid var(--luxury-gold);
            border-radius: 25px;
            padding: 3rem;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: var(--soft-shadow);
            z-index: 2;
        }

        .contact-item-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(201, 169, 110, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .contact-item-luxury:hover::before {
            left: 100%;
        }

        .contact-item-luxury:hover {
            border-color: var(--deep-gold);
            transform: translateY(-10px);
            box-shadow: var(--luxury-shadow);
            background: rgba(201, 169, 110, 0.05);
        }

        .contact-item-luxury i {
            font-size: 4rem;
            color: var(--luxury-gold);
            margin-bottom: 2rem;
            transition: all 0.4s ease;
        }

        .contact-item-luxury:hover i {
            transform: scale(1.1);
            color: var(--deep-gold);
        }

        .contact-text-luxury {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-chocolate);
            margin-bottom: 1rem;
        }

        .contact-subtitle-luxury {
            font-size: 1rem;
            color: var(--rich-brown);
            margin-bottom: 2rem;
            font-weight: 400;
        }

        .contact-button-luxury {
            background: var(--luxury-gradient);
            color: var(--warm-white);
            padding: 1.2rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            margin-top: 1rem;
            transition: all 0.4s ease;
            box-shadow: var(--luxury-shadow);
            border: none;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .contact-button-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        .contact-button-luxury:hover::before {
            left: 100%;
        }

        .contact-button-luxury:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 25px 60px rgba(201, 169, 110, 0.4), var(--neon-glow);
            color: var(--warm-white);
        }

        .contact-button-luxury:active {
            transform: translateY(-2px) scale(1.02);
        }

        .contact-button-luxury i {
            margin-left: 0.8rem;
            font-size: 1.1rem;
        }

        .payment-methods-luxury {
            background: rgba(201, 169, 110, 0.1);
            border: 2px solid var(--luxury-gold);
            border-radius: 25px;
            padding: 3rem;
            text-align: center;
            margin: 4rem 0;
            backdrop-filter: blur(10px);
            z-index: 2;
            position: relative;
        }

        .payment-text-luxury {
            color: var(--dark-chocolate);
            font-size: 1.3rem;
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .payment-icons-luxury {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .payment-icon-luxury {
            background: var(--warm-white);
            border: 2px solid var(--luxury-gold);
            border-radius: 15px;
            padding: 1rem 2rem;
            color: var(--dark-chocolate);
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .payment-icon-luxury:hover {
            border-color: var(--deep-gold);
            color: var(--luxury-gold);
            transform: translateY(-3px);
            box-shadow: var(--elegant-shadow);
        }

        .footer-luxury {
            background: var(--dark-chocolate);
            text-align: center;
            padding: 3rem 0;
            border-top: 3px solid var(--luxury-gold);
        }

        .footer-text-luxury {
            color: var(--warm-cream);
            font-size: 1.1rem;
            font-weight: 400;
        }
        
        /* شريط التنقل الجانبي للجوال */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100vh;
            background: var(--warm-white);
            backdrop-filter: blur(20px);
            box-shadow: var(--luxury-shadow);
            transition: right 0.3s ease;
            z-index: 2000;
            padding: 2rem;
            overflow-y: auto;
        }

        .mobile-sidebar.active {
            right: 0;
        }

        .mobile-sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1500;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .mobile-sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--luxury-gold);
        }

        .mobile-sidebar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            background: var(--luxury-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .mobile-sidebar-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-chocolate);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .mobile-sidebar-close:hover {
            background: var(--luxury-gold);
            color: var(--warm-white);
            transform: rotate(90deg);
        }

        .mobile-sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobile-sidebar-nav li {
            margin-bottom: 1rem;
        }

        .mobile-sidebar-nav a {
            display: block;
            padding: 1rem;
            color: var(--dark-chocolate);
            text-decoration: none;
            font-weight: 500;
            border-radius: 10px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .mobile-sidebar-nav a:hover {
            background: var(--luxury-gradient);
            color: var(--warm-white);
            transform: translateX(10px);
            border-color: var(--luxury-gold);
        }

        .mobile-sidebar-nav a i {
            margin-left: 0.5rem;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .mobile-sidebar-nav a:hover i {
            transform: scale(1.2);
        }

        /* تأثيرات إضافية للشريط الجانبي */
        .mobile-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(201, 169, 110, 0.05) 0%, rgba(232, 180, 184, 0.05) 100%);
            z-index: -1;
        }

        /* تأثيرات للروابط في الشريط الجانبي */
        .mobile-sidebar-nav a {
            position: relative;
            overflow: hidden;
        }

        .mobile-sidebar-nav a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: left 0.5s ease;
        }

        .mobile-sidebar-nav a:hover::before {
            left: 100%;
        }

        .mobile-cta-button {
            margin-top: 2rem;
            padding: 1rem;
            background: var(--luxury-gradient);
            color: var(--warm-white);
            text-decoration: none;
            border-radius: 15px;
            text-align: center;
            font-weight: 600;
            display: block;
            transition: all 0.3s ease;
            box-shadow: var(--luxury-shadow);
        }

        .mobile-cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(201, 169, 110, 0.4);
            color: var(--warm-white);
        }

        /* تحسين زر الهامبرغر */
        .navbar-toggler {
            border: 2px solid var(--luxury-gold);
            border-radius: 10px;
            padding: 0.5rem;
            background: var(--warm-white);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            z-index: 1001;
        }

        .navbar-toggler:hover {
            background: var(--luxury-gold);
            transform: scale(1.1);
            box-shadow: var(--luxury-shadow);
        }

        .navbar-toggler:active {
            transform: scale(0.95);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23C9A96E' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 1.5em;
            height: 1.5em;
        }

        /* تحسينات إضافية للزر */
        .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(201, 169, 110, 0.3);
        }

        /* تأثيرات متقدمة للزر */
        .navbar-toggler::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(201, 169, 110, 0.1), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 8px;
        }

        .navbar-toggler:hover::before {
            opacity: 1;
        }

        /* تأثيرات متقدمة للهواتف المحمولة */
        @media (max-width: 768px) {
            .profile-container-luxury {
                margin: 1rem;
                padding: 2.5rem 2rem;
                border-radius: 20px;
            }
            
            .profile-name-luxury {
                font-size: 2.2rem;
            }
            
            .section-title-luxury {
                font-size: 2.2rem;
            }
            
            .service-card-luxury {
                padding: 2rem 1.5rem;
                margin-bottom: 2rem;
            }

            .contact-item-luxury {
                padding: 2rem 1.5rem;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .cta-button-luxury {
                padding: 1rem 2rem;
                font-size: 1rem;
            }

            .navbar-brand-luxury {
                font-size: 1.5rem;
            }

            .nav-link-luxury {
                margin: 0 0.5rem;
                font-size: 1rem;
            }

            /* إخفاء القائمة العادية في الجوال */
            .navbar-collapse {
                display: none !important;
            }

            /* إظهار زر الهامبرغر */
            .navbar-toggler {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
            }

            /* التأكد من أن الزر قابل للنقر */
            .navbar-toggler {
                pointer-events: auto !important;
                cursor: pointer !important;
            }
        }

        @media (max-width: 480px) {
            .profile-container-luxury {
                padding: 2rem 1.5rem;
            }

            .profile-name-luxury {
                font-size: 1.8rem;
            }

            .section-title-luxury {
                font-size: 1.8rem;
            }

            .service-item-luxury {
                padding: 1.5rem;
            }

            .contact-button-luxury {
                padding: 0.8rem 1.5rem;
                font-size: 0.9rem;
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
    <!-- شريط التنقل الفاخر -->
    <nav class="navbar navbar-expand-lg navbar-luxury">
        <div class="container">
            <a class="navbar-brand-luxury" href="#home">
                <i class="fas fa-gem me-2"></i>سلطان المسعري
            </a>
            
            <button class="navbar-toggler" type="button" id="mobileMenuToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link-luxury" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-luxury" href="#services">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-luxury" href="#contact">التواصل</a>
                    </li>
                </ul>
                <a href="#contact" class="cta-button-luxury">
                    احجز استشارتك الآن <i class="fas fa-calendar-alt"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- الجسيمات المتحركة -->
    <div class="particles" id="particles"></div>

    <!-- الشريط الجانبي للجوال -->
    <div class="mobile-sidebar-overlay" id="mobileSidebarOverlay"></div>
    <div class="mobile-sidebar" id="mobileSidebar">
        <div class="mobile-sidebar-header">
            <div class="mobile-sidebar-brand">
                <i class="fas fa-gem me-2"></i>سلطان المسعري
            </div>
            <button class="mobile-sidebar-close" id="mobileSidebarClose">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <ul class="mobile-sidebar-nav">
            <li>
                <a href="#home" onclick="closeMobileSidebar()">
                    <i class="fas fa-home"></i>الرئيسية
                </a>
            </li>
            <li>
                <a href="#services" onclick="closeMobileSidebar()">
                    <i class="fas fa-gem"></i>الخدمات
                </a>
            </li>
            <li>
                <a href="#contact" onclick="closeMobileSidebar()">
                    <i class="fas fa-phone"></i>التواصل
                </a>
            </li>
        </ul>
        <a href="#contact" class="mobile-cta-button" onclick="closeMobileSidebar()">
            احجز استشارتك الآن <i class="fas fa-calendar-alt"></i>
        </a>
    </div>

    <div class="main-content-luxury">
    <div class="floating-gem" style="top: 10%; left: 10%; animation-delay: 0s;"></div>
    <div class="floating-gem" style="top: 20%; right: 15%; animation-delay: 1s;"></div>
    <div class="floating-gem" style="top: 60%; left: 5%; animation-delay: 2s;"></div>
    <div class="floating-gem" style="top: 80%; right: 10%; animation-delay: 3s;"></div>
    
    <!-- Hero Section -->
    <section id="home" class="hero-section-luxury">
        <div class="container">
            <div class="profile-container-luxury" data-aos="fade-up" data-aos-duration="1000">
                <div class="profile-image-luxury">
                    <i class="fas fa-gem"></i>
                </div>
                <h1 class="profile-name-luxury">سلطان المسعري</h1>
                <p class="profile-title-luxury">خبير تقييم المجوهرات والأحجار الكريمة<br>استشارات سريعة وتقارير احترافية</p>
                <div class="hero-buttons">
                    <a href="#services" class="cta-button-luxury me-3">
                        اكتشف خدماتي <i class="fas fa-arrow-down"></i>
                    </a>
                    <a href="#contact" class="cta-button-luxury">
                        تواصل معي <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="services-section-luxury">
        <div class="container">
            <h2 class="section-title-luxury" data-aos="fade-up">الاستشارات والتقييم</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="service-card-luxury">
                        <h3 class="service-title-luxury">
                            <i class="fas fa-clock"></i>
                            الاستشارات الفورية
                        </h3>
                        <div class="service-item-luxury primary" onclick="showServiceDetails('instant')">
                            <strong>استشارة فورية (20 دقيقة)</strong>
                            <div class="service-price-luxury">390 ر.س</div>
                            <small>تقييم سريع عبر الصور</small>
                        </div>
                        <div class="service-item-luxury primary" onclick="showServiceDetails('extended')">
                            <strong>استشارة موسعة (60 دقيقة)</strong>
                            <div class="service-price-luxury">950 ر.س</div>
                            <small>تحليل شامل ومفصل</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
                    <div class="service-card-luxury">
                        <h3 class="service-title-luxury">
                            <i class="fas fa-camera"></i>
                            التقييم والتقارير
                        </h3>
                        <div class="service-item-luxury" onclick="showServiceDetails('preliminary')">
                            <strong>تقييم مبدئي بالصور</strong>
                            <div class="service-price-luxury">750 ر.س</div>
                            <small>تقرير مبدئي مع التوصيات</small>
                        </div>
                        <div class="service-item-luxury" onclick="showServiceDetails('official')">
                            <strong>دفعة مقدمة لتقرير رسمي</strong>
                            <div class="service-price-luxury">اتصل للتفاصيل</div>
                            <small>تقرير رسمي معتمد</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <h2 class="section-title-luxury mt-5" data-aos="fade-up">بناء البراند</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card-luxury">
                        <h3 class="service-title-luxury">
                            <i class="fas fa-crown"></i>
                            خدمات تطوير العلامة التجارية
                        </h3>
                        <div class="service-item-luxury primary" onclick="showServiceDetails('intro')">
                            <strong>جلسة تعريفية (20 دقيقة)</strong>
                            <div class="service-price-luxury">مجاناً</div>
                            <small>استشارة أولية مجانية</small>
                        </div>
                        <div class="service-item-luxury" onclick="showServiceDetails('brand')">
                            <strong>استشارة براند (60 دقيقة)</strong>
                            <div class="service-price-luxury">950 ر.س</div>
                            <small>تطوير استراتيجية العلامة التجارية</small>
                        </div>
                        <div class="service-item-luxury" onclick="showServiceDetails('plan')">
                            <strong>خطة براند (جلستان)</strong>
                            <div class="service-price-luxury">3,900 ر.س</div>
                            <small>خطة شاملة لتطوير البراند</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="contact-section-luxury">
        <div class="container">
            <h2 class="section-title-luxury" data-aos="fade-up">حجز وتواصل</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-item-luxury">
                        <i class="fas fa-calendar-alt"></i>
                        <div class="contact-text-luxury">حجز موعد</div>
                        <div class="contact-subtitle-luxury">Calendly</div>
                        <a href="#" class="contact-button-luxury" onclick="bookAppointment()">
                            احجز الآن <i class="fas fa-calendar-check"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-item-luxury">
                        <i class="fab fa-whatsapp"></i>
                        <div class="contact-text-luxury">واتساب الأعمال</div>
                        <div class="contact-subtitle-luxury">استشارة فورية</div>
                        <a href="#" class="contact-button-luxury" onclick="openWhatsApp()">
                            تواصل عبر واتساب <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="contact-item-luxury">
                        <i class="fas fa-envelope"></i>
                        <div class="contact-text-luxury">البريد الإلكتروني</div>
                        <div class="contact-subtitle-luxury">للاستفسارات العامة</div>
                        <a href="#" class="contact-button-luxury" onclick="sendEmail()">
                            أرسل رسالة <i class="fas fa-paper-plane"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="payment-methods-luxury">
                <div class="payment-text-luxury">طرق الدفع المتاحة</div>
                <div class="payment-icons-luxury">
                    <span class="payment-icon-luxury">مدى</span>
                    <span class="payment-icon-luxury">STC Pay</span>
                    <span class="payment-icon-luxury">Visa</span>
                    <span class="payment-icon-luxury">MasterCard</span>
                    <span class="payment-icon-luxury">Apple Pay</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer-luxury">
        <div class="container">
            <p class="footer-text-luxury">© سلطان المسعري - جميع الحقوق محفوظة</p>
        </div>
    </footer>
    </div> <!-- إغلاق main-content-luxury -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // تهيئة AOS للرسوم المتحركة
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // إنشاء الجسيمات المتحركة
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // مواضع عشوائية
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                
                // ألوان عشوائية
                const colors = ['var(--luxury-gold)', 'var(--rose-gold)', 'var(--emerald)', 'var(--platinum)'];
                particle.style.background = colors[Math.floor(Math.random() * colors.length)];
                
                particlesContainer.appendChild(particle);
            }
        }

        // تهيئة الجسيمات عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', createParticles);

        // إضافة event listeners إضافية للتأكد من عمل الزر
        window.addEventListener('load', function() {
            console.log('Page loaded, checking toggle button...');
            
            const toggleButton = document.getElementById('mobileMenuToggle');
            const navbarToggler = document.querySelector('.navbar-toggler');
            
            if (toggleButton) {
                console.log('Toggle button found:', toggleButton);
                toggleButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Toggle button clicked!');
                    openMobileSidebar();
                });
            } else {
                console.log('Toggle button not found');
            }

            if (navbarToggler) {
                console.log('Navbar toggler found:', navbarToggler);
                navbarToggler.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Navbar toggler clicked!');
                    openMobileSidebar();
                });
            } else {
                console.log('Navbar toggler not found');
            }
        });

        // وظائف الشريط الجانبي للجوال
        function openMobileSidebar() {
            console.log('Opening mobile sidebar...');
            const sidebar = document.getElementById('mobileSidebar');
            const overlay = document.getElementById('mobileSidebarOverlay');
            
            if (sidebar && overlay) {
                sidebar.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden'; // منع التمرير عند فتح الشريط
                console.log('Mobile sidebar opened successfully');
            } else {
                console.error('Sidebar elements not found');
            }
        }

        function closeMobileSidebar() {
            console.log('Closing mobile sidebar...');
            const sidebar = document.getElementById('mobileSidebar');
            const overlay = document.getElementById('mobileSidebarOverlay');
            
            if (sidebar && overlay) {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = 'auto'; // إعادة التمرير
                console.log('Mobile sidebar closed successfully');
            } else {
                console.error('Sidebar elements not found');
            }
        }

        // ربط الأحداث للشريط الجانبي
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const sidebarClose = document.getElementById('mobileSidebarClose');
            const sidebarOverlay = document.getElementById('mobileSidebarOverlay');

            // فتح الشريط عند النقر على زر الهامبرغر
            if (navbarToggler) {
                navbarToggler.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Navbar toggler clicked'); // للتشخيص
                    openMobileSidebar();
                });
            }

            // فتح الشريط عند النقر على زر الهامبرغر المخصص
            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Mobile menu toggle clicked'); // للتشخيص
                    openMobileSidebar();
                });
            }

            // إغلاق الشريط عند النقر على زر الإغلاق
            if (sidebarClose) {
                sidebarClose.addEventListener('click', closeMobileSidebar);
            }

            // إغلاق الشريط عند النقر على الخلفية
            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', closeMobileSidebar);
            }

            // إغلاق الشريط عند الضغط على مفتاح Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeMobileSidebar();
                }
            });

            // إضافة تأثيرات للروابط في الشريط الجانبي
            const sidebarLinks = document.querySelectorAll('.mobile-sidebar-nav a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // إضافة تأثير النقر
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });

            // إضافة تأثيرات للزر الرئيسي في الشريط الجانبي
            const mobileCtaButton = document.querySelector('.mobile-cta-button');
            if (mobileCtaButton) {
                mobileCtaButton.addEventListener('click', function(e) {
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            }
        });

        // إضافة تأثيرات متقدمة للشريط الجانبي
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('mobileSidebar');
            
            // تأثيرات عند فتح الشريط
            function addSidebarEffects() {
                if (sidebar) {
                    const links = sidebar.querySelectorAll('.mobile-sidebar-nav a');
                    links.forEach((link, index) => {
                        link.style.opacity = '0';
                        link.style.transform = 'translateX(50px)';
                        
                        setTimeout(() => {
                            link.style.transition = 'all 0.3s ease';
                            link.style.opacity = '1';
                            link.style.transform = 'translateX(0)';
                        }, index * 100);
                    });
                }
            }

            // مراقبة تغيير حالة الشريط
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        if (sidebar.classList.contains('active')) {
                            addSidebarEffects();
                        }
                    }
                });
            });

            if (sidebar) {
                observer.observe(sidebar, { attributes: true });
            }
        });

        // إضافة event listener إضافي للتأكد من عمل الزر
        document.addEventListener('click', function(e) {
            if (e.target.closest('.navbar-toggler') || e.target.closest('#mobileMenuToggle')) {
                e.preventDefault();
                e.stopPropagation();
                console.log('Toggle button clicked via event delegation');
                openMobileSidebar();
            }
        });

        // إضافة event listener للـ touch events للهواتف المحمولة
        document.addEventListener('touchstart', function(e) {
            if (e.target.closest('.navbar-toggler') || e.target.closest('#mobileMenuToggle')) {
                e.preventDefault();
                e.stopPropagation();
                console.log('Toggle button touched');
                openMobileSidebar();
            }
        });

        // تأثير شريط التنقل عند التمرير
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar-luxury');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // التنقل السلس
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

        // تأثيرات البطاقات عند التمرير
        window.addEventListener('scroll', () => {
            const cards = document.querySelectorAll('.service-card-luxury, .contact-item-luxury');
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                const cardVisible = 150;
                
                if (cardTop < window.innerHeight - cardVisible) {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }
            });
        });

        // تهيئة البطاقات
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.service-card-luxury, .contact-item-luxury');
            cards.forEach(card => {
                card.style.opacity = "0";
                card.style.transform = "translateY(30px)";
                card.style.transition = "all 0.6s ease";
            });
        });

        // وظائف الأزرار التفاعلية
        function showServiceDetails(serviceType) {
            const services = {
                'instant': 'استشارة فورية لمدة 20 دقيقة - تقييم سريع عبر الصور مع توصيات أساسية',
                'extended': 'استشارة موسعة لمدة 60 دقيقة - تحليل شامل ومفصل مع توصيات مفصلة',
                'preliminary': 'تقييم مبدئي بالصور - تقرير مبدئي مع التوصيات والتقدير التقريبي',
                'official': 'دفعة مقدمة لتقرير رسمي - تقرير رسمي معتمد للاستخدام القانوني',
                'intro': 'جلسة تعريفية مجانية - استشارة أولية لتحديد احتياجاتك',
                'brand': 'استشارة براند - تطوير استراتيجية العلامة التجارية',
                'plan': 'خطة براند شاملة - خطة مفصلة لتطوير البراند على جلستين'
            };
            
            alert(services[serviceType] || 'معلومات الخدمة غير متاحة');
        }

        function bookAppointment() {
            // يمكن ربط هذا برابط Calendly الفعلي
            alert('سيتم توجيهك إلى صفحة حجز المواعيد');
            // window.open('https://calendly.com/your-link', '_blank');
        }

        function openWhatsApp() {
            // يمكن ربط هذا برقم واتساب الفعلي
            const message = 'مرحباً، أريد الاستفسار عن خدمات تقييم المجوهرات';
            const phoneNumber = '966500000000'; // استبدل بالرقم الفعلي
            window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
        }

        function sendEmail() {
            // يمكن ربط هذا بالبريد الإلكتروني الفعلي
            const subject = 'استفسار عن خدمات تقييم المجوهرات';
            const body = 'مرحباً سلطان، أريد الاستفسار عن خدماتكم...';
            window.location.href = `mailto:sultan@example.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
        }

        // تأثيرات إضافية للتفاعل
        document.querySelectorAll('.service-item-luxury').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                this.style.boxShadow = 'var(--luxury-shadow), var(--neon-glow)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '';
            });
        });

        // تأثيرات متقدمة للبطاقات
        document.querySelectorAll('.service-card-luxury, .contact-item-luxury').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) rotateX(5deg)';
                this.style.boxShadow = 'var(--luxury-shadow), 0 0 30px rgba(201, 169, 110, 0.2)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0deg)';
                this.style.boxShadow = '';
            });
        });

        // تأثيرات متقدمة للأزرار
        document.querySelectorAll('.cta-button-luxury, .contact-button-luxury').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px) scale(1.05) rotateY(5deg)';
                this.style.boxShadow = '0 25px 60px rgba(201, 169, 110, 0.4), var(--neon-glow)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotateY(0deg)';
                this.style.boxShadow = '';
            });

            button.addEventListener('click', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-4px) scale(1.05) rotateY(5deg)';
                }, 100);
            });
        });

        // تأثيرات متقدمة للصورة الشخصية
        const profileImage = document.querySelector('.profile-image-luxury');
        if (profileImage) {
            profileImage.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1) rotateY(10deg)';
                this.style.boxShadow = 'var(--luxury-shadow), var(--neon-glow)';
            });
            
            profileImage.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotateY(0deg)';
                this.style.boxShadow = '';
            });
        }

        // تأثيرات متقدمة للعناوين
        document.querySelectorAll('.section-title-luxury').forEach(title => {
            title.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
                this.style.textShadow = '0 0 20px rgba(201, 169, 110, 0.5)';
            });
            
            title.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
                this.style.textShadow = '';
            });
        });
    </script>
</body>
</html>

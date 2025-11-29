<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F8F0E0">
    <meta name="msapplication-navbutton-color" content="#F8F0E0">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>سلطان المسعري - خبير تقييم المجوهرات والأحجار الكريمة</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* تحميل الخط السعودي */
        @font-face {
            font-family: 'SaudiWeb';
            src: url('{{ asset('fonts/SaudiWeb-Regular.woff') }}') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'SaudiWeb';
            src: url('{{ asset('fonts/SaudiWeb-Bold.woff') }}') format('woff');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            /* ألوان القالب الكلاسيكي - محسنة للحيوية */
            --luxury-gold: #B8965A;
            --deep-gold: #8B6914;
            --warm-cream: #F5F5DC;
            --rich-brown: #8B4513;
            --soft-beige: #FDF5E6;
            --dark-chocolate: #1A0F0A;
            --warm-white: #FFFEF7;
            --muted-gold: #C49B2D;
            
            /* متغيرات القالب البسيط مع ألوان كلاسيكية محسنة */
            --primary: #FFFEF7;
            --secondary: #F8F0E0;
            --tertiary: #F0E6D0;
            --accent: #B8965A;
            --accent-light: #D4A85F;
            --accent-dark: #8B6914;
            --dark-green: #8B4513;
            --dark-green-light: #A0522D;
            --text-primary: #1A0F0A;
            --text-secondary: #4A3420;
            --text-light: #6B5A45;
            --text-gold: #B8965A;
            --border: #D4C4A8;
            --border-light: #C4B098;
            --shadow: rgba(26, 15, 10, 0.25);
            --shadow-hover: rgba(26, 15, 10, 0.4);
            --shadow-gold: rgba(184, 150, 90, 0.4);
            --gradient: linear-gradient(135deg, #F8F0E0 0%, #F0E6D0 50%, #FFFEF7 100%);
            --velvet-gradient: linear-gradient(145deg, #F8F0E0 0%, #F0E6D0 25%, #FFFEF7 50%, #F0E6D0 75%, #F8F0E0 100%);
            --green-gradient: linear-gradient(135deg, #B8965A 0%, #8B6914 100%);
            --warm-gradient: linear-gradient(135deg, #F8F0E0 0%, #F0E6D0 100%);
        }
        
        body {
            font-family: 'SaudiWeb', 'Inter', sans-serif;
            background: var(--warm-gradient) !important;
            background-color: #F8F0E0 !important;
            color: var(--text-primary) !important;
            line-height: 1.7;
            font-weight: 400;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(ellipse at center, rgba(184, 150, 90, 0.15) 0%, transparent 70%) !important;
            pointer-events: none;
            z-index: -1;
        }
        
        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Quick Contact Bar */
        .quick-contact-bar {
            background: var(--green-gradient);
            color: var(--warm-white);
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 200;
            box-shadow: 0 4px 25px var(--shadow), 0 2px 10px rgba(184, 150, 90, 0.3);
            border-bottom: 2px solid var(--accent-dark);
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
            color: var(--warm-white);
            width: 16px;
        }
        
        .contact-item a {
            color: var(--warm-white) !important;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .contact-item a:hover {
            color: var(--warm-white);
            opacity: 0.9;
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
            color: var(--warm-white);
            box-shadow: 0 4px 15px var(--shadow-gold);
        }
        
        .quick-btn.primary:hover {
            background: var(--deep-gold);
            transform: translateY(-1px);
        }
        
        .quick-btn.secondary {
            background: rgba(184, 150, 90, 0.2);
            color: var(--warm-white);
            border: 1px solid var(--warm-white);
        }
        
        .quick-btn.secondary:hover {
            background: rgba(184, 150, 90, 0.3);
            box-shadow: 0 4px 15px var(--shadow-gold);
        }
        
        /* Navigation */
        .navbar {
            background: rgba(255, 254, 247, 0.98);
            backdrop-filter: blur(20px);
            border-bottom: 2px solid var(--accent);
            padding: 1rem 0;
            box-shadow: 0 4px 25px var(--shadow), 0 2px 10px rgba(184, 150, 90, 0.2);
        }
        
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-brand {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-shadow: 0 2px 10px var(--shadow-gold);
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
            background: var(--secondary);
            color: var(--text-primary);
            border: 1px solid var(--border-light);
            border-radius: 8px;
            font-weight: normal;
            cursor: pointer;
            transition: all 0.2s ease;
            font-family: 'SaudiWeb', sans-serif;
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
            background: var(--secondary);
            border: 1px solid var(--border-light);
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
            background: var(--tertiary);
            color: var(--text-primary);
            box-shadow: 0 2px 8px var(--shadow);
        }
        
        .template-option.active {
            background: var(--accent);
            color: var(--warm-white);
            box-shadow: 0 4px 15px var(--shadow-gold);
        }
        
        .template-option i {
            width: 16px;
            margin-left: 0.5rem;
        }
        
        /* Hero Section */
        .hero-section {
            background: var(--velvet-gradient);
            padding: 3rem 0;
            position: relative;
            overflow: hidden;
            border-bottom: 2px solid var(--accent);
            box-shadow: 0 4px 25px var(--shadow), 0 2px 10px rgba(184, 150, 90, 0.2);
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(ellipse at 30% 50%, rgba(184, 150, 90, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }
        
        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 1rem;
            position: relative;
            z-index: 1;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .hero-text {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .hero-badge {
            display: inline-block;
            padding: 0.5rem 1.25rem;
            background: var(--green-gradient);
            color: var(--warm-white);
            border: 2px solid var(--accent-dark);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            width: fit-content;
            box-shadow: 0 4px 20px var(--shadow-gold), 0 2px 8px rgba(26, 15, 10, 0.3);
            margin-bottom: 0.5rem;
        }
        
        .hero-badge i {
            margin-left: 0.5rem;
        }
        
        .hero-features {
            display: flex;
            gap: 1.5rem;
            margin: 1rem 0;
            flex-wrap: wrap;
        }
        
        .hero-feature-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
        }
        
        .hero-feature-item i {
            color: var(--accent);
            font-size: 1rem;
        }
        
        .hero-name {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 3rem;
            font-weight: bold;
            color: var(--text-primary);
            line-height: 1.2;
            margin: 0;
            text-shadow: 0 2px 10px var(--shadow-gold);
        }
        
        .hero-title {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-secondary);
            line-height: 1.4;
            margin: 0;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--accent-dark);
            line-height: 1.4;
            margin: 0.5rem 0 0 0;
            font-weight: 600;
        }
        
        .hero-description {
            font-size: 1rem;
            color: var(--text-secondary);
            line-height: 1.7;
            margin: 0.5rem 0 0 0;
            font-weight: 400;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 0.5rem;
            align-items: stretch;
        }
        
        .hero-btn {
            padding: 0.875rem 1.75rem;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
            font-family: 'SaudiWeb', sans-serif;
            box-shadow: 0 4px 15px var(--shadow-gold);
            position: relative;
            overflow: hidden;
        }
        
        .hero-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .hero-btn:hover::before {
            left: 100%;
        }
        
        .hero-btn-primary {
            background: var(--green-gradient);
            color: var(--warm-white);
            border: 2px solid var(--accent-dark);
            padding: 0.875rem 1.75rem;
            font-size: 0.95rem;
            flex: 1;
            min-width: 160px;
            justify-content: center;
        }
        
        .hero-btn-primary:hover {
            background: var(--accent-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px var(--shadow-gold);
        }
        
        .hero-btn-outline {
            background: transparent;
            color: var(--text-primary);
            border: 2px solid var(--accent);
            flex: 1;
            min-width: 100px;
        }
        
        .hero-btn-outline:hover {
            background: var(--tertiary);
            border-color: var(--accent-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px var(--shadow-gold);
        }
        
        .hero-btn i {
            font-size: 1.2rem;
        }
        
        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .hero-image-wrapper {
            position: relative;
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 50px var(--shadow), 0 0 30px var(--shadow-gold);
            border: 3px solid var(--accent);
            background: var(--secondary);
            padding: 0.5rem;
        }
        
        .hero-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 15px;
            object-fit: cover;
        }
        
        .hero-image-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(184, 150, 90, 0.1) 0%, transparent 50%);
            pointer-events: none;
            border-radius: 15px;
        }
        
        /* Hero Section Responsive */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .hero-image {
                order: -1;
            }
            
            .hero-badge {
                margin: 0 auto;
            }
            
            .hero-features {
                justify-content: center;
                gap: 1rem;
            }
            
            .hero-name {
                font-size: 2.5rem;
                text-align: center;
            }
            
            .hero-title {
                font-size: 1.3rem;
                text-align: center;
            }
            
            .hero-subtitle {
                text-align: center;
                font-size: 1.1rem;
            }
            
            .hero-description {
                text-align: center;
                font-size: 0.95rem;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .hero-features {
                flex-direction: column;
                gap: 0.75rem;
                align-items: center;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 2rem 0;
            }
            
            .hero-name {
                font-size: 2rem;
            }
            
            .hero-title {
                font-size: 1.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .hero-description {
                font-size: 0.9rem;
            }
            
            .services-title {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
            }
            
            .hero-btn {
                width: 100%;
                justify-content: center;
                padding: 0.875rem 1.5rem;
                font-size: 0.9rem;
            }
            
            .hero-btn-primary {
                padding: 0.875rem 1.5rem;
                font-size: 0.9rem;
            }
            
            .hero-features {
                flex-direction: column;
                gap: 0.75rem;
                align-items: flex-start;
            }
            
            .hero-feature-item {
                font-size: 0.85rem;
            }
            
            .hero-image-wrapper {
                max-width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            .hero-section {
                padding: 1.5rem 0;
            }
            
            .hero-name {
                font-size: 1.75rem;
            }
            
            .hero-title {
                font-size: 1.1rem;
            }
            
            .hero-subtitle {
                font-size: 0.95rem;
            }
            
            .hero-description {
                font-size: 0.85rem;
            }
            
            .services-title {
                font-size: 1.75rem;
            }
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
            background: var(--green-gradient);
            color: var(--warm-white);
            border: 2px solid var(--accent-dark);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 0.75rem;
            box-shadow: 0 4px 20px var(--shadow-gold), 0 2px 8px rgba(26, 15, 10, 0.3);
        }
        
        .header-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 0.75rem;
            background: var(--velvet-gradient);
            border: 3px solid var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: var(--accent-dark);
            box-shadow: 0 6px 20px var(--shadow), 0 0 15px var(--shadow-gold), inset 0 2px 8px rgba(184, 150, 90, 0.2);
        }
        
        .header-title {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.8rem;
            font-weight: bold;
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
        
        /* Services Title Section */
        .services-title-section {
            text-align: center;
            margin: 3rem 0 2rem 0;
        }
        
        .services-title {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--text-primary);
            margin: 0;
            text-shadow: 0 2px 10px var(--shadow-gold);
            position: relative;
            display: inline-block;
        }
        
        .services-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 50%;
            transform: translateX(50%);
            width: 80px;
            height: 4px;
            background: var(--green-gradient);
            border-radius: 2px;
        }
        
        /* Services Grid */
        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
            width: 100%;
            align-items: start;
            scroll-margin-top: 100px;
        }
        
        @media (min-width: 1200px) {
            .services-container {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        
        @media (min-width: 768px) and (max-width: 1199px) {
            .services-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        .service-card {
            background: var(--velvet-gradient);
            border: 2px solid var(--border);
            border-radius: 16px;
            padding: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            text-align: center;
            box-shadow: 0 8px 30px var(--shadow), 0 2px 8px rgba(184, 150, 90, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 350px;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px var(--shadow), 0 0 35px var(--shadow-gold);
            border-color: var(--accent);
        }
        
        .service-card.featured {
            border: 3px solid var(--accent);
            box-shadow: 0 10px 35px var(--shadow), 0 0 25px var(--shadow-gold);
        }
        
        .services-container .service-card.featured {
            margin-top: 0;
            align-self: stretch;
        }
        
        .service-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--green-gradient);
            color: var(--warm-white);
            padding: 0.4rem 0.8rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 10;
            box-shadow: 0 4px 20px var(--shadow-gold), 0 2px 8px rgba(26, 15, 10, 0.3);
            border: 1px solid var(--accent-dark);
        }
        
        .service-icon {
            width: 50px;
            height: 50px;
            background: var(--green-gradient);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: var(--warm-white);
            margin: 0 auto 1rem;
            box-shadow: 0 4px 20px var(--shadow), 0 2px 10px rgba(184, 150, 90, 0.3), inset 0 2px 8px rgba(184, 150, 90, 0.2);
            border: 1px solid var(--accent-dark);
        }
        
        .service-card-title {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.1rem;
            font-weight: bold;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            text-shadow: 0 1px 3px var(--shadow);
        }
        
        .service-price {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.6rem;
            font-weight: bold;
            color: var(--accent-dark);
            margin-bottom: 0.5rem;
            text-shadow: 0 1px 3px rgba(184, 150, 90, 0.3);
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
            background: var(--accent) !important;
            color: var(--warm-white) !important;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 15px var(--shadow-gold);
            margin-top: auto;
        }
        
        .service-btn:hover {
            background: var(--deep-gold);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px var(--shadow-gold);
        }
        
        .service-btn.free {
            background: var(--accent);
            color: var(--warm-white);
        }
        
        .service-btn.free:hover {
            background: var(--deep-gold);
            box-shadow: 0 6px 20px var(--shadow-gold);
        }
        
        /* About Section */
        .about-section {
            background: var(--velvet-gradient);
            border: 2px solid var(--accent);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 3rem 0;
            box-shadow: 0 10px 35px var(--shadow), 0 0 20px rgba(184, 150, 90, 0.2), inset 0 1px 3px rgba(184, 150, 90, 0.15);
            position: relative;
        }
        
        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(ellipse at center, rgba(184, 150, 90, 0.08) 0%, transparent 70%);
            border-radius: inherit;
            pointer-events: none;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        .about-text {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .about-section-title {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 2rem;
            font-weight: bold;
            color: var(--text-primary);
            margin-bottom: 1rem;
            text-align: center;
            text-shadow: 0 2px 10px var(--shadow-gold);
        }
        
        .about-name {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 2rem;
            font-weight: bold;
            color: var(--text-primary);
            margin: 0;
            text-shadow: 0 2px 10px var(--shadow-gold);
        }
        
        .about-subtitle {
            font-size: 1.2rem;
            color: var(--accent-dark);
            font-weight: 600;
            margin: 0.5rem 0;
        }
        
        .about-description {
            font-size: 1rem;
            color: var(--text-secondary);
            line-height: 1.8;
            margin: 0;
            text-align: justify;
        }
        
        .about-video-wrapper {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 50px var(--shadow), 0 0 30px var(--shadow-gold);
            border: 3px solid var(--accent);
            background: var(--secondary);
            padding: 0.5rem;
            max-height: 600px;
            aspect-ratio: 16 / 9;
        }
        
        .about-video-wrapper video {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 12px;
            object-fit: cover;
        }
        
        .about-video-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(184, 150, 90, 0.1) 0%, transparent 50%);
            pointer-events: none;
            border-radius: 12px;
        }
        
        /* About Section Responsive */
        @media (max-width: 1024px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .about-video-wrapper {
                order: -1;
            }
            
            .about-section-title {
                font-size: 1.75rem;
            }
            
            .about-name {
                font-size: 1.75rem;
                text-align: center;
            }
            
            .about-subtitle {
                text-align: center;
                font-size: 1.1rem;
            }
            
            .about-description {
                text-align: center;
            }
        }
        
        @media (max-width: 768px) {
            .about-section {
                padding: 2rem 1.5rem;
                margin: 2rem 0;
            }
            
            .about-section-title {
                font-size: 1.5rem;
            }
            
            .about-name {
                font-size: 1.5rem;
            }
            
            .about-subtitle {
                font-size: 1rem;
            }
            
            .about-description {
                font-size: 0.95rem;
                line-height: 1.7;
            }
            
            .about-video-wrapper {
                max-height: 450px;
            }
        }
        
        @media (max-width: 480px) {
            .about-section {
                padding: 1.5rem 1rem;
                margin: 1.5rem 0;
            }
            
            .about-section-title {
                font-size: 1.3rem;
            }
            
            .about-name {
                font-size: 1.3rem;
            }
            
            .about-subtitle {
                font-size: 0.95rem;
            }
            
            .about-description {
                font-size: 0.9rem;
            }
            
            .about-video-wrapper {
                max-height: 350px;
            }
        }
        
        /* Contact Section */
        .contact-section {
            background: var(--velvet-gradient);
            border: 2px solid var(--accent);
            border-radius: 20px;
            padding: 1.5rem;
            text-align: center;
            margin-top: 1rem;
            box-shadow: 0 10px 35px var(--shadow), 0 0 20px rgba(184, 150, 90, 0.2), inset 0 1px 3px rgba(184, 150, 90, 0.15);
        }
        
        .contact-title {
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.3rem;
            font-weight: bold;
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
            background: var(--secondary);
            border: 2px solid var(--border);
            border-radius: 12px;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px var(--shadow);
        }
        
        .contact-method:hover {
            background: var(--tertiary);
            border-color: var(--accent);
            box-shadow: 0 6px 20px var(--shadow-gold), 0 2px 8px rgba(184, 150, 90, 0.2);
        }
        
        .method-icon {
            width: 35px;
            height: 35px;
            background: var(--green-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: var(--warm-white);
            flex-shrink: 0;
            box-shadow: 0 4px 15px var(--shadow-gold), 0 2px 6px rgba(26, 15, 10, 0.2);
            border: 1px solid var(--accent-dark);
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
            color: var(--accent-dark) !important;
            margin: 0;
            text-shadow: 0 1px 3px rgba(184, 150, 90, 0.3);
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
            font-weight: bold;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s ease;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            font-family: 'SaudiWeb', sans-serif;
        }
        
        .btn-primary {
            background: var(--accent);
            color: var(--warm-white);
            box-shadow: 0 4px 16px var(--shadow-gold);
        }
        
        .btn-primary:hover {
            background: var(--deep-gold);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px var(--shadow-gold);
        }
        
        .btn-secondary {
            background: var(--secondary);
            color: var(--text-primary);
            border: 1px solid var(--border-light);
        }
        
        .btn-secondary:hover {
            border-color: var(--accent);
            box-shadow: 0 4px 16px var(--shadow-gold);
            background: var(--tertiary);
        }
        
        /* Stats */
        .stats-section {
            background: var(--green-gradient);
            border: 2px solid var(--accent-dark);
            border-radius: 16px;
            padding: 1rem;
            margin-top: 1rem;
            box-shadow: 0 10px 35px var(--shadow), 0 0 25px rgba(184, 150, 90, 0.3), inset 0 2px 8px rgba(184, 150, 90, 0.15);
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
            font-family: 'SaudiWeb', sans-serif;
            font-size: 1.6rem;
            font-weight: bold;
            color: var(--warm-white);
            margin-bottom: 0.25rem;
        }
        
        .stat-label {
            color: var(--warm-white);
            font-size: 0.8rem;
            font-weight: 500;
            opacity: 0.9;
        }
        
        /* Footer */
        .footer {
            padding: 1.5rem 0;
            text-align: center;
            border-top: 2px solid var(--accent);
            margin-top: 2rem;
            background: var(--secondary);
            box-shadow: 0 -4px 15px var(--shadow);
        }
        
        .footer-text {
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: var(--secondary);
            border: 1px solid var(--border-light);
            color: var(--text-primary);
            font-size: 1.25rem;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            cursor: pointer;
        }
        
        /* Force mobile styles */
        html {
            background: #F8F0E0 !important;
            background-color: #F8F0E0 !important;
            min-height: 100vh !important;
            scroll-behavior: smooth;
        }
        
        /* Extra viewport protection */
        @viewport {
            background-color: #F8F0E0 !important;
        }
        
        /* Mobile link fixes */
        a[href^="tel:"] {
            color: var(--text-primary) !important;
            text-decoration: none !important;
        }
        
        a[href^="tel:"]:link,
        a[href^="tel:"]:visited,
        a[href^="tel:"]:hover,
        a[href^="tel:"]:active {
            color: var(--text-primary) !important;
            text-decoration: none !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            html {
                background: #F8F0E0 !important;
                background-color: #F8F0E0 !important;
            }
            
            body {
                background: var(--warm-gradient) !important;
                background-color: #F8F0E0 !important;
                color: var(--text-primary) !important;
            }
            
            body::before {
                background: radial-gradient(ellipse at center, rgba(184, 150, 90, 0.15) 0%, transparent 70%) !important;
            }
            
            .contact-item a {
                color: var(--warm-white) !important;
            }
            
            .method-content p {
                color: var(--accent) !important;
            }
            
            /* Force all phone links */
            a[href^="tel:"] {
                color: var(--text-primary) !important;
                text-decoration: none !important;
            }
            
            .method-content a[href^="tel:"] {
                color: var(--accent) !important;
            }
            
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
                gap: 1.5rem;
            }
            
            .service-card {
                padding: 1.5rem;
                background: var(--velvet-gradient) !important;
                color: var(--text-primary) !important;
                margin-bottom: 0.5rem;
            }
            
            .service-card.featured {
                margin-top: 1rem;
                margin-bottom: 1rem;
            }
            
            .contact-section {
                background: var(--velvet-gradient) !important;
                color: var(--text-primary) !important;
                margin-top: 2rem;
            }
            
            .stats-section {
                background: var(--green-gradient) !important;
                color: var(--warm-white) !important;
            }
            
            .footer {
                background: var(--secondary) !important;
                color: var(--text-primary) !important;
            }
            
            .contact-methods {
                grid-template-columns: 1fr;
            }
            
            .contact-method {
                flex-direction: column;
                text-align: center;
                background: var(--secondary) !important;
                color: var(--text-primary) !important;
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
            html {
                background: #F8F0E0 !important;
                background-color: #F8F0E0 !important;
            }
            
            body {
                background: var(--warm-gradient) !important;
                background-color: #F8F0E0 !important;
                color: var(--text-primary) !important;
            }
            
            body::before {
                background: radial-gradient(ellipse at center, rgba(184, 150, 90, 0.15) 0%, transparent 70%) !important;
            }
            
            .contact-item a {
                color: var(--warm-white) !important;
            }
            
            .method-content p {
                color: var(--accent) !important;
            }
            
            /* Extra force for phone links on small screens */
            a[href^="tel:"] {
                color: var(--text-primary) !important;
                text-decoration: none !important;
            }
            
            .method-content a[href^="tel:"] {
                color: var(--accent) !important;
            }
            
            .service-card {
                background: var(--velvet-gradient) !important;
                color: var(--text-primary) !important;
                margin-bottom: 0.75rem;
            }
            
            .service-card.featured {
                margin-top: 1.5rem;
                margin-bottom: 1.5rem;
            }
            
            .contact-section {
                background: var(--velvet-gradient) !important;
                color: var(--text-primary) !important;
                margin-top: 2.5rem;
            }
            
            .stats-section {
                background: var(--green-gradient) !important;
                color: var(--warm-white) !important;
            }
            
            .footer {
                background: var(--secondary) !important;
                color: var(--text-primary) !important;
            }
            
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
        
        /* Luxury Enhancement Effects */
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 0%, rgba(184, 150, 90, 0.1) 0%, transparent 50%);
            border-radius: inherit;
            pointer-events: none;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(ellipse at center, rgba(184, 150, 90, 0.08) 0%, transparent 70%);
            border-radius: inherit;
            pointer-events: none;
        }
        
        .stats-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(184, 150, 90, 0.1) 50%, transparent 70%);
            border-radius: inherit;
            pointer-events: none;
        }
        
        /* Golden glow animation for featured elements */
        @keyframes goldenGlow {
            0%, 100% { box-shadow: 0 8px 25px var(--shadow), 0 0 0 rgba(184, 150, 90, 0); }
            50% { box-shadow: 0 8px 25px var(--shadow), 0 0 20px rgba(184, 150, 90, 0.4); }
        }
        
        .service-card.featured {
            animation: goldenGlow 3s ease-in-out infinite;
            display: flex !important;
            opacity: 1 !important;
            visibility: visible !important;
            min-height: 350px;
            height: 100%;
        }
        
        /* Velvet texture effect */
        .service-card,
        .contact-section,
        .stats-section {
            position: relative;
        }
        
        .service-card::after,
        .contact-section::after {
            content: '';
            position: absolute;
            top: 1px;
            left: 1px;
            right: 1px;
            height: 50%;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.3) 0%, transparent 100%);
            border-radius: inherit;
            pointer-events: none;
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
                         <a href="tel:+966500000000" style="color: #FFFEF7 !important; text-decoration: none !important;">+966 50 000 0000</a>
                     </span>
                     <span class="contact-item">
                         <i class="fab fa-whatsapp"></i>
                         <a href="https://wa.me/966500000000" target="_blank" style="color: #FFFEF7 !important; text-decoration: none !important;">واتساب</a>
                     </span>
                 </div>
                <div class="quick-actions">
                    <a href="tel:+966500000000" class="quick-btn primary" style="color: #FFFEF7 !important; text-decoration: none !important;">
                        <i class="fas fa-phone"></i>
                        احجز الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="quick-btn secondary" target="_blank" style="color: #FFFEF7 !important; text-decoration: none !important;">
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
                <a href="{{ route('home') }}" class="navbar-brand">
                    <i class="fas fa-gem"></i>
                    سلطان المسعري
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <i class="fas fa-certificate"></i>
                        خبير معتمد في تقييم المجوهرات
                    </div>
                    <h1 class="hero-name">سلطان المسعري</h1>
                    <h2 class="hero-title">خبير تقييم المجوهرات والأحجار الكريمة</h2>
                    <p class="hero-subtitle">تقييم احترافي للأحجار الكريمة والماس</p>
                    <p class="hero-description">تقييم احترافي للأحجار الكريمة والماس مع تقارير موثوقة ومعتمدة.</p>
                    <div class="hero-features">
                        <div class="hero-feature-item">
                            <i class="fas fa-star"></i>
                            <span>خبرة أكثر من 20 سنة</span>
                        </div>
                        <div class="hero-feature-item">
                            <i class="fas fa-certificate"></i>
                            <span>تقارير تقييم معتمدة</span>
                        </div>
                        <div class="hero-feature-item">
                            <i class="fas fa-gem"></i>
                            <span>تخصص في الماس والأحجار الكريمة</span>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="#services" class="hero-btn hero-btn-primary" style="color: #FFFEF7 !important; text-decoration: none !important;">
                            <i class="fas fa-clipboard-list"></i>
                            طلب تقييم
                        </a>
                        <a href="https://wa.me/966500000000" target="_blank" class="hero-btn hero-btn-outline" style="color: #1A0F0A !important; text-decoration: none !important;">
                            <i class="fab fa-whatsapp"></i>
                            تواصل عبر واتساب
                        </a>
                        <a href="tel:+966500000000" class="hero-btn hero-btn-outline" style="color: #1A0F0A !important; text-decoration: none !important;">
                            <i class="fas fa-phone"></i>
                            اتصال
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-image-wrapper">
                        <img src="{{ asset('sultan_img.jpg') }}" alt="سلطان المسعري - خبير تقييم المجوهرات">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Services Section Title -->
            <div class="services-title-section">
                <h2 class="services-title">الخدمات</h2>
            </div>
            
            <!-- Services Grid -->
            <div id="services" class="services-container">
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
            
            <!-- About Section -->
            <section class="about-section">
                <div class="container">
                    <h2 class="about-section-title">نبذة تعريفية للموقع</h2>
                    <div class="about-content">
                        <div class="about-text">
                            <h3 class="about-name">سلطان المسعري</h3>
                            <p class="about-subtitle">خبير أحجار كريمة ومدير تنفيذي في صناعة المجوهرات</p>
                            <div class="about-description">
                                <p>يُعد أحد أبرز الخبراء السعوديين في علوم الأحجار الكريمة وتقييم المجوهرات، بخبرة تمتد لأكثر من 20 عامًا في الفحص، التدرّج، والتحليل المخبري وفق أعلى المعايير الدولية. يحمل اعتماد ISO/IEC 17025 لمختبرات الاختبار والمعايرة، إضافة إلى شهادات مهنية معتمدة من GIA، HRD، IGI، وDNA Diamonds، مما يجعله مرجعًا موثوقًا في هذا المجال.</p>
                                <p>يشغل سلطان عدة مناصب في اللجان الوطنية للمعادن الثمينة والأحجار الكريمة، ويقود منشآت متخصصة في التقييم وخدمات المختبر، مع خبرة واسعة في تقييم المواريث والممتلكات وإصدار التقارير الفنية المعتمدة، إلى جانب دوره في تطوير العلامات التجارية للمجوهرات وبناء الهويات الفاخرة.</p>
                                <p>أسس وأدار شركات رائدة في قطاع المجوهرات، ويقدم اليوم خدمات تقييم دقيقة ومعتمدة، قائمة على المعرفة العلمية، والانضباط المهني، والجودة العالية لضمان حقوق العملاء وثقتهم.</p>
                            </div>
                        </div>
                        <div class="about-video-wrapper">
                            <video controls autoplay muted loop playsinline>
                                <source src="{{ asset('sul_video.mp4') }}" type="video/mp4">
                                متصفحك لا يدعم تشغيل الفيديو.
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            
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
                             <p style="color: #8B6914 !important;">+966 50 000 0000</p>
                         </div>
                    </div>
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                         <div class="method-content">
                             <h4>واتساب سريع</h4>
                             <p style="color: #8B6914 !important;">+966 50 000 0000</p>
                         </div>
                    </div>
                </div>
                <div class="contact-buttons">
                    <a href="tel:+966500000000" class="btn btn-primary" style="color: #FFFEF7 !important; text-decoration: none !important;">
                        <i class="fas fa-phone"></i>
                        اتصل الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="btn btn-secondary" target="_blank" style="color: #2F1B14 !important; text-decoration: none !important;">
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


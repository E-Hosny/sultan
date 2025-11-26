<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#EFE8D8">
    <meta name="msapplication-navbutton-color" content="#EFE8D8">
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
            /* ألوان القالب الملكي الكلاسيكي - الأزرق الملكي + الذهبي + Off-white */
            --luxury-gold: #E2C044;
            --deep-gold: #D4B030;
            --warm-cream: #EFE8D8;
            --rich-brown: #1C1C1C;
            --soft-beige: #EFE8D8;
            --dark-chocolate: #1C1C1C;
            --warm-white: #EFE8D8;
            --muted-gold: #E2C044;
            
            /* متغيرات القالب الملكي */
            --primary: #EFE8D8;
            --secondary: #EFE8D8;
            --tertiary: #E8E0D0;
            --accent: #E2C044;
            --accent-light: #E8C85A;
            --accent-dark: #D4B030;
            --royal-blue: #0C2D66;
            --royal-blue-dark: #0A2444;
            --royal-blue-light: #0E3566;
            --text-primary: #1C1C1C;
            --text-secondary: #2C2C2C;
            --text-light: #4A4A4A;
            --text-gold: #E2C044;
            --border: #E2C044;
            --border-light: #E8C85A;
            --shadow: rgba(28, 28, 28, 0.25);
            --shadow-hover: rgba(28, 28, 28, 0.4);
            --shadow-gold: rgba(226, 192, 68, 0.4);
            --shadow-royal: rgba(12, 45, 102, 0.4);
            --gradient: linear-gradient(135deg, #EFE8D8 0%, #E8E0D0 50%, #EFE8D8 100%);
            --velvet-gradient: linear-gradient(145deg, #EFE8D8 0%, #E8E0D0 25%, #EFE8D8 50%, #E8E0D0 75%, #EFE8D8 100%);
            --royal-gradient: linear-gradient(135deg, #0C2D66 0%, #0A2444 100%);
            --blue-gradient: linear-gradient(135deg, #0C2D66 0%, #0E3566 100%);
            --warm-gradient: linear-gradient(135deg, #EFE8D8 0%, #E8E0D0 100%);
        }
        
        body {
            font-family: 'SaudiWeb', 'Inter', sans-serif;
            background: var(--warm-gradient) !important;
            background-color: #EFE8D8 !important;
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
            background: radial-gradient(ellipse at center, rgba(12, 45, 102, 0.1) 0%, transparent 70%) !important;
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
            background: var(--royal-gradient);
            color: #EFE8D8;
            padding: 0.75rem 0;
            position: sticky;
            top: 0;
            z-index: 200;
            box-shadow: 0 4px 25px var(--shadow), 0 2px 10px rgba(12, 45, 102, 0.3);
            border-bottom: 2px solid var(--royal-blue-dark);
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
            color: #EFE8D8;
            width: 16px;
        }
        
        .contact-item a {
            color: #EFE8D8 !important;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .contact-item a:hover {
            color: #EFE8D8;
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
            color: #1C1C1C;
            box-shadow: 0 4px 15px var(--shadow-gold);
        }
        
        .quick-btn.primary:hover {
            background: var(--deep-gold);
            transform: translateY(-1px);
        }
        
        .quick-btn.secondary {
            background: rgba(226, 192, 68, 0.2);
            color: #EFE8D8;
            border: 1px solid #EFE8D8;
        }
        
        .quick-btn.secondary:hover {
            background: rgba(226, 192, 68, 0.3);
            box-shadow: 0 4px 15px var(--shadow-gold);
        }
        
        /* Navigation */
        .navbar {
            background: rgba(239, 232, 216, 0.98);
            backdrop-filter: blur(20px);
            border-bottom: 2px solid var(--accent);
            padding: 1rem 0;
            box-shadow: 0 4px 25px var(--shadow), 0 2px 10px rgba(226, 192, 68, 0.2);
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
            background: var(--royal-blue);
            color: #EFE8D8;
            box-shadow: 0 4px 15px var(--shadow-royal);
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
            background: var(--royal-gradient);
            color: #EFE8D8;
            border: 2px solid var(--royal-blue-dark);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 0.75rem;
            box-shadow: 0 4px 20px var(--shadow-royal), 0 2px 8px rgba(28, 28, 28, 0.3);
        }
        
        .header-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 0.75rem;
            background: var(--velvet-gradient);
            border: 3px solid var(--royal-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: #1C1C1C;
            box-shadow: 0 6px 20px var(--shadow), 0 0 15px var(--shadow-royal), inset 0 2px 8px rgba(12, 45, 102, 0.2);
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
        
        /* Services Grid */
        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
            width: 100%;
            align-items: start;
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
            box-shadow: 0 8px 30px var(--shadow), 0 2px 8px rgba(226, 192, 68, 0.15);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 350px;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px var(--shadow), 0 0 35px var(--shadow-royal);
            border-color: var(--royal-blue);
        }
        
        .service-card.featured {
            border: 3px solid var(--royal-blue);
            box-shadow: 0 10px 35px var(--shadow), 0 0 25px var(--shadow-royal);
        }
        
        .services-container .service-card.featured {
            margin-top: 0;
            align-self: stretch;
        }
        
        .service-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--royal-gradient);
            color: #EFE8D8;
            padding: 0.4rem 0.8rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 10;
            box-shadow: 0 4px 20px var(--shadow-royal), 0 2px 8px rgba(28, 28, 28, 0.3);
            border: 1px solid var(--royal-blue-dark);
        }
        
        .service-icon {
            width: 50px;
            height: 50px;
            background: var(--royal-gradient);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: #EFE8D8;
            margin: 0 auto 1rem;
            box-shadow: 0 4px 20px var(--shadow), 0 2px 10px rgba(12, 45, 102, 0.3), inset 0 2px 8px rgba(12, 45, 102, 0.2);
            border: 1px solid var(--royal-blue-dark);
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
            color: var(--royal-blue);
            margin-bottom: 0.5rem;
            text-shadow: 0 1px 3px rgba(12, 45, 102, 0.3);
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
            background: var(--royal-blue) !important;
            color: #FFFFFF !important;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 15px var(--shadow-royal);
            margin-top: auto;
        }
        
        .service-btn:hover {
            background: var(--royal-blue-dark);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px var(--shadow-royal);
        }
        
        .service-btn.free {
            background: var(--royal-blue);
            color: #FFFFFF;
        }
        
        .service-btn.free:hover {
            background: var(--royal-blue-dark);
            box-shadow: 0 6px 20px var(--shadow-royal);
        }
        
        /* Contact Section */
        .contact-section {
            background: var(--velvet-gradient);
            border: 2px solid var(--royal-blue);
            border-radius: 20px;
            padding: 1.5rem;
            text-align: center;
            margin-top: 1rem;
            box-shadow: 0 10px 35px var(--shadow), 0 0 20px rgba(12, 45, 102, 0.2), inset 0 1px 3px rgba(12, 45, 102, 0.15);
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
            border-color: var(--royal-blue);
            box-shadow: 0 6px 20px var(--shadow-royal), 0 2px 8px rgba(12, 45, 102, 0.2);
        }
        
        .method-icon {
            width: 35px;
            height: 35px;
            background: var(--royal-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: #EFE8D8;
            flex-shrink: 0;
            box-shadow: 0 4px 15px var(--shadow-royal), 0 2px 6px rgba(28, 28, 28, 0.2);
            border: 1px solid var(--royal-blue-dark);
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
            color: var(--royal-blue) !important;
            margin: 0;
            text-shadow: 0 1px 3px rgba(12, 45, 102, 0.3);
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
            background: var(--royal-blue);
            color: #EFE8D8;
            box-shadow: 0 4px 16px var(--shadow-royal);
        }
        
        .btn-primary:hover {
            background: var(--royal-blue-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px var(--shadow-royal);
        }
        
        .btn-secondary {
            background: var(--secondary);
            color: var(--text-primary);
            border: 1px solid var(--border-light);
        }
        
        .btn-secondary:hover {
            border-color: var(--royal-blue);
            box-shadow: 0 4px 16px var(--shadow-royal);
            background: var(--tertiary);
        }
        
        /* Stats */
        .stats-section {
            background: var(--royal-gradient);
            border: 2px solid var(--royal-blue-dark);
            border-radius: 16px;
            padding: 1rem;
            margin-top: 1rem;
            box-shadow: 0 10px 35px var(--shadow), 0 0 25px rgba(12, 45, 102, 0.3), inset 0 2px 8px rgba(12, 45, 102, 0.15);
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
            color: #EFE8D8;
            margin-bottom: 0.25rem;
        }
        
        .stat-label {
            color: #EFE8D8;
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
            background: #EFE8D8 !important;
            background-color: #EFE8D8 !important;
            min-height: 100vh !important;
        }
        
        /* Extra viewport protection */
        @viewport {
            background-color: #EFE8D8 !important;
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
                background: #EFE8D8 !important;
                background-color: #EFE8D8 !important;
            }
            
            body {
                background: var(--warm-gradient) !important;
                background-color: #EFE8D8 !important;
                color: var(--text-primary) !important;
            }
            
            body::before {
                background: radial-gradient(ellipse at center, rgba(12, 45, 102, 0.1) 0%, transparent 70%) !important;
            }
            
            .contact-item a {
                color: #EFE8D8 !important;
            }
            
            .method-content p {
                color: var(--royal-blue) !important;
            }
            
            /* Force all phone links */
            a[href^="tel:"] {
                color: var(--text-primary) !important;
                text-decoration: none !important;
            }
            
            .method-content a[href^="tel:"] {
                color: var(--royal-blue) !important;
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
                background: var(--royal-gradient) !important;
                color: #EFE8D8 !important;
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
                background: #EFE8D8 !important;
                background-color: #EFE8D8 !important;
            }
            
            body {
                background: var(--warm-gradient) !important;
                background-color: #EFE8D8 !important;
                color: var(--text-primary) !important;
            }
            
            body::before {
                background: radial-gradient(ellipse at center, rgba(12, 45, 102, 0.1) 0%, transparent 70%) !important;
            }
            
            .contact-item a {
                color: #EFE8D8 !important;
            }
            
            .method-content p {
                color: var(--royal-blue) !important;
            }
            
            /* Extra force for phone links on small screens */
            a[href^="tel:"] {
                color: var(--text-primary) !important;
                text-decoration: none !important;
            }
            
            .method-content a[href^="tel:"] {
                color: var(--royal-blue) !important;
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
                background: var(--royal-gradient) !important;
                color: #EFE8D8 !important;
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
            background: radial-gradient(circle at 50% 0%, rgba(12, 45, 102, 0.1) 0%, transparent 50%);
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
            background: radial-gradient(ellipse at center, rgba(12, 45, 102, 0.08) 0%, transparent 70%);
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
            background: linear-gradient(45deg, transparent 30%, rgba(12, 45, 102, 0.1) 50%, transparent 70%);
            border-radius: inherit;
            pointer-events: none;
        }
        
        /* Royal blue glow animation for featured elements */
        @keyframes royalGlow {
            0%, 100% { box-shadow: 0 8px 25px var(--shadow), 0 0 0 rgba(12, 45, 102, 0); }
            50% { box-shadow: 0 8px 25px var(--shadow), 0 0 20px rgba(12, 45, 102, 0.4); }
        }
        
        .service-card.featured {
            animation: royalGlow 3s ease-in-out infinite;
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
                         <a href="tel:+966500000000" style="color: #EFE8D8 !important; text-decoration: none !important;">+966 50 000 0000</a>
                     </span>
                     <span class="contact-item">
                         <i class="fab fa-whatsapp"></i>
                         <a href="https://wa.me/966500000000" target="_blank" style="color: #EFE8D8 !important; text-decoration: none !important;">واتساب</a>
                     </span>
                 </div>
                <div class="quick-actions">
                    <a href="tel:+966500000000" class="quick-btn primary" style="color: #1C1C1C !important; text-decoration: none !important;">
                        <i class="fas fa-phone"></i>
                        احجز الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="quick-btn secondary" target="_blank" style="color: #EFE8D8 !important; text-decoration: none !important;">
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
                        <a href="{{ route('switch.template', 'minimal') }}" class="template-option">
                            <i class="fas fa-circle"></i> القالب البسيط
                        </a>
                        <a href="{{ route('switch.template', 'minimal-classic') }}" class="template-option">
                            <i class="fas fa-palette"></i> القالب البسيط الكلاسيكي
                        </a>
                        <a href="{{ route('switch.template', 'emerald-classic') }}" class="template-option">
                            <i class="fas fa-gem"></i> القالب الزمردي الكلاسيكي
                        </a>
                        <a href="{{ route('switch.template', 'royal-classic') }}" class="template-option active">
                            <i class="fas fa-crown"></i> القالب الملكي الكلاسيكي
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
                    <a href="tel:+966500000000" class="service-btn" style="color: #FFFFFF !important;">احجز الآن</a>
                </div>
                
                <!-- التقييم بالصور -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3 class="service-card-title">التقييم بالصور</h3>
                    <div class="service-price">750 ر.س</div>
                    <p class="service-description">تقييم مبدئي شامل بالصور مع تقرير مفصل والتوصيات</p>
                    <a href="tel:+966500000000" class="service-btn" style="color: #FFFFFF !important;">احجز الآن</a>
                </div>
                
                <!-- الاستشارة الشاملة -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="service-card-title">الاستشارة الشاملة</h3>
                    <div class="service-price">1,500 ر.س</div>
                    <p class="service-description">استشارة شاملة لمدة 90 دقيقة مع خطة تطوير متكاملة</p>
                    <a href="tel:+966500000000" class="service-btn" style="color: #FFFFFF !important;">احجز الآن</a>
                </div>
                
                <!-- الاستشارة المجانية -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3 class="service-card-title">جلسة تعريفية</h3>
                    <div class="service-price">مجاناً</div>
                    <p class="service-description">جلسة تعريفية لمدة 20 دقيقة للتعرف على خدماتنا</p>
                    <a href="tel:+966500000000" class="service-btn free" style="color: #FFFFFF !important;">احجز مجاناً</a>
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
                             <p style="color: #0C2D66 !important;">+966 50 000 0000</p>
                         </div>
                    </div>
                    <div class="contact-method">
                        <div class="method-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                         <div class="method-content">
                             <h4>واتساب سريع</h4>
                             <p style="color: #0C2D66 !important;">+966 50 000 0000</p>
                         </div>
                    </div>
                </div>
                <div class="contact-buttons">
                    <a href="tel:+966500000000" class="btn btn-primary" style="color: #EFE8D8 !important; text-decoration: none !important;">
                        <i class="fas fa-phone"></i>
                        اتصل الآن
                    </a>
                    <a href="https://wa.me/966500000000" class="btn btn-secondary" target="_blank" style="color: #1C1C1C !important; text-decoration: none !important;">
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


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - KALS ART</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #ec4899;
            --accent: #f59e0b;
            --success: #10b981;
            --dark: #0f172a;
            --dark-light: #1e293b;
            --text: #e2e8f0;
            --text-muted: #94a3b8;
            --glass: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            color: var(--text);
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Background Animation */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .bg-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.3;
            animation: float 20s infinite ease-in-out;
        }

        .bg-orb:nth-child(1) {
            width: 400px;
            height: 400px;
            background: var(--primary);
            top: -100px;
            right: -100px;
        }

        .bg-orb:nth-child(2) {
            width: 300px;
            height: 300px;
            background: var(--secondary);
            bottom: -50px;
            left: -50px;
            animation-delay: 5s;
        }

        .bg-orb:nth-child(3) {
            width: 350px;
            height: 350px;
            background: var(--accent);
            top: 50%;
            left: 50%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -30px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
            z-index: 1000;
            padding: 1rem 0;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'Playfair Display', serif;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--text);
            border-radius: 3px;
            transition: 0.3s;
        }

        /* Page Header */
        .page-header {
            position: relative;
            padding: 10rem 2rem 6rem;
            text-align: center;
            z-index: 1;
        }

        .page-header h1 {
            font-size: 4rem;
            font-weight: 800;
            font-family: 'Playfair Display', serif;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 5s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .page-header p {
            font-size: 1.3rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Contact Section */
        .contact-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        /* Contact Info */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .info-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .info-card:hover {
            transform: translateX(10px);
            border-color: var(--primary);
            box-shadow: 0 10px 40px rgba(99, 102, 241, 0.3);
        }

        .info-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            flex-shrink: 0;
        }

        .info-content h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .info-content p {
            color: var(--text-muted);
            line-height: 1.6;
        }

        .info-content a {
            color: var(--primary);
            text-decoration: none;
            transition: 0.3s;
        }

        .info-content a:hover {
            color: var(--secondary);
        }

        /* Social Media */
        .social-section {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
        }

        .social-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .social-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .social-card {
            background: rgba(99, 102, 241, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .social-card:hover {
            background: rgba(99, 102, 241, 0.1);
            border-color: var(--primary);
            transform: translateY(-5px);
        }

        .social-card i {
            font-size: 2.5rem;
            margin-bottom: 0.8rem;
        }

        .social-card.facebook i { color: #1877f2; }
        .social-card.instagram i { color: #e4405f; }
        .social-card.linkedin i { color: #0077b5; }
        .social-card.whatsapp i { color: #25d366; }

        .social-card p {
            font-weight: 600;
            font-size: 1rem;
        }

        /* Contact Form */
        .contact-form {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 3rem;
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-header p {
            color: var(--text-muted);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text);
        }

        .form-group label .required {
            color: var(--secondary);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            background: rgba(255, 255, 255, 0.03);
            color: var(--text);
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .submit-btn {
            width: 100%;
            padding: 1.2rem;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Success/Error Message */
        .form-message {
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            display: none;
            align-items: center;
            gap: 0.8rem;
        }

        .form-message.success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: var(--success);
        }

        .form-message.error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .form-message.show {
            display: flex;
        }

        /* Map Section */
        .map-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 0 2rem 4rem;
            position: relative;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 3rem;
            font-weight: 800;
            font-family: 'Playfair Display', serif;
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.2rem;
            color: var(--text-muted);
        }

        .map-container {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow: hidden;
            height: 500px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            filter: grayscale(100%) invert(90%) contrast(90%);
        }

        /* FAQ Section */
        .faq-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .faq-item {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item:hover {
            border-color: var(--primary);
        }

        .faq-question {
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            user-select: none;
        }

        .faq-question h3 {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .faq-question i {
            font-size: 1.5rem;
            color: var(--primary);
            transition: transform 0.3s;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer-content {
            padding: 0 2rem 1.5rem;
            color: var(--text-muted);
            line-height: 1.8;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        /* CTA Section */
        .cta-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .cta-box {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 30px;
            padding: 4rem;
            text-align: center;
            box-shadow: 0 30px 80px rgba(99, 102, 241, 0.4);
        }

        .cta-box h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }

        .cta-box p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-white {
            background: white;
            color: var(--primary);
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 255, 255, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }

        /* Chatbot */
        .chatbot-toggle {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
            transition: all 0.3s;
            z-index: 999;
        }

        .chatbot-toggle:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
        }

        .chatbot-window {
            position: fixed;
            bottom: 100px;
            right: 2rem;
            width: 400px;
            height: 600px;
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            display: none;
            flex-direction: column;
            z-index: 998;
            overflow: hidden;
        }

        .chatbot-window.active {
            display: flex;
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .chatbot-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chatbot-header h3 {
            font-size: 1.2rem;
        }

        .chatbot-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .chatbot-close:hover {
            transform: rotate(90deg);
        }

        .chatbot-messages {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .message {
            padding: 1rem;
            border-radius: 12px;
            max-width: 80%;
            animation: messageSlide 0.3s ease;
        }

        @keyframes messageSlide {
            from { transform: translateX(-10px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .message.bot {
            background: var(--glass);
            border: 1px solid var(--glass-border);
            align-self: flex-start;
        }

        .message.user {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            align-self: flex-end;
        }

        .chatbot-input {
            padding: 1.5rem;
            border-top: 1px solid var(--glass-border);
            display: flex;
            gap: 1rem;
        }

        .chatbot-input input {
            flex: 1;
            padding: 0.8rem;
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            background: var(--glass);
            color: var(--text);
            font-size: 1rem;
        }

        .chatbot-input input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .chatbot-input button {
            padding: 0.8rem 1.5rem;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .chatbot-input button:hover {
            transform: scale(1.05);
        }

        /* Footer */
        footer {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(20px);
            border-top: 1px solid var(--glass-border);
            padding: 3rem 2rem 1.5rem;
            position: relative;
            z-index: 1;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .footer-section p,
        .footer-section a {
            color: var(--text-muted);
            line-height: 1.8;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: 0.3s;
        }

        .footer-section a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .social-links a:hover {
            background: var(--primary);
            border-color: var(--primary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid var(--glass-border);
            color: var(--text-muted);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                flex-direction: column;
                background: rgba(15, 23, 42, 0.98);
                width: 100%;
                padding: 2rem;
                transition: 0.3s;
            }

            .nav-links.active {
                left: 0;
            }

            .menu-toggle {
                display: flex;
            }

            .page-header h1 {
                font-size: 2.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .social-grid {
                grid-template-columns: 1fr;
            }

            .chatbot-window {
                width: calc(100% - 2rem);
                right: 1rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .cta-box {
                padding: 2.5rem 1.5rem;
            }

            .cta-box h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Background Animation -->
    <div class="bg-animation">
        <div class="bg-orb"></div>
        <div class="bg-orb"></div>
        <div class="bg-orb"></div>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="home.php" class="logo">KALS ART</a>
            <ul class="nav-links" id="navLinks">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="kompetensi.php">Kompetensi</a></li>
                <li><a href="kontak.php" class="active">Kontak</a></li>
                <li><a href="logistrasi.php">Logistrasi</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Hubungi Kami</h1>
        <p>Siap membantu mewujudkan website impian Anda. Mari diskusikan project Anda bersama kami!</p>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Alamat Kantor</h3>
                        <p>Lab FSTI ISTN<br>Jakarta, Indonesia</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>Telepon</h3>
                        <p><a href="tel:089530739047">089530739047</a></p>
                        <p style="font-size: 0.9rem; margin-top: 0.3rem;">Senin - Jumat: 09:00 - 17:00 WIB</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:haikalrasyaa16@gmail.com">haikalrasyaa16@gmail.com</a></p>
                        <p style="font-size: 0.9rem; margin-top: 0.3rem;">Respon dalam 24 jam</p>
                    </div>
                </div>

                <div class="social-section">
                    <h3>Ikuti Kami</h3>
                    <div class="social-grid">
                        <div class="social-card facebook">
                            <i class="fab fa-facebook-f"></i>
                            <p>Facebook</p>
                        </div>
                        <div class="social-card instagram">
                            <i class="fab fa-instagram"></i>
                            <p>Instagram</p>
                        </div>
                        <div class="social-card linkedin">
                            <i class="fab fa-linkedin-in"></i>
                            <p>LinkedIn</p>
                        </div>
                        <div class="social-card whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            <p>WhatsApp</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <div class="form-header">
                    <h2>Kirim <span class="gradient-text">Pesan</span></h2>
                    <p>Isi form di bawah dan kami akan segera menghubungi Anda</p>
                </div>

                <div class="form-message" id="formMessage">
                    <i class="fas fa-check-circle"></i>
                    <span id="messageText"></span>
                </div>

                <form id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nama Lengkap <span class="required">*</span></label>
                            <input type="text" name="name" required placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Email <span class="required">*</span></label>
                            <input type="email" name="email" required placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Nomor Telepon <span class="required">*</span></label>
                            <input type="tel" name="phone" required placeholder="08123456789">
                        </div>
                        <div class="form-group">
                            <label>Paket yang Diminati</label>
                            <select name="package">
                                <option value="">Pilih Paket</option>
                                <option value="low">Low Package (500K - 3JT)</option>
                                <option value="medium">Medium Package (3JT - 10JT)</option>
                                <option value="high">High Package (10JT - 35JT)</option>
                                <option value="analisis">Analisis & Riset (20JT - 60JT)</option>
                                <option value="enterprise">Enterprise (50JT - 100JT+)</option>
                                <option value="other">Belum Tahu / Konsultasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Subjek <span class="required">*</span></label>
                        <input type="text" name="subject" required placeholder="Perihal pertanyaan Anda">
                    </div>

                    <div class="form-group">
                        <label>Pesan <span class="required">*</span></label>
                        <textarea name="message" required placeholder="Ceritakan lebih detail tentang project atau pertanyaan Anda..."></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="section-title">
            <h2>Lokasi <span class="gradient-text">Kami</span></h2>
            <p>Kunjungi kantor kami untuk konsultasi langsung</p>
        </div>
        <div class="map-container">
            <!-- Replace with your actual Google Maps embed -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.1944491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sJakarta!5e0!3m2!1sen!2sid!4v1234567890"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="section-title">
            <h2>Pertanyaan <span class="gradient-text">Umum</span></h2>
            <p>Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Berapa lama waktu pengerjaan website?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Waktu pengerjaan bervariasi tergantung kompleksitas project: Low Package (1-2 minggu), Medium Package (1-2 bulan), High Package (2-4 bulan), Analisis (3-6 bulan), dan Enterprise (6-12+ bulan). Timeline detail akan dijelaskan saat konsultasi awal.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah ada biaya maintenance setelah website selesai?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Semua paket sudah termasuk support dan maintenance untuk periode tertentu (3-24 bulan tergantung paket). Setelah periode tersebut, Anda dapat berlangganan maintenance plan mulai dari 10-20% harga project per tahun, atau manage sendiri websitenya.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah saya bisa request revisi?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Ya, tentu! Setiap paket memiliki jumlah revisi yang berbeda: Low (2-3 revisi), Medium (3-5 revisi), High (unlimited minor revisi), dan Enterprise (unlimited revisi). Revisi major di luar scope agreement akan dikenakan biaya tambahan.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Metode pembayaran apa yang diterima?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Kami menerima pembayaran melalui transfer bank, e-wallet (GoPay, OVO, Dana), dan credit card. Sistem pembayaran bertahap: 30% DP, 40% saat progress 50%, dan 30% sisanya saat serah terima. Untuk Enterprise, skema pembayaran dapat disesuaikan.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah website sudah termasuk hosting dan domain?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Paket Low dan Medium sudah termasuk hosting 1 tahun dan domain .com/.id. Untuk High Package ke atas, kami akan bantu setup di hosting pilihan Anda (AWS, GCP, atau shared hosting). Renewal hosting/domain tahun berikutnya menjadi tanggung jawab klien.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah saya mendapatkan source code?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Ya, setelah pelunasan 100%, Anda akan mendapatkan full source code, dokumentasi, dan akses penuh ke website. Untuk Enterprise package, source code diserahkan melalui private repository dengan full documentation dan knowledge transfer session.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah bisa konsultasi gratis dulu?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Tentu! Kami menyediakan konsultasi gratis untuk semua calon klien. Anda bisa hubungi kami via WhatsApp, email, atau isi form kontak untuk schedule meeting. Kami akan diskusikan kebutuhan, solusi terbaik, dan estimasi biaya tanpa komitmen apapun.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah website akan SEO-friendly?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        Ya, semua website yang kami buat sudah dioptimasi untuk SEO: struktur HTML semantic, meta tags, sitemap, robots.txt, fast loading speed, mobile-friendly, dan structured data. Untuk SEO advanced (link building, content strategy), kami menyediakan layanan SEO terpisah.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-box">
            <h2>Siap Memulai Project Anda?</h2>
            <p>Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik!</p>
            <div class="cta-buttons">
                <a href="https://wa.me/6289530739047" class="btn btn-white" target="_blank">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
                <a href="mailto:haikalrasyaa16@gmail.com" class="btn btn-outline">
                    <i class="fas fa-envelope"></i> Email Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Chatbot -->
    <button class="chatbot-toggle" id="chatbotToggle">
        <i class="fas fa-comments"></i>
    </button>

    <div class="chatbot-window" id="chatbotWindow">
        <div class="chatbot-header">
            <h3><i class="fas fa-robot"></i> KALS Assistant</h3>
            <button class="chatbot-close" id="chatbotClose">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="chatbot-messages" id="chatbotMessages">
            <div class="message bot">
                Halo! 👋 Ada yang bisa saya bantu? Silakan tanyakan tentang kontak, lokasi, atau cara berkomunikasi dengan kami!
            </div>
        </div>
        <div class="chatbot-input">
            <input type="text" id="chatbotInput" placeholder="Ketik pesan Anda...">
            <button id="chatbotSend"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>KALS ART</h3>
                <p>Solusi pembuatan website profesional untuk berbagai kebutuhan bisnis Anda. Dari landing page hingga sistem enterprise.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="layanan.php">Layanan</a>
                <a href="kompetensi.php">Kompetensi</a>
            </div>
            <div class="footer-section">
                <h3>Layanan</h3>
                <a href="layanan.php#low">Paket Low</a>
                <a href="layanan.php#medium">Paket Medium</a>
                <a href="layanan.php#high">Paket High</a>
                <a href="layanan.php#enterprise">Enterprise</a>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <p><i class="fas fa-map-marker-alt"></i> Lab FSTI ISTN</p>
                <p><i class="fas fa-phone"></i> 089530739047</p>
                <p><i class="fas fa-envelope"></i> haikalrasyaa16@gmail.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 KALS ART. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all items
                faqItems.forEach(i => i.classList.remove('active'));
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

        // Contact Form Submission
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');
        const messageText = document.getElementById('messageText');

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);

            // Simulate form submission
            try {
                // In production, replace this with actual API call
                await new Promise(resolve => setTimeout(resolve, 1500));

                // Show success message
                formMessage.classList.remove('error');
                formMessage.classList.add('success', 'show');
                messageText.textContent = 'Pesan Anda berhasil dikirim! Kami akan menghubungi Anda segera.';

                // Reset form
                contactForm.reset();

                // Hide message after 5 seconds
                setTimeout(() => {
                    formMessage.classList.remove('show');
                }, 5000);

            } catch (error) {
                // Show error message
                formMessage.classList.remove('success');
                formMessage.classList.add('error', 'show');
                messageText.textContent = 'Terjadi kesalahan. Silakan coba lagi atau hubungi kami langsung.';

                setTimeout(() => {
                    formMessage.classList.remove('show');
                }, 5000);
            }
        });

        // Get URL parameter for pre-selected package
        const urlParams = new URLSearchParams(window.location.search);
        const selectedPackage = urlParams.get('paket');
        if (selectedPackage) {
            const packageSelect = document.querySelector('select[name="package"]');
            if (packageSelect) {
                packageSelect.value = selectedPackage;
            }
        }

        // Chatbot Toggle
        const chatbotToggle = document.getElementById('chatbotToggle');
        const chatbotWindow = document.getElementById('chatbotWindow');
        const chatbotClose = document.getElementById('chatbotClose');
        const chatbotSend = document.getElementById('chatbotSend');
        const chatbotInput = document.getElementById('chatbotInput');
        const chatbotMessages = document.getElementById('chatbotMessages');

        chatbotToggle.addEventListener('click', () => {
            chatbotWindow.classList.add('active');
        });

        chatbotClose.addEventListener('click', () => {
            chatbotWindow.classList.remove('active');
        });

        // Send Message Function
        async function sendMessage() {
            const message = chatbotInput.value.trim();
            if (!message) return;

            const userMessage = document.createElement('div');
            userMessage.className = 'message user';
            userMessage.textContent = message;
            chatbotMessages.appendChild(userMessage);

            chatbotInput.value = '';
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

            const typingIndicator = document.createElement('div');
            typingIndicator.className = 'message bot';
            typingIndicator.innerHTML = '<i class="fas fa-ellipsis-h"></i> Mengetik...';
            chatbotMessages.appendChild(typingIndicator);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

            setTimeout(() => {
                typingIndicator.remove();
                
                const botMessage = document.createElement('div');
                botMessage.className = 'message bot';
                
                let response = '';
                const lowerMsg = message.toLowerCase();
                
                if (lowerMsg.includes('alamat') || lowerMsg.includes('lokasi') || lowerMsg.includes('kantor')) {
                    response = 'Kantor kami berada di Lab FSTI ISTN, Jakarta. Anda bisa lihat lokasi lengkap di peta yang ada di halaman ini!';
                } else if (lowerMsg.includes('telepon') || lowerMsg.includes('phone') || lowerMsg.includes('telp')) {
                    response = 'Anda bisa menghubungi kami di 089530739047. Jam kerja kami Senin-Jumat 09:00-17:00 WIB.';
                } else if (lowerMsg.includes('email') || lowerMsg.includes('mail')) {
                    response = 'Email kami: haikalrasyaa16@gmail.com. Kami akan merespon dalam 24 jam!';
                } else if (lowerMsg.includes('whatsapp') || lowerMsg.includes('wa')) {
                    response = 'Silakan chat kami di WhatsApp: 089530739047 atau klik tombol WhatsApp di bagian bawah halaman!';
                } else if (lowerMsg.includes('jam') || lowerMsg.includes('buka') || lowerMsg.includes('operasional')) {
                    response = 'Jam operasional kami: Senin-Jumat 09:00-17:00 WIB. Di luar jam kerja, silakan kirim email atau WhatsApp dan kami akan respon segera!';
                } else {
                    response = 'Untuk pertanyaan lebih lanjut, silakan isi form kontak atau hubungi kami langsung. Kami siap membantu Anda!';
                }
                
                botMessage.textContent = response;
                chatbotMessages.appendChild(botMessage);
                chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
            }, 1500);
        }

        chatbotSend.addEventListener('click', sendMessage);
        chatbotInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        // Social media cards click handlers
        document.querySelectorAll('.social-card').forEach(card => {
            card.addEventListener('click', () => {
                const platform = card.classList[1]; // facebook, instagram, etc.
                // In production, replace with actual social media URLs
                console.log(`Opening ${platform}`);
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - KALS ART</title>
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

        /* Package Filter */
        .package-filter {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }

        .filter-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.8rem 1.5rem;
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            background: var(--glass);
            backdrop-filter: blur(10px);
            color: var(--text);
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-color: transparent;
            transform: translateY(-2px);
        }

        /* Packages Section */
        .packages-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 0 2rem 4rem;
            position: relative;
            z-index: 1;
        }

        .package-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            padding: 3rem;
            margin-bottom: 3rem;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .package-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .package-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 30px 80px rgba(99, 102, 241, 0.3);
        }

        .package-card:hover::before {
            transform: scaleX(1);
        }

        .package-badge {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .badge-low {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .badge-medium {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
        }

        .badge-high {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }

        .badge-analisis {
            background: linear-gradient(135deg, #f59e0b, #d97706);
        }

        .badge-enterprise {
            background: linear-gradient(135deg, #ec4899, #db2777);
        }

        .package-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .package-info h2 {
            font-size: 2.5rem;
            font-weight: 800;
            font-family: 'Playfair Display', serif;
            margin-bottom: 0.5rem;
        }

        .package-subtitle {
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .package-price {
            text-align: right;
        }

        .price-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .price-amount {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .package-description {
            color: var(--text-muted);
            line-height: 1.8;
            margin-bottom: 2rem;
            font-size: 1.05rem;
        }

        .package-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .package-section h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .package-section h3 i {
            color: var(--primary);
        }

        .feature-list {
            list-style: none;
        }

        .feature-list li {
            padding: 0.7rem 0;
            display: flex;
            align-items: flex-start;
            gap: 0.8rem;
            color: var(--text-muted);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list i {
            color: var(--success);
            margin-top: 0.2rem;
            flex-shrink: 0;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .tech-badge {
            padding: 0.5rem 1rem;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 8px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tech-badge i {
            color: var(--primary);
        }

        .package-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
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

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            flex: 1;
            justify-content: center;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
        }

        .btn-secondary {
            background: var(--glass);
            color: var(--text);
            border: 1px solid var(--glass-border);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--primary);
        }

        /* Comparison Table */
        .comparison-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
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

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .comparison-table {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1.5rem;
            text-align: left;
            border-bottom: 1px solid var(--glass-border);
        }

        th {
            background: rgba(99, 102, 241, 0.1);
            font-weight: 700;
            color: var(--primary);
        }

        td:first-child,
        th:first-child {
            font-weight: 600;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .check-icon {
            color: var(--success);
            font-size: 1.2rem;
        }

        .cross-icon {
            color: var(--text-muted);
            font-size: 1.2rem;
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
            .package-grid {
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

            .package-header {
                flex-direction: column;
            }

            .package-price {
                text-align: left;
            }

            .package-actions {
                flex-direction: column;
            }

            .chatbot-window {
                width: calc(100% - 2rem);
                right: 1rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .comparison-table {
                font-size: 0.9rem;
            }

            th, td {
                padding: 1rem;
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
                <li><a href="layanan.php" class="active">Layanan</a></li>
                <li><a href="kompetensi.php">Kompetensi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
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
        <h1>Paket Layanan Kami</h1>
        <p>Solusi website profesional untuk setiap kebutuhan bisnis, dari landing page hingga sistem enterprise</p>
    </section>

    <!-- Package Filter -->
    <section class="package-filter">
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">Semua Paket</button>
            <button class="filter-btn" data-filter="low">Low Package</button>
            <button class="filter-btn" data-filter="medium">Medium Package</button>
            <button class="filter-btn" data-filter="high">High Package</button>
            <button class="filter-btn" data-filter="analisis">Analisis & Riset</button>
            <button class="filter-btn" data-filter="enterprise">Enterprise</button>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="packages-section">
        <!-- LOW PACKAGE -->
        <div class="package-card" data-category="low" id="low">
            <span class="package-badge badge-low">LOW PACKAGE</span>
            <div class="package-header">
                <div class="package-info">
                    <h2>Landing Page & Website Sederhana</h2>
                    <p class="package-description">
                Website dinamis dengan Content Management System (CMS), sistem login sederhana, dan fitur interaktif. Mampu mengelola konten sendiri tanpa coding. Cocok untuk toko online, website sekolah, atau membership site.
            </p>

            <div class="package-grid">
                <div class="package-section">
                    <h3><i class="fas fa-check-circle"></i> Fitur Utama</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Fully Responsive Multi-Device</li>
                        <li><i class="fas fa-check"></i> CMS Dashboard Admin</li>
                        <li><i class="fas fa-check"></i> Sistem Login User/Member</li>
                        <li><i class="fas fa-check"></i> Database MySQL/PostgreSQL</li>
                        <li><i class="fas fa-check"></i> Blog dengan Kategori</li>
                        <li><i class="fas fa-check"></i> Payment Gateway (Midtrans/Xendit)</li>
                        <li><i class="fas fa-check"></i> Newsletter Subscription</li>
                        <li><i class="fas fa-check"></i> Social Media Integration</li>
                        <li><i class="fas fa-check"></i> SEO Optimization</li>
                        <li><i class="fas fa-check"></i> Google Analytics</li>
                        <li><i class="fas fa-check"></i> Live Chat Widget</li>
                        <li><i class="fas fa-check"></i> Backup Otomatis</li>
                    </ul>
                </div>

                <div class="package-section">
                    <h3><i class="fas fa-code"></i> Teknologi</h3>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class="fab fa-python"></i> Python/PHP</span>
                        <span class="tech-badge"><i class="fas fa-database"></i> MySQL</span>
                        <span class="tech-badge"><i class="fab fa-react"></i> React/Vue</span>
                        <span class="tech-badge"><i class="fas fa-server"></i> REST API</span>
                        <span class="tech-badge"><i class="fab fa-wordpress"></i> WordPress/Custom</span>
                    </div>
                    <h3 style="margin-top: 2rem;"><i class="fas fa-clock"></i> Timeline</h3>
                    <p style="color: var(--text-muted); margin-top: 0.5rem;">1-2 Bulan Pengerjaan</p>
                    <h3 style="margin-top: 1.5rem;"><i class="fas fa-users"></i> Cocok Untuk</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> UKM Berkembang</li>
                        <li><i class="fas fa-check"></i> Institusi Pendidikan</li>
                        <li><i class="fas fa-check"></i> Toko Online Sederhana</li>
                        <li><i class="fas fa-check"></i> Portal Berita Komunitas</li>
                    </ul>
                </div>
            </div>

            <div class="package-actions">
                <a href="kontak.php?paket=medium" class="btn btn-primary">
                    <i class="fas fa-rocket"></i> Pesan Sekarang
                </a>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-info-circle"></i> Detail Lengkap
                </a>
            </div>
        </div>

        <!-- HIGH PACKAGE -->
        <div class="package-card" data-category="high" id="high">
            <span class="package-badge badge-high">HIGH PACKAGE</span>
            <div class="package-header">
                <div class="package-info">
                    <h2>Web App & Sistem Terintegrasi</h2>
                    <p class="package-subtitle">Aplikasi web kompleks dengan fitur advanced</p>
                </div>
                <div class="package-price">
                    <p class="price-label">Mulai dari</p>
                    <div class="price-amount">10JT - 35JT</div>
                </div>
            </div>
            <p class="package-description">
                Aplikasi web kompleks dengan multiple user roles, sistem workflow, integrasi API pihak ketiga, dan fitur-fitur advanced. Real-time processing dan automation untuk bisnis menengah-besar.
            </p>

            <div class="package-grid">
                <div class="package-section">
                    <h3><i class="fas fa-check-circle"></i> Fitur Utama</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Progressive Web App (PWA)</li>
                        <li><i class="fas fa-check"></i> Multi-User Role & Permission</li>
                        <li><i class="fas fa-check"></i> Advanced Authentication (OAuth, 2FA)</li>
                        <li><i class="fas fa-check"></i> Real-time Notifications</li>
                        <li><i class="fas fa-check"></i> Advanced Search & Filtering</li>
                        <li><i class="fas fa-check"></i> Data Export/Import (CSV, Excel)</li>
                        <li><i class="fas fa-check"></i> Payment Gateway Multi-Channel</li>
                        <li><i class="fas fa-check"></i> Shipping Integration</li>
                        <li><i class="fas fa-check"></i> Inventory Management</li>
                        <li><i class="fas fa-check"></i> Analytics Dashboard</li>
                        <li><i class="fas fa-check"></i> Email Automation</li>
                        <li><i class="fas fa-check"></i> API untuk Mobile App</li>
                        <li><i class="fas fa-check"></i> CDN Integration</li>
                        <li><i class="fas fa-check"></i> 3-6 Bulan Support</li>
                    </ul>
                </div>

                <div class="package-section">
                    <h3><i class="fas fa-code"></i> Teknologi</h3>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class="fab fa-python"></i> Django/Flask</span>
                        <span class="tech-badge"><i class="fas fa-database"></i> PostgreSQL</span>
                        <span class="tech-badge"><i class="fab fa-react"></i> React/Next.js</span>
                        <span class="tech-badge"><i class="fas fa-server"></i> RESTful API</span>
                        <span class="tech-badge"><i class="fab fa-node-js"></i> Node.js</span>
                        <span class="tech-badge"><i class="fas fa-bolt"></i> Redis Cache</span>
                    </div>
                    <h3 style="margin-top: 2rem;"><i class="fas fa-clock"></i> Timeline</h3>
                    <p style="color: var(--text-muted); margin-top: 0.5rem;">2-4 Bulan Pengerjaan</p>
                    <h3 style="margin-top: 1.5rem;"><i class="fas fa-users"></i> Cocok Untuk</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> E-Commerce Full-Featured</li>
                        <li><i class="fas fa-check"></i> Learning Management System</li>
                        <li><i class="fas fa-check"></i> Booking/Reservation System</li>
                        <li><i class="fas fa-check"></i> SaaS Application</li>
                        <li><i class="fas fa-check"></i> CRM System</li>
                    </ul>
                </div>
            </div>

            <div class="package-actions">
                <a href="kontak.php?paket=high" class="btn btn-primary">
                    <i class="fas fa-rocket"></i> Pesan Sekarang
                </a>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-info-circle"></i> Detail Lengkap
                </a>
            </div>
        </div>

        <!-- ANALISIS PACKAGE -->
        <div class="package-card" data-category="analisis" id="analisis">
            <span class="package-badge badge-analisis">ANALISIS & RISET</span>
            <div class="package-header">
                <div class="package-info">
                    <h2>Platform Data Science & Algoritma</h2>
                    <p class="package-subtitle">Machine learning, analisis data, dan simulasi</p>
                </div>
                <div class="package-price">
                    <p class="price-label">Mulai dari</p>
                    <div class="price-amount">20JT - 60JT</div>
                </div>
            </div>
            <p class="package-description">
                Platform berbasis data science, machine learning, atau algoritma khusus untuk keperluan riset, analisis data, simulasi, atau sistem rekomendasi. Fokus pada processing data dan visualisasi untuk institusi riset dan perusahaan data-driven.
            </p>

            <div class="package-grid">
                <div class="package-section">
                    <h3><i class="fas fa-check-circle"></i> Fitur Utama</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Machine Learning Integration</li>
                        <li><i class="fas fa-check"></i> Data Preprocessing Pipeline</li>
                        <li><i class="fas fa-check"></i> Interactive Data Visualization</li>
                        <li><i class="fas fa-check"></i> Statistical Analysis Tools</li>
                        <li><i class="fas fa-check"></i> Custom Algorithm Implementation</li>
                        <li><i class="fas fa-check"></i> Real-time Data Streaming</li>
                        <li><i class="fas fa-check"></i> Big Data Processing</li>
                        <li><i class="fas fa-check"></i> Jupyter Notebook Integration</li>
                        <li><i class="fas fa-check"></i> Model Version Control (MLflow)</li>
                        <li><i class="fas fa-check"></i> A/B Testing Framework</li>
                        <li><i class="fas fa-check"></i> Automated Reporting</li>
                        <li><i class="fas fa-check"></i> Docker Containerization</li>
                        <li><i class="fas fa-check"></i> Cloud Deployment</li>
                        <li><i class="fas fa-check"></i> 6-12 Bulan Maintenance</li>
                    </ul>
                </div>

                <div class="package-section">
                    <h3><i class="fas fa-code"></i> Teknologi</h3>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class="fab fa-python"></i> Python</span>
                        <span class="tech-badge"><i class="fas fa-brain"></i> TensorFlow</span>
                        <span class="tech-badge"><i class="fas fa-chart-line"></i> Pandas</span>
                        <span class="tech-badge"><i class="fas fa-database"></i> PostgreSQL</span>
                        <span class="tech-badge"><i class="fas fa-chart-bar"></i> Plotly/D3.js</span>
                        <span class="tech-badge"><i class="fab fa-docker"></i> Docker</span>
                    </div>
                    <h3 style="margin-top: 2rem;"><i class="fas fa-clock"></i> Timeline</h3>
                    <p style="color: var(--text-muted); margin-top: 0.5rem;">3-6 Bulan Pengerjaan</p>
                    <h3 style="margin-top: 1.5rem;"><i class="fas fa-users"></i> Cocok Untuk</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Institusi Riset & Universitas</li>
                        <li><i class="fas fa-check"></i> Business Intelligence</li>
                        <li><i class="fas fa-check"></i> Sistem Rekomendasi</li>
                        <li><i class="fas fa-check"></i> Predictive Analytics</li>
                        <li><i class="fas fa-check"></i> Research Data Management</li>
                    </ul>
                </div>
            </div>

            <div class="package-actions">
                <a href="kontak.php?paket=analisis" class="btn btn-primary">
                    <i class="fas fa-rocket"></i> Pesan Sekarang
                </a>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-info-circle"></i> Detail Lengkap
                </a>
            </div>
        </div>

        <!-- ENTERPRISE PACKAGE -->
        <div class="package-card" data-category="enterprise" id="enterprise">
            <span class="package-badge badge-enterprise">ENTERPRISE</span>
            <div class="package-header">
                <div class="package-info">
                    <h2>Enterprise Resource Planning (ERP)</h2>
                    <p class="package-subtitle">Sistem informasi enterprise-level terintegrasi</p>
                </div>
                <div class="package-price">
                    <p class="price-label">Mulai dari</p>
                    <div class="price-amount">50JT - 100JT+</div>
                </div>
            </div>
            <p class="package-description">
                Sistem informasi enterprise-level yang mengintegrasikan seluruh proses bisnis perusahaan. Skalabilitas tinggi, security maksimal, high availability, dan dapat handle ribuan user concurrent. Cocok untuk perusahaan besar dan korporasi.
            </p>

            <div class="package-grid">
                <div class="package-section">
                    <h3><i class="fas fa-check-circle"></i> Fitur Utama</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Modular Architecture (Finance, HR, Inventory)</li>
                        <li><i class="fas fa-check"></i> Multi-Company & Multi-Branch</li>
                        <li><i class="fas fa-check"></i> Workflow Automation Engine</li>
                        <li><i class="fas fa-check"></i> Document Management System</li>
                        <li><i class="fas fa-check"></i> Business Intelligence Dashboard</li>
                        <li><i class="fas fa-check"></i> Integration Hub (Third-Party)</li>
                        <li><i class="fas fa-check"></i> Single Sign-On (SSO) & LDAP</li>
                        <li><i class="fas fa-check"></i> Role-Based Access Control (RBAC)</li>
                        <li><i class="fas fa-check"></i> Complete Audit Trail</li>
                        <li><i class="fas fa-check"></i> Multi-Currency & Multi-Language</li>
                        <li><i class="fas fa-check"></i> Automated Backup & Disaster Recovery</li>
                        <li><i class="fas fa-check"></i> Load Balancing & Auto-Scaling</li>
                        <li><i class="fas fa-check"></i> 99.9% Uptime SLA</li>
                        <li><i class="fas fa-check"></i> Microservices Architecture</li>
                        <li><i class="fas fa-check"></i> CI/CD Pipeline</li>
                        <li><i class="fas fa-check"></i> 24/7 Technical Support</li>
                        <li><i class="fas fa-check"></i> 1-2 Tahun Warranty</li>
                    </ul>
                </div>

                <div class="package-section">
                    <h3><i class="fas fa-code"></i> Teknologi</h3>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class="fab fa-python"></i> Python/Java</span>
                        <span class="tech-badge"><i class="fas fa-database"></i> PostgreSQL</span>
                        <span class="tech-badge"><i class="fab fa-react"></i> React</span>
                        <span class="tech-badge"><i class="fab fa-docker"></i> Kubernetes</span>
                        <span class="tech-badge"><i class="fas fa-server"></i> Microservices</span>
                        <span class="tech-badge"><i class="fab fa-aws"></i> AWS/GCP</span>
                    </div>
                    <h3 style="margin-top: 2rem;"><i class="fas fa-clock"></i> Timeline</h3>
                    <p style="color: var(--text-muted); margin-top: 0.5rem;">6-12+ Bulan Pengerjaan</p>
                    <h3 style="margin-top: 1.5rem;"><i class="fas fa-users"></i> Cocok Untuk</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Perusahaan Besar & Korporasi</li>
                        <li><i class="fas fa-check"></i> Holding Company</li>
                        <li><i class="fas fa-check"></i> Institusi Pemerintah</li>
                        <li><i class="fas fa-check"></i> Manufacturing Company</li>
                        <li><i class="fas fa-check"></i> Multi-Location Organization</li>
                    </ul>
                </div>
            </div>

            <div class="package-actions">
                <a href="kontak.php?paket=enterprise" class="btn btn-primary">
                    <i class="fas fa-rocket"></i> Konsultasi Gratis
                </a>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-info-circle"></i> Detail Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="comparison-section">
        <div class="section-title">
            <h2>Perbandingan <span class="gradient-text">Paket</span></h2>
            <p>Temukan paket yang paling sesuai dengan kebutuhan Anda</p>
        </div>
        <div class="comparison-table">
            <table>
                <thead>
                    <tr>
                        <th>Fitur</th>
                        <th>Low</th>
                        <th>Medium</th>
                        <th>High</th>
                        <th>Analisis</th>
                        <th>Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Responsive Design</td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>Database Support</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>Python Backend</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td>Optional</td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>REST API</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td>Basic</td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>Machine Learning</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Multi-User System</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td>Basic</td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>Real-time Features</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>Microservices</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td>Optional</td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>24/7 Support</td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-times cross-icon"></i></td>
                        <td><i class="fas fa-check check-icon"></i></td>
                    </tr>
                    <tr>
                        <td>Timeline</td>
                        <td>1-2 Minggu</td>
                        <td>1-2 Bulan</td>
                        <td>2-4 Bulan</td>
                        <td>3-6 Bulan</td>
                        <td>6-12+ Bulan</td>
                    </tr>
                </tbody>
            </table>
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
                Halo! 👋 Butuh bantuan memilih paket yang tepat? Saya siap membantu Anda!
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
                <a href="#low">Paket Low</a>
                <a href="#medium">Paket Medium</a>
                <a href="#high">Paket High</a>
                <a href="#enterprise">Enterprise</a>
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

        // Package Filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const packageCards = document.querySelectorAll('.package-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                packageCards.forEach(card => {
                    if (filter === 'all') {
                        card.style.display = 'block';
                    } else {
                        if (card.getAttribute('data-category') === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });

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
                
                if (lowerMsg.includes('paket') || lowerMsg.includes('harga')) {
                    response = 'Kami memiliki 5 paket: Low (500K-3JT), Medium (3JT-10JT), High (10JT-35JT), Analisis (20JT-60JT), dan Enterprise (50JT-100JT+). Paket mana yang sesuai dengan kebutuhan Anda?';
                } else if (lowerMsg.includes('low')) {
                    response = 'Paket Low cocok untuk landing page dan website sederhana. Harga mulai 500K-3JT dengan timeline 1-2 minggu. Termasuk hosting 1 tahun!';
                } else if (lowerMsg.includes('medium')) {
                    response = 'Paket Medium untuk website dinamis dengan CMS. Harga 3JT-10JT, timeline 1-2 bulan. Cocok untuk toko online atau website sekolah.';
                } else if (lowerMsg.includes('high')) {
                    response = 'Paket High untuk web app kompleks. Harga 10JT-35JT, timeline 2-4 bulan. Fitur lengkap dengan PWA, real-time, dan integrasi API.';
                } else if (lowerMsg.includes('analisis') || lowerMsg.includes('riset')) {
                    response = 'Paket Analisis untuk data science dan machine learning. Harga 20JT-60JT, timeline 3-6 bulan. Cocok untuk institusi riset dan BI.';
                } else if (lowerMsg.includes('enterprise') || lowerMsg.includes('erp')) {
                    response = 'Paket Enterprise untuk sistem ERP lengkap. Harga mulai 50JT-100JT+, timeline 6-12 bulan. Dengan 24/7 support dan 99.9% uptime.';
                } else if (lowerMsg.includes('rekomen') || lowerMsg.includes('cocok')) {
                    response = 'Untuk rekomendasi yang tepat, bisa ceritakan: Jenis bisnis Anda? Budget yang tersedia? Fitur utama yang dibutuhkan?';
                } else {
                    response = 'Terima kasih atas pertanyaan Anda! Silakan hubungi kami di 089530739047 untuk konsultasi gratis dan penawaran terbaik!';
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

        // Smooth Scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>-subtitle">Solusi perfect untuk UMKM dan bisnis baru</p>
                </div>
                <div class="package-price">
                    <p class="price-label">Mulai dari</p>
                    <div class="price-amount">500K - 3JT</div>
                </div>
            </div>
            <p class="package-description">
                Website statis atau semi-dinamis dengan maksimal 5-10 halaman, fokus pada informasi dasar dan tampilan profesional. Cocok untuk portfolio pribadi, company profile, atau landing page produk/jasa.
            </p>

            <div class="package-grid">
                <div class="package-section">
                    <h3><i class="fas fa-check-circle"></i> Fitur Utama</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Responsive Design (Mobile & Desktop)</li>
                        <li><i class="fas fa-check"></i> 5-10 Halaman Website</li>
                        <li><i class="fas fa-check"></i> Formulir Kontak Sederhana</li>
                        <li><i class="fas fa-check"></i> Integrasi WhatsApp Button</li>
                        <li><i class="fas fa-check"></i> Google Maps Embed</li>
                        <li><i class="fas fa-check"></i> Galeri Foto/Video</li>
                        <li><i class="fas fa-check"></i> SEO Dasar (Meta Tags)</li>
                        <li><i class="fas fa-check"></i> Hosting 1 Tahun + Domain</li>
                    </ul>
                </div>

                <div class="package-section">
                    <h3><i class="fas fa-code"></i> Teknologi</h3>
                    <div class="tech-stack">
                        <span class="tech-badge"><i class="fab fa-html5"></i> HTML5</span>
                        <span class="tech-badge"><i class="fab fa-css3-alt"></i> CSS3</span>
                        <span class="tech-badge"><i class="fab fa-js"></i> JavaScript</span>
                        <span class="tech-badge"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                        <span class="tech-badge"><i class="fab fa-wordpress"></i> WordPress</span>
                    </div>
                    <h3 style="margin-top: 2rem;"><i class="fas fa-clock"></i> Timeline</h3>
                    <p style="color: var(--text-muted); margin-top: 0.5rem;">1-2 Minggu Pengerjaan</p>
                    <h3 style="margin-top: 1.5rem;"><i class="fas fa-users"></i> Cocok Untuk</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> UMKM & Startup Baru</li>
                        <li><i class="fas fa-check"></i> Freelancer & Portfolio</li>
                        <li><i class="fas fa-check"></i> Event Organizer</li>
                        <li><i class="fas fa-check"></i> Landing Page Produk</li>
                    </ul>
                </div>
            </div>

            <div class="package-actions">
                <a href="kontak.php?paket=low" class="btn btn-primary">
                    <i class="fas fa-rocket"></i> Pesan Sekarang
                </a>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-info-circle"></i> Detail Lengkap
                </a>
            </div>
        </div>

        <!-- MEDIUM PACKAGE -->
        <div class="package-card" data-category="medium" id="medium">
            <span class="package-badge badge-medium">MEDIUM PACKAGE</span>
            <div class="package-header">
                <div class="package-info">
                    <h2>Website Dinamis & Sistem Dasar</h2>
                    <p class="package-subtitle">CMS dan fitur interaktif untuk bisnis berkembang</p>
                </div>
                <div class="package-price">
                    <p class="price-label">Mulai dari</p>
                    <div class="price-amount">3JT - 10JT</div>
                </div>
            </div>
            <p class="package
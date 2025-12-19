<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - KALS ART</title>
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

        /* Story Section */
        .story-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .story-content h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .story-content p {
            font-size: 1.1rem;
            line-height: 1.9;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        .story-image {
            position: relative;
            height: 500px;
        }

        .image-frame {
            position: absolute;
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .image-frame:nth-child(1) {
            top: 0;
            left: 0;
            width: 300px;
            height: 200px;
            transform: rotate(-5deg);
            z-index: 2;
        }

        .image-frame:nth-child(2) {
            bottom: 0;
            right: 0;
            width: 280px;
            height: 220px;
            transform: rotate(5deg);
            z-index: 1;
        }

        .image-frame i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .image-frame h4 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        /* Values Section */
        .values-section {
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

        .section-title p {
            font-size: 1.2rem;
            color: var(--text-muted);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .value-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .value-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3);
        }

        .value-card:hover::before {
            transform: scaleX(1);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .value-card p {
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* Team Section */
        .team-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .team-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
        }

        .team-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3);
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            font-weight: 700;
        }

        .team-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .team-role {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .team-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Timeline Section */
        .timeline-section {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, var(--primary), var(--secondary));
            transform: translateX(-50%);
        }

        .timeline-item {
            display: flex;
            margin-bottom: 3rem;
            position: relative;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            width: 45%;
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            position: relative;
        }

        .timeline-date {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
            font-weight: 700;
            white-space: nowrap;
        }

        .timeline-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .timeline-content p {
            color: var(--text-muted);
            line-height: 1.7;
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
            .story-grid {
                grid-template-columns: 1fr;
            }

            .story-image {
                display: none;
            }

            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                flex-direction: row !important;
            }

            .timeline-content {
                width: calc(100% - 100px);
                margin-left: 100px;
            }

            .timeline-date {
                left: 30px;
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

            .values-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }

            .chatbot-window {
                width: calc(100% - 2rem);
                right: 1rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
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
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="layanan.php">Layanan</a></li>
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
        <h1>Tentang Kami</h1>
        <p>Perjalanan kami dalam membantu bisnis bertransformasi digital dengan solusi website yang inovatif dan berkualitas tinggi</p>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="story-grid">
            <div class="story-content">
                <h2>Cerita <span class="gradient-text">KALS ART</span></h2>
                <p>
                    KALS ART dimulai dari visi sederhana: membantu setiap bisnis, dari UMKM hingga perusahaan besar, untuk memiliki kehadiran digital yang profesional dan efektif. Kami percaya bahwa website bukan hanya tentang tampilan, tetapi tentang menciptakan pengalaman yang bermakna bagi pengguna.
                </p>
                <p>
                    Berlokasi di Lab FSTI ISTN, kami adalah tim developer, designer, dan strategist digital yang bersemangat dalam teknologi. Dengan pengalaman lebih dari 5 tahun, kami telah membantu 40+ klien mewujudkan visi digital mereka.
                </p>
                <p>
                    Kami tidak hanya membuat website, kami membangun solusi digital yang membantu bisnis Anda berkembang. Dari landing page sederhana hingga sistem enterprise yang kompleks, kami siap menjadi partner transformasi digital Anda.
                </p>
            </div>
            <div class="story-image">
                <div class="image-frame">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Inovasi</h4>
                    <p>Selalu menggunakan teknologi terkini untuk solusi terbaik</p>
                </div>
                <div class="image-frame">
                    <i class="fas fa-users"></i>
                    <h4>Kolaborasi</h4>
                    <p>Bekerja sama dengan klien untuk hasil maksimal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="section-title">
            <h2>Nilai-Nilai <span class="gradient-text">Kami</span></h2>
            <p>Prinsip yang memandu setiap project dan keputusan kami</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>Kualitas Tinggi</h3>
                <p>Kami berkomitmen untuk menghasilkan website dengan standar kualitas tertinggi, dari segi kode, design, hingga performa.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Integritas</h3>
                <p>Transparansi dan kejujuran dalam setiap komunikasi dan proses pengerjaan project dengan klien.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Inovasi</h3>
                <p>Selalu mengikuti perkembangan teknologi terbaru untuk memberikan solusi yang modern dan efektif.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Kepuasan Klien</h3>
                <p>Prioritas utama kami adalah memastikan setiap klien puas dengan hasil kerja dan layanan kami.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Tepat Waktu</h3>
                <p>Menghargai waktu klien dengan menyelesaikan project sesuai timeline yang telah disepakati.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Support Responsif</h3
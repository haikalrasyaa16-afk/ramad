<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALS ART - Jasa Pembuatan Website Profesional</title>
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
            animation-delay: 0s;
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

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 2rem 4rem;
            z-index: 1;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            font-family: 'Playfair Display', serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: gradientShift 5s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .hero-text p {
            font-size: 1.25rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
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

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
        }

        .btn-secondary {
            background: var(--glass);
            color: var(--text);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* Hero Visual */
        .hero-visual {
            position: relative;
            height: 500px;
        }

        .floating-card {
            position: absolute;
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: floatCard 6s ease-in-out infinite;
        }

        .floating-card:nth-child(1) {
            top: 50px;
            left: 50px;
            width: 250px;
            animation-delay: 0s;
        }

        .floating-card:nth-child(2) {
            top: 200px;
            right: 50px;
            width: 200px;
            animation-delay: 2s;
        }

        .floating-card:nth-child(3) {
            bottom: 50px;
            left: 100px;
            width: 220px;
            animation-delay: 4s;
        }

        @keyframes floatCard {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        .floating-card i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .floating-card h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .floating-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* Stats Section */
        .stats {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            position: relative;
            z-index: 1;
        }

        .stat-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: 0 10px 40px rgba(99, 102, 241, 0.2);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 1rem;
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
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-visual {
                display: none;
            }

            .cta-buttons {
                justify-content: center;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
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

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .stats {
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
            <div class="logo">KALS ART</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Wujudkan <span class="gradient-text">Website Impian</span> Anda Bersama Kami</h1>
                <p>Solusi pembuatan website profesional dari landing page sederhana hingga sistem enterprise kompleks. Transformasi digital dimulai dari sini.</p>
                <div class="cta-buttons">
                    <a href="layanan.php" class="btn btn-primary">
                        <i class="fas fa-rocket"></i> Mulai Project
                    </a>
                    <a href="about.php" class="btn btn-secondary">
                        <i class="fas fa-info-circle"></i> Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-card">
                    <i class="fas fa-code"></i>
                    <h3>Clean Code</h3>
                    <p>Struktur kode rapi & maintainable</p>
                </div>
                <div class="floating-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Responsive</h3>
                    <p>Sempurna di semua device</p>
                </div>
                <div class="floating-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Secure</h3>
                    <p>Keamanan data terjamin</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stat-card">
            <div class="stat-number">50+</div>
            <div class="stat-label">Project Selesai</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">40+</div>
            <div class="stat-label">Klien Puas</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">5+</div>
            <div class="stat-label">Tahun Pengalaman</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">99%</div>
            <div class="stat-label">Success Rate</div>
        </div>
    </section>

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
                Halo! 👋 Saya asisten virtual KALS ART. Ada yang bisa saya bantu tentang layanan kami?
            </div>
        </div>
        <div class="chatbot-input">
            <input type="text" id="chatbotInput" placeholder="Ketik pesan Anda...">
            <button id="chatbotSend"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
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

            // Add user message
            const userMessage = document.createElement('div');
            userMessage.className = 'message user';
            userMessage.textContent = message;
            chatbotMessages.appendChild(userMessage);

            chatbotInput.value = '';
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

            // Bot typing indicator
            const typingIndicator = document.createElement('div');
            typingIndicator.className = 'message bot';
            typingIndicator.innerHTML = '<i class="fas fa-ellipsis-h"></i> Mengetik...';
            chatbotMessages.appendChild(typingIndicator);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

            try {
                // Call GCP API (Placeholder - ganti dengan API key Anda)
                // Untuk demo, kita gunakan response sederhana
                setTimeout(() => {
                    typingIndicator.remove();
                    
                    const botMessage = document.createElement('div');
                    botMessage.className = 'message bot';
                    
                    // Simple response logic
                    let response = '';
                    if (message.toLowerCase().includes('harga') || message.toLowerCase().includes('biaya')) {
                        response = 'Kami menawarkan 5 paket layanan dengan harga mulai dari Rp 500.000 hingga Rp 100 juta+. Silakan kunjungi halaman Layanan untuk detail lengkap!';
                    } else if (message.toLowerCase().includes('kontak') || message.toLowerCase().includes('hubungi')) {
                        response = 'Anda bisa menghubungi kami di 089530739047 atau email haikalrasyaa16@gmail.com. Atau kunjungi halaman Kontak untuk form inquiry!';
                    } else if (message.toLowerCase().includes('paket') || message.toLowerCase().includes('layanan')) {
                        response = 'Kami menyediakan 5 paket: Low (Landing Page), Medium (Website Dinamis), High (Web App), Analisis (Data Science), dan Enterprise (ERP). Mana yang Anda minati?';
                    } else {
                        response = 'Terima kasih atas pertanyaan Anda! Tim kami siap membantu kebutuhan website Anda. Silakan hubungi kami untuk konsultasi gratis!';
                    }
                    
                    botMessage.textContent = response;
                    chatbotMessages.appendChild(botMessage);
                    chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
                }, 1500);
            } catch (error) {
                typingIndicator.remove();
                const errorMessage = document.createElement('div');
                errorMessage.className = 'message bot';
                errorMessage.textContent = 'Maaf, terjadi kesalahan. Silakan coba lagi atau hubungi kami langsung.';
                chatbotMessages.appendChild(errorMessage);
            }
        }

        chatbotSend.addEventListener('click', sendMessage);
        chatbotInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.
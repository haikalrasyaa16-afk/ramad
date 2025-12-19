<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompetensi - KALS ART</title>
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

        /* Skills Overview */
        .skills-overview {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .skill-category {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2.5rem;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .skill-category::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .skill-category:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3);
        }

        .skill-category:hover::before {
            transform: scaleX(1);
        }

        .skill-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
        }

        .skill-category h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .skill-category p {
            color: var(--text-muted);
            line-height: 1.7;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
        }

        .skill-tag {
            padding: 0.4rem 1rem;
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.3);
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--primary);
        }

        /* Technical Stack */
        .tech-stack-section {
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

        .section-title p {
            font-size: 1.2rem;
            color: var(--text-muted);
        }

        .tech-categories {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .tech-category {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2.5rem;
        }

        .tech-category h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .tech-category h3 i {
            color: var(--primary);
        }

        .tech-items {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .tech-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(99, 102, 241, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            transition: all 0.3s;
        }

        .tech-item:hover {
            background: rgba(99, 102, 241, 0.1);
            border-color: var(--primary);
            transform: translateX(5px);
        }

        .tech-item i {
            font-size: 2rem;
            color: var(--primary);
        }

        .tech-info h4 {
            font-size: 1rem;
            margin-bottom: 0.2rem;
        }

        .tech-info p {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        /* Skill Bars */
        .skill-bars-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .skill-bars-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
        }

        .skill-bar-item {
            margin-bottom: 2rem;
        }

        .skill-bar-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
        }

        .skill-bar-header span {
            font-weight: 600;
        }

        .skill-bar-percentage {
            color: var(--primary);
            font-weight: 700;
        }

        .skill-bar-track {
            height: 12px;
            background: var(--glass);
            border: 1px solid var(--glass-border);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .skill-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 10px;
            transition: width 1.5s ease;
            width: 0;
            position: relative;
        }

        .skill-bar-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        /* Certifications */
        .certifications-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .cert-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .cert-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
        }

        .cert-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3);
        }

        .cert-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .cert-card h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .cert-card p {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Process Section */
        .process-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .process-timeline {
            position: relative;
            padding: 2rem 0;
        }

        .process-step {
            display: grid;
            grid-template-columns: 1fr 80px 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
            align-items: center;
        }

        .process-step:nth-child(even) .step-content:first-child {
            order: 3;
        }

        .step-content {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s;
        }

        .step-content:hover {
            border-color: var(--primary);
            transform: scale(1.02);
        }

        .step-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .step-content p {
            color: var(--text-muted);
            line-height: 1.7;
        }

        .step-number {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            color: white;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
        }

        .step-empty {
            /* Empty space for alignment */
        }

        /* Tools Section */
        .tools-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 1.5rem;
        }

        .tool-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .tool-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }

        .tool-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 0.8rem;
        }

        .tool-card p {
            font-size: 0.9rem;
            font-weight: 600;
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
            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .tech-categories {
                grid-template-columns: 1fr;
            }

            .cert-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .tools-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .process-step {
                grid-template-columns: 1fr;
            }

            .step-number {
                margin: 0 auto;
            }

            .step-empty {
                display: none;
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

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .skill-bars-grid {
                grid-template-columns: 1fr;
            }

            .tech-items {
                grid-template-columns: 1fr;
            }

            .cert-grid {
                grid-template-columns: 1fr;
            }

            .tools-grid {
                grid-template-columns: repeat(3, 1fr);
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
                <li><a href="about.php">About</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="kompetensi.php" class="active">Kompetensi</a></li>
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
        <h1>Kompetensi & Keahlian</h1>
        <p>Expertise dan teknologi yang kami kuasai untuk menghasilkan solusi digital terbaik</p>
    </section>

    <!-- Skills Overview -->
    <section class="skills-overview">
        <div class="skills-grid">
            <div class="skill-category">
                <div class="skill-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Security & Performance</h3>
                <p>Implementasi best practices keamanan dan optimasi performa untuk aplikasi yang aman, cepat, dan reliable.</p>
                <div class="skill-tags">
                    <span class="skill-tag">Security</span>
                    <span class="skill-tag">Optimization</span>
                    <span class="skill-tag">Testing</span>
                    <span class="skill-tag">Monitoring</span>
                </div>
            </div>

            <div class="skill-category">
                <div class="skill-icon">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3>Cloud & DevOps</h3>
                <p>Deployment dan management aplikasi di cloud dengan CI/CD pipeline untuk development yang efisien dan scalable.</p>
                <div class="skill-tags">
                    <span class="skill-tag">AWS/GCP</span>
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">CI/CD</span>
                    <span class="skill-tag">Kubernetes</span>
                </div>
            </div>

            <div class="skill-category">
                <div class="skill-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>UI/UX Design</h3>
                <p>Desain interface yang intuitif dan user experience yang engaging untuk meningkatkan kepuasan dan konversi pengguna.</p>
                <div class="skill-tags">
                    <span class="skill-tag">User Research</span>
                    <span class="skill-tag">Wireframing</span>
                    <span class="skill-tag">Prototyping</span>
                    <span class="skill-tag">Testing</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Stack -->
    <section class="tech-stack-section">
        <div class="section-title">
            <h2>Stack <span class="gradient-text">Teknologi</span></h2>
            <p>Teknologi modern yang kami gunakan untuk membangun solusi terbaik</p>
        </div>

        <div class="tech-categories">
            <div class="tech-category">
                <h3><i class="fas fa-laptop-code"></i> Frontend Development</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <i class="fab fa-react"></i>
                        <div class="tech-info">
                            <h4>React.js</h4>
                            <p>Modern UI Library</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-vuejs"></i>
                        <div class="tech-info">
                            <h4>Vue.js</h4>
                            <p>Progressive Framework</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-js"></i>
                        <div class="tech-info">
                            <h4>JavaScript ES6+</h4>
                            <p>Core Language</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-html5"></i>
                        <div class="tech-info">
                            <h4>HTML5/CSS3</h4>
                            <p>Semantic Markup</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-bootstrap"></i>
                        <div class="tech-info">
                            <h4>Bootstrap</h4>
                            <p>CSS Framework</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-wind"></i>
                        <div class="tech-info">
                            <h4>Tailwind CSS</h4>
                            <p>Utility-First CSS</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tech-category">
                <h3><i class="fas fa-server"></i> Backend Development</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <i class="fab fa-python"></i>
                        <div class="tech-info">
                            <h4>Python</h4>
                            <p>Django/Flask/FastAPI</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-php"></i>
                        <div class="tech-info">
                            <h4>PHP</h4>
                            <p>Laravel/CodeIgniter</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-node-js"></i>
                        <div class="tech-info">
                            <h4>Node.js</h4>
                            <p>Express/NestJS</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-gem"></i>
                        <div class="tech-info">
                            <h4>Ruby</h4>
                            <p>Ruby on Rails</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-java"></i>
                        <div class="tech-info">
                            <h4>Java</h4>
                            <p>Spring Boot</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-code"></i>
                        <div class="tech-info">
                            <h4>Go</h4>
                            <p>Golang Backend</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tech-category">
                <h3><i class="fas fa-database"></i> Database & Storage</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <i class="fas fa-database"></i>
                        <div class="tech-info">
                            <h4>PostgreSQL</h4>
                            <p>Relational Database</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-database"></i>
                        <div class="tech-info">
                            <h4>MySQL</h4>
                            <p>SQL Database</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-leaf"></i>
                        <div class="tech-info">
                            <h4>MongoDB</h4>
                            <p>NoSQL Database</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-bolt"></i>
                        <div class="tech-info">
                            <h4>Redis</h4>
                            <p>Caching & Queue</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-fire"></i>
                        <div class="tech-info">
                            <h4>Firebase</h4>
                            <p>Real-time Database</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-table"></i>
                        <div class="tech-info">
                            <h4>Elasticsearch</h4>
                            <p>Search Engine</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tech-category">
                <h3><i class="fas fa-brain"></i> Data Science & ML</h3>
                <div class="tech-items">
                    <div class="tech-item">
                        <i class="fas fa-chart-line"></i>
                        <div class="tech-info">
                            <h4>TensorFlow</h4>
                            <p>Deep Learning</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-fire-alt"></i>
                        <div class="tech-info">
                            <h4>PyTorch</h4>
                            <p>ML Framework</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-robot"></i>
                        <div class="tech-info">
                            <h4>Scikit-learn</h4>
                            <p>Machine Learning</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-table"></i>
                        <div class="tech-info">
                            <h4>Pandas</h4>
                            <p>Data Analysis</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-chart-bar"></i>
                        <div class="tech-info">
                            <h4>NumPy</h4>
                            <p>Numerical Computing</p>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-project-diagram"></i>
                        <div class="tech-info">
                            <h4>Keras</h4>
                            <p>Neural Networks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skill Bars -->
    <section class="skill-bars-section">
        <div class="section-title">
            <h2>Tingkat <span class="gradient-text">Keahlian</span></h2>
            <p>Proficiency level dalam berbagai teknologi dan tools</p>
        </div>

        <div class="skill-bars-grid">
            <div>
                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>Python & Django</span>
                        <span class="skill-bar-percentage">95%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="95"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>JavaScript & React</span>
                        <span class="skill-bar-percentage">92%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="92"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>PHP & Laravel</span>
                        <span class="skill-bar-percentage">88%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="88"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>Node.js & Express</span>
                        <span class="skill-bar-percentage">85%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="85"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>PostgreSQL & MySQL</span>
                        <span class="skill-bar-percentage">90%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="90"></div>
                    </div>
                </div>
            </div>

            <div>
                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>Machine Learning</span>
                        <span class="skill-bar-percentage">87%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="87"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>UI/UX Design</span>
                        <span class="skill-bar-percentage">83%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="83"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>Docker & Kubernetes</span>
                        <span class="skill-bar-percentage">80%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="80"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>AWS & Cloud Services</span>
                        <span class="skill-bar-percentage">82%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="82"></div>
                    </div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-bar-header">
                        <span>API Development</span>
                        <span class="skill-bar-percentage">93%</span>
                    </div>
                    <div class="skill-bar-track">
                        <div class="skill-bar-fill" data-width="93"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="certifications-section">
        <div class="section-title">
            <h2>Sertifikasi & <span class="gradient-text">Penghargaan</span></h2>
            <p>Komitmen kami dalam pengembangan profesional dan excellence</p>
        </div>

        <div class="cert-grid">
            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fab fa-aws"></i>
                </div>
                <h4>AWS Certified</h4>
                <p>Solutions Architect</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fab fa-google"></i>
                </div>
                <h4>Google Cloud</h4>
                <p>Professional Developer</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fab fa-python"></i>
                </div>
                <h4>Python Institute</h4>
                <p>PCPP Certified</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h4>TensorFlow</h4>
                <p>Developer Certificate</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fab fa-react"></i>
                </div>
                <h4>Meta Frontend</h4>
                <p>Professional Certificate</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Security+</h4>
                <p>CompTIA Certified</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fab fa-docker"></i>
                </div>
                <h4>Docker Certified</h4>
                <p>Associate (DCA)</p>
            </div>

            <div class="cert-card">
                <div class="cert-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>ISO 9001:2015</h4>
                <p>Quality Management</p>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="process-section">
        <div class="section-title">
            <h2>Proses <span class="gradient-text">Development</span></h2>
            <p>Metodologi terstruktur untuk hasil yang optimal</p>
        </div>

        <div class="process-timeline">
            <div class="process-step">
                <div class="step-content">
                    <h3>Discovery & Research</h3>
                    <p>Memahami kebutuhan bisnis, target audience, dan kompetitor. Melakukan riset mendalam untuk foundation yang kuat.</p>
                </div>
                <div class="step-number">1</div>
                <div class="step-empty"></div>
            </div>

            <div class="process-step">
                <div class="step-empty"></div>
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Planning & Strategy</h3>
                    <p>Merancang arsitektur sistem, tech stack, timeline, dan strategi implementasi yang efektif dan efisien.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-content">
                    <h3>Design & Prototyping</h3>
                    <p>Membuat wireframe, mockup, dan prototype interaktif untuk validasi konsep sebelum development.</p>
                </div>
                <div class="step-number">3</div>
                <div class="step-empty"></div>
            </div>

            <div class="process-step">
                <div class="step-empty"></div>
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Development & Testing</h3>
                    <p>Implementasi kode dengan best practices, continuous testing, dan code review untuk quality assurance.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-content">
                    <h3>Deployment & Launch</h3>
                    <p>Deploy ke production environment dengan monitoring, optimization, dan final testing sebelum go-live.</p>
                </div>
                <div class="step-number">5</div>
                <div class="step-empty"></div>
            </div>

            <div class="process-step">
                <div class="step-empty"></div>
                <div class="step-number">6</div>
                <div class="step-content">
                    <h3>Maintenance & Support</h3>
                    <p>Monitoring berkelanjutan, bug fixes, updates, dan support untuk memastikan sistem berjalan optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools -->
    <section class="tools-section">
        <div class="section-title">
            <h2>Tools & <span class="gradient-text">Software</span></h2>
            <p>Perangkat yang kami gunakan untuk produktivitas maksimal</p>
        </div>

        <div class="tools-grid">
            <div class="tool-card">
                <i class="fab fa-git-alt"></i>
                <p>Git</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-github"></i>
                <p>GitHub</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-docker"></i>
                <p>Docker</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-figma"></i>
                <p>Figma</p>
            </div>
            <div class="tool-card">
                <i class="fas fa-code"></i>
                <p>VS Code</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-jira"></i>
                <p>Jira</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-slack"></i>
                <p>Slack</p>
            </div>
            <div class="tool-card">
                <i class="fas fa-flask"></i>
                <p>Postman</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-jenkins"></i>
                <p>Jenkins</p>
            </div>
            <div class="tool-card">
                <i class="fas fa-code-branch"></i>
                <p>GitLab CI</p>
            </div>
            <div class="tool-card">
                <i class="fas fa-terminal"></i>
                <p>Terminal</p>
            </div>
            <div class="tool-card">
                <i class="fab fa-trello"></i>
                <p>Trello</p>
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
                Halo! 👋 Ada yang ingin Anda tanyakan tentang kompetensi dan teknologi yang kami kuasai?
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

        // Skill Bars Animation
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const skillBars = entry.target.querySelectorAll('.skill-bar-fill');
                    skillBars.forEach(bar => {
                        const width = bar.getAttribute('data-width');
                        bar.style.width = width + '%';
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const skillBarsSection = document.querySelector('.skill-bars-section');
        if (skillBarsSection) {
            observer.observe(skillBarsSection);
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
                
                if (lowerMsg.includes('teknologi') || lowerMsg.includes('tech') || lowerMsg.includes('stack')) {
                    response = 'Kami menguasai berbagai teknologi modern: Python, JavaScript (React/Vue), PHP, Node.js, dan banyak lagi. Kami juga ahli dalam Machine Learning dan Cloud Services!';
                } else if (lowerMsg.includes('python') || lowerMsg.includes('django')) {
                    response = 'Python adalah salah satu keahlian utama kami dengan proficiency 95%! Kami menggunakan Django, Flask, dan FastAPI untuk backend development yang robust.';
                } else if (lowerMsg.includes('machine learning') || lowerMsg.includes('ai') || lowerMsg.includes('ml')) {
                    response = 'Kami memiliki expertise dalam Machine Learning dengan TensorFlow, PyTorch, dan Scikit-learn. Cocok untuk project analisis data dan AI!';
                } else if (lowerMsg.includes('database') || lowerMsg.includes('db')) {
                    response = 'Kami berpengalaman dengan PostgreSQL, MySQL, MongoDB, Redis, dan Elasticsearch untuk solusi database yang tepat sesuai kebutuhan.';
                } else if (lowerMsg.includes('cloud') || lowerMsg.includes('aws') || lowerMsg.includes('gcp')) {
                    response = 'Kami certified di AWS dan Google Cloud! Kami handle deployment, CI/CD, dan infrastructure management dengan Docker & Kubernetes.';
                } else {
                    response = 'Kami siap membantu project Anda dengan teknologi terbaik! Hubungi kami di 089530739047 untuk konsultasi gratis.';
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
    </script>
</body>
</html> class="skill-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Full-Stack Development</h3>
                <p>Menguasai teknologi frontend dan backend untuk membangun aplikasi web end-to-end yang kompleks dan skalabel.</p>
                <div class="skill-tags">
                    <span class="skill-tag">Frontend</span>
                    <span class="skill-tag">Backend</span>
                    <span class="skill-tag">API</span>
                    <span class="skill-tag">Database</span>
                </div>
            </div>

            <div class="skill-category">
                <div class="skill-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Data Science & AI</h3>
                <p>Implementasi machine learning, analisis data, dan kecerdasan buatan untuk solusi bisnis yang data-driven.</p>
                <div class="skill-tags">
                    <span class="skill-tag">Machine Learning</span>
                    <span class="skill-tag">Deep Learning</span>
                    <span class="skill-tag">Analytics</span>
                    <span class="skill-tag">Visualization</span>
                </div>
            </div>

            <div class="skill-category">
                <div class="skill-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Mobile & Responsive</h3>
                <p>Design dan development yang responsif untuk berbagai device, memastikan user experience optimal di semua platform.</p>
                <div class="skill-tags">
                    <span class="skill-tag">PWA</span>
                    <span class="skill-tag">Responsive</span>
                    <span class="skill-tag">Mobile-First</span>
                    <span class="skill-tag">Cross-Platform</span>
                </div>
            </div>

            <div class="skill-category">
                <div
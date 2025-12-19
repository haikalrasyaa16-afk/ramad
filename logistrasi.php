<div class="form-group">
                    <label>Nama Lengkap <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" name="fullname" required placeholder="John Doe">
                    </div>
                </div>

                <div class="form-group">
                    <label>Email <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" required placeholder="nama@email.com">
                    </div>
                </div>

                <div class="form-group">
                    <label>Nomor Telepon <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <input type="tel" name="phone" required placeholder="08123456789">
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis Bisnis</label>
                    <div class="input-wrapper">
                        <i class="fas fa-briefcase input-icon"></i>
                        <select name="business_type">
                            <option value="">Pilih Jenis Bisnis</option>
                            <option value="umkm">UMKM</option>
                            <option value="startup">Startup</option>
                            <option value="corporate">Corporate</option>
                            <option value="personal">Personal/Freelancer</option>
                            <option value="education">Institusi Pendidikan</option>
                            <option value="government">Pemerintah</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="registerPassword" required placeholder="••••••••" minlength="8">
                        <button type="button" class="password-toggle" data-target="registerPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <small style="color: var(--text-muted); font-size: 0.85rem;">Minimal 8 karakter</small>
                </div>

                <div class="form-group">
                    <label>Konfirmasi Password <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="confirm_password" id="confirmPassword" required placeholder="••••••••">
                        <button type="button" class="password-toggle" data-target="confirmPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: normal;">
                        <input type="checkbox" name="terms" required style="margin-top: 0.2rem;">
                        <span style="font-size: 0.9rem;">Saya setuju dengan <a href="#" style="color: var(--primary); text-decoration: none;">Syarat & Ketentuan</a> dan <a href="#" style="color: var(--primary); text-decoration: none;">Kebijakan Privasi</a></span>
                    </label>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-user-plus"></i>
                    Daftar Sekarang
                </button>

                <div class="divider">
                    <span>Atau daftar dengan</span>
                </div>

                <div class="social-login">
                    <button type="button" class="social-btn">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                    <button type="button" class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                </div>

                <div class="form-footer">
                    Sudah punya akun? <a href="#" class="switch-tab" data-tab="login">Login Sekarang</a>
                </div>
            </form>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="section-title">
            <h2>Keuntungan <span class="gradient-text">Menjadi Member</span></h2>
            <p>Dapatkan akses eksklusif dan berbagai benefit menarik</p>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3>Dashboard Interaktif</h3>
                <p>Monitor progress project secara real-time dengan dashboard yang user-friendly dan informatif.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h3>Kelola Invoice</h3>
                <p>Akses semua invoice, pembayaran, dan riwayat transaksi dalam satu tempat yang terorganisir.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Priority Support</h3>
                <p>Dapatkan support prioritas dengan response time lebih cepat untuk semua pertanyaan Anda.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-cloud-download-alt"></i>
                </div>
                <h3>Download Assets</h3>
                <p>Download source code, dokumentasi, dan assets project kapan saja sesuai kebutuhan.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <h3>Notifikasi Real-time</h3>
                <p>Terima update instant tentang progress project, pembayaran, dan informasi penting lainnya.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fas fa-tags"></i>
                </div>
                <h3>Promo Eksklusif</h3>
                <p>Akses promo dan diskon khusus member untuk project selanjutnya dan layanan tambahan.</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="section-title">
            <h2>Fitur <span class="gradient-text">Dashboard</span></h2>
            <p>Kelola semua aspek project Anda dalam satu platform</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="feature-content">
                    <h3>Project Management</h3>
                    <p>Track timeline, milestone, dan progress setiap project dengan detail. Lihat status real-time dan komunikasi langsung dengan tim development.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="feature-content">
                    <h3>Direct Communication</h3>
                    <p>Chat langsung dengan project manager dan tim developer. Diskusikan requirement, revisi, dan feedback secara efisien.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="feature-content">
                    <h3>Analytics & Reports</h3>
                    <p>Dapatkan laporan detail tentang website traffic, user behavior, dan performance metrics untuk optimasi bisnis.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="feature-content">
                    <h3>Maintenance Requests</h3>
                    <p>Submit request untuk bug fixes, updates, atau fitur tambahan langsung dari dashboard dengan tracking system.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="feature-content">
                    <h3>Secure & Private</h3>
                    <p>Data Anda dilindungi dengan enkripsi end-to-end. Kami menjamin keamanan dan privasi informasi bisnis Anda.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="feature-content">
                    <h3>Mobile Friendly</h3>
                    <p>Akses dashboard dari mana saja dengan tampilan responsive yang optimal di semua device.</p>
                </div>
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
                Halo! 👋 Butuh bantuan dengan registrasi atau login? Saya siap membantu!
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
                <p>Solusi pem<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistrasi - KALS ART</title>
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

        /* Auth Tabs */
        .auth-section {
            max-width: 600px;
            margin: 0 auto 4rem;
            padding: 0 2rem;
            position: relative;
            z-index: 1;
        }

        .auth-tabs {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .tab-btn {
            flex: 1;
            padding: 1rem;
            border: none;
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: var(--text);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .tab-btn:hover {
            border-color: var(--primary);
        }

        .tab-btn.active {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-color: transparent;
        }

        /* Auth Forms */
        .auth-container {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 3rem;
        }

        .auth-form {
            display: none;
        }

        .auth-form.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-header {
            text-align: center;
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

        .form-group .required {
            color: var(--secondary);
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            background: rgba(255, 255, 255, 0.03);
            color: var(--text);
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 1rem;
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
            margin-top: 2rem;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
        }

        .form-footer {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-muted);
        }

        .form-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .form-footer a:hover {
            color: var(--secondary);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 2rem 0;
            color: var(--text-muted);
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--glass-border);
        }

        .divider span {
            padding: 0 1rem;
        }

        .social-login {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .social-btn {
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            background: rgba(255, 255, 255, 0.03);
            color: var(--text);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
        }

        .social-btn:hover {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.05);
        }

        .social-btn i {
            font-size: 1.2rem;
        }

        /* Form Message */
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

        /* Benefits Section */
        .benefits-section {
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

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .benefit-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.3s;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3);
        }

        .benefit-icon {
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

        .benefit-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .benefit-card p {
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* Features Section */
        .features-section {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 4rem 2rem;
            position: relative;
            z-index: 1;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .feature-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            display: flex;
            gap: 1.5rem;
            transition: all 0.3s;
        }

        .feature-card:hover {
            border-color: var(--primary);
            transform: translateX(10px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            flex-shrink: 0;
        }

        .feature-content h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .feature-content p {
            color: var(--text-muted);
            line-height: 1.7;
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
            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-grid {
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

            .auth-container {
                padding: 2rem 1.5rem;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .social-login {
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
                <li><a href="about.php">About</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="kompetensi.php">Kompetensi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="logistrasi.php" class="active">Logistrasi</a></li>
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
        <h1>Login / Registrasi</h1>
        <p>Buat akun atau login untuk mengakses dashboard dan kelola project Anda</p>
    </section>

    <!-- Auth Section -->
    <section class="auth-section">
        <div class="auth-tabs">
            <button class="tab-btn active" data-tab="login">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
            <button class="tab-btn" data-tab="register">
                <i class="fas fa-user-plus"></i> Registrasi
            </button>
        </div>

        <div class="auth-container">
            <!-- Login Form -->
            <form class="auth-form active" id="loginForm">
                <div class="form-header">
                    <h2>Selamat <span class="gradient-text">Datang</span></h2>
                    <p>Masuk ke akun Anda untuk melanjutkan</p>
                </div>

                <div class="form-message" id="loginMessage">
                    <i class="fas fa-check-circle"></i>
                    <span id="loginMessageText"></span>
                </div>

                <div class="form-group">
                    <label>Email <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" required placeholder="nama@email.com">
                    </div>
                </div>

                <div class="form-group">
                    <label>Password <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="loginPassword" required placeholder="••••••••">
                        <button type="button" class="password-toggle" data-target="loginPassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <label style="display: flex; align-items: center; gap: 0.5rem; font-weight: normal;">
                        <input type="checkbox" name="remember">
                        Ingat Saya
                    </label>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-size: 0.9rem;">Lupa Password?</a>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Masuk
                </button>

                <div class="divider">
                    <span>Atau masuk dengan</span>
                </div>

                <div class="social-login">
                    <button type="button" class="social-btn">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                    <button type="button" class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                </div>

                <div class="form-footer">
                    Belum punya akun? <a href="#" class="switch-tab" data-tab="register">Daftar Sekarang</a>
                </div>
            </form>

            <!-- Register Form -->
            <form class="auth-form" id="registerForm">
                <div class="form-header">
                    <h2>Buat <span class="gradient-text">Akun Baru</span></h2>
                    <p>Bergabunglah dengan KALS ART sekarang</p>
                </div>

                <div class="form-message" id="registerMessage">
                    <i class="fas fa-check-circle"></i>
                    <span id="registerMessageText"></span>
                </div>

                <div class="form-group">
                    <label>Nama Leng
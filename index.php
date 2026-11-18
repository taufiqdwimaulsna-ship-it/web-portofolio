<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Taufiq Dwi Maulana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigasi -->
    <nav class="navbar">
        <div class="logo">Taufiq Dwi Maulana</div>
        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#education">Pendidikan</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="nav-actions">
            <button id="themeToggle" class="theme-btn" aria-label="Ganti Tema">☀️</button>
            <div class="menu-toggle" id="menuToggle">&#9776;</div>
        </div>
    </nav>

    <!-- 1. HOME -->
    <section id="home" class="hero">
        <div class="hero-content">
            <img src="Gemini_Generated_Image_3ynhk83ynhk83ynh.jpg" alt="Foto Profil Taufiq Dwi Maulana" class="profile-pic">
            <br>
            <span class="badge">Web Developer & Software Engineering</span>
            <h1>Halo, Saya <span class="highlight">Taufiq Dwi Maulana</span></h1>
            <p class="typing-text">Saya membangun aplikasi web yang <span id="typed"></span></p>
            <div class="hero-buttons">
                <a href="#projects" class="btn primary">Lihat Project</a>
                <a href="#contact" class="btn secondary">Hubungi Saya</a>
            </div>
        </div>
    </section>

    <!-- 2. ABOUT -->
    <section id="about" class="section">
        <h2 class="section-title">Tentang <span>Saya</span></h2>
        <div class="about-card">
            <p>
                Saya adalah siswa jurusan <strong>Rekayasa Perangkat Lunak (RPL)</strong> yang antusias dalam pengembangan aplikasi web full-stack, perancangan basis data, dan desain antarmuka modern. Saya senang memecahkan masalah melalui kode yang bersih, terstruktur, dan fungsional.
            </p>
            <div class="about-info">
                <div><strong>Domisili:</strong> Ponorogo, Jawa Timur</div>
                <div><strong>Jurusan:</strong> Teknik Rekayasa Perangkat Lunak</div>
                <div><strong>Status:</strong> Terbuka untuk Kolaborasi</div>
            </div>
        </div>
    </section>

    <!-- 3. SKILLS -->
    <section id="skills" class="section">
        <h2 class="section-title">Keahlian <span>Teknis</span></h2>
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Frontend</h3>
                <p>HTML5, CSS3, JavaScript (ES6+), Tailwind CSS</p>
            </div>
            <div class="skill-card">
                <h3>Backend</h3>
                <p>PHP Native, Laravel, RESTful API, Arsitektur MVC</p>
            </div>
            <div class="skill-card">
                <h3>Database</h3>
                <p>MySQL, MariaDB, Perancangan ERD, Stored Procedure</p>
            </div>
            <div class="skill-card">
                <h3>Tools & UI/UX</h3>
                <p>Git, GitHub, VS Code, XAMPP</p>
            </div>
        </div>
    </section>

    <!-- 4. PROJECTS -->
    <section id="projects" class="section">
        <h2 class="section-title">Hasil <span>Project</span></h2>
        <div class="projects-grid">
            <div class="project-card">
                <img src="project1.jpg" alt="Preview TokoKita" class="project-img">
                <div class="project-content">
                    <div class="project-tag">PHP MVC • MySQL</div>
                    <h3>TokoKita (Toko Online & Digital Marketing)</h3>
                    <p>Sistem untuk menjual barang & membeli barang.</p>
                    <div class="project-links">
                        <a href="https://github.com/taufiqdwimaulsna-ship-it/tokokita.git" target="_blank" class="btn-link">Lihat Project ↗</a>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <img src="project2.jpg" alt="Preview Voting" class="project-img">
                <div class="project-content">
                    <div class="project-tag">Laravel • REST API</div>
                    <h3>Aplikasi Voting</h3>
                    <p>Sistem untuk pemilihan & voting.</p>
                    <div class="project-links">
                        <a href="https://github.com/taufiqdwimaulsna-ship-it/voting.git" target="_blank" class="btn-link">Lihat Project ↗</a>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <img src="project3.jpg" alt="Preview Sistem Absensi Sekolah" class="project-img">
                <div class="project-content">
                    <div class="project-tag">PHP • WhatsApp API</div>
                    <h3>Sistem Absensi Sekolah</h3>
                    <p>Sistem untuk absensi di sekolah untuk seluruh warga Sekolah.</p>
                    <div class="project-links">
                        <a href="https://github.com/taufiqdwimaulsna-ship-it/login_hakakses.git" target="_blank" class="btn-link">Lihat Project ↗</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PENDIDIKAN -->
    <section id="education" class="section">
        <h2 class="section-title">Riwayat <span>Pendidikan</span></h2>
        <div class="timeline">
            <div class="timeline-item">
                <span class="year">2024 - Sekarang</span>
                <h3>SMK PGRI 2 Ponorogo</h3>
                <p>Jurusan Teknik Rekayasa Perangkat Lunak (RPL)</p>
            </div>
            <div class="timeline-item">
                <span class="year">2021 - 2024</span>
                <h3>MTs Darul Huda</h3>
                <p>Pendidikan Menengah Pertama</p>
            </div>
            <div class="timeline-item">
                <span class="year">2015 - 2021</span>
                <h3>SD Kepatihan</h3>
                <p>Pendidikan Sekolah Dasar</p>
            </div>
        </div>
    </section>

    <!-- 6. CONTACT -->
    <section id="contact" class="section">
        <h2 class="section-title">Hubungi <span>Saya</span></h2>
        <div class="contact-container">
            <form id="contactForm" class="contact-form">
                <input type="text" id="nama" placeholder="Nama Lengkap" required>
                <input type="email" id="email" placeholder="Alamat Email" required>
                <textarea id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                <button type="submit" class="btn primary">Kirim Pesan</button>
            </form>
            <p id="formStatus" class="form-status"></p>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
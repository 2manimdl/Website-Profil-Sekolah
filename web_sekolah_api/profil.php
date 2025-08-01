<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil SMKN 64 Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f8f6f3 0%, #ede5dc 50%, #e8ddd0 100%);
            color: #2c1810;
            min-height: 100vh;
            overflow-x: hidden;
        }

                .navbar-custom {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 50%, #CD853F 100%);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(139, 69, 19, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand img {
            height: 55px;
            margin-right: 12px;
        }

        .navbar-brand span {
            color: #FFF8DC;
            font-weight: 600;
            font-size: 1.3rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .nav-link {
            color: #ffffffff !important;
            margin-right: 25px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #000000ff !important;
        }

        .nav-link.active {
            color: #FFF8DC !important;
            font-weight: 600;
        }

                .card-keps {
            max-width: 600px;
            margin: 40px auto;
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.2);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card-keps:hover {
            transform: translateY(-5px);
        }

        .card-keps img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-keps .card-body {
            padding: 25px;
            text-align: center;
        }

        .card-keps .card-title {
            font-weight: 600;
            color: #8B4513;
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .card-keps .card-text {
            color: #5D4037;
            font-weight: 500;
        }

                .video-profile {
            max-width: 800px;
            margin: 40px auto;
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.2);
            border-radius: 20px;
            overflow: hidden;
            padding: 30px;
            text-align: center;
        }

        .video-profile h3 {
            color: #8B4513;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .video-thumbnail {
            position: relative;
            display: inline-block;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.3);
            transition: transform 0.3s ease;
        }

        .video-thumbnail:hover {
            transform: scale(1.02);
        }

        .video-thumbnail img {
            width: 100%;
            height: auto;
            max-width: 600px;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(139, 69, 19, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background: rgba(139, 69, 19, 1);
            transform: translate(-50%, -50%) scale(1.1);
        }

                .section-box {
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.1);
            padding: 30px;
            margin: 30px auto;
            max-width: 1000px;
            transition: transform 0.2s ease;
        }

        .section-box:hover {
            transform: translateY(-2px);
        }

        .section-box h3 {
            color: #8B4513;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
        }

        .section-box h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #D2691E, #CD853F);
            border-radius: 2px;
        }

        .section-box p {
            color: #5D4037;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .section-box ul {
            color: #5D4037;
            line-height: 1.7;
        }

        .section-box ul li {
            margin-bottom: 10px;
        }

        .section-box strong {
            color: #8B4513;
        }

                .kontak-section {
            padding: 40px 30px;
            background: rgba(255, 248, 220, 0.5);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(139, 69, 19, 0.2);
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.1);
            margin: 40px auto;
            text-align: center;
            max-width: 900px;
        }

        .kontak-section h2 {
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 30px;
            position: relative;
        }

        .kontak-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #D2691E, #CD853F);
            border-radius: 2px;
        }

        .kontak-section p {
            color: #5D4037;
            margin-bottom: 18px;
            line-height: 1.6;
        }

        .kontak-section strong {
            color: #8B4513;
        }

        .social-icons a {
            margin: 0 15px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.3);
        }

        .social-icons a:hover {
            transform: scale(1.15);
        }

                footer {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 50%, #CD853F 100%);
            color: #FFF8DC;
            font-weight: 500;
            padding: 25px 0;
            margin-top: 50px;
            box-shadow: 0 -3px 15px rgba(139, 69, 19, 0.2);
            text-align: center;
        }

                .achievement-section {
            margin: 40px auto;
            max-width: 1000px;
        }

        .achievement-card {
            background: linear-gradient(135deg, #DEB887 0%, #D2B48C 100%);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.1);
            transition: transform 0.2s ease;
        }

        .achievement-card:hover {
            transform: translateY(-3px);
        }

        .achievement-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #8B4513, #A0522D);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 1.3rem;
        }

        .achievement-title {
            font-weight: 600;
            color: #8B4513;
            margin-bottom: 10px;
            text-align: center;
        }

        .achievement-desc {
            color: #5D4037;
            text-align: center;
            font-size: 0.95rem;
        }

                @media (max-width: 768px) {
            .navbar-brand img {
                height: 45px;
            }
            
            .navbar-brand span {
                font-size: 1.1rem;
            }
            
            .nav-link {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .card-keps {
                margin: 30px 15px;
            }

            .card-keps img {
                height: 250px;
            }
            
            .section-box {
                margin: 20px 15px;
                padding: 25px 20px;
            }

            .video-profile {
                margin: 30px 15px;
                padding: 20px;
            }

            .play-button {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .kontak-section {
                margin: 30px 15px;
                padding: 30px 20px;
            }

            .achievement-section {
                margin: 30px 15px;
            }
        }

        @media (max-width: 576px) {
            .card-keps img {
                height: 200px;
            }
            
            .section-box {
                padding: 20px 15px;
            }

            .video-profile {
                padding: 15px;
            }
            
            .social-icons img {
                width: 35px;
                height: 35px;
            }

            .achievement-card {
                padding: 20px;
            }
        }

                html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/img/logo.png" alt="Logo SMKN 64 Jakarta">
            <span>SMKN 64 Jakarta</span>
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link active" href="profil.php">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="card card-keps">
        <img src="assets/img/kepsek.jpeg" alt="Kepala Sekolah">
        <div class="card-body">
            <h4 class="card-title">Dewi Puspitasari, M.Par.</h4>
            <p class="card-text">Kepala Sekolah<br>NIP: 197102061995022002</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="video-profile">
        <h3>Profil SMK Negeri 64 Jakarta</h3>
        <a href="https://www.youtube.com/watch?v=_0ny0EYg4n4" target="_blank" class="video-thumbnail">
            <img src="https://img.youtube.com/vi/_0ny0EYg4n4/maxresdefault.jpg" alt="Video Profil SMKN 64 Jakarta">
            <div class="play-button">▶</div>
        </a>
        <p class="mt-3" style="color: #5D4037;">Tonton video profil lengkap SMK Negeri 64 Jakarta</p>
    </div>
</div>

<div class="container section-box">
    <h3>Informasi Sekolah</h3>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Alamat:</strong> Jl. Mpo Nori RT 09 RW 03, Kel. Bambu Apus, Kec. Cipayung, Jakarta Timur, DKI Jakarta</p>
            <p><strong>Email:</strong> info@smkn64-jkt.sch.id</p>
            <p><strong>NPSN:</strong> 69992315</p>
        </div>
        <div class="col-md-6">
            <p><strong>Nama Pengawas:</strong> Drs. H. Ismail, M.Pd.</p>
            <p><strong>NIP Pengawas:</strong> 196510101990021002</p>
            <p><strong>Status:</strong> Sekolah Negeri</p>
        </div>
    </div>
</div>

<div class="container section-box">
    <h3>Identitas & Kompetensi Keahlian</h3>
    <p>SMKN 64 Jakarta merupakan sekolah kejuruan berbasis teknologi informasi dengan dua kompetensi unggulan:</p>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="achievement-card">
                <div class="achievement-icon">💻</div>
                <div class="achievement-title">RPL (Rekayasa Perangkat Lunak)</div>
                <div class="achievement-desc">Berfokus pada pengembangan perangkat lunak, pemrograman, dan teknologi digital modern</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="achievement-card">
                <div class="achievement-icon">🎨</div>
                <div class="achievement-title">DKV (Desain Komunikasi Visual)</div>
                <div class="achievement-desc">Menggabungkan seni, komunikasi, dan teknologi untuk menciptakan karya visual yang bermakna</div>
            </div>
        </div>
    </div>
    <p class="mt-3">Berdiri sejak 2019, sekolah ini berkomitmen mencetak generasi yang berprestasi, berkarakter, dan siap menghadapi tantangan era digital.</p>
</div>

<div class="container section-box">
    <h3>Fasilitas & Kegiatan Unggulan</h3>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Fasilitas Unggulan:</strong></p>
            <ul>
                <li>Laboratorium komputer dengan perangkat terkini</li>
                <li>Studio desain dan multimedia</li>
                <li>Lapangan basket dan fasilitas olahraga</li>
                <li>Perpustakaan digital dan konvensional</li>
                <li>Mushola untuk kegiatan keagamaan</li>
                <li>Ruang tunggu siswa yang nyaman</li>
                <li>Aula serbaguna untuk berbagai acara</li>
            </ul>
        </div>
        <div class="col-md-6">
            <p><strong>Kegiatan Rutin:</strong></p>
            <ul>
                <li>Festival P5 (Projek Penguatan Profil Pelajar Pancasila)</li>
                <li>Jumat Literasi untuk meningkatkan minat baca</li>
                <li>Jumat Sehat dengan berbagai aktivitas olahraga</li>
                <li>Senin Dialog untuk diskusi dan sharing</li>
                <li>Salat Zuhur Berjamaah</li>
                <li>Classmeet dan kegiatan ekstrakurikuler</li>
                <li>Workshop dan seminar teknologi</li>
            </ul>
        </div>
    </div>
</div>

<div class="container section-box">
    <h3>Visi & Misi</h3>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="achievement-card">
                <div class="achievement-icon">🎯</div>
                <div class="achievement-title">VISI</div>
                <div class="achievement-desc">Memiliki tamatan yang Berbudi pekerti luhur, Berkarakter, Mandiri, Berprestasi dan Berjiwa Wirausaha</div>
            </div>
        </div>
    </div>
    <p><strong>MISI:</strong></p>
    <ul>
        <li>Mengimplementasikan 5S (Senyum, Sapa, Salam, Sopan dan Santun) dalam kehidupan sehari-hari</li>
        <li>Membangun peserta didik menjadi seseorang yang memiliki sikap profesional dan kompeten</li>
        <li>Mengarahkan peserta didik untuk meningkatkan potensi dan keahlian diri melalui pelatihan di dalam maupun di luar lingkungan sekolah</li>
        <li>Menyiapkan tamatan agar mendapatkan prestasi juara di tingkat regional dan nasional dengan pelatihan intensif di setiap kompetensi</li>
        <li>Mengarahkan peserta didik mempunyai jiwa wirausaha melalui pelajaran kewirausahaan dan praktik bisnis</li>
    </ul>
</div>

<div class="container section-box">
    <h3>Prestasi & Pencapaian</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="achievement-card">
                <div class="achievement-icon">🏆</div>
                <div class="achievement-title">Kompetisi Teknologi</div>
                <div class="achievement-desc">Berbagai juara dalam lomba programming dan desain tingkat Jakarta</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="achievement-card">
                <div class="achievement-icon">📊</div>
                <div class="achievement-title">Tingkat Kelulusan</div>
                <div class="achievement-desc">Tingkat kelulusan 100% dengan banyak siswa melanjutkan ke perguruan tinggi</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="achievement-card">
                <div class="achievement-icon">💼</div>
                <div class="achievement-title">Kesiapan Kerja</div>
                <div class="achievement-desc">Alumni siap kerja dengan keterampilan sesuai kebutuhan industri</div>
            </div>
        </div>
    </div>
</div>

<section id="kontak" class="kontak-section container">
    <h2>Kontak Kami</h2>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Alamat Lengkap:</strong><br>
            Jl. Mpok Nori, RT.9/RW.3, Bambu Apus<br>
            Kec. Cipayung, Kota Jakarta Timur<br>
            Daerah Khusus Ibukota Jakarta 13890</p>
        </div>
        <div class="col-md-6">
            <p><strong>Kontak:</strong><br>
            📞 08978891895 (Hilal)<br>
            📞 081212001521 (Agus)</p>
        </div>
    </div>
    <p><strong>Email:</strong> info@smkn64-jkt.sch.id / info.smkn64jkt@gmail.com</p>
    <div class="social-icons mt-4">
        <a href="https://www.youtube.com/@smkn64jakarta22" target="_blank">
            <img src="assets/img/yt.png" alt="YouTube">
        </a>
        <a href="https://www.instagram.com/smkn64jakarta/" target="_blank">
            <img src="assets/img/ig.png" alt="Instagram">
        </a>
    </div>
</section>

<footer>
    &copy; <?php echo date("Y"); ?> SMK Negeri 64 Jakarta. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            navbar.style.boxShadow = '0 6px 25px rgba(139, 69, 19, 0.4)';
        } else {
            navbar.style.boxShadow = '0 4px 20px rgba(139, 69, 19, 0.3)';
        }
    });
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
</script>
</body>
</html>
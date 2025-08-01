<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
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

                .carousel-container {
            max-width: 90%;
            margin: 30px auto;
        }

        .carousel-inner {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(139, 69, 19, 0.2);
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 350px;
            object-fit: cover;
        }

        .carousel-caption {
            position: static;
            background: transparent;
            color: #8B4513;
            margin-top: 10px;
            text-align: center;
        }

        .carousel-caption h5 {
            font-weight: 600;
            font-size: 1rem;
        }

                .intro-box {
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            border: 1px solid rgba(139, 69, 19, 0.2);
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.15);
            padding: 30px;
            margin-top: 20px;
        }

        .intro-box h2 {
            font-weight: 600;
            color: #8B4513;
            margin-bottom: 20px;
        }

        .intro-box .lead {
            color: #5D4037;
            font-weight: 400;
        }

                .informasi-sekolah {
            background: linear-gradient(135deg, #DEB887 0%, #D2B48C 100%);
            padding: 50px 0;
            margin: 40px 0;
        }

        .informasi-sekolah h3 {
            text-align: center;
            color: #8B4513;
            font-weight: 700;
            margin-bottom: 40px;
            font-size: 2rem;
        }

        .info-item {
            text-align: center;
            padding: 25px;
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
            border: 1px solid rgba(139, 69, 19, 0.2);
        }

        .info-item:hover {
            transform: translateY(-5px);
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #8B4513, #A0522D);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .info-title {
            font-weight: 600;
            color: #8B4513;
            margin-bottom: 10px;
        }

        .info-desc {
            font-size: 0.9rem;
            color: #5D4037;
        }

                .informasi-section {
            padding: 50px 0;
        }

        .informasi-section h2 {
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
        }

        .informasi-section h2::after {
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

                .card {
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.15);
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.25);
        }

        .card-img-top {
            height: 150px;
            width: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-weight: 600;
            color: #8B4513;
            margin-bottom: 15px;
        }

        .btn-outline-primary {
            background: linear-gradient(135deg, #D2691E, #CD853F);
            border: none;
            color: white;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: linear-gradient(135deg, #8B4513, #A0522D);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(139, 69, 19, 0.3);
        }

                .kontak-section {
            padding: 40px 20px;
            background: rgba(255, 248, 220, 0.5);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            border: 1px solid rgba(139, 69, 19, 0.2);
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.05);
            margin-top: 40px;
            text-align: center;
        }

        .kontak-section h2 {
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 25px;
        }

        .kontak-section p {
            color: #5D4037;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .social-icons a {
            margin: 0 10px;
            display: inline-block;
            transition: transform 0.2s ease;
        }

        .social-icons img {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(139, 69, 19, 0.2);
        }

        .social-icons a:hover {
            transform: scale(1.1);
        }

                footer {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 50%, #CD853F 100%);
            color: #FFF8DC;
            font-weight: 500;
            padding: 20px 0;
            margin-top: 40px;
            box-shadow: 0 -3px 15px rgba(139, 69, 19, 0.2);
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
            
            .intro-box {
                padding: 20px;
            }
            
            .carousel-item img {
                max-height: 250px;
            }
            
            .informasi-section {
                padding: 40px 0;
            }
            
            .informasi-section h2 {
                font-size: 1.8rem;
                margin-bottom: 30px;
            }
            
            .card-body {
                padding: 15px;
            }
            
            .kontak-section {
                padding: 30px 15px;
                margin: 30px auto;
            }
            
            .informasi-sekolah h3 {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 576px) {
            .carousel-container {
                margin: 20px auto;
            }
            
            .intro-box {
                margin: 15px auto;
                padding: 20px;
            }
            
            .informasi-section h2 {
                font-size: 1.6rem;
            }
            
            .social-icons img {
                width: 30px;
                height: 30px;
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
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/img/logo.png" alt="Logo Sekolah">
            <span>SMKN 64 Jakarta</span>
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="beranda" class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img src="assets/img/depan.jpeg" alt="Gerbang Depan">
                <div class="carousel-caption"><h5>Gerbang Depan</h5></div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/teras1.jpeg" alt="Teras Sekolah">
                <div class="carousel-caption"><h5>Teras Sekolah</h5></div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/lorong1.jpeg" alt="Lorong Kelas">
                <div class="carousel-caption"><h5>Lorong Kelas</h5></div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/aula.jpeg" alt="Aula Sekolah">
                <div class="carousel-caption"><h5>Aula Sekolah</h5></div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/lapangan.jpeg" alt="Lapangan">
                <div class="carousel-caption"><h5>Lapangan</h5></div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<div class="container intro-box text-center">
    <h2 class="mb-3">Selamat Datang di SMK Negeri 64 Jakarta</h2>
    <p class="lead text-muted">
        Sebagai lembaga pendidikan, SMKN 64 Jakarta tanggap dengan perkembangan teknologi tersebut. 
        Dengan dukungan SDM yang dimiliki, sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi publik. 
        Teknologi Informasi Web khususnya, menjadi sarana bagi SMK Negeri 64 Jakarta untuk memberi pelayanan informasi secara cepat, jelas, dan akuntabel. Dari layanan ini pula, sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab Kebutuhan masyarakat.
    </p>
</div>

<section class="informasi-sekolah">
    <div class="container">
        <h3>Informasi Sekolah</h3>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="info-item">
                    <div class="info-icon">👨‍🏫</div>
                    <div class="info-title">Guru & TU</div>
                    <div class="info-desc">Data lengkap guru dan TU</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="info-item">
                    <div class="info-icon">📚</div>
                    <div class="info-title">E-Perpustakaan</div>
                    <div class="info-desc">Koleksi buku dan jurnal digital sekolah</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="info-item">
                    <div class="info-icon">📁</div>
                    <div class="info-title">Direktori</div>
                    <div class="info-desc">Direktori lengkap fasilitas dan layanan</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="info-item">
                    <div class="info-icon">🖼️</div>
                    <div class="info-title">Galeri</div>
                    <div class="info-desc">Dokumentasi kegiatan dan prestasi sekolah</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="informasi-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Informasi Terbaru</h2>
        <div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <a href="https://www.youtube.com/watch?v=gx_Lz88QRB4" target="_blank">
                        <img src="https://img.youtube.com/vi/gx_Lz88QRB4/hqdefault.jpg" class="card-img-top" alt="Video 1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">✨MERIAHNYA PERAYAAN P5✨</h5>
                        <a href="https://www.youtube.com/watch?v=gx_Lz88QRB4" target="_blank" class="btn btn-sm btn-outline-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>

                        <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <a href="https://www.youtube.com/watch?v=_z-b0cBK0vI" target="_blank">
                        <img src="https://img.youtube.com/vi/_z-b0cBK0vI/hqdefault.jpg" class="card-img-top" alt="Video 2">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Meriahnya Classmeet Day 1-3</h5>
                        <a href="https://www.youtube.com/watch?v=_z-b0cBK0vI" target="_blank" class="btn btn-sm btn-outline-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>

                        <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="assets/img/depan2.jpg" class="card-img-top" alt="Gambar Informasi">
                    <div class="card-body">
                        <h5 class="card-title">Rano Karno Resmikan Gedung SMKN 64 Jakarta</h5>
                        <a href="https://www.beritajakarta.id/potret-jakarta/album/18179/rano-karno-resmikan-gedung-smkn-64-jakarta" target="_blank" class="btn btn-sm btn-outline-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<footer class="text-center py-3">
    &copy; <?php echo date("Y"); ?> SMK Negeri 64 Jakarta. All rights reserved.
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
</script>
</body>
</html>
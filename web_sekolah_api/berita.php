<?php
include 'koneksi.php';
$sql = "SELECT * FROM berita ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah</title>
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

                .header-section {
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.1);
            padding: 40px 30px;
            margin: 40px auto;
            text-align: center;
            max-width: 800px;
        }

        .header-section h2 {
            color: #8B4513;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
        }

        .header-section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #D2691E, #CD853F);
            border-radius: 2px;
        }

        .header-section p {
            color: #5D4037;
            font-size: 1.1rem;
            margin-top: 20px;
        }

                .card {
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.15);
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(139, 69, 19, 0.25);
        }

        .card-img-top {
            height: 200px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: 600;
            color: #8B4513;
            margin-bottom: 15px;
            font-size: 1.1rem;
            line-height: 1.4;
        }

        .card-text {
            color: #5D4037;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .text-muted.small {
            color: #8B4513 !important;
            font-weight: 500;
            font-size: 0.85rem;
        }

                .text-decoration-none {
            text-decoration: none !important;
        }

        .text-decoration-none:hover .card-title {
            color: #A0522D;
        }

                .no-berita {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 15px;
            margin: 40px auto;
            max-width: 600px;
        }

        .no-berita p {
            color: #8B4513;
            font-size: 1.1rem;
            margin-bottom: 0;
        }

                .kontak-section {
            padding: 40px 30px;
            background: rgba(255, 248, 220, 0.5);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(139, 69, 19, 0.2);
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.1);
            margin: 60px auto 40px;
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

            .header-section {
                margin: 30px 15px;
                padding: 30px 20px;
            }

            .header-section h2 {
                font-size: 1.8rem;
            }
            
            .card-body {
                padding: 18px;
            }

            .card-title {
                font-size: 1rem;
            }
            
            .kontak-section {
                margin: 40px 15px 30px;
                padding: 30px 20px;
            }

            .no-berita {
                margin: 30px 15px;
                padding: 40px 20px;
            }
        }

        @media (max-width: 576px) {
            .header-section {
                padding: 25px 15px;
            }

            .header-section h2 {
                font-size: 1.6rem;
            }

            .header-section p {
                font-size: 1rem;
            }
            
            .card-body {
                padding: 15px;
            }
            
            .social-icons img {
                width: 35px;
                height: 35px;
            }

            .card-img-top {
                height: 180px;
            }
        }

                html {
            scroll-behavior: smooth;
        }

                .card-loading {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/img/logo.png" alt="Logo Sekolah">
            <span>SMKN 64 Jakarta</span>
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
                <li class="nav-item"><a class="nav-link active" href="berita.php">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="header-section">
        <h2>Berita Terbaru</h2>
        <p>Ikuti perkembangan dan kegiatan terbaru dari SMK Negeri 64 Jakarta</p>
    </div>
</div>

<div class="container py-4">
    <div class="row g-4">
        <?php
        if ($result->num_rows > 0) {
            $delay = 0;
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-12 col-sm-6 col-md-4">
                        <a href="detail_berita.php?id='.$row['id_berita'].'" class="text-decoration-none text-dark">
                            <div class="card card-loading" style="animation-delay: '.$delay.'s">
                                '.($row['gambar'] ? '<img src="assets/img/'.$row['gambar'].'" class="card-img-top" alt="Gambar Berita">' : '').'
                                <div class="card-body">
                                    <h5 class="card-title">'.htmlspecialchars($row['judul']).'</h5>
                                    <p class="card-text">'.substr(htmlspecialchars($row['isi']), 0, 100).'...</p>
                                    <p class="text-muted small">'.htmlspecialchars($row['tanggal']).'</p>
                                </div>
                            </div>
                        </a>
                      </div>';
                $delay += 0.1;
            }
        } else {
            echo '<div class="col-12">
                    <div class="no-berita">
                        <p>Belum ada berita yang tersedia saat ini.</p>
                    </div>
                  </div>';
        }
        ?>
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
            <p><strong>Kontak Person:</strong><br>
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
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card-loading');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '1';
            }, index * 100);
        });
    });
</script>
</body>
</html>
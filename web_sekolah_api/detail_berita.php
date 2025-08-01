<?php
include 'koneksi.php';


$id_berita = isset($_GET['id']) ? intval($_GET['id']) : 0;


$sql = "SELECT * FROM berita WHERE id_berita = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_berita);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<h3 class='text-center mt-5'>Berita tidak ditemukan.</h3>";
    exit;
}

$berita = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($berita['judul']); ?> - SMKN 64 Jakarta</title>
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

                .berita-detail {
            max-width: 900px;
            margin: 40px auto;
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.2);
            padding: 40px;
            animation: fadeInUp 0.8s ease;
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

                .article-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 2px solid rgba(139, 69, 19, 0.1);
        }

        .article-title {
            color: #8B4513;
            font-weight: 700;
            font-size: 2.2rem;
            line-height: 1.3;
            margin-bottom: 20px;
            position: relative;
        }

        .article-date {
            color: #A0522D;
            font-weight: 500;
            font-size: 1rem;
            background: linear-gradient(135deg, #DEB887 0%, #D2B48C 100%);
            padding: 8px 20px;
            border-radius: 25px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(139, 69, 19, 0.2);
        }

                .article-image {
            text-align: center;
            margin: 30px 0;
        }

        .berita-detail img {
            max-width: 100%;
            width: auto;
            max-height: 500px;
            object-fit: contain;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.3);
            transition: transform 0.3s ease;
        }

        .berita-detail img:hover {
            transform: scale(1.02);
        }

                .article-content {
            color: #5D4037;
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
            margin: 30px 0;
        }

        .article-content p {
            margin-bottom: 20px;
        }

                .btn-back {
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 100%);
            color: #FFF8DC;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(139, 69, 19, 0.3);
        }

        .btn-back:hover {
            background: linear-gradient(135deg, #A0522D 0%, #CD853F 100%);
            color: #FFF8DC;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.4);
        }

        .btn-back::before {
            content: '←';
            font-size: 1.2rem;
        }

                .button-container {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid rgba(139, 69, 19, 0.1);
        }

                .error-message {
            text-align: center;
            margin: 100px auto;
            max-width: 600px;
            background: rgba(255, 248, 220, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(139, 69, 19, 0.2);
            border-radius: 20px;
            padding: 60px 40px;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.2);
        }

        .error-message h3 {
            color: #8B4513;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .error-message p {
            color: #5D4037;
            margin-bottom: 30px;
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

                .breadcrumb-nav {
            background: rgba(255, 248, 220, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 15px 25px;
            margin: 20px auto 30px;
            max-width: 900px;
        }

        .breadcrumb-nav a {
            color: #8B4513;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .breadcrumb-nav a:hover {
            color: #A0522D;
        }

        .breadcrumb-nav span {
            color: #5D4037;
            margin: 0 10px;
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

            .berita-detail {
                margin: 20px 15px;
                padding: 25px 20px;
            }

            .article-title {
                font-size: 1.8rem;
            }

            .article-date {
                font-size: 0.9rem;
                padding: 6px 15px;
            }

            .article-content {
                font-size: 1rem;
                line-height: 1.7;
            }

            .berita-detail img {
                max-height: 300px;
            }

            .btn-back {
                padding: 10px 25px;
                font-size: 0.95rem;
            }

            .breadcrumb-nav {
                margin: 15px 15px 20px;
                padding: 12px 20px;
            }

            .error-message {
                margin: 50px 15px;
                padding: 40px 25px;
            }
        }

        @media (max-width: 576px) {
            .berita-detail {
                padding: 20px 15px;
            }

            .article-title {
                font-size: 1.6rem;
            }

            .article-header {
                margin-bottom: 30px;
                padding-bottom: 20px;
            }

            .berita-detail img {
                max-height: 250px;
            }

            .btn-back {
                padding: 8px 20px;
                font-size: 0.9rem;
            }

            .breadcrumb-nav {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

                html {
            scroll-behavior: smooth;
        }

                .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #D2691E, #CD853F);
            z-index: 9999;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body>

<div class="reading-progress" id="readingProgress"></div>

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
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="breadcrumb-nav">
        <a href="index.php">Beranda</a>
        <span>›</span>
        <a href="berita.php">Berita</a>
        <span>›</span>
        <span><?php echo htmlspecialchars($berita['judul']); ?></span>
    </div>
</div>

<div class="container">
    <article class="berita-detail">
        <header class="article-header">
            <h1 class="article-title"><?php echo htmlspecialchars($berita['judul']); ?></h1>
            <div class="article-date"><?php echo htmlspecialchars($berita['tanggal']); ?></div>
        </header>
        
        <?php if (!empty($berita['gambar'])): ?>
            <div class="article-image">
                <img src="assets/img/<?php echo htmlspecialchars($berita['gambar']); ?>" alt="Gambar Berita">
            </div>
        <?php endif; ?>
        
        <div class="article-content">
            <?php echo nl2br(htmlspecialchars($berita['isi'])); ?>
        </div>

        <div class="button-container">
            <a href="berita.php" class="btn-back">Kembali ke Berita</a>
        </div>
    </article>
</div>

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


    window.addEventListener('scroll', function() {
        const article = document.querySelector('.berita-detail');
        const progressBar = document.getElementById('readingProgress');
        
        if (article) {
            const articleTop = article.offsetTop;
            const articleHeight = article.offsetHeight;
            const windowTop = window.pageYOffset;
            const windowHeight = window.innerHeight;
            
            const articleBottom = articleTop + articleHeight;
            const windowBottom = windowTop + windowHeight;
            
            if (windowTop >= articleTop && windowTop <= articleBottom) {
                const progress = ((windowTop - articleTop) / (articleHeight - windowHeight)) * 100;
                progressBar.style.width = Math.min(Math.max(progress, 0), 100) + '%';
            } else if (windowTop < articleTop) {
                progressBar.style.width = '0%';
            } else {
                progressBar.style.width = '100%';
            }
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
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '0';
                this.style.transition = 'opacity 0.3s ease';
                setTimeout(() => {
                    this.style.opacity = '1';
                }, 100);
            });
        });
    });
</script>
</body>
</html>
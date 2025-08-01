<?php
session_start();
include '../koneksi.php';

// Cek apakah admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Proses simpan berita
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = date('Y-m-d');
    $id_admin = 1; // sementara pakai ID admin statis

    // Proses upload gambar
    $gambar = null;
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $target_dir = "../assets/img/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $gambar = time() . "_" . basename($_FILES["gambar"]["name"]);
        $target_file = $target_dir . $gambar;
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    }

    if (!empty($judul) && !empty($isi)) {
        $sql = "INSERT INTO berita (judul, isi, tanggal, id_admin, gambar) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssis", $judul, $isi, $tanggal, $id_admin, $gambar);
        if ($stmt->execute()) {
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Gagal menyimpan berita.";
        }
    } else {
        $error = "Judul dan isi tidak boleh kosong!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .btn-brown { background-color: #a47148; color: white; }
        .btn-brown:hover { background-color: #8c5e39; color: white; }
    </style>
</head>
<body>
<div class="container py-4">
    <h2 class="text-brown mb-4">Tambah Berita</h2>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Isi</label>
            <textarea name="isi" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-brown">Simpan</button>
        <a href="dashboard.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>

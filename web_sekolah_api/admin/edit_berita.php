<?php
session_start();
include '../koneksi.php';

// Cek apakah admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Ambil ID berita dari URL
$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php");
    exit;
}

// Ambil data berita yang akan diedit
$sql = "SELECT * FROM berita WHERE id_berita = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$berita = $result->fetch_assoc();

if (!$berita) {
    header("Location: dashboard.php");
    exit;
}

// Proses update berita
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $berita['gambar']; // gambar lama

    // Cek apakah ada gambar baru
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $target_dir = "../assets/img/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $gambar_baru = time() . "_" . basename($_FILES["gambar"]["name"]);
        $target_file = $target_dir . $gambar_baru;

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Hapus gambar lama jika ada
            if ($berita['gambar'] && file_exists($target_dir . $berita['gambar'])) {
                unlink($target_dir . $berita['gambar']);
            }
            $gambar = $gambar_baru;
        }
    }

    if (!empty($judul) && !empty($isi)) {
        $update = "UPDATE berita SET judul = ?, isi = ?, gambar = ? WHERE id_berita = ?";
        $stmt = $conn->prepare($update);
        $stmt->bind_param("sssi", $judul, $isi, $gambar, $id);
        if ($stmt->execute()) {
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Gagal mengupdate berita.";
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
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .btn-brown { background-color: #a47148; color: white; }
        .btn-brown:hover { background-color: #8c5e39; color: white; }
        .img-preview { max-width: 200px; margin-bottom: 10px; }
    </style>
</head>
<body>
<div class="container py-4">
    <h2 class="text-brown mb-4">Edit Berita</h2>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?php echo htmlspecialchars($berita['judul']); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Isi</label>
            <textarea name="isi" rows="5" class="form-control" required><?php echo htmlspecialchars($berita['isi']); ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar Saat Ini</label><br>
            <?php if ($berita['gambar']): ?>
                <img src="../assets/img/<?php echo htmlspecialchars($berita['gambar']); ?>" alt="Gambar Berita" class="img-preview">
            <?php else: ?>
                <p class="text-muted">Tidak ada gambar</p>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-brown">Update</button>
        <a href="dashboard.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>

<?php
session_start();
include '../koneksi.php';

// Cek apakah admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Ambil data berita
$sql = "SELECT * FROM berita ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
      .btn-brown { background-color: #a47148; color: white; }
      .btn-brown:hover { background-color: #8c5e39; color: white; }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#a47148;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard Admin</a>
    <div class="d-flex">
      <span class="navbar-text text-white me-3">Login: <?php echo $_SESSION['admin']; ?></span>
      <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
    </div>
  </div>
</nav>

<div class="container py-4">
  <h2 class="mb-3 text-brown">Daftar Berita</h2>
  <a href="tambah_berita.php" class="btn btn-brown mb-3">+ Tambah Berita</a>
  <table class="table table-bordered table-striped">
    <thead style="background-color:#a47148; color:white;">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
          $no = 1;
          while ($row = $result->fetch_assoc()) {
              echo "<tr>
                  <td>{$no}</td>
                  <td>{$row['judul']}</td>
                  <td>{$row['tanggal']}</td>
                  <td>
                      <a href='edit_berita.php?id={$row['id_berita']}' class='btn btn-warning btn-sm'>Edit</a>
                      <a href='hapus_berita.php?id={$row['id_berita']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\");'>Hapus</a>
                  </td>
              </tr>";
              $no++;
          }
      } else {
          echo "<tr><td colspan='4' class='text-center'>Belum ada berita</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2025 at 04:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin64', 'smkn64jaya');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `gambar` varchar(100) DEFAULT NULL,
  `id_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `tanggal`, `gambar`, `id_admin`) VALUES
(2, ' Sistem Penerimaan Murid Baru (SPMB) 2025-2026', 'Bagi Calon Peserta Didik baru yang akan mendaftar ke SMP, SMA dan SMK berdomisili berdasarkan KK (Kartu Keluarga) DKI Jakarta:\r\n\r\nCMB yang bersekolah diluar Provinsi DKI Jakarta berdomisili di Provinsi DKI Jakarta berdasarkan Kartu Keluarga yang dikeluarkan oleh Dinas Kependudukan dan Pecatatan Sipil paling singkat 1 (Satu) tahun sebelum tanggal pendaftaran PMB, yaitu tanggal 16 Juni 2024;\r\nCMB yang merupakan lulusan tahun sebelumnya (paling lama 2 tahun)/ 2023-2024, yang tidak terdaftar di Satuan Pendidikan pada jenjang yang dituju, berdomisili di Provinsi DKI Jakarta yang dibuktikan berdasarkan Kartu Keluarga yang dikeluarkan oleh Dinas Kependudukan dan Pencatatan Sipil paling singkat 1 (Satu) tahun sebelum tanggal pendaftaran PMB, yaitu tanggal 16 Juni 2024;\r\nwajib melakukan pra pendaftaran di https://sidanira.jakarta.go.id/prapendaftaran.\r\n\r\nPra Pendaftaran dapat dilakukan dari tanggal 19 Mei 2025  s/d 12 Juni 2025\r\n\r\nApabila Calon Murid Baru (CMB) termasuk salah satu kategori diatas tidak melakukan Prapendaftaran maka CMB tidak dapat mengikuti pelaksanaan penerimaan murid baru tahun 2025\r\nApabila Calon Murid Baru (CMB) tidak termasuk salah satu kategori diatas maka CMB dapat langsung melakukan tahap Pendaftaran sesuai dengan jenjang yang dituju dan tanggal yang terdaftar\r\n \r\n\r\nTata Cara Pra Pendaftaran PMB 2025\r\n\r\nCMB mengakses laman publik Pradaftaran di https://sidanira.jakarta.go.id/prapendaftaran dengan mengisi formulir Prapendaftaran secara daring :\r\nCMB yang akan mendaftar ke jenjang SMP, SMA, dan/atau SMK; dan\r\nCMB yang berdomisili di DKI Jakarta selambat-lambatnya tanggal 16 Juni 2024, dengan ketentuan:\r\n-> Asal sekolah di luar provinsi DKI Jakarta, lulusan tahun 2023, 2024 dan 2025.\r\n-> Asal sekolah di dalam provinsi DKI Jakarta, lulusan tahun 2023 dan 2024.\r\n-> Tidak terdaftar pada Satuan Pendidikan lainnya\r\n-> Asal Satuan Pendidikan Asing\r\nRincian dokumen yang discan dan diunggah untuk Jenjang SMA/SMK:\r\nKartu Keluarga\r\nNilai Rapor selama 5 semester, meliputi: Kelas 7 (Semester 1 dan 2), Kelas 8 (Semester 1 dan 2), dan Kelas 9 (Semester 1), pada mata pelajaran Pendidikan Pancasila, Bahasa Indonesia, Matematika, Ilmu Pengetahuan Alam (IPA), Ilmu Pengetahuan Sosial (IPS) dan Bahasa Inggris;\r\nSurat keterangan rapor Pendidikan tahun 2025 dari satuan Pendidikan asal yang ditandatangani oleh kepala satuan Pendidikan;\r\nSurat Keterangan Peringkat Rerata Nilai Rapor dalam 1 (Satu) sekolah dari Sekolah asal;\r\nSertifikat Prestasi Akademik;\r\nSertifikat Prestasi Non Akademik;\r\nSurat Keputusan Kepala Sekolah tentang Susunan Pengurus OSIS/MPK (untuk CMB jenjang SMA/SMK);\r\nSurat Keputusan Kepala Sekolah tentang Susunan Pengurus Ekstrakurikuler (untuk CMB jenjang SMA/SMK);\r\nSertifikat yang diperoleh dengan hasil seleksi ketat bukan perlombaan; dan\r\nSurat Pertanggungjawaban Mutlak (SPTJM) tentang Keabsahan Dokumen dari orang tua/wali calon murid baru bermaterai.\r\n\r\nMengunggah dokumen Prapendaftaran;\r\nMencetak tanda bukti pengajuan Prapendaftaran yang berisi Nomor Peserta;\r\nCalon Murid Baru (CMB) melakukan pemantauan hasil verifikasi berkas Prapendaftaran yang telah diunggah dalam laman https://sidanira.jakarta.go.id/prapendaftaran; (Apabila telah disetujui oleh tim verifikator);\r\nCalon Murid Baru (CMB) mencetak tanda bukti pengajuan Prapendaftaran. (Tanda bukti Prapendaftaran digunakan untuk proses pengajuan akun pada SPMB)\r\n \r\n\r\nCall Center SMKN 64:\r\nSilahkan melakukan chat secara online di icon pojok kanan bawah web pada jam kerja, diluar jam kerja akan kami balas melalui email / whatsapp\r\n\r\nInfo & Kontak Dinas\r\n\r\nPOSKO SPMB ONLINE\r\n\r\nDinas Pendidikan Provinsi DKI Jakarta\r\nJl. Gatot Subroto No.Kav. 40-41, Kuningan - Setia Budi\r\nKota Jakarta Selatan, DKI Jakarta 12950\r\n\r\nKontak Posko Dinas\r\n\r\n0812-80555426\r\n0812-80555612\r\n0812-80555148\r\n0812-80555165\r\n0812-80555124\r\n0812-80555147\r\nKontak Posko Wilayah\r\n\r\nSudin Wilayah\r\n\r\nWhatsapp\r\n\r\nTelp\r\n\r\nLokasi Posko Wilayah\r\n\r\nJakarta Pusat 1\r\n\r\n087712357970\r\n\r\n082113496772\r\n\r\nSMK Negeri 1 Jakarta\r\n\r\nJakarta Pusat 2\r\n\r\n087723267754\r\n\r\n085212419399\r\n\r\nSMK Negeri 14 Jakarta\r\n\r\nJakarta Barat 1\r\n\r\n082246525540\r\n\r\n082113601014\r\n\r\nSMP Negeri 108 Jakarta\r\n\r\nJakarta Barat 2\r\n\r\n085353580932\r\n\r\n085353580933\r\n\r\nSMA Negeri 78 Jakarta\r\n\r\nJakarta Selatan 1\r\n\r\n082125269215\r\n\r\n082125269208\r\n\r\nSDN Cipete Selatan 03\r\n\r\nJakarta Selatan 2\r\n\r\n085947191250\r\n\r\n081325295316\r\n\r\nSMA Negeri 70 Jakarta\r\n\r\nJakarta Timur 1\r\n\r\n087729946630\r\n\r\n082114886889\r\n\r\nSMK Negeri 26 Jakarta\r\n\r\nJakarta Timur 2\r\n\r\n085138743097\r\n\r\n085138743096\r\n\r\nSMP Negeri 103 Jakarta\r\n\r\nJakarta Utara 1\r\n\r\n081998213356\r\n\r\n087721928627\r\n\r\nSMP Negeri 95 Jakarta\r\n\r\nJakarta Utara 2\r\n\r\n081234594275\r\n\r\n081234594268\r\n\r\nSMP Negeri 30 Jakarta\r\n\r\nKep. Seribu\r\n\r\n081324938932\r\n\r\n081324937594\r\n\r\nKantor Transit Suku Dinas Pendidikan Kab. Adm. Kepulauan Seriibu\r\n\r\n', '2025-07-25 00:00:00', '1753417262_berita1.jpeg', 1),
(3, 'Peresmian Gedung SMK Negeri 64 Jakarta', 'Wakil Ketua Dewan Perwakilan Rakyat Daerah (DPRD) DKI Jakarta Rany Mauliani menghadiri peresmian Gedung Sekolah Menengah Kejuruan (SMK) Negeri 64 Jakarta, Cipayung, Jakarta Timur, Selasa (22/7). Peresmian ditandai dengan penandatanganan prasasti secara simbolis oleh Wakil Gubernur DKI Jakarta Rano Karno. Tampak hadir Asisten Kesejahteraan Rakyat Setda DKI Ali Maulana Hakim, Kepala Dinas Pendidikan DKI Jakarta Nahdiana, dan Biro Pendidikan dan Mental Spiritual Setda DKI Fajar Eko Satriyo. Pada kesempatan itu, Rany Mauliani mengapresiasi pembangunan Gedung SMKN 64 Jakarta. Bangunan sekolah itu mengusung konsep gedung hijau (green building) dan ramah disabilitas atau mendukung prinsip inklusivitas di dunia pendidikan. (DDJP/asa)', '2025-08-01 00:00:00', '1754013091_berita1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

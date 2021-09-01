-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2021 pada 07.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringnew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` varchar(14) NOT NULL,
  `user_id` varchar(14) DEFAULT NULL,
  `judul_blog` varchar(100) DEFAULT NULL,
  `konten_blog` mediumtext DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id_blog`, `user_id`, `judul_blog`, `konten_blog`, `deleted_at`, `created_at`, `updated_at`) VALUES
('B0001', 'U-20210213-002', 'Paket Katering Bukber di Surabaya | Ramadhan 2021', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Saat ini kita sudah memasuki bulan ramadhan di tahun 2021, walaupun masih dalam suasana Pandemi COVID-19 akan tetapi sudah kewajiban bagi setiap umat muslim untuk menjalankan ibadah puasa.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Memasuki bulan puasa, biasanya banyak agenda buka puasa bersama, baik itu dengan saudara, kerabat sampai dengan teman kantor atau kampus. Biasanya, buka puasa bersama dilakukan di tempat seperti restoran, rumah makan, masjid, hotel, kantor atau rumah.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Berbuka puasa tidak terlepas dari makanan-makanan khas berbuka puasa seperti Kolak, bubur kacang hijau, bubur sumsum, es campur dan makanan manis lainnya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><a href=\"https://www.aisyacatering.com/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Aisya Catering</span></a>&nbsp;sebagai pelopor catering bukber di&nbsp;<span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Surabaya</span>&nbsp;menyediakan paket buka puasa bersama ramadhan di tahun ini. Nah apa saja menu paket buka puasa bersama dari Aisya Catering di tahun ini? Berikut menunya.</p><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 26px; line-height: 32px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Menu Bukber dari Aisya Catering Surabaya</span></h3><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">1. Paket Bukber 1 (Rp25.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Menu buka puasa pilihan*</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Cao/Es Buah, Teh Hangat</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li></ul><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">2. Paket Bukber 2 (Rp35.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Menu buka puasa pilihan*, Prasmanan : Nasi putih, ayam bakar/goreng mentega, cap jay/tumis sayur, mie goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Cao/Es Buah, Teh Hangat, air mineral gelas</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li></ul><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">3. Paket Bukber 3 (Rp55.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Prasmanan : Nasi putih, ayam bakar/goreng mentega, cap jay/tumis sayur, mie goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Menado, Teh Hangat, air mineral gelas</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free snack ringan (gorengan)</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free buah potong</li></ul><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Untuk lebih lengkapnya, Anda bisa melihat tabel menu berikut ini.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/1-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/2-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/3-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p>', NULL, '2021-08-14 15:26:59', '2021-08-14 15:26:59'),
('B0002', 'U-20210213-002', 'ssss', '<p>andnakndanl <span style=\"background-color: rgb(255, 255, 0);\">jDANDLndl&nbsp;</span></p><ol><li>1. a</li><li>b</li><li>c</li><li><br></li></ol>', NULL, '2021-08-14 15:47:26', '2021-08-14 15:47:26');

--
-- Trigger `blogs`
--
DELIMITER $$
CREATE TRIGGER `blogtrigger` BEFORE INSERT ON `blogs` FOR EACH ROW BEGIN 
SELECT SUBSTRING((MAX(`id_blog`)),2,6) 
INTO @total FROM blogs; 
IF (@total >= 1) THEN 
SET new.id_blog = CONCAT('B',LPAD(@total+1,4,'0')); 
ELSE 
SET new.id_blog = CONCAT('B',LPAD(1,4,'0')); 
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_produk` varchar(15) NOT NULL,
  `id_pemesanan` varchar(15) NOT NULL,
  `sub_total` decimal(11,0) DEFAULT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` varchar(191) DEFAULT NULL,
  `connection` text DEFAULT NULL,
  `queue` text DEFAULT NULL,
  `payload` longtext DEFAULT NULL,
  `exception` longtext DEFAULT NULL,
  `failed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_file` varchar(15) NOT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `file`
--
DELIMITER $$
CREATE TRIGGER `filetrigger` BEFORE INSERT ON `file` FOR EACH ROW BEGIN 
SELECT SUBSTRING((MAX(`id_file`)),2,6) 
INTO @total FROM roles; 
IF (@total >= 1) THEN 
SET new.id_file = CONCAT('F',LPAD(@total+1,4,'0')); 
ELSE 
SET new.id_file = CONCAT('F',LPAD(1,4,'0')); 
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_produk`
--

CREATE TABLE `galeri_produk` (
  `id_galeri` varchar(15) NOT NULL,
  `id_produk` varchar(15) DEFAULT NULL,
  `foto` varchar(191) DEFAULT NULL,
  `id_default` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_produk`
--

INSERT INTO `galeri_produk` (`id_galeri`, `id_produk`, `foto`, `id_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
('G-20210725-001', 'P-20210226-001', '/images/1627212472-aisya-catering-logo3.png', 0, NULL, '2021-07-25 11:27:52', '2021-07-25 11:27:52'),
('G-20210725-002', 'P-20210226-003', '/images/1627228550-banner-home-15.jpg', 0, NULL, '2021-07-25 15:55:50', '2021-07-25 15:55:50'),
('G-20210730-001', 'P-20210226-001', '/images/1627651254-kisspng-flower-circle-frame-5abc724b4cc336.3318959315222994673144.png', 0, NULL, '2021-07-30 13:20:54', '2021-07-30 13:20:54');

--
-- Trigger `galeri_produk`
--
DELIMITER $$
CREATE TRIGGER `galtrig` BEFORE INSERT ON `galeri_produk` FOR EACH ROW BEGIN
SELECT COUNT(*) 
INTO @id FROM galeri_produk
where DATE(created_at)=DATE(new.created_at);
IF (@id >= 1) THEN 
SET new.id_galeri=CONCAT("G-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(@id+1,3,"0"));
ELSE 
SET new.id_galeri = CONCAT("G-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(1,3,"0"));
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` varchar(5) NOT NULL,
  `nama_kategori` varchar(35) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama_kategori`, `deleted_at`, `created_at`, `updated_at`) VALUES
('K0001', 'Paket Tumpeng Hantaran', NULL, NULL, NULL),
('K0002', 'Paket Rice Box', NULL, NULL, NULL),
('K0003', 'Paket Snackbox', NULL, NULL, NULL),
('K0004', 'Paket Aqiqah', NULL, NULL, NULL),
('K0005', 'Paket Ramadhan', NULL, NULL, NULL),
('K0006', 'Paket Lebaran', NULL, NULL, NULL),
('K0007', 'Paket Covid-19', NULL, NULL, NULL),
('K0008', 'Paket Pemerintahan', NULL, NULL, NULL),
('K0009', 'Paket Corporate/Pabrik', NULL, NULL, NULL),
('K0010', 'Paket Wedding', NULL, NULL, NULL);

--
-- Trigger `kategori_produk`
--
DELIMITER $$
CREATE TRIGGER `kattrigger` BEFORE INSERT ON `kategori_produk` FOR EACH ROW BEGIN 
SELECT SUBSTRING((MAX(`id`)),2,6) 
INTO @total FROM kategori_produk; 
IF (@total >= 1) THEN 
SET new.id = CONCAT('K',LPAD(@total+1,4,'0')); 
ELSE 
SET new.id = CONCAT('K',LPAD(1,4,'0')); 
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED DEFAULT NULL,
  `migration` varchar(191) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) DEFAULT NULL,
  `token` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`, `updated_at`) VALUES
('citrawuli@gmail.com', '$2y$10$lZpd/RIBVVo44UM8xtIfd.n.6sJf12Qmhhb/1a17tdjFG63Koy55m', '2021-08-05 12:52:49', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(15) NOT NULL,
  `id_pemesanan` varchar(15) DEFAULT NULL,
  `tanggal_pembayaran` datetime DEFAULT NULL,
  `bank_transfer` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(30) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(15) NOT NULL,
  `user_id` varchar(14) DEFAULT NULL,
  `nama_lengkap_pembeli` varchar(50) DEFAULT NULL,
  `no_hp_pembeli` varchar(15) DEFAULT NULL,
  `alamat_lengkap_pembeli` varchar(100) DEFAULT NULL,
  `untuk_tanggal` date DEFAULT NULL,
  `untuk_jam` time DEFAULT NULL,
  `pengambilan` varchar(20) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `total_transaksi` decimal(11,0) DEFAULT NULL,
  `status_pemesanan` varchar(30) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `requesttrigger` BEFORE INSERT ON `pemesanan` FOR EACH ROW BEGIN
SELECT COUNT(*) 
INTO @id FROM pemesanan 
where DATE(created_at)=DATE(new.created_at);
IF (@id >= 1) THEN 
SET new.id_pemesanan=CONCAT("RQ-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(@id+1,3,"0"));
ELSE 
SET new.id_pemesanan = CONCAT("RQ-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(1,3,"0"));
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` varchar(15) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe_produk` varchar(20) DEFAULT NULL,
  `deskripsi_produk` varchar(150) DEFAULT NULL,
  `harga_produk` decimal(10,0) UNSIGNED NOT NULL,
  `rating_produk` int(11) DEFAULT NULL,
  `pengambilan` varchar(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `tipe_produk`, `deskripsi_produk`, `harga_produk`, `rating_produk`, `pengambilan`, `deleted_at`, `created_at`, `updated_at`) VALUES
('P-20210226-001', 'K0010', 'Nasi Kuning 1', NULL, NULL, '19000', NULL, NULL, NULL, '2021-02-26 10:27:08', '2021-02-27 15:12:45'),
('P-20210226-002', 'K0010', 'A', 'makanan', NULL, '12350', NULL, NULL, NULL, '2021-02-26 11:25:40', '2021-03-02 03:47:39'),
('P-20210226-003', 'K0004', 'b', NULL, NULL, '12200', NULL, NULL, NULL, '2021-02-26 11:26:31', '2021-07-21 14:28:44'),
('P-20210226-004', 'K0002', 'C', NULL, NULL, '50', NULL, NULL, NULL, '2021-02-26 11:29:55', '2021-02-26 11:29:55'),
('P-20210227-001', 'K0002', 'D', NULL, NULL, '12', NULL, NULL, NULL, '2021-02-27 12:23:53', '2021-02-27 12:23:53'),
('P-20210227-002', 'K0002', 'E', NULL, NULL, '12', NULL, NULL, NULL, '2021-02-27 14:24:50', '2021-02-27 14:24:50'),
('P-20210227-003', 'K0002', 'F', NULL, NULL, '12', NULL, NULL, NULL, '2021-02-27 14:27:55', '2021-02-27 14:27:55'),
('P-20210227-004', 'K0002', 'G', NULL, NULL, '12000', NULL, NULL, NULL, '2021-02-27 14:40:21', '2021-02-27 14:40:21'),
('P-20210227-005', 'K0002', 'J', NULL, NULL, '12000', NULL, NULL, NULL, '2021-02-27 14:41:03', '2021-02-27 14:41:03'),
('P-20210406-001', 'K0006', 'ASDF', 'makanan', NULL, '12300', NULL, NULL, NULL, '2021-04-06 14:40:35', '2021-04-06 14:40:35');

--
-- Trigger `produk`
--
DELIMITER $$
CREATE TRIGGER `produktrig` BEFORE INSERT ON `produk` FOR EACH ROW BEGIN
SELECT COUNT(*) 
INTO @id FROM produk
where DATE(created_at)=DATE(new.created_at);
IF (@id >= 1) THEN 
SET new.id=CONCAT("P-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(@id+1,3,"0"));
ELSE 
SET new.id = CONCAT("P-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(1,3,"0"));
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` varchar(5) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`) VALUES
('R0001', 'user', '2021-01-28 11:34:55'),
('R0002', 'adminPemesanan', '2021-01-28 11:34:55'),
('R0003', 'adminPembayaran', '2021-01-28 11:35:02'),
('R0004', 'superAdmin', '2021-01-28 11:35:02');

--
-- Trigger `roles`
--
DELIMITER $$
CREATE TRIGGER `roletrigger` BEFORE INSERT ON `roles` FOR EACH ROW BEGIN 
SELECT SUBSTRING((MAX(`id`)),2,6) 
INTO @total FROM roles; 
IF (@total >= 1) THEN 
SET new.id = CONCAT('R',LPAD(@total+1,4,'0')); 
ELSE 
SET new.id = CONCAT('R',LPAD(1,4,'0')); 
END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `user_id` varchar(14) DEFAULT NULL,
  `role_id` varchar(5) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
('U-20210223-001', 'R0001', NULL, NULL, NULL),
('U-20210213-002', 'R0004', NULL, '2021-02-23 09:09:20', '2021-02-23 09:09:20'),
('U-20210213-001', 'R0001', NULL, '2021-02-23 09:18:13', '2021-02-23 09:18:13'),
('U-20210607-001', 'R0001', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(14) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
('U-20210209-001', 'Winda', 'winda@gmail.com', NULL, '$2y$10$BQnynrAr35KbiqfHfu.GvO5ihr5vjUnlLFq0tOWIFMgVG4z44etiW', NULL, '2021-02-09 09:31:28', '2021-02-09 09:31:28', NULL),
('U-20210209-002', 'Rianti', 'rianti@gmail.com', NULL, '$2y$10$NEeaQzIG/BC1NxSAACHpeOcwUf.doBT5Dr5KGGj2AGDoqzFggrYD6', NULL, '2021-02-09 09:37:51', '2021-02-09 09:37:51', NULL),
('U-20210209-003', 'Wilona', 'wilona@gmail.com', NULL, '$2y$10$2EfEkMDGrsiJqXrGHMzILu4WTso9b5lkEkM3XJ9zmOS0yx/LfGAPm', NULL, '2021-02-09 09:57:54', '2021-02-09 09:57:54', NULL),
('U-20210209-004', 'Citra', 'citrawuli@gmail.com', NULL, '$2y$10$4cKLpKowaMJMeHuGeaITbusGvnrtd02y.DqzNNEzyiHiZMXAUUZSC', NULL, '2021-02-09 10:48:59', '2021-02-09 10:48:59', NULL),
('U-20210213-001', 'Newton', 'newton@gmail.com', NULL, '$2y$10$H1.KHPRK7sMNuPjE/fKqIuNMscc7BhHP.zr2xSw3cBNcMiW5Yj8vy', NULL, '2021-02-13 10:27:11', '2021-02-13 10:27:11', NULL),
('U-20210213-002', 'Winter', 'winter@gmail.com', NULL, '$2y$10$/ZuB.txbkeqBQnhw9JZSQuVtoLw.SKMGjkjdZT8diDcxCVtkWWOH6', 'ULiHnXDAH3v9UwpO9SbssRhXAsqHVdk8vOh0ij9PVVJVVwkGlUi2WKwnkasA', '2021-02-13 13:37:54', '2021-02-13 13:37:54', NULL),
('U-20210216-001', 'Idola', 'idola@gmail.com', NULL, '$2y$10$ADCvj5xtYsLvsVQXrGA3vO3f4kcdDiS9qI10eQze6Q5dGDNcTkcAG', NULL, '2021-02-16 10:14:24', '2021-02-16 10:14:24', NULL),
('U-20210218-001', 'Meka', 'meka@gmail.com', NULL, '$2y$10$WcRyyE06p2JR1z.5jIs4IO.zEqLOAiX5EBWjNNH0SUkhUbyyLdmni', NULL, '2021-02-18 07:19:08', '2021-02-18 07:19:08', NULL),
('U-20210218-002', 'Peter', 'peter@gmail.com', NULL, '$2y$10$TX.95qP1JLa9jsaIban07.0Zu30osR9.fPIfAAFPnVIBqLkqdvKMK', NULL, '2021-02-18 08:48:34', '2021-02-18 08:48:34', NULL),
('U-20210220-002', 'Surya', 'surya@gmail.com', NULL, '$2y$10$90cnZIz9N3aW5QkRUrK4Z.JYwGOa0Qzqcxf9AzFc9klK0Ole4e5du', NULL, '2021-02-20 13:02:02', '2021-02-20 13:02:02', NULL),
('U-20210223-001', 'Bukit', 'bukit@gmail.com', NULL, '$2y$10$MFzRPx3knblrSAJNpTU3a.pqXKKLSySOgBJNf5tRGvvt.CHcGcN1q', NULL, '2021-02-23 09:08:18', '2021-02-23 09:08:18', NULL),
('U-20210607-001', 'Gary', 'Gary@gmail.com', NULL, '$2y$10$7/GIHRuf9dfKt4jYDE2zsOsdxG.Dlwhi7l0YoUoXOVtBclM0uPSDO', NULL, '2021-06-07 07:48:03', '2021-06-07 07:48:03', NULL);

--
-- Trigger `users`
--
DELIMITER $$
CREATE TRIGGER `usertrigger` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
SELECT COUNT(*) 
INTO @id FROM users
where DATE(created_at)=DATE(new.created_at);
IF (@id >= 1) THEN 
SET new.id=CONCAT("U-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(@id+1,3,"0"));
ELSE 
SET new.id = CONCAT("U-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(1,3,"0"));
END IF; 
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_produk`,`id_pemesanan`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD UNIQUE KEY `users_roles_unique` (`user_id`,`role_id`) USING BTREE,
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD CONSTRAINT `galeri_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

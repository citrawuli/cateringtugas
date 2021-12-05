-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2021 pada 23.33
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
('B0001', 'U-20211104-001', 'Paket Katering Bukber di Surabaya | Ramadhan 2021', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Saat ini kita sudah memasuki bulan ramadhan di tahun 2021, walaupun masih dalam suasana Pandemi COVID-19 akan tetapi sudah kewajiban bagi setiap umat muslim untuk menjalankan ibadah puasa.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Memasuki bulan puasa, biasanya banyak agenda buka puasa bersama, baik itu dengan saudara, kerabat sampai dengan teman kantor atau kampus. Biasanya, buka puasa bersama dilakukan di tempat seperti restoran, rumah makan, masjid, hotel, kantor atau rumah.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Berbuka puasa tidak terlepas dari makanan-makanan khas berbuka puasa seperti Kolak, bubur kacang hijau, bubur sumsum, es campur dan makanan manis lainnya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><a href=\"https://www.aisyacatering.com/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Aisya Catering</span></a>&nbsp;sebagai pelopor catering bukber di&nbsp;<span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Surabaya</span>&nbsp;menyediakan paket buka puasa bersama ramadhan di tahun ini. Nah apa saja menu paket buka puasa bersama dari Aisya Catering di tahun ini? Berikut menunya.</p><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 26px; line-height: 32px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Menu Bukber dari Aisya Catering Surabaya</span></h3><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">1. Paket Bukber 1 (Rp25.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Menu buka puasa pilihan*</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Cao/Es Buah, Teh Hangat</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li></ul><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">2. Paket Bukber 2 (Rp35.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Menu buka puasa pilihan*, Prasmanan : Nasi putih, ayam bakar/goreng mentega, cap jay/tumis sayur, mie goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Cao/Es Buah, Teh Hangat, air mineral gelas</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li></ul><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">3. Paket Bukber 3 (Rp55.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Prasmanan : Nasi putih, ayam bakar/goreng mentega, cap jay/tumis sayur, mie goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Menado, Teh Hangat, air mineral gelas</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free snack ringan (gorengan)</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free buah potong</li></ul><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Untuk lebih lengkapnya, Anda bisa melihat tabel menu berikut ini.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/1-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/2-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/3-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p>', NULL, '2021-08-14 15:26:59', '2021-11-03 13:33:30');

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_produk`, `id_pemesanan`, `sub_total`, `kuantitas`, `deleted_at`, `created_at`, `updated_at`) VALUES
('P-20211107-001', 'RQ-20211201-001', '5000', 2, NULL, '2021-12-01 05:15:27', '2021-12-01 05:15:27'),
('P-20211107-001', 'RQ-20211201-002', '2500', 1, NULL, '2021-12-01 05:17:42', '2021-12-01 05:17:42'),
('P-20211107-001', 'RQ-20211201-003', '2500', 1, NULL, '2021-12-01 05:19:53', '2021-12-01 05:19:53'),
('P-20211114-001', 'RQ-20211201-001', '150000', 10, NULL, '2021-12-01 05:15:27', '2021-12-01 05:15:27'),
('P-20211114-001', 'RQ-20211201-004', '15000', 1, NULL, '2021-12-01 05:26:28', '2021-12-01 05:26:28');

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
('K0003', 'Paket Snack Box', NULL, NULL, NULL),
('K0004', 'Paket Aqiqah', NULL, NULL, NULL),
('K0005', 'Paket Ramadhan', NULL, NULL, NULL),
('K0006', 'Paket Lebaran', NULL, NULL, NULL),
('K0007', 'Paket Covid-19', NULL, NULL, NULL),
('K0008', 'Paket Pemerintahan', NULL, NULL, NULL),
('K0009', 'Paket Corporate/Pabrik', NULL, NULL, NULL),
('K0010', 'Paket Wedding', NULL, NULL, NULL),
('K0011', 'Paket Khusus', NULL, NULL, NULL);

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
('citrawuli@gmail.com', '$2y$10$lZpd/RIBVVo44UM8xtIfd.n.6sJf12Qmhhb/1a17tdjFG63Koy55m', '2021-08-05 12:52:49', NULL),
('winter@gmail.com', '$2y$10$n6suxy.lTZKvjeJe.MhqteaTNfJtfiFqolmqlU1IkUDAiuJcyIioG', '2021-11-02 10:03:32', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(15) NOT NULL,
  `id_pemesanan` varchar(15) DEFAULT NULL,
  `jumlah_bayar` decimal(11,0) NOT NULL,
  `tanggal_pembayaran` datetime DEFAULT NULL,
  `bank_transfer` varchar(2) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `bukti_bayar` varchar(191) DEFAULT NULL,
  `status_bayar` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `trigpay` BEFORE INSERT ON `pembayaran` FOR EACH ROW BEGIN
SELECT COUNT(*) 
INTO @id FROM pembayaran 
where DATE(created_at)=DATE(new.created_at);
IF (@id >= 1) THEN 
SET new.id_pembayaran=CONCAT("PY-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(@id+1,3,"0"));
ELSE 
SET new.id_pembayaran = CONCAT("PY-", YEAR(CURRENT_TIMESTAMP), LPAD(MONTH(CURRENT_TIMESTAMP),2,"0"), LPAD(DAY(CURRENT_TIMESTAMP),2,"0"),"-",LPAD(1,3,"0"));
END IF; 
END
$$
DELIMITER ;

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
  `pengambilan` varchar(2) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `discount_inpercent` int(11) DEFAULT NULL,
  `total_sub` decimal(10,0) DEFAULT NULL,
  `total_transaksi` decimal(11,0) DEFAULT NULL,
  `status_pemesanan` varchar(2) DEFAULT NULL,
  `status_progress` varchar(2) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `user_id`, `nama_lengkap_pembeli`, `no_hp_pembeli`, `alamat_lengkap_pembeli`, `untuk_tanggal`, `untuk_jam`, `pengambilan`, `keterangan`, `discount`, `discount_inpercent`, `total_sub`, `total_transaksi`, `status_pemesanan`, `status_progress`, `deleted_at`, `created_at`, `updated_at`) VALUES
('RQ-20211201-001', 'U-20211122-001', 'Einstein Wife', '08123456789', 'Alamat sudah jelas', '2021-12-21', '09:00:00', '2', 'Keterangan ada', NULL, NULL, '155000', '155000', '1', '1', NULL, '2021-12-01 05:15:27', '2021-12-04 01:56:39'),
('RQ-20211201-002', 'U-20211122-001', 'EinsteinReal', '02147852', 'aaaaaaaaaaaaaaaaaaaa', '2021-12-22', '14:05:00', '1', NULL, NULL, NULL, '2500', '2500', '4', '1', NULL, '2021-12-01 05:17:42', '2021-12-03 23:36:56'),
('RQ-20211201-003', 'U-20211122-001', 'EinsteinReal', '021345697', NULL, '2021-12-27', '09:00:00', '1', NULL, NULL, NULL, '2500', '2500', '2', '1', NULL, '2021-12-01 05:19:53', '2021-12-01 07:47:03'),
('RQ-20211201-004', 'U-20211122-001', 'EinsteinReal Son', '999', 'bbbbbbbbbbbbb', '2022-01-28', '09:55:00', '2', 'aaaaaaaaaaa yey', NULL, NULL, '15000', '15000', '2', '1', NULL, '2021-12-01 05:26:28', '2021-12-05 22:18:17');

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
  `nama_produk` varchar(75) NOT NULL,
  `tipe_produk` varchar(40) DEFAULT NULL,
  `deskripsi_produk` varchar(600) DEFAULT NULL,
  `harga_produk` decimal(10,0) UNSIGNED NOT NULL,
  `rating_produk` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `tipe_produk`, `deskripsi_produk`, `harga_produk`, `rating_produk`, `deleted_at`, `created_at`, `updated_at`) VALUES
('P-20210226-001', 'K0010', 'Nasi Kuning 1', NULL, NULL, '19000', NULL, NULL, '2021-02-26 10:27:08', '2021-02-27 15:12:45'),
('P-20210226-002', 'K0010', 'A', 'makanan', NULL, '12350', NULL, NULL, '2021-02-26 11:25:40', '2021-03-02 03:47:39'),
('P-20210226-003', 'K0009', 'b', NULL, NULL, '12200', NULL, NULL, '2021-02-26 11:26:31', '2021-07-21 14:28:44'),
('P-20210226-004', 'K0002', 'C', NULL, NULL, '50', NULL, NULL, '2021-02-26 11:29:55', '2021-02-26 11:29:55'),
('P-20210227-001', 'K0002', 'D', NULL, NULL, '12', NULL, NULL, '2021-02-27 12:23:53', '2021-02-27 12:23:53'),
('P-20210227-002', 'K0002', 'E', NULL, NULL, '12', NULL, '2021-11-04 00:58:12', '2021-02-27 14:24:50', '2021-11-04 00:58:12'),
('P-20210227-003', 'K0002', 'F', NULL, NULL, '12', NULL, '2021-10-22 12:26:30', '2021-02-27 14:27:55', '2021-10-22 12:26:30'),
('P-20210227-004', 'K0002', 'G', NULL, NULL, '12000', NULL, NULL, '2021-02-27 14:40:21', '2021-02-27 14:40:21'),
('P-20210227-005', 'K0002', 'J', NULL, NULL, '12000', NULL, NULL, '2021-02-27 14:41:03', '2021-02-27 14:41:03'),
('P-20210406-001', 'K0006', 'ASDF', 'makanan', NULL, '12300', NULL, NULL, '2021-04-06 14:40:35', '2021-04-06 14:40:35'),
('P-20211107-001', 'K0003', 'Bolu Kukus', 'makanan', NULL, '2500', NULL, NULL, '2021-11-07 05:41:31', '2021-11-07 05:41:31'),
('P-20211114-001', 'K0002', 'Bubur Manado', 'makanan', 'Cita rasa lokal, dengan topping lengkap, dan wenakk', '15000', NULL, NULL, '2021-11-14 02:21:00', '2021-11-14 02:21:00'),
('P-20211201-001', 'K0003', 'Lemper', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:01:12', '2021-12-01 08:01:12'),
('P-20211201-002', 'K0003', 'Pastel Tutup', NULL, NULL, '8000', NULL, NULL, '2021-12-01 08:01:39', '2021-12-01 08:01:39'),
('P-20211201-003', 'K0003', 'Sosis Solo', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:08:37', '2021-12-01 08:08:37'),
('P-20211201-004', 'K0003', 'Sosis Solo Ayam Jamur', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:09:16', '2021-12-01 08:09:16'),
('P-20211201-005', 'K0003', 'Lemper Bakar', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:09:46', '2021-12-01 08:09:46'),
('P-20211201-006', 'K0003', 'Semar Mendem', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:12:07', '2021-12-01 08:12:07'),
('P-20211201-007', 'K0003', 'Pastel Isi Rogut', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:15:11', '2021-12-01 08:15:11'),
('P-20211201-008', 'K0003', 'Pastel Isi Bihun', NULL, NULL, '3500', NULL, NULL, '2021-12-01 08:16:54', '2021-12-01 08:16:54'),
('P-20211201-009', 'K0003', 'Pisang Keju', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:17:46', '2021-12-01 08:17:46'),
('P-20211201-010', 'K0003', 'Ote-ote', NULL, NULL, '3500', NULL, NULL, '2021-12-01 08:18:18', '2021-12-01 08:18:18'),
('P-20211201-011', 'K0003', 'Kue Lumpur Vla', NULL, NULL, '3500', NULL, NULL, '2021-12-01 08:18:41', '2021-12-01 08:27:10'),
('P-20211201-012', 'K0003', 'Lumpia Udang', NULL, NULL, '5500', NULL, NULL, '2021-12-01 08:26:26', '2021-12-01 08:26:26'),
('P-20211201-013', 'K0003', 'Pastel Tutup Kecil', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:27:49', '2021-12-01 08:27:49'),
('P-20211201-014', 'K0003', 'Macaroni Schutel', NULL, NULL, '8000', NULL, NULL, '2021-12-01 08:28:31', '2021-12-01 08:28:31'),
('P-20211201-015', 'K0003', 'Macaroni Schutel Kecil', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:29:02', '2021-12-01 08:29:02'),
('P-20211201-016', 'K0003', 'Lumpia Bihun', NULL, NULL, '3500', NULL, NULL, '2021-12-01 08:29:38', '2021-12-01 08:29:38'),
('P-20211201-017', 'K0003', 'Lumpia Ayam-keju', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:30:01', '2021-12-01 08:30:01'),
('P-20211201-018', 'K0003', 'Lumpia Sayur', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:30:22', '2021-12-01 08:30:22'),
('P-20211201-019', 'K0003', 'Soes Maker (rogout)', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:31:23', '2021-12-01 08:31:23'),
('P-20211201-020', 'K0003', 'Soes Maker (ayam-jamur)', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:32:12', '2021-12-01 08:32:12'),
('P-20211201-021', 'K0003', 'Soes Maker (daging)', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:32:38', '2021-12-01 08:32:38'),
('P-20211201-022', 'K0003', 'Risoles Sosis Mayo', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:33:04', '2021-12-01 08:33:04'),
('P-20211201-023', 'K0003', 'Risoles Mayo', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:33:28', '2021-12-01 08:33:28'),
('P-20211201-024', 'K0003', 'Risoles Rogout Ayam', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:34:01', '2021-12-01 08:34:01'),
('P-20211201-025', 'K0003', 'Risoles Bolognese', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:34:28', '2021-12-01 08:34:28'),
('P-20211201-026', 'K0003', 'Talam Abon', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:34:50', '2021-12-01 08:34:50'),
('P-20211201-027', 'K0003', 'Kroket Kentang', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:35:11', '2021-12-01 08:35:11'),
('P-20211201-028', 'K0003', 'Kroket Mozarella', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:36:02', '2021-12-01 08:36:02'),
('P-20211201-029', 'K0003', 'Risoles Ayam Jamur', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:36:30', '2021-12-01 08:36:30'),
('P-20211201-030', 'K0003', 'Risoles Jagung Mayo', NULL, NULL, '3500', NULL, NULL, '2021-12-01 08:37:05', '2021-12-01 08:37:05'),
('P-20211201-031', 'K0003', 'Soes Isi Sosis', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:38:03', '2021-12-01 08:38:03'),
('P-20211201-032', 'K0003', 'Soes Daging Asap', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:38:44', '2021-12-01 08:38:44'),
('P-20211201-033', 'K0003', 'Mini Burger', NULL, NULL, '7000', NULL, NULL, '2021-12-01 08:39:15', '2021-12-01 08:39:15'),
('P-20211201-034', 'K0003', 'Mini Hotdog', NULL, NULL, '7000', NULL, NULL, '2021-12-01 08:39:31', '2021-12-01 08:39:31'),
('P-20211201-035', 'K0003', 'Arem-arem Udang', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:40:06', '2021-12-01 08:40:06'),
('P-20211201-036', 'K0003', 'Arem-arem Ayam', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:40:27', '2021-12-01 08:40:27'),
('P-20211201-037', 'K0003', 'Arem-arem Daging', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:40:58', '2021-12-01 08:40:58'),
('P-20211201-038', 'K0003', 'Crackers Rogout', NULL, NULL, '3500', NULL, NULL, '2021-12-01 08:41:30', '2021-12-01 08:41:30'),
('P-20211201-039', 'K0003', 'Tahu Fantasi Telur Puyuh', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:41:54', '2021-12-01 08:41:54'),
('P-20211201-040', 'K0003', 'Quiche Lorraine', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:42:35', '2021-12-01 08:42:35'),
('P-20211201-041', 'K0003', 'Soes Fla', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:42:56', '2021-12-01 08:42:56'),
('P-20211201-042', 'K0003', 'Soes Eclair Almond', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:43:21', '2021-12-01 08:43:21'),
('P-20211201-043', 'K0003', 'Soes Eclair', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:43:36', '2021-12-01 08:43:36'),
('P-20211201-044', 'K0003', 'Soes Rogout', NULL, NULL, '4500', NULL, NULL, '2021-12-01 08:43:49', '2021-12-01 08:43:49'),
('P-20211201-045', 'K0003', 'Snow Eclair', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:44:05', '2021-12-01 08:44:05'),
('P-20211201-046', 'K0003', 'Soes Fla Coklat', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:44:23', '2021-12-01 08:44:23'),
('P-20211201-047', 'K0003', 'Soes Fla Keju', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:44:48', '2021-12-01 08:44:48'),
('P-20211201-048', 'K0003', 'Pie Buah', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:44:57', '2021-12-01 08:44:57'),
('P-20211201-049', 'K0003', 'Soes Fla Moca', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:45:11', '2021-12-01 08:45:11'),
('P-20211201-050', 'K0003', 'Soes Fla Durian', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:45:24', '2021-12-01 08:45:24'),
('P-20211201-051', 'K0003', 'Soes Green Tea', NULL, NULL, '4000', NULL, NULL, '2021-12-01 08:45:38', '2021-12-01 08:45:38'),
('P-20211201-052', 'K0003', 'Kroket Daging', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:45:52', '2021-12-01 08:45:52'),
('P-20211201-053', 'K0003', 'Kroket Ayam-keju', NULL, NULL, '5000', NULL, NULL, '2021-12-01 08:46:11', '2021-12-01 08:46:11'),
('P-20211201-054', 'K0003', 'Klappertart', NULL, NULL, '8000', NULL, NULL, '2021-12-01 08:46:26', '2021-12-01 08:46:26'),
('P-20211201-055', 'K0003', 'Klappertart Durian', NULL, NULL, '9000', NULL, NULL, '2021-12-01 08:46:44', '2021-12-01 08:46:44'),
('P-20211201-056', 'K0003', 'Kue Nampan Besar', NULL, '-Minim 1 nampan\r\n-Isi 50 kue (max 5 macam kue )\r\n\r\nPilihan Kue Asin : lemper, semar mendem, sosis solo, kroket, pastel, risoles, talam abon, tahu fantasi\r\n\r\nPilihan Kue Manis : pai buah, dadar gulung, sus vla, sus eclair, kue lumpur, kue koci, ongol-ongol, kue tok, talam pandan, puding mawar, dadar gulung pisang coklat, talam ubi ungu/kuning', '150000', NULL, NULL, '2021-12-01 08:55:54', '2021-12-01 08:55:54'),
('P-20211202-001', 'K0002', 'Gurami Bakar Utuh', NULL, NULL, '40000', NULL, NULL, '2021-12-02 01:06:12', '2021-12-02 01:06:12'),
('P-20211202-002', 'K0002', 'Ayam Bakar Bumbu Rujak', NULL, NULL, '70000', NULL, NULL, '2021-12-02 01:10:33', '2021-12-02 01:13:05'),
('P-20211202-003', 'K0002', 'Ayam Goreng Kremes Utuh', NULL, NULL, '70000', NULL, NULL, '2021-12-02 01:11:10', '2021-12-02 01:13:39'),
('P-20211202-004', 'K0003', 'Polo Pendem', NULL, NULL, '250000', NULL, NULL, '2021-12-02 01:14:13', '2021-12-02 01:14:13'),
('P-20211202-005', 'K0003', 'Bubur Madura', NULL, NULL, '400000', NULL, NULL, '2021-12-02 01:16:31', '2021-12-02 01:16:31'),
('P-20211202-006', 'K0003', 'Jajan Pasar', NULL, NULL, '400000', NULL, NULL, '2021-12-02 01:17:41', '2021-12-02 01:46:10'),
('P-20211202-007', 'K0004', 'Paket Kambing 1 Ekor', NULL, '100 porsi gule, 300 tusuk sate', '3000000', NULL, NULL, '2021-12-02 01:20:26', '2021-12-02 01:20:26'),
('P-20211202-008', 'K0004', 'Paket Kambing 2 Ekor', NULL, '200 porsi gule, 600 tusuk sate', '6000000', NULL, NULL, '2021-12-02 01:22:49', '2021-12-02 01:22:49'),
('P-20211202-009', 'K0001', 'Tumini ( Tumpeng Mini) Biasa', NULL, NULL, '28000', NULL, NULL, '2021-12-02 01:24:28', '2021-12-02 01:24:28'),
('P-20211202-010', 'K0001', 'Tumini ( Tumpeng Mini) Eksklusif', '', '', '35000', NULL, NULL, '2021-12-02 01:28:41', '2021-12-02 05:55:05'),
('P-20211202-011', 'K0001', 'Tumpeng Nasi Timbel (menu Lengkap)', '', 'Harga per pax', '50000', NULL, NULL, '2021-12-02 01:33:10', '2021-12-02 05:48:23'),
('P-20211202-012', 'K0001', 'Tumpeng Nasi Liwet (menu Lengkap)', '', 'Harga per pax', '50000', NULL, NULL, '2021-12-02 01:34:08', '2021-12-02 05:53:20'),
('P-20211202-013', 'K0001', 'Tumpeng Nasi Putih / Kuning 1', '', 'Porsi untuk 15 orang', '450000', NULL, NULL, '2021-12-02 01:43:44', '2021-12-02 02:01:21'),
('P-20211202-014', 'K0001', 'Tumpeng Nasi Putih / Kuning 2', '', 'Porsi untuk 25 orang', '750000', NULL, NULL, '2021-12-02 01:45:01', '2021-12-02 02:01:58'),
('P-20211202-015', 'K0001', 'Paket Sego Angkringan', '', '', '30000', NULL, NULL, '2021-12-02 07:44:35', '2021-12-02 07:45:56'),
('P-20211202-016', 'K0001', 'Paket Sate Gule Kambing/sapi', NULL, '', '30000', NULL, NULL, '2021-12-02 07:47:06', '2021-12-02 07:47:06'),
('P-20211202-017', 'K0011', 'Paket 60 Ayam Bakar', NULL, 'Nasi Putih, Ayam Bakar, Urap-urap, Kotokan Tempe, Peyek', '17000', NULL, NULL, '2021-12-02 08:42:10', '2021-12-02 08:42:10'),
('P-20211202-018', 'K0011', 'Paket 61 Nasi Campur 4', NULL, 'Nasi Putih, Ayam Bakar/kremes, Sayur, Acar/mie, Krupuk, Sambel', '16500', NULL, NULL, '2021-12-02 08:43:49', '2021-12-02 08:43:49'),
('P-20211202-019', 'K0011', 'Paket 62 Nasi Kuning 4', NULL, 'Nasi Kuning, Ayam Kremes, Mie Goreng, Kering Tempe, Krupuk', '16500', NULL, NULL, '2021-12-02 08:44:33', '2021-12-02 08:44:33'),
('P-20211202-020', 'K0011', 'Paket 63 Nasi Uduk 3', NULL, 'Nasi Uduk, Ayam Bakar/kremes, Oseng Tempe Kacang, Acar/mie, Krupuk, Sambel', '16500', NULL, NULL, '2021-12-02 08:45:38', '2021-12-02 08:45:38'),
('P-20211202-021', 'K0008', 'Paket Nusantara 1 - Sayur Asem', 'Paket Prasmanan', 'Nasi Putih, Ayam Goreng Rempah, Empal Gepuk, Sayur Asem, Tempe Tahu Bacem, Pepes/botok, Ikan Asin, Sambal, Kerupuk, Air Mineral', '10', NULL, NULL, '2021-12-02 09:41:08', '2021-12-02 10:11:18'),
('P-20211202-022', 'K0008', 'Paket Nusantara 2 - Nasi Lodeh', 'Paket Prasmanan', 'Nasi Putih, Sayur Lodeh, Ayam Goreng / Opor Ayam, Empal Gepuk, Tempe Tahu Goreng, Oseng Daun Pepaya, Ikan Asin, Sambal, Kerupuk, Air Mineral', '10', NULL, NULL, '2021-12-02 09:48:08', '2021-12-02 09:58:38'),
('P-20211202-023', 'K0008', 'Paket Nusantara 3 - Nasi Jagung / Nasi Putih', 'Paket Prasmanan', 'Nasi Jagung / Nasi Putih, Bandeng Presto, Ayam Panggang Bumbu Rujak, Sego Ndeso, Urap-urap, Ikan Asin, Tempe Tahu Goreng, Oseng-oseng Pare / Pepaya Muda, Peyek, Sambal', '10', NULL, NULL, '2021-12-02 09:49:17', '2021-12-02 09:58:54'),
('P-20211202-024', 'K0008', 'Paket Nusantara 4 - Nasi Padang', 'Paket Prasmanan', 'Nasi Putih, Rendang Daging, Ayam Ungkep Telur, Sayur Gulai Daun Singkong, Telur Kare, Tempe Tahu Goreng, Sambal Ijo, Kerupuk, Air Mineral / Ikan Balado', '10', NULL, NULL, '2021-12-02 09:50:56', '2021-12-02 09:57:13'),
('P-20211202-025', 'K0008', 'Paket Nusantara 5 - Rawon / Soto', 'Paket Prasmanan', 'Rawon / Soto Daging, Telur / Telur Asin, Tempe Goreng Tepung / Dadar Jagung, Nasi Putih, Sambal, Kerupuk, Dessert / Teh Dan Kopi, Air Mineral', '10', NULL, NULL, '2021-12-02 09:52:08', '2021-12-02 09:57:32'),
('P-20211202-026', 'K0008', 'Paket Nusantara 6 - Sop Buntut / Asem-asem Iga', 'Paket Prasmanan', 'Ayam Kremes / Ayam Bakar, Gurami Bakar / Gadon Daging, Sop Buntut / Asem-asem Iga, Oseng Daun Singkong / Oseng Pepaya, Botok Telur Asin / Pepes Tongkol, Ikan Asin, Sambal / Lalapan, Kerupuk, Dessert / Teh Dan Kopi, Air Mineral', '10', NULL, NULL, '2021-12-02 10:10:02', '2021-12-02 10:10:25'),
('P-20211202-027', 'K0008', 'Sunrise Ice', 'Fresh Ice', NULL, '10', NULL, NULL, '2021-12-02 10:12:23', '2021-12-02 10:13:10'),
('P-20211202-028', 'K0008', 'Es Manado', 'Fresh Ice', NULL, '10', NULL, NULL, '2021-12-02 10:12:40', '2021-12-02 10:12:40'),
('P-20211202-029', 'K0008', 'Sweet Green Ice', 'Fresh Ice', NULL, '10', NULL, NULL, '2021-12-02 10:12:57', '2021-12-02 10:12:57'),
('P-20211202-030', 'K0008', 'Salad Buah', 'Salad', NULL, '10', NULL, NULL, '2021-12-02 10:13:45', '2021-12-02 10:13:45'),
('P-20211202-031', 'K0008', 'Asinan Jakarta', 'Salad', NULL, '10', NULL, NULL, '2021-12-02 10:14:20', '2021-12-02 10:14:20'),
('P-20211202-032', 'K0008', 'Soup Ayam Sosis Jamur', 'Soup', NULL, '10', NULL, NULL, '2021-12-02 10:14:44', '2021-12-02 10:14:44'),
('P-20211202-033', 'K0008', 'Soup Ayam Sosis Jagung', 'Soup', NULL, '10', NULL, NULL, '2021-12-02 10:15:03', '2021-12-02 10:15:03'),
('P-20211202-034', 'K0008', 'Cah Brokoli', 'Soup', NULL, '10', NULL, NULL, '2021-12-02 10:15:21', '2021-12-02 10:15:21'),
('P-20211202-035', 'K0008', 'Kakap Fille Asam Manis', 'Pilihan Masakan Ikan', NULL, '10', NULL, NULL, '2021-12-02 10:16:11', '2021-12-02 10:16:11'),
('P-20211202-036', 'K0008', 'Udang Telur Asin', 'Pilihan Masakan Ikan', NULL, '10', NULL, NULL, '2021-12-02 10:16:28', '2021-12-02 10:16:28'),
('P-20211202-037', 'K0008', 'Sambal Goreng Udang Telur Asin', 'Pilihan Masakan Ikan', NULL, '10', NULL, NULL, '2021-12-02 10:16:43', '2021-12-02 10:16:43'),
('P-20211202-038', 'K0008', 'Fuyunghai', 'Pilihan Masakan Ikan', NULL, '10', NULL, NULL, '2021-12-02 10:16:59', '2021-12-02 10:16:59'),
('P-20211202-039', 'K0008', 'Rolade Daging + Sayuran', 'Pilihan Masakan Daging', NULL, '0', NULL, NULL, '2021-12-02 10:19:52', '2021-12-02 10:19:52'),
('P-20211202-040', 'K0008', 'Sambal Goreng Daging Printil', 'Pilihan Masakan Daging', NULL, '0', NULL, NULL, '2021-12-02 10:20:24', '2021-12-02 10:20:49'),
('P-20211202-041', 'K0008', 'Ayam Goreng Mentega', 'Pilihan Masakan Ayam', NULL, '0', NULL, NULL, '2021-12-02 10:21:32', '2021-12-02 10:21:32'),
('P-20211202-042', 'K0008', 'Ayam Panggang Kecap', 'Pilihan Masakan Ayam', NULL, '0', NULL, NULL, '2021-12-02 10:21:50', '2021-12-02 10:21:50'),
('P-20211202-043', 'K0008', 'Ayam Panggang Rica / Rujak', 'Pilihan Masakan Ayam', NULL, '0', NULL, NULL, '2021-12-02 10:22:11', '2021-12-02 10:22:11'),
('P-20211202-044', 'K0008', 'Cah Lidah / Daging Bawang Bombay / Cah Daging Kailan', 'Pilihan Masakan Daging', NULL, '0', NULL, NULL, '2021-12-02 10:35:26', '2021-12-02 10:35:48'),
('P-20211202-045', 'K0010', 'Paket Aisya Ekonomis A', 'Paket Prasmanan', 'Nasi Putih, Nasi Goreng / Mie Goreng, Ayam Saus Inggris / Ayam Goreng Mentega, Olahan Sayur, Fresh Orang Juice', '25500', NULL, NULL, '2021-12-02 10:39:07', '2021-12-02 10:39:07'),
('P-20211202-046', 'K0010', 'Paket Aisya Ekonomis B', 'Paket Prasmanan', 'Nasi Putih, Nasi Goreng / Mie Goreng, Soup Sayur, Sayam Saus Inggris / Ayam Goreng Mentega, Olahan Sayur, Es Buah / Sweet Green Ice, Air Mineral', '30000', NULL, NULL, '2021-12-02 10:44:32', '2021-12-02 10:44:32'),
('P-20211202-047', 'K0010', 'Aisya 1', 'Paket Prasmanan', 'Aneka Olahan Nasi / Non Nasi, Aneka Olahan Seafood, Aneka Olahan Sayur, Aneka Olahan Ayam, Nasi Putih, Dessert, Air Mineral', '35000', NULL, NULL, '2021-12-02 10:45:46', '2021-12-02 10:45:46'),
('P-20211202-048', 'K0010', 'Aisya 2', 'Paket Prasmanan', 'Aneka Olahan Soup, Aneka Olahan Sayur, Aneka Olahan Ayam, Anekka Olahan Seafood, Aneka Olahan Nasi / Non Nasi, Nasi Putih, Olahan Salad, Dessert, Air Mineral', '40000', NULL, NULL, '2021-12-02 10:47:06', '2021-12-02 10:47:06'),
('P-20211202-049', 'K0010', 'Aisya 3', 'Paket Prasmanan', 'Aneka Olahan Soup, Aneka Olahan Sayur, Aneka Olahan Ayam, Aneka Olahan Daging, Aneka Olahan Seafood, Aneka Olahan Nasi / Non Nasi, Nasi Putih, Olahan Salad, Dessert, Air Mineral', '45000', NULL, NULL, '2021-12-02 10:48:49', '2021-12-02 10:48:49');

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
('U-20211104-001', 'R0004', NULL, NULL, NULL),
('U-20211122-001', 'R0001', NULL, NULL, NULL);

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
  `alamat_user` varchar(100) DEFAULT NULL,
  `ponsel_user` varchar(15) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat_user`, `ponsel_user`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
('U-20211104-001', 'rahasia', 'rahasia@gmail.com', NULL, '$2y$10$8hlYUNzGHe0PMlIMicg.i.GE1RLK8cqu4y45wF53XrZQTZtfare/y', NULL, '08142233556985', NULL, '2021-11-04 02:02:29', '2021-11-22 04:49:23', NULL),
('U-20211122-001', 'EinsteinReal', 'Einsteinreal@gmail.com', NULL, '$2y$10$yEiIoBOyu8vJFp.qwl0xXOZtexzjwyOrj/qYfetAvxDc0mV9R1gba', NULL, NULL, NULL, '2021-11-22 04:58:59', '2021-11-22 05:03:44', NULL);

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

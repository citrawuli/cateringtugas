-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2022 pada 08.44
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
  `user_id` varchar(14) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `konten_blog` mediumtext NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id_blog`, `user_id`, `judul_blog`, `konten_blog`, `deleted_at`, `created_at`, `updated_at`) VALUES
('B0001', 'U-20211104-001', 'Paket Katering Bukber di Surabaya | Ramadhan 2021', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Saat ini kita sudah memasuki bulan ramadhan di tahun 2021, walaupun masih dalam suasana Pandemi COVID-19 akan tetapi sudah kewajiban bagi setiap umat muslim untuk menjalankan ibadah puasa.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Memasuki bulan puasa, biasanya banyak agenda buka puasa bersama, baik itu dengan saudara, kerabat sampai dengan teman kantor atau kampus. Biasanya, buka puasa bersama dilakukan di tempat seperti restoran, rumah makan, masjid, hotel, kantor atau rumah.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Berbuka puasa tidak terlepas dari makanan-makanan khas berbuka puasa seperti Kolak, bubur kacang hijau, bubur sumsum, es campur dan makanan manis lainnya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><a href=\"https://www.aisyacatering.com/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Aisya Catering</span></a>&nbsp;sebagai pelopor catering bukber di&nbsp;<span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Surabaya</span>&nbsp;menyediakan paket buka puasa bersama ramadhan di tahun ini. Nah apa saja menu paket buka puasa bersama dari Aisya Catering di tahun ini? Berikut menunya.</p><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 26px; line-height: 32px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Menu Bukber dari Aisya Catering Surabaya</span></h3><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">1. Paket Bukber 1 (Rp25.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Menu buka puasa pilihan*</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Cao/Es Buah, Teh Hangat</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li></ul><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">2. Paket Bukber 2 (Rp35.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Menu buka puasa pilihan*, Prasmanan : Nasi putih, ayam bakar/goreng mentega, cap jay/tumis sayur, mie goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Cao/Es Buah, Teh Hangat, air mineral gelas</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li></ul><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\">3. Paket Bukber 3 (Rp55.000,-/pax)</h4><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Makanan utama = Prasmanan : Nasi putih, ayam bakar/goreng mentega, cap jay/tumis sayur, mie goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Minuman = Es Menado, Teh Hangat, air mineral gelas</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free Takjil</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free snack ringan (gorengan)</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Free buah potong</li></ul><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Untuk lebih lengkapnya, Anda bisa melihat tabel menu berikut ini.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/1-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/2-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><img src=\"https://www.aisyacatering.com/wp-content/uploads/2021/04/3-paket-catering-ramadhan-2021.jpg\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; max-width: 100%; height: auto;\"></p>', NULL, '2021-08-14 15:26:59', '2021-12-06 22:14:02'),
('B0002', 'U-20211214-001', 'Anti Bosan! Inilah 10+ Menu Catering Harian Kantor', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">10+ Menu Catering Harian Kantor</span>&nbsp;– Dunia perkantoran memang sangat padat aktivitas. Hal ini membuat banyak pekerja kantor tidak ada waktu untuk menyiapkan bekal makan siangnya sendiri. Terutama untuk perusahaan yang tidak menyediakan makan siang untuk karyawannya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Istirahat makan siang menjadi momen yang paling ditunggu karyawan perusahaan untuk mengisi perut yang kosong setelah setengah hari bekerja. Untuk Anda yang tidak memiliki waktu untuk menyiapkan bekal, kami punya solusi untuk memesan menu catering harian agar tidak membosankan. Berikut daftar menunya.</p><ol style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Makanan berkuah</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Menu makan siang akan terasa kurang lengkap tanpa kehadiran sop. Biasanya sup bisa Anda sajikan dengan nasi putih dan sambal pedas.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Sop, opor, soto, lodeh dan semur adalah contoh makanan berkuah yang bisa Anda tambahkan dalam menu makan siang kantor. Kebanyakan pekerja kantoran suka makan berkuah karena lebih segar.</p><ol start=\"2\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Ayam goreng + lalapan</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Ayam goreng dengan lalapan dan sambal cocok kita masukan ke dalam daftar menu catering harian kantor. Lalapan yang ada pada menu ini biasanya mentimun, kemangi, terong gelatik. Jasa catering menggunakan bungkus box untuk menu ini.</p><ol start=\"3\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Capcay Seafood</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Capcay seafood merupakan hidangan lezat dengan nilai gizi tinggi, yang berguna meningkatkan asupan gizi pekerja kantoran. Terkadang pekerja kantoran mengabaikan nutrisi untuk tubuh. Oleh karena itu, menu ini sangat cocok dan bisa ditemani dengan nasi panas, lontong dan kerupuk.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Capcay adalah hidangan asal Cina. Menambahkan capcay ke dalam menu makan siang sangat baik untuk kesehatan karena selain menambahkan makanan laut, capcay juga mengandung gizi nabati yang lengkap.</p><ol start=\"4\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Rendang dan Telur Balado</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Rendang adalah masakan khas Padang yang terbuat dari daging sapi yang dimasak dengan santan dan bumbu khusus hingga santan mengering.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Rendang memiliki daya tahan yang cukup lama yakni hingga satu bulan. Semakin lama proses memasaknya, semakin kaya akan rasa dan semakin lama pula daya tahannya. Saat ini, rendang tidak hanya menggunakan daging sapi, namun juga menggunakan ayam kampung.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Balado juga enak untuk makan siang, selain rendang. Kedua makanan ini sering disajikan dalam kotak makan siang sebagai lauk. Rendang dan telur balado bisa tambahkan ke menu makan siang kantor.</p><ol start=\"5\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Gorengan</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Menu yang wajib ada bagi masyarakat Indonesia adalah gorengan. Selain menjadi lauk, gorengan biasanya juga menjadi camilan saat makan siang. Menu gorengan yang biasa disajikan di menu makan adalah bakwan sayur, bakwan jagung, prekedel kentang, dan tempe adonan. Hidangan ini enak Anda santap dengan atau tanpa&nbsp; nasi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><em style=\"margin: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Baca juga:&nbsp;<a href=\"https://www.aisyacatering.com/persewaan-alat-catering-surabaya/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">Persewaan Alat Catering Surabaya</a></span></em></p><ol start=\"6\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Kering tempe, kacang, kentang</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Tempe kering dan kentang adalah makanan Indonesia yang dapat Anda temukan hampir semua menu nasi kotak. Tempe kering merupakan pemasok protein nabati yang bersumber dari kedelai. Bahan yang ditambahkan pada tempe kering biasanya berupa irisan tempe dan kacang tanah yang dicampur dan dimasak dengan bumbu hingga kering. Menu tempe kering sering disajikan dengan item menu seperti ayam bakar, mie goreng, dan nasi.</p><ol start=\"7\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Bola daging rambutan</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Lauk yang lebih bervariasi adalah bola daging rambutan. Makanan ini terbuat dari daging sapi giling yang dicampur dengan bumbu dan dibentuk menjadi bola. Kemudian, bungkus dengan kulit pangsit yang dipotong menyerupai rambut. Bola daging rambutan bisa Anda nikmati dengan nasi, tumis hati dengan sambal, tumis buncis. Menu ini enak jika Anda santap saat makan siang.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Biasanya banyak orang yang mengkreasikan makanan dengan isi telur puyuh. Oleh karena itu, lebih sehat untuk dimakan karena jumlah proteinnya berlipat ganda dari daging dan telur puyuh.</p><ol start=\"8\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Sambal goreng</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Sambal goreng biasanya dengan tempe kering dalam kotak makan siang. Dalam kotak makan siang, menu ini biasanya selalu ada karena sangat populer di kalangan pekerja kantoran. Hidangan ini dapat Anda sajikan dengan apa saja dan rasa pedas yang kaya membuat layak dinikmati saat makan siang.</p><ol start=\"9\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Bihun dan mie goreng</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Bihun atau mie goreng sebaiknya Anda masukan dalam menu catering harian. Meskipun bihun/mie goreng mengandung jumlah karbohidrat yang sama dengan nasi. Namun menu ini banyak diminati oleh sebagian besar pekerja kantoran karena rasanya yang enak dan gurih.</p><ol start=\"10\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\"><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px;\">Opor ayam</h5></li></ol><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Sangat sedikit jasa catering yang menyediakan menu ayam opor ini. Namun, makanan ini bisa Anda tambahkan ke dalam menu catering harian Anda karena santan dan ayam goreng asin cocok dengan nasi untuk makan siang. Opor ayam adalah hidangan berlemak, tetapi rasa pedas opor menjadikannya makanan yang cocok untuk makan siang kantor.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Setelah membahas rekomendasi menu masakannya, tidak lengkap rasanya tidak membahas jadwal menu catering harian selama seminggu. Berikut kami contohkan cara membagi menu makanan untuk seminggu</p><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Senin</span></h5><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sayur Lodeh</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Ikan Bakar</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Tempe Bacem</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Terasi</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Kerupuk</li></ul><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Selasa</span></h5><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Telur Balado</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Oseng-oseng Buncis</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Bakwan Udang</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Kerupuk</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Terasi</li></ul><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Rabu</span></h5><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Ayam Goreng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sayur Asem</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Pepes Oncom</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Kerupuk</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Terasi</li></ul><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Kamis</span></h5><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Ikan Pindang/Bandeng</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Oseng-oseng Buncis</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Bakwan Udang</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Emping</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Cuka</li></ul><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Jum’at</span></h5><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Semur Daging</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Acar Kuning</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Kering Tempe</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Emping</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Cabai Rawit</li></ul><h5 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 700; font-stretch: inherit; font-size: 19px; line-height: 25px; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Sabtu</span></h5><ul style=\"margin-bottom: 15px; margin-left: 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; list-style-position: outside; list-style-image: initial; color: rgb(50, 115, 55); text-align: justify;\"><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Babat Kuah Asam</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Oseng-oseng Tauge &amp; Tahu</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Perkedel Jamur</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Kerupuk Udang</li><li style=\"margin: 0px 0px 10px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Botol</li></ul><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Semoga berkat adanya informasi ini, menu catering harian bisa menjadi inspirasi bagi Anda. Bagi Anda yang membutuhkan jasa catering, Anda bisa menghubungi Aisya Catering melalui kontak berikut ini.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><i class=\"icon-call\" style=\"margin: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"></i>&nbsp;:&nbsp;0318281065<br><i class=\"icon-whatsapp\" style=\"margin: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"></i>&nbsp;:&nbsp;<a href=\"https://api.whatsapp.com/send?phone=6285852221811&amp;text=&amp;source=&amp;data=\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">0858-5222-1811</a><br><i class=\"icon-home\" style=\"margin: 0px; border: 0px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"></i>&nbsp; :&nbsp;Jl. Kebonsari 3 No.28, Kebonsari, Jambangan, Kota Surabaya Jawa Timur 60233.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\"><br></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55);\">Aisya Jos</p>', NULL, '2021-12-14 00:12:11', '2022-01-04 05:23:20');
INSERT INTO `blogs` (`id_blog`, `user_id`, `judul_blog`, `konten_blog`, `deleted_at`, `created_at`, `updated_at`) VALUES
('B0003', 'U-20211221-001', 'Catering Harian Surabaya untuk Perusahaan', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Dalam rangka memenuhi kebutuhan makan sehari-hari, saat ini catering harian sudah menjadi kebutuhan utama sebagian perusahaan di Kota Surabaya. Alasanya karena kebanyakan perusahaan kini sibuk dan tidak punya waktu untuk menyediakan makanan sendiri untuk karyawannya. Aisya Catering menyediakan layanan catering harian yang sangat cocok bagi perusahaan yang ingin pengadaan makanan untuk karyawan lebih sederhana, praktis dan cepat, namun tetap bergizi dan sehat.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><b>JASA CATERING HARIAN SURABAYA</b></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><a href=\"https://www.aisyacatering.com/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Aisya Catering</span></a>&nbsp;adalah jasa yang menyediakan makanan sesuai dengan kebutuhan pelanggan, memberikan pelayanan yang memuaskan dengan menyediakan berbagai pilihan. Dengan menggunakan layanan catering harian dari Aisya Catering Surabaya akan sangat praktis dalam memenuhi kebutuhan makan untuk karyawan perusahaan Anda.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Banyak perusahaan yang sibuk mengejar deadline pekerjaan, sehingga tidak ada waktu untuk menyiapkan makanan karyawannya. Namun, semua masalah ada solusinya! Cara mengatasi masalah Anda adalah dengan menggunakan jasa catering harian.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Mungkin Anda ingin tahu, apa sih bedanya layanan catering harian kami dengan jasa catering lainnya? Perbedaannya terletak pada bahan yang kami gunakan. Bahan yang digunakan terjamin kualitas dan kesegarannya!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Bahan yang kami gunakan tidak menggunakan bahan pengawet, penyedap rasa sodium glutamat atau MSG dan pewarna tekstil. Meski tanpa MSG, masakan kami tetap terasa enak! Oleh karena itu, jika Anda tidak terbiasa makan tanpa MSG, jangan khawatir.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Jika Anda sudah terbiasa menggunakan MSG segera hindari penggunaan bahan tambahan makanan tersebut dan pewarna tekstil yang berbahaya untuk membiasakan diri dan anak Anda hidup sehat.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Aisya Catering menyediakan katering dengan harga murah. Eits, murah di sini bukan berarti murahan, lho! Dengan kata lain, harga bisa menyesuaikan budget sesuai dengan lauk pauk yang Anda pilih.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Kami akan memberi Anda banyak promo! Selain promosi “Paket Catering Harian”, Aisya Catering juga menawarkan promo “<a href=\"https://www.aisyacatering.com/paket-nasi-kotak-surabaya/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">Paket Nasi Kotak</a>“, “<a href=\"https://www.aisyacatering.com/paket-wedding-3/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">Paket Prasmanan Pernikahan</a>” dan promosi lainnya! Wah, banyak promo menarik yang menunggu Anda nih!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Tunggu apalagi? Cara pemesanannya sangat mudah. Anda hanya perlu menghubungi kontak kami melalui WhatsApp atau telepon. Yuk, segera tim Aisya Catering melalui nomor telepon yang tertera.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Kini Anda bisa memesan makanan dengan mudah dan cepat, dan tentunya dengan harga diskon! Sejauh ini, kepuasan dan kepercayaan pelanggan tidak pernah kami kecewakan dan membuat Aisya Catering semakin maju. Kami tunggu pesanan Anda!</p><h2 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><b>DAFTAR MENU</b></h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Berbagai menu yang kami sediakan, selalu kami kombinasikan menu yang beda setiap harinya. Kami jamin Anda tidak akan bosan menikmati layanan catering harian dari kami.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Silahkan kunjungi halaman &gt;&gt;&nbsp;<a href=\"https://www.aisyacatering.com/paket-nasi-kotak-surabaya/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">Menu Paket</a>.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><b>HARGA PAKET</b></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Silakan pilih harga yang paling sesuai dengan anggaran Anda saat ini. Jika Anda ingin mendapatkan diskon untuk pesanan Anda, kami akan memberikan promo khusus untuk Anda.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Silahkan kunjungi halaman &gt;&gt;&nbsp;<a href=\"https://www.aisyacatering.com/paket-nasi-kotak-surabaya/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">Harga Paket</a>.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\"><b>CARA MEMESAN CATERING HARIAN SURABAYA</b></p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(50, 115, 55); text-align: justify;\">Anda dapat menghubungi tim kami melalui kontak nomor telepon berikut melalui WhatsaApp atau telepon biasa.</p>', NULL, '2021-12-25 23:56:07', '2022-01-04 05:20:26'),
('B0004', 'U-20211104-001', '8 Wisata Kuliner Surabaya Yang Wajib Anda Coba', '<div class=\"section the_content has_content\" style=\"margin: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; position: relative; color: rgb(50, 115, 55);\"><div class=\"section_wrapper\" style=\"margin: 0px auto; border: 0px; font: inherit; vertical-align: baseline; max-width: calc(100% - 20px); position: relative;\"><div class=\"the_content_wrapper\" style=\"margin: 0px 9.3375px; border: 0px; font: inherit; vertical-align: baseline;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Saat berwisata ke kota lain, tentunya Anda juga ingin mencoba kuliner khasnya bukan? Sebagai ibu kota provinsi Jawa Timur, semua kuliner Jawa Timur terdapat di kota Surabaya. Apa saja wisata kuliner yang ada di Surabaya? Berikut kami rangkum beberapa kuliner Surabaya.</p><h3 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 26px; line-height: 32px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Daftar Kuliner Surabaya Jawa Timur</span></h3><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Kupang Lontong</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Masakan ini berasal dari tetangga Surabaya yaitu kota Sidoarjo. Namun, seperti masakan khas Jawa Timur lainnya, Kupang Lontong juga bisa Anda temukan di Surabaya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Kupang sendiri adalah kerang kecil yang hidup pada lumpur air asin. Direbus lalu dicampur dengan petis khas Sidoarjo – pasta yang terbuat dari udang – dan bumbu lainnya. Penyajian kupang biasanya dengan lontong. Perpaduan antara kerang dan rempah-rempah menciptakan cita rasa yang khas, yaitu manis, asam, dan pedas.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Kupang lontong juga sering disantap dengan sate kerang.. Ada juga lauk lain yang sangat unik, yaitu lentil yang terbuat dari parutan singkong hingga campuran kacang.</p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Lontong Balap</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Kembali ke menu khas Surabaya, Lontong Balap! Konon penjual lontong saling bersaing untuk membawa barang dagangannya. Si penjual pun berjalan secepat balapan.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Lontong Balap sendiri merupakan sajian yang terdiri dari lontong, tahu goreng, lentil, bawang goreng dan sayur tagoe. Seperti kupang lontong, penyajian lontong balap juga sering dengan sate kerang sebagai pelengkap.</p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Tahu Campur</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Ini adalah campuran tahu. Namun, tidak seperti kupang lontong dan lontong balap, tahu campur tanpa lontong. Campuran tahu terdiri dari daging sapi dan lemak, perkedel singkong, tahu goreng dan selada. Meski tanpa lontong, Tahu campur memiliki kesamaan lain dengan Kupang Lontong, yaitu penggunaan petis.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Sayangnya, tahu campur bukanlah makanan asli dari Surabaya. Menu kuliner ini berasal dari Lamongan. Banyak orang menyukai rasanya yang khas.</p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Nasi Pecel Semanggi</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Nasi pecel tersedia seluruh kota Jawa Timur. Namun hidangan ini sangat khas Surabaya dan sudah pasti menjadi sajian kuliner yang wajib Anda coba saat berkunjung ke Surabaya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Nasi pecel semanggi sama seperti nasi pecel lainnya. Masih menggunakan bumbu kacang, perbedaan nasi pecel semanggi dan nasi pecel biasanya terletak pada adanya daun semanggi.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Jika nasi pecel biasanya menggunakan sayuran seperti kangkung dan kol sebagai sayuran utamanya, nasi pecel semanggi menggunakan daun semanggi sebagai sayuran utamanya. Masakan ini sangat istimewa, penyajiannya biasanya dengan daun pisang dengan kerupuk uli sebagai pelengkapnya.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Jadi, jangan lewatkan sajian nasi pecel semanggi yang masuk dalam daftar wisata kuliner Surabaya saat datang ke ibu kota provinsi Jawa Timur ini! Hidangan ini sangat cocok untuk menu sarapan Anda.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><em style=\"margin: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Baca juga:&nbsp;<a href=\"https://www.aisyacatering.com/catering-bukber-surabaya/\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; border: 0px; font: inherit; vertical-align: baseline; outline-style: initial; outline-width: 0px; color: rgb(109, 190, 72);\">Paket Katering Bukber di Surabaya</a></span></em></p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Bebek Goreng Purnama</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Melewati jalan-jalan kota Surabaya pada sore hingga malam hari, Anda akan melihat banyak toko bebek goreng bertuliskan Bebek Goreng Purnama. Yang terlintas mungkin berapa banyak cabang dari Bebek Goreng Purnama ini. Tapi nyatanya, hanya ada satu Bebek Goreng Purnama yang asli!</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Mengapa begitu banyak orang menggunakan nama Purnama? Karena Bebek Goreng Purnama sendiri terkenal dengan masakannya yang unik.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Menurut pelanggan favoritnya, Bebek Goreng Purnama, yang membuat bebek goreng spesial adalah taburan serundeng. Serundeng adalah kelapa parut yang disangrai, kemudian dimasak dengan bumbu khas Purnama. Serundeng tidak bisa Anda temukan di warung lain,.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Tertarik mencoba Bebek Goreng Purnama? Anda hanya perlu berhenti depan bekas bioskop Purnama jalan raya Dinoyo.</p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Nasi Goreng Jancuk</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Dinamakan kutukan khas Surabaya, karena rasanya pedas banget! Penyajiannya juga sangat unik. Menu kuliner ini sangat cocok Anda nikmati bersama teman atau keluarga saat berwisata ke Surabaya.</p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Rawon Setan</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Meski namanya cukup menyeramkan, nyatanya menu kuliner ini terkenal karena penyajiannya dengan irisan daging yang besar! Jadi penamaannya bukan karena rasanya yang sangat pedas,.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Rawon Setan tidak pernah sepi pengunjung. Bahkan, banyak artis dan tokoh masyarakat yang mampir untuk menikmati hidangan Rawon Setan. Penasaran bagaimana rasanya? Segera coba saat Anda berkunjung ke Surabaya</p><h4 style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 25px; line-height: 31px; font-family: Courgette, Arial, Tahoma, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68); letter-spacing: 0px; text-align: justify;\"><span style=\"margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Zangrandi Ice Cream</span></h4><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Es krim Cocok Anda nikmati saat teriknya kota Surabaya. Bicara soal es krim di Surabaya, tentu yang wajib Anda coba adalah Zangrandi. Kedai es krim ini begitu melegenda, karena sudah ada sejak tahun 1933.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Hingga saat ini, Zangrandi terus mempertahankan menu es krim klasiknya. Bahkan suasana bar masih sama seperti tahun-tahun sebelumnya. Vintage dan penuh kenangan. Anda bisa langsung menuju lokasi di Jl. Yos Sudarso No. 15, Embong Kaliasin, Genteng.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; font: inherit; vertical-align: baseline; text-align: justify;\">Itulah yang bisa kami bagikan tentang wisata kuliner yang harus Anda coba ketika datang ke Surabaya.</p></div></div></div><div class=\"section section-post-intro-share\" style=\"margin: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Roboto, Arial, Tahoma, sans-serif; vertical-align: baseline; position: relative; color: rgb(50, 115, 55);\"></div>', '2022-01-04 05:23:04', '2022-01-04 05:17:19', '2022-01-04 05:23:04'),
('B0005', 'U-20211104-001', 'mmmmmmmmmmmmmmmmmmmm', '<p>adnandkasndland</p><p>asdnaskdnalskndlasnd</p><p>ijsfdjfskjflkdsl</p>', NULL, '2022-01-10 04:39:16', '2022-01-10 04:39:16');

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
('P-20211114-001', 'RQ-20211201-004', '15000', 1, NULL, '2021-12-01 05:26:28', '2021-12-01 05:26:28'),
('P-20211201-003', 'RQ-20211212-001', '200000', 50, NULL, '2021-12-12 09:31:51', '2021-12-12 09:31:51'),
('P-20211201-007', 'RQ-20211212-001', '225000', 50, NULL, '2021-12-12 09:31:51', '2021-12-12 09:31:51'),
('P-20211201-007', 'RQ-20211212-002', '36000', 8, NULL, '2021-12-12 09:34:21', '2022-01-19 05:38:56'),
('P-20211201-017', 'RQ-20211212-001', '225000', 50, NULL, '2021-12-12 09:31:51', '2021-12-12 09:31:51'),
('P-20211201-032', 'RQ-20220119-002', '25000', 5, NULL, '2022-01-19 04:47:52', '2022-01-19 04:47:52'),
('P-20211202-007', 'RQ-20211210-001', '3000000', 1, NULL, '2021-12-10 02:35:08', '2021-12-10 02:35:08'),
('P-20211202-007', 'RQ-20211214-001', '3000000', 1, NULL, '2021-12-14 08:01:56', '2021-12-14 08:01:56'),
('P-20211202-011', 'RQ-20220119-002', '150000', 3, NULL, '2022-01-19 04:47:52', '2022-01-19 04:47:52'),
('P-20211202-016', 'RQ-20211210-001', '90000', 3, NULL, '2021-12-10 02:35:08', '2021-12-10 02:35:08'),
('P-20211202-018', 'RQ-20211212-002', '181500', 11, NULL, '2021-12-12 09:34:21', '2022-01-19 05:38:56'),
('P-20211206-062', 'RQ-20220120-001', '500000', 10, NULL, '2022-01-20 08:01:40', '2022-01-20 08:01:40'),
('P-20211206-064', 'RQ-20220119-001', '400000', 8, NULL, '2022-01-19 04:36:18', '2022-01-20 06:45:42'),
('P-20211206-065', 'RQ-20220105-001', '500000', 10, NULL, '2022-01-05 04:18:39', '2022-01-05 04:18:39'),
('P-20211206-065', 'RQ-20220110-001', '100000', 2, NULL, '2022-01-10 03:34:25', '2022-01-10 04:06:01'),
('P-20211206-066', 'RQ-20220110-001', '50000', 1, NULL, '2022-01-10 03:34:25', '2022-01-10 04:06:01'),
('P-20211206-066', 'RQ-20220119-001', '500000', 10, NULL, '2022-01-19 04:36:18', '2022-01-20 06:45:42'),
('P-20211206-069', 'RQ-20220120-001', '450000', 10, NULL, '2022-01-20 08:01:40', '2022-01-20 08:01:40'),
('P-20211206-070', 'RQ-20220110-001', '55000', 1, NULL, '2022-01-10 03:34:25', '2022-01-10 04:06:01'),
('P-20211207-001', 'RQ-20220105-001', '300000', 10, NULL, '2022-01-05 04:18:39', '2022-01-05 04:18:39');

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
-- Struktur dari tabel `galeri_produk`
--

CREATE TABLE `galeri_produk` (
  `id_galeri` varchar(15) NOT NULL,
  `id_produk` varchar(15) DEFAULT NULL,
  `foto` varchar(191) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri_produk`
--

INSERT INTO `galeri_produk` (`id_galeri`, `id_produk`, `foto`, `deleted_at`, `created_at`, `updated_at`) VALUES
('G-20210725-001', 'P-20210226-001', '/images/1627212472-aisya-catering-logo3.png', NULL, '2021-07-25 11:27:52', '2021-07-25 11:27:52'),
('G-20210725-002', 'P-20210226-003', '/images/1627228550-banner-home-15.jpg', NULL, '2021-07-25 15:55:50', '2021-07-25 15:55:50'),
('G-20210730-001', 'P-20210226-001', '/images/1627651254-kisspng-flower-circle-frame-5abc724b4cc336.3318959315222994673144.png', NULL, '2021-07-30 13:20:54', '2021-07-30 13:20:54'),
('G-20211207-001', 'P-20211202-007', '/images/1638871035-aqiqah-aisya-catering.png', NULL, '2021-12-07 09:57:15', '2021-12-07 09:57:15'),
('G-20211207-002', 'P-20211207-002', '/images/1638875669-pemerintah3.jpg', NULL, '2021-12-07 11:14:29', '2021-12-07 11:14:29'),
('G-20220110-001', 'P-20220110-001', '/images/1641789262-pemerintah4.jpg', NULL, '2022-01-10 04:34:22', '2022-01-10 04:34:22'),
('G-20220110-002', 'P-20220110-001', '/images/1641789262-contoh foto bukti transfer bca atm.png', NULL, '2022-01-10 04:34:22', '2022-01-10 04:34:22');

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
  `nama_kategori` varchar(35) NOT NULL,
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
('K0011', 'Paket Khusus', NULL, NULL, NULL),
('K0012', 'Paket Pilihan Jos', '2021-12-28 05:13:26', NULL, NULL);

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
('winter@gmail.com', '$2y$10$n6suxy.lTZKvjeJe.MhqteaTNfJtfiFqolmqlU1IkUDAiuJcyIioG', '2021-11-02 10:03:32', NULL),
('rahasia@gmail.com', '$2y$10$6nVERIsTV5VTlSxLvAbY2O4gzkVRN4ghQ6QDHB4oX7p8PF/vnjBEC', '2021-12-07 00:24:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(15) NOT NULL,
  `id_pemesanan` varchar(15) DEFAULT NULL,
  `jumlah_bayar` decimal(11,0) NOT NULL,
  `tanggal_pembayaran` datetime DEFAULT NULL,
  `bank_transfer` varchar(20) DEFAULT NULL,
  `nomor_rekening` varchar(20) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `bukti_bayar` varchar(191) DEFAULT NULL,
  `status_bayar` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `jumlah_bayar`, `tanggal_pembayaran`, `bank_transfer`, `nomor_rekening`, `atas_nama`, `bukti_bayar`, `status_bayar`, `deleted_at`, `created_at`, `updated_at`) VALUES
('PY-20211210-001', 'RQ-20211201-003', '2500', '2021-12-10 07:33:56', '1', '222111111', 'Arqam Idzahr', '', 0, NULL, '2021-12-10 00:33:56', '2021-12-10 02:36:02'),
('PY-20211210-002', 'RQ-20211210-001', '900000', '2021-12-10 09:42:47', '1', NULL, NULL, '', 0, '2021-12-10 03:21:52', '2021-12-10 02:42:47', '2021-12-10 03:21:52'),
('PY-20211210-003', 'RQ-20211210-001', '1000000', '2021-12-10 09:43:46', '1', NULL, NULL, '', 1, '2022-01-26 13:22:33', '2021-12-10 02:43:46', '2022-01-26 13:22:33'),
('PY-20211228-001', 'RQ-20211210-001', '500000', '2021-12-28 13:55:12', '1', '021358', 'Sekar Tanjung', '', 0, NULL, '2021-12-28 06:55:12', '2022-01-19 06:05:07'),
('PY-20220105-001', 'RQ-20211214-001', '100000', '2022-01-05 20:22:00', '3', '111111111', 'Cleo leo leo', '/bukti/1641342102-InkedGambar1_LI.jpg', 0, NULL, '2022-01-05 00:21:42', '2022-01-15 10:08:04'),
('PY-20220105-002', 'RQ-20211214-001', '1000000', '2022-01-05 20:22:00', '3', '22222222', 'Sekar Tanjung', '/bukti/1641342252-IMG_20181120_064248_565.jpg', 2, NULL, '2022-01-05 00:24:12', '2022-01-26 13:26:31'),
('PY-20220110-001', 'RQ-20220110-001', '100000', '2022-01-10 20:22:00', '3', '111111111', 'Kiya San', '/bukti/1641786446-images.jpg', 1, NULL, '2022-01-10 03:47:26', '2022-01-10 03:52:39'),
('PY-20220110-002', 'RQ-20220110-001', '100800', '2022-12-26 00:00:00', 'BANK SEJAHTERA', '400000', 'Hafiz Idzahr', '', 0, '2022-01-23 07:44:51', '2022-01-10 04:07:59', '2022-01-23 07:44:51'),
('PY-20220111-001', 'RQ-20220110-001', '20000', '2022-01-11 00:00:00', '1', NULL, 'Kiya San', '', 0, '2022-01-23 07:44:57', '2022-01-11 05:43:21', '2022-01-23 07:44:57'),
('PY-20220111-002', 'RQ-20220110-001', '10000', '2022-01-11 00:00:00', '2', '1111111', 'Cleo Leo Leo', '/bukti/1641879994-images.jpg', 0, '2022-01-23 07:45:11', '2022-01-11 05:46:34', '2022-01-23 07:45:11'),
('PY-20220111-003', 'RQ-20211201-002', '20333', '2022-01-11 00:00:00', 'BCAD', '212121212', 'Arqam Idzahr', '', 2, NULL, '2022-01-11 05:53:05', '2022-01-20 08:34:20'),
('PY-20220111-004', 'RQ-20211210-001', '5758', '2022-01-11 00:00:00', 'BANK JATIM', '33333999', 'Sekar Tanjung', '', 2, NULL, '2022-01-11 06:00:32', '2022-01-11 06:02:42'),
('PY-20220111-005', 'RQ-20220110-001', '72020', '2022-01-19 20:22:00', 'BSI', '21365000000', 'Pooh Bersahaja', '/bukti/1641882783-images.jpg', 1, NULL, '2022-01-11 06:33:03', '2022-01-23 07:10:06'),
('PY-20220119-001', 'RQ-20220119-001', '200000', '2022-01-19 00:00:00', '1', NULL, 'Jia Ganesha', '', 1, NULL, '2022-01-19 05:52:17', '2022-01-20 06:37:28'),
('PY-20220120-001', 'RQ-20220120-001', '100800', '2022-01-21 20:22:00', '3', '11111111111112', 'Arqam Idzahra', '/bukti/1642667728-IMG_20181120_064248_565.jpg', 1, NULL, '2022-01-20 08:33:01', '2022-01-20 08:35:49'),
('PY-20220120-002', 'RQ-20220120-001', '849500', '2022-01-20 20:22:00', '3', '255555', 'Arqam', '/bukti/1642667836-IMG_20181120_064248_565.jpg', 1, NULL, '2022-01-20 08:37:16', '2022-01-20 08:37:31'),
('PY-20220122-001', 'RQ-20220110-001', '100900', '2022-01-23 20:22:00', '3', '4569873', 'Sekar Tanjung', '/bukti/1642829279-images.jpg', 0, NULL, '2022-01-22 05:27:59', '2022-01-22 05:27:59'),
('PY-20220122-002', 'RQ-20211214-001', '3000000', '2022-01-22 00:00:00', 'BCAD', '123121', 'Eins', '/bukti/1642844523-IMG_20181120_064248_565.jpg', 0, '2022-01-22 09:44:58', '2022-01-22 09:42:03', '2022-01-22 09:44:58'),
('PY-20220126-001', 'RQ-20211214-001', '1500000', '2022-01-26 20:22:00', '3', '12354685', 'Jia Ganesha', '/bukti/1643201113-Bukti-Transfer-BCA.jpg', 0, '2022-01-26 13:21:24', '2022-01-26 12:45:13', '2022-01-26 13:21:24');

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
  `nama_lengkap_pembeli` varchar(35) NOT NULL,
  `no_hp_pembeli` varchar(13) NOT NULL,
  `alamat_lengkap_pembeli` varchar(100) DEFAULT NULL,
  `untuk_tanggal` date NOT NULL,
  `untuk_jam` time NOT NULL,
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
('RQ-20211201-001', 'U-20211122-001', 'Einstein Wife', '08123456789', 'Alamat sudah jelas', '2021-12-21', '09:00:00', '2', 'Keterangan ada', NULL, NULL, '155000', '155000', '1', '1', '2021-12-28 06:48:26', '2021-12-01 05:15:27', '2021-12-28 06:48:26'),
('RQ-20211201-002', 'U-20211122-001', 'EinsteinReal', '02147852', 'aaaaaaaaaaaaaaaaaaaa', '2021-12-22', '14:05:00', '1', NULL, NULL, NULL, '2500', '2500', '4', '1', NULL, '2021-12-01 05:17:42', '2021-12-03 23:36:56'),
('RQ-20211201-003', 'U-20211122-001', 'EinsteinReal', '021345697', NULL, '2021-12-13', '09:00:00', '1', NULL, NULL, NULL, '2500', '2500', '2', '2', NULL, '2021-12-01 05:19:53', '2021-12-12 09:12:51'),
('RQ-20211201-004', 'U-20211122-001', 'EinsteinReal Son', '999', 'bbbbbbbbbbbbb', '2022-01-28', '09:55:00', '2', 'aaaaaaaaaaa yey', NULL, NULL, '15000', '15000', '3', '1', NULL, '2021-12-01 05:26:28', '2021-12-05 22:18:17'),
('RQ-20211210-001', 'U-20211104-001', 'Milky Way', '845697150', 'letjen suparman', '2021-12-24', '14:05:00', '2', 'asdfghjkl', NULL, 5, '3090000', '2935500', '3', '3', NULL, '2021-12-10 02:35:08', '2022-01-20 08:16:01'),
('RQ-20211212-001', 'U-20211104-001', 'Rela', '236589740', NULL, '2021-12-13', '12:00:00', '1', NULL, NULL, NULL, '650000', '650000', '1', '1', NULL, '2021-12-12 09:31:51', '2021-12-12 09:31:51'),
('RQ-20211212-002', 'U-20211104-001', 'Hamp', '23647893', NULL, '2022-01-19', '13:55:00', '1', NULL, NULL, 5, '217500', '206625', '1', '1', NULL, '2021-12-12 09:34:21', '2022-01-20 06:38:15'),
('RQ-20211214-001', 'U-20211122-001', 'EinsteinReal', '0545455', 'dkshjkhdskjfhk', '2021-12-21', '12:05:00', '2', NULL, NULL, NULL, '3000000', '3000000', '2', '4', NULL, '2021-12-14 08:01:56', '2022-01-19 06:39:26'),
('RQ-20220105-001', 'U-20211122-001', 'EinsteinReal', '2323232323', NULL, '2022-01-11', '09:00:00', '1', NULL, NULL, NULL, '800000', '800000', '1', '1', NULL, '2022-01-05 04:18:39', '2022-01-20 06:40:07'),
('RQ-20220110-001', 'U-20211122-001', 'Einstein', '1212121212', 'jalannnn', '2022-02-10', '14:05:00', '2', 'keterangannn', NULL, 2, '205000', '200900', '2', '3', NULL, '2022-01-10 03:34:25', '2022-01-20 06:40:29'),
('RQ-20220119-001', 'U-20220119-001', 'jia', '012345665413', NULL, '2022-01-21', '10:05:00', '1', 'Nggak pakai sambel', NULL, NULL, '900000', '900000', '2', '1', NULL, '2022-01-19 04:36:18', '2022-01-20 06:45:42'),
('RQ-20220119-002', 'U-20211104-001', 'Wuli', '252525', 'Kejati Winunggal', '2022-01-21', '10:05:00', '2', 'ada apa denganmuu hoo', '2000', NULL, '175000', '173000', '1', '1', NULL, '2022-01-19 04:47:51', '2022-01-19 04:47:51'),
('RQ-20220120-001', 'U-20220120-001', 'Bu Endah Purwanti', '0815656565', 'Alamat ibu endah adalah', '2022-01-22', '10:00:00', '2', 'keterangan', NULL, NULL, '950000', '950000', '2', '4', NULL, '2022-01-20 08:01:40', '2022-01-20 08:41:42');

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
('P-20210226-001', 'K0002', 'Nasi Kuning 1', NULL, NULL, '19000', NULL, NULL, '2021-02-26 10:27:08', '2021-12-06 02:13:28'),
('P-20210226-002', 'K0002', 'A', 'Makanan', NULL, '12350', NULL, NULL, '2021-02-26 11:25:40', '2021-12-06 02:13:07'),
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
('P-20211201-056', 'K0003', 'Kue Nampan Besar', NULL, '-minim 1 Nampan\r\n-isi 50 Kue (max 5 Macam Kue )\r\n\r\nPilihan Kue Asin : Lemper, Semar Mendem, Sosis Solo, Kroket, Pastel, Risoles, Talam Abon, Tahu Fantasi.\r\n\r\nPilihan Kue Manis : Pai Buah, Dadar Gulung, Sus Vla, Sus Eclair, Kue Lumpur, Kue Koci, Ongol-ongol, Kue Tok, Talam Pandan, Puding Mawar, Dadar Gulung Pisang Coklat, Talam Ubi Ungu/kuning.', '150000', NULL, NULL, '2021-12-01 08:55:54', '2021-12-05 22:39:57'),
('P-20211202-001', 'K0002', 'Gurami Bakar Utuh', NULL, NULL, '40000', NULL, NULL, '2021-12-02 01:06:12', '2021-12-02 01:06:12'),
('P-20211202-002', 'K0002', 'Ayam Bakar Bumbu Rujak Utuh', NULL, NULL, '70000', NULL, NULL, '2021-12-02 01:10:33', '2021-12-05 22:43:34'),
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
('P-20211202-021', 'K0008', 'Paket Nusantara 1 - Sayur Asem', 'Paket Prasmanan', 'Nasi Putih, Ayam Goreng Rempah, Empal Gepuk, Sayur Asem, Tempe Tahu Bacem, Pepes/botok, Ikan Asin, Sambal, Kerupuk, Air Mineral', '55000', NULL, NULL, '2021-12-02 09:41:08', '2021-12-06 00:00:21'),
('P-20211202-022', 'K0008', 'Paket Nusantara 2 - Nasi Lodeh', 'Paket Prasmanan', 'Nasi Putih, Sayur Lodeh, Ayam Goreng / Opor Ayam, Empal Gepuk, Tempe Tahu Goreng, Oseng Daun Pepaya, Ikan Asin, Sambal, Kerupuk, Air Mineral', '55000', NULL, NULL, '2021-12-02 09:48:08', '2021-12-06 00:00:44'),
('P-20211202-023', 'K0008', 'Paket Nusantara 3 - Nasi Jagung / Nasi Putih', 'Paket Prasmanan', 'Nasi Jagung / Nasi Putih, Bandeng Presto, Ayam Panggang Bumbu Rujak, Sego Ndeso, Urap-urap, Ikan Asin, Tempe Tahu Goreng, Oseng-oseng Pare / Pepaya Muda, Peyek, Sambal', '55000', NULL, NULL, '2021-12-02 09:49:17', '2021-12-06 00:01:22'),
('P-20211202-024', 'K0008', 'Paket Nusantara 4 - Nasi Padang', 'Paket Prasmanan', 'Nasi Putih, Rendang Daging, Ayam Ungkep Telur, Sayur Gulai Daun Singkong, Telur Kare, Tempe Tahu Goreng, Sambal Ijo, Kerupuk, Air Mineral / Ikan Balado', '55000', NULL, NULL, '2021-12-02 09:50:56', '2021-12-06 00:01:27'),
('P-20211202-025', 'K0008', 'Paket Nusantara 5 - Rawon / Soto', 'Paket Prasmanan', 'Rawon / Soto Daging, Telur / Telur Asin, Tempe Goreng Tepung / Dadar Jagung, Nasi Putih, Sambal, Kerupuk, Dessert / Teh Dan Kopi, Air Mineral', '55000', NULL, NULL, '2021-12-02 09:52:08', '2021-12-06 00:01:31'),
('P-20211202-026', 'K0008', 'Paket Nusantara 6 - Sop Buntut / Asem-asem Iga', 'Paket Prasmanan', 'Ayam Kremes / Ayam Bakar, Gurami Bakar / Gadon Daging, Sop Buntut / Asem-asem Iga, Oseng Daun Singkong / Oseng Pepaya, Botok Telur Asin / Pepes Tongkol, Ikan Asin, Sambal / Lalapan, Kerupuk, Dessert / Teh Dan Kopi, Air Mineral', '55000', NULL, NULL, '2021-12-02 10:10:02', '2021-12-06 00:01:35'),
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
('P-20211202-038', 'K0008', 'Fuyunghai', 'Pilihan Masakan Ikan', NULL, '0', NULL, NULL, '2021-12-02 10:16:59', '2021-12-06 00:08:28'),
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
('P-20211202-049', 'K0010', 'Aisya 3', 'Paket Prasmanan', 'Aneka Olahan Soup, Aneka Olahan Sayur, Aneka Olahan Ayam, Aneka Olahan Daging, Aneka Olahan Seafood, Aneka Olahan Nasi / Non Nasi, Nasi Putih, Olahan Salad, Dessert, Air Mineral', '45000', NULL, NULL, '2021-12-02 10:48:49', '2021-12-02 10:48:49'),
('P-20211206-001', 'K0003', 'Kue Nampan Kecil', NULL, '-minim 2 Nampan\r\n-isi 25 Kue (max 5 Macam Kue )\r\n\r\nPilihan Kue Asin : Lemper, Semar Mendem, Sosis Solo, Kroket, Pastel, Risoles, Talam Abon, Tahu Fantasi.\r\n\r\nPilihan Kue Manis : Pai Buah, Dadar Gulung, Sus Vla, Sus Eclair, Kue Lumpur, Kue Koci, Ongol-ongol, Kue Tok, Talam Pandan, Puding Mawar, Dadar Gulung Pisang Coklat, Talam Ubi Ungu/kuning.', '75000', NULL, NULL, '2021-12-05 22:40:45', '2021-12-05 22:40:45'),
('P-20211206-002', 'K0003', 'Tumpeng Kue', NULL, '-isi 50 Sampai 55 Kue \r\n\r\nPilihan Kue Asin : Lemper, Semar Mendem, Sosis Solo, Kroket, Pastel, Risoles, Talam Abon, Tahu Fantasi.\r\n\r\nPilihan Kue Manis : Pai Buah, Dadar Gulung, Sus Vla, Sus Eclair, Kue Lumpur, Kue Koci, Ongol-ongol, Kue Tok, Talam Pandan, Puding Mawar, Dadar Gulung Pisang Coklat, Talam Ubi Ungu/kuning.', '225000', NULL, NULL, '2021-12-05 22:41:49', '2021-12-05 22:41:49'),
('P-20211206-003', 'K0002', 'Paket 1 Nasi Kuning 1', NULL, 'Nasi Kuning, Olahan Ayam, Perkedel, Telur Suwir, Kering Tempe, Timun, Mie Goreng, Kerupuk', '18500', NULL, NULL, '2021-12-05 22:48:40', '2021-12-05 23:06:53'),
('P-20211206-004', 'K0002', 'Paket 2 Nasi Kuning 2', NULL, 'Nasi Kuning, Olahan Ayam, Perkedel, Telur Suwir, Kering Tempe, Timun, Mie Goreng, Kerupuk,  Sambal Goreng Kentang Hati', '22000', NULL, NULL, '2021-12-05 22:51:03', '2021-12-05 23:06:26'),
('P-20211206-005', 'K0002', 'Paket 2 Nasi Kuning 2 Ayam Kampung', NULL, 'Nasi Kuning, Olahan Ayam, Perkedel, Telur Suwir, Kering Tempe, Timun, Mie Goreng, Kerupuk,  Sambal Goreng Kentang Hati', '27000', NULL, NULL, '2021-12-05 22:51:25', '2021-12-05 23:05:43'),
('P-20211206-006', 'K0002', 'Paket 3 Nasi Uduk', NULL, 'Nasi Gurih / Uduk, Olahan Ayam, Tumis Kacang Panjang Tempe, Telur Bali, Kering Tempe, Timun, Mie Goreng, Kerupuk,  Sambal', '22000', NULL, NULL, '2021-12-05 22:54:10', '2021-12-05 23:03:27'),
('P-20211206-007', 'K0002', 'Paket 3 Nasi Uduk Daging / Ayam Kampung', NULL, 'Nasi Gurih / Uduk, Olahan Ayam, Tumis Kacang Panjang Tempe, Telur Bali, Kering Tempe, Timun, Mie Goreng, Kerupuk,  Sambal', '27000', NULL, NULL, '2021-12-05 22:54:38', '2021-12-05 23:06:01'),
('P-20211206-008', 'K0002', 'Paket 4 Opor Ayam', NULL, 'Nasi Putih / Lontong, Opor Ayam, Telur Petis, Sambal Goreng Kentang, Sayur Manisa, Sambal Kelapa, Kerupuk', '21000', NULL, NULL, '2021-12-05 22:56:32', '2021-12-05 23:05:24'),
('P-20211206-009', 'K0002', 'Paket 4 Opor Ayam Daging / Ayam Kampung', NULL, 'Nasi Putih / Lontong, Opor Ayam, Telur Petis, Sambal Goreng Kentang, Sayur Manisa, Sambal Kelapa, Kerupuk', '26000', NULL, NULL, '2021-12-05 22:56:54', '2021-12-05 23:05:05'),
('P-20211206-010', 'K0002', 'Paket 5 Nasi Pandan Ijo', NULL, 'Nasi Gurih Pandan, Ayam Panggang, Sambal Goreng Kentang, Telur, Oseng Daun Pepaya, Kerupuk', '22000', NULL, NULL, '2021-12-05 22:58:15', '2021-12-05 23:04:36'),
('P-20211206-011', 'K0002', 'Paket 5 Nasi Pandan Ijo + Udang Krispi', NULL, 'Nasi Gurih Pandan, Ayam Panggang, Sambal Goreng Kentang, Telur, Oseng Daun Pepaya, Kerupuk, Udang Krispi', '26000', NULL, NULL, '2021-12-05 22:59:00', '2021-12-05 23:04:21'),
('P-20211206-012', 'K0002', 'Paket 5 Nasi Pandan Ijo Daging / Ayam Kampung + Udang Krispi', NULL, 'Nasi Gurih Pandan, Ayam Panggang, Sambal Goreng Kentang, Telur, Oseng Daun Pepaya, Kerupuk', '31000', NULL, NULL, '2021-12-05 22:59:29', '2021-12-05 23:04:02'),
('P-20211206-013', 'K0002', 'Paket 6 Gurami Bakar', NULL, 'Nasi Putih, Gurami Bakar, Tempe Goreng, Sambal, Tumis Kangkung/urap, Kerupuk Putih', '26000', NULL, NULL, '2021-12-05 23:01:20', '2021-12-05 23:03:41'),
('P-20211206-014', 'K0007', 'Paket Ayam Bakar', 'Makan Siang', NULL, '12500', NULL, NULL, '2021-12-05 23:38:58', '2021-12-05 23:38:58'),
('P-20211206-015', 'K0007', 'Paket Ayam Penyet', 'Makan Siang', NULL, '12500', NULL, NULL, '2021-12-05 23:39:30', '2021-12-05 23:39:30'),
('P-20211206-016', 'K0007', 'Paket Ayam Kremes', 'Makan Siang', NULL, '12500', NULL, NULL, '2021-12-05 23:39:54', '2021-12-05 23:39:54'),
('P-20211206-017', 'K0007', 'Paket Ikan Nila', NULL, NULL, '15000', NULL, NULL, '2021-12-05 23:40:20', '2021-12-05 23:40:20'),
('P-20211206-018', 'K0007', 'Daging Serundeng', 'Catering Lauk Harian', 'Ready Setiap Hari', '50000', NULL, NULL, '2021-12-06 00:14:43', '2021-12-06 00:14:43'),
('P-20211206-019', 'K0007', 'Rendang Daging', 'Catering Lauk Harian', 'Ready Setiap Hari', '50000', NULL, NULL, '2021-12-06 00:16:00', '2021-12-06 00:16:00'),
('P-20211206-020', 'K0007', 'Sate Komoh', 'Catering Lauk Harian', 'Ready Setiap Hari', '50000', NULL, NULL, '2021-12-06 00:16:15', '2021-12-06 00:16:15'),
('P-20211206-021', 'K0007', 'Rawon', 'Catering Lauk Harian', 'Ready Setiap Hari', '50000', NULL, NULL, '2021-12-06 00:16:37', '2021-12-06 00:16:37'),
('P-20211206-022', 'K0007', 'Soto Daging', 'Catering Lauk Harian', 'Ready Setiap Hari', '50000', NULL, NULL, '2021-12-06 00:16:51', '2021-12-06 00:16:51'),
('P-20211206-023', 'K0007', 'Ayam Bakar 1 Ekor', 'Catering Lauk Harian', 'Ready Setiap Hari', '65000', NULL, NULL, '2021-12-06 00:17:14', '2021-12-06 00:17:14'),
('P-20211206-024', 'K0007', 'Ayam Lodho 1 Ekor', 'Catering Lauk Harian', 'Ready Setiap Hari', '65000', NULL, NULL, '2021-12-06 00:17:31', '2021-12-06 00:17:31'),
('P-20211206-025', 'K0007', 'Ayam Goreng Kremes', 'Catering Lauk Harian', 'Ready Setiap Hari', '65000', NULL, NULL, '2021-12-06 00:18:10', '2021-12-06 00:18:10'),
('P-20211206-026', 'K0007', 'Ayam Ungkep 1 Ekor', 'Catering Lauk Harian', 'Ready Setiap Hari', '65000', NULL, NULL, '2021-12-06 00:18:29', '2021-12-06 00:18:29'),
('P-20211206-027', 'K0007', 'Paru Ungkep', 'Catering Lauk Harian', 'Ready Setiap Hari', '40000', NULL, NULL, '2021-12-06 00:18:49', '2021-12-06 00:18:49'),
('P-20211206-028', 'K0007', 'Babat Ungkep', 'Catering Lauk Harian', 'Ready Setiap Hari', '40000', NULL, NULL, '2021-12-06 00:19:02', '2021-12-06 00:19:02'),
('P-20211206-029', 'K0007', 'Gurami Bakar 1 Ekor 1/2 Kiloan', 'Catering Lauk Harian', 'Ready Setiap Hari', '35000', NULL, NULL, '2021-12-06 00:19:37', '2021-12-06 00:19:37'),
('P-20211206-030', 'K0007', 'Gurami Goreng Kremes 1 Ekor 1/2 Kiloan', 'Catering Lauk Harian', 'Ready Setiap Hari', '35000', NULL, NULL, '2021-12-06 00:20:09', '2021-12-06 00:20:09'),
('P-20211206-031', 'K0007', 'Gurami Asam Manis 1 Ekor 1/2 Kiloan', 'Catering Lauk Harian', 'Ready Setiap Hari', '35000', NULL, NULL, '2021-12-06 00:20:41', '2021-12-06 00:20:41'),
('P-20211206-032', 'K0007', 'Nila Bakar (2)', 'Catering Lauk Harian', 'Ready Khusus Hari Senin', '20000', NULL, NULL, '2021-12-06 00:31:46', '2021-12-06 00:31:46'),
('P-20211206-033', 'K0007', 'Urap-urap', 'Catering Lauk Harian', 'Ready Khusus Hari Senin', '15000', NULL, NULL, '2021-12-06 00:32:54', '2021-12-06 00:32:54'),
('P-20211206-034', 'K0007', 'Dadar Jagung', 'Catering Lauk Harian', 'Ready Khusus Hari Senin', '10000', NULL, NULL, '2021-12-06 00:33:07', '2021-12-06 00:33:07'),
('P-20211206-035', 'K0007', 'Oseng Daun Pepaya', 'Catering Lauk Harian', 'Ready Khusus Hari Senin', '15000', NULL, NULL, '2021-12-06 00:33:23', '2021-12-06 00:33:23'),
('P-20211206-036', 'K0007', 'Ayam Saos Inggris (5)', 'Catering Lauk Harian', 'Ready Khusus Hari Selasa', '30000', NULL, NULL, '2021-12-06 00:33:52', '2021-12-06 00:33:52'),
('P-20211206-037', 'K0007', 'Bihun Goreng', 'Catering Lauk Harian', 'Ready Khusus Hari Selasa', '15000', NULL, NULL, '2021-12-06 00:34:05', '2021-12-06 00:34:05'),
('P-20211206-038', 'K0007', 'Cap Jay Kuah', 'Catering Lauk Harian', 'Ready Khusus Hari Selasa', '20000', NULL, NULL, '2021-12-06 00:34:16', '2021-12-06 00:34:16'),
('P-20211206-039', 'K0007', 'Oseng Pare Udang', 'Catering Lauk Harian', 'Ready Khusus Hari Rabu', '15000', NULL, NULL, '2021-12-06 00:34:33', '2021-12-06 00:34:33'),
('P-20211206-040', 'K0007', 'Ayam Goreng Laos (5)', 'Catering Lauk Harian', 'Ready Khusus Hari Rabu', '30000', NULL, NULL, '2021-12-06 00:34:46', '2021-12-06 00:34:46'),
('P-20211206-041', 'K0007', 'Sambal Goreng Kentang', 'Catering Lauk Harian', 'Ready Khusus Hari Rabu', '20000', NULL, NULL, '2021-12-06 00:35:04', '2021-12-06 00:35:04'),
('P-20211206-042', 'K0007', 'Gudeg', 'Catering Lauk Harian', 'Ready Khusus Hari Kamis', '30000', NULL, NULL, '2021-12-06 00:35:20', '2021-12-06 00:35:20'),
('P-20211206-043', 'K0007', 'Telur Bacem (5)', 'Catering Lauk Harian', 'Ready Khusus Hari Kamis', '25000', NULL, NULL, '2021-12-06 00:35:33', '2021-12-06 00:35:33'),
('P-20211206-044', 'K0007', 'Opor Ayam (5 Potong Ayam)', 'Catering Lauk Harian', 'Ready Khusus Hari Kamis', '30000', NULL, NULL, '2021-12-06 00:36:06', '2021-12-06 00:36:06'),
('P-20211206-045', 'K0007', 'Sayur Asem', 'Catering Lauk Harian', 'Ready Khusus Hari Jumat', '15000', NULL, NULL, '2021-12-06 00:36:21', '2021-12-06 00:36:21'),
('P-20211206-046', 'K0007', 'Pepes Tongkol (2)', 'Catering Lauk Harian', 'Ready Khusus Hari Jumat', '12000', NULL, NULL, '2021-12-06 00:36:40', '2021-12-06 00:36:40'),
('P-20211206-047', 'K0007', 'Dadar Jagung 2', 'Catering Lauk Harian', 'Ready Khusus Hari Jumat', '10000', NULL, NULL, '2021-12-06 00:37:42', '2021-12-06 00:37:42'),
('P-20211206-048', 'K0007', 'Tumis Kangkung', 'Catering Lauk Harian', 'Ready Khusus Hari Jumat', '10000', NULL, NULL, '2021-12-06 00:37:56', '2021-12-06 00:37:56'),
('P-20211206-049', 'K0007', 'Dori Sambal Matah', 'Catering Lauk Harian', 'Ready Khusus Hari Sabtu', '35000', NULL, NULL, '2021-12-06 00:38:12', '2021-12-06 00:38:12'),
('P-20211206-050', 'K0007', 'Orak Arik Sayur', 'Catering Lauk Harian', 'Ready Khusus Hari Sabtu', '20000', NULL, NULL, '2021-12-06 00:38:22', '2021-12-06 00:38:22'),
('P-20211206-051', 'K0007', 'Bihun Jamur', 'Catering Lauk Harian', 'Ready Khusus Hari Sabtu', '15000', NULL, NULL, '2021-12-06 00:38:31', '2021-12-06 00:38:31'),
('P-20211206-052', 'K0007', 'Paket Sehat 1', 'Lunch Box New Normal Corporate', 'Nasi Putih, Sayur, Protein Hewani, Protein Nabati, Sambal, Kerupuk + Buah. Bonus Yakult & Vitamin.', '22500', NULL, NULL, '2021-12-06 00:41:05', '2021-12-06 00:43:54'),
('P-20211206-053', 'K0007', 'Paket Sehat 2', 'Lunch Box New Normal Corporate', 'Nasi Putih, Sayur, Protein Hewani, Protein Nabati, Protein Nabati, Sambal, Kerupuk + Buah. Bonus Yakult & Vitamin.', '25000', NULL, NULL, '2021-12-06 00:41:27', '2021-12-06 00:43:47'),
('P-20211206-054', 'K0007', 'Paket Sehat 3', 'Lunch Box New Normal Corporate', 'Nasi Putih, Sayur, Protein Hewani, Protein Hewani, Protein Nabati, Sambal, Kerupuk + Buah. Bonus Yakult & Vitamin.', '30000', NULL, NULL, '2021-12-06 00:43:07', '2021-12-06 00:43:26'),
('P-20211206-055', 'K0005', 'Paket Bukber 1', NULL, '1) Menu Buka Puasa Pilihan (pilih Satu) : Sate Ayam + Lontong, Tahu Campur, Tahu Tek, Lontong Kikil, Bakso, Gado-gado, Soto Ayam + Nasi, Soto Madura + Nasi, Soto Banjar + Nasi, Rawon + Nasi, Nasi Pecel Lengkap, Siomay. \r\n2) Minuman Es Cao / Es Buah, Teh Hangat.\r\n3) Gratis Takjil\r\n\r\nMinimal Pemesanan 50 Pak, 25 Ribu Per Pak', '25000', NULL, NULL, '2021-12-06 01:12:17', '2021-12-06 01:12:17'),
('P-20211206-056', 'K0005', 'Paket Bukber 2', NULL, '1) Menu Buka Puasa Pilihan (pilih Satu) : Sate Ayam + Lontong, Tahu Campur, Tahu Tek, Lontong Kikil, Bakso, Gado-gado, Soto Ayam + Nasi, Soto Madura + Nasi, Soto Banjar + Nasi, Rawon + Nasi, Nasi Pecel Lengkap, Siomay. \r\n2) Minuman Es Cao / Es Buah, Teh Hangat, Air Mineral Gelas.\r\n3) Gratis Takjil.\r\n4) Prasmanan : Nasi Putih, Ayam Bakar / Goreng Mentega, Cap Jay / Tumis Sayur, Mie Goreng\r\n\r\nMinimal Pemesanan 50 Pak, 35 Ribu Per Pak', '35000', NULL, NULL, '2021-12-06 01:13:54', '2021-12-06 01:13:54'),
('P-20211206-057', 'K0005', 'Paket Bukber 3', NULL, '1) Menu Buka Puasa Pilihan (pilih Satu) : Sate Ayam + Lontong, Tahu Campur, Tahu Tek, Lontong Kikil, Bakso, Gado-gado, Soto Ayam + Nasi, Soto Madura + Nasi, Soto Banjar + Nasi, Rawon + Nasi, Nasi Pecel Lengkap, Siomay. \r\n2) Minuman Es Cao / Es Buah, Teh Hangat, Air Mineral Gelas.\r\n3) Gratis Takjil, Gratis Snack Ringan(gorengan), Gratis Buah Potong\r\n4) Prasmanan : Nasi Putih/gurih/goreng, Ayam Kungpau, Capjay / Tumis Sayur, Sup Kimlo, Kakap Asam Manis, Daging Lada Hitam\r\n\r\nMinimal Pemesanan 50 Pak, 55 Ribu Per Pak', '55000', NULL, NULL, '2021-12-06 01:16:00', '2021-12-06 01:16:00'),
('P-20211206-058', 'K0005', 'Paket Bukber 4', NULL, '1) Menu Buka Puasa : Sayur Asem, Paru Goreng + Ayam Bakar, Pepes / Botok, Dadar Jagung, Tumis Daun Pepaya, Nasi Putih.\r\n2) Minuman : Es Cao / Sweet Green Ice, Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Siomay.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:19:18', '2021-12-06 01:19:18'),
('P-20211206-059', 'K0005', 'Paket Bukber 5', NULL, '1) Menu Buka Puasa : Ayam Saos Inggris, Kakap Asam Manis, Capjay, Mie/bihun Goreng, Sup Ayam Bakso, Nasi Putih.\r\n2) Minuman : Es Cao / Sweet Green Ice, Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Siomay.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:20:14', '2021-12-06 01:20:14'),
('P-20211206-060', 'K0005', 'Paket Bukber 6', NULL, '1) Menu Buka Puasa : Asem-asem Iga, Ayam Bakar, Kakap Dabu, Urap-urap Tumis Daun Pepaya, Dadar Jagung, Nasi Putih.\r\n2) Minuman : Es Cao / Sweet Green Ice, Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Siomay.\r\n\r\nMinimal Pemesanan 50 Pak, 60 Ribu Per Pak', '60000', NULL, NULL, '2021-12-06 01:21:32', '2021-12-06 01:21:32'),
('P-20211206-061', 'K0005', 'Paket Bukber 7', NULL, '1) Menu Buka Puasa : Rendang Daging, Telur Dadar Padang, Gulai Daun Singkong, Lodeh Nangka Muda, Sambal Hijau, Nasi Putih.\r\n2) Minuman : Es Cao / Sweet Green Ice, Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Siomay.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:22:32', '2021-12-06 01:22:32'),
('P-20211206-062', 'K0005', 'Paket Bukber 8', NULL, '1) Menu Buka Puasa : Opor Ayam, Rendang Daging, Sambal Goreng Kentang Hati, Telur Petis, Sambal Goreng Manis, Nasi Putih / Lontong.\r\n2) Minuman : Es Cao / Sweet Green Ice, Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Siomay.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:23:43', '2021-12-06 01:23:43'),
('P-20211206-063', 'K0005', 'Menu Tradisional 1', NULL, '1) Menu Buka Puasa : Rawon / Soto Ayam, Empal / Ayam Suwir, Pecel Sayur, Mie Goreng, Nasi Putih. \r\n2) Minuman : Es Cao / Es Oyen, Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Tahu Tek.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:25:18', '2021-12-06 01:25:18'),
('P-20211206-064', 'K0005', 'Menu Tradisional 2', NULL, '1) Menu Buka Puasa : Ayam Goreng Kalasan, Gudeg, Telur Bacem, Sambal Krecek, Nasi Putih.\r\n2) Minuman : Es Dawet / Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam / Mie Jawa.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:26:41', '2021-12-06 01:34:43'),
('P-20211206-065', 'K0005', 'Menu Tradisional 3', NULL, '1) Menu Buka Puasa : Rendang, Telur Dadar Padang, Gulai Sayur Singkong, Sambal Hijau, Nasi Putih.\r\n2) Minuman : Es Buah / Teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:27:55', '2021-12-06 01:33:36'),
('P-20211206-066', 'K0005', 'Menu Tradisional 4', NULL, '1) Menu Buka Puasa : Nasi Uduk / Nasi Putih, Ayam Bakar / Goreng, Empal Gepuk, Telur Suwir, Sambal Goreng Kentang Hati, Urap-urap / Sayur Asem, Ikan Asin, Tempe Mendoan, Sambal + Lalapan + Kerupuk.\r\n2) Minuman : Es Cao/es Buah/teh Hangat, Air Mineral.\r\n3) Gubukan : Bakso / Sate Ayam.\r\n\r\nMinimal Pemesanan 50 Pak, 50 Ribu Per Pak', '50000', NULL, NULL, '2021-12-06 01:30:08', '2021-12-06 01:30:08'),
('P-20211206-067', 'K0005', 'Menu Tradisional 5', NULL, '1) Menu Buka Puasa : Nasi Putih / Lontong, Opor Ayam, Telur Petis, Sambal Goreng Manisa, Sambal Goreng Udang, Rendang Dagingm Kerupuk.\r\n2) Minuman : Es Manado / Es Buah, Buah Potong, Air Mineral. \r\n3) Gubukan : Bakso / Sate Ayam / Siomay.\r\n\r\nMinimal Pemesanan 50 Pak, 65 Ribu Per Pak', '65000', NULL, NULL, '2021-12-06 01:31:58', '2021-12-06 01:32:37'),
('P-20211206-068', 'K0006', 'Paket Lebaran 1', NULL, '1) Menu Makanan : Nasi / Lontong, Sayur Cap Gomeh (manisa), Opor Ayam, Sambal Goreng Kentang, Telur Petis.\r\n2) Minuman : Aneka Es(pilih Satu), Air Mineral Gelas\r\n\r\nMinimal Pesan 50 Pak, 30 Ribu Per Pak', '30000', NULL, NULL, '2021-12-06 02:05:56', '2021-12-06 02:05:56'),
('P-20211206-069', 'K0006', 'Paket Lebaran 2', NULL, '1) Menu Makanan : Nasi / Lontong, Sayur Cap Gomeh (manisa), Opor Ayam, Sambal Goreng Kentang, Telur Petis.\r\n2) Minuman : Aneka Es(pilih Satu), Air Mineral Gelas.\r\n3) Menu Tambahan : Sate Ayam + Lontong.\r\n\r\nMinimal Pesan 50 Pak, 45 Ribu Per Pak', '45000', NULL, NULL, '2021-12-06 02:06:49', '2021-12-06 02:06:49'),
('P-20211206-070', 'K0006', 'Paket Lebaran 3', NULL, '1) Menu Makanan : Nasi / Lontong, Sayur Cap Gomeh (manisa), Opor Ayam, Sambal Goreng Kentang, Telur Petis.\r\n2) Minuman : Aneka Es(pilih Satu), Air Mineral Gelas.\r\n3) Menu Tambahan : Sate Ayam + Lontong, Gulai Daging.\r\n\r\nMinimal Pesan 50 Pak, 55 Ribu Per Pak', '55000', NULL, NULL, '2021-12-06 02:07:24', '2021-12-06 02:07:24'),
('P-20211207-001', 'K0008', 'Paket Kantor 2 - Aisya Snack Box', NULL, NULL, '30000', NULL, NULL, '2021-12-07 11:11:42', '2021-12-07 11:11:42'),
('P-20211207-002', 'K0008', 'Paket E - Aisya Snack Box', NULL, 'Lemper, Roll Cake Premium, Kroket Jamur', '15000', NULL, NULL, '2021-12-07 11:12:52', '2021-12-07 11:12:52'),
('P-20220110-001', 'K0005', 'Aaaaaaaaa', NULL, NULL, '200000', NULL, NULL, '2022-01-10 04:32:38', '2022-01-10 04:32:38');

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
('R0004', 'superAdmin', '2021-01-28 11:35:02'),
('R0005', 'adminBlog', '2021-12-13 23:26:15');

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
('U-20211122-001', 'R0001', NULL, NULL, NULL),
('U-20211206-001', 'R0002', NULL, '2021-12-06 02:32:18', '2021-12-06 02:32:18'),
('U-20211206-002', 'R0003', NULL, '2021-12-06 02:32:29', '2021-12-06 02:32:29'),
('U-20211214-001', 'R0005', NULL, '2021-12-13 23:58:40', '2021-12-13 23:58:40'),
('U-20211221-001', 'R0005', NULL, NULL, NULL),
('U-20211229-001', 'R0001', NULL, NULL, NULL),
('U-20220104-001', 'R0001', NULL, '2022-01-10 04:23:46', '2022-01-10 04:23:46'),
('U-20220119-001', 'R0001', NULL, NULL, NULL),
('U-20220120-001', 'R0001', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(14) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `alamat_user` varchar(100) DEFAULT NULL,
  `ponsel_user` varchar(13) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat_user`, `ponsel_user`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
('U-20211104-001', 'rahasia', 'rahasia@gmail.com', NULL, '$2y$10$hSTQUtdk0zwf1UEGN6cmau7exexBxSqIAiv2DEYN0CMRV4C6.zQk6', NULL, '0814223355698', NULL, '2021-11-04 02:02:29', '2022-01-04 06:01:18', NULL),
('U-20211122-001', 'EinsteinReal', 'Einsteinreal@gmail.com', NULL, '$2y$10$DscLGAdBKMKiYp57O5kFduHHN8MZ5TmHfWbFOndghgUrTAdetEts6', 'alamattttttt', NULL, 'gipAoQS4dk5vKmK46HgOy3z1x2FpNUp7S5PHnoU5h7aJBKf1J7b3XZ4FzvBd', '2021-11-22 04:58:59', '2022-01-21 04:29:22', NULL),
('U-20211206-001', 'Cindy', 'cindy@gmail.com', NULL, '$2y$10$kEQtf6Zypz7WH1gSCkQD1eQeeYYJo0wjOwbWYsub9cTIUyxr2VCDu', NULL, NULL, '1GutdygkqtvpQVQO7BKOXTxnaz2YocjXRktC0BqwP2OGpQ4CJUg3vYtyqm2p', '2021-12-06 02:30:53', '2022-01-22 06:32:52', NULL),
('U-20211206-002', 'Tata Cateringg', 'tatarisa@gmail.com', NULL, '$2y$10$Lz5GybKZVMWWfRF.sxMY8.xzLtpUQFVNB8F1wwynR3G/8uSTFar9C', NULL, NULL, 'MojjySSx2O53Ve0FXw1A9mlDv0UgzPYuICPoAdixQtRpk6CuOWvOyhUhYYRO', '2021-12-06 02:31:29', '2022-01-22 06:21:15', NULL),
('U-20211214-001', 'Ado Nureksa', 'ado@gmail.com', NULL, '$2y$10$pkHmdMtWRP12R.AisLBXAu/GAvos8EGvs1wtqpchgsMqsvAnwpgiG', NULL, NULL, 'NF4kYaOH4vGqylvHZY0AFPUbexbAfhdBGaXhsyoBfBwlKGwvrCcaKviePGbE', '2021-12-13 23:58:21', '2021-12-29 05:50:50', NULL),
('U-20211221-001', 'cobadeh', 'cobadeh@gmail.com', NULL, '$2y$10$xiu3AsAOd..HLJUGEkcV5.zHpakkC1vRIXjM90flOGXWwjkrwuh7C', NULL, NULL, NULL, '2021-12-21 02:10:00', '2021-12-28 04:48:37', '2021-12-28 04:48:37'),
('U-20211229-001', 'Daftar', 'daftar@gmail.com', NULL, '$2y$10$DC0CSSaOJfF6dVWLKnkZcOETEC6h8TeiijgpXll0w4ogAvh4WjCEu', NULL, NULL, 'NeOuIrW5pkuAbwF7PEHAM36IvgYKCwGZHhF0xXaCtfGkXBFVJKEG29ayUI0J', '2021-12-29 01:41:54', '2022-01-05 09:45:38', NULL),
('U-20220104-001', 'Nihin', 'nihin@gmail.com', NULL, '$2y$10$3g0w96wYRMC142E5gVExZuJxVijxPvdqM8GkwSKUSDfuz.2aWpMXa', NULL, NULL, NULL, '2022-01-03 23:53:58', '2022-01-03 23:53:58', NULL),
('U-20220119-001', 'jia', 'jia@gmail.com', NULL, '$2y$10$XzlMZotzqQ3VCvgxWDSz7.wUb7EQ558zjLijHO2qdiVwxlmCfOBWe', NULL, NULL, NULL, '2022-01-19 04:34:54', '2022-01-19 04:34:54', NULL),
('U-20220120-001', 'Ibu Endah Purwanti', 'endah@gmail.com', NULL, '$2y$10$l8S5ERRHVHFSHsWynAW.W.0eqGGP/cRKZcO4IQ9WgD3sejlHC4qx.', 'A L A M A T', '023587458', 'yulxeerWjqBrbREmf6o5NWWEMPMrsnutl2NsaO4AfOGRUzjovzlXZOzvEzHO', '2022-01-20 07:58:17', '2022-01-22 06:29:08', NULL);

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

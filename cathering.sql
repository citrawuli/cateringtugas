-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 13.06
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
-- Database: `cathering`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul_blog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten_blog` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_blog` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailtransaksi`
--

CREATE TABLE `detailtransaksi` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `sub_total` decimal(11,2) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal_file` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri_produk`
--

CREATE TABLE `galeri_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama_kategori`) VALUES
(1, 'Paket Tumpeng Hantaran'),
(2, 'Paket Rice Box'),
(3, 'Paket Snack Box');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_27_095831_create_roles_table', 1),
(5, '2020_11_27_100236_create_role_users_table', 1),
(8, '2020_12_16_212245_create_blogs_table', 2),
(9, '2020_12_19_080313_create_kategoriproduk_table', 3),
(11, '2020_12_19_083003_create_produk_table', 4),
(12, '2020_12_19_100322_create_galeriproduk_table', 5),
(13, '2020_12_19_100818_create_pemesanan_table', 6),
(14, '2020_12_19_101533_create_pembayaran_table', 7),
(15, '2020_12_19_102452_create_detailtransaksi_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pembayaran` datetime NOT NULL,
  `bank_transfer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_transaksi` decimal(11,2) NOT NULL,
  `status pemesanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_produk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_produk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_produk` decimal(10,2) UNSIGNED NOT NULL,
  `rating_produk` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `tipe_produk`, `deskripsi_produk`, `harga_produk`, `rating_produk`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'PAKET 1 Nasi Kuning 1', NULL, NULL, '18500.00', NULL, '0000-00-00 00:00:00', '2020-12-27 09:39:02', '2020-12-27 09:39:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'user'),
(2, 'adminPemesanan'),
(3, 'adminPembayaran'),
(4, 'superAdmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 3, NULL, '2020-12-24 12:06:14'),
(3, 4, NULL, NULL),
(10, 1, NULL, NULL),
(17, 2, NULL, '2020-12-24 13:28:19'),
(19, 3, '2020-12-23 13:51:32', '2020-12-24 13:05:38'),
(22, 4, '2020-12-26 04:31:55', '2020-12-26 04:31:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Citra', 'citrawuli@gmail.com', NULL, '$2y$10$8wDZooau5f4RT6iAm8VdDOuv3rh6NNXVBHIbAIz/M/zmmfLJms91i', NULL, '2020-11-27 06:10:32', '2020-11-27 06:10:32'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$rcvdtw.ZmML380xnDtPg/e1C03mk1gnKlGxvZvq3pFxRFz.cP4pDm', NULL, '2020-11-27 07:15:39', '2020-11-27 07:15:39'),
(3, 'user2', 'user2@gmail.com', NULL, '$2y$10$jPBnl.jHS1YSN1/KdSW.nuo.rr8DZApMlvwEuQLuHb38dptjuo4Gm', 'Iis681I7XqcVDcp5Q8s9QCmsjy0CaI5BjQOdU59lN1SCmzMny2AdMNzQ8TSU', '2020-11-27 14:25:31', '2020-11-27 14:25:31'),
(5, 'user3', 'user3@gmail.com', NULL, '$2y$10$fcqRbpzbE/zYf7L4/gbZXeo2yd3Epc/7bQQSuiCY1Pk9wbrCiGR0a', NULL, '2020-11-27 14:34:20', '2020-11-27 14:34:20'),
(6, 'user4', 'user4@gmail.com', NULL, '$2y$10$0xBtbxbsrDTe49l14hw9.OEq3KNoBstnmY5MZbIbhGR9q7Gw6pJSO', NULL, '2020-11-27 14:35:53', '2020-11-27 14:35:53'),
(7, 'user5', 'user5@gmail.com', NULL, '$2y$10$6bOXyckL9uy9AWalUeFppud2R.chcrTGn/jfh0qCQCWPrRnl5b58q', NULL, '2020-11-29 11:32:26', '2020-11-29 11:32:26'),
(8, 'user6', 'user6@gmail.com', NULL, '$2y$10$DF2WAwDijyqZHV3czcAbIeqDoD2rNVb8jUrvup3XAPV1yYK/zlQWq', NULL, '2020-11-29 11:46:31', '2020-11-29 11:46:31'),
(9, 'user7', 'user7@gmail.com', NULL, '$2y$10$pAImxQTvBPfLBZPoKCnOPeNyALF9zb5GYPhDryF9Z3YK420MSOcnG', NULL, '2020-11-29 11:50:40', '2020-11-29 11:50:40'),
(10, 'user8', 'user8@gmail.com', NULL, '$2y$10$L6D2aoWDG8m.kmHkqcy7DelO0tgwpRfhkiQCfPTFD06os9JKIBvMC', NULL, '2020-11-29 12:07:26', '2020-11-29 12:07:26'),
(17, 'Nila', 'nila@gmail.com', NULL, '$2y$10$TCgLQlt.Bk4MVr.ig6kJgOqQbq4LMv5ruSnzm2KXty.Od/K/3rqYa', NULL, '2020-12-22 14:31:58', '2020-12-22 14:31:58'),
(19, 'Mel', 'mel@gmail.com', NULL, '$2y$10$IfpeTAv9eVdYvWt5UO0Cdu3al9XYVBPL/I.M0SPVAoujdZTLB4wqK', NULL, '2020-12-23 11:53:22', '2020-12-23 11:53:22'),
(22, 'Winda', 'winda@gmail.com', NULL, '$2y$10$jtIjLrl7Q0ZQu9nRm2MgjuJO0ysieljgGtlYOs/DAi1RzyIYaaTX2', NULL, '2020-12-23 11:59:50', '2020-12-23 11:59:50'),
(23, 'Sekar', 'sekar@gmail.com', NULL, '$2y$10$A33YMVsfTnK75X.aDO28X.VMKp9YanG.LH5ezR8/X3jO1HQGAf5h.', NULL, '2020-12-24 06:15:03', '2020-12-24 06:15:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_user_id_unique` (`user_id`);

--
-- Indeks untuk tabel `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD UNIQUE KEY `detailtransaksi_id_produk_id_pemesanan_unique` (`id_produk`,`id_pemesanan`),
  ADD KEY `detailtransaksi_id_pemesanan_foreign` (`id_pemesanan`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galeri_produk_id_produk_unique` (`id_produk`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pembayaran_id_pemesanan_unique` (`id_pemesanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemesanan_user_id_unique` (`user_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produk_id_kategori_unique` (`id_kategori`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD CONSTRAINT `detailtransaksi_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detailtransaksi_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeri_produk`
--
ALTER TABLE `galeri_produk`
  ADD CONSTRAINT `galeri_produk_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id`) ON DELETE CASCADE;

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

-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220609.11e34a6fec
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 16.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_kasir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_14_012420_create_barangs_table', 1),
(4, '2019_11_14_012711_create_pesanans_table', 1),
(5, '2019_11_14_012822_create_pesanan_details_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_11_27_033734_create_stocks_table', 2),
(8, '2014_10_12_000000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(11, 2, '2022-11-27', '1', 110, 10000000, '2022-11-27 03:44:31', '2022-11-27 03:44:36'),
(12, 2, '2022-11-27', '1', 492, 10000000, '2022-11-27 03:44:59', '2022-11-27 03:45:04'),
(13, 2, '2022-11-27', '1', 674, 10000000, '2022-11-27 03:46:11', '2022-12-13 08:06:46'),
(14, 2, '2022-12-13', '1', 596, 7500000, '2022-12-13 08:10:41', '2022-12-13 08:10:50'),
(15, 2, '2022-12-13', '1', 372, 18000000, '2022-12-13 08:38:02', '2022-12-13 08:32:34'),
(16, 2, '2022-12-13', '1', 570, 1000000, '2022-12-13 08:34:07', '2022-12-13 08:36:05'),
(17, 2, '2022-12-13', '1', 930, 1150000, '2022-12-13 08:03:43', '2022-12-13 08:31:15'),
(18, 2, '2022-12-13', '1', 490, 200000, '2022-12-13 08:35:02', '2022-12-13 07:48:20'),
(19, 2, '2022-12-13', '1', 699, 210000, '2022-12-13 08:13:09', '2022-12-13 08:01:19'),
(20, 2, '2022-12-13', '1', 138, 8790000, '2022-12-13 08:23:19', '2022-12-13 08:23:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `stock_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(15, 3, 11, 100, 10000000, '2022-11-27 03:44:31', '2022-11-27 03:44:31'),
(16, 3, 12, 100, 10000000, '2022-11-27 03:44:59', '2022-11-27 03:44:59'),
(18, 3, 13, 100, 10000000, '2022-12-13 08:05:59', '2022-12-13 08:05:59'),
(19, 5, 14, 50, 7500000, '2022-12-13 08:10:41', '2022-12-13 08:10:41'),
(20, 3, 15, 150, 15000000, '2022-12-13 08:38:02', '2022-12-13 08:38:02'),
(21, 2, 15, 150, 3000000, '2022-12-13 08:32:24', '2022-12-13 08:32:24'),
(22, 3, 16, 10, 1000000, '2022-12-13 08:34:07', '2022-12-13 08:34:07'),
(23, 3, 17, 10, 1000000, '2022-12-13 08:03:44', '2022-12-13 08:03:44'),
(24, 6, 17, 10, 150000, '2022-12-13 08:03:55', '2022-12-13 08:03:55'),
(25, 3, 18, 2, 200000, '2022-12-13 08:35:02', '2022-12-13 08:35:02'),
(26, 3, 19, 2, 200000, '2022-12-13 08:14:30', '2022-12-13 08:14:30'),
(27, 11, 19, 10, 10000, '2022-12-13 08:37:50', '2022-12-13 08:37:50'),
(28, 15, 20, 250, 5000000, '2022-12-13 08:23:19', '2022-12-13 08:23:19'),
(29, 16, 20, 150, 3750000, '2022-12-13 08:23:32', '2022-12-13 08:23:32'),
(30, 11, 20, 40, 40000, '2022-12-13 08:23:46', '2022-12-13 08:23:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(10) UNSIGNED NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stocks`
--

INSERT INTO `stocks` (`id`, `kode_barang`, `nama_barang`, `merk`, `harga`, `stok`, `satuan`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'KB002', 'Paku', '-', 20000, 850, 'Kg', 'Paku Ukuran Besar', '2022-12-13 08:32:22', '2022-12-13 08:32:34'),
(3, 'KB001', 'Cat', 'Nippon', 100000, 26, 'Kaleng', 'Warna : Kuning', '2022-12-13 07:42:47', '2022-12-13 08:01:19'),
(4, 'KB003', 'Semen', 'Tiga Roda', 70000, 100, 'Karung', 'Per Karung Berisi 50 Kg', '2022-12-13 07:45:11', '2022-12-13 07:45:11'),
(5, 'KB004', 'Kuas', 'Nippon', 10000, 500, 'Pcs', 'Ukuran Kecil', '2022-12-13 07:45:48', '2022-12-13 07:45:48'),
(6, 'KB005', 'Paku', '-', 15000, 190, 'Kg', 'Ukuran Kecil', '2022-12-13 07:52:33', '2022-12-13 08:31:15'),
(7, 'KB006', 'Cat', 'No Drop', 250000, 100, 'Kaleng', 'Warna : Hitam , Ukuran : Besar', '2022-12-13 07:53:36', '2022-12-13 07:53:36'),
(8, 'KB007', 'Semen', 'Holcim', 100000, 100, 'Karung', 'Per Karung Berisi 50 Kg', '2022-12-13 07:55:34', '2022-12-13 07:55:34'),
(9, 'KB008', 'Amplas', 'Cap Gajah', 5000, 350, 'Lembar', 'Ukuran : Lebar (20 cm) dan Panjang(100 cm)', '2022-12-13 07:57:47', '2022-12-13 07:57:47'),
(10, 'KB009', 'Tinner', '-', 15000, 100, 'Botol', 'Isi : 250 Ml', '2022-12-13 07:59:15', '2022-12-13 07:59:15'),
(11, 'KB010', 'Baut', '-', 1000, 1450, 'Unit', 'Ukuran 20mm', '2022-12-13 08:01:49', '2022-12-13 08:23:49'),
(12, 'KB011', 'Triplek', '-', 300000, 100, 'Lembar', 'Ukuran : Lebar (200 cm) dan Panjang(500 cm)', '2022-12-13 08:03:39', '2022-12-13 08:03:39'),
(13, 'KB012', 'Pipa', 'Rucika', 25000, 450, 'Unit', 'Panjang : 50 cm dan Diameter : 10 cm', '2022-12-13 08:05:31', '2022-12-13 08:05:31'),
(14, 'KB013', 'Keramik', '-', 15000, 2000, 'Unit', 'Ukuran : 20 cm x 20 cm', '2022-12-13 08:09:57', '2022-12-13 08:09:57'),
(15, 'KB014', 'Batako', '-', 20000, 4750, 'Unit', '-', '2022-12-13 08:11:19', '2022-12-13 08:23:49'),
(16, 'KB015', 'Bata Merah', '-', 25000, 5350, 'Unit', '-', '2022-12-13 08:12:03', '2022-12-13 08:23:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `alamat`, `nohp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Kasir', 'admin', 'admin@gmail.com', NULL, '$2y$10$AFmDV5DCjJ.zw/CvxQWhaemE1qX1.hkcsNus7oKrLxOa9WVK4D2s2', 'admin', 'kudus', '085161717002', NULL, '2022-11-27 04:08:11', '2022-11-27 04:08:11'),
(2, 'User Kasir', 'user', 'user@gmail.com', NULL, '$2y$10$/7smE4z5P8qFEcN8GTDhw.jWi179VpChPDSEuSN93SWZ96tWUgxPW', 'user', 'kudus kota', '087161787004', NULL, '2022-11-27 03:34:16', '2022-12-13 08:03:59');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




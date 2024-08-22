-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 22 Agu 2024 pada 08.28
-- Versi server: 5.7.34
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_db`
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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_08_21_075647_create_users_table', 1),
(3, '2024_08_21_075842_create_wilayah_table', 1),
(4, '2024_08_21_080443_create_pegawai_table', 1),
(5, '2024_08_21_080559_create_tindakan_table', 1),
(6, '2024_08_21_080637_create_obat_table', 1),
(7, '2024_08_21_080713_create_pasien_table', 1),
(8, '2024_08_21_080748_create_pendaftaran_table', 1),
(9, '2024_08_21_080853_create_transaksi_tindakan_table', 1),
(10, '2024_08_21_080929_create_pembayaran_table', 1),
(11, '2024_08_21_081450_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Paracetamol', '5000.00', 100, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(2, 'Amoxicillin', '15000.00', 50, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(3, 'Ibuprofen', '12000.00', 75, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(4, 'Vitamin C', '8000.00', 200, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(5, 'Cetirizine', '9000.00', 120, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(6, 'Antasida', '6000.00', 150, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(7, 'Loperamide', '7000.00', 60, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(8, 'Omeprazole', '18000.00', 80, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(9, 'Salbutamol', '25000.00', 40, '2024-08-22 06:22:03', '2024-08-22 06:22:03'),
(10, 'Metformin', '20000.00', 30, '2024-08-22 06:22:03', '2024-08-22 06:22:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `alamat`, `tanggal_lahir`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 'Sakuya', '123 Main St, Springfield', '2007-06-15', '081234567890', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(2, 'Tukono Yushi', '456 Elm St, Springfield', '2004-02-22', '082345678901', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(3, 'Sion', '789 Maple St, Springfield', '2003-11-30', '083456789012', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(4, 'Maeda Riku', '101 Oak St, Springfield', '2003-09-12', '084567890123', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(5, 'Jungmin', '202 Birch St, Springfield', '2005-01-09', '085678901234', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(6, 'Jaehee', '303 Cedar St, Springfield', '2006-07-21', '086789012345', '2024-08-22 07:41:29', '2024-08-22 07:41:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `wilayah_id`, `created_at`, `updated_at`) VALUES
(1, 'Park Jisung', 1, '2024-08-22 04:11:20', '2024-08-22 04:11:20'),
(2, 'Na Jaemin', 2, '2024-08-22 04:11:20', '2024-08-22 04:11:20'),
(3, 'Lee Jeno', 3, '2024-08-22 04:11:20', '2024-08-22 04:11:20'),
(4, 'Huang Renjun', 4, '2024-08-22 04:11:20', '2024-08-22 04:11:20'),
(5, 'Lee Haechan', 1, '2024-08-22 04:11:20', '2024-08-22 04:11:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `total_tagihan` decimal(10,2) NOT NULL,
  `status` enum('belum_bayar','sudah_bayar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `status` enum('terdaftar','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `pasien_id`, `dokter_id`, `tanggal_pendaftaran`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-08-22', 'terdaftar', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(2, 2, 1, '2024-08-22', 'terdaftar', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(3, 3, 7, '2024-08-22', 'terdaftar', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(4, 4, 7, '2024-08-22', 'terdaftar', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(5, 5, 6, '2024-08-22', 'terdaftar', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(6, 6, 6, '2024-08-22', 'terdaftar', '2024-08-22 07:41:29', '2024-08-22 07:41:29'),
(7, 1, 7, '2024-08-23', 'terdaftar', '2024-08-23 07:41:29', '2024-08-23 07:41:29'),
(8, 2, 7, '2024-08-23', 'selesai', '2024-08-23 07:41:29', '2024-08-23 07:41:29'),
(9, 3, 1, '2024-08-24', 'terdaftar', '2024-08-24 07:41:29', '2024-08-24 07:41:29'),
(10, 4, 1, '2024-08-24', 'selesai', '2024-08-24 07:41:29', '2024-08-24 07:41:29'),
(11, 3, 6, '2024-08-23', 'terdaftar', '2024-08-22 00:54:55', '2024-08-22 00:54:55'),
(12, 5, 7, '2024-08-20', 'selesai', '2024-08-22 00:55:34', '2024-08-22 00:55:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tindakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id`, `nama_tindakan`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 'Konsultasi Umum', '50000.00', '2024-08-22 06:14:31', '2024-08-21 23:14:49'),
(2, 'Pemeriksaan Lab', '150000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(3, 'Rontgen', '200000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(4, 'Pemeriksaan Gigi', '75000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(5, 'Vaksinasi', '100000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(6, 'Operasi Kecil', '500000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(7, 'USG', '250000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(8, 'Fisioterapi', '300000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(9, 'Pemeriksaan Mata', '60000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31'),
(10, 'Tes Darah', '80000.00', '2024-08-22 06:14:31', '2024-08-22 06:14:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_tindakan`
--

CREATE TABLE `transaksi_tindakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `tindakan_id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `total_biaya` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','dokter','pegawai','kasir') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Jung Woo Young', 'drjwooyoung@gmail.com', '$2y$10$WgXplXZJLUR/7ZaqnyOqUOboXWlRcpc4MCNDvW6wY57p5uQD6iEiG', 'dokter', '2024-08-22 01:20:14', '2024-08-21 20:53:22'),
(2, 'Lee Taeyong', 'adminltyong@gmail.com', '$2y$10$07d8ojqqIkhwaxLzOdAoYuWaL8cw4wwpNNGr/3rZ.3DhdZrRyiIhK', 'admin', '2024-08-22 01:22:30', '2024-08-22 01:22:30'),
(3, 'Choi San', 'pegawaichoisan@gmail.com', '$2y$10$/BNluuwSDGwvaa54WYVAyuSEwWoTWu7uOu1yVjEUWad63u06xIN.u', 'pegawai', '2024-08-22 01:23:26', '2024-08-22 00:13:39'),
(4, 'Jung Jae Hyun', 'kasirjjhyun@gmail.com', '$2y$10$nnDdhz0I48ACb3yyFkaeeuWqvx2XS6WmwwJY1mXdtJ.zuucuLhQX6⏎', 'kasir', '2024-08-22 01:24:19', '2024-08-22 01:24:19'),
(6, 'Moon Taeil', 'doktermoontaeil@gmail.com', 'moontaeil', 'dokter', '2024-08-22 07:45:52', '2024-08-22 07:45:52'),
(7, 'Suh Johnny ', 'dokterJohnny@gmail.com', 'suhjohnny', 'dokter', '2024-08-22 07:46:31', '2024-08-22 07:46:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama_wilayah`, `created_at`, `updated_at`) VALUES
(1, 'Bandung', '2024-08-21 21:05:58', '2024-08-21 21:07:43'),
(2, 'Jakarta', '2024-08-21 21:06:29', '2024-08-21 21:06:29'),
(3, 'Solo', '2024-08-21 21:06:46', '2024-08-21 21:06:46'),
(4, 'Cirebon', '2024-08-21 21:06:55', '2024-08-21 21:06:55'),
(5, 'Malang', '2024-08-21 23:51:23', '2024-08-21 23:51:34'),
(6, 'Surabaya', '2024-08-21 23:51:40', '2024-08-21 23:51:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pegawai_wilayah_id_foreign` (`wilayah_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayaran_pendaftaran_id_foreign` (`pendaftaran_id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftaran_pasien_id_foreign` (`pasien_id`),
  ADD KEY `pendaftaran_dokter_id_foreign` (`dokter_id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_tindakan`
--
ALTER TABLE `transaksi_tindakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_tindakan_pendaftaran_id_foreign` (`pendaftaran_id`),
  ADD KEY `transaksi_tindakan_tindakan_id_foreign` (`tindakan_id`),
  ADD KEY `transaksi_tindakan_obat_id_foreign` (`obat_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi_tindakan`
--
ALTER TABLE `transaksi_tindakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_wilayah_id_foreign` FOREIGN KEY (`wilayah_id`) REFERENCES `wilayah` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_pendaftaran_id_foreign` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftaran_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi_tindakan`
--
ALTER TABLE `transaksi_tindakan`
  ADD CONSTRAINT `transaksi_tindakan_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `transaksi_tindakan_pendaftaran_id_foreign` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`),
  ADD CONSTRAINT `transaksi_tindakan_tindakan_id_foreign` FOREIGN KEY (`tindakan_id`) REFERENCES `tindakan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

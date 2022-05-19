-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2022 pada 18.30
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmhpenggerak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama`, `alamat`, `deskripsi_singkat`, `deskripsi`, `created_at`, `updated_at`, `gambar`) VALUES
(1, 'Desa Taman Sari', 'Kelurahan Taman Sari, kecamatan Gedong Tataan, Kabupaten Pesawaran, Provinsi Lampung, Indonesia.', 'Tamansari adalah salah satu desa yang berada di wilayah kecamatan Gedong Tataan', '<p>Tamansari adalah salah satu desa yang berada di wilayah kecamatan Gedong Tataan, Kabupaten Pesawaran, Provinsi Lampung, Indonesia.<br></p>', '2022-05-19 16:04:52', '2022-05-19 16:04:52', 'desa/6db20H83Pj4PTBndpdOljoFEYO8tCH6Vq1aLbkQa.jpg'),
(2, 'Desa Sukomulyo', 'Jalan Sukomulyo IV', 'Desa Sukomulyo adalah desa yang berada di Bandar Lampung', '<p>Desa Sukomulyo adalah desa yang berada di Bandar Lampung. Desa ini memiliki banyak potensi yang belum terekspos<br></p>', '2022-05-19 16:06:34', '2022-05-19 16:06:34', 'desa/HU0B5AFg6wchAMooCGevdywHo80PXE0L749ZmwPS.jpg'),
(3, 'Desa Askomulyo', 'Jalan Askomulyo No III', 'Askomulyo merupakan desa terpencil di pesisir pantai', '<p>Askomulyo merupakan desa terpencil di pesisir pantai<br></p>', '2022-05-19 16:07:33', '2022-05-19 16:07:33', 'desa/c29vM0j7UZFYKVmseheTsjquDrPIEcILZuz6pRyk.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_potensi`
--

CREATE TABLE `desa_potensi` (
  `desa_id` bigint(20) UNSIGNED NOT NULL,
  `potensi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `desa_potensi`
--

INSERT INTO `desa_potensi` (`desa_id`, `potensi_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `potensi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `proyek_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `desa_id`, `potensi_id`, `proyek_id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'abc', NULL, NULL, 1, 'galeri/qzJEiwWwrjcQkoAO1sCel5O2nX08WkYe1eQWv6Bb.jpg', '2022-05-19 16:09:23', '2022-05-19 16:09:23'),
(2, 'abc', NULL, NULL, 1, 'galeri/5jOjOVKgcCBuNUvsVDLcDPpJbg1y9atF7iiRwPKn.jpg', '2022-05-19 16:09:23', '2022-05-19 16:09:23'),
(3, 'abc', NULL, NULL, 1, 'galeri/qb5aoVuNZe03y5kUedP444QSeV00aK2Iimqyw9iy.jpg', '2022-05-19 16:09:23', '2022-05-19 16:09:23'),
(4, 'abc', NULL, NULL, 1, 'galeri/tCstc01eeFqZHGFwybLiJ4TcK845CLJtDAGRlZ86.jpg', '2022-05-19 16:09:23', '2022-05-19 16:09:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_19_105149_create_desa_table', 1),
(5, '2022_04_20_000054_create_potensi_table', 1),
(6, '2022_04_20_001011_create_desa_potensi_table', 1),
(7, '2022_04_20_011236_create_proyek_table', 1),
(8, '2022_04_20_014553_create_pesan_masuk_table', 1),
(9, '2022_04_22_091720_create_pengaturan_web_table', 1),
(10, '2022_04_22_095142_create_galeri_table', 1),
(11, '2022_04_23_002455_add_gambar_from_desa_table', 1),
(12, '2022_04_26_130241_add_nama_instansi_from_users_table', 1),
(13, '2022_04_28_003457_create_jobs_table', 1);

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
-- Struktur dari tabel `pengaturan_web`
--

CREATE TABLE `pengaturan_web` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaturan_web`
--

INSERT INTO `pengaturan_web` (`id`, `nama`, `deskripsi`, `alamat`, `map`, `no_telepon`, `email`, `link_facebook`, `link_twitter`, `link_linkedin`, `link_path`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Penggerak', 'Rumah Penggerak merupakan web perusahaan untuk memasarkan produk-produk perusahaan tersebut.', 'Jl. Pulau Damar, Gang Kecapi. Perumahan Palem Asri No. 98i.\r\nWay Kandis, Tanjung Senang. Bandar Lampung', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15889.27810261643!2d105.290666!3d-5.368142!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9572fbc6f795b927!2sPerumahan%20Palem%20Asri!5e0!3m2!1sid!2sid!4v1652599711273!5m2!1sid!2sid', '02123124124', 'rumahpenggerak@gmail.com', 'https://facebook.com', 'https://twitter.com', 'https://linkedin.com', 'https://path.com', 'pengaturan/Uk4VrkAe8mxDMWzM0sHkUXJnt4k8gd8NY3DskcTb.png', '2022-05-19 16:02:27', '2022-05-19 16:11:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_masuk`
--

CREATE TABLE `pesan_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensi`
--

CREATE TABLE `potensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `potensi`
--

INSERT INTO `potensi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Jagung', '2022-05-19 16:03:51', '2022-05-19 16:03:51'),
(2, 'Padi', '2022-05-19 16:03:58', '2022-05-19 16:03:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desa_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_singkat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `desa_id`, `nama`, `deskripsi_singkat`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 2, 'Penangkaran Benih Jagung', 'Proyek Penangkaran Benih Jagung di desa sukomulyo', '<p>Proyek Penangkaran Benih Jagung di desa sukomulyo<br></p>', 'proyek/pAMFjjcPOHfRl1I2qPH9vcRIr7E4qaRBiAxoBoKb.jpg', '2022-05-19 16:08:04', '2022-05-19 16:08:04');

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
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `avatar`, `created_at`, `updated_at`, `nama_instansi`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$56dv34rjnAyxemyuPwRr/ujBBasqKKTg9MQll4EwWxMRRLPE.d/qC', 'admin', NULL, NULL, '2022-05-19 16:02:26', '2022-05-19 16:02:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `desa_potensi`
--
ALTER TABLE `desa_potensi`
  ADD KEY `desa_potensi_desa_id_foreign` (`desa_id`),
  ADD KEY `desa_potensi_potensi_id_foreign` (`potensi_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_desa_id_foreign` (`desa_id`),
  ADD KEY `galeri_potensi_id_foreign` (`potensi_id`),
  ADD KEY `galeri_proyek_id_foreign` (`proyek_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indeks untuk tabel `pengaturan_web`
--
ALTER TABLE `pengaturan_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyek_desa_id_foreign` (`desa_id`);

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
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengaturan_web`
--
ALTER TABLE `pengaturan_web`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `desa_potensi`
--
ALTER TABLE `desa_potensi`
  ADD CONSTRAINT `desa_potensi_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `desa_potensi_potensi_id_foreign` FOREIGN KEY (`potensi_id`) REFERENCES `potensi` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `galeri_potensi_id_foreign` FOREIGN KEY (`potensi_id`) REFERENCES `potensi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `galeri_proyek_id_foreign` FOREIGN KEY (`proyek_id`) REFERENCES `proyek` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD CONSTRAINT `proyek_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

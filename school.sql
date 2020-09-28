-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2020 at 02:41 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `telpon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Sarjono', '081234567890', 'Awiligar', '2020-06-20 00:40:51', '2020-06-20 07:39:06'),
(2, 'Erick Tjandra', '089765432111', 'Kopo Sayati', '2020-06-20 00:40:51', '2020-06-20 07:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(46) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`, `semester`, `guru_id`, `created_at`, `updated_at`) VALUES
(1, 'FMK-001', 'Farmakologi', 'Ganjil', 1, '2020-06-12 03:47:04', '2020-06-12 10:45:29'),
(2, 'KEPA-001', 'Kode Etik Profesi Apoteker', 'Ganjil', 2, '2020-06-12 03:47:04', '2020-06-12 10:45:29'),
(3, 'IR-001', 'Ilmu Resep', 'Ganjil', 2, '2020-06-17 03:48:04', '2020-06-17 10:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel_siswa`
--

INSERT INTO `mapel_siswa` (`id`, `siswa_id`, `mapel_id`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 80, '2020-06-12 03:49:17', '2020-06-12 10:47:59'),
(2, 3, 2, 75, '2020-06-12 03:49:17', '2020-06-12 08:47:59'),
(3, 2, 1, 70, '2020-06-12 03:56:22', '2020-06-12 10:55:32'),
(4, 2, 2, 75, '2020-06-12 03:56:22', '2020-06-12 10:55:32'),
(6, 23, 2, 90, '2020-06-16 02:52:59', '2020-06-16 09:52:59'),
(7, 18, 1, 90, '2020-06-16 03:03:18', '2020-06-16 10:03:18'),
(8, 18, 2, 85, '2020-06-16 03:04:01', '2020-06-16 10:04:01'),
(9, 23, 3, 95, '2020-06-17 05:22:30', '2020-06-17 10:58:23'),
(10, 1, 1, 80, '2020-06-16 22:30:46', '2020-06-17 05:30:46'),
(11, 1, 2, 80, '2020-06-16 22:30:59', '2020-06-17 05:30:59'),
(12, 1, 3, 85, '2020-06-16 22:31:10', '2020-06-17 05:31:10'),
(13, 23, 1, 90, '2020-06-17 06:03:23', '2020-06-17 13:03:23'),
(14, 2, 3, 80, '2020-06-20 02:15:13', '2020-06-20 09:15:13'),
(15, 3, 3, 85, '2020-06-20 02:15:41', '2020-06-20 09:15:41'),
(16, 4, 1, 75, '2020-06-20 02:16:01', '2020-06-20 09:16:01'),
(17, 4, 2, 75, '2020-06-20 02:16:11', '2020-06-20 09:16:11'),
(18, 4, 3, 80, '2020-06-20 02:16:21', '2020-06-20 09:16:21'),
(19, 5, 1, 75, '2020-06-20 02:16:50', '2020-06-20 09:16:50'),
(20, 5, 2, 75, '2020-06-20 02:17:01', '2020-06-20 09:17:01'),
(21, 5, 3, 80, '2020-06-20 02:17:13', '2020-06-20 09:17:13'),
(25, 6, 2, 75, '2020-06-20 02:18:11', '2020-06-20 09:18:11'),
(27, 6, 1, 75, '2020-06-20 02:18:39', '2020-06-20 09:18:39'),
(28, 6, 3, 80, '2020-06-20 02:18:48', '2020-06-20 09:18:48'),
(29, 7, 1, 75, '2020-06-20 02:19:56', '2020-06-20 09:19:56'),
(30, 7, 2, 80, '2020-06-20 02:20:05', '2020-06-20 09:20:05'),
(31, 7, 3, 85, '2020-06-20 02:20:15', '2020-06-20 09:20:15'),
(32, 8, 1, 75, '2020-06-20 02:20:43', '2020-06-20 09:20:43'),
(33, 8, 2, 75, '2020-06-20 02:20:54', '2020-06-20 09:20:54'),
(34, 8, 3, 75, '2020-06-20 02:21:03', '2020-06-20 09:21:03'),
(35, 9, 1, 75, '2020-06-20 02:21:31', '2020-06-20 09:21:31'),
(36, 9, 2, 80, '2020-06-20 02:21:39', '2020-06-20 09:21:39'),
(37, 9, 3, 80, '2020-06-20 02:21:47', '2020-06-20 09:21:47'),
(38, 10, 1, 75, '2020-06-20 02:22:09', '2020-06-20 09:22:09'),
(39, 10, 2, 75, '2020-06-20 02:22:18', '2020-06-20 09:22:18'),
(40, 10, 3, 75, '2020-06-20 02:22:26', '2020-06-20 09:22:26'),
(44, 13, 1, 75, '2020-06-20 02:23:21', '2020-06-20 09:23:21'),
(45, 13, 2, 75, '2020-06-20 02:23:29', '2020-06-20 09:23:29'),
(46, 13, 3, 75, '2020-06-20 02:23:36', '2020-06-20 09:23:36'),
(47, 14, 1, 75, '2020-06-20 02:23:59', '2020-06-20 09:23:59'),
(48, 14, 2, 75, '2020-06-20 02:24:06', '2020-06-20 09:24:06'),
(49, 14, 3, 75, '2020-06-20 02:24:14', '2020-06-20 09:24:14'),
(52, 24, 1, 80, '2020-07-08 06:24:40', '2020-07-08 13:24:40'),
(53, 24, 2, 80, '2020-07-08 06:24:53', '2020-07-08 13:24:53'),
(54, 24, 3, 80, '2020-07-08 06:25:33', '2020-07-08 13:25:33'),
(59, 27, 1, 75, '2020-07-08 06:51:39', '2020-07-08 13:51:39'),
(60, 27, 2, 80, '2020-07-08 06:51:54', '2020-07-08 13:51:54'),
(61, 27, 3, 80, '2020-07-08 06:52:43', '2020-07-08 13:52:43'),
(62, 28, 1, 75, '2020-07-11 21:09:46', '2020-07-12 04:09:46'),
(63, 28, 2, 90, '2020-07-11 21:09:57', '2020-07-12 04:09:57'),
(64, 28, 3, 80, '2020-07-11 21:10:08', '2020-07-12 04:10:08'),
(65, 11, 1, 90, '2020-07-11 21:19:54', '2020-07-12 04:19:54'),
(66, 11, 2, 80, '2020-07-11 21:20:06', '2020-07-12 04:20:06'),
(67, 11, 3, 85, '2020-07-11 21:20:16', '2020-07-12 04:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_23_032534_create_siswa_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ini adalah berita pertama', '<p>Ini adalah berita pertama yang diinput secara manual</p>', 'ini-berita-pertama', '', '2020-07-06 01:42:03', '2020-07-06 08:42:38'),
(2, 1, 'Pengumuman Kelulusan TA 2019/2020', '<p> Berikut Ini adalah nama - nama siswa SMK YPF yang lulus di tahun ajaran 2019/2020 </p>', 'Pengumuman-Kelulusan-TA-2019/2020', '', '2020-07-06 09:26:33', '2020-07-06 16:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `agama`, `alamat`, `avatar`, `tempat_lahir`, `nama_ayah`, `nama_ibu`, `nisn`, `tlp`, `jurusan`, `created_at`, `updated_at`, `tanggal_lahir`) VALUES
(3, 0, 'Aldi', 'Septian Hidayat', 'L', 'Islam', 'Ujungberung Timur 110/15', NULL, 'Bandung', 'Usep', 'Hasanah', '9998761237', '087645650007', 'Farmasi Klinis dan Komunitas', '2020-05-25 23:48:12', '2020-05-25 23:48:12', '2020-05-15'),
(4, 0, 'Andika', 'Mochammad Yusuf', 'L', 'Islam', 'Cikole Raya, Lembang Permai 12', NULL, 'Bandung', 'Rustarman', 'Rosa', '9998761238', '087645650008', 'Analis Kimia', '2020-05-25 23:49:57', '2020-05-25 23:49:57', '2020-05-16'),
(5, 0, 'Ari', 'Nugraha', 'L', 'Islam', 'Dipatiukur 12', NULL, 'Bandung', 'Dadang', 'Uli', '9998761239', '087645650009', 'Analis Kimia', '2020-05-26 07:34:08', '2020-05-26 07:34:08', '2019-12-01'),
(6, 0, 'Artha', 'Legawa', 'L', 'Islam', 'Ciumbuleuit', NULL, 'Bandung', 'Ardiansyah', 'Arinta', '9998761240', '087645650010', 'Farmasi Industri', '2020-05-26 07:35:31', '2020-05-26 07:35:31', '2020-01-01'),
(7, 0, 'Asep', 'Iwan Setiawan', 'L', 'Islam', 'Padasuka Regency 125/25', 'FB_IMG_1587775405375.jpg', 'Bandung', 'UU Rukmana', 'Sukaesih', '9998761211', '087645650011', 'Analis Kimia', '2020-05-26 07:38:00', '2020-06-20 02:19:43', '2019-11-11'),
(8, 0, 'Asep', 'Shaffan Maulana Rohendi', 'L', 'Islam', 'Oraytapa, Sukamiskin', NULL, 'Sumedang', 'Dedi Rohendi', 'Elisa', '9998761212', '087645650012', 'Analis Kimia', '2020-05-26 07:40:24', '2020-05-26 07:40:24', '2020-05-02'),
(9, 0, 'Candra', 'Ari Yulianto', 'L', 'Islam', 'Asep Diamond (Asep Berlian) 123/23 RT03/RW14', NULL, 'Bandung', 'Siswanto', 'Tukiyem', '9998761213', '087645650013', 'Analis Kimia', '2020-05-26 07:48:24', '2020-05-26 07:48:24', '2020-05-09'),
(11, 0, 'Danu', 'Dwi Anggara', 'L', 'Islam', 'Gg. Tilil 12/12 RT 01 / RW 12', NULL, 'Bandung', 'Didi Riyadi', 'Dita Anugrah', '9998761215', '087645650015', 'Farmasi Industri', '2020-05-26 07:51:30', '2020-05-26 07:51:30', '2020-05-23'),
(13, 0, 'Deri', 'Sutisna', 'L', 'Islam', 'Sukaluyu', NULL, 'Bandung', 'Entis Sutisna', 'Sukmawati', '9998761216', '087645650016', 'Farmasi Klinis dan Komunitas', '2020-05-28 23:10:40', '2020-05-28 23:10:40', '2020-05-06'),
(23, 17, 'Rifka', 'Permana Putri', 'P', 'Islam', 'Ujungberung', 'FB_IMG_1493365574569.jpg', 'Madiun', 'Wahyono', 'Ismi', '9987658909', '098765432112', 'Farmasi Klinis dan Komunitas', '2020-06-13 01:11:41', '2020-06-13 01:11:41', '1995-02-21'),
(24, 18, 'Nadhea', 'Tanjung', 'P', 'Islam', 'Jagakarsa Timur, 155/58 RT 02 RW 11, Jakarta Barat, DKI Jakarta', NULL, 'Padang', 'Abdullah Baghier', 'Siti Khadijah Tanjung', '999040498', '085432112345', 'Farmasi Klinis dan Komunitas', '2020-07-01 02:52:29', '2020-07-01 02:52:29', '1998-04-04'),
(27, 19, 'Randi', 'Ramadhan', 'L', 'Islam', 'Cicaheum', 'Randy.jpeg', 'Bandung', 'Endang', 'Elis', '999070720', '089765432111', 'Analis Kimia', '2020-07-06 10:19:07', '2020-07-08 06:59:10', '2020-07-07'),
(28, 20, 'Nicky', 'Roosovelt', 'L', 'Protestan', 'Tillburg', 'MI0004180247.jpg', 'Tillburg', 'Franklin Roosovelt', 'Maria Van Der Berg', '999170897', '086543212345', 'Analis Kimia', '2020-07-11 02:37:36', '2020-07-11 21:09:33', '1999-08-17'),
(29, 21, 'Ahmed', 'Helmy', 'L', 'Islam', 'Cikaso', NULL, 'Bandung', 'Helmy Yahya', 'Helvianti', '999210819', '082813456789', 'Farmasi Industri', '2020-07-11 22:59:10', '2020-07-11 22:59:10', '1999-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Alghifari', 'ramdhanalgie12@gmail.com', NULL, NULL, '$2y$10$LzE7R4Eix7Q.x1rl6t6Dh.91OIrKXF/uRkOxtwCjlq.8znfY0t1H2', 'q5516uTJbOGm8suq0NsxNAyL4kfB89ulb0xEH5jC8JGeYOudauKyx5RR6JOt', '2020-05-30 00:49:58', '2020-05-30 00:49:58'),
(9, 'siswa', 'Benny', 'sapriobenzpardede@gmail.com', NULL, NULL, '$2y$10$or8QHGa4VgAftUvJFarp5.7f8HSOdaeHrBlfkvjv90tJXi8o5ARX2', 'i44mevw2cBpIWopWlexAqoNymYKFl5Y6dJ9O2vc3CNxV4FIsm7fvic0gvZJt', '2020-06-05 07:06:01', '2020-06-05 07:06:01'),
(17, 'siswa', 'Rifka', 'rifkapermanaputri@gmail.com', NULL, NULL, '$2y$10$uszUWZm3agBbZKiy0fsX8e4IuRsVs1fjObc1pPzIMOY.GH1m07hIG', 'F5RLAiSx6Qf1TUQIdkMmF1YGz6CEGvQoEaBNgQLeWyQMH6WEbrF7ra5zx9gn', '2020-06-13 01:11:41', '2020-06-13 01:11:41'),
(18, 'siswa', 'Nadhea', 'nadheaptanjung04@gmail.com', NULL, NULL, '$2y$10$n5daAPr8pPxifMzMgzQqP.0UBgHbNoP94917HheOaXMuNAIstEYMy', 'E0AR7LsUb75b7J5zSOTjeAsY0ZmOlXG3cgZV6CWi58U45mdd6Gugvn98K7Ej', '2020-07-01 02:52:29', '2020-07-01 02:52:29'),
(19, 'siswa', 'Randi', 'Rankenzaki22@gmail.com', NULL, NULL, '$2y$10$2iVx.3mm4a.4qWmibRIigOuPFGxyWsr7aM3YPBjJZp6rULUHcfRQq', '4etCVwrgI79rmldSfVutmsWsZRncHYwxAFiqFnolZdiXToHq42UzAwxtv28n', '2020-07-06 10:19:07', '2020-07-06 10:19:07'),
(20, 'siswa', 'Nicky', 'nickyromero12@gmail.com', NULL, NULL, '$2y$10$Pi1TBF9aYJY9fE542eu/v.3OryF7cKCKNpnGV8r1d3igJaeTUm9Vy', 'H48NG3AM0JssalgMkvWDiQ2TJdP3ANoeUgdJCqEmURsAP8PwbMh3c7aj7WkZ', '2020-07-11 02:37:35', '2020-07-11 02:37:35'),
(21, 'siswa', 'Ahmed', 'ahmedhelmy99@gmail.com', NULL, NULL, '$2y$10$0aMrmu9f419u.nmfLDq8W.R7wS8gWXKdha70Js57koE3n7SlmA6jS', 'qgxzRJnVFiKMMDTxiKadrUUeVYlcIMLGUWyAZP6PmFSgKyU9HawGVFcPzMEM', '2020-07-11 22:59:10', '2020-07-11 22:59:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `siswa_tlp_unique` (`tlp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

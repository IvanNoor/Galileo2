-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 12:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galileo`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_nilai`
--

CREATE TABLE `detail_nilai` (
  `id_detail` int(10) NOT NULL,
  `id_siswa` int(4) NOT NULL,
  `id_pelajaran` int(10) NOT NULL,
  `nilai1` int(4) DEFAULT NULL,
  `nilai2` int(4) DEFAULT NULL,
  `nilai3` int(4) DEFAULT NULL,
  `nilai4` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_nilai`
--

INSERT INTO `detail_nilai` (`id_detail`, `id_siswa`, `id_pelajaran`, `nilai1`, `nilai2`, `nilai3`, `nilai4`) VALUES
(1, 7, 1, 50, 30, NULL, NULL),
(2, 7, 2, 40, 40, 40, 40),
(23, 17, 1, 70, NULL, NULL, NULL),
(24, 17, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kode_soal`
--

CREATE TABLE `kode_soal` (
  `kode` varchar(5) NOT NULL,
  `id_pelajaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_soal`
--

INSERT INTO `kode_soal` (`kode`, `id_pelajaran`) VALUES
('A-126', 1),
('A-127', 2),
('A-129', 1),
('A-120', 1),
('A-121', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_08_123452_create_posts_table', 1),
(4, '2017_10_08_151216_create_siswas_table', 2),
(5, '2017_10_09_021510_create_siswa2s_table', 3),
(6, '2017_10_09_053925_create_pos2s_table', 4),
(7, '2017_10_09_114228_create_post_table', 4),
(8, '2017_10_09_114750_create_pegawais_table', 4),
(9, '2017_10_17_030329_create_pelajarans_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JenisKelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TempatLahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TglLahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoKtp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `Nama`, `Alamat`, `JenisKelamin`, `TempatLahir`, `TglLahir`, `NoKtp`, `created_at`, `updated_at`) VALUES
(1, 'ivan noor', 'jln kalibata', 'laki laki', 'banyuwangi', '14 maret 1997', '123123123', '2017-10-09 04:54:55', '2017-10-09 04:54:55'),
(2, 'ivan', 'banyuwangi', 'laki laki', 'banyuwangi', '14 maret 1997', '13715', '2017-10-09 23:14:58', '2017-10-09 23:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `pelajarans`
--

CREATE TABLE `pelajarans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Pelajaran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kelas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelajarans`
--

INSERT INTO `pelajarans` (`id`, `Pelajaran`, `Kelas`, `Jurusan`, `created_at`, `updated_at`) VALUES
(1, 'TPA', '12', 'Ipa', '2017-10-17 00:59:04', '2017-10-17 00:59:04'),
(2, 'Matematika Dasar', '12', 'Ipa', '2017-10-17 00:59:23', '2017-10-17 00:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `No` tinyint(4) NOT NULL,
  `jawaban` enum('A','B','C','D') DEFAULT NULL,
  `jawaban_benar` int(3) DEFAULT NULL,
  `jawaban_salah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `kode`, `No`, `jawaban`, `jawaban_benar`, `jawaban_salah`) VALUES
(93, 'A-126', 1, 'D', 1, 0),
(94, 'A-126', 2, 'C', 1, 0),
(95, 'A-126', 3, 'C', 1, 2),
(96, 'A-126', 4, 'D', 1, 2),
(97, 'A-126', 5, 'D', 0, 1),
(98, 'A-126', 6, 'D', 1, 0),
(99, 'A-126', 7, 'C', 2, 1),
(100, 'A-126', 8, 'D', 1, 0),
(101, 'A-126', 9, 'C', 2, 1),
(102, 'A-126', 10, 'C', 2, 1),
(103, 'A-127', 1, 'B', 17, 18),
(104, 'A-127', 2, 'C', 5, 4),
(105, 'A-127', 3, 'D', 0, 1),
(106, 'A-127', 4, 'B', 1, 2),
(107, 'A-127', 5, 'B', 0, 1),
(108, 'A-127', 6, 'C', 23, 22),
(109, 'A-127', 7, 'C', 22, 21),
(110, 'A-127', 8, 'B', 1, 2),
(111, 'A-127', 9, 'C', 21, 20),
(112, 'A-127', 10, 'B', 0, 1),
(113, 'A-129', 1, 'D', 0, 1),
(114, 'A-129', 2, 'C', 0, 1),
(115, 'A-129', 3, 'C', 1, 0),
(116, 'A-129', 4, 'D', 0, 1),
(117, 'A-129', 5, 'C', 1, 0),
(118, 'A-129', 6, 'D', 1, 0),
(119, 'A-129', 7, 'C', 1, 0),
(120, 'A-129', 8, 'B', 0, 1),
(121, 'A-129', 9, 'C', 1, 0),
(122, 'A-129', 10, 'D', 0, 1),
(123, 'A-120', 1, 'D', 0, 1),
(124, 'A-120', 2, 'C', 0, 1),
(125, 'A-120', 3, 'C', 1, 0),
(126, 'A-120', 4, 'B', 0, 1),
(127, 'A-120', 5, 'C', 1, 0),
(128, 'A-120', 6, 'B', 0, 1),
(129, 'A-120', 7, 'C', 1, 0),
(130, 'A-120', 8, 'C', 0, 1),
(131, 'A-120', 9, 'B', 0, 1),
(132, 'A-120', 10, 'B', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id_siswa` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SekolahAsal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JenisKelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prestasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrangTua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id_siswa`, `Nama`, `SekolahAsal`, `Kelas`, `Alamat`, `JenisKelamin`, `Prestasi`, `OrangTua`, `Contact`, `created_at`, `updated_at`) VALUES
(7, 'mohammad mimin', 'sman 1 karanganyar', '11', 'jln alamat', 'laki', '3besar', 'mukilist', '0878566222', '2017-10-31 22:21:08', '2017-10-31 22:21:08'),
(17, 'masur', 'sman 1 glenm', '10', 'jln kihajar', 'perempuan', '3besar', 'ayah', 'ss', '2017-11-05 00:26:34', '2017-11-05 00:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `tittle` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `validasi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `tittle`, `description`, `validasi`) VALUES
(1, 'new', 'edit 3', 'ya'),
(2, 'adsfss', 'editanu', 'ya'),
(4, 'lalal', 'edit2 terakgit', 'tidak'),
(7, 'wish', 'new es', 'ya'),
(8, 'new', 'ini udah diedit', 'tidak'),
(9, 'asd', 'asd', 'ya'),
(10, 'sd', 'sdds', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

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
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajarans`
--
ALTER TABLE `pelajarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Pelajaran` (`Pelajaran`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `detail_nilai`
--
ALTER TABLE `detail_nilai`
  MODIFY `id_detail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelajarans`
--
ALTER TABLE `pelajarans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

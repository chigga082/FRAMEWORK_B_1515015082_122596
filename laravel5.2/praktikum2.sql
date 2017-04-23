-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 01:23 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `praktikum2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'Chrisman Bonor Sinaga', '1515015082', 'jalan perjuangan', 1, '2017-03-16 12:41:06', '2017-03-16 12:41:06'),
(2, 'Dwayne Johnson', '151501508211', 'jalan perjuangan 1', 1, '2017-03-16 12:41:20', '2017-03-16 12:41:20'),
(4, 'omegat', 'aasd', 'asdasgas', 11, '2017-04-11 02:01:32', '2017-04-11 02:01:32'),
(5, 'Mas once', '124150010', 'jalani aja gan', 12, '2017-04-11 23:09:08', '2017-04-11 23:09:08'),
(6, 'Elwin haner', '214012512', 'syngates', 13, '2017-04-11 23:09:39', '2017-04-11 23:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_matakuliah`
--

CREATE TABLE IF NOT EXISTS `dosen_matakuliah` (
  `id` int(10) unsigned NOT NULL,
  `dosen_id` int(10) unsigned NOT NULL,
  `matakuliah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen_matakuliah`
--

INSERT INTO `dosen_matakuliah` (`id`, `dosen_id`, `matakuliah_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-03-16 13:07:53', '2017-03-16 13:07:53'),
(2, 2, 3, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 5, 4, '2017-04-11 23:11:48', '2017-04-11 23:11:48'),
(5, 1, 5, '2017-04-11 23:12:07', '2017-04-11 23:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_matakuliah`
--

CREATE TABLE IF NOT EXISTS `jadwal_matakuliah` (
  `id` int(10) unsigned NOT NULL,
  `mahasiswa_id` int(10) unsigned NOT NULL,
  `ruangan_id` int(10) unsigned NOT NULL,
  `dosen_matakuliah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwal_matakuliah`
--

INSERT INTO `jadwal_matakuliah` (`id`, `mahasiswa_id`, `ruangan_id`, `dosen_matakuliah_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 3, '2017-03-16 13:17:11', '2017-04-11 01:54:28'),
(2, 2, 1, 3, NULL, '2017-04-11 02:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'Chrisman Bonor Sinaga', '1515015082', 'jalan perjuangan', 1, '2017-03-16 13:13:15', '2017-03-16 13:13:15'),
(2, 'Udin tamvan', '1515101500', 'Uvuvvwevwevwe Onyetewevwe ogwemubwem ossas', 3, '2017-04-04 08:00:00', NULL),
(3, 'Reza Arap Oktovian', '11231412', 'gamers ganteng idaman', 1, NULL, NULL),
(4, '1111', '1111', '1111', 6, '2017-04-04 18:23:00', '2017-04-04 18:23:00'),
(6, 'popaaa', '1919199', 'alalalal', 8, '2017-04-05 13:24:03', '2017-04-11 01:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `title`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Visual', 'wajib', '2017-03-16 12:54:19', '2017-03-16 12:54:19'),
(2, 'Framework', 'wajib', NULL, NULL),
(3, 'SMBD', 'wajib', NULL, NULL),
(4, 'Multimedia', 'pilihan', '2017-04-11 23:10:36', '2017-04-11 23:10:36'),
(5, 'Komputer Masyarakat', 'pilihan', '2017-04-11 23:11:10', '2017-04-11 23:11:10'),
(6, 'smack down', 'pilihan', '2017-04-12 21:23:43', '2017-04-12 21:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_09_052644_buat_table_pengguna', 1),
('2017_03_10_140730_buat_tabel_dosen', 1),
('2017_03_10_140747_buat_tabel_mahasiswa', 1),
('2017_03_10_140804_buat_tabel_ruangan', 1),
('2017_03_10_140827_buat_tabel_matakuliah', 1),
('2017_03_10_140852_buat_tabel_dosen_matakuliah', 1),
('2017_03_10_140915_buat_tabel_jadwal_matakuliah', 1),
('2017_04_12_084036_buat_tabel_orang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE IF NOT EXISTS `orang` (
  `id` int(10) unsigned NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `Name`, `Country`) VALUES
(1, 'Aubrey', 'Cambodia'),
(2, 'Gloria', 'Saint Pierre and Miquelon'),
(3, 'Amery', 'Turkmenistan'),
(4, 'Robert', 'Zimbabwe'),
(5, 'Ifeoma', 'Namibia'),
(6, 'Hoyt', 'Chile'),
(7, 'Yeo', 'Brunei'),
(8, 'Erich', 'Marshall Islands'),
(9, 'Amber', 'Finland'),
(10, 'Ifeoma', 'Curaçao'),
(11, 'Sybill', 'Antigua and Barbuda'),
(12, 'Alice', 'Saint Lucia'),
(13, 'Edan', 'Bermuda'),
(14, 'Keely', 'Nicaragua'),
(15, 'Lee', 'Antigua and Barbuda'),
(16, 'Brenda', 'Tanzania'),
(17, 'Nell', 'Romania'),
(18, 'Meghan', 'Serbia'),
(19, 'Lisandra', 'Japan'),
(20, 'Aimee', 'Korea, South'),
(21, 'Cassidy', 'Egypt'),
(22, 'Reagan', 'Mayotte'),
(23, 'Medge', 'Mauritius'),
(24, 'Leo', 'Guam'),
(25, 'Aidan', 'Rwanda'),
(26, 'Eugenia', 'El Salvador'),
(27, 'Grace', 'Burkina Faso'),
(28, 'Vernon', 'Nicaragua'),
(29, 'Barry', 'Sierra Leone'),
(30, 'Amber', 'Liberia'),
(31, 'Renee', 'Togo'),
(32, 'Ivan', 'Azerbaijan'),
(33, 'Brynne', 'Cambodia'),
(34, 'Shaeleigh', 'Oman'),
(35, 'Patrick', 'Tuvalu'),
(36, 'Avram', 'Macedonia'),
(37, 'Uma', 'Georgia'),
(38, 'Valentine', 'El Salvador'),
(39, 'Susan', 'Cape Verde'),
(40, 'Hanna', 'Malawi');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jon_dorr', '.....', NULL, '2017-03-15 21:59:12', '2017-03-24 18:05:05'),
(3, 'Chrisman Bonor Sinaga', '1515015082', NULL, '2017-03-15 22:06:02', '2017-03-15 22:06:02'),
(4, 'chigga', 'chigga', 't4VeALgnxEfk08u4CiwHtm1OR226TvN3jCZlzNJ4wWvAVy8dzTAS0hMlbZdt', '2017-03-24 22:31:42', '2017-04-20 01:12:19'),
(5, 'cnaga', 'naganaga', NULL, '2017-03-26 18:22:02', '2017-03-26 18:22:02'),
(6, '1111', '1111', NULL, '2017-04-05 02:23:00', '2017-04-05 02:23:00'),
(8, 'ppap', 'lalala', NULL, '2017-04-05 21:24:03', '2017-04-11 01:31:51'),
(10, 'beibih', 'beibih', NULL, '2017-04-10 17:38:06', '2017-04-10 17:38:06'),
(11, 'lalaland', 'lalalaaa', NULL, '2017-04-11 02:01:31', '2017-04-11 02:01:47'),
(12, 'oncecelalucetia', 'macacih', NULL, '2017-04-11 23:09:07', '2017-04-11 23:09:07'),
(13, 'syngates', 'syngates', NULL, '2017-04-11 23:09:39', '2017-04-11 23:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '404', '2017-03-16 12:59:24', '2017-03-16 12:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`), ADD KEY `dosen_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  ADD PRIMARY KEY (`id`), ADD KEY `dosen_matakuliah_dosen_id_foreign` (`dosen_id`), ADD KEY `dosen_matakuliah_matakuliah_id_foreign` (`matakuliah_id`);

--
-- Indexes for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  ADD PRIMARY KEY (`id`), ADD KEY `jadwal_matakuliah_mahasiswa_id_foreign` (`mahasiswa_id`), ADD KEY `jadwal_matakuliah_ruangan_id_foreign` (`ruangan_id`), ADD KEY `jadwal_matakuliah_dosen_matakuliah_id_foreign` (`dosen_matakuliah_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`), ADD KEY `mahasiswa_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
ADD CONSTRAINT `dosen_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);

--
-- Constraints for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
ADD CONSTRAINT `dosen_matakuliah_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
ADD CONSTRAINT `dosen_matakuliah_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`);

--
-- Constraints for table `jadwal_matakuliah`
--
ALTER TABLE `jadwal_matakuliah`
ADD CONSTRAINT `jadwal_matakuliah_dosen_matakuliah_id_foreign` FOREIGN KEY (`dosen_matakuliah_id`) REFERENCES `dosen_matakuliah` (`id`),
ADD CONSTRAINT `jadwal_matakuliah_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`),
ADD CONSTRAINT `jadwal_matakuliah_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangan` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `mahasiswa_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

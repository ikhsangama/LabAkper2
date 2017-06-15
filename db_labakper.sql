-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 11:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_labakper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(35) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `kode_alatbahan` varchar(10) DEFAULT NULL,
  `nama_alatbahan` varchar(50) NOT NULL,
  `foto_alatbahan` varchar(255) DEFAULT NULL,
  `spesifikasi` text,
  `stok` int(4) NOT NULL DEFAULT '0',
  `dipinjam` int(4) NOT NULL DEFAULT '0',
  `total` int(4) NOT NULL DEFAULT '0',
  `keterangan` text,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id` int(11) NOT NULL,
  `kode_alatbahan` varchar(10) DEFAULT NULL,
  `nama_alatbahan` varchar(50) NOT NULL,
  `foto_alatbahan` varchar(255) DEFAULT NULL,
  `spesifikasi` text,
  `stok` int(4) NOT NULL DEFAULT '0',
  `dipinjam` int(4) NOT NULL DEFAULT '0',
  `total` int(4) NOT NULL DEFAULT '0',
  `keterangan` text,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `foto_dosen` varchar(255) NOT NULL,
  `telp` int(20) NOT NULL,
  `setuju` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instruksi_kerja`
--

CREATE TABLE `instruksi_kerja` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text,
  `file_ik` varchar(255) DEFAULT NULL,
  `kategori_ik` enum('IK Alat','IK Kep. Anak','IK Kep. Dasar','IK Kep. Maternitas','IK Medikal Bedah') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruksi_kerja`
--

INSERT INTO `instruksi_kerja` (`id`, `judul`, `deskripsi`, `file_ik`, `kategori_ik`, `created_at`, `updated_at`) VALUES
(1, 'Cara Penggunaan Doppler Fetus Detector', 'qweqwe', 'Cara Penggunaan Doppler Fetus Detector-1485622579.pdf', 'IK Alat', '2017-01-26 13:19:03', '2017-03-06 07:50:38'),
(2, 'Instruksi Kerja Pemberian Vaksin', 'qweqweqwe', 'Instruksi Kerja Pemberian Vaksin-1485624749.pdf', 'IK Kep. Anak', '2017-01-26 16:24:22', '2017-01-28 10:32:29'),
(3, 'Instruksi Kerja Katerisasi Urin', 'qweeeeeeee', '', 'IK Kep. Dasar', '2017-01-26 17:22:26', NULL),
(4, 'IK MELAKUKAN PALPASI LEOPOLD I-IV', 'qweq', '', 'IK Kep. Maternitas', '2017-01-26 17:22:26', '2017-03-02 01:04:59'),
(7, 'IK Pengukuran Antopometri Pada Bayi & Anak', 'wwwwwwwwwwwwwwwwwwwwwwwwwwww', 'IK Pengukuran Antopometri Pada Bayi & Anak-1485625622.pdf', 'IK Kep. Anak', '2017-01-27 08:42:50', '2017-01-28 10:47:02'),
(12, 'IK Advanced Injection Arm', NULL, 'IK Advanced Injection Arm-1485622671.pdf', 'IK Alat', '2017-01-28 03:22:26', '2017-01-28 09:57:51'),
(13, 'Batuk Efektif', NULL, 'Batuk Efektif-1485605203.pdf', 'IK Medikal Bedah', '2017-01-28 05:06:43', '2017-01-28 05:06:43'),
(15, 'IK Female Catheterization Simulator', NULL, 'IK Female Catheterization Simulator-1485622858.pdf', 'IK Alat', '2017-01-28 08:20:52', '2017-01-28 10:00:58'),
(16, 'IK Intradermal Injection Simulator', NULL, 'IK Intradermal Injection Simulator-1485622946.pdf', 'IK Alat', '2017-01-28 10:02:26', '2017-01-28 10:02:26'),
(17, 'IK Intramuscular Injection Simulator', NULL, 'IK Intramuscular Injection Simulator-1485623195.pdf', 'IK Alat', '2017-01-28 10:06:35', '2017-01-28 10:06:35'),
(18, 'IK Suture Arm Simulator', NULL, 'IK Suture Arm Simulator-1485623746.pdf', 'IK Alat', '2017-01-28 10:11:11', '2017-01-28 10:15:46'),
(19, 'IK Laerdal Neonatal Intubation Trainer', NULL, 'IK Laerdal Neonatal Intubation Trainer-1485623878.pdf', 'IK Alat', '2017-01-28 10:17:58', '2017-01-28 10:17:58'),
(20, 'IK Male Catheterization Simulator', NULL, 'IK Male Catheterization Simulator-1485623966.pdf', 'IK Alat', '2017-01-28 10:19:26', '2017-01-28 10:19:26'),
(21, 'IK Obstetrical Manikin', NULL, 'IK Obstetrical Manikin-1485624058.pdf', 'IK Alat', '2017-01-28 10:20:58', '2017-01-28 10:20:58'),
(22, 'IK Patient Care Simulator Sakura II', NULL, 'IK Patient Care Simulator Sakura II-1485624105.pdf', 'IK Alat', '2017-01-28 10:21:45', '2017-01-28 10:21:45'),
(23, 'IK Prosedur Pemakaian Microscope PC 102B', NULL, 'IK Prosedur Pemakaian Microscope PC 102B-1485624203.pdf', 'IK Alat', '2017-01-28 10:23:23', '2017-01-28 10:23:23'),
(24, 'IK Prostate Examination Simulator', NULL, 'IK Prostate Examination Simulator-1485624256.pdf', 'IK Alat', '2017-01-28 10:24:16', '2017-01-28 10:24:16'),
(25, 'IK Pengukuran Kebutuhan Cairan Anak', NULL, 'IK Pengukuran Kebutuhan Cairan Anak-1485625899.pdf', 'IK Kep. Anak', '2017-01-28 10:51:39', '2017-01-28 10:51:39'),
(26, 'IK Penilaian Pengukuran Denver II (DDST)', NULL, 'IK Penilaian Pengukuran Denver II (DDST)-1485626273.pdf', 'IK Kep. Anak', '2017-01-28 10:57:53', '2017-01-28 10:57:53'),
(27, 'coba', NULL, 'coba-1488531946.pdf', 'IK Medikal Bedah', '2017-03-03 02:05:46', '2017-03-03 02:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `ktm` varchar(255) NOT NULL,
  `telp` int(20) NOT NULL,
  `setuju` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `ktm`, `telp`, `setuju`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'mhsdiii', '123123123', '123123123-1497561416.png', 123123123, 0, '2017-06-15 21:17:06', '2017-06-15 21:17:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('qwe@email.com', '$2y$10$JBIS0Sugzg2LMBBTEJ4Y9O80nokarNcRqPG70GjQe/YHmJ.w2.Gv.', '2017-01-29 01:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` tinyint(1) DEFAULT '0',
  `token` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`, `token`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '123123123', 'mhsdiii@email.com', '$2y$10$OzYs9VbgRZlM6sCXL92kmuXHLJ5sRqlJUuJxYwvN0Pc5ymNkI9ZmS', 3, 'Jjho3n8sSj', 1, 'n2YN3NgWuEcRJKOAjPwevvjXQrBhhnjPz4DJKeGjT4iPTwKTBpLZSRKG8O3U', '2017-06-15 21:17:06', '2017-06-15 21:20:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`user_id`);

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `kategori_id_2` (`kategori_id`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `instruksi_kerja`
--
ALTER TABLE `instruksi_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instruksi_kerja`
--
ALTER TABLE `instruksi_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 09:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_jecksen`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE `absens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_krs` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `p1` int(11) DEFAULT 0,
  `p2` int(11) DEFAULT 0,
  `p3` int(11) DEFAULT 0,
  `p4` int(11) DEFAULT 0,
  `p5` int(11) DEFAULT 0,
  `p6` int(11) DEFAULT 0,
  `p7` int(11) DEFAULT 0,
  `p8` int(11) DEFAULT 0,
  `p9` int(11) DEFAULT 0,
  `p10` int(11) DEFAULT 0,
  `p11` int(11) DEFAULT 0,
  `p12` int(11) DEFAULT 0,
  `p13` int(11) DEFAULT 0,
  `p14` int(11) DEFAULT 0,
  `p15` int(11) DEFAULT 0,
  `p16` int(11) DEFAULT 0,
  `p17` int(11) DEFAULT 0,
  `p18` int(11) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absens`
--

INSERT INTO `absens` (`id`, `id_krs`, `id_mahasiswa`, `id_schedule`, `id_ta`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 17, 12, 26, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 04:36:22', '2024-06-18 04:36:22'),
(16, 18, 12, 27, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 04:36:22', '2024-06-18 04:36:22'),
(17, 19, 12, 28, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 04:36:22', '2024-06-18 04:36:22'),
(18, 20, 13, 26, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 04:37:20', '2024-06-18 04:37:20'),
(19, 21, 13, 27, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 04:37:20', '2024-06-18 04:37:20'),
(20, 22, 13, 28, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 04:37:20', '2024-06-18 04:37:20'),
(21, 23, 12, 29, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 07:24:26', '2024-06-18 07:24:26'),
(22, 24, 13, 29, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2024-06-18 07:24:46', '2024-06-18 07:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `detail_schedule`
--

CREATE TABLE `detail_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `tanggal_pertemuan` date NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `status_detail_schedule` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_schedule`
--

INSERT INTO `detail_schedule` (`id`, `id_schedule`, `tanggal_pertemuan`, `pertemuan`, `status_detail_schedule`, `deleted_at`, `created_at`, `updated_at`) VALUES
(65, 26, '2024-06-24', 1, 1, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(66, 26, '2024-07-01', 2, 1, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(67, 26, '2024-07-08', 3, 1, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(68, 26, '2024-07-15', 4, 1, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(69, 26, '2024-07-22', 5, 1, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(70, 26, '2024-07-29', 6, 1, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(71, 26, '2024-08-05', 7, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(72, 26, '2024-08-12', 8, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(73, 26, '2024-08-19', 9, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(74, 26, '2024-08-26', 10, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(75, 26, '2024-09-02', 11, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(76, 26, '2024-09-09', 12, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(77, 26, '2024-09-16', 13, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(78, 26, '2024-09-23', 14, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(79, 26, '2024-09-30', 15, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(80, 26, '2024-10-07', 16, 0, NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(81, 27, '2024-06-24', 1, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(82, 27, '2024-07-01', 2, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(83, 27, '2024-07-08', 3, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(84, 27, '2024-07-15', 4, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(85, 27, '2024-07-22', 5, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(86, 27, '2024-07-29', 6, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(87, 27, '2024-08-05', 7, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(88, 27, '2024-08-12', 8, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(89, 27, '2024-08-19', 9, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(90, 27, '2024-08-26', 10, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(91, 27, '2024-09-02', 11, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(92, 27, '2024-09-09', 12, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(93, 27, '2024-09-16', 13, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(94, 27, '2024-09-23', 14, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(95, 27, '2024-09-30', 15, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(96, 27, '2024-10-07', 16, 0, NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(97, 28, '2024-06-25', 1, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(98, 28, '2024-07-02', 2, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(99, 28, '2024-07-09', 3, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(100, 28, '2024-07-16', 4, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(101, 28, '2024-07-23', 5, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(102, 28, '2024-07-30', 6, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(103, 28, '2024-08-06', 7, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(104, 28, '2024-08-13', 8, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(105, 28, '2024-08-20', 9, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(106, 28, '2024-08-27', 10, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(107, 28, '2024-09-03', 11, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(108, 28, '2024-09-10', 12, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(109, 28, '2024-09-17', 13, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(110, 28, '2024-09-24', 14, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(111, 28, '2024-10-01', 15, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(112, 28, '2024-10-08', 16, 0, NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(113, 29, '2024-06-26', 1, 1, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(114, 29, '2024-07-03', 2, 1, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(115, 29, '2024-07-10', 3, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(116, 29, '2024-07-17', 4, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(117, 29, '2024-07-24', 5, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(118, 29, '2024-07-31', 6, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(119, 29, '2024-08-07', 7, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(120, 29, '2024-08-14', 8, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(121, 29, '2024-08-21', 9, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(122, 29, '2024-08-28', 10, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(123, 29, '2024-09-04', 11, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(124, 29, '2024-09-11', 12, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(125, 29, '2024-09-18', 13, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(126, 29, '2024-09-25', 14, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(127, 29, '2024-10-02', 15, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59'),
(128, 29, '2024-10-09', 16, 0, NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honor` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nidn`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `telp`, `email`, `jenis_kelamin`, `honor`, `id_prodi`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1102110, 'Robet, M.Kom', 'Kisaran', '2016-10-01', 'TPO LK V', 'Buddha', '082274123456', 'winp28@gmail.com', 'L', 100000, 2, 'images.jpg-1718599704.jpg', NULL, '2021-01-08 06:23:18', '2024-06-18 05:49:40'),
(2, 1102111, 'Octara Pribadi, M.Kom', 'tanjungbalai', '2018-01-30', 'STMIK', 'Islam', '082274567890', 'winp28@gmail.com', 'L', 1000000, 2, 'images.jpg-1718592915.jpg', NULL, '2021-01-15 09:30:20', '2024-06-18 05:49:49'),
(4, 1102113, 'David, S.Kom., M.TI', 'Kisaran', '2013-09-28', 'Kisaran', 'Islam', '082274566600', 'a@gmail.com', 'L', 80000, 2, 'images.jpg-1718599712.jpg', NULL, '2021-02-01 07:32:51', '2024-06-18 05:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `angkatan` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `id_prodi`, `id_dosen`, `angkatan`, `jumlah`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SI-A', 1, 4, 2024, 3, NULL, '2021-01-08 06:31:58', '2024-06-16 22:01:26'),
(2, 'SI-B', 1, 1, 2024, 0, NULL, '2021-02-01 07:34:38', '2024-06-16 21:39:01'),
(3, 'TI-A', 2, 1, 2024, 0, NULL, '2021-02-05 05:47:48', '2024-06-16 21:39:05'),
(4, 'SI-C', 1, 4, 2024, 0, NULL, '2021-02-08 08:11:40', '2024-06-16 21:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `id_mahasiswa`, `id_schedule`, `id_ta`, `deleted_at`, `created_at`, `updated_at`) VALUES
(17, 12, 26, 4, NULL, '2024-06-18 04:36:21', '2024-06-18 04:36:21'),
(18, 12, 27, 4, NULL, '2024-06-18 04:36:21', '2024-06-18 04:36:21'),
(19, 12, 28, 4, NULL, '2024-06-18 04:36:21', '2024-06-18 04:36:21'),
(20, 13, 26, 4, NULL, '2024-06-18 04:37:20', '2024-06-18 04:37:20'),
(21, 13, 27, 4, NULL, '2024-06-18 04:37:20', '2024-06-18 04:37:20'),
(22, 13, 28, 4, NULL, '2024-06-18 04:37:20', '2024-06-18 04:37:20'),
(23, 12, 29, 4, NULL, '2024-06-18 07:24:25', '2024-06-18 07:24:25'),
(24, 13, 29, 4, NULL, '2024-06-18 07:24:45', '2024-06-18 07:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `id_prodi`, `id_kelas`, `agama`, `telp`, `email`, `jenis_kelamin`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(12, 2044095, 'Sandy Chandra', 'Lubuk Pakam', '1999-03-08', 'Jln. Perbatasan Gg. Buntu No 35', 1, 1, 'Buddha', '082284475456', 'sandyychandra@gmail.com', 'L', 'images (1).jpg-1718599424.jpg', NULL, '2024-06-16 21:43:44', '2024-06-16 22:01:26'),
(13, 2044002, 'Henky', 'Medan', '2000-03-09', 'Jln. Tangguk Bongkar II', 1, 1, 'Buddha', '085358938116', 'henkyhanz@gmail.com', 'L', 'images (1).jpg-1718599556.jpg', NULL, '2024-06-16 21:45:56', '2024-06-16 22:01:26'),
(14, 2044094, 'Andrian Lysander', 'Lubuk Pakam', '2002-12-12', 'Jln. Setia Budi No 11', 1, 1, 'Buddha', '082190612618', 'huangandrian02@gmail.com', 'L', 'images (1).jpg-1718599613.jpg', NULL, '2024-06-16 21:46:53', '2024-06-16 22:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `matkuls`
--

CREATE TABLE `matkuls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL, 
  `smt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matkuls`
--

INSERT INTO `matkuls` (`id`, `kode`, `matkul`, `sks`, `smt`, `semester`, `id_prodi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SI101', 'Algoritma dan Pemrograman 1', 3, 1, 'Ganjil', 1, NULL, '2021-01-06 06:01:34', '2021-01-06 06:22:42'),
(2, 'SI201', 'Algoritma dan Pemrograman 2', 3, 2, 'Genap', 1, NULL, '2021-01-06 06:39:40', '2021-01-06 06:43:10'),
(3, 'SI102', 'Pengantar Teknologi Informasi', 3, 1,'Ganjil', 1, NULL, '2021-02-01 07:38:27', '2021-02-01 07:38:27'),
(4, 'SI103', 'Kalkulus 1', 2, 1, 'Ganjil', 1, NULL, '2021-02-01 07:39:13', '2021-02-01 07:39:13'),
(5, 'SI104', 'Akuntansi 1', 2, 1, 'Ganjil', 1, NULL, '2021-02-05 03:51:31', '2021-02-05 03:51:31'),
(6, 'SI105', 'Pendidikan Agama', 2, 1, 'Ganjil', 2,  NULL, '2021-02-05 03:52:09', '2021-02-05 03:52:09'),
(7, 'SK101', 'Jaringan Komputer 1', 3, 1, 'Ganjil',2, NULL, '2021-02-05 03:53:29', '2021-02-05 03:53:29'),
(8, 'SI109', 'Pendidikan Kewarganegaraan', 2, 1 ,'Ganjil', 1, NULL, '2021-02-07 07:34:54', '2021-02-07 07:41:08'),
(9, 'SI106', 'Sistem Operasi', 2, 1, 'Ganjil', 1, NULL, '2021-02-07 07:35:47', '2021-02-07 07:35:47'),
(10, 'SI107', 'Struktur Data 1', 3, 1, 'Ganjil',1 , NULL, '2021-02-07 07:36:37', '2021-02-07 07:36:37'),
(11, 'SI108', 'Desain Grafis 1', 3, 1, 'Ganjil', 2, NULL, '2021-02-07 07:37:09', '2021-02-07 07:37:09'),
(12, 'SI110', 'Desain Web 1', 3, 1, 'Ganjil', 2, NULL, '2021-02-07 07:41:33', '2021-02-07 07:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2021_01_04_151109_create_fakultas_table', 8),
(14, '2021_01_05_102435_create_gedungs_table', 9),
(15, '2021_01_05_103912_create_ruangans_table', 10),
(17, '2021_01_05_121219_create_prodis_table', 12),
(19, '2021_01_06_111851_create_tahun_akademiks_table', 13),
(20, '2021_01_04_110940_create_matkuls_table', 14),
(22, '2020_12_31_062052_create_mahasiswas_table', 16),
(23, '2021_01_03_130137_create_dosens_table', 17),
(24, '2021_01_08_131126_create_kelas_table', 18),
(25, '2021_01_16_091247_create_schedules_table', 19),
(26, '2014_10_12_100000_create_password_resets_table', 20),
(32, '2014_10_12_000000_create_users_table', 21),
(33, '2016_06_01_000001_create_oauth_auth_codes_table', 21),
(34, '2016_06_01_000002_create_oauth_access_tokens_table', 21),
(35, '2016_06_01_000003_create_oauth_refresh_tokens_table', 21),
(36, '2016_06_01_000004_create_oauth_clients_table', 21),
(37, '2016_06_01_000005_create_oauth_personal_access_clients_table', 21),
(41, '2021_02_01_144913_create_krs_table', 22),
(42, '2021_02_04_125509_create_absens_table', 22),
(43, '2021_02_23_105850_create_nilais_table', 22),
(44, '2024_06_18_011750_create_detail_schedule_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ka_prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `kode_prodi`, `prodi`, `ka_prodi`, `jenjang`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SI', 'Sistem Informasi', '1', 'S1', NULL, '2021-01-05 05:22:07', '2021-01-16 04:24:31'),
(2, 'TI', 'Teknik Informatika', '2', 'S1', NULL, '2021-01-15 09:32:00', '2021-01-16 04:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `id_prodi`, `id_ta`, `id_kelas`, `id_matkul`, `id_dosen`, `hari`, `waktu`, `deleted_at`, `created_at`, `updated_at`) VALUES
(26, 1, 4, 1, 1, 1, 'Senin', '09:00-10:00', NULL, '2024-06-18 04:27:34', '2024-06-18 04:27:34'),
(27, 1, 4, 1, 3, 2, 'Senin', '10:00-11:00', NULL, '2024-06-18 04:33:58', '2024-06-18 04:33:58'),
(28, 1, 4, 1, 12, 4, 'Selasa', '09:00-10:00', NULL, '2024-06-18 04:34:22', '2024-06-18 04:34:22'),
(29, 1, 4, 1, 10, 1, 'Rabu', '10:00-11:00', NULL, '2024-06-18 06:49:59', '2024-06-18 06:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademiks`
--

CREATE TABLE `tahun_akademiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_akademik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_awal_pertemuan` date DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_akademiks`
--

INSERT INTO `tahun_akademiks` (`id`, `tahun_akademik`, `semester`, `tanggal_awal_pertemuan`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, '2023/2024', 'Ganjil', '2024-06-24', 1, NULL, '2021-01-15 08:45:20', '2024-06-17 18:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(3, 'Erwin Perdana', 'erwin@gmail.com', NULL, '$2y$10$uKpteviObRX2zbsTzt8PQe8hocK4AOeMwHPiIuV4.tBuGcko8v8J.', NULL, 'Administrator', '2021-01-28 06:41:53', '2021-01-28 06:41:53'),
(14, 'David, S.Kom., M.TI', '1102113', NULL, '$2y$10$J.ji/h0C8lquOm.lDhar1eNXIKb1z.jNGJePKJ7z8TYTiQSKJqtOm', NULL, 'Dosen', '2021-02-01 07:32:52', '2024-06-18 05:49:56'),
(17, 'Robet, M.Kom', '1102110', NULL, '$2y$10$J.ji/h0C8lquOm.lDhar1eNXIKb1z.jNGJePKJ7z8TYTiQSKJqtOm', NULL, 'Dosen', '2021-02-01 07:32:52', '2024-06-18 05:49:40'),
(18, 'Octara Pribadi, M.Kom', '1102111', NULL, '$2y$10$J.ji/h0C8lquOm.lDhar1eNXIKb1z.jNGJePKJ7z8TYTiQSKJqtOm', NULL, 'Dosen', '2021-02-01 07:32:52', '2024-06-18 05:49:49'),
(19, 'Sandy Chandra', '2044095', NULL, '$2y$10$3z6cJiY0Z55.WCXF/t5s6Oc.xmQ2LbA0.T3wB/HOmUpqPOGmXUmom', NULL, 'Mahasiswa', '2024-06-16 21:43:44', '2024-06-16 21:59:36'),
(20, 'Henky', '2044002', NULL, '$2y$10$QspDQlfZsmDOSxFCgwIfrOm5lb7yq79gtx.YPWV4N4.rsonM/dbCy', NULL, 'Mahasiswa', '2024-06-16 21:45:56', '2024-06-16 21:59:47'),
(21, 'Andrian Lysander', '2044094', NULL, '$2y$10$6eWIld9PLFJx0yFf/F3Cp.iaDFV1F2QTrL4CjwdWeYyi49gSNSAMG', NULL, 'Mahasiswa', '2024-06-16 21:46:53', '2024-06-16 21:59:52'),
(22, 'Lisa Belinda Goh', '12345678', NULL, '$2y$10$6eWIld9PLFJx0yFf/F3Cp.iaDFV1F2QTrL4CjwdWeYyi49gSNSAMG', NULL, 'Bagiankeuangan', '2024-06-17 14:59:31', '2024-06-17 14:59:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_schedule`
--
ALTER TABLE `detail_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkuls`
--
ALTER TABLE `matkuls`
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
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `detail_schedule`
--
ALTER TABLE `detail_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `matkuls`
--
ALTER TABLE `matkuls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tahun_akademiks`
--
ALTER TABLE `tahun_akademiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

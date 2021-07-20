-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2021 at 12:36 PM
-- Server version: 10.5.10-MariaDB-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrianv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `antrian_id` int(11) NOT NULL,
  `antrian_tanggal` varchar(50) DEFAULT NULL,
  `antrian_status` varchar(50) NOT NULL,
  `antrian_waktu_panggil` varchar(50) DEFAULT current_timestamp(),
  `antrian_waktu_selesai` varchar(50) DEFAULT NULL,
  `antrian_pelayanan_id` int(11) NOT NULL,
  `antrian_loket_id` int(11) NOT NULL,
  `antrian_last` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`antrian_id`, `antrian_tanggal`, `antrian_status`, `antrian_waktu_panggil`, `antrian_waktu_selesai`, `antrian_pelayanan_id`, `antrian_loket_id`, `antrian_last`) VALUES
(1, '21-07-20 04:33:52', 'selesai', NULL, NULL, 6, 1, NULL),
(2, '21-07-20 05:03:44', 'selesai', NULL, NULL, 4, 1, NULL),
(3, '21-07-20 05:05:58', 'selesai', NULL, NULL, 6, 1, NULL),
(4, '21-07-20 05:14:24', 'selesai', NULL, NULL, 4, 1, NULL),
(5, '21-07-20 05:14:29', 'selesai', NULL, NULL, 5, 1, NULL),
(6, '21-07-20 05:14:32', 'selesai', NULL, NULL, 6, 1, NULL),
(7, '21-07-20 05:14:34', 'selesai', NULL, NULL, 7, 1, NULL),
(8, '21-07-20 05:20:50', 'selesai', NULL, NULL, 4, 1, NULL),
(9, '21-07-20 05:20:59', 'selesai', NULL, NULL, 4, 1, NULL),
(10, '21-07-20 05:21:34', 'selesai', NULL, NULL, 4, 1, NULL),
(11, '21-07-20 05:21:48', 'selesai', NULL, NULL, 5, 1, NULL),
(12, '21-07-20 05:21:59', 'selesai', NULL, NULL, 5, 1, NULL),
(13, '21-07-20 05:22:38', 'selesai', NULL, NULL, 4, 1, NULL),
(14, '21-07-20 05:22:47', 'selesai', NULL, NULL, 6, 1, NULL),
(15, '21-07-20 05:22:54', 'selesai', NULL, NULL, 7, 1, NULL),
(16, '21-07-20 05:23:25', 'selesai', NULL, NULL, 4, 1, NULL),
(17, '21-07-20 05:24:10', 'selesai', NULL, NULL, 4, 1, NULL),
(18, '21-07-20 05:25:08', 'selesai', NULL, NULL, 4, 1, NULL),
(19, '21-07-20 05:25:55', 'selesai', NULL, NULL, 4, 1, NULL),
(20, '21-07-20 05:28:41', 'selesai', NULL, NULL, 4, 1, NULL),
(21, '21-07-20 05:28:56', 'selesai', NULL, NULL, 4, 1, NULL),
(22, '21-07-20 05:29:28', 'selesai', NULL, NULL, 4, 1, NULL),
(23, '21-07-20 05:29:49', 'selesai', NULL, NULL, 4, 1, NULL),
(24, '21-07-20 05:30:10', 'selesai', NULL, NULL, 4, 1, NULL),
(25, '21-07-20 05:30:16', 'selesai', NULL, NULL, 4, 1, NULL),
(26, '21-07-20 05:30:26', 'selesai', NULL, NULL, 5, 1, NULL),
(27, '21-07-20 05:30:36', 'selesai', NULL, NULL, 5, 1, NULL),
(28, '21-07-20 05:30:51', 'selesai', NULL, NULL, 5, 1, NULL),
(29, '21-07-20 05:31:15', 'selesai', NULL, NULL, 5, 1, NULL),
(30, '21-07-20 05:31:22', 'selesai', NULL, NULL, 5, 1, NULL),
(31, '21-07-20 05:31:51', 'selesai', NULL, NULL, 5, 1, NULL),
(32, '21-07-20 05:32:19', 'selesai', NULL, NULL, 5, 1, NULL),
(33, '21-07-20 05:33:08', 'selesai', NULL, NULL, 5, 1, NULL),
(34, '21-07-20 05:33:56', 'selesai', NULL, NULL, 4, 1, NULL),
(35, '21-07-20 05:34:18', 'selesai', NULL, NULL, 5, 1, NULL),
(36, '21-07-20 05:34:42', 'selesai', NULL, NULL, 7, 1, NULL),
(37, '21-07-20 05:35:12', 'selesai', NULL, NULL, 5, 1, NULL),
(38, '21-07-20 06:45:33', 'selesai', NULL, NULL, 4, 1, NULL),
(39, '21-07-20 06:54:19', 'selesai', NULL, NULL, 4, 1, NULL),
(40, '21-07-20 07:16:18', 'selesai', NULL, NULL, 7, 1, NULL),
(41, '21-07-20 07:30:21', 'selesai', NULL, NULL, 4, 1, NULL),
(42, '21-07-20 07:32:49', 'berlansung', NULL, NULL, 4, 1, NULL),
(43, '21-07-20 07:33:26', 'berlansung', NULL, NULL, 6, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-07-11-044811', 'App\\Database\\Migrations\\Pelayanan', 'default', 'App', 1625979235, 1),
(2, '2021-07-11-054601', 'App\\Database\\Migrations\\Loket', 'default', 'App', 1625982577, 2),
(3, '2021-07-11-070851', 'App\\Database\\Migrations\\Loket', 'default', 'App', 1625987345, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `pelayanan_id` int(11) UNSIGNED NOT NULL,
  `pelayanan_name` varchar(100) NOT NULL,
  `pelayanan_code` varchar(100) NOT NULL,
  `pelayanan_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`pelayanan_id`, `pelayanan_name`, `pelayanan_code`, `pelayanan_description`) VALUES
(4, 'Customer Service', 'CS', 'Layanan ini di gunakan untuk pelayanan kepada konsumenn'),
(5, 'Pengaduan', 'PGDN', 'Layanan ini di gunakan untuk melakukan pengaduan'),
(6, 'Permohonan Baru', 'PB', 'Layanan ini di gunakan untuk permohonan baru'),
(7, 'Perpanjangan', 'PNG', 'Layanan ini di gunakan u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`antrian_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`pelayanan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `antrian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `pelayanan_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

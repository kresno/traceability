-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 05:43 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traceability`
--

-- --------------------------------------------------------

--
-- Table structure for table `benih`
--

CREATE TABLE `benih` (
  `id_benih` int(11) NOT NULL,
  `nama_benih` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benih`
--

INSERT INTO `benih` (`id_benih`, `nama_benih`, `created_at`) VALUES
(1, 'varietas mentik srijaya (Pada gogo)', '2017-08-06 08:26:40'),
(3, 'Varietas Pe\'dok', '2017-08-06 08:26:40'),
(4, 'Varietas Phiilip', '2017-08-06 08:26:40'),
(5, 'Varietas Ketan Umur Genjah', '2017-08-06 08:26:40'),
(6, 'Varietas Ketan Umur Sedang', '2017-08-06 08:26:40'),
(7, 'Varietas Seket', '2017-08-06 08:26:40'),
(8, 'Varietas Pendok (Padi Gogo)', '2017-08-06 08:26:40'),
(9, 'Padi Japonica', '2017-08-06 08:26:40'),
(11, 'Pandan Wangi', '2017-08-06 08:27:06'),
(12, 'mentik susu', '2017-08-06 08:27:06'),
(13, 'Lokal Banyuwangi', '2017-08-06 08:27:23'),
(14, 'Kalpataru', '2017-08-06 15:09:04'),
(15, 'Pertahanan', '2017-08-06 15:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `data_qrcode_petani`
--

CREATE TABLE `data_qrcode_petani` (
  `id` int(11) NOT NULL,
  `id_petani` varchar(255) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `id_benih` varchar(255) NOT NULL,
  `id_pupuk` varchar(255) NOT NULL,
  `pestisida` int(11) NOT NULL,
  `umur_tanam` int(11) NOT NULL,
  `hasil_tanam` int(11) NOT NULL,
  `kadar air` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pupuk`
--

CREATE TABLE `pupuk` (
  `id_pupuk` int(11) NOT NULL,
  `nama_pupuk` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pupuk`
--

INSERT INTO `pupuk` (`id_pupuk`, `nama_pupuk`, `created_at`) VALUES
(1, 'ZA', '2017-08-06 08:30:08'),
(2, 'KCi', '2017-08-06 08:30:08'),
(4, 'Urea', '2017-08-06 08:30:08'),
(5, 'Phonska', '2017-08-06 08:30:08'),
(6, 'Kokoronoto', '2017-08-06 08:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode_petani`
--

CREATE TABLE `qrcode_petani` (
  `id` int(11) NOT NULL,
  `id_data` varchar(255) NOT NULL,
  `id_petani` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcode_petani`
--

INSERT INTO `qrcode_petani` (`id`, `id_data`, `id_petani`, `gambar`, `link`) VALUES
(10, '21', '2', 'petani-17-08-06-21.png', 'http://localhost/traceability/index.php/view/petani/21'),
(11, '22', '2', 'petani-17-08-06-22.png', 'http://localhost/traceability/index.php/view/petani/22'),
(12, '23', '2', 'petani-17-08-06-23.png', 'http://localhost/traceability/index.php/view/petani/23'),
(13, '24', '2', 'petani-17-08-06-24.png', 'http://localhost/traceability/index.php/view/petani/24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` enum('1','2','3','4') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `create_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '4', '2017-08-04 09:13:58'),
(2, 'petani', 'petani@gmail.com', 'petani', '1', '2017-08-04 08:39:56'),
(3, 'pengepul', 'pengepul@gmail.com', 'pengepul', '2', '2017-08-04 08:39:56'),
(4, 'distributor', 'distributor@gmail.com', 'distributor', '3', '2017-08-04 08:40:52'),
(5, 'Jaja itu siapa', 'cobacoba@gmail.com', '123456', '1', '2017-08-05 16:57:38'),
(6, 'sini sini sini dong', 'cobacoba@gmail.com', '123456', '1', '2017-08-05 17:28:35'),
(7, 'Coba aja lagi', 'cobacoba@test.com', '123456', '1', '2017-08-05 17:47:01'),
(9, 'Ini adalah', 'cobacoba@gmail.com', '123456', '1', '2017-08-05 17:18:44'),
(10, 'cupu nih', 'cobacoba@gmail.com', '123456', '1', '2017-08-05 17:31:15'),
(11, 'Kini adalah', 'cobacoba@gmail.com', '123456', '1', '2017-08-05 17:20:33'),
(13, 'sini sini dong lagi', 'cobacoba@gmail.com', '123456', '1', '2017-08-05 17:13:37'),
(14, 'Lihat dulu aja', 'cobacoba123@gmail.com', '123456', '1', '2017-08-06 13:45:50'),
(15, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(17, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(18, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(19, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(20, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(21, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(22, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(23, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(24, 'Kepoin aja dulu', 'kepoin@gmail.com', '123456', '2', '2017-08-04 16:16:43'),
(25, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(26, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(28, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(29, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(30, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(31, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(32, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(33, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(34, 'Tenangin aja dulu', 'tenangin@gmail.com', '123456', '3', '2017-08-04 16:17:09'),
(35, 'Kantor Pos', 'asd@asd.co.id', '123456', '3', '2017-08-05 18:34:18'),
(36, 'Diuston', 'erseasd', '234235', '3', '2017-08-05 18:36:11'),
(38, 'kapuas', '1234', '12345', '3', '2017-08-05 18:39:57'),
(39, 'kapuas', '1234', '12345', '3', '2017-08-05 18:40:28'),
(40, 'kokoronotomo', 'koko@gmail.com', '123456789', '3', '2017-08-05 18:41:48'),
(41, 'panji', 'pragiwaksono', 'kampoes unsoed', '3', '2017-08-05 18:43:12'),
(43, 'cops', 'ini banyak nih', '123456', '1', '2017-08-05 18:44:40'),
(44, 'siapa nih yang disini', 'kresno.19@gmail.com', '12314235', '2', '2017-08-05 18:44:57'),
(45, 'sini dulu dong', 'bingung', '123124124', '2', '2017-08-05 18:45:58'),
(46, 'pasang badan', 'capek', 'tidur dulu ah', '3', '2017-08-05 18:46:14'),
(47, 'petani', 'petasan', '123456', '1', '2017-08-06 08:04:30'),
(48, 'Kampusin aja', 'kampusinaja@gmail.com', '123456', '3', '2017-08-06 14:26:57'),
(49, 'datangin dulu', 'datangdulu@gmail.com', '123456', '2', '2017-08-06 14:27:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benih`
--
ALTER TABLE `benih`
  ADD PRIMARY KEY (`id_benih`);

--
-- Indexes for table `data_qrcode_petani`
--
ALTER TABLE `data_qrcode_petani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pupuk`
--
ALTER TABLE `pupuk`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- Indexes for table `qrcode_petani`
--
ALTER TABLE `qrcode_petani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benih`
--
ALTER TABLE `benih`
  MODIFY `id_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `data_qrcode_petani`
--
ALTER TABLE `data_qrcode_petani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pupuk`
--
ALTER TABLE `pupuk`
  MODIFY `id_pupuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `qrcode_petani`
--
ALTER TABLE `qrcode_petani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

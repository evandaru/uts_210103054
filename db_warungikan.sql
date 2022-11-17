-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 04:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warungikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikan`
--

CREATE TABLE `tb_ikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pemilik` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ikan`
--

INSERT INTO `tb_ikan` (`id`, `nama`, `pemilik`, `kategori`, `jumlah`, `harga`, `waktu`) VALUES
(2, 'piranha', 'uwu', 'ikan', 5, 5000, '2022-11-16 13:39:29'),
(3, 'hiu manusia', 'manusia', 'ikan', 5, 1000, '2022-11-16 14:03:45'),
(4, 'pelet', 'fauzan', 'makanan', 5, 1500, '2022-11-17 15:23:33'),
(5, 'aerator', 'bintang', 'alat', 7, 20000, '2022-11-17 15:24:12'),
(6, 'sapi', 'cia', 'binatang ternak', 10, 10000000, '2022-11-17 15:26:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

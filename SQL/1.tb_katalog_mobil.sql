-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 12:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_katalog_mobil`
--

CREATE TABLE `tb_katalog_mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(24) DEFAULT NULL,
  `merk` varchar(12) DEFAULT NULL,
  `seri` varchar(12) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `b_bakar` varchar(35) DEFAULT NULL,
  `harga` varchar(12) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_katalog_mobil`
--

INSERT INTO `tb_katalog_mobil` (`id`, `nama`, `merk`, `seri`, `tahun`, `b_bakar`, `harga`, `gambar`) VALUES
(5, 'ffsfdsfs', 'fdsfds', 'fdfsdffsf', 'dfds', 'sd', 'dsfdsf', 'uploads/image_2023-04-03_01-38-49.png'),
(6, 'adsd', 'adssad', 'adsd', 'sads', 'dasada', 'asdad', 'uploads/image_2023-04-03_01-38-49.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_katalog_mobil`
--
ALTER TABLE `tb_katalog_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_katalog_mobil`
--
ALTER TABLE `tb_katalog_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 03:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silaturahmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `pesan` varchar(300) NOT NULL,
  `pesan_balasan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `pesan`, `pesan_balasan`) VALUES
(1, 'Fitriana', 'Selamat Idul Fitri! Terima kasih Pemerintah Kota Surabaya atas silaturahmi virtual. Harap perhatikan penanganan COVID-19 dan kebersihan lingkungan. #SurabayaLebihBaik', NULL),
(2, 'Ahmad Yusuf', 'Selamat Idul Fitri! Terimakasih Pemkot Surabaya atas silaturahmi virtual. Dukung vaksinasi, tingkatkan pengelolaan sampah, dan perhatikan kesejahteraan masyarakat. #SurabayaMajuBersama', 'Waalaikumsalam Bapak Ahmad Yusuf, terima kasih atas dukungannya! Kami akan terus berupaya dalam penanganan COVID-19, pengelolaan sampah, dan kesejahteraan masyarakat. Selamat Idul Fitri dan semoga Surabaya semakin maju bersama! #SurabayaMajuBersama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

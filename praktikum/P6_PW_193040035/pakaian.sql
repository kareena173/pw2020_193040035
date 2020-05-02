-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 12:36 PM
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
-- Database: `pw_193040035`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `foto`, `harga`, `nama`, `stok`, `ukuran`, `warna`) VALUES
(1, 'blezzer.jfif', '230000', 'blezer', '321', 'all size', 'dusty pink, army, lightblue'),
(2, 'blues.jfif', '130000', 'blues', '441', 's, m, l, xl', 'dusty pink, grey, lightblue'),
(3, 'celana kulot.png', '95000', 'kulot', '150', 'all size', 'lightblue-grey'),
(4, 'dress casual.jfif', '120000', 'dress casual', '200', 'all size', 'mocca, coklat-susu, milo'),
(5, 'kemeja.jfif', '90000', 'kemeja-serut', '554', 'all size', 'white, black, maroon, milo'),
(6, 'midi dress.jfif', '110000', 'midi dress', '250', 'm, l', 'yellow, pink, choco'),
(7, 'rok.jfif', '75000', 'rok prisket', '542', 'all size', 'choco, milo, cream'),
(8, 'sweater.jfif', '90000', 'sweater', '300', 'all size fit to xl', 'brown,maroon, navy'),
(9, 'tunik blue.jfif', '150000', 'tunik blue', '200', 'all size fit to xl', 'light blue'),
(10, 'tunik vintage.jfif', '160000', 'tunik vintage', '250', 'all size fit to xl', 'milo, dark-blue,dark-grey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

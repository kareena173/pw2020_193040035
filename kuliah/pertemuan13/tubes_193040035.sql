-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 02:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040035`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pakaian.`
--

CREATE TABLE `pakaian.` (
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian.`
--

INSERT INTO `pakaian.` (`foto`, `nama`, `ukuran`, `warna`, `stok`, `harga`) VALUES
('blezer.jfif', 'blezer', 'all size', 'dusty pink', '321', '23000'),
('blues.jfif', 'blues', 's,m,l,xl', 'grey', '441', '130000'),
('celana kulot.png', 'kulot', 'all size', 'lightblue', '150', '95000'),
('dress casual.jfif', 'dress casual', 'all size', 'moca,milo', '200', '120000'),
('kemeja.jfif', 'kemeja serut', 'all size', 'white,blac', '554', '90000'),
('midi dress.jfif', 'midi dress', 'm,l', 'yellow,pin', '250', '110000'),
('rok.jfif', 'rok prisket', 'all size', 'choco,milo', '542', '75000'),
('sweater.jfif', 'sweater', 'all size fit to xl', 'navy', '300', '90000'),
('tunikblue.jfif', 'tunik blue', 'all size fit to xl', 'lightblue', '200', '150000'),
('tunik vintage.jfif', 'tunik vintage', 'all size fit to xl', 'milo', '250', '160000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 07:21 AM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Kareena kardin', '193040035', 'kareenakardin444@gmail.com', 'teknik informatika', 'kareena.jpeg'),
(2, 'anggun citra', '183040053', 'angguncitra@gmail.com', 'teknik informatika', 'anggun.jpeg'),
(3, 'andi sopian', '173040067', 'andisopian@gmail.com', 'teknik informatika', 'andi.jpeg'),
(4, 'dina sadira', '163040054', 'dinasadira@gmail.com', 'teknik informatika', 'dina.jpeg'),
(5, 'putri sulung', '193040067', 'putrisulung@gmail.com', 'teknik informatika', ''),
(6, 'doni dudi', '133040035', 'doni33@gmail.com', 'teknik informatika', 'doni.jpeg'),
(7, 'yura andini', '193040099', 'yurarita@gmail.com', 'teknik informatika', 'yura.jpeg'),
(8, 'sulis', '123040077', 'sulisnujin@gmail.com', 'teknik informatika', 'sulis.jpeg'),
(9, 'elistia', '193040052', 'elisgun@gmail.com', 'teknik informatika', 'elis.jpeg'),
(10, 'endi erfian', '173040017', 'endi@gmail.com', 'teknik informatika', 'endi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

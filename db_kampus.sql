-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 06:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `prodi_kode` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `ipk`, `prodi_kode`) VALUES
(1, '0110121131', 'Witri Ardiyanti', 'P', 'Bogor', '2003-02-26', 3.97, 'SI'),
(2, '0110121132', 'wira', 'L', 'bogor', '2022-07-02', 3.97, 'TI'),
(3, '03021021', 'Furqon Zaki', 'L', 'Bogor', '2003-01-25', 3.67, 'BD'),
(4, '02021020', 'Ahmad Afif', 'L', 'Depok', '2004-01-20', 3.2, 'TI'),
(5, '0110121133', 'Jeyano ', 'L', 'Jakarta', '2022-07-14', 3.8, 'BD'),
(6, '0110121134', 'Kamajiya', 'P', 'Bandung', '2022-07-20', 3.79, 'SI'),
(7, '0110121135', 'Ahmad', 'L', 'Cianjur', '2022-07-15', 3.8, 'TI');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode` varchar(2) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kaprodi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kode`, `nama`, `kaprodi`) VALUES
('BD', 'Bisnis Digital', 'David Panji'),
('SI', 'Sistem Informasi', 'Misna Azqia'),
('TI', 'Teknik Informatika', 'Tifani Nabarian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `prodi_kode` (`prodi_kode`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi_kode`) REFERENCES `prodi` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 01:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamhs2`
--

CREATE TABLE `datamhs2` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `motto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamhs2`
--

INSERT INTO `datamhs2` (`nim`, `nama`, `gender`, `prodi`, `fakultas`, `alamat`, `motto`) VALUES
('6701174044', 'Septi Maudi ', 'Perempuan', 'Management Informatika', 'Fakultas Ilmu Terapan', 'Cilacap', 'Tetap semangat'),
('6701174801', 'Danis Saputra', 'Laki-laki', 'Management Informatika', 'Fakultas Ilmu Terapan', 'Tersan Buah batu', 'keep smile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamhs2`
--
ALTER TABLE `datamhs2`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 10:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_d`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` int(5) NOT NULL,
  `nama_dosen` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `alamat`) VALUES
(18917, 'abdilah', 'labuapi'),
(52627, 'adrian', 'lombok timur'),
(58441, 'yusuf', 'mataram');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(20) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `prodi`, `alamat`) VALUES
(1810530201, 'Muhammad Baihaki', 'ILKOM 5A', 'NTB, Lombok Barat, Muhajirin'),
(1810530224, 'Nurwahidah binti Uma', 'ILKOM 5E', 'NTB, Bima, Sondosia'),
(1810530229, 'Pandhu Dwipa Indra P', 'S1 ILKOM ', 'NTB, Lombok Barat, Labuapi, Muhajirin');

-- --------------------------------------------------------

--
-- Table structure for table `perwalian`
--

CREATE TABLE `perwalian` (
  `id` int(11) NOT NULL,
  `dosen_nip` int(5) NOT NULL,
  `mahasiswa_nim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nama_dosen` (`nama_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip` (`dosen_nip`),
  ADD UNIQUE KEY `mahasiswa_nim` (`mahasiswa_nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perwalian`
--
ALTER TABLE `perwalian`
  ADD CONSTRAINT `perwalian_ibfk_1` FOREIGN KEY (`dosen_nip`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `perwalian_ibfk_2` FOREIGN KEY (`mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

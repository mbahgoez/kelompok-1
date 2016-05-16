-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 12:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah_bagol`
--
CREATE DATABASE sekolah_bagol;
USE sekolah_bagol;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` varchar(3) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jk`, `alamat`) VALUES
('A01', 'Kadek', 'L', 'Jl. Batubulan 7'),
('A02', 'Ketut Nyamprut', 'L', 'Jl. Sandat'),
('A03', 'Sudiarta', 'L', 'Jl. Mawar'),
('A04', 'Bagas ', 'L', 'Jl. Sedap Malam'),
('A05', 'Koncreng', 'P', 'Jl. Waturenggong');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(1) NOT NULL,
  `jurusan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'TKJ'),
(2, 'RPL'),
(3, 'MM'),
(4, 'An'),
(5, 'DKV');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `id_pelajaran` varchar(3) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_guru` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `nama_pelajaran`, `kelas`, `id_guru`) VALUES
('P01', 'Pemrograman Web', 'XI RPL 2', 'A01'),
('P02', 'Pemrograman Dasar', 'XI RPL 3', 'A02'),
('P03', 'Basis Data', 'XI RPL 4', 'A03'),
('P04', 'Pemrograman Desktop', 'XI MM 3', 'A04'),
('P05', 'IPA', 'XI TKJ 1', 'A05');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`NIS` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jurusan` int(1) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama`, `id_jurusan`, `jk`, `alamat`) VALUES
(1, 'Joshua', 1, 'L', 'Jl. Belimbing'),
(2, 'Febi', 2, 'L', 'Jl.kepundung'),
(3, 'Lesi', 3, 'P', 'Jl. Tukad'),
(4, 'Dwiki', 4, 'L', 'Jl. Tukad Citarum'),
(5, 'Agik', 5, 'L', 'Jl. Jepun');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`) VALUES
('Adit', 'admin'),
('admin', 'admin'),
('Gusman', 'admin'),
('Hendry', 'admin'),
('Keyserjaya', '87654312'),
('Krisna', 'admin'),
('Udin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
 ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `NIS` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

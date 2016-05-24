-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2016 pada 05.49
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah_bagol`
--
CREATE DATABASE IF NOT EXISTS `sekolah_bagol` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sekolah_bagol`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` varchar(3) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `guru`
--

TRUNCATE TABLE `guru`;
--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jk`, `alamat`) VALUES
('A01', 'Kadek', 'L', 'Jl. Batubulan 7'),
('A02', 'Ketut Nyamprut', 'L', 'Jl. Sandat'),
('A03', 'Sudiarta', 'L', 'Jl. Mawar'),
('A04', 'Bagas ', 'L', 'Jl. Sedap Malam'),
('A05', 'Koncreng', 'P', 'Jl. Waturenggong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(3) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `jurusan`
--

TRUNCATE TABLE `jurusan`;
--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
('AN', 'Animasi'),
('DKV', 'Desain Komunikasi Visual'),
('MM', 'Multimedia'),
('RPL', 'Rekayasa Perangkat Lunak'),
('TKJ', 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `id_pelajaran` varchar(3) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_guru` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pelajaran`
--

TRUNCATE TABLE `pelajaran`;
--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `nama_pelajaran`, `kelas`, `id_guru`) VALUES
('P01', 'Pemrograman Web', 'XI RPL 2', 'A01'),
('P02', 'Pemrograman Dasar', 'XI RPL 3', 'A02'),
('P03', 'Basis Data', 'XI RPL 4', 'A03'),
('P04', 'Pemrograman Desktop', 'XI MM 3', 'A04'),
('P05', 'IPA', 'XI TKJ 1', 'A05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jurusan` int(1) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2454 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `siswa`
--

TRUNCATE TABLE `siswa`;
--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama`, `id_jurusan`, `jk`, `alamat`) VALUES
(3, 'Lesi', 3, 'P', 'Jl. Tukad'),
(4, 'Dwiki', 4, 'L', 'Jl. Tukad Citarum'),
(1234, 'Sukijan', 1, 'L', 'Bandung'),
(2445, 'Bagus Krisna', 1, 'L', 'Denpasar'),
(2446, 'Bagus Mantonafi', 1, 'L', 'Denpasar'),
(2453, 'Hendry Roganda', 1, 'L', 'Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `bio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_name`, `password`, `nama_lengkap`, `bio`) VALUES
('Adit', 'admin', '', ''),
('admin', 'admin', '', ''),
('Gusman', 'admin', 'Bagus Mantonafi', 'Full-Stack Developer'),
('Hendry', 'admin', '', ''),
('Keyserjaya', '87654312', 'Jaya Temara', 'Game Developer'),
('Krisna', 'admin', '', ''),
('Udin', 'admin', '', '');

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
  MODIFY `NIS` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2454;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

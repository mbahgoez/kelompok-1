-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mei 2016 pada 08.30
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

DROP TABLE IF EXISTS `guru`;
CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` varchar(3) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jk`, `alamat`) VALUES
('A03', 'Sudiarta', 'L', 'Jl. Mawar'),
('ded', 'frfrfrf', 'l', 'frfrfrfrf'),
('ede', 'dedee', 'l', 'frffffffffffffffffffff'),
('G01', 'IB Surya Dharma', 'l', 'Ubud'),
('G02', 'AAA', 'p', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(3) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `pelajaran`;
CREATE TABLE IF NOT EXISTS `pelajaran` (
  `id_pelajaran` varchar(3) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_guru` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `nama_pelajaran`, `kelas`, `id_guru`) VALUES
('P01', 'PBO', 'XI RPL 2', 'G03'),
('P02', 'Pemrograman Dasar', 'XI RPL 2', 'G02'),
('P03', 'Fisika', 'XI RPL 4', 'G01'),
('P04', 'Bhs. Indonesia', 'XI MM 1', 'G04'),
('P05', 'Pemrograman Web', 'XI RPL 2', 'G05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2469 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama`, `id_jurusan`, `jk`, `alamat`) VALUES
(2439, 'Adimas Putra Setiawan', 'RPL', 'L', 'Denpasar, ID'),
(2440, 'Aditya Putra Pratama Sugianto', 'RPL', 'L', 'Denpasar, ID'),
(2441, 'Dewa Putu Agie Aditya Permana Putra', 'RPL', 'L', 'Gianyar, ID'),
(2443, 'Ni Wayan Arnis Saputri', 'RPL', 'P', 'Denpasar, ID'),
(2444, 'I Gede Arya Cahyana', 'RPL', 'L', 'Denpasar, ID'),
(2445, 'Bagus Krisna Putra Setiawan', 'RPL', 'L', 'Denpasar, ID'),
(2446, 'Bagus Mantonafi', 'RPL', 'L', 'Denpasar, ID'),
(2447, 'I Gede Bayu Merthangga', 'RPL', 'L', 'Pejeng, ID'),
(2448, 'Ni Nyoman Bela Kartika', 'RPL', 'P', 'Badung, ID'),
(2449, 'Dwicky Candra Lesmana', 'RPL', 'L', 'Denpasar, ID'),
(2450, 'I Putu Gede Elang Erlangga Kurnia S', 'RPL', 'L', 'Badung, ID'),
(2451, 'I Komang Feby Budiarsana', 'RPL', 'L', 'Denpasar, ID'),
(2452, 'Hendry Roganda Hutagalung', 'RPL', 'L', 'Denpasar, ID'),
(2453, 'I Made Indrayana Sanjaya', 'RPL', 'L', ' '),
(2454, 'I Komang Jaya Temara', 'RPL', 'L', 'Denpasar, ID'),
(2455, 'Joshua Karisma Molina', 'RPL', 'L', 'Denpasar, ID'),
(2456, 'Luh Lessy Novi Yanti', 'RPL', 'P', ' '),
(2457, 'Made Mahadi Genadi', 'RPL', 'L', 'Gianyar, ID'),
(2458, 'Ketut Mahendra Putra', 'RPL', 'L', ' '),
(2459, 'I Putu Michael Tedja Kusuma', 'RPL', 'L', ' '),
(2460, 'Putu Gede Putra Andika', 'RPL', 'L', ' '),
(2462, 'Robert Franklin Michael Willem', 'RPL', 'L', 'Denpasar, ID'),
(2463, 'Putu Septyan Eka Jaya', 'RPL', 'L', 'Denpasar, ID'),
(2464, 'Sholahudin', 'RPL', 'L', 'Denpasar, ID'),
(2465, 'Tommy Adi Surya Rismawan', 'RPL', 'L', 'Denpasar, ID'),
(2466, 'I Nyoman Tri Agam Widiastu', 'RPL', 'L', ' '),
(2467, 'Komang Windi', 'RPL', 'P', ' '),
(2468, 'I Gede Wirama Suta', 'RPL', 'L', 'Denpasar, ID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `bio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_name`, `password`, `nama_lengkap`, `bio`) VALUES
('Bagus', 'admin', 'Bagus krisna', 'LOVE MY MOM'),
('Din', 'admin', 'Sholahudin', 'Man'),
('ditya12', 'admin', 'Aditya Putra', 'Dimana-mana Senang'),
('Gusman', 'admin', 'Bagus Mantonafi', 'Full-Stack Developer'),
('hendryy', 'admin', 'Hendry Roganda', 'gaming universe :)'),
('Keyserjaya', '87654312', 'Jaya Temara', 'Game Developer');

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
  MODIFY `NIS` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2469;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

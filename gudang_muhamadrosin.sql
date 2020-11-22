-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2020 pada 03.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang_muhamadrosin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `status_code` varchar(3) NOT NULL,
  `id` int(10) NOT NULL,
  `produk` varchar(20) NOT NULL,
  `stok` int(50) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`status_code`, `id`, `produk`, `stok`, `lokasi`) VALUES
('1', 11, 'mie rebus', 45, 'sepatan'),
('2', 22, 'sate', 100, 'Pakuhaji'),
('3', 33, 'Nasi Padang', 18, 'Pisangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `tgl_pr` date NOT NULL,
  `status_code` int(3) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id` int(10) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`tgl_pr`, `status_code`, `produk`, `jumlah`, `id`, `lokasi`) VALUES
('2020-11-21', 1, 'mie rebus', 5, 11, 'sepatan'),
('2020-11-21', 3, 'Nasi Padang', 2, 33, 'Pisangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `tgl_sj` date NOT NULL,
  `status_code` int(3) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `lokasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`tgl_sj`, `status_code`, `produk`, `jumlah`, `id`, `lokasi`) VALUES
('2020-11-20', 1, 'mie rebus', 10, 11, '0'),
('2020-11-21', 1, 'mie rebus', 10, 11, 'sepatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user`, `password`, `level`) VALUES
('rosin', '123456', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`status_code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

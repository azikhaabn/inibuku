-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2021 pada 03.09
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id buku` int(11) NOT NULL,
  `judul buku` varchar(100) NOT NULL,
  `penerbit buku` varchar(100) NOT NULL,
  `genre buku` varchar(50) NOT NULL,
  `harga buku` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id buku`, `judul buku`, `penerbit buku`, `genre buku`, `harga buku`) VALUES
(17, 'mariposa', 'coconut book', 'romance', 50000),
(21, 'bumi', 'gramedia pustaka utama', 'fantasi', 99000),
(11, 'laskar pelangi', 'bentang pustaka', 'adventure', 55000),
(33, 'bumi manusia', 'hasta mitra', 'fiksi sejarah', 125000),
(48, 'arah langkah', 'mediakita', 'sastra', 68000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

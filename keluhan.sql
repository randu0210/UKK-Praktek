-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2019 pada 02.55
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keluhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id_kategori`, `kategori`) VALUES
('1', 'Keamanan'),
('2', 'Kebersihan'),
('3', 'Keamanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_keluhan`
--

CREATE TABLE `tabel_keluhan` (
  `id_keluhan` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_keluhan`
--

INSERT INTO `tabel_keluhan` (`id_keluhan`, `nama`, `kategori`, `keterangan`, `lokasi`, `foto`, `status`, `feedback`, `datetime`) VALUES
('26032846', 'randu', 'Kebersihan', 'dsadasd', 'jln terserah gue', '26032835.jpg', 'selesai', 'Puass!!', '2019-11-26 06:12:05'),
('26072178', 'asdasd', 'Kebersihan', 'asdsadad', 'asdad', '26072161.jpg', 'selesai', 'belum puas', '2019-11-26 07:41:39'),
('26073372', 'randu', 'Kebersihan', 'haha', 'jln kebon jeruk', '26073360.jpg', 'selesai', 'Puass!!', '2019-11-26 08:20:53'),
('26073925', 'risa', 'Keamanan', 'lshxcvdxf', 'jln terserah gue', '26073926.jpg', 'proses', 'Puass!!', '2019-11-26 06:58:10'),
('26074035', 'svxcvsdv', 'Kebersihan', 'sdfsdfsd', 'sdfsdfsf', '26074069.png', 'selesai', 'Puass!!', '2019-11-26 06:47:54'),
('26074186', 'asdasd', 'Kebersihan', 'asdsadad', 'asdad', '26074162.jpg', 'selesai', 'Puass!!', '2019-11-26 06:47:52'),
('26075426', 'asdasd', 'Keamanan', 'asdadadasdasd', 'qwewqeqe', '26075464.jpg', 'selesai', 'belum puas', '2019-11-26 06:47:50'),
('26083716', 'yaya', 'Keamanan', 'haha', 'asda', '26083771.jpg', 'selesai', 'Puass!!', '2019-11-26 07:43:35'),
('26085046', 'randuu', 'Kebersihan', 'kurang bersih', 'depan rumah', '26085066.jpg', 'selesai', 'Puass!!', '2019-11-26 07:42:04'),
('26092856', 'randu', 'Kebersihan', 'gfgfg', 'jln terserah gue', '26092889.jpg', 'selesai', 'belum puas', '2019-11-26 08:46:07'),
('26094033', 'anas', 'Keamanan', 'pacarku ilang', 'jakarta', '26094013.jpg', 'selesai', 'Puass!!', '2019-11-26 08:27:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tabel_keluhan`
--
ALTER TABLE `tabel_keluhan`
  ADD PRIMARY KEY (`id_keluhan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

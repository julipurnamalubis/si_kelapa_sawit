-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2021 pada 07.50
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsawit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman_produksi`
--

CREATE TABLE `pengiriman_produksi` (
  `no_field` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `tgl_kembali_pengiriman` date NOT NULL,
  `lama_pengiriman` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman_produksi`
--

INSERT INTO `pengiriman_produksi` (`no_field`, `pengirim`, `tgl_pengiriman`, `tgl_kembali_pengiriman`, `lama_pengiriman`, `keterangan`, `id`) VALUES
('0001', '1000 Kg', '2021-01-20', '2021-01-13', 7, '-', 4),
('0002', '800 Kg', '2021-01-11', '2021-01-13', 2, '-', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasilpanen`
--

CREATE TABLE `tbl_hasilpanen` (
  `id` int(5) NOT NULL,
  `laporan` varchar(25) NOT NULL,
  `no_field` varchar(25) NOT NULL,
  `nama_pemanen` varchar(100) NOT NULL,
  `hasil_panen` varchar(50) NOT NULL,
  `tgl_panen` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hasilpanen`
--

INSERT INTO `tbl_hasilpanen` (`id`, `laporan`, `no_field`, `nama_pemanen`, `hasil_panen`, `tgl_panen`, `keterangan`) VALUES
(12346, 'laporan hasil', '0001', 'Andre', '123 Kg', '2020-12-15', 'panen'),
(12347, 'laporan hasil', '0002', 'Wendy', '567 Kg', '2020-12-21', 'panen'),
(12348, 'laporan hasil', '0003', 'Husin', '100 Kg', '2020-12-18', 'panen'),
(12349, 'laporan hasil', '0004', 'Ardi', '233 Kg', '2021-01-01', 'panen'),
(12350, 'laporan hasil', '0005', 'Hardi', '456 Kg', '2021-01-01', 'panen'),
(12352, 'laporan hasil', '0007', 'jkjk', '20 kg', '2021-01-12', 'panen'),
(12353, 'laporan hasil', '0008', 'ridoa', '356 kg', '2021-01-30', 'tidak panen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'julipurnamalubis@gmail.com', 'PT.BCD', 1, 'Kelapa Sawit'),
('pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai@gmail.com', 'Kelapa Produksi', 2, 'Produksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengiriman_produksi`
--
ALTER TABLE `pengiriman_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hasilpanen`
--
ALTER TABLE `tbl_hasilpanen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_perkara` (`hasil_panen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengiriman_produksi`
--
ALTER TABLE `pengiriman_produksi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_hasilpanen`
--
ALTER TABLE `tbl_hasilpanen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12354;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

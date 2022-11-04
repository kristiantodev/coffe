-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2022 pada 16.38
-- Versi server: 5.7.21-log
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coffe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` varchar(60) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_menu`, `status`, `deleted`, `qty`, `id_transaksi`) VALUES
(1, '636454c504c91', 1, 2, 0, 1, 1066132554),
(2, '636454c504c91', 2, 1, 0, 0, 0),
(3, '6363c5de0847c', 1, 2, 0, 1, 1517348098),
(4, '6363c5de0847c', 2, 2, 0, 2, 1517348098);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nm_menu`, `harga`, `deleted`, `foto`) VALUES
(1, 'Coffe Espresso', 15000, 0, 'kopi.jpg'),
(2, 'Beef Sirloin', 65000, 0, 'beef.jpg'),
(3, 'Nasi Goreng', 17500, 0, '1294602398.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` varchar(60) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `file_pembayaran` varchar(60) NOT NULL,
  `jam_booking` varchar(60) NOT NULL,
  `jml_org` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tgl_transaksi`, `status`, `file_pembayaran`, `jam_booking`, `jml_org`) VALUES
(1066132554, '636454c504c91', '2022-11-04 00:26:44', 0, '', '', 0),
(1517348098, '6363c5de0847c', '2022-11-04 15:28:08', 2, '486230278.pdf', '14:00', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(254) NOT NULL,
  `nm_user` varchar(80) NOT NULL,
  `level` varchar(60) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nm_user`, `level`, `foto`, `created_at`) VALUES
('6363c5de0847c', 'manda', '$2y$10$SU3inBmtalYm1gHVT3Mt7ODpMaNYu7XVUFproj/mLu/JzFZXl/f8i', 'wkwk', 'Pelanggan', '1.jpg', '2022-11-03 13:45:02'),
('636454c504c91', 'reihan', '$2y$10$pUiFkBjw4KSHJhu3pl.Wr.DmbLLjSHyFoxXlfpKqA0a7sJ2EW8UAa', 'Reyhan Coffe', 'Pelanggan', '1.jpg', '2022-11-03 23:54:45'),
('636527a96d04c', 'admin', '$2y$10$TNkAoCxrk5xB8Vgrse8gp.9.wR0kjRj24zEOenAuBT3n4fedXh58.', 'Administrator', 'Administrator', '1.jpg', '2022-11-04 14:55:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

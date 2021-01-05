-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 14.29
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `o'laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `no_hp`, `alamat`, `username`, `password`, `email`) VALUES
(1, 'wqe', 324, 'asd', 'sven', 'asd', 'opera@gmail.com'),
(3, 'Rizki Ramadhan', 123123, '321wqe', 'opera', 'dsa', 'farazrizki13@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_kiloan`
--

CREATE TABLE `transaksi_kiloan` (
  `kode_transaksi_kiloan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `jenis_laundry` varchar(20) NOT NULL,
  `tanggal_pengambilan` varchar(10) NOT NULL,
  `jam_pengambilan` varchar(10) NOT NULL,
  `jam_pengantaran` varchar(10) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_kiloan`
--

INSERT INTO `transaksi_kiloan` (`kode_transaksi_kiloan`, `nama`, `no_hp`, `jenis_laundry`, `tanggal_pengambilan`, `jam_pengambilan`, `jam_pengantaran`, `alamat`) VALUES
(1, 'wqe', '98908', 'reguler', '2020-12-31', 'Pagi', 'Pagi', '321wqe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_satuan`
--

CREATE TABLE `transaksi_satuan` (
  `kode_transaksi_satuan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `tanggal_pengambilan` varchar(10) NOT NULL,
  `jam_pengambilan` varchar(11) NOT NULL,
  `jam_pengantaran` varchar(11) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_satuan`
--

INSERT INTO `transaksi_satuan` (`kode_transaksi_satuan`, `id_pelanggan`, `nama`, `no_hp`, `tanggal_pengambilan`, `jam_pengambilan`, `jam_pengantaran`, `alamat`) VALUES
(2, 0, '1212d', 23, '2020-12-', 'Pagi', 'Pagi', 'dwf'),
(3, 0, '1212d', 42, '2020-12-', 'Pagi', 'Pagi', 'fvvg'),
(4, 0, '1212d', 646, '2020-12-', 'Pagi', 'Pagi', 'hfh'),
(5, 0, '1212d', 7775, '2020-12-', 'Pagi', 'Pagi', 'fvvg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `nama` (`nama`),
  ADD KEY `no_hp` (`no_hp`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `transaksi_kiloan`
--
ALTER TABLE `transaksi_kiloan`
  ADD PRIMARY KEY (`kode_transaksi_kiloan`);

--
-- Indeks untuk tabel `transaksi_satuan`
--
ALTER TABLE `transaksi_satuan`
  ADD PRIMARY KEY (`kode_transaksi_satuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_kiloan`
--
ALTER TABLE `transaksi_kiloan`
  MODIFY `kode_transaksi_kiloan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi_satuan`
--
ALTER TABLE `transaksi_satuan`
  MODIFY `kode_transaksi_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2023 pada 07.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifenotes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_keuangan`
--

CREATE TABLE `catatan_keuangan` (
  `id_catatan` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `catatan_keuangan`
--

INSERT INTO `catatan_keuangan` (`id_catatan`, `id_user`, `judul`) VALUES
(24, 7, 'Judul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_pribadi`
--

CREATE TABLE `catatan_pribadi` (
  `id_catatan` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_todolist`
--

CREATE TABLE `catatan_todolist` (
  `id_catatan` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `todolist` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi_catatan_keuangan`
--

CREATE TABLE `isi_catatan_keuangan` (
  `id_isi` int(50) NOT NULL,
  `id_catatan` int(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keuangan` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `isi_catatan_keuangan`
--

INSERT INTO `isi_catatan_keuangan` (`id_isi`, `id_catatan`, `deskripsi`, `keuangan`, `tanggal`) VALUES
(5, 24, 'Test', -1000, '2023-12-19'),
(6, 24, 'testing1', 2000, '2023-12-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saluran`
--

CREATE TABLE `saluran` (
  `id_saluran` int(50) NOT NULL,
  `id_admin` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `likes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(2, 'wisnu', '$2y$12$EXfCN/xSGwb18OKW.ptlPOuwKWjCaW3NC.Dpa9E.rML9SDTPUZr5a'),
(6, 'fadil', '$2y$12$A1qwOmp1gE1yxday7.AXk.d63VjF4GEOQcMuCFYrahOI4Gg4vvJ1y'),
(7, 'mamank', '$2y$12$u46p.vwq/TqWw.IIyoVwUe3Lvu0CCMKL1OOEoJUMM1od9jz6vqdvW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `catatan_pribadi`
--
ALTER TABLE `catatan_pribadi`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `catatan_todolist`
--
ALTER TABLE `catatan_todolist`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `isi_catatan_keuangan`
--
ALTER TABLE `isi_catatan_keuangan`
  ADD PRIMARY KEY (`id_isi`),
  ADD KEY `id_catatan` (`id_catatan`);

--
-- Indeks untuk tabel `saluran`
--
ALTER TABLE `saluran`
  ADD PRIMARY KEY (`id_saluran`),
  ADD KEY `id_user` (`id_admin`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  MODIFY `id_catatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `catatan_pribadi`
--
ALTER TABLE `catatan_pribadi`
  MODIFY `id_catatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `catatan_todolist`
--
ALTER TABLE `catatan_todolist`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `isi_catatan_keuangan`
--
ALTER TABLE `isi_catatan_keuangan`
  MODIFY `id_isi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `saluran`
--
ALTER TABLE `saluran`
  MODIFY `id_saluran` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  ADD CONSTRAINT `catatan_keuangan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `catatan_pribadi`
--
ALTER TABLE `catatan_pribadi`
  ADD CONSTRAINT `catatan_pribadi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `catatan_todolist`
--
ALTER TABLE `catatan_todolist`
  ADD CONSTRAINT `catatan_todolist_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `isi_catatan_keuangan`
--
ALTER TABLE `isi_catatan_keuangan`
  ADD CONSTRAINT `isi_catatan_keuangan_ibfk_1` FOREIGN KEY (`id_catatan`) REFERENCES `catatan_keuangan` (`id_catatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `saluran`
--
ALTER TABLE `saluran`
  ADD CONSTRAINT `saluran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saluran_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

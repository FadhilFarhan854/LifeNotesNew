-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 03:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.3.0

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catatan_keuangan`
--

CREATE TABLE `catatan_keuangan` (
  `id_catatan` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_keuangan`
--

INSERT INTO `catatan_keuangan` (`id_catatan`, `id_user`, `judul`) VALUES
(1, 2, 'Testing'),
(2, 2, 'Testing2'),
(3, 2, 'Testing3'),
(4, 2, 'Title');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_pribadi`
--

CREATE TABLE `catatan_pribadi` (
  `id_catatan` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catatan_todolist`
--

CREATE TABLE `catatan_todolist` (
  `id_catatan` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `todolist` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `isi_catatan_keuangan`
--

CREATE TABLE `isi_catatan_keuangan` (
  `id_catatan` int(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keuangan` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_catatan_keuangan`
--

INSERT INTO `isi_catatan_keuangan` (`id_catatan`, `deskripsi`, `keuangan`, `tanggal`) VALUES
(1, '', 10000, '2023-03-01'),
(1, '', -5000, '2023-12-01'),
(2, '', 10000, '2023-12-01'),
(3, '', -10000, '2023-12-01'),
(3, 'testing', 5000, '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `saluran`
--

CREATE TABLE `saluran` (
  `id_saluran` int(50) NOT NULL,
  `id_admin` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `likes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(2, 'wisnu', '$2y$12$EXfCN/xSGwb18OKW.ptlPOuwKWjCaW3NC.Dpa9E.rML9SDTPUZr5a'),
(6, 'fadil', '$2y$12$A1qwOmp1gE1yxday7.AXk.d63VjF4GEOQcMuCFYrahOI4Gg4vvJ1y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `catatan_pribadi`
--
ALTER TABLE `catatan_pribadi`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `catatan_todolist`
--
ALTER TABLE `catatan_todolist`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `isi_catatan_keuangan`
--
ALTER TABLE `isi_catatan_keuangan`
  ADD KEY `id_catatan` (`id_catatan`);

--
-- Indexes for table `saluran`
--
ALTER TABLE `saluran`
  ADD PRIMARY KEY (`id_saluran`),
  ADD KEY `id_user` (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  MODIFY `id_catatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catatan_pribadi`
--
ALTER TABLE `catatan_pribadi`
  MODIFY `id_catatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `catatan_todolist`
--
ALTER TABLE `catatan_todolist`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saluran`
--
ALTER TABLE `saluran`
  MODIFY `id_saluran` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  ADD CONSTRAINT `catatan_keuangan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `catatan_pribadi`
--
ALTER TABLE `catatan_pribadi`
  ADD CONSTRAINT `catatan_pribadi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `catatan_todolist`
--
ALTER TABLE `catatan_todolist`
  ADD CONSTRAINT `catatan_todolist_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isi_catatan_keuangan`
--
ALTER TABLE `isi_catatan_keuangan`
  ADD CONSTRAINT `isi_catatan_keuangan_ibfk_1` FOREIGN KEY (`id_catatan`) REFERENCES `catatan_keuangan` (`id_catatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

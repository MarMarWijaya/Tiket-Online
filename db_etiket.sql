-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 11:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_etiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `gerbong`
--

CREATE TABLE `gerbong` (
  `idKelas` int(11) NOT NULL,
  `Kelas` varchar(20) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Sisa` int(11) NOT NULL,
  `idKereta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gerbong`
--

INSERT INTO `gerbong` (`idKelas`, `Kelas`, `Harga`, `Sisa`, `idKereta`) VALUES
(1, 'Ekonomi', 90000, 50, 1),
(2, 'Eksekutif', 180000, 50, 1),
(3, 'Bisnis', 250000, 50, 2),
(4, 'Eksekutif', 300000, 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `idKereta` int(11) NOT NULL,
  `nama_kereta` varchar(45) NOT NULL,
  `awal` varchar(45) NOT NULL,
  `tujuan` varchar(45) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_sampai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`idKereta`, `nama_kereta`, `awal`, `tujuan`, `jam_berangkat`, `jam_sampai`) VALUES
(1, 'Sri Tanjung', 'Semarang - Tawang', 'Jakarta - Gambir', '00:00:00', '07:00:00'),
(2, 'Berantas', 'Jakarta - Gambir', 'Semarang - Poncol', '06:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idPemesanan` int(11) NOT NULL,
  `namaPemesan` varchar(45) NOT NULL,
  `emailPemesan` varchar(45) NOT NULL,
  `hpPemesan` varchar(13) NOT NULL,
  `nikPemesan` varchar(20) NOT NULL,
  `namaPenumpang` varchar(45) NOT NULL,
  `nikPenumpang` varchar(20) NOT NULL,
  `hpPenumpang` varchar(13) NOT NULL,
  `emailPenumpang` varchar(45) NOT NULL,
  `idKereta` int(11) NOT NULL,
  `idStok` int(11) NOT NULL,
  `berangkat` varchar(45) NOT NULL,
  `tiba` varchar(45) NOT NULL,
  `gerbong` varchar(5) NOT NULL,
  `nomorKursi` varchar(5) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `namaPemesan`, `emailPemesan`, `hpPemesan`, `nikPemesan`, `namaPenumpang`, `nikPenumpang`, `hpPenumpang`, `emailPenumpang`, `idKereta`, `idStok`, `berangkat`, `tiba`, `gerbong`, `nomorKursi`, `harga`) VALUES
(1, 'Oei, Mario Wijaya', 'mariowijaya31@gmail.com', '085315823366', '3374013003000003', 'Oei, Mario Wijaya', '3374013003000003', '085315823366', 'mariowijaya31@gmail.com', 1, 1, 'Semarang - Tawang, 2020-11-24', 'Jakarta - Gambir, 2020-11-24', '3', '5', 90000),
(2, 'Yohan\'s Banjarnahor', 'yohanbanjarnahor@gmail.com', '085312345678', '1234567812345678', 'Yohan\'s Banjarnahor', '1234567812345678', '085312345678', 'yohanbanjarnahor@gmail.com', 1, 1, 'Semarang - Tawang, 2020-11,24', 'Jakarta - Gambir, 2020-11-24', '1', '8', 90000),
(3, 'a', 'a', 'a', 'a', 'b', 'b', 'b', 'b', 1, 0, 'Semarang - Tawang00:00:00', 'Jakarta - Gambir07:00:00', '2', '1', 90000),
(4, 'a', 'a', 'a', 'a', 'b c', 'b c', 'b c', 'b c', 2, 0, 'Jakarta - Gambir06:00:00', 'Semarang - Poncol10:00:00', '1', '1 12', 600000),
(5, 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 1, 1, 'Semarang - Tawang2020-11-2400:00:00', 'Jakarta - Gambir2020-11-2407:00:00', '1', '1', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `letak` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`letak`) VALUES
('Semarang - Poncol'),
('Semarang - Tawang'),
('Jakarta - Gambir');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `idStok` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `tgl_tujuan` date NOT NULL,
  `idKereta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`idStok`, `tgl`, `tgl_tujuan`, `idKereta`) VALUES
(1, '2020-11-24', '2020-11-24', 1),
(2, '2020-11-25', '2020-11-25', 1),
(3, '2020-11-23', '2020-11-23', 1),
(4, '2020-11-23', '2020-11-23', 2),
(5, '2020-11-24', '2020-11-24', 2),
(6, '2020-11-25', '2020-11-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'yohanbanjarnahor@gmail.com', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerbong`
--
ALTER TABLE `gerbong`
  ADD PRIMARY KEY (`idKelas`),
  ADD KEY `id` (`idKereta`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`idKereta`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `idKereta` (`idKereta`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`idStok`),
  ADD KEY `id` (`idKereta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gerbong`
--
ALTER TABLE `gerbong`
  MODIFY `idKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gerbong`
--
ALTER TABLE `gerbong`
  ADD CONSTRAINT `gerbong_ibfk_1` FOREIGN KEY (`idKereta`) REFERENCES `kereta` (`idKereta`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`idKereta`) REFERENCES `kereta` (`idKereta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

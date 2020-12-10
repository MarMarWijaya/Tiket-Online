-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 07:28 PM
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mariowijaya31@gmail.com', '$2y$10$D1tUyDrEBlZF3WHcYVdzNOeEUcFhSgvqmpVuXTraAJS3km2btOKBW', '2020-12-04 20:49:37');

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
  `idKelas` int(11) NOT NULL,
  `berangkat` varchar(45) NOT NULL,
  `tiba` varchar(45) NOT NULL,
  `gerbong` varchar(5) NOT NULL,
  `nomorKursi` varchar(5) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idPemesanan`, `namaPemesan`, `emailPemesan`, `hpPemesan`, `nikPemesan`, `namaPenumpang`, `nikPenumpang`, `hpPenumpang`, `emailPenumpang`, `idKereta`, `idStok`, `idKelas`, `berangkat`, `tiba`, `gerbong`, `nomorKursi`, `harga`) VALUES
(1, 'Oei, Mario Wijaya', 'mariowijaya31@gmail.com', '085315823366', '3374013003000003', 'Oei, Mario Wijaya', '3374013003000003', '085315823366', 'mariowijaya31@gmail.com', 1, 1, 1, 'Semarang - Tawang, 2020-11-24', 'Jakarta - Gambir, 2020-11-24', '3', '17', 90000),
(2, 'Yohan\'s Banjarnahor', 'yohanbanjarnahor@gmail.com', '085312345678', '1234567812345678', 'Yohan\'s Banjarnahor', '1234567812345678', '085312345678', 'yohanbanjarnahor@gmail.com', 1, 1, 1, 'Semarang - Tawang, 2020-11,24', 'Jakarta - Gambir, 2020-11-24', '1', '8', 90000),
(16, 'a', 'yohanbanjarnahor@gmail.com', 'a', 'a', 'a', 'a', 'a', 'a', 1, 3, 1, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '5', 90000),
(17, 'a', '672018285@student.uksw.edu', 'a', 'a', 'a; a', 'a; a', 'a; a', 'a; a', 1, 2, 1, 'Semarang - Tawang, 2020-11-25, 00:00:00', 'Jakarta - Gambir, 2020-11-25, 07:00:00', '1', '1 12', 180000),
(18, 'Yohan Pantek', 'yohanbanjarnahor@gmail.com', '1', '1', '1', '1', '1', '1', 1, 2, 1, 'Semarang - Tawang, 2020-11-25, 00:00:00', 'Jakarta - Gambir, 2020-11-25, 07:00:00', '1', '5', 90000),
(19, 'Yohan Pantek', 'yohanbanjarnahor@gmail.com', '1', '1', '1', '1', '1', '1', 1, 2, 1, 'Semarang - Tawang, 2020-11-25, 00:00:00', 'Jakarta - Gambir, 2020-11-25, 07:00:00', '1', '5', 90000),
(20, 'a', '672018285@student.uksw.edu', 'q', 'q', 'q', 'q', 'q', 'q', 1, 3, 2, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '1', 180000),
(21, 'a', '672018285@student.uksw.edu', 'q', 'q', 'q', 'q', 'q', 'q', 1, 3, 2, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '1', 180000),
(22, 'a', '672018285@student.uksw.edu', 'q', 'q', 'q', 'q', 'q', 'q', 1, 3, 2, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '1', 180000),
(23, 'a', '672018285@student.uksw.edu', 'q', 'q', 'q', 'q', 'q', 'q', 1, 3, 2, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '1', 180000),
(24, 'a', '672018285@student.uksw.edu', 'q', 'q', 'q', 'q', 'q', 'q', 1, 3, 2, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '1', 180000),
(25, 'a', '672018285@student.uksw.edu', 'q', 'q', 'q', 'q', 'q', 'q', 1, 3, 2, 'Semarang - Tawang, 2020-11-23, 00:00:00', 'Jakarta - Gambir, 2020-11-23, 07:00:00', '1', '1', 180000),
(26, 'a', '672018285@student.uksw.edu', 'a', 'a', 'a', 'a', 'a', 'a', 2, 5, 3, 'Jakarta - Gambir, 2020-11-24, 06:00:00', 'Semarang - Poncol, 2020-11-24, 10:00:00', '1', '5', 250000);

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `email`, `password`, `hp`, `nik`) VALUES
(1, 'candra wijayanto', 'candra@email.com', 'candra', '085234140258', '351000008123'),
(2, 'mario wijaya', 'mario@email.com', 'mario', '08999', '98349234'),
(3, 'candra wijayantooo', 'candra@email.com', '1', '9', '9'),
(4, 'gilang', 'gilang@gmail.com', '1', '8', '8'),
(5, 'joni sujoni', 'joni@joni.co.uk', 'joni', '8', '8'),
(6, 'jono', 'jono@jono.co.uk', 'jono', 'k', 'k'),
(7, 'nina', 'nina@nina.com', 'nina', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mario', 'mariowijaya31@gmail.com', '$2y$10$2OlTOa6XYx3MfeiiLoDr4.5OYHNBEWnhUDwrZIBYerryHRLlfp9ge', 'SKtWokonLIFsQllN5qFSFG8nmNkWkH28aWR1VA4MKKLIJEgDqu4UvbQkv4MX', '2020-12-04 20:42:05', '2020-12-04 20:42:05');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD KEY `idKereta` (`idKereta`),
  ADD KEY `idStok` (`idStok`),
  ADD KEY `idKelas` (`idKelas`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`idStok`),
  ADD KEY `id` (`idKereta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`idStok`) REFERENCES `stok` (`idStok`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`idKelas`) REFERENCES `gerbong` (`idKelas`);

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`idKereta`) REFERENCES `kereta` (`idKereta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 03:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nama`, `username`, `password`) VALUES
(1, 'cvcatph@gmail.com', NULL, '', '$2y$10$fC41rotKOOZIkGiHecJmAegUwQ9oK48Uy8TW.R89vEp3mvjBeAVL6'),
(2, 'cvcatph@gmail.com', NULL, '', '$2y$10$rYQ.t8CJWN.SDSxjILjjTeROhpgCPr0DtZlaS/Ha8GU2Sy5l8mNhS'),
(3, 'cvcatph@gmail.com', NULL, '', '$2y$10$AP8nCbVtQvMXX04ZexCuheaITGEpdVDifFkraek98rzb4R7Nc1Ude'),
(4, 'cvcatph@gmail.com', 'ikan', 'saya', '$2y$10$td9i4qCyckH5YxBn18tWweeaPwQsJ9HyZgZ9cZnBg.BZm9GD0oib.'),
(5, 'ikanhiu@gail.com', 'los', 'losyoi', '$2y$10$uK8vSCTxDJUAy0c9b53AoedLso.EwH9jEnWpND/593TvmxGk5wlxq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

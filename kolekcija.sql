-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 02:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11
CREATE SCHEMA IF NOT EXISTS `kolekcija`;
USE `kolekcija`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolekcija`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) NOT NULL,
  `id_zanr` int(11) NOT NULL,
  `godina` int(11) NOT NULL,
  `trajanje` int(11) NOT NULL,
  `slika` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id`, `naslov`, `id_zanr`, `godina`, `trajanje`, `slika`) VALUES
(1, 'Antitrust', 1, 2001, 105, 'antitrust_2001.jpg'),
(2, 'Firewall', 1, 2006, 105, 'firewall_2006.jpg'),
(3, 'Hackers', 2, 1995, 99, 'hackers_1995.jpg'),
(4, 'Operation Swordfish', 8, 2001, 99, 'operation_swordfish_2001.jpg'),
(5, 'Operation Takedown', 3, 2000, 96, 'operation_takedown_2000.jpg'),
(6, 'Pirates of Silicone valley', 4, 1999, 95, 'pirates_of_silicone_valley_1999.jpg'),
(7, 'The Social Network', 6, 2010, 120, 'the_social_network_2010.jpg'),
(8, 'Tron', 9, 1982, 96, 'tron_1982.jpg'),
(9, 'Tron: Legacy', 9, 2010, 125, 'tron_legacy_2010.jpg'),
(10, 'War Games', 5, 1983, 114, 'war_games_1983.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`id`, `naziv`) VALUES
(1, 'Action'),
(2, 'Crime'),
(3, 'Drama'),
(4, 'Comedy'),
(5, 'Thriller'),
(6, 'Biography'),
(7, 'History'),
(8, 'Adventure'),
(9, 'Sci-Fi'),
(10, 'Fantasy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_zanr` (`id_zanr`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD CONSTRAINT `filmovi_ibfk_1` FOREIGN KEY (`id_zanr`) REFERENCES `zanr` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

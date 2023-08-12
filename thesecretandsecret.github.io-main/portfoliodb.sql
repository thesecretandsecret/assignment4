-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2023 at 04:28 PM
-- Server version: 5.7.40-log
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `message`) VALUES
(31, 'rifthy', 'rifthy15@gmail.com', 'nice work'),
(32, 'hiba', 'afhiba98@gmail.com', 'hi'),
(33, 'rifthy', 'rifthy15@gmail.com', 'good'),
(34, 'juwai', 'juwai64@gmail.com', 'nice work'),
(35, 'juwai', 'juwai64@gmail.com', 'nice work'),
(36, 'juwai', 'juwai64@gmail.com', 'nice work'),
(37, 'juwai', 'juwai64@gmail.com', 'nice work'),
(38, 'nitha', 'nitha14@gmail.com', 'nice work'),
(39, 'nitha', 'nitha14@gmail.com', 'nice work'),
(40, 'nitha', 'nitha14@gmail.com', 'nice work'),
(41, 'nitha', 'nitha14@gmail.com', 'nice work'),
(42, 'nitha', 'nitha14@gmail.com', 'nice work'),
(43, 'nitha', 'nitha14@gmail.com', 'nice work'),
(44, 'nitha', 'nitha14@gmail.com', 'nice work'),
(45, 'nitha', 'nitha14@gmail.com', 'nice work'),
(46, 'nitha', 'nitha14@gmail.com', 'nice work'),
(47, 'nitha', 'nitha14@gmail.com', 'nice work'),
(48, 'nitha', 'nitha14@gmail.com', 'nice work'),
(49, 'nitha', 'nitha14@gmail.com', 'nice work'),
(50, 'nitha', 'nitha14@gmail.com', 'nice work'),
(51, 'nitha', 'nitha14@gmail.com', 'nice work');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

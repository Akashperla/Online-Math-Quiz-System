-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2021 at 08:11 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'AP19110010344', 'nagalakshmi_thota@srmap.edu.in', 'd2e75d05f029188dc28a5fcee7bd7081'),
(2, 'sai gayathri', 'gayathri149@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f'),
(3, 'Lakshmi', 'lakshmi179@gmail.com', '1eaf7c068a250a38e3bab770053c14c3'),
(4, 'sahitya', 'sahitya@gmail.com', '6c8063c7409deb9289f71eab7f7a1548'),
(5, 'vishnu', 'vishnuvardhanthota509@gmail.com', '1963fd70e789022f6f5b11498f992404'),
(6, 'vardhan', 'vardhan157@gmail.com', '1963fd70e789022f6f5b11498f992404'),
(7, 'kalyan', 'kalyan179@gmail.com', 'c00894be428a29fad3e5bff194ac17ae');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

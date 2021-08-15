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
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(250) NOT NULL AUTO_INCREMENT,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, '2m,20m', 1),
(2, '2m,3m', 1),
(3, '56m,40m', 1),
(4, '26m,20m', 1),
(5, '7/3', 2),
(6, '3/7', 2),
(7, '-7', 2),
(8, '-7/3', 2),
(9, '9', 3),
(10, '14', 3),
(11, '13', 3),
(12, '11', 3),
(13, '(4,5)', 4),
(14, '(4,-5)', 4),
(15, '(-4,-5)', 4),
(16, '(-4,5)', 4),
(17, '2310', 5),
(18, '2110', 5),
(19, '1055', 5),
(20, '1155', 5);

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

DROP TABLE IF EXISTS `loginuser`;
CREATE TABLE IF NOT EXISTS `loginuser` (
  `uid` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `totalques` int(250) NOT NULL,
  `answerscorrect` int(250) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, 'AP19110010344', 5, 2),
(2, 'sai gayathri', 4, 1),
(3, 'AP19110010344', 3, 1),
(4, 'AP19110010344', 5, 1),
(5, 'sai gayathri', 5, 3),
(6, 'sai gayathri', 5, 3),
(7, 'lakshmi', 5, 4),
(8, 'sahitya', 5, 2),
(9, 'kalyan', 5, 3),
(10, 'kalyan', 5, 4),
(11, 'kalyan', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(250) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'Half the perimeter of a rectangular room is 46 m, and its length is 6 m more than its breadth. What is the length and breadth of the room?', 4),
(2, 'If y = 3x + 12 and y = 5, what is x? ', 8),
(3, 'Find the HCF of 1848, 3058 and 1331?', 12),
(4, 'What will be the reflection of the point (4, 5) about the X-axis, in the fourth quadrant?', 14),
(5, 'The lateral surface area of a right circular cone of height 28 cm and base radius 21 cm(in sq. cm) is:', 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

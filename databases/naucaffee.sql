-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2017 at 11:44 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naucaffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `selection` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `first_name`, `last_name`, `selection`, `email`, `mobilenumber`, `password`, `date_added`) VALUES
(1, 'rav', 'Ravshanbek', 'Norboev', NULL, 'rav@gmail.com', '2147483647', '202cb962ac59075b964b07152d234b70', '2016-11-12 20:24:33'),
(2, 'i kamilov', 'Islam', 'Kamilov', NULL, 'ikamilov@na.edu', '2147483647', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-18 21:20:37'),
(3, 'btazhibaev', 'Baktybek', 'Tazhibaev', NULL, 'btazhibaev@na.edu', '234651234', 'e10adc3949ba59abbe56e057f20f883e', '2017-04-19 11:27:17'),
(4, 'isco', 'isco', 'isco', NULL, 'iska@na.edu', '2147483647', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-22 14:14:55'),
(5, 'isco', 'isco', 'isco', NULL, 'isco@na.edu', '2147483647', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-22 14:16:51'),
(6, 'rav', 'Ravshanbek', 'Norboev', NULL, 'rav@na.edu', '7892345234523849', '81dc9bdb52d04dc20036dbd8313ed055', '2017-04-22 15:18:27'),
(9, 'ewer', 'qwer', 'qwer', NULL, 'qqwer@na.edu', '213542134', '10f7ef0077aa26b7a043bc58a78040b0', '2017-04-22 16:42:37'),
(10, 'isa', 'isa', 'isa', 'Staff', 'ika@na.edu', '8323670979', '10f7ef0077aa26b7a043bc58a78040b0', '2017-04-22 17:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `location`, `caption`, `type`, `price`, `contact`) VALUES
(5, 'posts/Selection_006.png', 'Aigul gulu', 'selling', '34', '34656846'),
(7, 'posts/Selection_013.png', 'ubuntu', 'living', '654', '763456346');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

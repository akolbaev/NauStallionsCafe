-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2017 at 08:21 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `naucaffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `selection` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `poststype` varchar(15) DEFAULT NULL,
  `caption` varchar(100) NOT NULL,
  `price` varchar(10) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `member` (`id`);

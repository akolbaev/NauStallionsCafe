-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naucaffee`
--

-- --------------------------------------------------------


--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `Email`, `message`) VALUES
(4, 'Aldrin Ramos', 'red@gmail.com', 'asdkasdiu hairweopasodpj'),
(3, 'Kenneth Aboy', 'red@gmail.com', 'awsdasdkjasd'),
(5, 'Kenneth', 'red@gmail.com', 'asdasdas'),
(6, 'Kenneth', 'red@gmail.com', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `poruductID` int(11) NOT NULL,
  `price` double(11,2) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `transaction_code` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` double(11,2) NOT NULL,
  `productID` int(11) NOT NULL,
  `total` double(11,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `modeofpayment` varchar(100) NOT NULL,
  `transaction_code` varchar(200) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE IF NOT EXISTS `tb_products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(200) NOT NULL,
  `originated` varchar(500) NOT NULL,
  `price` double(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(500) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`productID`, `name`, `description`, `category`, `originated`, `price`, `quantity`, `location`) VALUES
(1, 'GX invaders', 'Electric Guitar Multi-Sound ', 'Guitar', 'Korea', 38500.00, 8, 'upload/g1.png'),
(8, 'Fernando Esteban', 'Block Base Drums', 'Drums', 'China', 12000.00, 10, 'upload/drumset.png'),
(9, 'Joker Flute', '8 Wind Hole Pipe Bamboo', 'Flute', 'Americ', 10000.00, 100, 'upload/Flute-icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(15, 'admin', 'admin', 'Kenneth', 'Aboy'),
(16, 'nose', 'nose', 'Alyssa Marie ', 'David');




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
<<<<<<< HEAD
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
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> 7098f65dfc538d7275ea4282261adedc6f9c6f42

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2017 at 06:36 AM
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
  `avatar` varchar(100) NOT NULL,
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

INSERT INTO `member` (`id`, `avatar`, `username`, `first_name`, `last_name`, `selection`, `email`, `mobilenumber`, `password`, `date_added`) VALUES
(1, 'images/avatars/man-156584_960_720.png', 'rav', 'Ravshanbek ', 'Norboev ', 'Staff', 'rav@gmail.com', '2147483647', '202cb962ac59075b964b07152d234b70', '2016-11-12 20:24:33'),
(2, 'images/avatars/IMG_2057.JPG', 'ikamilov', 'Islam     ', 'Kamilov     ', 'Admin', 'ikamilov@na.edu', '8324071153', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-18 21:20:37'),
(3, '', 'btazhibaev', 'Baktybek', 'Tazhibaev', 'Student', 'btazhibaev@na.edu', '234651234', 'e10adc3949ba59abbe56e057f20f883e', '2017-04-19 11:27:17'),
(4, '', 'isco', 'isco', 'isco', 'Visitor', 'iska@na.edu', '2147483647', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-22 14:14:55'),
(5, '', 'isco', 'isco', 'isco', 'Visitor', 'isco@na.edu', '2147483647', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-22 14:16:51'),
(6, '', 'rav', 'Ravshanbek', 'Norboev', 'Student', 'rav@na.edu', '7892345234', '81dc9bdb52d04dc20036dbd8313ed055', '2017-04-22 15:18:27'),
(9, '', 'ewer', 'qwer', 'qwer', 'Visitor', 'qqwer@na.edu', '213542134', '10f7ef0077aa26b7a043bc58a78040b0', '2017-04-22 16:42:37'),
(10, '', 'isa', 'isa', 'isa', 'Staff', 'ika@na.edu', '8323670979', '10f7ef0077aa26b7a043bc58a78040b0', '2017-04-22 17:05:51'),
(11, '', 'ikaragol', 'Ihsan', 'Karagol', 'Student', 'ikaragol@na.edu', '8327096084', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-25 12:25:36'),
(12, '', 'kisaev', 'Kalys', 'Isaev', 'Student', 'kisaev@na.edu', '8325604123', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-04-25 12:55:17'),
(13, '', 'zhosmonaliev', 'Zhumabek  ', 'Osmonaliev  ', 'Student', 'zhosmonaliev@na.edu', '8326742965', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-05-04 12:12:13'),
(18, 'images/avatars/samsung-galaxy-s7.jpg', 'test', 'test   ', 'test   ', 'test', 'test@na.edu', '12312', 'c20ad4d76fe97759aa27a0c99bff6710', '2017-05-04 21:19:37'),
(19, 'images/avatars/IMG_2057.JPG', 'kamilov', 'Islam  ', 'Kamilov  ', 'Student', 'kamilov@na.edu', '8326531386', 'f6a4eb43ff80e34f1d7c9e85cac46ffb', '2017-05-04 23:35:55'),
(20, 'images/avatars/man-156584_960_720.png', 'kevin', 'Kevin   ', 'David                                        ', 'Staff', 'john@gmail.com', '8328763685', '827ccb0eea8a706c4c34a16891f84e7b', '2017-05-05 09:29:27'),
(23, 'images/avatars/man-156584_960_720.png', 'John', 'Kevin  ', 'Tony   ', 'Student', 'tony@gmail.com', '8320862674', '827ccb0eea8a706c4c34a16891f84e7b', '2017-05-05 11:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `location`, `caption`, `type`, `price`, `contact`) VALUES
(10, 2, 'posts/images.jpg', 'I need House', 'living', '1000.00', '(832)709-6084'),
(12, 11, 'posts/4e160b46b216b574ec4a5cab04c51e1c.gif', 'Geography', 'buying', '20', 'iska@na.edu'),
(13, 11, 'posts/img0.jpg', 'Windows', 'selling', '1200', 'kisaev@na.edu'),
(17, 11, 'posts/51-lF8qhCsL._SX369_BO1,204,203,200_.jpg', 'Manual Lab', 'buying', '24.99', '8324086524'),
(19, 2, 'posts/w560x373.jpg', 'Need Roommate', 'living', '399.99', '8324072743'),
(20, 12, 'posts/USC60TOC021A021001.jpg', 'Camry, 2004', 'selling', '4900.00', 'kisaev@na.edu'),
(21, 2, 'posts/Notebook-Chambray-Web.png', 'Notebook', 'selling', '4.99', 'ikamilov@na.edu'),
(22, 2, 'posts/ultrabooks.jpg', 'Need Ultrabook', 'buying', '129.89', 'ikamilov@na.edu'),
(23, 1, 'posts/mechanical-keyboard-kul-es-87-01.jpg', 'Nice Keyboard', 'selling', '16.77', 'rav@gmail.com'),
(25, 1, 'posts/moda-apartments-exterior.jpg', 'Leasing', 'living', '449.99', 'rav@gmail.com'),
(36, 2, 'posts/48a8a591.jpeg', 'Super Bike ', 'buying', '59.99', '8324071152');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`User_ID`, `Username`, `Password`, `Full_Name`) VALUES
(1, 'admin', 'admin', 'Ravshanbek Norboev'),
(2, 'admin2', 'admin2', 'Islam Kamilov'),
(3, 'admin3', 'admin3', 'Azamat Kolbaev');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `Name_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date_and_Time` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`Name_ID`, `Name`, `Email`, `Phone`, `Message`, `Date_and_Time`, `Subject`) VALUES
(1, 'Test', 'test@yahoo.com', '123456789064', 'This is a Test', '2017-05-01 02:04:50', 'Test'),
(2, 'Islam', 'ikamilov@na.edu', '7243452345', 'dfgsdf', '2017-05-02 10:44:36', 'Tests');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`Name_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `Name_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`id`);

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 08:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `substringtechnologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Gautam Shukla', 'raman@gmail.com', 'java', 'hi i am gautam'),
(2, 'Gautam Shukla', 'aj@gamil.com', 'offline_training', 'hi i am here'),
(3, 'hd', 'raman@gmail.com', 'online_training', 'hii i am hd '),
(4, 'ramesh', 'ramesh@gamil', 'offline_training', 'i am ramesh'),
(5, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'uhgufgufg'),
(6, 'Gautam Shukla', 'raman@gmail.com', 'online_training', 'erdtaesrtert'),
(7, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'sadadf'),
(8, 'gaiuta', 'raman@gmail.com', 'offline_training', 'wesrwatrwater'),
(9, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'yuey'),
(10, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'yuey'),
(11, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'yuey'),
(12, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'yuey'),
(13, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'guiiiuyhiuyh'),
(14, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'ew wqeewq'),
(15, 'sachin', 'sachin@gmail.com', 'offline_training', 'hiii i am sachin'),
(16, 'durgesh', 'dk@gmail.com', 'offline_training', 'wqewqERQW'),
(17, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'WQE QWE'),
(18, 'Gautam Shukla', 'raman@gmail.com', 'offline_training', 'hi i am gautam'),
(19, 'Gautam Shukla', 'aj@gamil.com', 'offline_training', 'weewrter'),
(20, 'Gautam Shukla', 'raman@gmail.com', 'Want_an_App', 'ghdfg'),
(21, 'suman ', 'gautam@gamil.com', 'javascript_training', 'zsdfasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetail`
--
ALTER TABLE `studentdetail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

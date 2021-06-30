-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 08:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sno` int(50) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `rno` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `certification` varchar(225) NOT NULL,
  `datim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sno`, `first_name`, `last_name`, `rno`, `email`, `password`, `certification`, `datim`) VALUES
(1, 'Taddi', 'Madhuri', '19A51A05D0', 'madhuri@gmail.com', 'madhuri', '', '2021-06-20 14:56:33'),
(2, 'ambati', 'veda priya', '19A51A0571', 'vedapriya@gmail.com', 'vedapriya', '', '2021-06-20 15:07:12'),
(3, 'Taddi', 'chakri', '19A51A0549', 'chakri@gmail.com', 'chakri', '', '2021-06-20 15:10:04'),
(4, 'rejeti', 'pratyusha', '549', 'pratyusha@gmail.com', 'pratyusha', '', '2021-06-23 07:58:10'),
(5, 'sarmista', 'nayak', '545', 'sarmista@gmail.com', 'sarmista', '', '2021-06-28 03:05:18'),
(6, '', '', '', '', '', '', '2021-06-28 03:41:57'),
(9, 'Aditya', 'Reddy', '19A51A05B0', 'aditya@gmail.com', 'aditya', '', '2021-06-30 03:00:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

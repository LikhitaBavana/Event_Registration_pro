-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 12:56 PM
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
-- Table structure for table `certified`
--

CREATE TABLE `certified` (
  `sno` int(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `certification` varchar(225) NOT NULL,
  `datim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certified`
--

INSERT INTO `certified` (`sno`, `fname`, `email`, `certification`, `datim`) VALUES
(1, 'Taddi Madhuri', 'madhuri@gmail.com', 'yes', '2021-06-30 10:09:24'),
(2, 'Sarmista Nayak', 'sarmista@gmail.com', 'yes', '2021-06-30 10:11:20'),
(5, 'Rejeti Pratyusha', 'pratyusha@gmail.com', 'yes', '2021-06-30 10:15:56'),
(6, 'ambati vedapriya', 'vedapriya@gmail.com', 'yes', '2021-06-30 10:21:37'),
(7, 'chakri', 'chakri@gmail.com', 'yes', '2021-06-30 10:51:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certified`
--
ALTER TABLE `certified`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certified`
--
ALTER TABLE `certified`
  MODIFY `sno` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

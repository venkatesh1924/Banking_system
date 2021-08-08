-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 06:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsfdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `currentbalance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table to store the customers information';

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `currentbalance`) VALUES
(1, 'Venkat', 'naniv931@gmail.com', 48000),
(2, 'Prabhas', 'prabhas@gmail.com', 41000),
(3, 'Mahesh', 'mahesh@gmail.com', 43130),
(4, 'Uma', 'uma@gmail.com', 44000),
(5, 'Raju', 'raj@gmail.com', 26700),
(6, 'Ramya', 'ramya@gmail.com', 34000),
(7, 'Nick ', 'nick@gmail.com', 67000),
(8, 'Alam', 'alam@gmail.com', 47000),
(9, 'Rajesh', 'rajesh@gmail.com', 49000),
(10, 'Sheshu', 'sheshu@gmail.com', 27000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `S.No` int(5) NOT NULL,
  `SenderName` varchar(30) NOT NULL,
  `ReceiverName` varchar(30) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Date&Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`S.No`, `SenderName`, `ReceiverName`, `Amount`, `Date&Time`) VALUES
(1, 'Mahesh', 'Uma', 100, '2021-08-04 21:21:17'),
(2, 'Raju', 'Rajesh', 200, '2021-08-04 21:21:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `S.No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

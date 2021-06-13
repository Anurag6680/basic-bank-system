-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 03:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Aman ', 'Aman@gmail.com', 48800),
(2, 'Raghav', 'Raghav@gmail.com', 19000),
(3, 'Nikhil', 'Nikhil@gmail.com', 40000),
(4, 'Priyanka', 'Priya@gmail.com', 50000),
(5, 'Yash', 'Yash@gmail.com', 60000),
(6, 'Ranbir', 'Ranbir@gmail.com', 31000),
(7, 'Anushka', 'Anushka@gmail.com', 50000),
(8, 'Rahul', 'Rahul@gmail.com', 41000),
(9, 'Nick', 'Nick@gmail.com', 30200),
(10, 'Arjun', 'Arjun@gmail.com', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Aman ', 'Raghav', 2000, '2021-04-03 17:44:06'),
(2, 'Arjun', 'Raghav', 10000, '2021-04-03 17:45:14'),
(3, 'Raghav', 'Yash', 20000, '2021-04-03 18:27:10'),
(4, 'Raghav', 'Ranbir', 1000, '2021-04-04 10:05:19'),
(5, 'Aman ', 'Rahul', 1000, '2021-04-04 11:45:42'),
(6, 'Aman ', 'Nick', 200, '2021-04-04 12:04:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

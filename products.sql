-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 04:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `employee_code` int(11) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `role` varchar(256) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `employee_code`, `designation`, `role`, `age`) VALUES
(1, 'Abdullah', 12, 'asdas', 'asda', 2),
(3, 'aaa', 128, 'dd ', '1', 0),
(8, 'ff', 98, 'sd', '7', 0),
(10, 'asd', 128, 'dd', '223', 0),
(19, 'Bilal', 123, 'billlu', 'balu', 12);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `fName` varchar(10) NOT NULL,
  `lName` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `eyeColour` varchar(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `sAddress` varchar(100) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fName`, `lName`, `gender`, `eyeColour`, `phone`, `Description`, `sAddress`, `age`) VALUES
(2, 'bilal', 'Rehman', 'on', 'nomad', 2147483647, 'asadadas', 'asasdasd', 0),
(3, 'bilalas', 'dd', 'on', 'lipas', 33255, 'sa', 'asasdasda', 0),
(4, 'tttt', 'ggggg', '', 'blueStar', 332, 'asdasd', 'hhhh', 0),
(5, 'b', 'Rehman', '', 'blueStar', 2147483647, 'asadadas', 'asasdasd', 0),
(6, 'ffdddd', 'Rehman', 'Male', 'cobalt', 2147483647, 'asadadas', 'asasdasd', 20),
(7, 'asd', 'asd', 'on', 'lipas', 2147483647, 'sa', 'asasdasda', 0),
(9, 'a', 'a', 'on', 'lipas', 33255, 'sa', 'asasdasd', 0),
(10, 'ba', 'b', 'Female', 'blueStar', 2147483647, 'sa', 'asasdasd', 0),
(11, 'c', 'c', '', 'blueStar', 33255, 'asadadas', 'asasdasd', 0),
(12, 'bilal', 'a', 'Male', 'parisbrun', 2147483647, 'asadadas', 'asasdasd', 0),
(13, 'bilal', 'a', 'Male', 'parisbrun', 2147483647, 'asadadas', 'asasdasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `cost_price`, `sale_price`) VALUES
(1, 'Muhammad Abdullah', 21, 'as', 12, 33),
(2, 'Abdullah', 150, 'asd', 1223, 223),
(4, 'M', 21, 'as', 12, 33);

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL,
  `supplier_Name` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `item` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`id`, `asset_id`, `supplier_Name`, `description`, `item`) VALUES
(1, 1212, 'aaa', 'sssss', 'asd'),
(2, 1212, 'bilal', 'bala', 'block'),
(4, 1212, 'aaa', 'sssss', 'asd'),
(5, 123, 'assddd', 'aaaaa', 'ffffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

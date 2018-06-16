-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 11:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web3`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `tpnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `name`, `email`, `username`, `password`, `dob`, `Address`, `tpnumber`) VALUES
(4, 'test', 'test2@gmail.com', 'test', 'test', '1230-09-22', '', '32423424'),
(5, 'admin', 'test2@gmail.com', 'admin', 'admin', '1230-09-22', '', '32423424'),
(31, 'radi', 'radi@rocketmail.com', 'radi', 'a', '2017-09-26', 'a', '4');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `message`, `date`) VALUES
(1, 'wq@ss.com', 'messafe', '2016-02-10 13:52:29'),
(2, 'rudra@gmail.com', 'need more products', '2017-08-24 19:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(200) NOT NULL,
  `category` varchar(500) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `image`, `price`, `category`, `size`) VALUES
(7, 'SHoe Limited', '789182.jpg', 12, 'Drinks', ''),
(13, 'Equipment2', '370259.jpg', 12, 'Equipment', ''),
(14, 'Equipment1', '416874.jpg', 13, 'Equipment', ''),
(15, 'Chelsea Jersey', '977166.jpg', 40, 'Jersey', ''),
(16, 'Shoe', '237518.jpg', 100, 'Shoe', ''),
(17, 'MU', '866254.jpg', 100, 'Jersey', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_qty` int(255) NOT NULL,
  `order_by` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `size` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `item_price`, `item_qty`, `order_by`, `date`, `status`, `size`, `category`) VALUES
(7, 'Chelsea Jersey', '40', 2, 'radi', '2017-09-12 22:23:58', 'Pending', 'XL', ''),
(8, 'Shoe', '100', 3, 'radi', '2017-09-12 22:28:05', 'Pending', '', ''),
(9, 'Shoe', '100', 3, 'radi', '2017-09-12 22:29:07', 'Pending', '', ''),
(10, 'Shoe', '100', 3, 'radi', '2017-09-12 22:29:50', 'Pending', '', ''),
(11, 'MU', '100', 4, 'radi', '2017-09-12 22:30:09', 'Pending', 'XXL', ''),
(12, 'Chelsea Jersey', '40', 2, 'firdaus', '2017-09-12 22:33:01', 'Pending', 'S', ''),
(13, 'Shoe', '100', 3, 'firdaus', '2017-09-12 22:33:09', 'Pending', '', ''),
(14, 'Equipment2', '12', 1, 'test', '2017-09-12 23:02:45', 'Pending', '', ''),
(15, 'Chelsea Jersey', '40', 2, 'test', '2017-09-12 23:02:59', 'Pending', 'L', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 04:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-users`
--

CREATE TABLE `admin-users` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin-users`
--

INSERT INTO `admin-users` (`id`, `username`, `email`, `pasword`) VALUES
(1, 'Deepali', '1234@gmail.com', '123'),
(2, 'sonal', '123@gmail.com', 'abc'),
(3, 'harshada', 'abc@gmail.com', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `phone`, `address`, `city`, `state`, `pincode`, `email`) VALUES
(1, 'Deepali', '1234567', 'as', 'latur', 'mh', '413512', '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `pcode` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pcode`, `name`, `image`, `price`, `discount`, `cat`) VALUES
(1, 'L1', 'Laptop X', 'images/product1.jpeg', '78000', 10, 'lap'),
(2, 'L2', 'Laptop Y', 'images/product2.jpeg', '81000', 20, 'lap'),
(3, 'L3', 'Laptop Z', 'images/product3.jpeg', '91000', 13, 'lap'),
(4, 'L4', 'Laptop A', 'images/product4.jpeg', '64000', 11, 'lap'),
(5, 'M1', 'Mobile A', 'images/product5.jpeg', '34000', 16, 'mob'),
(6, 'M2', 'Mobile X', 'images/product6.jpeg', '32000', 18, 'mob'),
(7, 'M3', 'Mobile Y', 'images/product7.jpeg', '19000', 9, 'mob'),
(8, 'M4', 'Mobile Z', 'images/product8.jpeg', '43000', 13, 'mob'),
(9, 'T1', 'Tablet A', 'images/product9.jpeg', '67000', 10, 'tab'),
(10, 'T2', 'Tablet X', 'images/product10.jpeg', '81000', 15, 'tab'),
(11, 'T3', 'Tablet Y', 'images/product11.jpeg', '63000', 12, 'tab'),
(12, 'T4', 'Tablet Z', 'images/product12.jpeg', '59000', 7, 'tab'),
(13, 'H1', 'Hadphone A', 'images/product13.jpeg', '5000', 2, 'hdpn'),
(14, 'H2', 'Hadphone X', 'images/product14.jpeg', '9000', 5, 'hdpn'),
(15, 'H3', 'Hadphone Y', 'images/product15.jpeg', '6200', 11, 'hdpn'),
(16, 'H4', 'Hadphone Z', 'images/product16.jpeg', '5410', 8, 'hdpn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-users`
--
ALTER TABLE `admin-users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-users`
--
ALTER TABLE `admin-users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 11:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `op_id` int(10) NOT NULL,
  `o_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `quantity` int(20) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`op_id`, `o_id`, `p_id`, `quantity`, `total`) VALUES
(1, 2, 8, 1, 100),
(2, 3, 12, 2, 200),
(3, 4, 2, 1, 300),
(4, 4, 1, 2, 400),
(5, 5, 9, 1, 200),
(7, 7, 2, 1, 300),
(8, 8, 10, 1, 50),
(9, 9, 1, 1, 200),
(10, 10, 1, 12, 2400),
(11, 11, 2, 1, 300),
(12, 12, 1, 1, 200),
(13, 13, 2, 1, 300),
(14, 14, 2, 1, 300),
(15, 15, 10, 16, 800),
(16, 16, 13, 29, 7250),
(17, 16, 2, 14, 4200),
(18, 17, 10, 1, 50),
(19, 18, 2, 1, 300),
(20, 19, 2, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(50) NOT NULL,
  `m_id` int(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `m_id`, `date`) VALUES
(12, 1, '2021-04-24 12:45:58'),
(13, 1, '2021-04-24 12:52:32'),
(14, 15, '2021-04-24 13:08:07'),
(15, 18, '2021-04-25 07:20:43'),
(16, 15, '2021-04-25 15:18:41'),
(17, 20, '2021-04-25 15:45:59'),
(18, 15, '2021-04-25 16:15:34'),
(19, 15, '2021-04-25 22:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(4) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `images` varchar(100) NOT NULL,
  `available` varchar(10) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `name`, `price`, `categories`, `images`, `available`, `quantity`) VALUES
(1, 'Chicken Cheese Burger', 200, 'fastfood', 'beef cheese burger.jpg', 'availabe', 85),
(2, 'Beef Cheese Burger', 300, 'fastfood', 'chicken_cheese_burger.jpg', 'availabe', 80),
(8, 'Custard', 100, 'desert', 'custard.jpg', 'availabe', 99),
(9, 'Ice Cream', 200, 'desert', 'icecream.jpeg', 'availabe', 99),
(10, 'sub', 50, 'fastfood', 'sub.jpg', 'availabe', 81),
(11, 'Tea', 25, 'beverage', 'tea.jpg', 'availabe', 99),
(12, 'Coffee', 100, 'beverage', 'coffe.jpg', 'availabe', 99),
(13, 'Beef Khichuri', 250, 'meal', 'beef khichuri.jpg', 'availabe', 70),
(14, 'Pastry', 100, 'desert', 'pastry.jpg', 'availabe', 200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FullName`, `UserName`, `Password`, `Role`, `Email`, `Pic`) VALUES
(15, 'arif ahmed1', 'arif1212', '1234', 'Customer', 'aimzarifj123@gmail.com', 'IMG_0455.JPG'),
(18, 'arif', 'arif24', '1234', 'Customer', 'ahmedarif76368@gmail.com', 'IMG_0455.JPG'),
(20, 'arif360', 'arif360', 'arif#123', 'Customer', 'arif@gmail.com', '271681 (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`op_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `op_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

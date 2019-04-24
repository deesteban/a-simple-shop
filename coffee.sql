-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2019 at 01:22 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderDesc` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `paymentType` int(1) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDesc`, `userName`, `paymentType`, `completed`) VALUES
(15, 7, 'Robert', 0, 0),
(16, 10, 'Jack', 0, 1),
(17, 15, 'Jasmine', 0, 1),
(18, 9, 'Frank', 1, 1),
(19, 4, 'Jaime', 0, 1),
(20, 6, 'Lian', 1, 1),
(21, 19, 'Anne', 0, 0),
(22, 3, 'Manolita', 0, 1),
(23, 17, 'Maria K', 1, 1),
(24, 14, 'Jaime', 0, 1),
(25, 20, 'Tristan', 0, 1),
(26, 12, 'Ricky', 0, 1),
(27, 6, 'Kevin', 1, 1),
(28, 6, 'John', 1, 1),
(29, 22, 'Julien', 1, 1),
(30, 12, 'Jack Peralta', 1, 1),
(31, 12, 'alberto', 1, 0),
(32, 8, 'Roberto', 0, 0),
(33, 4, 'Robert Langley', 1, 1),
(35, 4, '', 1, 1),
(36, 12, '', 0, 1),
(37, 9, '', 0, 1),
(38, 2, '', 0, 1),
(39, 4, 'aaaaa', 0, 0),
(40, 22, 'Jack', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productDesc` varchar(50) NOT NULL,
  `nInStock` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productDesc`, `nInStock`, `price`) VALUES
(1, 'Coffee - Small', 100, 3.95),
(2, 'Coffee - Medium', 100, 4.25),
(3, 'Coffee - Large', 100, 4.75),
(4, 'Latte - Large', 100, 4.49),
(5, 'Espresso', 100, 3.19),
(6, 'Double Espresso', 100, 4.29),
(7, 'Capuccino - Medium', 100, 3.79),
(8, 'Capuccino - Large', 100, 4.79),
(9, 'Long Black - Medium', 100, 4.29),
(10, 'Long Black - Large', 100, 5.39),
(11, 'Hot Chocolate - Medium', 100, 3.89),
(12, 'Hot Chocolate - Large', 100, 4.89),
(13, 'Earl Grey - Medium', 100, 4.19),
(14, 'Earl Grey - Large', 100, 5.29),
(15, 'Assam Tea - Medium', 100, 4.89),
(16, 'Assam Tea - Large ', 100, 5.79),
(17, 'Green Tea- Medium', 100, 4.49),
(18, 'Green Tea - Large', 100, 5.89),
(19, 'Mint Tea - Medium', 100, 4.19),
(20, 'Mint Tea - Large', 100, 5.79),
(21, 'Cake', 100, 5.79),
(22, 'Sandwich', 100, 5.49);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) NOT NULL,
  `psw` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `psw`) VALUES
(1, 'virshan', '$2y$10$eJmN7NGfqc4b7.SLo.b2vuxUXubHYevudWJmJIG7qTkMoann0wbvq'),
(3, 'john11', '$2y$10$FIfgBKdnzOr55Gh2RhkVo.vzBiRZbgg6J0osqJ95zEQQ2EsOkcMk2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `productID` (`orderDesc`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `productID` FOREIGN KEY (`orderDesc`) REFERENCES `products` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

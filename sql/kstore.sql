-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2022 at 08:56 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestsellers`
--

CREATE TABLE `bestsellers` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestsellers`
--

INSERT INTO `bestsellers` (`product_id`, `name`, `artist`, `price`, `image`) VALUES
(1, 'Jack in the Box', 'J-Hope', 350, 'images/jackinthebox.png'),
(2, 'Oddinary', 'StrayKids', 420, 'images/oddinary.png'),
(3, 'Universe', 'NCT', 400, 'images/universe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `released` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `artist`, `price`, `image`, `released`) VALUES
(1, 'Moodswings in This Order', 'DPR IAN', 280, 'images/mito.jpg', '2021-03-12'),
(2, 'Lowlife Princess', 'BIBI', 350, 'images/lowlife.jpg', '2022-11-22'),
(3, 'Gasoline', 'KEY', 280, 'images/gasoline.png', '2022-08-21'),
(4, 'I Love', 'G-idle', 400, 'images/love.png', '2022-10-17'),
(5, 'Magic Man', 'Jackson Wang', 290, 'images/magicman.png', '2022-09-09'),
(6, 'Jack in the Box', 'J-Hope', 350, 'images/jackinthebox.png', '2022-07-15'),
(7, 'Universe', 'NCT', 400, 'images/universe.jpg', '2022-12-14'),
(8, 'Oodinary', 'StrayKids', 420, 'images/oddinary.png', '2022-03-18'),
(9, 'Advice', 'Taemin', 380, 'images/advice.jpg', '2022-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `artist` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`artist`, `album`, `date`, `image`) VALUES
('WayV', 'Phantom', '2023-01-05', 'images/phantom.png'),
('Minho', 'Chase', '2022-12-30', 'images/chase.png'),
('BOA', 'Forgive Me', '2022-12-21', 'images/forgive.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `surname`, `email`, `password`, `address`) VALUES
(1, 'Nikki', 'Burges', 'Nikki@gmail.com', 'test123', '123 Main Avenue, Burgville, Pretoria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

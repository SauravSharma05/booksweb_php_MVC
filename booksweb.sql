-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 04:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adc`
--

CREATE TABLE `adc` (
  `cart_id` int(11) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `quantity` varchar(5) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adc`
--

INSERT INTO `adc` (`cart_id`, `price`, `quantity`, `book_id`, `user_id`) VALUES
(11, '360', '1', 3, 9),
(12, '350', '2', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `image` varchar(120) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author`, `price`, `description`, `image`, `cat_id`) VALUES
(2, 'harry potter', 'jk rowling', '300', 'Tempore cillum non ', '../../assets/userside/images/1709106466logol in progress.jpg', 1),
(3, 'a tale of two birds', 'yash', '360', 'Animi ex cupidatat ', '../../assets/userside/images/1709107025moviehub.jpg', 2),
(4, 'hockey legend', 'ankit', '350', 'Aliquip et eos quasi', '../../assets/userside/images/1709107034shreyanshthegod.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `book_cat`
--

CREATE TABLE `book_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_cat`
--

INSERT INTO `book_cat` (`cat_id`, `cat_name`) VALUES
(1, 'thriller'),
(2, 'horror'),
(3, 'funny');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_as` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `email`, `password`, `role_as`) VALUES
(1, 'Rhoda Skinner finally', 'Ipsum est architecto', 'byrivow@mailinator.com', 'Pa$$w0rd!', 0),
(3, 'Willow Moreno', 'Aute ipsa voluptas ', 'makixo@mailinator.commm', 'Pa$$w0rd!', 0),
(6, 'Lyle Copeland', 'Doloremque dignissim', 'tovuxu@mailinator.com', 'Pa$$w0rd!', 0),
(7, 'Illana Hatfield', 'Perferendis aliquid ', 'mexecex@mailinator.com', 'Pa$$w0rd!', 0),
(8, 'admin', 'abcd lane ', 'admin@gmail.com', '123', 1),
(9, 'user1', 'abc', 'user1@gmail.com', '123', 0),
(10, 'Lee Terrell', 'Et ut perferendis qu', 'user2@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adc`
--
ALTER TABLE `adc`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `book_cat`
--
ALTER TABLE `book_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adc`
--
ALTER TABLE `adc`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_cat`
--
ALTER TABLE `book_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adc`
--
ALTER TABLE `adc`
  ADD CONSTRAINT `adc_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `adc_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `book_cat` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

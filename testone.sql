-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 01:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testone`
--

-- --------------------------------------------------------

--
-- Table structure for table `testone_products`
--

CREATE TABLE `testone_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testone_products`
--

INSERT INTO `testone_products` (`id`, `name`, `price`, `quantity`) VALUES
(2, 'makeup', '20000', 5),
(3, 'earph', '30000', 5),
(900, 'earph', '30000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `testone_users`
--

CREATE TABLE `testone_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testone_users`
--

INSERT INTO `testone_users` (`id`, `username`, `email`, `password`) VALUES
(1, 'alice', 'alice@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'johndoe', 'johndoe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Me', 'me@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testone_products`
--
ALTER TABLE `testone_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testone_users`
--
ALTER TABLE `testone_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testone_products`
--
ALTER TABLE `testone_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;

--
-- AUTO_INCREMENT for table `testone_users`
--
ALTER TABLE `testone_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

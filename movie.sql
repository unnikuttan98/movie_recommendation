-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 06:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_movie`
--

CREATE TABLE `add_movie` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `movie_rating` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_movie`
--

INSERT INTO `add_movie` (`movie_id`, `user_id`, `movie_name`, `movie_rating`) VALUES
(6, 1, 'Vettom', '4'),
(7, 2, 'Ravanaprabhu', '3'),
(8, 4, 'King Liar', '5.0'),
(9, 5, 'Lucifer', '4.1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `movies` varchar(30) NOT NULL,
  `recommendations` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `movies`, `recommendations`) VALUES
(1, 'Rahul', 'not updated', 'not updated'),
(2, 'Alice', 'not updated', 'not updated'),
(3, 'Charlie', 'not updated', 'not updated'),
(4, 'Gokul', 'not updated', 'not updated'),
(5, 'Akhil', 'not updated', 'not updated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movie`
--
ALTER TABLE `add_movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_movie`
--
ALTER TABLE `add_movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_movie`
--
ALTER TABLE `add_movie`
  ADD CONSTRAINT `add_movie_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

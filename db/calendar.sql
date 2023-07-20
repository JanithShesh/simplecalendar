-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2023 at 05:00 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `startDate` varchar(30) NOT NULL,
  `hw_days` int(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `username`, `title`, `startDate`, `hw_days`, `color`) VALUES
(4, 'test2', 'test2 event', '2022-12-15', 1, 'red'),
(7, 'test', 'test 2', '2023-03-30', 3, 'yellow'),
(29, 'test', 'new one', '2023-03-15', 5, 'blue'),
(21, 'test', 'event 10', '2023-03-21', 2, 'blue'),
(26, 'test', 'test event', '2023-03-08', 2, 'black'),
(32, 'test', 'test', '2023-03-01', 5, 'red'),
(33, 'test', 'test', '2023-03-08', 3, ''),
(34, 'test', 'test event', '2023-03-29', 1, ''),
(35, 'test', 'test event', '2023-03-28', 1, ''),
(36, 'test', 'test', '2023-03-15', 2, ''),
(41, 'test', 'new', '2023-03-06', 3, 'green'),
(42, 'test', 'test event', '2023-03-12', 3, 'red');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('test', '827ccb0eea8a706c4c34a16891f84e7b', 'test@gmail.com'),
('test2', 'e10adc3949ba59abbe56e057f20f883e', 'test2@gmail.com'),
('janith', '670b14728ad9902aecba32e22fa4f6bd', 'test@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

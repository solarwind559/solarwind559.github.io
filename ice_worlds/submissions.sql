-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 12:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `submissions`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `surname`, `email`, `message`) VALUES
(50, 'harry', 'potter', 'potter@harry.lv', 'hi!'),
(51, 'harry', 'potter', 'potter@harry.lv', 'hi!'),
(52, 'Hermione', 'Granger', 'hogwarts@history.co.uk', 'Test this'),
(53, 'Hermione', 'Granger', 'hogwarts@history.co.uk', 'Test this'),
(54, 'Penguin', 'Emperor', 'penguin@antarctica.com', 'Yeah!'),
(55, 'Penguin', 'Emperor', 'penguin@antarctica.com', ':)'),
(56, 'Penguin', 'Emperor', 'penguin@antarctica.com', ':)'),
(57, 'Penguin', 'Emperor', 'penguin@antarctica.com', ':)'),
(58, 'Penguin', 'Emperor', 'penguin@antarctica.com', ':)'),
(59, 'Penguin', 'Emperor', 'penguin@antarctica.com', ':)'),
(60, 'Penguin', 'Emperor', 'penguin@antarctica.com', ':)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

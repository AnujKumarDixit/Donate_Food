-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 01:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `contact`, `gender`, `address`, `city`, `state`, `message`) VALUES
('Jyoti', 9874561230, 'Female', 'K. G. Halli', 'Bengaluru', 'Karnataka', 'Happy to serve.'),
('Chandana', 4561230789, 'Female', 'Wedia School', 'Bengaluru', 'Karnatak', 'It\'s good to feed needy people.'),
('Rishi', 9107994562, 'Male', 'Kirloskar Layout', 'Bengaluru', 'Karnataka', 'Feeling glad that I\'m helping to nourish India'),
('Swati', 4567890123, 'female', 'Malleshwaram', 'Bengaluru', 'Karnataka', 'Everyone should contribute their part.'),
('', 7878788798, '', 'address', 'city', 'state', 'message'),
('Khushi', 7878788798, 'Female', 'ewr', 'ere', 'wer', 'werer'),
('Khushi', 7878788798, 'Female', 'Majestic', 'Bengaluru', 'Karnataka', 'You guys are doing a great job.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `password`) VALUES
(1, 'qw', 'as'),
(2, 'as', 'zx'),
(3, 'Khushi', 'khushi'),
(4, 'jyoti', 'jyoti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

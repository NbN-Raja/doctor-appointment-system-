-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 06:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctors` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, '0', '0', 1234567891, '0'),
(2, '0', '0', 0, '0'),
(3, '0', '0', 1234567891, '0'),
(4, 'ghj', 'nnn@gmail.com', 1234567891, 'fsdfsdf'),
(5, 'ghj', 'nnn@gmail.com', 1234567891, 'fsdfsdf'),
(6, 'naibin', 'nnn@gmail.com', 1234567891, 'fuck you bitch>>');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `firstname`, `surname`, `username`, `email`, `gender`, `phone`, `country`, `password`) VALUES
(1, 'nabin', 'gggg', 'admin', 'nabinxettri18@gmail.com', 'male', 1234567899, 'chitwan', 'bb'),
(2, 'nabin', 'gggg', 'admin', 'nabinxettri18@gmail.com', 'male', 1234567899, 'chitwan', 'vv'),
(3, 'nabin', 'gggg', 'admin', 'nnn@gmail.com', 'male', 1234567899, 'chitwan', 'eee'),
(4, 'e', 'a', 'admin', 'ndbhalerao91@gmail.com', 'male', 5656565, 'chitwan', 'r'),
(5, 'nabin', 'gggg', 'admin', 'nabinxettri18@gmail.com', 'male', 1234567899, 'chitwan', 'ww'),
(6, 's', 's', 's', 's', 'male', 0, 'chitwan', 'a'),
(7, 's', 's', 's', 's', 'male', 0, 'chitwan', 'a'),
(8, 's', 's', 's', 's', 'male', 0, 'chitwan', 'w'),
(9, 'o', 'o', 'o', 'o', 'male', 0, 'chitwan', 'o'),
(10, 'l', 'l', 'l', 'l', 'male', 0, 'chitwan', 'l'),
(11, 'w', 'w', 'nbn', 'w', 'male', 0, 'chitwan', 'w'),
(12, 'w', 'w', 'nbn', 'w', 'male', 0, 'chitwan', 'q'),
(13, 'w', 'w', 'nbn', 'w', 'male', 0, 'chitwan', 't'),
(14, 'NABIN', 'XETTRI', 'sadsa', 'nabinxettri15@gmai.com', 'male', 453534, 'chitwan', 'ssssssss'),
(15, 'NABIN', 'XETTRI', 'io', 'nabinxettri15@gmai.com', 'male', 66, 'chitwan', 'yyyyyyyyyy');

-- --------------------------------------------------------

--
-- Table structure for table `doct_timing`
--

CREATE TABLE `doct_timing` (
  `id` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doct_timing`
--

INSERT INTO `doct_timing` (`id`, `department`, `name`, `day`, `time`) VALUES
(1, 'Orthopedic', 'Dr Santosh kumar Basyal', 'Sun-Wed', '09:00:00.000000'),
(2, 'Orthopedic', 'Dr Santosh kumar Basyal', 'Sun-Wed', '09:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `feedback`) VALUES
(1, 'nbna', 'dasdasd', 'nnn@gmail.', 'sfsdfsdf'),
(2, 'nbna', 'dasdasd', 'nnn@gmail.', 'sfsdfsdf'),
(3, 'nbna', 'yu', 'nabinxettr', 'dfgdfgdfgdfg dfgdf g'),
(4, '', '', '', ''),
(5, 'Nabin ', 'chhetri', 'nnn@gmail.', 'yaah fuck you too\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'nabin', 'nbn', 'nnn@gmail.com', 'nbn'),
(2, 'shiva', 'siva', 'shiva@gmail.com', 'nbn'),
(3, '', '', '', ''),
(4, 'rhythum', 'cadence', 'rhythum@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doct_timing`
--
ALTER TABLE `doct_timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doct_timing`
--
ALTER TABLE `doct_timing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

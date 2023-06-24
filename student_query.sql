-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 03:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_query`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `adminpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `adminpass`) VALUES
(1, 'admin1', 'admin@1'),
(2, 'admin2', 'admin@2'),
(3, 'admin3', 'admin@3'),
(4, 'admin4', 'admin@4'),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `querytext` tinytext DEFAULT NULL,
  `querytime` datetime NOT NULL,
  `reply` varchar(150) DEFAULT '',
  `replytime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `subject`, `querytext`, `querytime`, `reply`, `replytime`) VALUES
(10, 'Test6', 'test query', 'This is a test query generated during testing of program code to watch its working with bigger sentence with a lot of words exceeding limit.', '2021-09-04 20:28:17', '[timestamp]', '0000-00-00 00:00:00'),
(21, 'Test 9', 'test query 4', 'This is a test query to check if name appears with the query text.', '2021-08-30 20:41:30', 'hello\r\n', '2023-01-10 19:03:14'),
(166, 'Test 10', 'Final Check for everythin', 'this is final check i know everything works fine but then a too a last test to ensure everything and proceed to project completion.', '2021-08-25 20:41:24', ' value=\"TEST 10 REPLY TIME UPDATE\">', '2021-09-15 18:14:00'),
(289, 'Mobile query', 'First mobile sampl', 'This is a sample query from mobile for the first time.', '2021-08-18 20:41:07', '[timestamp]', '0000-00-00 00:00:00'),
(290, 'test12', 'query test for time check', 'checking time insertion in database', '2021-09-04 20:40:51', 'test 12 update reply ', '2021-09-15 23:13:17'),
(294, 'test 14', 'test query 14', 'First query with timestamp and order view in recent first', '2021-09-11 16:31:23', 'query reply after javascript show/hide function', '2021-09-15 22:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE `stud_details` (
  `id` int(11) NOT NULL,
  `studname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`id`, `studname`, `username`, `email`, `password`) VALUES
(1, '', 'Test', 'test@gmail.com', 'test1234'),
(2, '', 'test1', 'test1@gmail.com', 'test1@2234'),
(3, '', 'test2', 'test2@gmail.com', 'test2@2234'),
(4, 'Mobile User', 'mobileUser', 'mobileuser@gmail.com', 'mobile1@2234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_details`
--
ALTER TABLE `stud_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `stud_details`
--
ALTER TABLE `stud_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

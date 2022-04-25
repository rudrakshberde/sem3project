-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donations`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `date` date NOT NULL,
  `organisation` varchar(30) DEFAULT NULL,
  `eventtitle` varchar(50) DEFAULT NULL,
  `date_time` varchar(25) NOT NULL DEFAULT current_timestamp(),
  `eventdesc` varchar(400) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`date`, `organisation`, `eventtitle`, `date_time`, `eventdesc`, `image`) VALUES
('2021-12-09', 'nss.8213', 'food donation', '2021-12-07 15:43:49', 'description', '61af33dd64a749.26233646.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'NSS', 'nss.8213', '1a79a4d60de6718e8e5b326e338ae533', 'nss@example.com'),
(7, 'Save India Foundatio', 'save india foundation.1841', '1a79a4d60de6718e8e5b326e338ae533', 'saveind@example.com'),
(8, 'Earth NGO', 'earth ngo.9823', '1a79a4d60de6718e8e5b326e338ae533', 'earth@example.com'),
(9, 'Give India', 'give india.4955', '1a79a4d60de6718e8e5b326e338ae533', 'give@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `discarded`
--

CREATE TABLE `discarded` (
  `id` int(20) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(12) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `donationtype` varchar(22) DEFAULT NULL,
  `organisation` varchar(50) DEFAULT NULL,
  `file_name` varchar(225) NOT NULL,
  `time` varchar(50) NOT NULL,
  `reason` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(20) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(12) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `donationtype` varchar(22) DEFAULT NULL,
  `organisation` varchar(50) DEFAULT NULL,
  `file_name` varchar(225) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `fullname`, `email`, `contactno`, `address`, `donationtype`, `organisation`, `file_name`, `time`, `status`) VALUES
(1, 'rudraksh Berde', 'rudraksh.berde@gmail.com', '9820752709', '604,PRABHAVINAYAK CHS,NEW PRABHADEVI ROAD', 'clothes', 'nss.8213', '61a77c4d899478.13090506.jpg', '2021-12-01 19:14:45', 'pending'),
(2, 'Soham Prabhu', 'example@gmail.com', '1234567890', ' A/8 Rose Villa,\r\nM.G Road,\r\nFort.', 'fooditems', 'nss.8213', '61a77c94e36f15.46872152.jpg', '2021-12-01 19:15:56', 'pending'),
(3, 'Atharva Suryawanshi ', 'atharva@gmail.com', '1345577899', ' A/8 Rose Villa,\r\nM.G Road,\r\nFort.', 'fooditems', 'nss.8213', '61a77ce1010e58.92899739.jpg', '2021-12-01 19:17:13', 'pending'),
(4, 'Navya Shetty ', 'navya@gmail.com', '1234567790', ' A/8 Rose Villa,\r\nM.G Road,\r\nFort.', 'E-waste', 'nss.8213', '61a77d0a4c8ff4.49296644.jpg', '2021-12-01 19:17:54', 'pending'),
(5, 'rudraksh Berde', 'rudraksh.berde@gmail.com', '9820752709', '604,PRABHAVINAYAK CHS,NEW PRABHADEVI ROAD', 'fooditems', 'nss.8213', '61a7852beb5ae1.46839089.jpg', '2021-12-01 19:52:35', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `org` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `nss` varchar(10) DEFAULT NULL,
  `dt` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `event` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`ID`, `firstname`, `lastname`, `experience`, `org`, `email`, `number`, `address`, `nss`, `dt`, `event`) VALUES
(1, 'Rudraksh', 'Berde', 'yes', 'nss.8213', 'example@gmail.com', 1234567890, 'a/8 rose villa,\r\nM.G Road,\r\nFort.', 'yes', '2021-12-01 18:45:54', 'food distribution drive'),
(2, 'Navya ', 'shetty', 'yes', 'nss.8213', 'example@gmail.com', 1234567890, 'A/8 Rose Villa,\r\nM.G Road,\r\nFort.', 'yes', '2021-12-01 18:50:07', 'food distribution drive'),
(8, 'Atharva ', 'Suryawanshi', 'yes', 'nss.8213', 'example@gmail.com', 1234567899, '604,PRABHAVINAYAK CHS,NEW PRABHADEVI ROAD', 'no', '2021-12-01 19:13:32', 'food distribution drive'),
(9, 'example', 'lastname', '', 'nss.8213', 'rudraksh.berde@gmail', 2147483647, '604,PRABHAVINAYAK CHS,NEW PRABHADEVI ROAD', 'yes', '2021-12-07 15:46:25', 'food distribution drive');

-- --------------------------------------------------------

--
-- Table structure for table `volunteering_advertisement`
--

CREATE TABLE `volunteering_advertisement` (
  `organisation` varchar(50) DEFAULT NULL,
  `volunteering_add` varchar(500) DEFAULT NULL,
  `deadline` date NOT NULL,
  `no` int(11) NOT NULL,
  `eventtitle` varchar(60) NOT NULL,
  `id` int(255) NOT NULL,
  `date_time` varchar(30) NOT NULL DEFAULT current_timestamp(),
  `eventdate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteering_advertisement`
--

INSERT INTO `volunteering_advertisement` (`organisation`, `volunteering_add`, `deadline`, `no`, `eventtitle`, `id`, `date_time`, `eventdate`) VALUES
('nss.8213', 'Have to volunteer for distributing food to the underprivileged people ', '2021-12-09', 20, 'food distribution drive', 1, '2021-12-01 18:43:11', '21/12/12'),
('save india foundation.1841', 'help is distributing clothes', '2021-12-03', 10, 'clothes distribution', 3, '2021-12-01 19:08:53', '21/12/05'),
('earth ngo.9823', 'help in planting trees in AAREY forest area', '2021-12-17', 30, 'tree plantation', 4, '2021-12-01 19:10:21', '21/12/22'),
('give india.4955', 'help doctors manage the crowd', '2021-12-22', 40, 'medical camp', 5, '2021-12-01 19:12:09', '21/12/26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discarded`
--
ALTER TABLE `discarded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `volunteering_advertisement`
--
ALTER TABLE `volunteering_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `discarded`
--
ALTER TABLE `discarded`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `volunteering_advertisement`
--
ALTER TABLE `volunteering_advertisement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

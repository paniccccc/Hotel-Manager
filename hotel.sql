-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 05:45 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'vivek', '1234', 'Vivek Gereesan', 'vivekg@gmail.com'),
(3, 'ronit', '2345', 'Ronit Mohanty', 'ronit@gmail.com'),
(4, 'vishal', '4567', 'Vishal', 'vishal@gmail.com')
(6, 'admin', '2345', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL,
  `Amenities` varchar(60) NOT NULL,
  `Food` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`, `Amenities`, `Food`) VALUES
(28, 'Super Comfort', '2019-10-02', '2019-10-04', 'dsa', 2147483647, 'true', 'Extra BedFridge', 'veg'),
(29, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(30, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(31, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(32, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(33, 'Duplex', '2019-10-02', '2019-10-04', 'Ronit Mohanty', 2147483647, 'true', 'Extra BedFridgeTV', 'veg'),
(34, 'Duplex', '2019-10-02', '2019-10-04', 'Vivek G', 2147483647, 'true', '', ''),
(35, 'Duplex', '2019-10-02', '2019-10-04', 'Vivek G', 2147483647, 'true', '', ''),
(36, 'Duplex', '2019-10-02', '2019-10-04', 'Vivek G', 2147483647, 'true', '', ''),
(37, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(38, 'Family', '2019-10-02', '2019-10-04', 'Vishal', 2147483647, 'true', 'Fridge', ''),
(39, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(40, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(41, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false', '', ''),
(42, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Duplex', 5, 5, 0, 2, 'single', 'AC, TV, Wifi', 1500),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC.', 2500),
('Super Comfort', 5, 4, 0, 1, 'double', 'AC, TV, WIFI', 2200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

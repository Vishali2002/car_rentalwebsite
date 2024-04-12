-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(1, 'Mercedes Benz', 'Mercedes Benz', 'car1.jpg', 20000, 5, 'Available'),
(2, 'Range Rover', 'LandRover', 'car2.jpg', 30000, 6, 'Available'),
(3, 'Harrier', 'Toyota', 'car3.jpg', 20000, 6, 'Available'),
(5, 'LandCruiser V8', 'LandCruiser ', 'images (2).jpg', 20000, 5, 'Available'),
(6, 'Security Vehicles', 'Hammar Cars', 'sonkort2.png', 30000, 8, 'Available'),
(7, 'Wedding Limousine', 'Wedding Limousine', 'images (3).jpg', 50000, 10, 'Available'),
(8, 'tata nano', 'vk singh', 'Engine-LS.jpg', 5000, 5, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(2, 'felix kiamba', 'kiambafelix@yahoo.com', 30073147, 705053484, 'nairobi', 'Male', 1, 'Approved', 'GTD45H7H6'),
(3, 'concepter', 'concybogita@gmail.com', 27695131, 707403614, 'kisii', 'Female', 2, 'Approved', 'DJFL870FDK9'),
(4, 'enock bosire', 'enock@gmail.com', 1234567, 717056766, 'narok', 'Male', 2, 'Approved', 'HJHK678X'),
(5, 'raju sharma', '1vikrantsingh108@gmail.com', 12, 2147483647, 'Pathankot', 'Male', 0, 'Available', '142'),
(6, 'anju', 'anju@gmail.com', 12, 2147483647, 'Pathankot', 'Female', 1, 'Approved', '142');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(2, 0, 'Am happy its working?', 'Unread', '0000-00-00 00:00:00'),
(3, 0, 'Thanks for that..OK?', 'Unread', '0000-00-00 00:00:00'),
(6, 1, 'hello sir gaddi ready haoi', 'Unread', '2022-05-16 11:36:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

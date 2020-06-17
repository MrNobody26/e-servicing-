-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 02:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ad_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `p_phone` int(10) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `booking_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `car_no` varchar(10) NOT NULL,
  `time slot avl` time NOT NULL,
  `req_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_date`, `appointment_time`, `is_available`) VALUES
(1, '2020-06-18', '16:00:00', 1),
(2, '2020-06-18', '18:00:00', 1),
(5, '2020-06-19', '10:00:00', 0),
(6, '2020-06-19', '12:00:00', 1),
(7, '2020-06-19', '14:00:00', 0),
(8, '2020-06-18', '16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `total amount` int(50) NOT NULL,
  `bill no` int(10) NOT NULL,
  `bill description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_no` varchar(50) NOT NULL,
  `car type` varchar(50) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `c_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_no`, `car type`, `car_name`, `car_model`, `c_id`) VALUES
('GA 03 A 1234', '', 'swift', '', 0),
('GA 03 A 1234', '', 'swift', '', 0),
('GA 03 A 1235', '', 'wagonr', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `First_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `c_contact` int(50) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_password` varchar(10) NOT NULL,
  `c_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`First_name`, `last_name`, `c_contact`, `c_email`, `c_address`, `c_password`, `c_id`) VALUES
('Srushti ', 'bhujange ', 2147483647, 'srushtibhujange6@gma', 'mapusa', '12345678+', 33),
('bablu', 'naik', 99999999, 'srushtibhujange6@gma', 'mapusa', '147852369', 34),
('Srushti ', 'bhujange ', 2147483647, '8552965037', 'mapusa', 'hufiukyli,', 35),
('shivraj', 'jadhav', 2147483647, 'srushtibhujange6@gma', 'mapusa', '123456789', 36),
('', '', 0, '', '', '', 49),
('', '', 0, '', '', '', 50),
('', '', 0, '', '', '', 51),
('', '', 0, '', '', '', 52),
('', '', 0, '', '', '', 53),
('', '', 0, '', '', '', 54),
('', '', 0, '', '', '', 55),
('', '', 0, '', '', '', 56),
('', '', 0, '', '', '', 57),
('', '', 0, '', '', '', 58),
('', '', 0, '', '', '', 59),
('', '', 0, '', '', '', 60),
('', '', 0, '', '', '', 61),
('', '', 0, '', '', '', 62),
('', '', 0, '', '', '', 63),
('', '', 0, '', '', '', 64),
('', '', 0, '', '', '', 65),
('', '', 0, '', '', '', 66),
('', '', 0, '', '', '', 67),
('', '', 0, '', '', '', 68),
('', '', 0, '', '', '', 69),
('', '', 0, '', '', '', 70),
('', '', 0, '', '', '', 71),
('', '', 0, '', '', '', 72),
('', '', 0, '', '', '', 73),
('', '', 0, '', '', '', 74),
('', '', 0, '', '', '', 75),
('', '', 0, '', '', '', 76),
('', '', 0, '', '', '', 77);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `c_id` int(100) NOT NULL,
  `repair` varchar(100) NOT NULL,
  `washing` int(100) NOT NULL,
  `spare parts` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `booking_id_2` (`booking_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ad_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

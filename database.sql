-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2020 at 08:22 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--
CREATE DATABASE `database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `ad_id` int(100) NOT NULL AUTO_INCREMENT,
  `c_id` int(100) NOT NULL,
  `p_phone` int(10) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `address`
--


-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `booking_id` int(100) NOT NULL AUTO_INCREMENT,
  `c_id` int(100) NOT NULL,
  `car_no` varchar(10) NOT NULL,
  `time slot avl` time NOT NULL,
  `req_date` date NOT NULL,
  PRIMARY KEY (`booking_id`),
  UNIQUE KEY `booking_id_2` (`booking_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `appointment`
--


-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `total amount` int(50) NOT NULL,
  `bill no` int(10) NOT NULL,
  `bill description` varchar(100) NOT NULL,
  PRIMARY KEY (`bill no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--


-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE IF NOT EXISTS `car_details` (
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

CREATE TABLE IF NOT EXISTS `customer` (
  `First_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `c_contact` int(50) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_address` varchar(50) NOT NULL,
  `c_password` varchar(10) NOT NULL,
  `c_id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

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

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(100) NOT NULL AUTO_INCREMENT,
  `c_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product`
--


-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `c_id` int(100) NOT NULL,
  `repair` varchar(100) NOT NULL,
  `washing` int(100) NOT NULL,
  `spare parts` int(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_type`
--


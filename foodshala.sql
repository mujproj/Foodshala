-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 09:29 PM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerregistration`
--

CREATE TABLE `customerregistration` (
  `emailID` varchar(200) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerregistration`
--

INSERT INTO `customerregistration` (`emailID`, `pass`, `category`) VALUES
('jaygupta.muj@gmail.com', '123456789', 'Vegetarian'),
('kal@gmail.com', '123456789', 'Vegetarian'),
('123@j.com', '123456789', 'Vegetarian'),
('p@g.com', '123456', 'Vegetarian'),
('jkl@g.com', '123', 'Vegetarian'),
('jkl@g.com', '123', 'Vegetarian'),
('ll@g.com', '345', 'Vegetarian'),
('op@g.com', '234', 'Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `itemName` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `price` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `emailID` varchar(200) NOT NULL,
  `rName` varchar(200) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `customerName` varchar(200) DEFAULT NULL,
  `categroy` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`itemName`, `address`, `price`, `phone`, `emailID`, `rName`, `option1`, `option2`, `customerName`, `categroy`) VALUES
('pop', '12345678', '123', '1234', 'jaygupta.muj@gmail.com', '123', 'TakeAway', 'Cash On Delivery', 'jay', 'Veg'),
('wem', '123098', '150', '234', 'jaygupta.muj@gmail.com', 'xca', 'TakeAway', 'Cash On Delivery', 'jay', 'Non Veg'),
('wem', '1234', '150', '56', 'jaygupta.muj@gmail.com', 'xca', 'TakeAway', 'Cash On Delivery', 'Jay', 'Non Veg'),
('sad', '1234', '250', '12345678', 'jaygupta.muj@gmail.com', '123', 'TakeAway', 'Cash On Delivery', '12d', 'Veg'),
('jjj', 'rt', '123', '12345678', 'jaygupta.muj@gmail.com', '0', 'TakeAway', 'Cash On Delivery', 'Jay', 'Veg'),
('jjj', '123456789', '123', '123456789', 'jaygupta.muj@gmail.com', '0', 'TakeAway', 'Cash On Delivery', 'op', 'Veg'),
('pop', '123456', '123', '000777666', 'jaygupta.muj@gmail.com', '123', 'TakeAway', 'Digital Payment(Full return if not delivered)', 'raj', 'Veg'),
('bhujia', '23456', '50', '234567', 'jaygupta.muj@gmail.com', 'dfg', 'TakeAway', 'Cash On Delivery', 'jay', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `itemName` varchar(200) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`itemName`, `rname`, `category`, `price`) VALUES
('Bake', 'ASA', 'Veg', '250'),
('jjj', '0', 'Veg', '123'),
('jjj', '0', 'Veg', '123'),
('sad', '123', 'Veg', '250'),
('wem', 'xca', 'Non Veg', '150'),
('pop', '123', 'Veg', '123'),
('lll', '123', 'Veg', '123'),
('ll', '123', 'Veg', '500'),
('bhujia', 'dfg', 'Veg', '50');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantregistration`
--

CREATE TABLE `restaurantregistration` (
  `emailID` varchar(200) NOT NULL,
  `restaurantName` varchar(200) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurantregistration`
--

INSERT INTO `restaurantregistration` (`emailID`, `restaurantName`, `pass`) VALUES
('jaygupta.muj@gmail.com', 'IFF', '123456789'),
('jaygupta.muj@gmail.com', '123', '123456789'),
('jaygupta.muj@gmail.com', '123', '123456789'),
('r@g.com', 'xca', '12345678'),
('i@gmail.com', 'joi', '2345678'),
('w@g.com', 'dfg', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

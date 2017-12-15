-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 07:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` int(10) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `username`, `password`) VALUES
(1, 'rizqi daniya', 'rdaniya', 'daniya'),
(2, 'nadia hawarul', 'nhawarul', 'nadia'),
(3, 'nyimas ratu', 'rnyimas', 'ratu');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE IF NOT EXISTS `camera` (
  `productId` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `valuePixel` varchar(50) NOT NULL,
  `shutterSpeed` varchar(50) NOT NULL,
  `resolution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lens`
--

CREATE TABLE IF NOT EXISTS `lens` (
  `productId` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `focalLength` varchar(50) NOT NULL,
  `angleOfView` varchar(50) NOT NULL,
  `formatCompability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderId` varchar(50) NOT NULL,
  `productId` varchar(10) NOT NULL,
  `receiverId` varchar(10) NOT NULL,
  `orderDate` date NOT NULL,
  `productName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentId` varchar(50) NOT NULL,
  `totalPayment` int(50) NOT NULL,
  `datePaid` date NOT NULL,
  `accountNameSender` varchar(50) NOT NULL,
  `bankAccountSender` varchar(8) NOT NULL,
  `approve` enum('Yes','No') NOT NULL,
  `orderId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `productId` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `photoTheme` varchar(50) NOT NULL,
  `photoFile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE IF NOT EXISTS `receiver` (
  `receiverId` varchar(10) NOT NULL,
  `receiverName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `postralCode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `productId` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `days` int(5) NOT NULL,
  `noOfImages` enum('yes','no') NOT NULL,
  `editPhoto` enum('yes','no') NOT NULL,
  `freeMakeUp` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `shippingId` varchar(30) NOT NULL,
  `receiverId` varchar(10) NOT NULL,
  `receiverName` varchar(50) NOT NULL,
  `shippingFee` int(8) NOT NULL,
  `address` varchar(100) NOT NULL,
  `airwaybill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shippingfee`
--

CREATE TABLE IF NOT EXISTS `shippingfee` (
  `provinceId` int(5) NOT NULL,
  `province` varchar(10) NOT NULL,
  `fee` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `shippingfee`
--
ALTER TABLE `shippingfee`
  ADD PRIMARY KEY (`provinceId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `shippingfee`
--
ALTER TABLE `shippingfee`
  MODIFY `provinceId` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2018 at 07:43 AM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.18-0ubuntu0.16.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloon123`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appid` varchar(256) NOT NULL,
  `cid` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `state` int(3) NOT NULL,
  `price` double NOT NULL,
  `serviceid` varchar(256) DEFAULT NULL,
  `beauticianid` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointmentpay`
--

CREATE TABLE `appointmentpay` (
  `appid` varchar(256) NOT NULL,
  `pid` varchar(256) NOT NULL,
  `price` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beautician`
--

CREATE TABLE `beautician` (
  `eid` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `commission` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` varchar(256) NOT NULL,
  `cname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `tpno` varchar(11) NOT NULL,
  `terms` int(255) NOT NULL,
  `state` int(3) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(256) NOT NULL,
  `ename` varchar(256) NOT NULL,
  `tpno` varchar(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `joindate` date NOT NULL,
  `password` varchar(256) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `healthytips`
--

CREATE TABLE `healthytips` (
  `hid` int(255) NOT NULL,
  `tip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(255) NOT NULL,
  `message` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messagesr`
--

CREATE TABLE `messagesr` (
  `cid` varchar(256) NOT NULL,
  `eid` varchar(256) NOT NULL,
  `mid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nonappointmentpay`
--

CREATE TABLE `nonappointmentpay` (
  `pid` varchar(256) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseitem`
--

CREATE TABLE `purchaseitem` (
  `pid` varchar(256) NOT NULL,
  `itemid` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchasepay`
--

CREATE TABLE `purchasepay` (
  `pid` varchar(256) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receivetips`
--

CREATE TABLE `receivetips` (
  `hid` int(255) NOT NULL,
  `cid` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` varchar(256) NOT NULL,
  `sname` varchar(256) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `itemid` varchar(256) NOT NULL,
  `itemname` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currentq` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supid` varchar(256) NOT NULL,
  `supname` varchar(256) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplyitem`
--

CREATE TABLE `supplyitem` (
  `itemid` varchar(256) NOT NULL,
  `supid` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appid`),
  ADD KEY `x2` (`cid`),
  ADD KEY `x3` (`serviceid`),
  ADD KEY `x4` (`beauticianid`);

--
-- Indexes for table `appointmentpay`
--
ALTER TABLE `appointmentpay`
  ADD PRIMARY KEY (`appid`,`pid`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `healthytips`
--
ALTER TABLE `healthytips`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `messagesr`
--
ALTER TABLE `messagesr`
  ADD PRIMARY KEY (`cid`,`eid`,`mid`),
  ADD KEY `x11` (`eid`),
  ADD KEY `x12` (`mid`);

--
-- Indexes for table `nonappointmentpay`
--
ALTER TABLE `nonappointmentpay`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD PRIMARY KEY (`pid`,`itemid`),
  ADD KEY `x7` (`itemid`);

--
-- Indexes for table `purchasepay`
--
ALTER TABLE `purchasepay`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `receivetips`
--
ALTER TABLE `receivetips`
  ADD PRIMARY KEY (`hid`,`cid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supid`);

--
-- Indexes for table `supplyitem`
--
ALTER TABLE `supplyitem`
  ADD PRIMARY KEY (`itemid`,`supid`),
  ADD KEY `x8` (`supid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `healthytips`
--
ALTER TABLE `healthytips`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `x2` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `x3` FOREIGN KEY (`serviceid`) REFERENCES `services` (`serviceid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `x4` FOREIGN KEY (`beauticianid`) REFERENCES `beautician` (`eid`);

--
-- Constraints for table `appointmentpay`
--
ALTER TABLE `appointmentpay`
  ADD CONSTRAINT `x1` FOREIGN KEY (`appid`) REFERENCES `appointment` (`appid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messagesr`
--
ALTER TABLE `messagesr`
  ADD CONSTRAINT `x10` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `x11` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `x12` FOREIGN KEY (`mid`) REFERENCES `messages` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD CONSTRAINT `x6` FOREIGN KEY (`pid`) REFERENCES `purchasepay` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `x7` FOREIGN KEY (`itemid`) REFERENCES `stock` (`itemid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplyitem`
--
ALTER TABLE `supplyitem`
  ADD CONSTRAINT `x8` FOREIGN KEY (`supid`) REFERENCES `supplier` (`supid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `x9` FOREIGN KEY (`itemid`) REFERENCES `stock` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

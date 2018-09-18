-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 06:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentid` int(255) NOT NULL,
  `customerid` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `state` int(3) NOT NULL,
  `price` double NOT NULL,
  `serviceid` int(255) DEFAULT NULL,
  `beauticianid` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointmentpay`
--

CREATE TABLE `appointmentpay` (
  `appointmentid` int(255) NOT NULL,
  `paymentid` int(255) NOT NULL,
  `price` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beautician`
--

CREATE TABLE `beautician` (
  `id` int(255) NOT NULL,
  `type` varchar(256) NOT NULL,
  `commission` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `tpno` varchar(11) NOT NULL,
  `terms` int(255) NOT NULL,
  `state` int(3) NOT NULL,
  `password` varchar(256) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `validationcode` int(11) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `activate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `password`, `city`, `district`, `validationcode`, `code`, `activate`) VALUES
(1, 'aaaaaaaaaa', 'aaa@gmail.com', '0123456789', 'aaaaaabbcc', 0, 0, '123', NULL, NULL, NULL, '', NULL),
(2, 'han', 'hma@gmail.com', '0112356479', '12/A,PPP Rd', 0, 0, '1234567', NULL, NULL, NULL, '', NULL),
(3, 'Kabal', '1111111@gmail.com', '0123456789', '123A', 0, 0, 'fcea920f7412b5da7be0cf42b8c93759', 'AAA', 'CCC', 266, '', NULL),
(6, 'Kabal', '2@gmail.com', '0123456789', '123A', 0, 0, 'fcea920f7412b5da7be0cf42b8c93759', 'AAA', 'CCC', 266, '', NULL),
(7, 'Jake', 'aaa3@gmail.com', '0112345679', '12/4,lkj Rd', 0, 0, '7fa8282ad93047a4d6fe6111c93b308a', 'AAA', 'CCC', 0, '', NULL),
(9, 'Lu kang', 'duleepalwis2@gmail.com', '0123457891', 'AAA', 0, 0, 'fcea920f7412b5da7be0cf42b8c93759', 'BBB', 'CCC', 1, '', NULL),
(12, 'Lu kang', 'duleepalwis3@gmail.com', '0112345679', 'aaaaaaaa', 0, 0, '41525af98cffe913d396c83bdd493181', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 1, '', NULL),
(14, 'Lu kang', 'duleepalwis0@gmail.com', '0112345679', 'aaaaaaaa', 0, 0, '41525af98cffe913d396c83bdd493181', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 1, '', NULL),
(15, 'Lu kang', '111@gmail.com', '0123456789', 'aaaaa', 0, 0, 'e8e1ee9fcf6197a66c3c0f4e09e1c806', 'aaaaaaaaa', 'CCC', 0, '', NULL),
(20, 'Jak', 'duleepalwis1@gmail.com', '0714567891', 'aaaaa', 0, 0, 'fcea920f7412b5da7be0cf42b8c93759', 'aaaaaaaaaaaa', 'Matale', 0, '', NULL),
(21, 'aaaa', 'duleepalwis123@gmail.com', '0123457891', 'aa', 0, 0, 'fcea920f7412b5da7be0cf42b8c93759', 'mmmm', 'Colombo', 0, '', NULL),
(26, 'raiden', 'raiden@gmail.com', '1234567891', 'aaaaa', 0, 0, 'fcea920f7412b5da7be0cf42b8c93759', 'aaaaaa', 'aaaaaaaaa', 0, '', NULL),
(30, 'Robo', 'alq@gmail.com', '1111222233', 'aaa', 0, 0, '57f962c03ef3526ec6e95ceb50785c4c', 'aaa', 'aaaaa', 0, '', NULL),
(32, 'kkk', 'lll@gmail.com', 'aaa', '1478963251', 0, 0, 'aaa42296669b958c3cee6c0475c8093e', 'aaa', 'a', 0, '', NULL),
(33, 'llllllll', 'kmp@gmail.com', 'aaaaaaaa', '1234567893', 0, 0, 'bc4ef64b2b3bdf0eac6e5d38a528f5bc', 'aaaaaaaaa', 'aaaaaaaaaaa', 0, '', NULL),
(36, 'aaaaaaaa', 'aaaaa1@gmail.com', '1111111', '1234569873', 0, 0, 'd8e71dbd1afc289a4b102eeadeb6f363', '11111111', '111111111111', 0, '', NULL),
(39, 'dulip', 'dulip@gmail.com', '123ABJ', '0715469873', 0, 0, '1ef5a9cd207726f31b82da79a0dcd588', 'CCC', 'Colombo', 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `tpno` varchar(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `joindate` date NOT NULL,
  `password` varchar(256) NOT NULL,
  `salary` double NOT NULL,
  `code` varchar(255) NOT NULL,
  `NIC` varchar(255) DEFAULT NULL,
  `validationc` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `gender` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `tpno`, `email`, `address`, `joindate`, `password`, `salary`, `code`, `NIC`, `validationc`, `type`, `gender`) VALUES
(1, 'aaaaaaa', '0123654787', 'kamal@gmail.com', 'aaaaaaaaaa', '2018-09-11', 'aaa42296669b958c3cee6c0475c8093e', 0, '', '123654789v', NULL, NULL, NULL),
(3, 'Himal', '0123456789', 'himal@gmail.com', '1111111', '2018-09-11', 'eb34f78aff557f3cb0291b0a921fbf27', 0, '', '123466789v', NULL, 'Receptionist', NULL);

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
  `paymentid` int(255) NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseitem`
--

CREATE TABLE `purchaseitem` (
  `paymentid` int(255) NOT NULL,
  `itemid` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchasepay`
--

CREATE TABLE `purchasepay` (
  `id` int(255) NOT NULL,
  `price` double NOT NULL,
  `itemid` int(255) NOT NULL
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
  `id` int(255) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `duration` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currentq` int(3) NOT NULL,
  `brand` varchar(256) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `preOrderl` int(11) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `quantity`, `currentq`, `brand`, `price`, `preOrderl`, `code`) VALUES
(1, 'North for Men Recharge Shaving Gel', 53, 21, 'Eclat', 1959, 10, 'I-1'),
(2, 'Mademoiselle Edt', 20, 20, 'Eclat', 1500, 10, 'I-2'),
(3, 'Giordani Gold Original Perfumed Body Spray', 31, 31, 'Eclat', 999, 15, 'I-3'),
(4, 'Face Gel Cucumber', 25, 25, 'NovAge', 599, 15, 'I-4'),
(5, 'Men Energising & Hydrating Booster', 25, 25, 'NovAge', 5000, 15, 'I-5'),
(6, 'Shampoo for Oily hair with Nettle & Lemon', 25, 25, 'Love Nature', 1699, 15, 'I-6'),
(7, 'North for Men Recharge Hair & Body Wash', 25, 25, 'North for Men', 1899, 15, 'I-7');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplyitem`
--

CREATE TABLE `supplyitem` (
  `item` int(255) NOT NULL,
  `supplier` int(255) NOT NULL,
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
  ADD PRIMARY KEY (`appointmentid`),
  ADD KEY `appointment_customer` (`customerid`),
  ADD KEY `appointment_service` (`serviceid`),
  ADD KEY `appointment_beautician` (`beauticianid`);

--
-- Indexes for table `appointmentpay`
--
ALTER TABLE `appointmentpay`
  ADD PRIMARY KEY (`appointmentid`,`paymentid`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`,`code`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`,`code`),
  ADD UNIQUE KEY `employee_NIC_uindex` (`NIC`);

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
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `payment_item` (`itemid`);

--
-- Indexes for table `purchasepay`
--
ALTER TABLE `purchasepay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivetips`
--
ALTER TABLE `receivetips`
  ADD PRIMARY KEY (`hid`,`cid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`,`code`),
  ADD UNIQUE KEY `stock_code_pk` (`code`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplyitem`
--
ALTER TABLE `supplyitem`
  ADD PRIMARY KEY (`item`,`supplier`),
  ADD KEY `supply_supplier` (`supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beautician`
--
ALTER TABLE `beautician`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `nonappointmentpay`
--
ALTER TABLE `nonappointmentpay`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasepay`
--
ALTER TABLE `purchasepay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_beautician` FOREIGN KEY (`beauticianid`) REFERENCES `beautician` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointment_customer` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointment_service` FOREIGN KEY (`serviceid`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `appointmentpay`
--
ALTER TABLE `appointmentpay`
  ADD CONSTRAINT `appointment_payment` FOREIGN KEY (`appointmentid`) REFERENCES `appointment` (`appointmentid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `beautician`
--
ALTER TABLE `beautician`
  ADD CONSTRAINT `employee_customer` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD CONSTRAINT `payment_item` FOREIGN KEY (`itemid`) REFERENCES `stock` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplyitem`
--
ALTER TABLE `supplyitem`
  ADD CONSTRAINT `supply_item` FOREIGN KEY (`item`) REFERENCES `stock` (`id`),
  ADD CONSTRAINT `supply_supplier` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

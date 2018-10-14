-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2018 at 06:37 PM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.18-0ubuntu0.16.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `paymentid` int(255) NOT NULL,
  `appointmentid` int(255) NOT NULL,
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
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `validationc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES
(1, 'kamal', 'abc@gmail.com', 'aaa', '0715896313', 0, 0, 'aaa', 'Ampara', 'F', 'd0db92fa9e2dad7794117be118414e74', 'ªc°ÕÙP6"5«R'),
(2, 'Dulip', 'dulip@gmail.com', 'aaa', '0712589637', 0, 0, 'aaa', 'Badulla', 'M', '1ef5a9cd207726f31b82da79a0dcd588', 'X`Ìkˆ~EŠ;èB–è');

-- --------------------------------------------------------

--
-- Table structure for table `empleave`
--

CREATE TABLE `empleave` (
  `id` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `gender` varchar(256) DEFAULT NULL,
  `userLevel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `tpno`, `email`, `address`, `joindate`, `password`, `salary`, `code`, `NIC`, `validationc`, `gender`, `userLevel`) VALUES
(1, 'zxc', '1234667891', 'aba@gmail.com', '111111111', '2018-10-03', '1234567', 1.111111111111111e15, '', NULL, NULL, NULL, NULL);

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
  `customerid` varchar(255) NOT NULL,
  `question` varchar(256) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `state` varchar(3) DEFAULT NULL,
  `timestamp` varchar(3) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `msgFrom` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `customerid`, `question`, `answer`, `state`, `timestamp`, `description`, `msgFrom`, `time`) VALUES
(1, '1', 'jkhkjhk', '', '', '', 'mjhbjh', 'C', '123'),
(2, '1', NULL, '', '', '', 'xcvxcvxvb', 'R', '321'),
(3, '1', NULL, '', '', '', 'vcvxcbxvb', 'C', '213\r\n'),
(4, '1', NULL, NULL, '0', NULL, ' 123', 'R', '2018-10-08 05:18:59');

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
  `serviceid` int(255) NOT NULL,
  `beauticianid` int(255) NOT NULL,
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
  `quantity` int(3) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseitem`
--

INSERT INTO `purchaseitem` (`paymentid`, `itemid`, `date`, `time`, `quantity`, `price`) VALUES
(2, 5, '2018-09-29', '04:22:24.000000', 1, '5000'),
(3, 5, '2018-09-29', '04:23:13.000000', 1, '5000'),
(4, 1, '2018-09-29', '04:23:13.000000', 1, '1959.25'),
(5, 2, '2018-09-29', '04:23:13.000000', 1, '1500'),
(6, 3, '2018-09-30', '01:18:05.000000', 7, '6993'),
(7, 2, '2018-09-30', '01:18:05.000000', 1, '1500'),
(8, 1, '2018-09-30', '01:18:05.000000', 1, '1959.25');

-- --------------------------------------------------------

--
-- Table structure for table `purchasepay`
--

CREATE TABLE `purchasepay` (
  `id` int(255) NOT NULL,
  `price` double NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
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
(1, 'North for Men Recharge Shaving Gel', 63, 21, 'Eclat', 1959.25, 10, 'I-1'),
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `validationc` varchar(255) NOT NULL
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
  ADD PRIMARY KEY (`paymentid`,`appointmentid`),
  ADD KEY `appointment_pay` (`appointmentid`);

--
-- Indexes for table `beautician`
--
ALTER TABLE `beautician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `empleave`
--
ALTER TABLE `empleave`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`mid`,`customerid`);

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
  ADD PRIMARY KEY (`paymentid`,`serviceid`,`beauticianid`),
  ADD KEY `serviceId` (`serviceid`),
  ADD KEY `beauticianid` (`beauticianid`);

--
-- Indexes for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD PRIMARY KEY (`paymentid`,`itemid`),
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointmentpay`
--
ALTER TABLE `appointmentpay`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `beautician`
--
ALTER TABLE `beautician`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `empleave`
--
ALTER TABLE `empleave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `healthytips`
--
ALTER TABLE `healthytips`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nonappointmentpay`
--
ALTER TABLE `nonappointmentpay`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_service` FOREIGN KEY (`serviceid`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `beautician_id` FOREIGN KEY (`beauticianid`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `appointmentpay`
--
ALTER TABLE `appointmentpay`
  ADD CONSTRAINT `appointment_pay` FOREIGN KEY (`appointmentid`) REFERENCES `appointment` (`appointmentid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nonappointmentpay`
--
ALTER TABLE `nonappointmentpay`
  ADD CONSTRAINT `beauticianid` FOREIGN KEY (`beauticianid`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `serviceId` FOREIGN KEY (`serviceid`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  ADD CONSTRAINT `purchase_item` FOREIGN KEY (`itemid`) REFERENCES `stock` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplyitem`
--
ALTER TABLE `supplyitem`
  ADD CONSTRAINT `supply_item` FOREIGN KEY (`item`) REFERENCES `stock` (`id`),
  ADD CONSTRAINT `supply_supplier` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

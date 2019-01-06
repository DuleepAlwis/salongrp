-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 11:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
  `time` varchar(6) NOT NULL,
  `state` int(3) NOT NULL,
  `price` double NOT NULL,
  `serviceid` int(255) DEFAULT NULL,
  `beauticianid` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `customerid`, `date`, `time`, `state`, `price`, `serviceid`, `beauticianid`) VALUES
(26, 48, '2019-01-13', '9.3', 0, 375, 3, 1),
(27, 48, '2019-01-27', '9', 0, 375, 3, 1),
(30, 48, '2019-01-27', '9.15', 0, 375, 3, 1),
(33, 48, '2019-01-27', '12.3', 0, 1125, 3, 1),
(34, 49, '2019-01-11', '13.45', 0, 750, 3, 1),
(35, 49, '2019-01-03', '9.3', 0, 375, 3, 1),
(38, 49, '2019-01-23', '10', 0, 375, 3, 1),
(39, 49, '2018-01-11', '17.15', 0, 375, 3, 1),
(40, 49, '2019-01-27', '10.3', 0, 2500, 4, 2),
(41, 51, '2019-01-17', '17.15', 0, 375, 3, 1);

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
  `passw` varchar(255) NOT NULL,
  `validationc` varchar(255) NOT NULL,
  `propic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `passw`, `validationc`, `propic`) VALUES
(1, 'kamal', 'abc@gmail.com', 'aaa', '0715896313', 0, 0, 'aaa', 'Ampara', 'F', 'd0db92fa9e2dad7794117be118414e74', '', 'ªc°ÕÙP6\"5«R', ''),
(2, 'Dulip', 'dulip1@gmail.com', 'aaa123', '0712589637', 0, 0, 'aaa', 'Mullaitivu', 'M', '1117531b05cf14ea74d47cda8d91dbdf', '', 'X`Ìkˆ~EŠ;èB–è', ''),
(3, 'sed', 'fschmeler@example.com', '128 Watsica Lodge\nLeuschkeport, WA 75014-4637', '', 0, 0, 'East Ferntown', NULL, NULL, '05e019c221ae81ba1a7a073b8fdbd9c2485c6d69', '', '', ''),
(4, 'sapiente', 'ustroman@example.org', '527 Batz Shore\nEast Isabelle, ND 80348', '', 0, 0, 'Lunastad', NULL, NULL, '63d301df054a710121d131d937f02004391b3140', '', '', ''),
(5, 'saepe', 'ymayert@example.com', '0955 Wintheiser Underpass Suite 441\nStreichshire, DE 49021', '', 0, 0, 'Port Harveyberg', NULL, NULL, 'c1987b52c2732ae491d7eebda5b984223d161335', '', '', ''),
(6, 'et', 'turcotte.summer@example.org', '92405 Soledad Dam\nMeredithshire, NM 67805', '', 0, 0, 'Kemmerbury', NULL, NULL, '0f32228539f1692497e9006d188a7bceaf56abfc', '', '', ''),
(7, 'impedit', 'blake59@example.com', '37251 Marco Ranch\nBartolettiville, AR 80962', '', 0, 0, 'North Janaborough', NULL, NULL, 'e32db25b723ba3475a9d6eaaea3318d389e23635', '', '', ''),
(8, 'eum', 'kenyatta.oberbrunner@example.com', '286 Abbott Throughway Suite 012\nRogahnside, CT 42609-9153', '', 0, 0, 'East Adriannamouth', NULL, NULL, 'c083432842ef63a07882939941908054de5e88e8', '', '', ''),
(9, 'nostrum', 'sjast@example.org', '7750 Susana Crossing Apt. 069\nLake Saul, AR 55155', '', 0, 0, 'Lake Stephanie', NULL, NULL, '90d3bb3a69735f09cc5de69246ba46990791574b', '', '', ''),
(10, 'sunt', 'magali.leuschke@example.org', '54587 Jadon Island\nJovanview, WY 99929', '', 0, 0, 'Lake Ludie', NULL, NULL, '783cb3a2153c288ff089235ab57c511835fd89b1', '', '', ''),
(11, 'earum', 'fabiola.senger@example.net', '66069 Domingo Garden\nSouth Jakeland, LA 18465', '', 0, 0, 'New Sammy', NULL, NULL, 'c5aba4513b3d52faf96390ac34c604f0bb8d75e8', '', '', ''),
(12, 'alias', 'leuschke.albertha@example.org', '715 Ortiz Ferry\nNew Abdulland, KS 09582', '', 0, 0, 'Blandafurt', NULL, NULL, 'f673145deb264f5dba4b713a686a23a44a11552e', '', '', ''),
(13, 'omnis', 'felicia55@example.net', '0350 Janiya Groves\nWest Cecilfort, MT 54446-8764', '', 0, 0, 'Langton', NULL, NULL, 'acd69329d5c658e3820520c776d4ae336ef06df2', '', '', ''),
(14, 'atque', 'huel.jermaine@example.com', '1296 Armstrong Junction\nDanielside, NC 99516-7586', '', 0, 0, 'South Elnora', NULL, NULL, '1e447640b627d5dd39a1bb3ba06a23c8ffd77c53', '', '', ''),
(15, 'magnam', 'gcruickshank@example.net', '054 Kuhn Shore Suite 475\nKutchtown, CA 71751', '', 0, 0, 'Franciscohaven', NULL, NULL, 'a09e24a0546667212a9f980033a929f771b83543', '', '', ''),
(16, 'saepe', 'brad63@example.com', '25778 Valerie Springs Apt. 596\nPort Dwight, MI 99557', '', 0, 0, 'Lebsackside', NULL, NULL, '1df3336b7b59ede5d3d02f74d039de593ee918d0', '', '', ''),
(17, 'ratione', 'thompson.jerel@example.org', '9036 Pamela Parkways Apt. 047\nBobbiefort, MD 42454-6982', '', 0, 0, 'West Kathryne', NULL, NULL, 'a336dbcf30d8f0e361e87432646a03de2a5d51b8', '', '', ''),
(18, 'voluptatem', 'funk.colin@example.com', '383 Grimes Walk\nWest Darian, MA 27121-0848', '', 0, 0, 'Pacochaborough', NULL, NULL, 'f772c5f2dfa4865486edb792bb18c14de0885ca6', '', '', ''),
(19, 'nulla', 'schimmel.rosie@example.net', '492 Moshe Loop Apt. 731\nNew Rod, MD 82498', '', 0, 0, 'South Maynardport', NULL, NULL, '568be150f34d20370b5a887ca456d550fa688e93', '', '', ''),
(20, 'et', 'jazmyne.volkman@example.org', '213 Missouri Centers Suite 540\nGreenmouth, OR 68231', '', 0, 0, 'Gleasonmouth', NULL, NULL, 'a1c59ea0ae71cc4fd8da86a72d973da302ca377d', '', '', ''),
(21, 'consectetur', 'roberts.mortimer@example.com', '2547 Cruickshank Place Suite 009\nRutherfordside, DE 96670', '', 0, 0, 'Wadebury', NULL, NULL, 'a1675ac23ac02b9982bd6d820d0a3e2b1616505f', '', '', ''),
(22, 'sunt', 'mittie.huel@example.org', '350 Jovanny Bridge\nNew Lancemouth, NV 96169-8998', '', 0, 0, 'Port Cloydborough', NULL, NULL, '339b00ccb7b526a54b01c69eb50e646cb0c5ccbc', '', '', ''),
(23, 'animi', 'carolanne34@example.org', '93045 Schinner Divide Apt. 665\nNew Ivaland, GA 53578-7286', '', 0, 0, 'Port Kennethton', NULL, NULL, 'de1fd75f55dee5d73d3616209848fe3971b88e46', '', '', ''),
(24, 'est', 'robbie.crist@example.com', '0696 Lucile Court Apt. 771\nAltenwerthberg, UT 41822', '', 0, 0, 'West Dane', NULL, NULL, '00b5006f5e82dfc0e0a51c55dd473b3087ea8c74', '', '', ''),
(25, 'totam', 'nigel.beer@example.com', '244 Brandyn Ways\nWest Sadie, GA 90905', '', 0, 0, 'Schuppeberg', NULL, NULL, '567256463b00316ec53edafe394478388a1cf648', '', '', ''),
(26, 'natus', 'charles.hodkiewicz@example.com', '86421 Alessia Flats Suite 467\nEast Sincere, WA 33078-4121', '', 0, 0, 'South Hortense', NULL, NULL, '22bd5e654fd49b01c4ba7c7b2b072b733c94c888', '', '', ''),
(27, 'error', 'hwhite@example.com', '5071 Jaunita Glen\nDayneburgh, DC 05080', '', 0, 0, 'Brandtburgh', NULL, NULL, 'ad467d6129d260d39b5fa1a1661d0dcdb50de626', '', '', ''),
(28, 'debitis', 'kevin.bergstrom@example.com', '5992 Grace Lock Suite 800\nNew Jamisonport, DC 43777', '', 0, 0, 'Fadelberg', NULL, NULL, '6fe6aebfa06de1a6145342c232ef4728be8ed925', '', '', ''),
(29, 'necessitatibus', 'milton.prohaska@example.net', '185 Upton Prairie Suite 504\nPort Rachelle, KS 39245', '', 0, 0, 'North Rebecca', NULL, NULL, '9e8c03b778bbcc89292dcb72eead470dcac977bd', '', '', ''),
(30, 'id', 'turner53@example.org', '30364 Toy Ville Apt. 637\nNorth Bertramland, WY 85151-5115', '', 0, 0, 'Tremblayland', NULL, NULL, '45f563e56e774bbe985de6cc162b40d73fd64238', '', '', ''),
(31, 'aut', 'janie42@example.com', '632 Ron Key Suite 076\nLangland, OR 71480-4129', '', 0, 0, 'Ruthestad', NULL, NULL, 'cda855c4db919070af68c184db8fb5c89cdfbaff', '', '', ''),
(32, 'iste', 'whodkiewicz@example.net', '199 Elizabeth Lodge\nWest Garrick, VA 46239-8151', '', 0, 0, 'Maryamberg', NULL, NULL, '6419f7d6564a75fd18687423a6d7cfa4428cc678', '', '', ''),
(33, 'vitae', 'price.trystan@example.com', '6943 Welch Station Apt. 965\nWest Brayanland, FL 84365', '', 0, 0, 'Port Ellenchester', NULL, NULL, 'd73e87ee3768fa3a16f175df29f0262f1ae804dc', '', '', ''),
(34, 'minus', 'brown.brown@example.org', '324 Wanda Route Apt. 454\nMargretfurt, AZ 79524', '', 0, 0, 'Boganfort', NULL, NULL, 'c81aee2285e92793b4e6cdc7cf1153f128376a2f', '', '', ''),
(35, 'non', 'mann.tevin@example.net', '724 Muller Motorway Suite 112\nBlandaborough, TX 67739', '', 0, 0, 'Ulicesfurt', NULL, NULL, '8876edd5471cb4ab4ad6438e2694e309190feae2', '', '', ''),
(36, 'qui', 'julius.spencer@example.org', '776 Feest Ways Apt. 700\nNew Vivianneview, SD 32821-7024', '', 0, 0, 'South Rosarioside', NULL, NULL, 'd00fcaf4baf6f3dd4e94a7c6d8234c534e6e35cc', '', '', ''),
(37, 'sed', 'lockman.deborah@example.net', '34256 Huels Course\nWymanmouth, DE 93164', '', 0, 0, 'West Dorothy', NULL, NULL, '1b85f4e59750965553290a50a72d737586d143d4', '', '', ''),
(38, 'est', 'ljohnston@example.com', '98424 Elias Parks Apt. 584\nTowneton, MO 41859', '', 0, 0, 'Jastbury', NULL, NULL, '1ace7d76cd7b9b92293899c33660312772e85849', '', '', ''),
(39, 'consequatur', 'jedidiah.blanda@example.net', '927 Graham Junctions Apt. 693\nPort Virginiachester, MT 47681', '', 0, 0, 'Haileychester', NULL, NULL, '0abf1d9091430bd1ec3ed09802aea00bfc399bc1', '', '', ''),
(40, 'quam', 'bednar.brandi@example.org', '5247 Israel Via\nNorth Nico, VT 21430-3348', '', 0, 0, 'Lafayettefort', NULL, NULL, '3d0f5f6bb5fbd088589bea0173c9a680fdcc1e76', '', '', ''),
(41, 'odit', 'manley61@example.org', '889 Houston Knoll Apt. 070\nNew Trenton, KY 81206-8828', '', 0, 0, 'Cliftonside', NULL, NULL, 'e6ceb94901c9076da651d64edfc77af3800a156f', '', '', ''),
(42, 'facere', 'vallie.weimann@example.org', '4319 Shad Course Suite 974\nLake Zachary, WI 33466-0963', '', 0, 0, 'Port Kyleightown', NULL, NULL, '5ba43430048b705f6c367bf77c9b3f52e27dd12a', '', '', ''),
(43, 'quam', 'eleonore37@example.com', '907 Moriah Cape\nLake Cobymouth, DE 19181-3764', '', 0, 0, 'West Eulaberg', NULL, NULL, '6b15f2fb0b0d7b0cf3bc711e7003251af63fbe6a', '', '', ''),
(44, 'omnis', 'considine.seth@example.net', '89316 Turcotte Mill Suite 947\nElenorafort, IA 35327', '', 0, 0, 'New Eddie', NULL, NULL, 'a6037de708b5f69de42d7e8dc6491ad2b3d03b22', '', '', ''),
(45, 'delectus', 'skshlerin@example.org', '93011 Alena River Apt. 179\nSammyton, ND 55413', '', 0, 0, 'East Darienton', NULL, NULL, '075b0dcba7543bbba4a3d10f1254df3f4642a745', '', '', ''),
(46, 'dulip', 'dulip@gmail.com', 'aaa', '0715789641', 0, 0, 'aaa', 'Badulla', 'M', '74ead3b7d72c9f14c6213cf1b2c18572', '', '|ÕÒ<ëur\\µ³Ã‰·', ''),
(47, 'Max Tennyson', 'MaxTennyson@gmail.com', '11A', '0712365478', 0, 0, 'BNM', 'Kalutara', 'M', '33381ee5c6a6d89e3b23d6b39cd0992b', '', '£;Ñp¼\"5É¬Nê‰ù)', ''),
(48, 'Dulip', 'dulip123@gmail.com', '111', '0715896321', 0, 0, 'AAA', 'Vavuniya', 'M', '67aec879aac46115ed68d50d6a9abd6e', '', 'X`Ìkˆ~EŠ;èB–è', ''),
(49, 'Nimal', 'Nimal@gmail.com', '111', '0715789631', 0, 0, 'aaxz', 'Kilinochchi', 'M', '9ad24f2850062550f982603578e32db6', 'Nimal123', 'T‡×Á¹gëàï3', ''),
(50, 'Tharanga', 'tharanga@gmail.com', 'asa', '0715758963', 0, 0, 'aas', 'Ampara', 'M', '6d9b3e1cc0c7df2096a153c0b49127be', 'tharanga123', 'û¨ä„µœ‡Õ\\@ÿu', ''),
(51, 'Duleep', 'duleepalwis@gmail.com', '123A', '0715759321', 0, 0, 'CCC', 'Colombo', 'M', '2bc8b80330086f74c00325fc404a85da', '850', '‹¢ºÏÝáå1Yt®e¬HûÛ', '');

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
  `passw` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  `code` varchar(255) NOT NULL,
  `NIC` varchar(255) DEFAULT NULL,
  `validationc` varchar(255) DEFAULT NULL,
  `gender` varchar(256) DEFAULT NULL,
  `userLevel` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `propic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `tpno`, `email`, `address`, `joindate`, `password`, `passw`, `salary`, `code`, `NIC`, `validationc`, `gender`, `userLevel`, `description`, `propic`) VALUES
(1, 'AbcAVCX', '1234667891', 'aba@gmail.com', '123A,Aaa,UIO', '2018-10-03', '1234567', '', 1.111111111111111e15, '', '123453689V', NULL, 'Male', 'B', 'lknlknjbjaaa', ''),
(2, 'K.Kasun lkj123', '0715877633', 'kasun1@gmail.com', '123A,Aaa,UIO', '0000-00-00', '031110d8a7024dfcbf57eedda7c9dac9', 'kasun123', 0, '', '123466789V', '0', 'Male', 'B', NULL, 'img/profilepic/e49c8bf68f41de03ca9a5eb91951a819index1.jpg'),
(7, 'ABCXYZ1', '0715759133', 'dulipABC@gmail.com', '', '0000-00-00', '204d47bf7966f88ef2a8aad4a3f82317', '', 0, '', NULL, NULL, NULL, 'R', NULL, ''),
(8, 'admin', '0715759133', 'admin@gmail.com', '123A,Aaa,KIO', '2018-08-01', '0192023a7bbd73250516f069df18b500', 'admin123', 0, '', '123456579V', '0', 'Male', 'A', '', ''),
(10, 'K.Kasun', '0715237398', 'kasun@gmail.com', '123A,Aaa,KIu', '2018-10-03', '031110d8a7024dfcbf57eedda7c9dac9', 'kasun123', 0, '', '123456791V', '0', 'Male', 'B', ',jnn,mn,m', 'img/profilepic/d45ad13fcf19568fc37c1e49ed99f240person1.jpg'),
(12, 'Max Tennyson', '0715894321', 'MaxTennyson@gmail.com', '123A,Aaa,aws', '2019-01-02', '89ef5e6a5e6af895aad66febf6b9d775', 'maxt123', 0, '', '123456789V', '0', 'Male', 'B', 'nmnbjhy', 'img/profilepic/6e2e0d7f698714dabc7627ed7f2bc2c6mens5-570x5701.jpg'),
(13, 'Kabal', '0715759133', 'kabal@gmail.com', '123A,Aaa,aws', '2019-01-01', 'dd02b2e4be82df30da0c382c05110a5f', 'kabal123', 0, '', '123569837V', '0', 'Male', 'B', 'mlksads', 'img/profilepic/f474e20a76432c9e53a017abf3014cf5images2.jpg'),
(14, 'Bandara', '0715896321', 'bandara@gmail.com', '', '0000-00-00', '2bb3b9e8770fa260143b60799751a86b', '', 0, '', NULL, NULL, NULL, 'R', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `empservice`
--

CREATE TABLE `empservice` (
  `employee` int(11) NOT NULL,
  `service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empservice`
--

INSERT INTO `empservice` (`employee`, `service`) VALUES
(1, 2),
(1, 3),
(2, 4),
(10, 2),
(10, 5),
(10, 6),
(13, 2),
(13, 7);

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
(1, '1', 'jkhkjhk', '', '1', '', 'mjhbjh', 'C', '123'),
(2, '1', NULL, '', '1', '', 'xcvxcvxvb', 'R', '321'),
(3, '1', NULL, '', '1', '', 'vcvxcbxvb', 'C', '213\r\n'),
(4, '1', NULL, NULL, '1', NULL, ' 123', 'R', '2018-10-08 05:18:59'),
(5, '1', NULL, NULL, '1', NULL, 'iuhih', 'R', '2018-10-16 18:32:34'),
(6, '1', NULL, NULL, '1', NULL, 'qweqe', 'R', '2018-10-26 21:01:45'),
(7, 'undefined', NULL, NULL, '0', NULL, 'sdfhdsjkfhksdfsdf\n', 'R', '2018-10-26 21:02:18'),
(8, '1', NULL, NULL, '1', NULL, ' jfhjdskhfjsdkfdsf', 'R', '2018-10-26 21:02:30'),
(9, '1', NULL, NULL, '1', NULL, 'nbmnbkj\n', 'R', '2018-11-03 05:57:56'),
(10, '1', NULL, NULL, '1', NULL, ' aljskdnaljsndlkjnlkalskd LWKNLAKNWLKNLAKERN WLRKNQEWRNLQENRLQENRLKN LQER LQKENRLKlkrn lknqlen lqkernl qknelrkq qerlkn ', 'R', '2018-11-03 05:59:53'),
(11, '1', NULL, NULL, '1', NULL, 'jbjhbj', 'C', '2018-11-04 00:00:09'),
(12, '1', NULL, NULL, '1', NULL, ' anskdjakd\n', 'C', '2018-11-04 00:03:53'),
(13, '1', NULL, NULL, '1', NULL, ' ljfalkfdalf', 'C', '2018-11-04 00:12:06'),
(14, '1', NULL, NULL, '1', NULL, 'Hellk', 'R', '2018-11-04 00:14:37'),
(15, '1', NULL, NULL, '1', NULL, ' AAA', 'C', '2018-11-04 00:15:15'),
(16, '1', NULL, NULL, '1', NULL, ' LLL\n', 'C', '2018-11-04 00:16:37'),
(17, '1', NULL, NULL, '1', NULL, 'My hair is .....', 'C', '2018-11-04 00:34:58'),
(18, '1', NULL, NULL, '1', NULL, ' fzjblkf\n', 'R', '2018-11-04 00:45:26'),
(19, '1', NULL, NULL, '1', NULL, 'I need help', 'C', '2018-11-04 00:46:24'),
(20, '1', NULL, NULL, '1', NULL, ' for what do you need help\n', 'R', '2018-11-04 00:47:03'),
(21, '1', NULL, NULL, '1', NULL, ' aasdasd', 'R', '2018-11-04 00:50:42'),
(22, '1', NULL, NULL, '1', NULL, ' Maintainig my hair\n', 'C', '2018-11-04 00:51:53'),
(23, '2', NULL, NULL, '1', NULL, 'Hey', 'C', '2018-11-04 03:18:11'),
(24, '2', NULL, NULL, '1', NULL, 'Can i help you?', 'R', '2018-11-04 03:18:43'),
(25, '2', NULL, NULL, '1', NULL, 'What is the help\n you need from me?\n', 'R', '2018-11-04 16:44:38'),
(26, '2', NULL, NULL, '1', NULL, 'I need to know about the A001 jel', 'R', '2018-11-04 16:47:36'),
(27, '2', NULL, NULL, '1', NULL, '', 'C', '2018-11-04 16:56:01'),
(28, '2', NULL, NULL, '1', NULL, ' What about using a hair cream?', 'C', '2018-11-04 16:56:27'),
(29, '2', NULL, NULL, '1', NULL, ' No problem.', 'R', '2018-11-04 16:56:56'),
(30, '2', NULL, NULL, '1', NULL, ' ok', 'C', '2018-11-04 17:16:20'),
(31, '2', NULL, NULL, '1', NULL, ' Ok', 'R', '2018-11-04 17:16:38'),
(32, '2', NULL, NULL, '1', NULL, 'Need to know something\n', 'C', '2018-11-04 19:52:23'),
(33, '2', NULL, NULL, '1', NULL, ' What', 'R', '2018-11-04 19:52:48'),
(34, '2', NULL, NULL, '1', NULL, ' aaa', 'R', '2018-11-07 09:09:00'),
(35, '2', NULL, NULL, '1', NULL, 'bbb', 'C', '2018-11-07 09:09:12'),
(36, '48', NULL, NULL, '1', NULL, 'Hey\n', 'C', '2018-12-31 22:07:09'),
(37, '48', NULL, NULL, '1', NULL, 'How are you\n', 'R', '2018-12-31 22:07:37'),
(38, '48', NULL, NULL, '1', NULL, ' ', 'C', '2019-01-02 20:50:48'),
(39, '48', NULL, NULL, '1', NULL, '123\n', 'C', '2019-01-02 21:06:49'),
(40, '48', NULL, NULL, '1', NULL, ' i need to know', 'C', '2019-01-02 21:07:08'),
(41, '48', NULL, NULL, '1', NULL, ' somethings\n', 'C', '2019-01-02 21:07:16'),
(42, '48', NULL, NULL, '1', NULL, 'what  do you need to know?\n', 'R', '2019-01-02 21:09:19'),
(43, '49', NULL, NULL, '1', NULL, 'Hey', 'C', '2019-01-03 19:34:33');

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

--
-- Dumping data for table `nonappointmentpay`
--

INSERT INTO `nonappointmentpay` (`paymentid`, `serviceid`, `beauticianid`, `price`, `date`, `time`) VALUES
(1, 3, 1, 175, '2018-12-29', '15:28:19'),
(7, 4, 1, 2500, '2018-11-29', '00:00:00'),
(8, 4, 1, 2500, '2018-11-29', '00:00:00'),
(9, 2, 1, 357, '2018-11-29', '00:00:00'),
(10, 4, 1, 2500, '2018-11-29', '00:00:00'),
(11, 4, 1, 2500, '2018-11-29', '00:00:00'),
(12, 2, 1, 357, '2018-11-29', '00:00:00'),
(13, 4, 1, 2500, '2018-11-29', '00:00:00'),
(14, 2, 1, 357, '2018-11-29', '00:00:00'),
(15, 4, 1, 2500, '2018-11-29', '00:00:00'),
(16, 2, 1, 357, '2018-11-29', '00:00:00'),
(17, 2, 1, 357, '2018-11-29', '00:00:00'),
(18, 4, 1, 2500, '2018-11-29', '00:00:00'),
(19, 2, 1, 357, '2018-11-29', '00:00:00'),
(20, 4, 1, 2500, '2018-11-29', '00:00:00'),
(21, 3, 1, 375, '2018-11-30', '00:00:00'),
(22, 2, 1, 357, '2018-11-30', '00:00:00'),
(23, 3, 1, 375, '2018-11-30', '00:00:00'),
(24, 2, 1, 357, '2018-11-30', '00:00:00'),
(25, 4, 1, 2500, '2018-11-30', '00:00:00'),
(26, 4, 1, 2500, '2018-11-30', '00:00:00'),
(27, 3, 2, 375, '2018-11-30', '00:00:00'),
(28, 4, 2, 2500, '2018-11-30', '00:00:00'),
(29, 2, 1, 357, '2018-11-30', '00:00:00'),
(30, 4, 2, 2500, '2018-11-30', '00:00:00'),
(31, 3, 2, 375, '2018-11-30', '00:00:00'),
(32, 2, 1, 357, '2018-11-30', '00:00:00'),
(33, 4, 2, 2500, '2018-11-30', '00:00:00'),
(34, 3, 1, 375, '2018-11-30', '00:00:00'),
(35, 3, 2, 375, '2018-11-30', '00:00:00'),
(36, 4, 1, 2500, '2019-00-03', '00:00:00'),
(37, 2, 10, 1071, '2019-00-03', '00:00:00'),
(38, 2, 10, 357, '2019-00-03', '00:00:00'),
(39, 3, 2, 375, '2019-00-03', '00:00:00');

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
(5, 2, '2018-09-29', '04:23:13.000000', 1, '1500'),
(7, 2, '2018-09-30', '01:18:05.000000', 1, '1500'),
(8, 26, '2018-11-20', '13:33:14.000000', 1, '999'),
(9, 7, '2018-11-20', '13:41:29.000000', 1, '1399'),
(10, 26, '2018-11-21', '06:16:34.000000', 1, '999'),
(11, 26, '2018-11-21', '06:17:26.000000', 7, '6993'),
(12, 2, '2018-11-21', '06:21:55.000000', 1, '1500'),
(13, 26, '2018-12-21', '21:06:31.000000', 1, '999'),
(14, 26, '2018-12-21', '21:10:07.000000', 1, '999'),
(15, 49, '2018-12-21', '21:13:45.000000', 1, '1000'),
(17, 26, '2018-12-21', '21:21:40.000000', 1, '999'),
(18, 26, '2018-12-21', '21:22:00.000000', 1, '999'),
(19, 2, '2018-12-21', '21:23:25.000000', 1, '1550'),
(22, 49, '2018-12-21', '21:42:29.000000', 1, '1000'),
(23, 2, '2018-12-21', '21:42:29.000000', 1, '1550'),
(24, 26, '2018-12-21', '21:50:17.000000', 1, '999'),
(25, 26, '2018-12-21', '21:58:50.000000', 1, '999'),
(26, 26, '2018-12-21', '21:59:38.000000', 1, '999'),
(27, 26, '2018-12-21', '22:05:26.000000', 1, '999'),
(28, 26, '2018-12-21', '22:06:20.000000', 1, '999'),
(29, 26, '2018-12-21', '23:55:52.000000', 1, '999'),
(30, 26, '2018-12-22', '00:20:55.000000', 1, '999'),
(31, 2, '2018-12-22', '00:33:31.000000', 1, '1550'),
(32, 7, '2018-12-22', '00:33:34.000000', 1, '1399'),
(33, 26, '2018-12-22', '00:33:36.000000', 1, '999'),
(34, 2, '2018-12-22', '00:35:35.000000', 1, '1550'),
(35, 7, '2018-12-22', '00:35:38.000000', 1, '1399'),
(36, 26, '2018-12-22', '00:35:40.000000', 1, '999'),
(37, 2, '2018-12-22', '00:38:27.000000', 1, '1550'),
(38, 7, '2018-12-22', '00:38:29.000000', 1, '1399'),
(39, 26, '2018-12-22', '00:38:29.000000', 1, '999'),
(40, 2, '2018-12-22', '00:38:45.000000', 1, '1550'),
(41, 7, '2018-12-22', '00:38:46.000000', 1, '1399'),
(42, 26, '2018-12-22', '00:38:47.000000', 1, '999'),
(43, 2, '2018-12-22', '00:39:33.000000', 1, '1550'),
(44, 7, '2018-12-22', '00:39:34.000000', 1, '1399'),
(45, 26, '2018-12-22', '00:39:36.000000', 1, '999'),
(46, 2, '2018-12-22', '00:42:06.000000', 1, '1550'),
(47, 7, '2018-12-22', '00:42:07.000000', 1, '1399'),
(48, 26, '2018-12-22', '00:42:08.000000', 1, '999'),
(49, 2, '2018-12-22', '00:43:25.000000', 1, '1550'),
(50, 7, '2018-12-22', '00:43:27.000000', 1, '1399'),
(51, 26, '2018-12-22', '00:43:27.000000', 1, '999'),
(52, 2, '2018-12-22', '00:47:13.000000', 1, '1550'),
(53, 7, '2018-12-22', '00:47:14.000000', 1, '1399'),
(54, 49, '2018-12-22', '00:47:15.000000', 1, '1000'),
(55, 2, '2018-12-22', '00:48:24.000000', 1, '1550'),
(56, 7, '2018-12-22', '00:48:26.000000', 1, '1399'),
(57, 26, '2018-12-22', '00:48:27.000000', 1, '999'),
(58, 26, '2018-12-22', '00:49:18.000000', 1, '999'),
(59, 26, '2018-12-22', '00:49:25.000000', 1, '999'),
(60, 26, '2018-12-22', '00:49:48.000000', 1, '999'),
(61, 26, '2018-12-22', '16:24:19.000000', 1, '999'),
(62, 2, '2018-12-22', '16:27:29.000000', 1, '1550'),
(63, 2, '2018-12-22', '16:28:46.000000', 1, '1550'),
(64, 7, '2018-12-22', '16:28:48.000000', 1, '1399'),
(65, 26, '2018-12-22', '16:28:49.000000', 1, '999'),
(66, 2, '2018-12-22', '16:46:00.000000', 1, '1550'),
(67, 7, '2018-12-22', '16:46:02.000000', 1, '1399'),
(68, 26, '2018-12-22', '16:46:03.000000', 1, '999'),
(69, 2, '2018-12-22', '16:53:24.000000', 1, '1550'),
(70, 7, '2018-12-22', '16:53:25.000000', 1, '1399'),
(71, 26, '2018-12-22', '16:53:26.000000', 1, '999'),
(72, 2, '2018-12-22', '16:58:49.000000', 1, '1550'),
(73, 7, '2018-12-22', '16:58:51.000000', 1, '1399'),
(74, 26, '2018-12-22', '16:58:52.000000', 1, '999'),
(75, 26, '2018-12-22', '17:18:31.000000', 1, '999'),
(76, 2, '2018-12-22', '17:21:45.000000', 1, '1550'),
(77, 7, '2018-12-22', '17:21:47.000000', 1, '1399'),
(78, 26, '2018-12-22', '17:21:49.000000', 1, '999'),
(79, 2, '2018-12-22', '17:22:19.000000', 1, '1550'),
(80, 7, '2018-12-22', '17:22:26.000000', 1, '1399'),
(81, 26, '2018-12-22', '17:22:27.000000', 1, '999'),
(85, 2, '2018-12-22', '17:43:28.000000', 1, '1550'),
(87, 7, '2018-12-22', '17:44:12.000000', 1, '1399'),
(88, 49, '2018-12-22', '17:44:12.000000', 1, '1000'),
(89, 7, '2018-12-22', '17:44:23.000000', 1, '1399'),
(90, 49, '2018-12-22', '17:44:24.000000', 1, '1000'),
(91, 49, '2018-12-22', '17:44:38.000000', 1, '1000'),
(92, 7, '2018-12-22', '17:44:49.000000', 1, '1399'),
(93, 49, '2018-12-22', '17:44:50.000000', 1, '1000'),
(94, 49, '2018-12-22', '18:14:46.000000', 1, '1000'),
(95, 49, '2018-12-22', '18:14:52.000000', 1, '1000'),
(96, 7, '2018-12-22', '18:14:57.000000', 1, '1399'),
(97, 49, '2018-12-22', '18:14:57.000000', 1, '1000'),
(98, 26, '2018-12-27', '18:40:00.000000', 1, '999'),
(99, 26, '2018-12-27', '18:40:13.000000', 1, '999'),
(100, 26, '2018-12-27', '18:44:19.000000', 1, '999'),
(101, 7, '2018-12-27', '18:44:30.000000', 1, '1399'),
(102, 26, '2018-12-27', '18:44:31.000000', 1, '999'),
(103, 26, '2018-12-28', '19:20:52.000000', 1, '999'),
(104, 26, '2018-12-28', '19:21:03.000000', 1, '999'),
(107, 26, '2018-12-28', '19:49:23.000000', 1, '999'),
(109, 26, '2018-12-28', '19:49:34.000000', 1, '999'),
(111, 2, '2018-12-28', '22:54:06.000000', 1, '1550'),
(112, 26, '2018-12-28', '22:54:06.000000', 1, '999'),
(113, 2, '2018-12-28', '22:54:17.000000', 1, '1550'),
(114, 26, '2018-12-28', '22:54:17.000000', 1, '999'),
(115, 49, '2018-12-28', '22:54:50.000000', 1, '1000'),
(118, 2, '2018-12-30', '15:26:40.000000', 1, '1550'),
(119, 2, '2018-12-30', '15:27:27.000000', 1, '1550'),
(120, 2, '2018-12-30', '15:27:38.000000', 1, '1550'),
(127, 7, '2019-01-03', '11:26:50.000000', 1, '1399');

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `employee` int(11) NOT NULL,
  `ratevalue` int(11) NOT NULL,
  `feedback` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `employee`, `ratevalue`, `feedback`) VALUES
(1, 2, 80, 'lkanlfkna\r\n'),
(2, 10, 87, 'asklmacv');

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

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES
(2, 'Hair cutting(Adult)', 357, '180'),
(3, 'Hair Cutting(Children)', 375, '15'),
(4, 'Colouring(Men)', 2500, '45'),
(5, 'Hair cut (senior hair dresser) ', 1000, '45'),
(6, 'Waxing Full arms ', 850, '30'),
(7, 'Half arms ', 600, '15');

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
(2, 'Mademoiselle Edt', 31, 20, 'Eclat', 1550, 10, 'I-2'),
(7, 'North for Men Recharge Hair & Body Wash', 17, 0, 'North for Men', 1399, 13, ''),
(26, 'Studio Dry Turban Hair Towel', 11, 0, 'Alterna', 999, 11, ''),
(49, 'North for Men Recharge Shaving Geln', 67, 0, 'Alterna', 1000, 11, ''),
(52, 'Studio Dry Turban Hair Towel3', 17, 0, 'Ateral', 1959.25, 13, '');

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `empservice`
--
ALTER TABLE `empservice`
  ADD PRIMARY KEY (`employee`,`service`),
  ADD KEY `serviceFK` (`service`);

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empForeign` (`employee`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `appointmentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `empleave`
--
ALTER TABLE `empleave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `healthytips`
--
ALTER TABLE `healthytips`
  MODIFY `hid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `nonappointmentpay`
--
ALTER TABLE `nonappointmentpay`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `purchaseitem`
--
ALTER TABLE `purchaseitem`
  MODIFY `paymentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `purchasepay`
--
ALTER TABLE `purchasepay`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
-- Constraints for table `empservice`
--
ALTER TABLE `empservice`
  ADD CONSTRAINT `employeeFK` FOREIGN KEY (`employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `serviceFK` FOREIGN KEY (`service`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `purchase_item` FOREIGN KEY (`itemid`) REFERENCES `stock` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `empForeign` FOREIGN KEY (`employee`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

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

#
# TABLE STRUCTURE FOR: appointment
#

DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
  `appointmentid` int(255) NOT NULL AUTO_INCREMENT,
  `customerid` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `state` int(3) NOT NULL,
  `price` double NOT NULL,
  `serviceid` int(255) DEFAULT NULL,
  `beauticianid` int(255) DEFAULT NULL,
  PRIMARY KEY (`appointmentid`),
  KEY `appointment_customer` (`customerid`),
  KEY `appointment_service` (`serviceid`),
  KEY `appointment_beautician` (`beauticianid`),
  CONSTRAINT `appointment_service` FOREIGN KEY (`serviceid`) REFERENCES `services` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `beautician_id` FOREIGN KEY (`beauticianid`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `customer_id` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: appointmentpay
#

DROP TABLE IF EXISTS `appointmentpay`;

CREATE TABLE `appointmentpay` (
  `paymentid` int(255) NOT NULL AUTO_INCREMENT,
  `appointmentid` int(255) NOT NULL,
  `price` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`paymentid`,`appointmentid`),
  KEY `appointment_pay` (`appointmentid`),
  CONSTRAINT `appointment_pay` FOREIGN KEY (`appointmentid`) REFERENCES `appointment` (`appointmentid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: beautician
#

DROP TABLE IF EXISTS `beautician`;

CREATE TABLE `beautician` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` varchar(256) NOT NULL,
  `commission` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: customer
#

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
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
  `validationc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (3, 'sed', 'fschmeler@example.com', '128 Watsica Lodge\nLeuschkeport, WA 75014-4637', '', 0, 0, 'East Ferntown', NULL, NULL, '05e019c221ae81ba1a7a073b8fdbd9c2485c6d69', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (4, 'sapiente', 'ustroman@example.org', '527 Batz Shore\nEast Isabelle, ND 80348', '', 0, 0, 'Lunastad', NULL, NULL, '63d301df054a710121d131d937f02004391b3140', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (5, 'saepe', 'ymayert@example.com', '0955 Wintheiser Underpass Suite 441\nStreichshire, DE 49021', '', 0, 0, 'Port Harveyberg', NULL, NULL, 'c1987b52c2732ae491d7eebda5b984223d161335', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (6, 'et', 'turcotte.summer@example.org', '92405 Soledad Dam\nMeredithshire, NM 67805', '', 0, 0, 'Kemmerbury', NULL, NULL, '0f32228539f1692497e9006d188a7bceaf56abfc', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (7, 'impedit', 'blake59@example.com', '37251 Marco Ranch\nBartolettiville, AR 80962', '', 0, 0, 'North Janaborough', NULL, NULL, 'e32db25b723ba3475a9d6eaaea3318d389e23635', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (8, 'eum', 'kenyatta.oberbrunner@example.com', '286 Abbott Throughway Suite 012\nRogahnside, CT 42609-9153', '', 0, 0, 'East Adriannamouth', NULL, NULL, 'c083432842ef63a07882939941908054de5e88e8', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (9, 'nostrum', 'sjast@example.org', '7750 Susana Crossing Apt. 069\nLake Saul, AR 55155', '', 0, 0, 'Lake Stephanie', NULL, NULL, '90d3bb3a69735f09cc5de69246ba46990791574b', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (10, 'sunt', 'magali.leuschke@example.org', '54587 Jadon Island\nJovanview, WY 99929', '', 0, 0, 'Lake Ludie', NULL, NULL, '783cb3a2153c288ff089235ab57c511835fd89b1', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (11, 'earum', 'fabiola.senger@example.net', '66069 Domingo Garden\nSouth Jakeland, LA 18465', '', 0, 0, 'New Sammy', NULL, NULL, 'c5aba4513b3d52faf96390ac34c604f0bb8d75e8', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (12, 'alias', 'leuschke.albertha@example.org', '715 Ortiz Ferry\nNew Abdulland, KS 09582', '', 0, 0, 'Blandafurt', NULL, NULL, 'f673145deb264f5dba4b713a686a23a44a11552e', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (13, 'omnis', 'felicia55@example.net', '0350 Janiya Groves\nWest Cecilfort, MT 54446-8764', '', 0, 0, 'Langton', NULL, NULL, 'acd69329d5c658e3820520c776d4ae336ef06df2', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (14, 'atque', 'huel.jermaine@example.com', '1296 Armstrong Junction\nDanielside, NC 99516-7586', '', 0, 0, 'South Elnora', NULL, NULL, '1e447640b627d5dd39a1bb3ba06a23c8ffd77c53', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (15, 'magnam', 'gcruickshank@example.net', '054 Kuhn Shore Suite 475\nKutchtown, CA 71751', '', 0, 0, 'Franciscohaven', NULL, NULL, 'a09e24a0546667212a9f980033a929f771b83543', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (16, 'saepe', 'brad63@example.com', '25778 Valerie Springs Apt. 596\nPort Dwight, MI 99557', '', 0, 0, 'Lebsackside', NULL, NULL, '1df3336b7b59ede5d3d02f74d039de593ee918d0', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (17, 'ratione', 'thompson.jerel@example.org', '9036 Pamela Parkways Apt. 047\nBobbiefort, MD 42454-6982', '', 0, 0, 'West Kathryne', NULL, NULL, 'a336dbcf30d8f0e361e87432646a03de2a5d51b8', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (18, 'voluptatem', 'funk.colin@example.com', '383 Grimes Walk\nWest Darian, MA 27121-0848', '', 0, 0, 'Pacochaborough', NULL, NULL, 'f772c5f2dfa4865486edb792bb18c14de0885ca6', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (19, 'nulla', 'schimmel.rosie@example.net', '492 Moshe Loop Apt. 731\nNew Rod, MD 82498', '', 0, 0, 'South Maynardport', NULL, NULL, '568be150f34d20370b5a887ca456d550fa688e93', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (20, 'et', 'jazmyne.volkman@example.org', '213 Missouri Centers Suite 540\nGreenmouth, OR 68231', '', 0, 0, 'Gleasonmouth', NULL, NULL, 'a1c59ea0ae71cc4fd8da86a72d973da302ca377d', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (21, 'consectetur', 'roberts.mortimer@example.com', '2547 Cruickshank Place Suite 009\nRutherfordside, DE 96670', '', 0, 0, 'Wadebury', NULL, NULL, 'a1675ac23ac02b9982bd6d820d0a3e2b1616505f', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (22, 'sunt', 'mittie.huel@example.org', '350 Jovanny Bridge\nNew Lancemouth, NV 96169-8998', '', 0, 0, 'Port Cloydborough', NULL, NULL, '339b00ccb7b526a54b01c69eb50e646cb0c5ccbc', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (23, 'animi', 'carolanne34@example.org', '93045 Schinner Divide Apt. 665\nNew Ivaland, GA 53578-7286', '', 0, 0, 'Port Kennethton', NULL, NULL, 'de1fd75f55dee5d73d3616209848fe3971b88e46', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (24, 'est', 'robbie.crist@example.com', '0696 Lucile Court Apt. 771\nAltenwerthberg, UT 41822', '', 0, 0, 'West Dane', NULL, NULL, '00b5006f5e82dfc0e0a51c55dd473b3087ea8c74', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (25, 'totam', 'nigel.beer@example.com', '244 Brandyn Ways\nWest Sadie, GA 90905', '', 0, 0, 'Schuppeberg', NULL, NULL, '567256463b00316ec53edafe394478388a1cf648', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (26, 'natus', 'charles.hodkiewicz@example.com', '86421 Alessia Flats Suite 467\nEast Sincere, WA 33078-4121', '', 0, 0, 'South Hortense', NULL, NULL, '22bd5e654fd49b01c4ba7c7b2b072b733c94c888', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (27, 'error', 'hwhite@example.com', '5071 Jaunita Glen\nDayneburgh, DC 05080', '', 0, 0, 'Brandtburgh', NULL, NULL, 'ad467d6129d260d39b5fa1a1661d0dcdb50de626', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (28, 'debitis', 'kevin.bergstrom@example.com', '5992 Grace Lock Suite 800\nNew Jamisonport, DC 43777', '', 0, 0, 'Fadelberg', NULL, NULL, '6fe6aebfa06de1a6145342c232ef4728be8ed925', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (29, 'necessitatibus', 'milton.prohaska@example.net', '185 Upton Prairie Suite 504\nPort Rachelle, KS 39245', '', 0, 0, 'North Rebecca', NULL, NULL, '9e8c03b778bbcc89292dcb72eead470dcac977bd', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (30, 'id', 'turner53@example.org', '30364 Toy Ville Apt. 637\nNorth Bertramland, WY 85151-5115', '', 0, 0, 'Tremblayland', NULL, NULL, '45f563e56e774bbe985de6cc162b40d73fd64238', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (31, 'aut', 'janie42@example.com', '632 Ron Key Suite 076\nLangland, OR 71480-4129', '', 0, 0, 'Ruthestad', NULL, NULL, 'cda855c4db919070af68c184db8fb5c89cdfbaff', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (32, 'iste', 'whodkiewicz@example.net', '199 Elizabeth Lodge\nWest Garrick, VA 46239-8151', '', 0, 0, 'Maryamberg', NULL, NULL, '6419f7d6564a75fd18687423a6d7cfa4428cc678', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (33, 'vitae', 'price.trystan@example.com', '6943 Welch Station Apt. 965\nWest Brayanland, FL 84365', '', 0, 0, 'Port Ellenchester', NULL, NULL, 'd73e87ee3768fa3a16f175df29f0262f1ae804dc', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (34, 'minus', 'brown.brown@example.org', '324 Wanda Route Apt. 454\nMargretfurt, AZ 79524', '', 0, 0, 'Boganfort', NULL, NULL, 'c81aee2285e92793b4e6cdc7cf1153f128376a2f', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (35, 'non', 'mann.tevin@example.net', '724 Muller Motorway Suite 112\nBlandaborough, TX 67739', '', 0, 0, 'Ulicesfurt', NULL, NULL, '8876edd5471cb4ab4ad6438e2694e309190feae2', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (36, 'qui', 'julius.spencer@example.org', '776 Feest Ways Apt. 700\nNew Vivianneview, SD 32821-7024', '', 0, 0, 'South Rosarioside', NULL, NULL, 'd00fcaf4baf6f3dd4e94a7c6d8234c534e6e35cc', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (37, 'sed', 'lockman.deborah@example.net', '34256 Huels Course\nWymanmouth, DE 93164', '', 0, 0, 'West Dorothy', NULL, NULL, '1b85f4e59750965553290a50a72d737586d143d4', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (38, 'est', 'ljohnston@example.com', '98424 Elias Parks Apt. 584\nTowneton, MO 41859', '', 0, 0, 'Jastbury', NULL, NULL, '1ace7d76cd7b9b92293899c33660312772e85849', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (39, 'consequatur', 'jedidiah.blanda@example.net', '927 Graham Junctions Apt. 693\nPort Virginiachester, MT 47681', '', 0, 0, 'Haileychester', NULL, NULL, '0abf1d9091430bd1ec3ed09802aea00bfc399bc1', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (40, 'quam', 'bednar.brandi@example.org', '5247 Israel Via\nNorth Nico, VT 21430-3348', '', 0, 0, 'Lafayettefort', NULL, NULL, '3d0f5f6bb5fbd088589bea0173c9a680fdcc1e76', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (41, 'odit', 'manley61@example.org', '889 Houston Knoll Apt. 070\nNew Trenton, KY 81206-8828', '', 0, 0, 'Cliftonside', NULL, NULL, 'e6ceb94901c9076da651d64edfc77af3800a156f', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (42, 'facere', 'vallie.weimann@example.org', '4319 Shad Course Suite 974\nLake Zachary, WI 33466-0963', '', 0, 0, 'Port Kyleightown', NULL, NULL, '5ba43430048b705f6c367bf77c9b3f52e27dd12a', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (43, 'quam', 'eleonore37@example.com', '907 Moriah Cape\nLake Cobymouth, DE 19181-3764', '', 0, 0, 'West Eulaberg', NULL, NULL, '6b15f2fb0b0d7b0cf3bc711e7003251af63fbe6a', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (44, 'omnis', 'considine.seth@example.net', '89316 Turcotte Mill Suite 947\nElenorafort, IA 35327', '', 0, 0, 'New Eddie', NULL, NULL, 'a6037de708b5f69de42d7e8dc6491ad2b3d03b22', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (45, 'delectus', 'skshlerin@example.org', '93011 Alena River Apt. 179\nSammyton, ND 55413', '', 0, 0, 'East Darienton', NULL, NULL, '075b0dcba7543bbba4a3d10f1254df3f4642a745', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (46, 'aut', 'euna.russel@example.org', '763 Daniela Fort Suite 871\nAndersonmouth, HI 35070', '', 0, 0, 'Hayesborough', NULL, NULL, '0ba6a662764b9aa104ecc5252d90be072d4d7648', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (47, 'dolorem', 'ukuhlman@example.com', '717 Tremblay Park Suite 413\nPort Ova, WV 58474-7789', '', 0, 0, 'Chynaville', NULL, NULL, '0320f1f328436d6adce979b5831f242a0b419dfd', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (48, 'possimus', 'colleen22@example.com', '0980 Maureen Key Apt. 794\nStarkshire, NC 86171-2677', '', 0, 0, 'East Khalil', NULL, NULL, '9f15a84fa93c68ecba832c7cf01fefc7d259167d', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (49, 'voluptatem', 'sid.roob@example.com', '501 Brenna Mills Suite 265\nSouth Thelmafort, IA 35181', '', 0, 0, 'Antoniettastad', NULL, NULL, 'c11523dbaa2293f06bbfa03f24581be79ba4b245', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (50, 'ut', 'borer.harry@example.net', '40752 Gertrude Burgs\nBrianchester, VT 25506', '', 0, 0, 'North Martinafurt', NULL, NULL, 'dd25993aa30c2880d7058bb88b8769ccaebc3c9c', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (51, 'ut', 'denesik.colleen@example.com', '346 Cicero Park\nGaetanoberg, AK 67468-9437', '', 0, 0, 'Port Letitiaview', NULL, NULL, 'a9cd012c224a1b7fb9c5e94dcc37fa74c5aa517a', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (52, 'iste', 'hhammes@example.org', '6945 Hegmann Summit Apt. 941\nPort Neldafurt, NM 97752', '', 0, 0, 'West Tre', NULL, NULL, '308805764d9f8a767127ac2fddfdb32cd685a790', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (53, 'laboriosam', 'manuela.gerlach@example.net', '039 Gusikowski Ways\nNorth Sigmundport, AR 09360-1421', '', 0, 0, 'Tanyaborough', NULL, NULL, 'c167df3b5d69f506fa2e9cd39bddcf9b6cf02712', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (54, 'distinctio', 'dandre81@example.org', '929 Dawn Manors\nEast Forest, OK 74411', '', 0, 0, 'West Serena', NULL, NULL, '0d8e7d9d88f9bb401cb914de3bd043f0f8b007a8', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (55, 'est', 'tlind@example.org', '3115 Lemke Ford\nEraberg, IN 06180-7291', '', 0, 0, 'Lake Anyaport', NULL, NULL, 'b6a2ba465efaeed8943e2f1cbc6115ac57ab25e6', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (56, 'veritatis', 'runolfsson.carson@example.net', '345 Farrell Skyway\nDangelohaven, SC 98555', '', 0, 0, 'Heathcotemouth', NULL, NULL, '0a76dda84abbfdb480cfb058e8a71840c2505124', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (57, 'quasi', 'delta82@example.net', '21078 Laila Avenue\nLuettgenfurt, NM 34137-7269', '', 0, 0, 'Berniefurt', NULL, NULL, 'de2cb17e44a5f98e6b1034564d719950e793918b', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (58, 'similique', 'erick.wehner@example.com', '4507 Antonia Mountain\nSouth Magnustown, MI 36022-6392', '', 0, 0, 'Lake Neva', NULL, NULL, '84222f48a2f97cb684b8551595b10c2483f4c9b5', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (59, 'est', 'mckenna.ebert@example.com', '57530 Amber Street\nRowestad, DE 45125-8080', '', 0, 0, 'East Jadyn', NULL, NULL, '270da6bc5605d490829ff6a4e5389248480d9e60', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (60, 'nihil', 'mraz.silas@example.com', '4518 Rutherford Mountain Suite 808\nOndrickaville, NY 20673', '', 0, 0, 'North Alberto', NULL, NULL, '06d20a4ac5a22968b2b1c75c85056a633c1d081b', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (61, 'impedit', 'candice.kertzmann@example.net', '9713 Jordane Trail Apt. 974\nTimothytown, CA 11414-2225', '', 0, 0, 'Ondrickaville', NULL, NULL, '5468138d44096df84cdde73ef94268b8cac37831', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (62, 'aliquam', 'koelpin.emmy@example.net', '474 Lowe Union Apt. 757\nEast Stone, MI 56897', '', 0, 0, 'Paulinestad', NULL, NULL, '3279275efbd0db08291a9b11346483ecd8cf3547', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (63, 'occaecati', 'gleichner.verona@example.com', '08598 Greenholt Shores\nRobertschester, KS 03496-5751', '', 0, 0, 'Hacketthaven', NULL, NULL, '643d4d07d5a6526dda12a033d0e4a58437e91134', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (64, 'ullam', 'bruen.elna@example.net', '3866 Reba Spring\nNorth Ashaview, NC 57216-2210', '', 0, 0, 'Friesenbury', NULL, NULL, 'b02421f89586aa26f2beae24c530192e7646ba7a', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (65, 'rerum', 'lonnie.ondricka@example.com', '10846 Gottlieb Plaza Apt. 289\nCorenemouth, NH 58322', '', 0, 0, 'South Claraberg', NULL, NULL, '080db7d37b5b4c13beaae935561594afba8e52f0', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (66, 'explicabo', 'millie86@example.net', '35298 Lebsack Manors\nRennerhaven, OH 82889', '', 0, 0, 'Wildermanville', NULL, NULL, '638dba5a38478a4c0e7724094742806f4d9dac23', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (67, 'placeat', 'zulauf.maureen@example.org', '26986 Jacobson Locks\nEast Sven, WI 36517-1406', '', 0, 0, 'Jillianstad', NULL, NULL, '96d7151b1fc2584293a9e1846c7df2cadd0877da', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (68, 'eveniet', 'pearl.hand@example.com', '48338 Elisha Valleys\nElliebury, NY 08938', '', 0, 0, 'South Sibylton', NULL, NULL, 'ff9afa4ec314ec2e6f2f8c00be0b126a6164fe37', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (69, 'unde', 'ybecker@example.net', '7703 Carson Lights Apt. 578\nSouth Heidi, AZ 87733', '', 0, 0, 'Croninfort', NULL, NULL, '6b77e015edb35e5d1afb11eecbf88b088db28c3f', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (70, 'nam', 'dallas.reichert@example.net', '7673 Sawayn Camp\nSouth Bridgetview, MD 82879', '', 0, 0, 'Lake Juliusview', NULL, NULL, 'd8544fae30d3cb580bb1c61eae03910e75a1868f', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (71, 'esse', 'lane.hudson@example.com', '22004 Alayna Falls Apt. 168\nPort Madie, CO 16313-2238', '', 0, 0, 'Port Fredafurt', NULL, NULL, '60bd9440df3b9732501715fe816a088f52108827', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (72, 'neque', 'westley.heaney@example.net', '92288 Rohan Place\nPort Jewellport, AR 98508-2332', '', 0, 0, 'North Devyn', NULL, NULL, 'ec35d6ed27dc0fd198b44bc3296c18ee50d41cd9', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (73, 'ut', 'olson.nils@example.net', '487 Josh Inlet\nNew Amaramouth, CO 95954', '', 0, 0, 'Port Polly', NULL, NULL, '723ca1151da42b7d7c19a8842a25db0f20b2cadf', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (74, 'ut', 'tprice@example.org', '952 Blanda Lake\nLake Beau, KY 82058', '', 0, 0, 'East Vita', NULL, NULL, '73d0a89e4beaea3f0c881e380be2242551fb1a3e', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (75, 'quia', 'kirsten.wolf@example.org', '21046 Smith Corners Suite 960\nEast Frederiquehaven, MA 11819-9952', '', 0, 0, 'New Jeraldview', NULL, NULL, '9f93810941148a536cf6aa3aba5ab21d925eec24', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (76, 'temporibus', 'rhackett@example.org', '3967 Caleb Lights\nRickyport, SD 79734', '', 0, 0, 'Ulicesborough', NULL, NULL, 'cec6d97a62c06b85963dbeb0fcbf8642ca20bc7f', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (77, 'praesentium', 'kaden.kulas@example.net', '005 Erling Ports\nLarsonfort, CO 66704', '', 0, 0, 'Lake Dana', NULL, NULL, '3ffcefd49683d56df3a2abd61859c79354ac91fe', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (78, 'qui', 'hfahey@example.org', '20459 Gutkowski Courts\nCarmelberg, WY 13714-2094', '', 0, 0, 'Estellaborough', NULL, NULL, '7ada0977b326b12f0d26e9944f7eda8d00e727e1', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (79, 'sequi', 'vblick@example.net', '15758 Konopelski Fall\nSimonisfort, CT 00647', '', 0, 0, 'East Kittyland', NULL, NULL, 'ceb86ef9d8e2480f8c39029776b53e0e144b23b7', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (80, 'impedit', 'hpredovic@example.org', '369 Trinity Mews Suite 019\nLake Katelinview, FL 96225', '', 0, 0, 'Lake Carissa', NULL, NULL, '45d3888471510f0109de051723d1719805b4dfee', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (81, 'aut', 'btowne@example.org', '7517 Jacobson Villages\nGulgowskishire, NH 25268-7825', '', 0, 0, 'North Albertoside', NULL, NULL, 'f80087cc57890a2d662c5c5f5be3b4e7539a8de5', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (82, 'maxime', 'schmidt.tiana@example.net', '027 Cole Course\nElinorfort, IN 26973', '', 0, 0, 'Deckowside', NULL, NULL, '293301dff8532d5559ad45690ae5f05fdf154750', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (83, 'dolores', 'kristoffer.bashirian@example.com', '2399 Teresa Tunnel Apt. 473\nPadbergmouth, ID 15994', '', 0, 0, 'South Patriciaville', NULL, NULL, '16425d88e084e004581dcc6cca4eb8db84ddc4ed', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (84, 'harum', 'terrance17@example.com', '729 Ethan Ridges\nLynchberg, MO 80410', '', 0, 0, 'South Murl', NULL, NULL, '6e27c824dfda6cee7055c0b1b966ebd7bcf6511e', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (85, 'incidunt', 'volkman.eusebio@example.org', '4741 Lura Track Apt. 711\nPacochaville, NM 34235-9573', '', 0, 0, 'New Prudence', NULL, NULL, 'b8520fe7628df71cb4f42de61f61701884688e8b', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (86, 'aspernatur', 'sarai36@example.org', '286 Destiny Junctions\nNew Annie, DC 99302-7626', '', 0, 0, 'Emilyview', NULL, NULL, 'a7994e3ec4baa52c9d140700b6ca431b43a0d776', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (87, 'soluta', 'xrolfson@example.com', '09591 Kareem Courts Suite 252\nNew Felton, ME 34063', '', 0, 0, 'Lisettefurt', NULL, NULL, 'b240f3a69489730274eefa4d0eec58f1aea06cc4', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (88, 'debitis', 'kathryn04@example.net', '106 Charity Extension Suite 068\nLake Reginaldhaven, IN 32125-7936', '', 0, 0, 'Carrollbury', NULL, NULL, '6c003dbf11a1cf437e4474dfdafd1719bb64f2f7', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (89, 'voluptatum', 'ledner.marge@example.net', '68573 Enos Avenue Suite 315\nSouth Herbert, SC 82202', '', 0, 0, 'Lake Mohamedmouth', NULL, NULL, '1697e2d04a61e27f440646219595c3a28e0f3d07', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (90, 'voluptas', 'leopoldo.simonis@example.com', '2696 Robel Row Apt. 466\nEast Bradberg, CO 28729', '', 0, 0, 'Rossieton', NULL, NULL, 'd2ec9adc152731b450623c726a1143691ba063b2', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (91, 'non', 'hilpert.lonzo@example.net', '12805 Predovic Manors Apt. 523\nLake Brantshire, CA 59654-9161', '', 0, 0, 'Rauside', NULL, NULL, 'c8897e06a020a997faacb20e3abc067d32b846ad', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (92, 'iure', 'madelyn04@example.com', '1856 Bethel Falls Apt. 341\nLake Pansyton, WA 03596', '', 0, 0, 'Gleichnerfort', NULL, NULL, '971e5b0e6eb8c49380e83d81b142400c8dbef4d4', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (93, 'dolorem', 'susanna.brekke@example.org', '5302 Volkman Villages Apt. 753\nNew Fredaburgh, AR 48846', '', 0, 0, 'Lake Margarettabury', NULL, NULL, 'c3b242edf4a0bb15ba4d83f25cae5e6911b8953e', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (94, 'incidunt', 'ora.kirlin@example.com', '411 Rhiannon Course Apt. 182\nKatherineton, SD 91590-6922', '', 0, 0, 'East Moises', NULL, NULL, 'ad25b1cb7892a7d3580aafa99c77f3363e390ff2', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (95, 'quia', 'qhirthe@example.com', '3384 Audrey Glens\nNew Rodport, ND 49729', '', 0, 0, 'South Noraburgh', NULL, NULL, 'ea70d1c25788685c2dac94714824261fbfe41a20', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (96, 'modi', 'jones.jonatan@example.org', '193 Elroy Heights\nBaileymouth, SD 19546-8412', '', 0, 0, 'South Moshe', NULL, NULL, 'd5a1f88d3dde990a2fa10bb57ba48cf30dc50752', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (97, 'iure', 'conrad29@example.com', '2827 Theodore Spurs\nSouth Alexatown, CT 38292-7300', '', 0, 0, 'Ernserview', NULL, NULL, 'f95053981f20bd700e760a2154e2c302dceacb1a', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (98, 'et', 'elton76@example.net', '120 Federico Estates\nPort Nathaniel, ND 93237-6743', '', 0, 0, 'Kautzermouth', NULL, NULL, '2708c309e403086ce6c047842d8399e25c019e92', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (99, 'soluta', 'erik47@example.com', '41383 Pagac Mall\nEast Herminiaside, NY 33338', '', 0, 0, 'Port Lelahhaven', NULL, NULL, '94dd24bf9debe7f90eb25dbf11971c82b739a18b', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (100, 'ut', 'adela54@example.net', '8167 Reinger Spurs Suite 824\nBradfordbury, AZ 05117', '', 0, 0, 'Bradland', NULL, NULL, '2ff8abaea78f08a44ee6a7e283f472d815c8b6c5', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (101, 'soluta', 'qhudson@example.net', '094 Brakus Crescent Apt. 290\nMiracleland, CO 23973', '', 0, 0, 'South Rubyview', NULL, NULL, '4a7f37d445dbe9717182481e514f9c696cc95b7b', '');
INSERT INTO `customer` (`id`, `name`, `email`, `address`, `tpno`, `terms`, `state`, `city`, `district`, `gender`, `password`, `validationc`) VALUES (102, 'rem', 'mayer.wilfredo@example.com', '856 Linnie Extensions\nPort Eldridge, TX 83077-9196', '', 0, 0, 'Steuberville', NULL, NULL, '04422964a992012cac87834069f83cab96c3501e', '');


#
# TABLE STRUCTURE FOR: empleave
#

DROP TABLE IF EXISTS `empleave`;

CREATE TABLE `empleave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: employee
#

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
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
  `userLevel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`code`),
  UNIQUE KEY `employee_NIC_uindex` (`NIC`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: healthytips
#

DROP TABLE IF EXISTS `healthytips`;

CREATE TABLE `healthytips` (
  `hid` int(255) NOT NULL AUTO_INCREMENT,
  `tip` varchar(256) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: messages
#

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `mid` int(255) NOT NULL AUTO_INCREMENT,
  `customerid` varchar(255) NOT NULL,
  `question` varchar(256) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `state` varchar(3) DEFAULT NULL,
  `timestamp` varchar(3) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `msgFrom` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mid`,`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: messagesr
#

DROP TABLE IF EXISTS `messagesr`;

CREATE TABLE `messagesr` (
  `cid` varchar(256) NOT NULL,
  `eid` varchar(256) NOT NULL,
  `mid` int(255) NOT NULL,
  PRIMARY KEY (`cid`,`eid`,`mid`),
  KEY `x11` (`eid`),
  KEY `x12` (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: nonappointmentpay
#

DROP TABLE IF EXISTS `nonappointmentpay`;

CREATE TABLE `nonappointmentpay` (
  `paymentid` int(255) NOT NULL AUTO_INCREMENT,
  `serviceid` int(255) NOT NULL,
  `beauticianid` int(255) NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`paymentid`,`serviceid`,`beauticianid`),
  KEY `serviceId` (`serviceid`),
  KEY `beauticianid` (`beauticianid`),
  CONSTRAINT `beauticianid` FOREIGN KEY (`beauticianid`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `serviceId` FOREIGN KEY (`serviceid`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: purchaseitem
#

DROP TABLE IF EXISTS `purchaseitem`;

CREATE TABLE `purchaseitem` (
  `paymentid` int(255) NOT NULL AUTO_INCREMENT,
  `itemid` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`paymentid`,`itemid`),
  KEY `payment_item` (`itemid`),
  CONSTRAINT `purchase_item` FOREIGN KEY (`itemid`) REFERENCES `stock` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: purchasepay
#

DROP TABLE IF EXISTS `purchasepay`;

CREATE TABLE `purchasepay` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: receivetips
#

DROP TABLE IF EXISTS `receivetips`;

CREATE TABLE `receivetips` (
  `hid` int(255) NOT NULL,
  `cid` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`hid`,`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: services
#

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `duration` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (1, 'iure', '359527510.14356', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (2, 'veritatis', '6.421', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (3, 'asperiores', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (4, 'animi', '93.566135733', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (5, 'doloribus', '1258.69', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (6, 'natus', '200.21', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (7, 'quibusdam', '2095484.77', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (8, 'sint', '80.3', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (9, 'inventore', '19073542.463917', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (10, 'vel', '41703.81', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (11, 'quia', '332.16', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (12, 'voluptate', '5.10809', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (13, 'molestias', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (14, 'omnis', '14168.255', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (15, 'officia', '844.61747258', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (16, 'error', '6806888', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (17, 'temporibus', '7810.92125', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (18, 'sint', '5.88957', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (19, 'quae', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (20, 'dolorum', '121134.868', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (21, 'iure', '41.49', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (22, 'harum', '30122.8', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (23, 'recusandae', '2049610.988773', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (24, 'eaque', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (25, 'illum', '132576302.1395', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (26, 'eveniet', '13363.77735', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (27, 'corporis', '43.2', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (28, 'tempora', '459036.3', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (29, 'sunt', '105.9519', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (30, 'quae', '0.12', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (31, 'aspernatur', '33.38037', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (32, 'cumque', '35078.4', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (33, 'quidem', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (34, 'vero', '20642734.3', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (35, 'delectus', '106.4', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (36, 'vitae', '3636514.9423058', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (37, 'molestiae', '9.3', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (38, 'ipsam', '94562807.2', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (39, 'rerum', '104.0228304', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (40, 'dolores', '39.096', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (41, 'quo', '501044206.4', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (42, 'corrupti', '36.9', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (43, 'dolorum', '11548.66296', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (44, 'numquam', '454291.898112', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (45, 'deserunt', '24536.51', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (46, 'recusandae', '0.975319', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (47, 'inventore', '10232.304915', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (48, 'est', '461.6633', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (49, 'minus', '6173615.8972', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (50, 'aliquid', '20640093.17435', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (51, 'eos', '8407.78799299', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (52, 'quibusdam', '21472987.86', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (53, 'sit', '2.4443318', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (54, 'sint', '913', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (55, 'autem', '225', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (56, 'velit', '203.490184', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (57, 'fugiat', '12612.24020603', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (58, 'odio', '381000.32518', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (59, 'facilis', '406.031614778', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (60, 'velit', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (61, 'quia', '1398.895', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (62, 'eius', '64646197.464', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (63, 'culpa', '4.093', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (64, 'magnam', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (65, 'autem', '6814178.78', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (66, 'commodi', '76857427.05674', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (67, 'quia', '116405513.9', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (68, 'eveniet', '172.9865', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (69, 'cum', '34412567', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (70, 'explicabo', '18257297.3055', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (71, 'accusantium', '144', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (72, 'est', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (73, 'cupiditate', '184174301.97292', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (74, 'voluptatem', '4.23548646', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (75, 'est', '25929241.59207', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (76, 'ea', '12263376.9439', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (77, 'autem', '7381374', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (78, 'error', '56164.60755804', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (79, 'tempora', '13467.709892', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (80, 'maxime', '83396.001', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (81, 'explicabo', '7.952', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (82, 'et', '3', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (83, 'delectus', '1.5', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (84, 'quia', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (85, 'est', '35.54919', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (86, 'neque', '0', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (87, 'aut', '2.5', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (88, 'voluptate', '1986099.3', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (89, 'et', '36850.32487414', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (90, 'laudantium', '4', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (91, 'id', '0.167', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (92, 'voluptatem', '33240567.5447', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (93, 'aut', '427.8161', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (94, 'dolore', '338940.424', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (95, 'numquam', '1.2', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (96, 'dolorem', '8.96631', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (97, 'aut', '19545.13977', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (98, 'sit', '247087.52660167', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (99, 'distinctio', '322', '');
INSERT INTO `services` (`id`, `name`, `price`, `duration`) VALUES (100, 'molestiae', '0', '');


#
# TABLE STRUCTURE FOR: stock
#

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currentq` int(3) NOT NULL,
  `brand` varchar(256) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `preOrderl` int(11) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`code`),
  UNIQUE KEY `stock_code_pk` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: supplier
#

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: supplyitem
#

DROP TABLE IF EXISTS `supplyitem`;

CREATE TABLE `supplyitem` (
  `item` int(255) NOT NULL,
  `supplier` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`item`,`supplier`),
  KEY `supply_supplier` (`supplier`),
  CONSTRAINT `supply_item` FOREIGN KEY (`item`) REFERENCES `stock` (`id`),
  CONSTRAINT `supply_supplier` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `validationc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


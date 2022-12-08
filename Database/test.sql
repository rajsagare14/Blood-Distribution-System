-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2022 at 03:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_regis`
--

CREATE TABLE `bank_regis` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bldbankName` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospType` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contactPerson` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospEmail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospContact` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `licenceNo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `helplineNo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stateText` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `districttext` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subdistricttext` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `towntext` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `villagetext` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_regis`
--

INSERT INTO `bank_regis` (`id`, `username`, `password`, `bldbankName`, `hospType`, `contactPerson`, `hospEmail`, `hospContact`, `licenceNo`, `helplineNo`, `stateText`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES
(1, 'bloodbankkolhapur', 'bbk', 'Blood Bank', 'Red Cross', 'Shivaji Pawar', 'bbk@gmail.com', '1112223334', '555666444777', '8888777765', 'Maharashtra', 'Kolhapur', 'Karveer', 'Rajendranagar', 'Kolhapur', 416007, 'Plot No 10 Rajendra Nagar Kolhapur Maharashtra'),
(4, 'aby', 'aby', 'Aby Blood Bank', 'Charitable', '9190256545', 'aby@gmail.com', '9895706050', 'A70405220xxx', '1800229268', 'Maharashtra', 'Navi Mumbai', 'Goregaon', 'gore gali', 'NA', 406008, 'Goregaon ki building goregaon mumbai maharashtra'),
(5, 'tlobn', 'tlobn', 'Kazi bank of blood', 'Private', 'Mr. Rajesh Bhise', 'kazisahab@gmail.com', '9997867860', '1110000420', '12345225852', 'Maharashtra', 'panvel', 'bhatan', 'bhatanpada', 'amity', 410080, 'Shivani Heriage');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstocks`
--

CREATE TABLE `bloodstocks` (
  `id` int(11) NOT NULL,
  `identity` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wbap` int(11) NOT NULL,
  `wban` int(11) NOT NULL,
  `wbbp` int(11) NOT NULL,
  `wbbn` int(11) NOT NULL,
  `wbabp` int(11) NOT NULL,
  `wbabn` int(11) NOT NULL,
  `wbop` int(11) NOT NULL,
  `wbon` int(11) NOT NULL,
  `plap` int(11) NOT NULL,
  `plan` int(11) NOT NULL,
  `plbp` int(11) NOT NULL,
  `plbn` int(11) NOT NULL,
  `plabp` int(11) NOT NULL,
  `plabn` int(11) NOT NULL,
  `plop` int(11) NOT NULL,
  `plon` int(11) NOT NULL,
  `pmap` int(11) NOT NULL,
  `pman` int(11) NOT NULL,
  `pmbp` int(11) NOT NULL,
  `pmbn` int(11) NOT NULL,
  `pmabp` int(11) NOT NULL,
  `pmabn` int(11) NOT NULL,
  `pmop` int(11) NOT NULL,
  `pmon` int(11) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodstocks`
--

INSERT INTO `bloodstocks` (`id`, `identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`, `pincode`) VALUES
(1, 'hospital', 'Aster Aaadhar', 12, 24, 36, 48, 36, 24, 12, 6, 12, 24, 36, 48, 36, 24, 12, 6, 12, 24, 36, 48, 36, 24, 12, 6, 416008),
(6, 'hospital', 'Hiranandani', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 416008),
(7, 'hospital', 'dhanraj hospital', 69, 26, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 0, 0, 0, 0, 0, 0, 0, 416006),
(8, 'blood bank', 'Aby Blood Bank', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 416018),
(9, 'hospital', 'Meet Care', 50, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 216128),
(10, 'blood bank', 'Kazi bank of blood', 200, 76, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 416040);

-- --------------------------------------------------------

--
-- Table structure for table `hosp_regis`
--

CREATE TABLE `hosp_regis` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospitalname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospitaltype` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospitalcaretype` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospitalregisnumber` bigint(20) NOT NULL,
  `nodalpersoninfo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nodalpersontele` bigint(20) NOT NULL,
  `nodalpersonemailid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `statetext` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `districttext` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subdistricttext` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `towntext` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `villagetext` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `address` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_regis`
--

INSERT INTO `hosp_regis` (`id`, `username`, `password`, `hospitalname`, `hospitaltype`, `hospitalcaretype`, `hospitalregisnumber`, `nodalpersoninfo`, `nodalpersontele`, `nodalpersonemailid`, `statetext`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES
(1, 'AsterAaadharKolhapur', 'aak', 'Aster Aaadhar', 'Government', 'Hospital', 9890522014, 'Shivaji Pawar', 2302691565, 'shijaji@pawar.com', 'Maharashtra', 'Sangli', 'Sangli', 'koliwada', 'Islampur', 416009, 'Islampur galli no 12'),
(5, 'gfgfgf', '123', 'Hiranandani', 'Government/Public', 'Hospital', 12345, 'as', 7757823469, 'raju@gmail.com', 'Maharashtra', 'Kolhapur', 'Karveer', 'Kolhapur', 'Kodoli', 416008, 'Plot 10 Star Ashiyan'),
(6, 'user', 'user', 'user', 'Government/Public', 'Hospital', 0, 'XYZ', 0, 'abc@gmail.com', 'Maharashtra', 'abc', 'abc', 'abc', 'abc', 416404, 'abc'),
(7, 'dhanraj', 'dhanraj', 'dhanraj hospital', 'Private', 'Dispensary', 0, 'Dhanraj Panchal', 9191929496, 'dhanraj@gmail.com', 'Maharashtra', 'Dombivli', 'Republic of Dombivli', 'Bon Gali', 'NA', 406008, 'Bon Tailor ki buildi'),
(8, 'meet', 'meet', 'Meet Care', 'Private', 'Community Health Cen', 0, 'Meet Mali', 2002002526, 'meet@gmail.com', 'Maharashtra', 'Thane', 'Kalyan', 'Dombivli', 'NA', 421201, 'Dombivli jay bhavani ke malak');

-- --------------------------------------------------------

--
-- Table structure for table `order_blood`
--

CREATE TABLE `order_blood` (
  `id` int(11) NOT NULL,
  `organizationname` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderedfrom` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `orderstatus` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ordertime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_blood`
--

INSERT INTO `order_blood` (`id`, `organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES
(1, 'Aster Aaadhar', 'wbap', 150, 'Kazi bank of blood', 'pending', '2022-12-08 08:11:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_regis`
--
ALTER TABLE `bank_regis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bloodstocks`
--
ALTER TABLE `bloodstocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosp_regis`
--
ALTER TABLE `hosp_regis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `order_blood`
--
ALTER TABLE `order_blood`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizationname` (`organizationname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_regis`
--
ALTER TABLE `bank_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bloodstocks`
--
ALTER TABLE `bloodstocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hosp_regis`
--
ALTER TABLE `hosp_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_blood`
--
ALTER TABLE `order_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

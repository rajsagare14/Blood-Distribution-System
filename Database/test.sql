-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2022 at 07:16 PM
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
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `bldbankName` varchar(40) NOT NULL,
  `hospType` varchar(30) NOT NULL,
  `contactPerson` varchar(30) NOT NULL,
  `hospEmail` varchar(30) NOT NULL,
  `hospContact` varchar(10) NOT NULL,
  `licenceNo` varchar(20) NOT NULL,
  `helplineNo` varchar(10) NOT NULL,
  `statetext` varchar(16) NOT NULL,
  `districttext` varchar(16) NOT NULL,
  `subdistricttext` varchar(16) NOT NULL,
  `towntext` varchar(16) NOT NULL,
  `villagetext` varchar(16) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_regis`
--

INSERT INTO `bank_regis` (`id`, `username`, `password`, `bldbankName`, `hospType`, `contactPerson`, `hospEmail`, `hospContact`, `licenceNo`, `helplineNo`, `statetext`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES
(1, 'bloodbankkolhapur', 'bbk', 'Blood Bank', 'Red Cross', 'Shivaji Pawar', 'bbk@gmail.com', '1112223334', '555666444777', '8888777765', 'Maharashtra', 'Kolhapur', 'Karveer', 'Rajendranagar', 'Kolhapur', 416007, 'Plot No 10 Rajendra Nagar Kolhapur Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstocks`
--

CREATE TABLE `bloodstocks` (
  `id` int(11) NOT NULL,
  `identity` varchar(16) NOT NULL,
  `name` varchar(64) NOT NULL,
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
  `pmon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodstocks`
--

INSERT INTO `bloodstocks` (`id`, `identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`) VALUES
(1, 'hospital', 'Aster Aaadhar', 12, 24, 36, 48, 36, 24, 12, 6, 12, 24, 36, 48, 36, 24, 12, 6, 12, 24, 36, 48, 36, 24, 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hosp_regis`
--

CREATE TABLE `hosp_regis` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `hospitalname` varchar(50) NOT NULL,
  `hospitaltype` varchar(20) NOT NULL,
  `hospitalcaretype` enum('Hospital','Dispensary','Community Health Centre','Nursing Home','Medical College','Sub Centre','Poly Clinic','Primary Health Centre','Clinic','Others') NOT NULL,
  `hospitalregisnumber` bigint(20) NOT NULL,
  `nodalpersoninfo` varchar(50) NOT NULL,
  `nodalpersontele` bigint(20) NOT NULL,
  `nodalpersonemailid` varchar(50) NOT NULL,
  `statetext` enum('Andaman & Nicobar Islands','Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chandigarh','Chhatisgarh','Dadra & Nagar Haveli','Daman & Diu','Delhi','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Lakshadweep','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Puducherry','Punjab','Rajasthan','Sikkim','Tamil Nadu','Telangana','Tripura','Uttar Pradesh','Uttarakhand','West Bengal') NOT NULL,
  `districttext` varchar(20) NOT NULL,
  `subdistricttext` varchar(20) NOT NULL,
  `towntext` varchar(20) NOT NULL,
  `villagetext` varchar(20) NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_regis`
--

INSERT INTO `hosp_regis` (`id`, `username`, `password`, `hospitalname`, `hospitaltype`, `hospitalcaretype`, `hospitalregisnumber`, `nodalpersoninfo`, `nodalpersontele`, `nodalpersonemailid`, `statetext`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES
(1, 'AsterAaadharKolhapur', 'aak', 'Aster Aaadhar', 'Government', 'Hospital', 9890522014, 'Shivaji Pawar', 2302691565, 'shijaji@pawar.com', 'Maharashtra', 'Sangli', 'Sangli', 'koliwada', 'Islampur', 416009, 'Islampur galli no 12'),
(5, 'gfgfgf', '123', 'Hiranandani', 'Government/Public', 'Hospital', 12345, 'as', 7757823469, 'raju@gmail.com', 'Maharashtra', 'Kolhapur', 'Karveer', 'Kolhapur', 'Kodoli', 416008, 'Plot 10 Star Ashiyana Rajendra Nagar'),
(6, 'user', 'user', 'user', 'Government/Public', 'Hospital', 0, 'XYZ', 0, 'abc@gmail.com', 'Maharashtra', 'abc', 'abc', 'abc', 'abc', 416404, 'abc');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_regis`
--
ALTER TABLE `bank_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodstocks`
--
ALTER TABLE `bloodstocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hosp_regis`
--
ALTER TABLE `hosp_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

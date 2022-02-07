-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 10:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `apprej`
--

CREATE TABLE `apprej` (
  `appid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apprej`
--

INSERT INTO `apprej` (`appid`, `name`, `text`, `status`) VALUES
(0, 'kishore', 'reject services', 1),
(1, 'kishore', 'accept your service', 1);

-- --------------------------------------------------------

--
-- Table structure for table `companyreg`
--

CREATE TABLE `companyreg` (
  `comregid` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Place` varchar(10) NOT NULL,
  `postid` int(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyreg`
--

INSERT INTO `companyreg` (`comregid`, `Name`, `Address`, `Place`, `postid`, `Phone`, `status`) VALUES
(255, 'kiran', 'puthuparambil', 'mundakayam', 1, '7593023456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(10) NOT NULL,
  `districtname` varchar(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `districtname`, `status`) VALUES
(1, 'kottayam', 1),
(2, 'kollam', 1),
(3, 'Ernakulam', 1),
(4, 'dfghn', 1),
(5, 'ernakulam', 1),
(6, 'vayanad', 1),
(7, 'll', 1),
(8, 'kozhikode', 1),
(9, 'alapuzha', 1),
(10, 'kannur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Fid` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Text` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fid`, `Name`, `Text`, `status`) VALUES
(249, 'rajan', 'this site is very helpfull', 1),
(254, 'Ajin chandran', 'helpfull site', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Usertype` int(10) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `Password`, `Usertype`, `Status`) VALUES
(1, 'admin@gmail.com', 'admin', 1, 1),
(254, 'ajin@gmail.com', 'ajin123@', 2, 1),
(255, 'kiran@gmail.com', 'kiran123@', 4, 1),
(256, 'akshaya123@gmail.com', 'akshaya123@', 2, 1),
(257, 'achu123@gmail.com', 'achu123@', 2, 1),
(258, 'ammu123@gmail.com', '123', 2, 1),
(259, 'kiran@gmail.com', '123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mecid` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mecid`, `Name`, `Address`, `Place`, `Phone`, `status`) VALUES
(253, 'mahesh', 'puthuparambil', 'mundakayam', '7593015484', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(10) NOT NULL,
  `Userid` int(10) NOT NULL,
  `Cardno` varchar(10) NOT NULL,
  `Expirationdate` varchar(10) NOT NULL,
  `Cvvno` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `Userid`, `Cardno`, `Expirationdate`, `Cvvno`, `Amount`, `Status`) VALUES
(5, 252, '132444', '2021-02-08', '345', '100', 1),
(6, 254, '2354678901', '2021-02-26', '546', '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `postoffice`
--

CREATE TABLE `postoffice` (
  `postid` int(10) NOT NULL,
  `postname` varchar(10) NOT NULL,
  `talukid` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postoffice`
--

INSERT INTO `postoffice` (`postid`, `postname`, `talukid`, `status`) VALUES
(1, 'karinilam', 1, 1),
(2, 'karinilam', 2, 1),
(3, 'mundakayam', 2, 1),
(4, 'popo', 1, 1),
(5, 'erumely', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `sid` int(10) NOT NULL,
  `service` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sid`, `service`, `status`) VALUES
(1, 'car servicing', 1),
(2, 'full car service', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Serviceid` int(10) NOT NULL,
  `Userid` int(10) NOT NULL,
  `Services` varchar(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Serviceid`, `Userid`, `Services`, `Status`) VALUES
(4, 254, 'we want ca', 1),
(5, 257, 'we want ca', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taluk`
--

CREATE TABLE `taluk` (
  `talukid` int(101) NOT NULL,
  `talukname` varchar(20) NOT NULL,
  `districtid` int(101) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluk`
--

INSERT INTO `taluk` (`talukid`, `talukname`, `districtid`, `status`) VALUES
(1, 'kanjirapally', 1, 1),
(2, 'muttam', 2, 1),
(3, 'muttam', 3, 1),
(4, 'vaikam', 4, 1),
(5, 'bathari', 6, 1),
(6, 'panamaram', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application`
--

CREATE TABLE `tbl_application` (
  `Apply_id` int(20) NOT NULL,
  `Userid` int(20) NOT NULL,
  `vacancyid` int(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_application`
--

INSERT INTO `tbl_application` (`Apply_id`, `Userid`, `vacancyid`, `Date`, `Status`) VALUES
(1, 0, 2019, '', 1),
(2, 1, 242, '2019-04-13', 1),
(3, 0, 0, '2019-04-23', 1),
(4, 0, 0, '2019-04-23', 1),
(5, 242, 0, '2019-04-24', 1),
(6, 242, 0, '2019-04-24', 1),
(7, 242, 0, '2019-04-24', 1),
(8, 242, 0, '2019-04-24', 1),
(9, 242, 6, '2019-04-17', 1),
(10, 242, 0, '2019-04-24', 1),
(11, 242, 1, '2019-04-24', 1),
(12, 0, 6, '2019-04-10', 1),
(13, 0, 6, '2019-04-19', 1),
(14, 0, 6, '2019-04-11', 1),
(15, 0, 6, '2019-04-12', 1),
(16, 0, 6, '2019-04-13', 1),
(17, 0, 6, '2019-04-13', 1),
(18, 0, 6, '2019-04-13', 1),
(19, 245, 6, '2019-04-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fdbk`
--

CREATE TABLE `tbl_fdbk` (
  `Userid` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `text` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `otp_id` int(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `status` int(10) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`otp_id`, `email`, `otp`, `status`, `count`) VALUES
(41, 'vidhyavija', '808138', 1, 3),
(42, 'vidhyavija', '209591', 1, 3),
(43, 'vidhyavija', '951930', 1, 3),
(44, 'vidhyavija', '679822', 1, 3),
(45, 'vidhyavija', '018380', 1, 3),
(46, 'vidhyavija', '685777', 1, 3),
(47, 'vidhyavija', '329169', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Paymentid` int(10) NOT NULL,
  `Userid` int(10) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Paymentid`, `Userid`, `Experience`, `Amount`, `Date`, `status`) VALUES
(3, 243, '5', '100', '2019-04-17', 1),
(4, 242, '7', '450', '2019-04-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrregistration`
--

CREATE TABLE `userrregistration` (
  `Userid` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phoneno` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Vehicletype` varchar(100) NOT NULL,
  `Vehiclename` varchar(50) NOT NULL,
  `Vehiclenumber` varchar(10) NOT NULL,
  `Vehiclemodel` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrregistration`
--

INSERT INTO `userrregistration` (`Userid`, `Name`, `Phoneno`, `Place`, `Vehicletype`, `Vehiclename`, `Vehiclenumber`, `Vehiclemodel`, `Status`) VALUES
(254, 'Ajin chandran', '7593015484', 'Mundakayam', 'Two Wheeler', 'bicycle', '456732', 'Bajaj Pulsur', 1),
(255, 'akku', '7593023456', 'elappara', 'Two Wheeler', 'bicycle', '12345', 'Bajaj Pulsur', 1),
(256, 'akshaya', '7593015484', 'vagamon', 'Four Wheeler', 'car', '34567', 'swift', 1),
(257, 'achu', '9446743939', 'elappara', 'Four Wheeler', '-select-', '12345', 'swift', 1),
(258, 'ammu', '9446743939', 'elappara', 'Two Wheeler', '-select-', '12345', 'Bajaj Pulsur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `Usertypeid` int(20) NOT NULL,
  `Usertype` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`Usertypeid`, `Usertype`, `Status`) VALUES
(1, 'Admin', 1),
(2, 'user', 1),
(4, 'mechanic', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprej`
--
ALTER TABLE `apprej`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `companyreg`
--
ALTER TABLE `companyreg`
  ADD PRIMARY KEY (`comregid`),
  ADD KEY `companyreg_postid_foreign` (`postid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `postoffice`
--
ALTER TABLE `postoffice`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `postoffice_talikid_foreign` (`talukid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Serviceid`);

--
-- Indexes for table `taluk`
--
ALTER TABLE `taluk`
  ADD PRIMARY KEY (`talukid`),
  ADD KEY `taluk_districtid_foreign` (`districtid`);

--
-- Indexes for table `tbl_application`
--
ALTER TABLE `tbl_application`
  ADD PRIMARY KEY (`Apply_id`);

--
-- Indexes for table `tbl_fdbk`
--
ALTER TABLE `tbl_fdbk`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Paymentid`);

--
-- Indexes for table `userrregistration`
--
ALTER TABLE `userrregistration`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`Usertypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyreg`
--
ALTER TABLE `companyreg`
  MODIFY `comregid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postoffice`
--
ALTER TABLE `postoffice`
  MODIFY `postid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Serviceid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taluk`
--
ALTER TABLE `taluk`
  MODIFY `talukid` int(101) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_application`
--
ALTER TABLE `tbl_application`
  MODIFY `Apply_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `otp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `Paymentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userrregistration`
--
ALTER TABLE `userrregistration`
  MODIFY `Userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `Usertypeid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companyreg`
--
ALTER TABLE `companyreg`
  ADD CONSTRAINT `companyreg_postid_foreign` FOREIGN KEY (`postid`) REFERENCES `postoffice` (`postid`);

--
-- Constraints for table `postoffice`
--
ALTER TABLE `postoffice`
  ADD CONSTRAINT `postoffice_talikid_foreign` FOREIGN KEY (`talukid`) REFERENCES `taluk` (`talukid`);

--
-- Constraints for table `taluk`
--
ALTER TABLE `taluk`
  ADD CONSTRAINT `taluk_districtid_foreign` FOREIGN KEY (`districtid`) REFERENCES `district` (`districtid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

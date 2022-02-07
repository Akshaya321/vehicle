-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 05:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employment`
--

-- --------------------------------------------------------

--
-- Table structure for table `addexchange`
--

CREATE TABLE `addexchange` (
  `Addexid` int(10) NOT NULL,
  `Employmentname` varchar(20) NOT NULL,
  `postid` int(11) NOT NULL,
  `Phoneno` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mainbranch` varchar(20) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addexchange`
--

INSERT INTO `addexchange` (`Addexid`, `Employmentname`, `postid`, `Phoneno`, `Email`, `Mainbranch`, `Status`) VALUES
(10, 'Kanjirappa', 2, '0482827251', 'Kanjirapal', 'kanjirappally', 1),
(11, 'Meenachil', 1, '0482827243', 'meenachil@gmail.com', 'meenachil', 1),
(12, 'Meenachil', 1, '9745020343', 'meenachil@gmail.com', 'meenachil', 1),
(13, 'kanjirappally', 5, '9745020343', 'admin321@gmail.com', 'meenachil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `addvacancy`
--

CREATE TABLE `addvacancy` (
  `vacancyid` int(20) NOT NULL,
  `comregid` int(20) NOT NULL,
  `Positionname` varchar(20) NOT NULL,
  `Experience` varchar(20) NOT NULL,
  `Jobdescription` varchar(20) NOT NULL,
  `Joblocation` varchar(20) NOT NULL,
  `Venue` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvacancy`
--

INSERT INTO `addvacancy` (`vacancyid`, `comregid`, `Positionname`, `Experience`, `Jobdescription`, `Joblocation`, `Venue`, `Date`, `Qualification`, `Status`) VALUES
(1, 207, 'manager', '2', ' assistant manager', 'trivandrum', 'kottayam', '2019-04-12', 'MBA', 1),
(2, 215, 'Teacher', '2', 'governmentteacher', 'trivandrum', 'kottayam', '2019-04-21', 'MCA', 1),
(4, 242, 'manager', '2', ' assistant manager', 'trivandrum', 'kottayam', '2019-04-24', '', 1),
(5, 215, 'manager', '2', ' assistant manager', 'trivandrum', 'kottayam', '2019-04-24', '', 1),
(6, 215, 'manager', '2', ' assistant manager', 'trivandrum', 'kottayam', '2019-04-24', 'MBA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `Casteid` int(10) NOT NULL,
  `Religionid` int(10) NOT NULL,
  `Caste` varchar(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`Casteid`, `Religionid`, `Caste`, `Status`) VALUES
(1, 1, 'General', 1),
(2, 1, 'OBC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `companyreg`
--

CREATE TABLE `companyreg` (
  `comregid` int(10) NOT NULL,
  `Companyname` varchar(20) NOT NULL,
  `Sector` varchar(20) NOT NULL,
  `Regno` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `postid` int(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyreg`
--

INSERT INTO `companyreg` (`comregid`, `Companyname`, `Sector`, `Regno`, `Location`, `postid`, `Phone`, `status`) VALUES
(207, 'st.george', 'Non IT', '456786', 'kollam', 2, '9876789098', 1),
(215, 'wipro', 'IT', '45678', 'trivandrum', 1, '9876789097', 1),
(228, 'tcs', 'IT', '4567889', 'Ernakulam', 1, '9876789098', 0),
(246, 'kkkkkk', 'IT', '45678', 'Ernakulam', 1, '9876789098', 1),
(247, 'infosys', 'IT', '4567889', 'Ernakulam', 1, '9876789098', 1);

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
(162, 'vidhyavijayan823@gmail.com', '96567107', 2, 1),
(163, 'Ammu@gmail.com', 'Ammu', 2, 0),
(164, 'kichu@gmail.com', 'kichu', 2, 1),
(165, 'vidhyavijayan823@gmail.com', '823', 4, 1),
(166, 'veenavijayan@gmail.com', 'veena', 2, 1),
(167, 'Ajitha@gmail.com', 'Ajitha', 2, 1),
(168, 'george@gmail.com', '123', 4, 1),
(169, 'admin123@gmail.com', 'ammu', 1, 1),
(170, 'kichu@gmail.com', 'kichu', 2, 1),
(171, 'kk@gmail.com', '123', 4, 1),
(172, 'vv@gmail.com', '123', 4, 1),
(173, 'vijayan@gmail.com', 'vichu', 2, 1),
(174, 'arathy@gmail.com', '123', 2, 1),
(175, 'arathy@gmail.com', '123', 2, 1),
(176, 'abhi@gmail.com', '123', 2, 1),
(177, 'ponnu@gmail.com', '123', 2, 1),
(178, 'ponnu@gmail.com', '123', 2, 1),
(179, 'vichu@gmail.com', '123', 2, 1),
(180, 'krish@gmail.com', 'krish', 2, 1),
(181, 'krish@gmail.com', 'krish', 2, 1),
(182, 'anoop@gmail.com', 'anoop', 2, 1),
(183, 'Abasoft@gmail.com', '123', 4, 1),
(184, 'elsin@gmail.com', 'elsin', 2, 1),
(185, 'sneha@gmail.com', 'sneha', 2, 1),
(186, 'sobia@gmail.com', 'sobia', 2, 1),
(187, 'arun@gmail.com', 'arun', 2, 1),
(188, 'kiran@gmail.com', 'kiran', 2, 1),
(189, 'surya@gmail.com', 'surya', 2, 1),
(190, 'manoj@gmail.com', 'manoj123', 2, 1),
(191, 'jesni@gmail.com', 'jesni', 2, 1),
(192, 'jesni@gmail.com', 'jesni', 2, 1),
(193, 'jesni@gmail.com', 'jesni', 2, 1),
(194, 'bhaghu@gmail.com', 'bhaghu', 2, 1),
(195, 'bhaghu@gmail.com', '123', 2, 1),
(196, 'kikku@gmail.com', 'kikku', 2, 1),
(197, 'kikku@gmail.com', 'kikku', 2, 1),
(198, 'kikkku@gmail.com', '123', 2, 1),
(199, 'jesu@gmail.com', 'jesu', 2, 1),
(200, 'somu@gmail.com', 'somu', 2, 1),
(201, 'Aba@gmail.com', '123', 4, 1),
(202, 'Aba@gmail.com', '123', 4, 1),
(203, 'Aba@gmail.com', '123', 4, 1),
(204, 'tcs@gmail.com', 'tcs', 4, 1),
(205, 'maria@gmail.com', 'maria', 2, 1),
(206, 'gee@gmail.com', '123', 4, 1),
(207, 'kich@gmail.com', '123', 4, 1),
(208, 'kich@gmail.com', '123', 4, 1),
(209, 'sobia@gmail.com', 'sobia', 2, 0),
(210, 'suryas@gmail.com', 'suryas', 2, 1),
(211, 'suryak@gmail.com', 'suryak', 2, 1),
(212, 'kkkk@gmail.com', '123', 4, 1),
(213, 'kich@gmail.com', '123', 4, 1),
(214, 'tcs@gmail.com', 'tcs', 4, 0),
(215, 'wipro@gmail.com', 'wipro', 4, 0),
(216, 'Anusree@gmail.com', 'Anusree', 2, 1),
(217, 'exchange@gmail.com', 'exchange', 3, 1),
(218, 'mahesh@gmail.com', 'mahesh', 2, 1),
(219, 'aryav@gmail.com', 'aryav', 2, 0),
(220, 'archana@gmail.com', 'Archana123@', 2, 1),
(221, 'Deepak@gmail.com', 'Deepak', 2, 1),
(222, 'ssss@gmail.com', '123', 4, 1),
(223, '', '123', 4, 1),
(224, 'nss@gmail.com', 'nss', 4, 1),
(225, 'exchange@gmail.com', 'kk', 4, 1),
(226, 'tcss@gmail.com', 'tcs', 4, 1),
(227, 'tcss@gmail.com', 'tcss', 4, 0),
(228, 'tcsss@gmail.com', 'tcs', 4, 1),
(229, 'vishnu@gmail.com', 'vishnu', 2, 1),
(230, 'Ratheesh@gmail.com', 'Ratheesh', 2, 1),
(231, 'vichu@gmail.com', 'vichu', 2, 1),
(232, 'soman@gmail.com', 'soman', 2, 1),
(233, 'elsi@gmail.com', 'elsi', 2, 1),
(234, 'deepu@gmail.com', 'deepu', 2, 1),
(235, 'aji123@gmail.com', 'aji', 2, 1),
(236, 'suja@gmail.com', 'suja', 2, 1),
(237, 'kavi@gmail.com', 'kavi', 2, 1),
(238, 'ra@gmail.com', 'ratha', 2, 1),
(239, 'kjkj@gmail.com', 'kj', 2, 1),
(240, 'ganga@gmail.com', 'ganga', 2, 1),
(241, 'sadhu@gmail.com', 'sadhu', 2, 1),
(242, 'keerthu@gmail.com', 'keerthu', 2, 1),
(243, 'sony@gmail.com', 'sony', 2, 1),
(244, 'keerthana123@gmail.com', 'keerthana', 2, 1),
(245, 'farhana123@gmail.com', 'farhana', 2, 1),
(246, 'lmno@gmail.com', 'lmno', 4, 1),
(247, 'infosys@gmail.com', '123', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(10) NOT NULL,
  `Userid` int(10) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `Userid`, `Experience`, `Date`, `Status`) VALUES
(1, 215, '2', '2019-04-23', 1),
(2, 215, '2', '2019-04-17', 1),
(3, 0, '2', '2019-04-23', 1),
(4, 0, '2', '2019-04-17', 1);

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
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `Religionid` int(20) NOT NULL,
  `Religionname` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`Religionid`, `Religionname`, `Status`) VALUES
(1, 'Hindu', 1),
(2, 'Christian', 1);

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
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `courseid` int(20) NOT NULL,
  `couid` int(20) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseid`, `couid`, `coursename`, `status`) VALUES
(3, 1, 'MBA', 1),
(4, 2, 'MCA', 1),
(5, 3, 'MCOM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `couid` int(20) NOT NULL,
  `couname` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`couid`, `couname`, `status`) VALUES
(1, 'PG', 1),
(2, 'UG', 1),
(3, 'DIPLOMA', 1),
(4, '10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_institution`
--

CREATE TABLE `tbl_institution` (
  `instid` int(20) NOT NULL,
  `uniid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_institution`
--

INSERT INTO `tbl_institution` (`instid`, `uniid`, `name`, `status`) VALUES
(1, '1', 'AMALJYOTHI', 1),
(2, '2', 'ST.JOSEPH', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notify_id` int(20) NOT NULL,
  `not_from` varchar(20) NOT NULL,
  `not_to` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Description` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`notify_id`, `not_from`, `not_to`, `Title`, `Description`, `Date`, `Status`) VALUES
(1, '', '242', 'Jobfest', 'hjkldlscdgsch', '2019-04-23', 0),
(2, '', '242', 'fghhgbnhj', 'tytfdhdf', '2019-04-20', 1),
(3, '', '', 'job', 'sedrftgyhjikolkjhgf', '2019-04-24', 1),
(4, '', '', 'job', 'ghjkl', '2019-04-24', 1),
(5, '', '', 'Jobfest', 'ghjghjhjhjhgjfnbjkfn', '2019-04-24', 1),
(6, '', '', 'Jobfest', 'ghjghjhjhjhgjfnbjkfn', '2019-04-11', 1);

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
-- Table structure for table `tbl_qualification`
--

CREATE TABLE `tbl_qualification` (
  `qualiid` int(20) NOT NULL,
  `Userid` int(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `institution` varchar(20) NOT NULL,
  `percentage` varchar(20) NOT NULL,
  `certificate` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`qualiid`, `Userid`, `course`, `institution`, `percentage`, `certificate`, `status`) VALUES
(1, 0, '3', '1', '78', '95367.jpg', 1),
(2, 0, '-1', '-1', '', '', 1),
(3, 0, '3', '1', '87', '95367.jpg', 1),
(4, 0, '3', '1', '67', '95367.jpg', 1),
(5, 0, '3', '1', '78', '', 1),
(6, 0, '3', '1', '                    ', '', 1),
(7, 0, '-1', '-1', '', '', 1),
(8, 0, '-1', '-1', '', '', 1),
(9, 0, '3', '1', '78', 'brain-gate-2-638.jpg', 1),
(10, 0, '3', '1', '90', 'brain-gate-2-638.jpg', 1),
(11, 0, '3', '1', '90', 'brain-gate-2-638.jpg', 1),
(12, 0, '3', '1', '56', 'brain-gate-2-638.jpg', 1),
(13, 0, '3', '1', '89', 'brain-gate-2-638.jpg', 1),
(14, 162, '3', '1', '78', 'admin121.png', 1),
(15, 220, '3', '1', '90', 'brain-gate-2-638.jpg', 1),
(16, 242, '3', '1', '90', '', 1),
(17, 245, '3', '1', '', 'admin121.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shortlist`
--

CREATE TABLE `tbl_shortlist` (
  `short_id` int(10) NOT NULL,
  `Userid` int(10) NOT NULL,
  `vacancyid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shortlist`
--

INSERT INTO `tbl_shortlist` (`short_id`, `Userid`, `vacancyid`) VALUES
(1, 242, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_university`
--

CREATE TABLE `tbl_university` (
  `uniid` int(20) NOT NULL,
  `university` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_university`
--

INSERT INTO `tbl_university` (`uniid`, `university`, `status`) VALUES
(1, 'KTU UNIVERSITY', 1),
(2, 'MG UNIVERSITY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sector`
--

CREATE TABLE `tb_sector` (
  `sector_id` int(10) NOT NULL,
  `sector` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `Userid` int(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Dob` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Photo` varchar(10) NOT NULL,
  `Phoneno` varchar(10) NOT NULL,
  `Place` varchar(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `Housename` varchar(10) NOT NULL,
  `Accno` varchar(10) NOT NULL,
  `Regdate` varchar(10) NOT NULL,
  `Caste` int(10) NOT NULL,
  `IDProof` varchar(10) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`Userid`, `Name`, `Dob`, `Gender`, `Photo`, `Phoneno`, `Place`, `postid`, `Housename`, `Accno`, `Regdate`, `Caste`, `IDProof`, `Status`) VALUES
(1, 'Deepak Ps', '1999-12-17', 'Male', 'photo/1555', '7593015484', 'mundakayam', 1, 'puthuparam', '76567', '2019-04-20', 1, '', 1),
(179, 'vidhya vij', '1999-12-10', 'Female', 'photo/1555', '7593015484', 'mundakayam', 1, 'puthuparam', '76567', '2019-04-20', 179, '', 1),
(221, 'Deepak Ps', '1999-12-09', 'Male', 'photo/1555', '8606139113', 'pala', 1, 'puthucheri', '96979', '1999-12-15', 221, 'fguihojpk', 1),
(229, 'vishnu pra', '1999-12-10', 'Male', 'photo/1555', '9745020343', 'mundakayam', 1, 'puthuparam', '76567', '2019-04-20', 229, '', 1),
(230, 'Ratheesh', '1999-12-10', 'Male', 'photo/1555', '9867897645', 'mundakayam', 1, 'puthuparam', '96979', '2019-04-20', 230, '', 1),
(232, 'Soman cm', '1999-12-17', 'Male', 'photo/1555', '7593015484', 'mundakayam', 1, 'puthuparam', '96979', '2019-04-20', 232, '', 1),
(233, 'elsin', '1999-12-18', 'Female', 'photo/1555', '9745020234', 'mundakayam', 1, 'puthuparam', '76567', '2019-04-20', 233, '', 1),
(237, 'kavitha', '1999-12-25', 'Female', 'photo/1555', '9745020234', 'mundakayam', 1, 'puthuparam', '76567', '2019-04-20', 1, '', 1),
(238, 'ratha', '1999-12-18', 'Female', 'photo/1555', '7593015484', 'mundakayam', 1, 'puthuparam', '76567', '2019-04-20', 1, '', 1),
(239, 'cfgvhujiko', '1999-12-25', 'Female', 'photo/1555', '9745020234', 'mundakayam', 1, 'drtfyguhij', '76567', '2019-04-20', 1, '', 1),
(240, 'ganga', '1999-12-17', 'Female', 'photo/1555', '7593015484', 'mundakayam', 1, 'puthuparam', '6767656454', '2019-04-20', 1, '', 1),
(243, 'sony', '1999-12-17', 'Male', 'photo/1555', '7593015484', 'mundakayam', 1, 'puthuparam', '6767656454', '2019-04-23', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrregistration`
--

CREATE TABLE `userrregistration` (
  `Userid` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Photo` varchar(191) NOT NULL,
  `Phoneno` varchar(20) NOT NULL,
  `Place` varchar(20) NOT NULL,
  `Housename` varchar(20) NOT NULL,
  `Accno` varchar(20) NOT NULL,
  `Regdate` varchar(20) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrregistration`
--

INSERT INTO `userrregistration` (`Userid`, `Name`, `DOB`, `Gender`, `Photo`, `Phoneno`, `Place`, `Housename`, `Accno`, `Regdate`, `Status`) VALUES
(205, 'Maria b', '1994-03-22', 'Female', 'photo/1553820786images.jpg', '9876543490', 'Mundakayam', 'Puthuparambil', '678459045', '2019-04-14', 1),
(210, 'Surya S', '1999-12-17', 'Female', 'photo/1553851798images.jpg', '9745020343', 'vayanad', 'mullapoompodikal', '780945623', '2019-04-9', 1),
(219, 'Arya V Nair', '1999-12-15', 'Female', 'photo/1554954608images1.jpg', '9867897645', 'pallikathode', 'choondilamattom', '908734', '2019-03-14', 1),
(242, 'keetfgtggg', '2001-12-12', 'Female', 'photo/1556358412', '9874521', 'mundakayam', 'puthuparambil', '6767656454', '2019-04-20', 1),
(244, 'keerthana', '1999-12-17', 'Female', 'photo/1556359026index1.jpg', '97450202343', 'mundakayam', 'puthuparambil', '6767656450', '2019-04-10', 1),
(245, 'farhana', '1999-12-16', 'Female', '1556364265admin121.png', '9745', 'mundakayam', 'puthuparambil', '6767656450', '2019-04-27', 1);

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
(3, 'Exchange', 1),
(4, 'company', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addexchange`
--
ALTER TABLE `addexchange`
  ADD PRIMARY KEY (`Addexid`);

--
-- Indexes for table `addvacancy`
--
ALTER TABLE `addvacancy`
  ADD PRIMARY KEY (`vacancyid`);

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`Casteid`);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

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
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`Religionid`);

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
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`couid`);

--
-- Indexes for table `tbl_institution`
--
ALTER TABLE `tbl_institution`
  ADD PRIMARY KEY (`instid`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notify_id`);

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
-- Indexes for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  ADD PRIMARY KEY (`qualiid`);

--
-- Indexes for table `tbl_shortlist`
--
ALTER TABLE `tbl_shortlist`
  ADD PRIMARY KEY (`short_id`);

--
-- Indexes for table `tbl_university`
--
ALTER TABLE `tbl_university`
  ADD PRIMARY KEY (`uniid`);

--
-- Indexes for table `tb_sector`
--
ALTER TABLE `tb_sector`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`Userid`);

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
-- AUTO_INCREMENT for table `addexchange`
--
ALTER TABLE `addexchange`
  MODIFY `Addexid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addvacancy`
--
ALTER TABLE `addvacancy`
  MODIFY `vacancyid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `Casteid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companyreg`
--
ALTER TABLE `companyreg`
  MODIFY `comregid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postoffice`
--
ALTER TABLE `postoffice`
  MODIFY `postid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `Religionid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `courseid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `couid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_institution`
--
ALTER TABLE `tbl_institution`
  MODIFY `instid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notify_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `tbl_qualification`
--
ALTER TABLE `tbl_qualification`
  MODIFY `qualiid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_shortlist`
--
ALTER TABLE `tbl_shortlist`
  MODIFY `short_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_university`
--
ALTER TABLE `tbl_university`
  MODIFY `uniid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sector`
--
ALTER TABLE `tb_sector`
  MODIFY `sector_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `Userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `userrregistration`
--
ALTER TABLE `userrregistration`
  MODIFY `Userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

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

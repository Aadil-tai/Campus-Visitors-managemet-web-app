-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 08:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puvmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` int(11) NOT NULL,
  `qrUsername` varchar(250) NOT NULL,
  `qrContent` varchar(250) NOT NULL,
  `qrImg` varchar(250) NOT NULL,
  `qrlink` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `qrUsername`, `qrContent`, `qrImg`, `qrlink`) VALUES
(42, 'aadil', 'aadil', 'qr19859.png', 'localhost/qrcodeqr19859.png'),
(43, 'aadil', 'rahil', 'qr1970.png', 'localhost/qrcodeqr1970.png'),
(44, 'aadil', 'aadil', 'qr23192.png', 'localhost/qrcodeqr23192.png'),
(45, 'aadil', 'sahil rao', 'qr9235.png', 'localhost/qrcodeqr9235.png'),
(46, 'aadil', 'ramesh ', 'qr3098.png', 'localhost/qrcodeqr3098.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbladminn`
--

CREATE TABLE `tbladminn` (
  `ID` int(5) NOT NULL,
  `aname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `apass` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladminn`
--

INSERT INTO `tbladminn` (`ID`, `aname`, `apass`) VALUES
(1, 'aadil', 'sahil');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(5) NOT NULL,
  `uname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `upass` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `uname`, `upass`) VALUES
(1, 'sahil', 'a9cbad4a8bf63bcdf7b15c0036433e38');

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitor`
--

CREATE TABLE `tblvisitor` (
  `ID` int(5) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `WhomtoMeet` varchar(120) DEFAULT NULL,
  `Deptartment` varchar(120) DEFAULT NULL,
  `ReasontoMeet` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `department_visit_Remark` varchar(255) DEFAULT NULL,
  `dvtime` varchar(30) DEFAULT NULL,
  `department_Outing_Remark` varchar(255) DEFAULT NULL,
  `dotime` varchar(30) DEFAULT NULL,
  `Campus_Outing_Remark` varchar(255) DEFAULT NULL,
  `outtime` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Email`, `MobileNumber`, `Address`, `WhomtoMeet`, `Deptartment`, `ReasontoMeet`, `EnterDate`, `department_visit_Remark`, `dvtime`, `department_Outing_Remark`, `dotime`, `Campus_Outing_Remark`, `outtime`) VALUES
(23, 'aadil', 'aadiltai3884@gmail.com', 9878344343, 'awdfasdf', 'sahil', 'bca', 'sdfsf', '2020-04-15 09:27:42', 'visit remark done', '15-04-2020 03:08:13', 'exit from department', '15-04-2020 03:10:20', 'exit\r\n', '15-04-2020 03:12:04'),
(24, 'sahil rao', 'sahilrao@gmail.com', 1234567890, 'hariyana', 'sahilll', 'bca', 'ese hiiiii', '2020-04-16 10:31:26', 'visit done at bca departmnt', '16-04-2020 04:09:37', 'exit from department', '16-04-2020 04:11:42', 'visit done', '16-04-2020 04:12:50'),
(25, 'ramesh ', 'ramesh@gmail.com', 9876543210, 'sfsfs', 'ssggg', 'mca', 'ese hee', '2020-04-16 15:09:55', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladminn`
--
ALTER TABLE `tbladminn`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbladminn`
--
ALTER TABLE `tbladminn`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

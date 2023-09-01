-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 05:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camp-vis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `contactno` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `contactno`, `email`, `password`, `status`) VALUES
(1, 'Admin', '1234567890', 'admin@123', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'Admin', '', 'Admin@gm.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'admin', '', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `AppointmentID` int(11) NOT NULL,
  `VisitorID` int(11) DEFAULT NULL,
  `DepartmentAuthorityID` int(11) DEFAULT NULL,
  `AppointmentDate` date DEFAULT NULL,
  `AppointmentTime` time DEFAULT NULL,
  `ReasonForVisit` varchar(255) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`AppointmentID`, `VisitorID`, `DepartmentAuthorityID`, `AppointmentDate`, `AppointmentTime`, `ReasonForVisit`, `Status`, `CreatedDate`) VALUES
(1, 1, 1, '2023-03-30', '14:00:00', 'Discuss project proposal', 'Pending', '2023-03-28 09:00:00'),
(2, 2, 2, '2023-04-05', '10:30:00', 'Career counseling', 'Confirmed', '2023-03-29 11:30:00'),
(3, 3, 3, '2023-04-02', '16:45:00', 'Admission query', 'Cancelled', '2023-03-31 14:00:00'),
(4, 4, 4, '2023-04-08', '11:15:00', 'Discuss exam schedule', 'Pending', '2023-04-01 15:30:00'),
(5, 5, 5, '2023-04-01', '15:00:00', 'Fee payment query', 'Confirmed', '2023-03-30 13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_form_data`
--

CREATE TABLE `appointments_form_data` (
  `AppointmentFormID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DateOfVisit` date NOT NULL,
  `Department` varchar(255) NOT NULL,
  `TimeSlot` time NOT NULL,
  `DeptUser` varchar(255) NOT NULL,
  `ReasonToMeet` varchar(255) NOT NULL,
  `VisitorType` varchar(20) NOT NULL,
  `Status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `campus_visit_Remark` varchar(50) NOT NULL,
  `cvtime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `departmant_visit_Remark` varchar(50) NOT NULL,
  `dvtime` char(20) NOT NULL,
  `department_Outing_Remark` varchar(50) NOT NULL,
  `dotime` varchar(20) NOT NULL,
  `Campus_Outing_Remark` varchar(20) NOT NULL,
  `outtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments_form_data`
--

INSERT INTO `appointments_form_data` (`AppointmentFormID`, `FullName`, `Email`, `ContactNumber`, `Address`, `DateOfVisit`, `Department`, `TimeSlot`, `DeptUser`, `ReasonToMeet`, `VisitorType`, `Status`, `campus_visit_Remark`, `cvtime`, `departmant_visit_Remark`, `dvtime`, `department_Outing_Remark`, `dotime`, `Campus_Outing_Remark`, `outtime`) VALUES
(17, 'test', 'test@gmail.com', '4535555555535', 'wfsdfds', '2023-03-30', 'MBA', '00:00:01', '3', 'sfgsdsdf', 'OnlineVisitor', 'rejected', 'Visit at campus', '2023-03-30 15:44:08', 'om', '30-03-2023 03:20:18', 'visited department', '30-03-2023 03:44:08', 'exit', '2023-03-30 11:33:30'),
(19, 'test', 'test@gmail.com', '134243242', 'sdfdsfsfsf', '2023-09-02', 'MBA', '00:00:01', '5', 'just', 'OnlineVisitor', 'pending', '', '2023-08-30 21:12:05', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `chatdate` datetime DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(256) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `creationDate`, `updationDate`) VALUES
(1, 'mca', '2021-09-15 15:42:57', '2021-09-15 15:42:57'),
(2, 'MBA', '2021-12-06 02:19:16', '2021-12-06 02:19:16'),
(3, 'B.TECH', '2022-10-01 06:27:12', '2022-10-01 06:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `dept_users`
--

CREATE TABLE `dept_users` (
  `id` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `dept_user_type` varchar(20) NOT NULL,
  `dept_users` varchar(50) NOT NULL,
  `contactno` bigint(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `working_hours_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept_users`
--

INSERT INTO `dept_users` (`id`, `departmentid`, `department`, `dept_user_type`, `dept_users`, `contactno`, `Email`, `password`, `status`, `working_hours_id`, `active`) VALUES
(1, 1, 'testdean', 'dean', 'deanmca', 9876543210, 'dean@mca.com', '098f6bcd4621d373cade4e832627b4f6', 1, 3, 1),
(2, 1, 'test2', 'faculty', 'test2', 9876543211, 'test2@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 1, 1, 1),
(3, 1, 'test', 'faculty', 'test', 9876543212, 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 1, 2, 1),
(4, 2, 'MBA', 'dean', 'admin', 9876543210, 'dean@mba.com', 'password123', 1, 3, 1),
(5, 2, 'MBA', 'faculty', 'facultymba', 9876543211, 'faculty1@mba.com', 'password123', 1, 1, 1),
(6, 2, 'MBA', 'faculty', 'faculty2mba', 9876543212, 'faculty2@mba.com', 'password123', 1, 2, 1),
(7, 3, 'B.TECH', 'dean', 'deanbetech', 9876543210, 'dean@btech.com', 'password123', 1, 3, 1),
(8, 3, 'B.TECH', 'faculty', 'faculty1btech', 9876543211, 'faculty1@btech.com', 'password123', 1, 1, 1),
(9, 3, 'B.TECH', 'faculty', 'faculty2btech', 9876543212, 'faculty2@btech.com', 'password123', 1, 2, 1),
(10, 5, 'M.tech', 'dean', 'deanmtech', 9876543210, 'dean@mtech.com', 'password123', 1, 3, 1),
(11, 5, 'M.tech', 'faculty', 'faculty1mtech', 9876543211, 'faculty1@mtech.com', 'password123', 1, 1, 1),
(12, 5, 'M.tech', 'faculty', 'faculty2metech', 9876543212, 'faculty2@mtech.com', 'password123', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `reciver`, `title`, `feedbackdata`, `attachment`) VALUES
(1, 'demo@gmail.com', 'Admin', 'hii', 'sirrrr', ' '),
(2, 'Admin', 'demo@gmail.com', '', 'hey demo bro', ''),
(3, 'Admin', 'demo@gmail.com', '', 'om  ro', ''),
(4, 'aadiltai3884@gmail.com', 'Admin', 'aa', 'aa', 'download.jpeg'),
(5, 'aadiltai3884@gmail.com', 'Admin', 'aa', 'aa', 'download.jpeg'),
(6, 'aadiltai3884@gmail.com', 'Admin', 'r', 'r', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(3) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `v_facility` varchar(10) NOT NULL,
  `u_campus` varchar(10) NOT NULL,
  `g_name` varchar(30) NOT NULL,
  `g_behaviour` varchar(10) NOT NULL,
  `h_name` varchar(30) NOT NULL,
  `d_facility` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `v_facility`, `u_campus`, `g_name`, `g_behaviour`, `h_name`, `d_facility`) VALUES
(8, 'sfews', 'dfd@dens.c', 'good', 'avera', 'fed dvd vdd', 'bad', '', 'avera'),
(9, 'sdsd', 'dds@sds.co', 'bad', 'bad', 'sad', 'bad', 'dsdsd', 'bad'),
(10, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(1, 'aadiltai3884@gmail.com', 'Admin', 'Create Account', '2022-09-01 23:19:56'),
(2, 'aadiltai3884@gmail.com', 'Admin', 'Send message', '2022-10-02 07:30:38'),
(3, 'aadiltai3884@gmail.com', 'Admin', 'Send message', '2022-10-02 08:57:25'),
(4, 'aadiltai3884@gmail.com', 'Admin', 'Send message', '2022-10-02 09:02:35');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `qrUsername`, `qrContent`, `qrImg`, `qrlink`) VALUES
(42, 'aadil', 'aadil', 'qr19859.png', 'localhost/qrcodeqr19859.png'),
(43, 'aadil', 'rahil', 'qr1970.png', 'localhost/qrcodeqr1970.png'),
(44, 'aadil', 'aadil', 'qr23192.png', 'localhost/qrcodeqr23192.png'),
(45, 'aadil', 'sahil rao', 'qr9235.png', 'localhost/qrcodeqr9235.png'),
(46, 'aadil', 'ramesh ', 'qr3098.png', 'localhost/qrcodeqr3098.png'),
(0, 'aadil', 'name is=\',\r\n	  \r\n	  deartment=,\r\n	  \r\n	  \r\n	  whome to meet=\' \r\n	  \r\n	  reason to meet=\'', 'qr.png', 'localhost/qrcodeqr.png');

-- --------------------------------------------------------

--
-- Table structure for table `security_guards`
--

CREATE TABLE `security_guards` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `shift_start_time` time NOT NULL,
  `shift_end_time` time NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security_guards`
--

INSERT INTO `security_guards` (`id`, `name`, `contactno`, `email`, `password`, `status`, `shift_start_time`, `shift_end_time`, `is_active`) VALUES
(0, 'test23', '123123123', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', '', '00:00:00', '00:00:00', 0),
(1, 'test', '1234567890', 'sa1@gm.com', '098f6bcd4621d373cade4e832627b4f6', '1', '08:00:00', '10:00:00', 1),
(2, 'security_authority2', '1234567890', 'sa2@gm.com', '098f6bcd4621d373cade4e832627b4f6', '1', '10:00:00', '12:00:00', 1),
(3, 'security_authority3', '1234567890', 'sa3@gm.com', '098f6bcd4621d373cade4e832627b4f6', '1', '12:00:00', '02:00:00', 1),
(4, 'security_authority4', '1234567890', 'sa4@gm.com', '098f6bcd4621d373cade4e832627b4f6', '1', '02:00:00', '05:00:00', 1);

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
  `Deptartment` varchar(120) DEFAULT NULL,
  `WhomtoMeet` varchar(120) DEFAULT NULL,
  `ReasontoMeet` varchar(120) DEFAULT NULL,
  `EnterDate` timestamp NULL DEFAULT current_timestamp(),
  `department_visit_Remark` varchar(255) DEFAULT NULL,
  `dvtime` varchar(30) DEFAULT NULL,
  `department_Outing_Remark` varchar(255) DEFAULT NULL,
  `dotime` varchar(30) DEFAULT NULL,
  `Campus_Outing_Remark` varchar(255) DEFAULT NULL,
  `outtime` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblvisitor`
--

INSERT INTO `tblvisitor` (`ID`, `FullName`, `Email`, `MobileNumber`, `Address`, `Deptartment`, `WhomtoMeet`, `ReasontoMeet`, `EnterDate`, `department_visit_Remark`, `dvtime`, `department_Outing_Remark`, `dotime`, `Campus_Outing_Remark`, `outtime`) VALUES
(23, 'aadil', 'aadiltai3884@gmail.com', 9878344343, 'awdfasdf', 'bca', 'sahil', 'sdfsf', '2020-04-15 03:57:42', 'ok', '30-03-2023 02:34:01', 'okkkk', '30-03-2023 02:44:45', 'exit\r\n', '15-04-2020 03:12:04'),
(24, 'sahil rao', 'sahilrao@gmail.com', 1234567890, 'hariyana', 'bca', 'sahilll', 'ese hiiiii', '2020-04-16 05:01:26', 'visit done at bca departmnt', '16-04-2020 04:09:37', 'exit from department', '16-04-2020 04:11:42', 'visit done', '16-04-2020 04:12:50'),
(26, 'Aadil Tai', 'aadiltai3884@gmail.com', 1234567890, 'Jskak\r\nHsjsk', 'mca', '', 'evve hee', '2022-09-30 19:04:12', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Aadil Tai', 'aadiltai3884@gmail.com', 4353674563, 'Jskak\r\nHsjsk', 'MBA', '', 'ese heee', '2022-09-30 19:15:03', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`) VALUES
(1, 'aadiltai', 'aadil', 'aadiltai3884@gmail.com', 'Male', 'Active', 'a9cbad4a8bf63bcdf7b15c0036433e38', '2022-09-26 10:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VisitorID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CreatedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VisitorID`, `Name`, `PhoneNumber`, `Email`, `Address`, `Password`, `CreatedDate`) VALUES
(1, 'test', '1234567890', 'test@gmail.com', '', 'test', '2023-03-01'),
(2, 'Jane Smith', '9876543210', 'janesmith@example.com', '', 'password2', '2023-03-01'),
(3, 'Bob Johnson', '5555555555', 'bobjohnson@example.com', '', 'password3', '2023-01-01'),
(4, 'Sarah Lee', '1111111111', 'sarahlee@example.com', '', 'password4', '2023-01-01'),
(5, 'Tom Wilson', '9999999999', 'tomwilson@example.com', '', 'password5', '2023-01-01'),
(11, 'sdfsf', '23424234', 'sdfsf@gmail.com', '', '$2y$10$jwgEl/Kx77Fng4fg8lWYHuS2lKH3VZ9gZc.S9DbhStd5NrzDU3oTK', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitorsfeedback`
--

CREATE TABLE `visitorsfeedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitorsfeedback`
--

INSERT INTO `visitorsfeedback` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'aadil', 'aadiltai3884@gmail.com', 'helo', 'asdfsfdsfs', '2023-03-28 17:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `working_hours`
--

INSERT INTO `working_hours` (`id`, `start_time`, `end_time`) VALUES
(1, '09:30:00', '10:30:00'),
(2, '10:30:00', '11:30:00'),
(3, '12:30:00', '14:30:00'),
(4, '14:30:00', '15:30:00'),
(5, '15:30:00', '16:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`AppointmentID`),
  ADD KEY `VisitorID` (`VisitorID`),
  ADD KEY `DepartmentAuthorityID` (`DepartmentAuthorityID`);

--
-- Indexes for table `appointments_form_data`
--
ALTER TABLE `appointments_form_data`
  ADD PRIMARY KEY (`AppointmentFormID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_users`
--
ALTER TABLE `dept_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departmentid` (`departmentid`),
  ADD KEY `dept_users_working_hours_fk` (`working_hours_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_guards`
--
ALTER TABLE `security_guards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`VisitorID`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexes for table `visitorsfeedback`
--
ALTER TABLE `visitorsfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments_form_data`
--
ALTER TABLE `appointments_form_data`
  MODIFY `AppointmentFormID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dept_users`
--
ALTER TABLE `dept_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblvisitor`
--
ALTER TABLE `tblvisitor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitorsfeedback`
--
ALTER TABLE `visitorsfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`VisitorID`) REFERENCES `visitors` (`VisitorID`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`DepartmentAuthorityID`) REFERENCES `departmentauthorities` (`DepartmentAuthorityID`);

--
-- Constraints for table `dept_users`
--
ALTER TABLE `dept_users`
  ADD CONSTRAINT `dept_users_ibfk_1` FOREIGN KEY (`departmentid`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `dept_users_working_hours_fk` FOREIGN KEY (`working_hours_id`) REFERENCES `working_hours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 02:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sedjbpkn_aadil`
--

-- --------------------------------------------------------

--
-- Table structure for table `vs_reg`
--

CREATE TABLE `vs_reg` (
  `v_id` int(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `vkey` varchar(50) NOT NULL,
  `varified` tinyint(1) NOT NULL DEFAULT 0,
  `createdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vs_reg`
--

INSERT INTO `vs_reg`(`v_id`, `gender`, `user_name`, `first_name`, `last_name`, `mail`, `phone`, `address`, `password`, `vkey`, `varified`, `createdate`) VALUES
(1, 'female', '@losddf', 'aaa', 'laa', 'loffer@gmail.com', '98794066871', 'asdf', '$2y$10$B05ZDNkvyjzd5kcgcj8BtuBA9mPdK2f5KtF8QU7rfrbas3biqfRgS', '', 0, '2021-01-02 13:18:14.629037'),
(2, 'female', '@aaesya', 'aadi', 'tai', 'rahil123@gmail.com', '98765432101', 'asdf', '$2y$10$pfRiYLQhr0UGIpE3l2lNn.oBKeEqcXiCBExcb6ah8lsaiMXjV3jva', '6ae0943d5fe49324863a4aa4e05c47bb', 0, '2021-01-02 13:31:07.695361');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vs_reg`
--
ALTER TABLE `vs_reg`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `user_name_2` (`user_name`,`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vs_reg`
--
ALTER TABLE `vs_reg`
  MODIFY `v_id`int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 12:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmpdi`
--
CREATE DATABASE IF NOT EXISTS `cmpdi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cmpdi`;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE `designation` (
  `designation_id` int(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation`, `role`) VALUES
(1, 'HOD', 'HEAD OF DEPARTMENT'),
(2, 'GM', 'GENERAL MANAGER'),
(3, 'CM', 'CHIEF MANAGER'),
(4, 'SM', 'SENIOR MANAGER'),
(5, 'M', 'MANAGER'),
(6, 'DM', 'DEPUTY MANAGER'),
(7, 'AM', 'ASSISTANT MANAGER'),
(8, 'MT', 'MANAGEMENT TRAINEE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `emp_id` int(16) NOT NULL,
  `login_id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `designation_id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob_no` int(14) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp(),
  `update_date` date NOT NULL DEFAULT current_timestamp(),
  `last_login_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `login_id`, `emp_name`, `designation`, `designation_id`, `email`, `mob_no`, `create_date`, `update_date`, `last_login_date`) VALUES
(1, 0, 'sakshi', 'hod', 0, 'sakshiswati33@gmail.', 987654321, '2022-06-10', '2022-06-10', '2022-06-10 10:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `login_id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `mob_no` int(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `emp_name`, `mob_no`, `email`, `password`, `register_date`) VALUES
(1, 'sakshi swati', 987654321, 'sakshiswati33@gmail.com', '12345', '2022-06-10 10:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portal_admin`
--

DROP TABLE IF EXISTS `tbl_portal_admin`;
CREATE TABLE `tbl_portal_admin` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_portal_admin`
--

INSERT INTO `tbl_portal_admin` (`userid`, `password`, `status`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `employee_ibfk_2` (`designation_id`),
  ADD KEY `employee_ibfk_1` (`login_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_portal_admin`
--
ALTER TABLE `tbl_portal_admin`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

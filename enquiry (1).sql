-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 10:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_master`
--

CREATE TABLE IF NOT EXISTS `enquiry_master` (
`sl_no` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mob_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `category` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ebox` varchar(200) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL,
  `u_date_time` datetime NOT NULL,
  `uid` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_master`
--

INSERT INTO `enquiry_master` (`sl_no`, `name`, `fname`, `mob_no`, `email`, `gender`, `category`, `state`, `course`, `address`, `ebox`, `dob`, `date_time`, `u_date_time`, `uid`, `status`, `reply`) VALUES
(1, 'Deepak Kumar ', ' Naaz ', 9576934105, ' ', '', '', 'Bihar', 'Job Service', 'Kankarbag patna ', 'job searching', '1998-02-09', '2019-01-17 14:21:52', '2019-01-17 14:25:00', 'P01190001', 1, 'i will call you.'),
(2, 'Rahul Kumar', '', 9523600813, '', '', '', 'Bihar', 'Job Service', 'Mithapur Patna', 'job searching', '2000-01-14', '2019-01-17 14:23:41', '0000-00-00 00:00:00', 'P01190002', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE IF NOT EXISTS `login_master` (
`sl_no` int(5) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `status` int(3) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`sl_no`, `uname`, `pwd`, `status`, `user_type`) VALUES
(4, 'manager', '1111', 1, 'mgr'),
(5, 'rahul', '111', 1, 'admin'),
(7, 'sandy', '000', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry_master`
--
ALTER TABLE `enquiry_master`
 ADD PRIMARY KEY (`sl_no`), ADD UNIQUE KEY `sl_no` (`sl_no`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
 ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry_master`
--
ALTER TABLE `enquiry_master`
MODIFY `sl_no` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_master`
--
ALTER TABLE `login_master`
MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

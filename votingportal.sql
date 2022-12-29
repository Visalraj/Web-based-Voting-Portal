-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 11:40 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_46`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidatetable`
--

CREATE TABLE IF NOT EXISTS `candidatetable` (
  `cid` int(11) NOT NULL,
  `cname` varchar(60) DEFAULT NULL,
  `cage` int(11) DEFAULT NULL,
  `cparty` varchar(60) DEFAULT NULL,
  `votecount` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatetable`
--

INSERT INTO `candidatetable` (`cid`, `cname`, `cage`, `cparty`, `votecount`, `email`) VALUES
(0, '', 0, '', 1, ''),
(10001, 'Bruce Wayne', 50, 'INC', 2, 'Bruce@gmail.com'),
(78965, 'Steve', 33, 'CPI', 0, 'Steve@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `votertable`
--

CREATE TABLE IF NOT EXISTS `votertable` (
  `voterid` varchar(60) NOT NULL,
  `votername` varchar(60) DEFAULT NULL,
  `voterage` int(11) DEFAULT NULL,
  `voteraadhar` varchar(60) DEFAULT NULL,
  `votermobile` varchar(60) DEFAULT NULL,
  `voterward` varchar(60) DEFAULT NULL,
  `voterbooth` varchar(60) DEFAULT NULL,
  `sov` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votertable`
--

INSERT INTO `votertable` (`voterid`, `votername`, `voterage`, `voteraadhar`, `votermobile`, `voterward`, `voterbooth`, `sov`, `email`) VALUES
('1234567', 'Henry Cavil', 45, '633379038593', '9787546821', '2', '1', 0, 'Henry@gmail.com'),
('9876543', 'Gal', 44, '123456789012', '8884445553', '1', '1', 1, 'Gal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatetable`
--
ALTER TABLE `candidatetable`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `votertable`
--
ALTER TABLE `votertable`
 ADD PRIMARY KEY (`voterid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

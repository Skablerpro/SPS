-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 04:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sps`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `PID` int(11) NOT NULL,
  `stNo` varchar(50) NOT NULL,
  `PBrand` varchar(50) NOT NULL,
  `PName` varchar(50) NOT NULL,
  `PModel` varchar(50) NOT NULL,
  `PSerial` varchar(100) NOT NULL,
  `PColor` varchar(50) NOT NULL,
  `PType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`PID`, `stNo`, `PBrand`, `PName`, `PModel`, `PSerial`, `PColor`, `PType`) VALUES
(2, '201419975', 'huawei', 'cellphone', 'P20-lite', 'OSnjfaifw098', 'black', 'Mobile'),
(3, '201625486', 'acer', 'laptop', '56', '212344n32', 'blue', 'Mobile'),
(5, '201625486', 'huawei', 'laptop', 'jgju7', 'huigi7t86rt8r5', 'silver', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `userinfotable`
--

CREATE TABLE `userinfotable` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `stNo` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `DoB` date NOT NULL,
  `password` varchar(30) NOT NULL,
  `Address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotable`
--

INSERT INTO `userinfotable` (`id`, `username`, `FName`, `Lname`, `Gender`, `qualification`, `stNo`, `Email`, `cell`, `DoB`, `password`, `Address`) VALUES
(2, 'SKP', 'Kabelo Ronald', 'Mokati', 'Male', 'BSc', '201419975', '201419975@keyaka.ul.ac.za', '0768471519', '1995-06-22', '123', 'stand No. 715, Unit E, Mankweng'),
(4, 'kgabo', 'kgabo', 'manala', 'male', 'BSc', '201625486', 'kgabomanala@gmail.com', '0798649712', '1997-09-22', 'manala', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `userinfotable`
--
ALTER TABLE `userinfotable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userinfotable`
--
ALTER TABLE `userinfotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

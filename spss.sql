-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 02:43 PM
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
-- Database: `spss`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `PID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PBrand` varchar(50) NOT NULL,
  `PName` varchar(50) NOT NULL,
  `PModel` varchar(50) NOT NULL,
  `PSerial` varchar(100) NOT NULL,
  `PColor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotable`
--

INSERT INTO `userinfotable` (`id`, `username`, `FName`, `Lname`, `Gender`, `qualification`, `stNo`, `Email`, `cell`, `DoB`, `password`) VALUES
(2, 'SKP', 'Kabelo Ronald', 'Mokati', '', 'BSc', '201419975', '201419975@keyaka.ul.ac.za', '0768471519', '0000-00-00', '123');

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
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfotable`
--
ALTER TABLE `userinfotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2020 at 03:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hunarmand`
--

-- --------------------------------------------------------

--
-- Table structure for table `workerregistration`
--

CREATE TABLE `workerregistration` (
  `workerID` int(4) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `workCategory` varchar(10) NOT NULL,
  `addresss` varchar(60) NOT NULL,
  `userName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerregistration`
--

INSERT INTO `workerregistration` (`workerID`, `fullName`, `phoneNum`, `email`, `password`, `CNIC`, `userType`, `workCategory`, `addresss`, `userName`) VALUES
(11, 'ali khan', '8398594', 'ali@gmail.com', '989394', '6437483', 'Worker', 'Painter', 'hsdisjmmk', ''),
(13, 'haider', '93092032', '', '849304', '829932', 'Buyer', 'Select', 'iwoeow', ''),
(14, 'dania', '939493', '', '89493', '8493294', 'Worker', 'House Clea', '8bsnmcsmjcs', ''),
(18, 'javaid', '3728832', '', 'hukidew', '7823982', 'Worker', 'Carpenter', '8jdsb dsd', ''),
(19, 'maira', '3984939', 'maira@gmail.com', '7r8reuj', '34983948', 'Buyer', 'Select', 'i29iiew', ''),
(20, 'ahmed khan', '929392', 'ahmedkhan@gmail.com', '892932', '83994', 'Buyer', 'Select', 'dikckmdc', ''),
(21, 'asad', '74848', 'asad@gmail.com', 'nhxjskkj', '943939', 'Worker', 'Carpenter', 'jkdmcd', ''),
(22, 'faraz', '92302', 'faraz@gmail.com', 'i892392', '42201-7865432-2', 'Buyer', 'Select', 'kdkfll', ''),
(23, 'saadmakk', '9839493223', 'hjssan@gmail.com', 'iasa ', '84483-4568439-2', 'Buyer', 'Plumber', 'naskmxnzsjdj', 'saad123'),
(24, 'ayesha', '84838', 'ayesha@gmail.com', 'jsdnncn', '56432-7865127-9', 'Buyer', 'Select', 'hjsmnms', 'ayesha1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workerregistration`
--
ALTER TABLE `workerregistration`
  ADD PRIMARY KEY (`workerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workerregistration`
--
ALTER TABLE `workerregistration`
  MODIFY `workerID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

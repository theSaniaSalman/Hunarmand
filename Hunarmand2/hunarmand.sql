-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2020 at 03:48 AM
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
  `workCategory` varchar(30) NOT NULL,
  `addresss` varchar(60) NOT NULL,
  `userName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerregistration`
--

INSERT INTO `workerregistration` (`workerID`, `fullName`, `phoneNum`, `email`, `password`, `CNIC`, `userType`, `workCategory`, `addresss`, `userName`) VALUES
(21, 'asad', '74848', 'asad@gmail.com', 'nhxjskkj', '943939', 'Worker', 'Carpenter', 'jkdmcd', ''),
(22, 'faraz', '92302', 'faraz@gmail.com', 'i892392', '42201-7865432-2', 'Buyer', 'Select', 'kdkfll', ''),
(24, 'ayesha khan', '033290778', 'ayesha@gmail.com', 'jsdnncn', '56432-7865127-9', 'Buyer', 'Select', 'Gulshan', 'ayesha1'),
(25, 'user', '829392', 'user@gmail.com', 'helloworld', '61727-7838489-2', 'Buyer', 'Select', 'kjakzkam', 'user123'),
(27, 'Dawood Akbar', '28382980', 'dawood12@gmail.com', 'myname', '62728-7847638-9', 'Worker', 'Car Mechan', 'jkkkde', 'dawood'),
(28, 'usman khan', '03390964', 'usmankhan@gmail.com', 'laptop45', '78654-8945378-7', 'Worker', 'AC Technician', 'Gulistan e Jauhar, 12D', 'usman'),
(29, 'Wasim Siddiqui', '567450965', 'wasim21@gmail.com', 'machine', '62372-6748739-5', 'Buyer', 'Select', 'FB Area ', 'wasim'),
(30, 'Tahir', '299292398', 'tahir@gmail.com', 'tahirpw', '67382-7737892-5', 'Worker', 'Carpenter', 'Malir', 'tahir');

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
  MODIFY `workerID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

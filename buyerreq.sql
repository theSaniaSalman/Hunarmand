-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2020 at 05:38 PM
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
-- Table structure for table `buyerreq`
--

CREATE TABLE `buyerreq` (
  `buyername` varchar(25) DEFAULT NULL,
  `dateofwork` date DEFAULT NULL,
  `loc_` text DEFAULT NULL,
  `category` char(25) DEFAULT NULL,
  `descript` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyerreq`
--

INSERT INTO `buyerreq` (`buyername`, `dateofwork`, `loc_`, `category`, `descript`) VALUES
(NULL, '2020-08-03', 'North Nazimabad', 'Electrician', 'i need wires'),
(NULL, '2020-09-04', 'Jauhar', 'Plumber', 'Please fix my tap'),
(NULL, '2020-09-04', 'Jauhar', 'Plumber', 'Please fix my tap'),
(NULL, '2020-08-05', 'Gulshan', 'AC Technician', 'Fix my AC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerreq`
--
ALTER TABLE `buyerreq`
  ADD UNIQUE KEY `buyername` (`buyername`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

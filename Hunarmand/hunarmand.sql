-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 08:10 PM
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
  `requestId` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `buyerUserName` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `dateofwork` varchar(255) CHARACTER SET utf8 NOT NULL,
  `loc_` text NOT NULL,
  `bids` int(2) NOT NULL,
  `assignedTo` varchar(256) NOT NULL,
  `orderStartDate` date NOT NULL,
  `buyersStatus` varchar(256) NOT NULL,
  `workersStatus` varchar(256) NOT NULL,
  `orderEndDate` date NOT NULL,
  `orderStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `buyerreq`
--

INSERT INTO `buyerreq` (`requestId`, `category`, `buyerUserName`, `descript`, `dateofwork`, `loc_`, `bids`, `assignedTo`, `orderStartDate`, `buyersStatus`, `workersStatus`, `orderEndDate`, `orderStatus`) VALUES
(1, 'Electrician', '', 'meter peechey karwana hai', '2020-08-20', 'Shah Faisal', 0, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(2, 'Carpenter', 'tehniat_k', 'meray liye aik bookshelf bana do', '2020-08-21', 'Gulshan', 4, 'fizza_s', '0000-00-00', 'TRUE', 'TRUE', '2020-08-23', 'TRUE'),
(3, 'Car Mechanic', 'tehniat_k', 'carpenter chaiye kaam karwana hai', '2020-08-24', 'korangi', 0, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(4, 'Carpenter', 'tehniat_k', 'jkhkjjkh', '2020-07-26', 'korangi', 10, 'hashimk', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(5, 'Education', 'tehniat_k', 'jkbhkjhg', '2020-07-29', 'karachi', 0, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(6, 'Education', 'tehniat_k', 'jkbhkjhg', '2020-07-29', 'karachi', 0, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(7, 'Carpenter', 'tehniat_k', 'dhgcdfdc', '2020-08-05', 'karachi', 1, 'asif564', '2020-08-22', 'TRUE', '', '0000-00-00', ''),
(8, 'Carpenter', 'tehniat_k', 'kitchen ka lakri ka kaam karana hai', '2020-07-27', 'karachi', 1, 'asif564', '2020-08-23', 'TRUE', '', '0000-00-00', ''),
(9, 'Carpenter', 'ayesha1', 'mujhey apney shelf banwaney hain', '2020-08-04', 'Gulshan', 1, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(10, 'Plumber', 'ayesha1', 'I want to get the sink and muslim showers of my washroom fixed. They have been completely rusted so you will have to change them. I will provide you with the pipes and sink. ', '2020-08-20', 'karachi', 9, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(11, 'Plumber', 'ayesha1', 'Hello! I want to get my sink fixed.', '2020-08-21', 'karachi', 8, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(12, 'Plumber', 'ayesha1', 'AoA. Meray ghar ka washroom ka nal theek kardo.', '2020-08-18', 'korangi', 13, '', '0000-00-00', 'TRUE', '', '0000-00-00', ''),
(13, 'Education', 'tehniat_k', 'build my house', '2020-08-13', 'jksanmdksa', 0, '', '0000-00-00', '', '', '0000-00-00', ''),
(14, 'House Cleaning Service', 'tehniat_k', 'jsjadb ', '2020-08-14', 'Gulshan', 0, '', '0000-00-00', '', '', '0000-00-00', ''),
(15, 'Mason', 'tehniat_k', 'repair the ceiling', '2020-08-19', 'Jauhar', 0, '', '0000-00-00', '', '', '0000-00-00', ''),
(16, 'Painter', 'tehniat_k', 'paint my room', '2020-08-13', 'Gulshan', 0, '', '0000-00-00', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `from_user_id` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, '28', 'ayesha1', 'hi Usman', '2020-08-23 00:12:05', 1),
(2, '28', 'ayesha1', 'how are you doing?\n', '2020-08-23 00:12:27', 1),
(13, 'usman', 'ayesha1', 'will come to work today?', '2020-08-23 00:48:08', 0),
(14, 'usman', 'ayesha1', 'hey', '2020-08-23 00:49:30', 0),
(20, 'ayesha1', 'usman', 'did you like my work?', '2020-08-23 01:35:13', 0),
(22, 'ayesha1', 'usman', 'great!', '2020-08-23 01:36:21', 0),
(26, 'usman', 'ayesha1', 'what\'s up?', '2020-08-23 02:16:43', 0),
(29, 'ayesha1', 'usman', 'thank you', '2020-08-23 02:29:31', 0),
(30, 'wasim', 'ayesha1', 'wasim', '2020-08-23 02:32:29', 0),
(42, 'wasim', 'ayesha1', 'hello😀', '2020-08-23 03:16:15', 0),
(44, 'asif564', 'tehniat_k', 'hello😁', '2020-08-23 15:27:52', 1),
(45, 'asif564', 'tehniat_k', 'how are you?', '2020-08-23 15:28:19', 1),
(46, '25', 'fizza_s', 'hello😁', '2020-08-23 17:46:20', 1),
(47, '25', 'fizza_s', 'hi', '2020-08-23 17:46:41', 1),
(48, '25', 'fizza_s', 'hi', '2020-08-23 17:46:41', 1),
(49, '26', 'fizza_s', 'hello', '2020-08-23 17:46:50', 1),
(50, '26', 'fizza_s', 'hello', '2020-08-23 17:47:03', 1),
(51, '26', 'fizza_s', 'hello', '2020-08-23 17:47:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `workerID` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `workerID` int(11) NOT NULL DEFAULT 1,
  `userName` varchar(30) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `workerID`, `userName`, `rating`, `timestamp`) VALUES
(13, 0, '21', 4, '2020-08-21 03:23:57'),
(14, 0, '24', 5, '2020-08-21 03:24:07'),
(15, 0, '25', 5, '2020-08-21 03:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `workerbid`
--

CREATE TABLE `workerbid` (
  `requestId` int(255) NOT NULL,
  `workerUname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerbid`
--

INSERT INTO `workerbid` (`requestId`, `workerUname`) VALUES
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(4, 'asif564'),
(2, 'asif564'),
(4, 'hashimk'),
(2, 'asif564'),
(2, 'asif564'),
(8, 'asif564'),
(9, 'asif564'),
(7, 'asif564'),
(2, 'fizza_s');

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
  `userName` varchar(30) NOT NULL,
  `currentDate` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imgsrc` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerregistration`
--

INSERT INTO `workerregistration` (`workerID`, `fullName`, `phoneNum`, `email`, `password`, `CNIC`, `userType`, `workCategory`, `addresss`, `userName`, `currentDate`, `imgsrc`) VALUES
(24, 'ayesha', '84838', 'ayesha@gmail.com', 'jsdnncn', '56432-7865127-9', 'Buyer', 'Select', 'hjsmnms', 'ayesha1', '', ''),
(25, 'Tehniat Kamran', '0300-2283969', '', 'abdulwali123', '42201-9087675-0', 'Buyer', 'Select', 'karachi', 'TehniatKamran', '', ''),
(26, 'Tehniat Kamran', '0300-3022097', 'tehniat.kamran@hotmail.com', 'abdulwali123', '42201-9182736-0', 'Buyer', 'Select', 'jksjhaxasx', 'tehniat_k', '', 'profileimages/.70x70Logo.scale-80.png'),
(37, 'ayesha ajeeb', '84838', 'ayesha@gmail.com', 'jsdnncn', '56432-7865127-9', '', '', 'hjsmnms', 'ayesha1', '', ''),
(39, 'kamran ahmed', '0987-4532134', 'k@g.com', 'abdul', '42201-7612091-0', 'Buyer', 'Select', 'karachi', 'k_ahmed', '2020', ''),
(40, 'abdullah', '1235-0987654', 'a@k.com', '6754er', '42201-4531983-0', 'Worker', 'Electricia', 'karachi', 'abdul_k', '2020', ''),
(41, 'Asif Khan', '0300-3654123', 'kutta@gmail.com', 'hadhhogai', '42201-5610658-0', 'Worker', 'Carpenter', 'house 23,karachi', 'asif564', '2020', ''),
(42, 'Fizza Sheikh', '0332-0327709', 'fizza@gmail.com', 'pagalnahi', '42201-4509239-0', 'Worker', 'Carpenter', 'karachi', 'fizza_s', '2020', 'profileimages/.70x70Logo.scale-80_contrast-white.png'),
(43, 'Hashim Khan', '0223-0923450', 'hashim@yahoo.com', 'maihonna', '42201-3797420-0', 'Worker', 'Carpenter', 'karachi', 'hashimk', '2020', ''),
(44, 'Khalid Latif', '0300-9288880', 'khalid@gmail.com', 'khalidhonmai', '42201-7777777-0', 'Worker', 'Carpenter', 'karachi', 'khalid123', '2020', ''),
(45, 'Ahmed Khalid', '0300-9812017', 'ahmedk@gmail.com', 'haitou', '42201-7340176-0', 'Worker', 'Plumber', 'karachi', 'ahmed_k', '2020', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerreq`
--
ALTER TABLE `buyerreq`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workerbid`
--
ALTER TABLE `workerbid`
  ADD KEY `requestId` (`requestId`);

--
-- Indexes for table `workerregistration`
--
ALTER TABLE `workerregistration`
  ADD PRIMARY KEY (`workerID`,`userName`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerreq`
--
ALTER TABLE `buyerreq`
  MODIFY `requestId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `workerregistration`
--
ALTER TABLE `workerregistration`
  MODIFY `workerID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workerbid`
--
ALTER TABLE `workerbid`
  ADD CONSTRAINT `workerbid_ibfk_1` FOREIGN KEY (`requestId`) REFERENCES `buyerreq` (`requestId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

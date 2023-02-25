-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 09:29 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dclmwebcastdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chattab`
--

CREATE TABLE `chattab` (
  `postId` varchar(225) NOT NULL,
  `userId` varchar(225) NOT NULL,
  `chatText` varchar(225) NOT NULL,
  `chatImage` varchar(225) NOT NULL,
  `chatVideo` varchar(225) NOT NULL,
  `chatDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chattab`
--

INSERT INTO `chattab` (`postId`, `userId`, `chatText`, `chatImage`, `chatVideo`, `chatDate`) VALUES
('1', '1', 'Hello DeeperLifers', '', '', '0000-00-00 00:00:00'),
('', '1', '', '', '', '0000-00-00 00:00:00'),
('', '1', '', '', '', '0000-00-00 00:00:00'),
('', '1', '', '', '', '2023-02-20 16:25:31'),
('', '1', '', '', '', '2023-02-20 16:30:43'),
('1', '1', 'testing webcast', '', '', '2023-02-20 16:37:57'),
('', '1', '', '', '', '2023-02-20 16:43:33'),
('1', '1', 'testing webcast1', '', '', '2023-02-20 18:24:19'),
('1', '1', 'it seems things are getting set or what?', '', '', '2023-02-20 18:31:53'),
('1', '1', 'it seems things are getting set or what?', '', '', '2023-02-20 18:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `posttab`
--

CREATE TABLE `posttab` (
  `postId` int(11) NOT NULL,
  `postAuthor` varchar(225) NOT NULL,
  `postTitle` varchar(225) NOT NULL,
  `postViews` varchar(225) NOT NULL,
  `postImage` varchar(225) NOT NULL,
  `postVideo` varchar(225) NOT NULL,
  `postUploadDate` varchar(225) NOT NULL,
  `postDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posttab`
--

INSERT INTO `posttab` (`postId`, `postAuthor`, `postTitle`, `postViews`, `postImage`, `postVideo`, `postUploadDate`, `postDate`) VALUES
(1, 'DCLM Headquater', 'The Power To Turn Bondage To Breakthrough (Special Broadcast) Pastor Kumuyi', '54', 'gsmsg.jpg', 'vid1.mp4', '2023-02-01 21:57:01', '2023-02-02 08:06:29'),
(2, 'DCLM Headquater', 'The Power To Turn Bondage To Breakthrough (Special Broadcast) Pastor Kumuyi', '54', 'gsmsg.jpg', 'vid2.mp4', '2023-02-01 21:57:01', '2023-02-02 08:07:19'),
(3, 'DCLM Headquater', 'The Power To Turn Bondage To Breakthrough (Special Broadcast) Pastor Kumuyi', '54', 'gsmsg.jpg', 'vid3.mp4', '2023-02-01 21:57:01', '2023-02-02 08:07:28'),
(4, 'DCLM Headquater', 'The Power To Turn Bondage To Breakthrough (Special Broadcast) Pastor Kumuyi', '54', 'gsmsg.jpg', 'vid4.mp4', '2023-02-01 21:57:01', '2023-02-02 08:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `roletab`
--

CREATE TABLE `roletab` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertab`
--

CREATE TABLE `usertab` (
  `userId` int(11) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `dateOfBirth` varchar(225) NOT NULL,
  `phoneNumber` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `roleId` varchar(225) NOT NULL,
  `userPicture` varchar(225) NOT NULL,
  `dateRegistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertab`
--

INSERT INTO `usertab` (`userId`, `firstname`, `middlename`, `lastname`, `dateOfBirth`, `phoneNumber`, `address`, `state`, `country`, `roleId`, `userPicture`, `dateRegistered`) VALUES
(1, 'Adebimpe', 'Adeniyi ', 'Kolawole', '', '0903425435241', 'Lagos', 'Lagos', 'Nigeria', '2', '1.jpg', '2023-02-09 13:12:14'),
(2, 'Oregun', 'Olubimpe', 'Rufus', '', '0903425435241', 'Lagos', 'Lagos', 'Nigeria', '2', '2.jpg', '2023-02-09 13:13:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posttab`
--
ALTER TABLE `posttab`
  ADD PRIMARY KEY (`postId`);

--
-- Indexes for table `roletab`
--
ALTER TABLE `roletab`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `usertab`
--
ALTER TABLE `usertab`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posttab`
--
ALTER TABLE `posttab`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roletab`
--
ALTER TABLE `roletab`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertab`
--
ALTER TABLE `usertab`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 05:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `SupervisorId` int(11) NOT NULL,
  `ProjectIdeas` text,
  `ProjectInterests` text,
  `CurrentAllocation` int(11) NOT NULL DEFAULT '0',
  `MaxAllocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`Id`, `FirstName`, `LastName`, `SupervisorId`, `ProjectIdeas`, `ProjectInterests`, `CurrentAllocation`, `MaxAllocation`) VALUES
(1, 'Dan', 'Button', 20000, 'Project Allocation System:\r\n\r\nImplement a final year Project Allocation System in python/java or other preferable program language. The system must allow random allocation, allocation based on choice, decline/accept capabilities etc.', 'AI, Security, PHP, Java', 0, 5),
(2, 'James', 'Daniels', 25058, 'Multicasting of Bandwidth Efficient Video in Multiradio Multicellular Wireless networks.\r\n\r\nAuthentication and Adaptive Security for DNS System.', 'Wireless, Networking, DNS, Security', 0, 2),
(3, 'Sam', 'Jones', 25898, '', '', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

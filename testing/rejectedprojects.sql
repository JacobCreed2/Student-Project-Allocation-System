-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 03:57 PM
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
-- Table structure for table `rejectedprojects`
--

CREATE TABLE `rejectedprojects` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `SupervisorId` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Reason` text NOT NULL,
  `Resolved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rejectedprojects`
--

INSERT INTO `rejectedprojects` (`Id`, `StudentId`, `SupervisorId`, `ProjectId`, `Reason`, `Resolved`) VALUES
(2, 3, 1, 3, 'sdfghj', 0),
(3, 9, 1, 9, 'sdfg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rejectedprojects`
--
ALTER TABLE `rejectedprojects`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `project` (`ProjectId`),
  ADD KEY `student` (`StudentId`),
  ADD KEY `supervisor` (`SupervisorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rejectedprojects`
--
ALTER TABLE `rejectedprojects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rejectedprojects`
--
ALTER TABLE `rejectedprojects`
  ADD CONSTRAINT `student` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `supervisor` FOREIGN KEY (`SupervisorId`) REFERENCES `supervisors` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

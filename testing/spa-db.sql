-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 05:30 PM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `StudentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `FirstName`, `LastName`, `StudentId`) VALUES
(1, 'jack', 'smith', 15054),
(3, 'Jess', 'Cox', 15058),
(7, 'test', 'test', 0),
(8, 'test2', 'test', 15088),
(9, 'George', 'Jones', 15689),
(10, 'Jim', 'Daniels', 15248);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(4000) NOT NULL,
  `UserTypeId` int(1) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`, `UserTypeId`, `StudentId`, `SupervisorId`) VALUES
(1, 'DButton', '$2y$10$MMaD8r.vjOt7gH4ovSkwqeyjOGK7r4BmlLKu9K2RmLWCmjvUID9Ee', 1, NULL, 1),
(2, '15054', '$2y$10$U3idl4Yu5PG9a9srh5cS8utRLXFzp29dEDffV.GAGF0nqbOzTCNW6', 3, 1, NULL),
(3, '25058', '$2y$10$.NAGEJZNmQBAx0gSl17g.OrCEbhFIIU2qZjH8DL9kI2DBoLfrsHG.', 2, NULL, 2),
(5, '15058', '$2y$10$VUyfjBun9TJj7JzvOX3aFOufV8XtE/CyJZ7eNK.DT1MCkdDSmbhT.', 3, 3, NULL),
(9, '0', '$2y$10$VvIyA2a8uFQWtc32xxgWnOv/c5F1YIPJLhivUMA4kPMA6IbnfVsW2', 3, 7, NULL),
(10, '15088', '$2y$10$dUqvacb4MoUXcbGlP.LOAu/0AztVr9V9ONcBzoWOMBpUAdmslIxZa', 3, 8, NULL),
(11, '25898', '$2y$10$sqfup2Tgk5tOddmBLd7RbOgSeFOGvCnxvMU4FKgN7racHMbOIO2qm', 2, NULL, 3),
(12, '15689', '$2y$10$ezD4Yq0pty1ZSaJRkpvGyuuTegr/dGOlzL3Cg1PoGrm8c6XAosJ7i', 3, 9, NULL),
(13, '15248', '$2y$10$oBORmczrecRJgd4kjwOG8.vlV1A3KZrZ0ueY98nsPJAtjotXJJRna', 3, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `Id` int(11) NOT NULL,
  `UserType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`Id`, `UserType`) VALUES
(1, 'Admin'),
(2, 'Supervisor'),
(3, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StudentId` (`StudentId`),
  ADD KEY `SupervisorId` (`SupervisorId`),
  ADD KEY `UserType` (`UserTypeId`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `StudentId` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `SupervisorId` FOREIGN KEY (`SupervisorId`) REFERENCES `supervisors` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `UserType` FOREIGN KEY (`UserTypeId`) REFERENCES `usertype` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

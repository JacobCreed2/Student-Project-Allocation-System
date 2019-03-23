-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 05:16 PM
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
CREATE DATABASE IF NOT EXISTS `spa-db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spa-db`;

-- --------------------------------------------------------

--
-- Table structure for table `allocated`
--

CREATE TABLE `allocated` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `ProjectId` int(11) DEFAULT NULL,
  `ProjectTitle` text,
  `ProjectDetails` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocated`
--

INSERT INTO `allocated` (`Id`, `StudentId`, `SupervisorId`, `FirstName`, `LastName`, `ProjectId`, `ProjectTitle`, `ProjectDetails`) VALUES
(1, 1, 1, 'John', 'Smith', 1, 'Project Allocation System', 'I would like to propose an idea that I have discussed with you for a Project Allocation System. The system will incorporate three user types: Students, Tutors and an admin. I will be using a mixture of PHP, SQL and java to create a solution.\r\n\r\nStudents\r\nThe student will be able to propose an idea suggested by a tutor or propose their own idea. They can then choose up to three tutors and prioritise them in first, second and third order.\r\nThe student will go through their three choices being accepted or rejected by each tutor. If the student has been rejected by all three tutors they will be able to allocate three tutors again, this could be the same three. This time they will give a new proposal or suggest an improvement to the proposal.\r\nOnce the deadline for student allocation is up the remaining students will be allocated to the remaining tutors based on the topic the student is proposing. For example, if a student is proposing an idea to do with AI and the tutor is interested in AI projects then they will be put together.\r\n\r\nTutors\r\nThe tutor will be able to give 4 to 5 ideas for projects and say what fields that they are interested in to help students with their project ideas. They will also be able to accept or reject proposal ideas, any ideas a tutor may reject, a tutor can then leave a comment saying why they have rejected it.\r\nEach tutor has an allocation of students that they can work with. The system will take this into account making the tutor unavailable when their allocation is full. Once a tutor has accepted a proposal through the system will the allocation decrease. The number of allocations will be clearly displayed to all three user types.\r\n\r\nAdmin\r\nAn admin will be able to add or remove students and staff year to year. They will also be able to see which students have been accepted by which tutors. A graph will be shown displaying the number of students the get their first, second and third choices along with other statistics this can be discussed later.');

-- --------------------------------------------------------

--
-- Table structure for table `needsallocating`
--

CREATE TABLE `needsallocating` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `ProjectId` int(11) DEFAULT NULL,
  `ProjectTitle` text,
  `ProjectDetails` text,
  `Allocated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needsallocating`
--

INSERT INTO `needsallocating` (`Id`, `StudentId`, `SupervisorId`, `FirstName`, `LastName`, `ProjectId`, `ProjectTitle`, `ProjectDetails`, `Allocated`) VALUES
(1, 50, 2, 'Sam', 'Smith', 3, 'Automatic Student Attendance System', 'All the UWE student cards have RFID tags in them. My idea is to use a Raspberry Pi with an RFID reader module to scan the students card when they arrive at the start of a lecture and at the same time it would log the time that they arrived. Then the RFID number would be sent over wireless to a server to be checked against an SQL database of student details (names etc). The attendance would then be viewed through a web-based system.\r\n\r\nAs I am sending information over wireless I would need to consider encryption methods and the same goes with storing a database of personal information.\r\n', 0),
(2, 85, 1, 'test', 'account', 12, 'test project', 'test', 0),
(3, 82, 2, 'jack', 'Homes', 13, 'Example project', 'Security PHP java', 0),
(4, 86, 1, 'John', 'Sims', 14, 'Project', 'Security php java', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `SupervisorId` int(11) DEFAULT NULL,
  `ProjectTitle` varchar(255) DEFAULT NULL,
  `ProjectDetails` text,
  `ProjectCreated` datetime DEFAULT NULL,
  `Allocated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Id`, `StudentId`, `SupervisorId`, `ProjectTitle`, `ProjectDetails`, `ProjectCreated`, `Allocated`) VALUES
(1, 1, 1, 'Project Allocation System', 'I would like to propose an idea that I have discussed with you for a Project Allocation System. The system will incorporate three user types: Students, Tutors and an admin. I will be using a mixture of PHP, SQL and java to create a solution.\r\n\r\nStudents\r\nThe student will be able to propose an idea suggested by a tutor or propose their own idea. They can then choose up to three tutors and prioritise them in first, second and third order.\r\nThe student will go through their three choices being accepted or rejected by each tutor. If the student has been rejected by all three tutors they will be able to allocate three tutors again, this could be the same three. This time they will give a new proposal or suggest an improvement to the proposal.\r\nOnce the deadline for student allocation is up the remaining students will be allocated to the remaining tutors based on the topic the student is proposing. For example, if a student is proposing an idea to do with AI and the tutor is interested in AI projects then they will be put together.\r\n\r\nTutors\r\nThe tutor will be able to give 4 to 5 ideas for projects and say what fields that they are interested in to help students with their project ideas. They will also be able to accept or reject proposal ideas, any ideas a tutor may reject, a tutor can then leave a comment saying why they have rejected it.\r\nEach tutor has an allocation of students that they can work with. The system will take this into account making the tutor unavailable when their allocation is full. Once a tutor has accepted a proposal through the system will the allocation decrease. The number of allocations will be clearly displayed to all three user types.\r\n\r\nAdmin\r\nAn admin will be able to add or remove students and staff year to year. They will also be able to see which students have been accepted by which tutors. A graph will be shown displaying the number of students the get their first, second and third choices along with other statistics this can be discussed later.', '2019-02-12 00:00:00', 1),
(2, 2, NULL, NULL, NULL, NULL, 0),
(3, 50, 2, 'Automatic Student Attendance System', 'All the UWE student cards have RFID tags in them. My idea is to use a Raspberry Pi with an RFID reader module to scan the students card when they arrive at the start of a lecture and at the same time it would log the time that they arrived. Then the RFID number would be sent over wireless to a server to be checked against an SQL database of student details (names etc). The attendance would then be viewed through a web-based system.\r\n\r\nAs I am sending information over wireless I would need to consider encryption methods and the same goes with storing a database of personal information.\r\n', '2019-02-21 00:00:00', 0),
(12, 85, 1, 'test project', 'test', '2019-03-12 16:53:11', 0),
(13, 82, 2, 'Example project', 'Security PHP java', '2019-03-13 12:37:01', 0),
(14, 86, 1, 'Project', 'Security php java', '2019-03-12 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `randomallocation`
--

CREATE TABLE `randomallocation` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `ProjectId` int(11) DEFAULT NULL,
  `ProjectTitle` text,
  `ProjectDetails` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `randomallocation`
--

INSERT INTO `randomallocation` (`Id`, `StudentId`, `SupervisorId`, `FirstName`, `LastName`, `ProjectId`, `ProjectTitle`, `ProjectDetails`) VALUES
(1, 2, NULL, 'Mark', 'Jenkins', 2, NULL, NULL);

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
(1, 'John', 'Smith', 15120),
(2, 'Mark', 'Jenkins', 12185),
(50, 'Sam', 'Smith', 24984),
(82, 'jack', 'Homes', 25152),
(83, 'james', 'dean', 25047),
(85, 'test', 'account', 0),
(86, 'John', 'Sims', 25841);

-- --------------------------------------------------------

--
-- Table structure for table `supervisorpref`
--

CREATE TABLE `supervisorpref` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL,
  `PrefScore` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `SupervisorId` int(11) NOT NULL,
  `ProjectIdeas` text NOT NULL,
  `ProjectInterests` text NOT NULL,
  `CurrentAllocation` int(11) NOT NULL DEFAULT '0',
  `MaxAllocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`Id`, `FirstName`, `LastName`, `SupervisorId`, `ProjectIdeas`, `ProjectInterests`, `CurrentAllocation`, `MaxAllocation`) VALUES
(1, 'Dan', 'Button', 51515, 'Project Allocation System:\r\n\r\nImplement a final year Project Allocation System in python/java or other preferable program language. The system must allow random allocation, allocation based on choice, decline/accept capabilities etc.', 'Security, PHP, SQL, java, AI', 1, 2),
(2, 'John', 'Cox', 54345, '', 'Security, Networking, Python, Cryptography, Java  ', 0, 8),
(3, 'test', 'supervisor', 1, '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserTypeId` int(1) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `SupervisorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`, `UserTypeId`, `StudentId`, `SupervisorId`) VALUES
(1, '15120', '1234', 3, 1, NULL),
(3, 'DButton', '123', 1, NULL, 1),
(6, '12185', '1234', 3, 2, NULL),
(7, '12147', '1234', 3, 50, NULL),
(13, '25152', ';gB_=G7X', 3, 82, NULL),
(14, '25047', 'F,#VeUc_', 3, 83, NULL),
(16, 'test', 'test', 3, 85, NULL),
(17, 'JCox', '1234', 2, NULL, 2);

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
-- Indexes for table `allocated`
--
ALTER TABLE `allocated`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `needsallocating`
--
ALTER TABLE `needsallocating`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `projects_ibfk_1` (`StudentId`),
  ADD KEY `projects_ibfk_2` (`SupervisorId`);

--
-- Indexes for table `randomallocation`
--
ALTER TABLE `randomallocation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `supervisorpref`
--
ALTER TABLE `supervisorpref`
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
-- AUTO_INCREMENT for table `allocated`
--
ALTER TABLE `allocated`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `needsallocating`
--
ALTER TABLE `needsallocating`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `randomallocation`
--
ALTER TABLE `randomallocation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `supervisorpref`
--
ALTER TABLE `supervisorpref`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`SupervisorId`) REFERENCES `supervisors` (`Id`) ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `StudentId` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `SupervisorId` FOREIGN KEY (`SupervisorId`) REFERENCES `supervisors` (`Id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `UserType` FOREIGN KEY (`UserTypeId`) REFERENCES `usertype` (`Id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

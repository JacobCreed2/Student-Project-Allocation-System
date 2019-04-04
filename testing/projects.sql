-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 05:27 PM
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
(1, 1, 1, 'Test', 'Security, PHP, AI', '0000-00-00 00:00:00', 0),
(3, 3, NULL, 'test', 'test', '2019-04-03 12:23:58', 0),
(7, 7, NULL, NULL, NULL, NULL, 0),
(8, 8, NULL, NULL, NULL, NULL, 0),
(9, 9, 1, 'Project Allocation System', 'I would like to propose an idea that I have discussed with you for a Project Allocation System. The system will incorporate three user types: Students, Tutors and an admin. I will be using a mixture of PHP, SQL and java to create a solution.\r\n\r\nStudents\r\nThe student will be able to propose an idea suggested by a tutor or propose their own idea. They can then choose up to three tutors and prioritise them in first, second and third order.\r\nThe student will go through their three choices being accepted or rejected by each tutor. If the student has been rejected by all three tutors they will be able to allocate three tutors again, this could be the same three. This time they will give a new proposal or suggest an improvement to the proposal.\r\nOnce the deadline for student allocation is up the remaining students will be allocated to the remaining tutors based on the topic the student is proposing. For example, if a student is proposing an idea to do with AI and the tutor is interested in AI projects then they will be put together.\r\n\r\nTutors\r\nThe tutor will be able to give 4 to 5 ideas for projects and say what fields that they are interested in to help students with their project ideas. They will also be able to accept or reject proposal ideas, any ideas a tutor may reject, a tutor can then leave a comment saying why they have rejected it.\r\nEach tutor has an allocation of students that they can work with. The system will take this into account making the tutor unavailable when their allocation is full. Once a tutor has accepted a proposal through the system will the allocation decrease. The number of allocations will be clearly displayed to all three user types.\r\n\r\nAdmin\r\nAn admin will be able to add or remove students and staff year to year. They will also be able to see which students have been accepted by which tutors. A graph will be shown displaying the number of students the get their first, second and third choices along with other statistics this can be discussed later.', '2019-04-04 15:36:27', 0),
(10, 10, 1, 'Attendance system', 'All the UWE student cards have RFID tags in them. My idea is to use a Raspberry Pi with an RFID reader module to scan the students card when they arrive at the start of a lecture and at the same time it would log the time that they arrived. Then the RFID number would be sent over wireless to a server to be checked against an SQL database of student details (names etc). The attendance would then be viewed through a web-based system.\r\n\r\nAs I am sending information over wireless I would need to consider encryption methods and the same goes with storing a database of personal information.\r\n', '2019-04-04 17:24:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `projects_ibfk_1` (`StudentId`),
  ADD KEY `projects_ibfk_2` (`SupervisorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`SupervisorId`) REFERENCES `supervisors` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 01:17 PM
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
(13, '15248', '$2y$10$oBORmczrecRJgd4kjwOG8.vlV1A3KZrZ0ueY98nsPJAtjotXJJRna', 3, 10, NULL),
(15, '15489', '$2y$10$A35tQC5NoO18fZuGaXsxnu/rrdNAC53xtVzwLeTDXbM5s/okm.fdy', 3, 11, NULL),
(16, '15685', '$2y$10$jmckgzliOK6w1pGQj9AqVOs/z48PiCI968Gxel44fkeNeIz8Hm1zS', 3, 12, NULL),
(17, '25589', '$2y$10$8c.aP28hnYMzaVD8wvEh8OCViVjXgoFcufAuhI.w8T2hSozFVMVaK', 2, NULL, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StudentId` (`StudentId`),
  ADD KEY `SupervisorId` (`SupervisorId`),
  ADD KEY `UserType` (`UserTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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

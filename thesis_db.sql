-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2015 at 11:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thesis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `healthstats`
--

CREATE TABLE IF NOT EXISTS `healthstats` (
  `healthID` int(6) NOT NULL AUTO_INCREMENT,
  `id` int(6) unsigned NOT NULL,
  `date_taken` varchar(15) NOT NULL,
  `weight` int(3) NOT NULL,
  `BMI` int(2) NOT NULL,
  `blood_pressure` int(4) NOT NULL,
  `blood_glucose` int(4) NOT NULL,
  `waist` int(3) NOT NULL,
  PRIMARY KEY (`healthID`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `healthstats`
--

INSERT INTO `healthstats` (`healthID`, `id`, `date_taken`, `weight`, `BMI`, `blood_pressure`, `blood_glucose`, `waist`) VALUES
(13, 7, '2015-08-26', 67, 22, 110, 5, 65),
(14, 7, '2015-08-10', 79, 26, 120, 5, 67),
(15, 7, '2015-07-27', 85, 28, 120, 6, 68),
(16, 7, '2015-07-20', 86, 28, 125, 6, 62),
(17, 7, '2015-08-27', 78, 26, 110, 5, 62);

-- --------------------------------------------------------

--
-- Table structure for table `meds`
--

CREATE TABLE IF NOT EXISTS `meds` (
  `medsID` int(6) NOT NULL AUTO_INCREMENT,
  `id` int(6) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `dosage` int(4) NOT NULL,
  `units` varchar(8) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `days` varchar(50) NOT NULL,
  `time` varchar(40) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`medsID`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `meds`
--

INSERT INTO `meds` (`medsID`, `id`, `name`, `dosage`, `units`, `start_date`, `days`, `time`, `notes`) VALUES
(1, 1, 'statins', 5, 'mg', '2015-08-06', '20', '07, 08', 'none'),
(3, 1, 'aspirin', 150, 'mg', '2015-08-06', 'Monday,Tuesday,Wednesday', '09.00, 14.00, 19.00', 'take with milk'),
(4, 2, 'tylenol', 5, 'mg', '12-12-2012', 'Monday, Tuesday, Thursday, Friday', 'midday, midnight', 'none'),
(5, 2, 'warfarin', 250, 'mg', '12-10-2015', 'Monday, Tuesday, Thursday, Friday', 'midday, midnight', 'none'),
(33, 4, 'calpol', 5, 'ml', '2015-08-19', 'Monday, Friday', '13.00', 'take it!'),
(34, 4, 'ibuprofen', 5, 'ml', '2015-08-19', 'Monay, Tuesday', '14.00', 'Take more'),
(35, 7, 'aspirin', 20, 'mg', '2015-08-19', 'Monday, Tuesday, Wednesday, Thursday, Friday, Satu', '08.00', 'every day; on empty stomach; blood thinner'),
(36, 7, 'statins', 20, 'mg', '2015-08-19', 'Monday, Tuesday, Wednesday, Thursday, Friday, Satu', '08.00', 'every day; on empty stomach; lowers cholesterol'),
(37, 7, 'warfarin', 50, 'mg', '2015-08-12', 'Monday, Tuesday, Wednesday, Thursday, Friday, Satu', '09.00', 'empty stomach; blood thinner'),
(38, 3, 'tylenol', 20, 'ml', '2015-08-12', 'Monday, Tuesday', '09.00 , 13.00', 'every 4 hours'),
(44, 3, 'warfarin', 50, 'mg', '2015-08-18', 'Monday, Tuesday, Wednesday, Thursday, Friday, Satu', '09.00', 'before breakfast'),
(46, 7, 'aspirin', 100, 'mg', '2015-08-18', 'Monday, Tuesday, Wednesday, Thursday, Friday, Satu', '09.00, 17.00', 'water'),
(47, 7, 'warfarin', 5, 'mg', '2015-08-27', 'Monday', '10.00', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `my_contacts`
--

CREATE TABLE IF NOT EXISTS `my_contacts` (
  `contactID` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id` int(6) unsigned NOT NULL,
  PRIMARY KEY (`contactID`),
  KEY `userID` (`id`),
  KEY `userID_2` (`id`),
  KEY `userID_3` (`id`),
  KEY `userID_4` (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `my_contacts`
--

INSERT INTO `my_contacts` (`contactID`, `name`, `surname`, `tel`, `email`, `id`) VALUES
(1, 'sarah', 'pane', 1234888888, 's.pane@hotmail.com', 1),
(2, 'James', 'Dean', 20823104, 'j.dean@email.com', 1),
(3, 'Lisa', 'Simpson', 20987654, 'l.simpson@email.com', 2),
(4, 'Bart', 'Simpson', 209876544, 'b.simpson@email.com', 2),
(5, 'jane', 'doe', 1234888888, 'j.doe@hotmail.com', 1),
(7, 'Ulrich', 'Stegmann', 888999888, 'u.stegmann@email.com', 7),
(8, 'Rita', 'Armiento', 2147483647, 'r.armiento@email.com', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notificationsID` int(6) NOT NULL AUTO_INCREMENT,
  `medsID` int(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `taken` varchar(4) NOT NULL,
  `id` int(6) unsigned NOT NULL,
  PRIMARY KEY (`notificationsID`),
  KEY `id` (`id`),
  KEY `medsID` (`medsID`),
  KEY `medsID_2` (`medsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `reportID` int(6) NOT NULL AUTO_INCREMENT,
  `medsID` int(6) NOT NULL,
  `healthID` int(6) NOT NULL,
  `notificationsID` int(6) NOT NULL,
  `id` int(6) unsigned NOT NULL,
  PRIMARY KEY (`reportID`),
  KEY `id` (`id`),
  KEY `medsID` (`medsID`),
  KEY `healthID` (`healthID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `confirmed_pass` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `confirmed_pass`) VALUES
(1, 'jane', 'doe', 'j.doe@email.com', '1234', '1234'),
(2, 'julia', 'child', 'j.child@email.com', '345', '345'),
(3, 'John', 'Doe', 'j_doe@email.com', 'fm3049', 'fm3049'),
(4, 'Andrea', 'Smith', 'a.smith@email.com', 'am2323', 'am2323'),
(7, 'Annie', 'Hall', 'a.hall@email.com', 'gye67', 'gye67'),
(10, 'Diana', 'de Stegmann', 'd.stegmann@gmx.net', 'ddd', 'dddd');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `healthstats`
--
ALTER TABLE `healthstats`
  ADD CONSTRAINT `healthstats_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meds`
--
ALTER TABLE `meds`
  ADD CONSTRAINT `meds_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `my_contacts`
--
ALTER TABLE `my_contacts`
  ADD CONSTRAINT `my_contacts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`medsID`) REFERENCES `meds` (`medsID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`medsID`) REFERENCES `meds` (`medsID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`healthID`) REFERENCES `healthstats` (`healthID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

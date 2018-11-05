-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2018 at 07:56 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f35ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `seatavailability`
--

CREATE TABLE IF NOT EXISTS `seatavailability` (
  `ID` int(8) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `A1` int(10) NOT NULL,
  `A2` int(1) NOT NULL,
  `A3` int(1) NOT NULL,
  `A4` int(1) NOT NULL,
  `A5` int(1) NOT NULL,
  `B1` int(1) NOT NULL,
  `B2` int(1) NOT NULL,
  `B3` int(1) NOT NULL,
  `B4` int(1) NOT NULL,
  `B5` int(1) NOT NULL,
  `timing` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatavailability`
--

INSERT INTO `seatavailability` (`ID`, `Title`, `A1`, `A2`, `A3`, `A4`, `A5`, `B1`, `B2`, `B3`, `B4`, `B5`, `timing`) VALUES
(1, 'Aquaman', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1930);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

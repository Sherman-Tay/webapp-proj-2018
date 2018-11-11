-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 10:09 PM
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
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Title` varchar(256) NOT NULL,
  `SeatPrice` float NOT NULL,
  `SeatIndex` varchar(32) NOT NULL,
  `Time` varchar(256) NOT NULL,
  `OrderID` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `ID` int(8) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `webpage` varchar(256) DEFAULT NULL,
  `SeatPrice` float NOT NULL,
  PRIMARY KEY (`Title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `Title`, `Description`, `webpage`, `SeatPrice`) VALUES
(1, 'Aquaman', 'Aquaman finds himself caught between a surface world that ravages the sea and the underwater Atlanteans who are ready to revolt.', 'aquaman-desc.php', 10.5),
(5, 'First Man', 'Ryan Gosling plays astronaut legend Neil Armstrong in this chronicle of the historic Apollo 11 mission.', 'firstman-desc.php', 11),
(4, 'Mission: Impossible - Fallout', 'Ethan Hunt and the IMF team join forces with CIA assassin August Walker to prevent a disaster of epic proportions. Arms dealer John Lark and a group of terrorists known as the Apostles plan to use three plutonium cores for a simultaneous nuclear attack on the Vatican, Jerusalem and Mecca, Saudi Arabia. When the weapons go missing, Ethan and his crew find themselves in a desperate race against time to prevent them from falling into the wrong hands.', 'mi-desc.php', 8.5),
(3, 'The Old Man & the Gun', 'At the age of 70, Forrest Tucker makes an audacious escape from San Quentin, conducting an unprecedented string of heists that confound authorities and enchant the public. Wrapped up in the pursuit are detective John Hunt, who becomes captivated with Forrest''s commitment to his craft, and a woman who loves him in spite of his chosen profession.\r\n', 'oldman-desc.php', 8),
(2, 'Venom', 'Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake''s experiments, Eddie''s body merges with the alien Venom -- leaving him with superhuman strength and power. Twisted, dark and fueled by rage, Venom tries to control the new and dangerous abilities that Eddie finds so intoxicating.', 'venom-desc.php', 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `movieSeats`
--

CREATE TABLE IF NOT EXISTS `movieSeats` (
  `SeatID` int(8) NOT NULL AUTO_INCREMENT,
  `VariantID` int(8) NOT NULL,
  `Time` varchar(8) NOT NULL,
  `SeatAvail` int(8) NOT NULL,
  `SeatIndex` varchar(8) NOT NULL,
  `SeatPrice` float NOT NULL,
  `Title` varchar(32) NOT NULL,
  PRIMARY KEY (`SeatID`),
  KEY `SeatID` (`SeatID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `movieSeats`
--

INSERT INTO `movieSeats` (`SeatID`, `VariantID`, `Time`, `SeatAvail`, `SeatIndex`, `SeatPrice`, `Title`) VALUES
(1, 1, '1930', 1, 'A1', 10.5, 'Aquaman'),
(2, 1, '1930', 1, 'A2', 10.5, 'Aquaman'),
(3, 1, '1930', 1, 'A3', 10.5, 'Aquaman'),
(4, 1, '1930', 1, 'A4', 10.5, 'Aquaman'),
(5, 1, '1930', 1, 'A5', 10.5, 'Aquaman'),
(6, 1, '1930', 1, 'B1', 10.5, 'Aquaman'),
(7, 1, '1930', 1, 'B2', 10.5, 'Aquaman'),
(8, 1, '1930', 1, 'B3', 10.5, 'Aquaman'),
(9, 1, '1930', 1, 'B4', 10.5, 'Aquaman'),
(10, 1, '1930', 1, 'B5', 10.5, 'Aquaman'),
(11, 2, '2230', 1, 'A1', 10.5, 'Aquaman'),
(12, 2, '2230', 1, 'A2', 10.5, 'Aquaman'),
(13, 2, '2230', 1, 'A3', 10.5, 'Aquaman'),
(14, 2, '2230', 1, 'A4', 10.5, 'Aquaman'),
(15, 2, '2230', 1, 'A5', 10.5, 'Aquaman'),
(16, 2, '2230', 1, 'B1', 10.5, 'Aquaman'),
(17, 2, '2230', 1, 'B2', 10.5, 'Aquaman'),
(18, 2, '2230', 1, 'B3', 10.5, 'Aquaman'),
(19, 2, '2230', 1, 'B4', 10.5, 'Aquaman'),
(20, 2, '2230', 1, 'B5', 10.5, 'Aquaman'),
(21, 3, '1930', 1, 'A1', 9.5, 'Venom'),
(22, 3, '1930', 1, 'A2', 9.5, 'Venom'),
(23, 3, '1930', 1, 'A3', 9.5, 'Venom'),
(24, 3, '1930', 1, 'A4', 9.5, 'Venom'),
(25, 3, '1930', 1, 'A5', 9.5, 'Venom'),
(26, 3, '1930', 1, 'B1', 9.5, 'Venom'),
(27, 3, '1930', 1, 'B2', 9.5, 'Venom'),
(28, 3, '1930', 1, 'B3', 9.5, 'Venom'),
(29, 3, '1930', 1, 'B4', 9.5, 'Venom'),
(30, 3, '1930', 1, 'B5', 9.5, 'Venom'),
(31, 4, '2230', 1, 'A1', 9.5, 'Venom'),
(32, 4, '2230', 1, 'A2', 9.5, 'Venom'),
(33, 4, '2230', 1, 'A3', 9.5, 'Venom'),
(34, 4, '2230', 1, 'A4', 9.5, 'Venom'),
(35, 4, '2230', 1, 'A5', 9.5, 'Venom'),
(36, 4, '2230', 1, 'B1', 9.5, 'Venom'),
(37, 4, '2230', 1, 'B2', 9.5, 'Venom'),
(38, 4, '2230', 1, 'B3', 9.5, 'Venom'),
(39, 4, '2230', 1, 'B4', 9.5, 'Venom'),
(40, 4, '2230', 1, 'B5', 9.5, 'Venom'),
(41, 5, '1400', 1, 'A1', 8, 'The Old Man & the Gun'),
(42, 5, '1400', 1, 'A2', 8, 'The Old Man & the Gun'),
(43, 5, '1400', 1, 'A3', 8, 'The Old Man & the Gun'),
(44, 5, '1400', 1, 'A4', 8, 'The Old Man & the Gun'),
(45, 5, '1400', 1, 'A5', 8, 'The Old Man & the Gun'),
(46, 5, '1400', 1, 'B1', 8, 'The Old Man & the Gun'),
(47, 5, '1400', 1, 'B2', 8, 'The Old Man & the Gun'),
(48, 5, '1400', 1, 'B3', 8, 'The Old Man & the Gun'),
(49, 5, '1400', 1, 'B4', 8, 'The Old Man & the Gun'),
(50, 5, '1400', 1, 'B5', 8, 'The Old Man & the Gun'),
(51, 6, '1100', 1, 'A1', 8.5, 'Mission: Impossible - Fallout'),
(52, 6, '1100', 1, 'A2', 8.5, 'Mission: Impossible - Fallout'),
(53, 6, '1100', 1, 'A3', 8.5, 'Mission: Impossible - Fallout'),
(54, 6, '1100', 1, 'A4', 8.5, 'Mission: Impossible - Fallout'),
(55, 6, '1100', 1, 'A5', 8.5, 'Mission: Impossible - Fallout'),
(56, 6, '1100', 1, 'B1', 8.5, 'Mission: Impossible - Fallout'),
(57, 6, '1100', 1, 'B2', 8.5, 'Mission: Impossible - Fallout'),
(58, 6, '1100', 1, 'B3', 8.5, 'Mission: Impossible - Fallout'),
(59, 6, '1100', 1, 'B4', 8.5, 'Mission: Impossible - Fallout'),
(60, 6, '1100', 1, 'B5', 8.5, 'Mission: Impossible - Fallout'),
(61, 7, '1600', 1, 'A1', 11, 'First Man'),
(62, 7, '1600', 1, 'A2', 11, 'First Man'),
(63, 7, '1600', 1, 'A3', 11, 'First Man'),
(64, 7, '1600', 1, 'A4', 11, 'First Man'),
(65, 7, '1600', 1, 'A5', 11, 'First Man'),
(66, 7, '1600', 1, 'B1', 11, 'First Man'),
(67, 7, '1600', 1, 'B2', 11, 'First Man'),
(68, 7, '1600', 1, 'B3', 11, 'First Man'),
(69, 7, '1600', 1, 'B4', 11, 'First Man'),
(70, 7, '1600', 1, 'B5', 11, 'First Man');

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE IF NOT EXISTS `registeredusers` (
  `userID` varchar(32) NOT NULL,
  `Emailaddress` varchar(512) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Contact` int(32) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`userID`, `Emailaddress`, `Password`, `Contact`) VALUES
('aa', 'aa@aa.com', '47bce5c74f589f4867dbd57e9ca9f808', 12345678),
('aaa', 'aa@aa.aa', '47bce5c74f589f4867dbd57e9ca9f808', 0),
('abc', 'shermantayjy@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 12341234),
('f35ee', 'shermantayjy@gmail.com', '259d735c1e5fdd7173367c0d217254da', 83226299),
('hi', 'hi@hi', '49f68a5c8493ec2c0bf489821c21fc3b', 0),
('sherman', 'shermantayjy@gmail.com', 'e85378b3a378a21d70e919bc6c081215', 83226299),
('shermantay', 'shermantay@berkeley.edu', '5f4dcc3b5aa765d61d8327deb882cf99', 2147483647);

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
  `VariantID` int(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatavailability`
--

INSERT INTO `seatavailability` (`ID`, `Title`, `A1`, `A2`, `A3`, `A4`, `A5`, `B1`, `B2`, `B3`, `B4`, `B5`, `timing`, `VariantID`) VALUES
(1, 'Aquaman', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1930, 1),
(2, 'Venom', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2230, 3),
(3, 'Aquaman', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2230, 2),
(4, 'Venom', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2330, 4),
(5, 'The Old Man & the Gun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1400, 5),
(6, 'Mission: Impossible - Fallout', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, 6),
(7, 'First Man', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1600, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

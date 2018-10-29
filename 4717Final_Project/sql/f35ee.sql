-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 05:13 PM
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



CREATE TABLE IF NOT EXISTS `movie` (
  `ID` int(8) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `webpage` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `Title`, `Description`, `webpage`) VALUES
(1, 'Aquaman', 'Aquaman finds himself caught between a surface world that ravages the sea and the underwater Atlanteans who are ready to revolt.', 'movie-desc/aquaman-desc.php'),
(2, 'Venom', 'Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake''s experiments, Eddie''s body merges with the alien Venom -- leaving him with superhuman strength and power. Twisted, dark and fueled by rage, Venom tries to control the new and dangerous abilities that Eddie finds so intoxicating.', 'movie-desc/venom-desc.php'),
(3, 'The Old Man & the Gun', 'At the age of 70, Forrest Tucker makes an audacious escape from San Quentin, conducting an unprecedented string of heists that confound authorities and enchant the public. Wrapped up in the pursuit are detective John Hunt, who becomes captivated with Forrest''s commitment to his craft, and a woman who loves him in spite of his chosen profession.\r\n', 'movie-desc/oldman-desc.php'),
(4, 'Mission: Impossible - Fallout', 'Ethan Hunt and the IMF team join forces with CIA assassin August Walker to prevent a disaster of epic proportions. Arms dealer John Lark and a group of terrorists known as the Apostles plan to use three plutonium cores for a simultaneous nuclear attack on the Vatican, Jerusalem and Mecca, Saudi Arabia. When the weapons go missing, Ethan and his crew find themselves in a desperate race against time to prevent them from falling into the wrong hands.', 'movie-desc/mi-desc.php'),
(5, 'Fahrenheit 11/9', 'Filmmaker Michael Moore predicted that Donald Trump would become the 45th president of the United States. Traveling across the country, Moore interviews American citizens to get a sense of the social, economic and political impact of Trump''s victory. Moore also takes an in-depth look at the media, the Electoral College, the government agenda and his hometown of Flint, Mich.', 'movie-desc/fahrenheit-desc.php'),
(6, 'First Man', 'Ryan Gosling plays astronaut legend Neil Armstrong in this chronicle of the historic Apollo 11 mission.', 'movie-desc/firstman-desc.php');


--
-- Table structure for table `registeredusers`
--

CREATE TABLE IF NOT EXISTS `registeredusers` (
  `userID` varchar(32) NOT NULL,
  `Emailaddress` varchar(512) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Contact` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`userID`, `Emailaddress`, `Password`, `Contact`) VALUES
('sherman', 'shermantayjy@gmail.com', 'e85378b3a378a21d70e919bc6c081215', 83226299),
('shermantay', 'shermantay@berkeley.edu', '5f4dcc3b5aa765d61d8327deb882cf99', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `seatavailability`
--

CREATE TABLE IF NOT EXISTS `seatavailability` (
  `ID` int(8) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `A1` bit(1) NOT NULL,
  `A2` bit(1) NOT NULL,
  `A3` bit(1) NOT NULL,
  `A4` bit(1) NOT NULL,
  `A5` bit(1) NOT NULL,
  `B1` bit(1) NOT NULL,
  `B2` bit(1) NOT NULL,
  `B3` bit(1) NOT NULL,
  `B4` bit(1) NOT NULL,
  `B5` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatavailability`
--

INSERT INTO `seatavailability` (`ID`, `Title`, `A1`, `A2`, `A3`, `A4`, `A5`, `B1`, `B2`, `B3`, `B4`, `B5`) VALUES
(1, 'Aquaman', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1'),
(2, 'Venom', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

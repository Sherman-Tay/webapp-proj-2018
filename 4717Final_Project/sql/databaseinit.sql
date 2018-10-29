-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Database: `f35ee`
--

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(8) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `webpage` varchar(256) NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `userID` varchar(32) NOT NULL,
  `Emailaddress` varchar(512) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Contact` int(32) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `seatavailability`
--

CREATE TABLE `seatavailability` (
  `ID` int(8) NOT NULL,
  `Title` varchar(32) NOT NULL,
  `A1` BIT NOT NULL,
  `A2` BIT NOT NULL,
  `A3` BIT NOT NULL,
  `A4` BIT NOT NULL,
  `A5` BIT NOT NULL,
  `B1` BIT NOT NULL,
  `B2` BIT NOT NULL,
  `B3` BIT NOT NULL,
  `B4` BIT NOT NULL,
  `B5` BIT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seatavailability`
--
ALTER TABLE `seatavailability`
  ADD PRIMARY KEY (`ID`);

--

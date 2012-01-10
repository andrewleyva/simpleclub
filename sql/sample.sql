-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.aceleyvadesigns.com
-- Generation Time: Jan 09, 2012 at 06:34 PM
-- Server version: 5.1.39
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `simpleclub_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `ANNOUNCEMENTS`
--

CREATE TABLE IF NOT EXISTS `ANNOUNCEMENTS` (
  `ID` varchar(10) NOT NULL,
  `show` datetime NOT NULL,
  `hide` datetime NOT NULL,
  `title` tinytext NOT NULL,
  `body` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ANNOUNCEMENTS`
--

INSERT INTO `ANNOUNCEMENTS` (`ID`, `show`, `hide`, `title`, `body`) VALUES
('A1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Last Quarter', 'This is the last quarter of 2010. Time to make sure all the taxes are in order for the group!'),
('A2', '2012-01-01 00:00:00', '2012-01-02 00:00:00', 'Happy New Year!!', '2012 is the year the world ends... or so the Mayans supposedly say.'),
('A3', '2012-01-06 00:00:00', '2012-01-06 00:00:00', 'Amazing Weather in MD!', 'This weekend we are expected to have Spring-like weather!');

-- --------------------------------------------------------

--
-- Table structure for table `EVENTS`
--

CREATE TABLE IF NOT EXISTS `EVENTS` (
  `ID` varchar(6) NOT NULL,
  `show` datetime NOT NULL,
  `hide` datetime NOT NULL,
  `img` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `campus` tinytext NOT NULL,
  `location` tinytext NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EVENTS`
--

INSERT INTO `EVENTS` (`ID`, `show`, `hide`, `img`, `title`, `start`, `end`, `campus`, `location`, `details`) VALUES
('EV1', '2012-01-01 00:00:00', '2012-01-25 00:00:00', 'whatistruth.jpg', 'Philosphy Discussion', '2012-01-24 11:30:00', '2012-01-24 12:30:00', 'North Campus', 'CC Building- Room 15', 'Join us for a time of exploration and questions on the nature of truth. Bring a friend! '),
('EV3', '2012-01-01 00:00:00', '2012-03-02 00:00:00', 'wesley.jpg', 'Princess Bride Movie Night', '2012-02-29 20:30:00', '2012-03-01 02:00:00', 'South Campus', 'lawn', 'Come celebrate Leap Day with us by watching a classic: The Princess Bride.'),
('EV2', '2012-01-01 00:00:00', '2012-01-30 00:00:00', 'signup.jpg', 'Sign Up for Simple Club!', '2012-01-01 11:30:00', '2012-01-01 14:00:00', 'North Campus', 'Main Street (in front of the Book Store)', 'Come out and learn about Simple Club, all the fun we have, things we learn together... Oh and prizes!');

-- --------------------------------------------------------

--
-- Table structure for table `TEAM`
--

CREATE TABLE IF NOT EXISTS `TEAM` (
  `ID` varchar(6) NOT NULL,
  `show` datetime NOT NULL,
  `hide` datetime NOT NULL,
  `img` tinytext NOT NULL,
  `fName` tinytext NOT NULL,
  `lName` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `major` tinytext NOT NULL,
  `year` tinytext NOT NULL,
  `stuff` tinytext NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TEAM`
--

INSERT INTO `TEAM` (`ID`, `show`, `hide`, `img`, `fName`, `lName`, `title`, `major`, `year`, `stuff`, `bio`) VALUES
('TM1', '2008-09-01 20:19:28', '2010-05-21 20:19:44', 'nophoto.png', 'Jon', 'Doe', 'President', 'Computer Science', 'Junior', 'likes to go parasailing', 'Jon Doe isn''t your average Joe. From Scaling rock faces, to skydiving, to parasailing, getting a 4.0 in Computer Science isn''t his only talent.');

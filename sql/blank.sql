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
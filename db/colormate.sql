-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2021 at 12:17 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colormate`
--
CREATE DATABASE IF NOT EXISTS `colormate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `colormate`;

-- --------------------------------------------------------

--
-- Table structure for table `doc_reg`
--

DROP TABLE IF EXISTS `doc_reg`;
CREATE TABLE IF NOT EXISTS `doc_reg` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ima_no` varchar(50) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `dob` varchar(15) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `phone` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '1',
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`phone`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`phone`, `password`, `status`, `type`) VALUES
('9876543210', 'admin123', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
CREATE TABLE IF NOT EXISTS `survey` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `qno` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surveyresult`
--

DROP TABLE IF EXISTS `surveyresult`;
CREATE TABLE IF NOT EXISTS `surveyresult` (
  `srid` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qno` int(11) NOT NULL,
  `response` varchar(300) NOT NULL,
  PRIMARY KEY (`srid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qimage` varchar(200) NOT NULL,
  `opt_a` varchar(10) NOT NULL,
  `opt_b` varchar(10) NOT NULL,
  `opt_c` varchar(10) NOT NULL,
  `opt_d` varchar(10) NOT NULL,
  `answer` varchar(5) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`qid`, `qimage`, `opt_a`, `opt_b`, `opt_c`, `opt_d`, `answer`) VALUES
(1, 'Ishihara_01.jpg', '85', '74', '52', '36', 'b'),
(3, 'Ishihara_03.jpg', '25', '16', '14', '19', 'b'),
(4, 'Ishihara_02.jpg', '6', '7', '9', '8', 'a'),
(5, 'Ishihara_04.jpg', '1', '7', '3', '0', 'c'),
(6, 'Ishihara_05.jpg', '29', '82', '71', '17', 'a'),
(7, 'Ishihara_06.jpg', '4', '77', '8', '7', 'd'),
(8, 'Ishihara_07.jpg', '24', '45', '82', '15', 'b'),
(9, 'Ishihara_08.jpg', '2', '8', '5', '9', 'c'),
(10, 'Ishihara_09.jpg', '45', '04', '97', '79', 'c'),
(2, 'Ishihara_10.jpg', '8', '6', '2', '1', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `test_details`
--

DROP TABLE IF EXISTS `test_details`;
CREATE TABLE IF NOT EXISTS `test_details` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(11) DEFAULT NULL,
  `prescription` varchar(500) DEFAULT 'Not viewed by the doctor',
  `status` varchar(2) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE IF NOT EXISTS `user_reg` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(10) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `doc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

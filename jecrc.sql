-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 03:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jecrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `att`
--

CREATE TABLE IF NOT EXISTS `att` (
  `id` varchar(20) NOT NULL,
  `em` varchar(20) NOT NULL,
  `flat` varchar(20) NOT NULL,
  `digitalsystem` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `att`
--

INSERT INTO `att` (`id`, `em`, `flat`, `digitalsystem`, `year`) VALUES
('1', '56%', '78%', '45%', '2016'),
('2', '23%', '35%', '56%', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` varchar(20) NOT NULL,
  `em` varchar(20) NOT NULL,
  `flat` varchar(20) NOT NULL,
  `digitalsystem` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `em`, `flat`, `digitalsystem`, `year`) VALUES
('1', '78%', '82%', '76%', '2015'),
('2', '56%', '78%', '75%', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `name` varchar(20) NOT NULL DEFAULT '',
  `coursename` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `yearintake` varchar(20) NOT NULL,
  `yearofpassing` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`name`, `coursename`, `branch`, `yearintake`, `yearofpassing`, `id`) VALUES
('Abhishek Gupta', 'B.Tech', 'C.S.E', '2014', '2018', '1'),
('Shreyansh Patni', 'B.Tech', 'CSE', '2014', '2018', '2');

-- --------------------------------------------------------

--
-- Table structure for table `firstyear`
--

CREATE TABLE IF NOT EXISTS `firstyear` (
  `id` varchar(3) NOT NULL,
  `em` varchar(3) NOT NULL,
  `flat` varchar(3) NOT NULL,
  `digital system` varchar(3) NOT NULL,
  `year` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstyear`
--

INSERT INTO `firstyear` (`id`, `em`, `flat`, `digital system`, `year`) VALUES
('1', '56', '67', '78', '2015'),
('2', '78', '89', '88', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`) VALUES
('1', 'Abhishek Gu', '9929483903'),
('2', 'Shreyansh P', '8124155539'),
('1', 'Abhishek Gu', '9929483903'),
('2', 'Shreyansh P', '8124155539');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fathersname` varchar(20) NOT NULL,
  `mothersname` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fathersname`, `mothersname`, `course`, `branch`, `password`, `address`, `phone`) VALUES
('1', 'Abhishek Gupta', 'Ajay Gupta', 'Amita Gupta', 'B.TECH', 'C.S.E', '789', 'Bahahduganj', '9929483903'),
('2', 'Shreyansh Patni', 'abc', 'xyz', 'B.TECH', 'CSE', '34567', 'rc vyas', '756818303');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE IF NOT EXISTS `year` (
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year`) VALUES
('2015'),
('2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

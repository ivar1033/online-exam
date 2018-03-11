-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2017 at 05:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ravi', 'ravi');

-- --------------------------------------------------------

--
-- Table structure for table `collegesignup`
--

CREATE TABLE `collegesignup` (
  `id` int(11) NOT NULL,
  `collegename` text NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `collegeid` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegesignup`
--

INSERT INTO `collegesignup` (`id`, `collegename`, `username`, `email`, `collegeid`, `password`) VALUES
(7, 'B. P. Poddar Institute of Management & Technology', 'bppimt', 'bppimt@gmail.com', '115', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `eligiblestudent`
--

CREATE TABLE `eligiblestudent` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `roll` int(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eligiblestudent`
--

INSERT INTO `eligiblestudent` (`id`, `name`, `roll`, `semester`) VALUES
(6, 'moulik chauhan', 132609, 'Semester-1');

-- --------------------------------------------------------

--
-- Table structure for table `eligibleteacher`
--

CREATE TABLE `eligibleteacher` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eligibleteacher`
--

INSERT INTO `eligibleteacher` (`id`, `name`, `email`) VALUES
(5, 'ab', 'ab@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `examset`
--

CREATE TABLE `examset` (
  `id` int(100) NOT NULL,
  `sem_1` varchar(100) NOT NULL,
  `sem_2` varchar(100) NOT NULL,
  `sem_3` varchar(100) NOT NULL,
  `sem_4` varchar(100) NOT NULL,
  `sem_5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examset`
--

INSERT INTO `examset` (`id`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`) VALUES
(10, 'MCA 101 - Computer Organisation & Architecture', 'MCA 204 - Database Management System I', 'MM 301 - Statistics & Numerical Techniques', 'MCA 401 - Software Engineering & TQM', 'MCA E503B - Object Oriented Programming With Java');

-- --------------------------------------------------------

--
-- Table structure for table `hu_101`
--

CREATE TABLE `hu_101` (
  `id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hu_101`
--

INSERT INTO `hu_101` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `hu_401`
--

CREATE TABLE `hu_401` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hu_401`
--

INSERT INTO `hu_401` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `hu_501`
--

CREATE TABLE `hu_501` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hu_501`
--

INSERT INTO `hu_501` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mba_301`
--

CREATE TABLE `mba_301` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba_301`
--

INSERT INTO `mba_301` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mba_302`
--

CREATE TABLE `mba_302` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba_302`
--

INSERT INTO `mba_302` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_101`
--

CREATE TABLE `mca_101` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_101`
--

INSERT INTO `mca_101` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_102`
--

CREATE TABLE `mca_102` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_102`
--

INSERT INTO `mca_102` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_103`
--

CREATE TABLE `mca_103` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_103`
--

INSERT INTO `mca_103` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_201`
--

CREATE TABLE `mca_201` (
  `id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_201`
--

INSERT INTO `mca_201` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_202`
--

CREATE TABLE `mca_202` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_202`
--

INSERT INTO `mca_202` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_203`
--

CREATE TABLE `mca_203` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_203`
--

INSERT INTO `mca_203` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_204`
--

CREATE TABLE `mca_204` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_204`
--

INSERT INTO `mca_204` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_205`
--

CREATE TABLE `mca_205` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_205`
--

INSERT INTO `mca_205` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_301`
--

CREATE TABLE `mca_301` (
  `id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_301`
--

INSERT INTO `mca_301` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_302`
--

CREATE TABLE `mca_302` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_302`
--

INSERT INTO `mca_302` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_303`
--

CREATE TABLE `mca_303` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_303`
--

INSERT INTO `mca_303` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_401`
--

CREATE TABLE `mca_401` (
  `id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_401`
--

INSERT INTO `mca_401` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_402`
--

CREATE TABLE `mca_402` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_402`
--

INSERT INTO `mca_402` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_403`
--

CREATE TABLE `mca_403` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_403`
--

INSERT INTO `mca_403` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_e501a`
--

CREATE TABLE `mca_e501a` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_e501a`
--

INSERT INTO `mca_e501a` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_e502b`
--

CREATE TABLE `mca_e502b` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_e502b`
--

INSERT INTO `mca_e502b` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_e503b`
--

CREATE TABLE `mca_e503b` (
  `id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_e503b`
--

INSERT INTO `mca_e503b` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mca_e504b`
--

CREATE TABLE `mca_e504b` (
  `id` int(10) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca_e504b`
--

INSERT INTO `mca_e504b` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mm_101`
--

CREATE TABLE `mm_101` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mm_101`
--

INSERT INTO `mm_101` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mm_301`
--

CREATE TABLE `mm_301` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mm_301`
--

INSERT INTO `mm_301` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `mm_401`
--

CREATE TABLE `mm_401` (
  `id` int(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mm_401`
--

INSERT INTO `mm_401` (`id`, `question`, `A`, `B`, `C`, `D`, `correct`) VALUES
(2, 'what is 1+1', '2', '1', '3', '4', 'A'),
(3, 'what is 1+2', '5', '1', '3', '8', 'C'),
(4, 'what is 1+0', '1', '2', '3', '4', 'A'),
(5, 'what is 1+100', '101', '103', '102', '4', 'A'),
(6, 'what is 1+7', '8', '5', '2', '7', 'A'),
(7, 'what is 1+3', '4', '5', '6', '7', 'A'),
(8, 'what is 1+5', '1', '2', '3', '6', 'D'),
(9, 'what is 1+9', '0', '2', '10', '25', 'C'),
(10, 'what is 1+11', '12', '13', '15', '18', 'A'),
(11, 'what is 100+200', '147', '300', '165', '1645', 'B'),
(12, 'what is 100+500', '600', '45', '58', '588', 'A'),
(13, 'what is 100 +1', '101', '145', '14', '18', 'A'),
(14, 'what is 100+2', '100', '102', '105', '189', 'B'),
(15, 'what is 100+3', '147', '266', '147', '103', 'D'),
(16, 'what is 100+4', '104', '258', '147', '369', 'A'),
(17, 'what is 100+5', '147', '258', '105', '357', 'C'),
(18, 'what is 100+6', '147', '106', '148', '258', 'B'),
(19, 'what is 100+7', '021', '1027', '107', '584', 'C'),
(20, 'what is 100+8', '108', '147', '258', '698', 'A'),
(21, 'what is 200+0', '147', '200', '5478', '2255', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `correct` int(100) NOT NULL,
  `wrong` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `semester`, `subject`, `correct`, `wrong`) VALUES
(31, 'moulik chauhan', 'Semester-1', '', 0, 0),
(32, 'moulik chauhan', 'Semester-1', 'MCA 101 - Computer Organisation & Architecture', 0, 20),
(33, 'moulik chauhan', 'Semester-1', 'MCA 101 - Computer Organisation & Architecture', 1, 19),
(34, 'moulik chauhan', 'Semester-1', 'MCA 102 - Bussiness Systems & Application', 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `studentsignup`
--

CREATE TABLE `studentsignup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `roll` int(20) NOT NULL,
  `course` text NOT NULL,
  `college` text NOT NULL,
  `semester` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsignup`
--

INSERT INTO `studentsignup` (`id`, `name`, `username`, `email`, `roll`, `course`, `college`, `semester`, `password`) VALUES
(6, 'moulik chauhan', 'moulik.ravi', 'moulik.ravi@gmail.com', 132609, 'MCA', 'bppimt', 'Semester-1', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `teachersignup`
--

CREATE TABLE `teachersignup` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `college` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersignup`
--

INSERT INTO `teachersignup` (`id`, `name`, `username`, `emailid`, `college`, `password`) VALUES
(7, 'ab', 'ab', 'ab@gmail.com', 'bppimt', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collegesignup`
--
ALTER TABLE `collegesignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eligiblestudent`
--
ALTER TABLE `eligiblestudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eligibleteacher`
--
ALTER TABLE `eligibleteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examset`
--
ALTER TABLE `examset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hu_101`
--
ALTER TABLE `hu_101`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hu_401`
--
ALTER TABLE `hu_401`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hu_501`
--
ALTER TABLE `hu_501`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mba_301`
--
ALTER TABLE `mba_301`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mba_302`
--
ALTER TABLE `mba_302`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_101`
--
ALTER TABLE `mca_101`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_102`
--
ALTER TABLE `mca_102`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_103`
--
ALTER TABLE `mca_103`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_201`
--
ALTER TABLE `mca_201`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_202`
--
ALTER TABLE `mca_202`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_203`
--
ALTER TABLE `mca_203`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_204`
--
ALTER TABLE `mca_204`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_205`
--
ALTER TABLE `mca_205`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_301`
--
ALTER TABLE `mca_301`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_302`
--
ALTER TABLE `mca_302`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_303`
--
ALTER TABLE `mca_303`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_401`
--
ALTER TABLE `mca_401`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_402`
--
ALTER TABLE `mca_402`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_403`
--
ALTER TABLE `mca_403`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_e501a`
--
ALTER TABLE `mca_e501a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_e502b`
--
ALTER TABLE `mca_e502b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_e503b`
--
ALTER TABLE `mca_e503b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_e504b`
--
ALTER TABLE `mca_e504b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_101`
--
ALTER TABLE `mm_101`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_301`
--
ALTER TABLE `mm_301`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mm_401`
--
ALTER TABLE `mm_401`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentsignup`
--
ALTER TABLE `studentsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachersignup`
--
ALTER TABLE `teachersignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collegesignup`
--
ALTER TABLE `collegesignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `eligiblestudent`
--
ALTER TABLE `eligiblestudent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eligibleteacher`
--
ALTER TABLE `eligibleteacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `examset`
--
ALTER TABLE `examset`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hu_101`
--
ALTER TABLE `hu_101`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hu_401`
--
ALTER TABLE `hu_401`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hu_501`
--
ALTER TABLE `hu_501`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mba_301`
--
ALTER TABLE `mba_301`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mba_302`
--
ALTER TABLE `mba_302`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_101`
--
ALTER TABLE `mca_101`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_102`
--
ALTER TABLE `mca_102`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_103`
--
ALTER TABLE `mca_103`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_201`
--
ALTER TABLE `mca_201`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_202`
--
ALTER TABLE `mca_202`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_203`
--
ALTER TABLE `mca_203`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_204`
--
ALTER TABLE `mca_204`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_205`
--
ALTER TABLE `mca_205`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_301`
--
ALTER TABLE `mca_301`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_302`
--
ALTER TABLE `mca_302`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_303`
--
ALTER TABLE `mca_303`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_401`
--
ALTER TABLE `mca_401`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_402`
--
ALTER TABLE `mca_402`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_403`
--
ALTER TABLE `mca_403`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_e501a`
--
ALTER TABLE `mca_e501a`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_e502b`
--
ALTER TABLE `mca_e502b`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_e503b`
--
ALTER TABLE `mca_e503b`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mca_e504b`
--
ALTER TABLE `mca_e504b`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mm_101`
--
ALTER TABLE `mm_101`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mm_301`
--
ALTER TABLE `mm_301`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mm_401`
--
ALTER TABLE `mm_401`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `studentsignup`
--
ALTER TABLE `studentsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachersignup`
--
ALTER TABLE `teachersignup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

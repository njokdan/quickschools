-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 07:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignschool`
--

CREATE TABLE `assignschool` (
  `assignid` bigint(4) NOT NULL,
  `sid` bigint(4) NOT NULL,
  `toid` bigint(4) NOT NULL,
  `status` varchar(10) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject_to_student`
--

CREATE TABLE `assign_subject_to_student` (
  `subjectid` bigint(4) NOT NULL,
  `studentid` bigint(4) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `classx` varchar(15) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classx`
--

CREATE TABLE `classx` (
  `classxid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `classx` varchar(40) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classx`
--

INSERT INTO `classx` (`classxid`, `uid`, `classx`, `period`) VALUES
(1, 1, 'Primary 1', '02-05-2018'),
(2, 1, 'Primary 2', '02-05-2018'),
(3, 1, 'Primary 3', '02-05-2018'),
(4, 1, 'Primary 4', '02-05-2018'),
(5, 1, 'Primary 5', '02-05-2018'),
(6, 1, 'Primary 6', '02-05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` bigint(4) NOT NULL,
  `staffid` bigint(4) NOT NULL,
  `studentid` bigint(4) NOT NULL,
  `classid` varchar(11) NOT NULL,
  `termid` varchar(3) NOT NULL,
  `sessionid` varchar(9) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentid`, `staffid`, `studentid`, `classid`, `termid`, `sessionid`, `comments`, `period`) VALUES
(1, 1, 7, '1', '1', '1', 'nice try...do more next term', '03-05-2018'),
(2, 1, 2, '1', '1', '1', 'ggggggg', '04-05-2018'),
(4, 1, 5, '1', '1', '1', 'hhhhhhhhhhhhhhhjjj', '04-05-2018'),
(5, 1, 6, '1', '1', '1', 'bb', '04-05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `markid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `studentid` bigint(4) DEFAULT NULL,
  `fullname` varchar(40) NOT NULL,
  `class` varchar(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `session` varchar(9) NOT NULL,
  `term` varchar(8) NOT NULL,
  `type` varchar(6) NOT NULL,
  `score` varchar(3) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`markid`, `uid`, `studentid`, `fullname`, `class`, `subject`, `session`, `term`, `type`, `score`, `period`) VALUES
(3, 1, 2, 'Dele Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '80', '20-02-2018'),
(4, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '95', '20-02-2018'),
(5, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '95', '20-02-2018'),
(6, 1, 4, 'Saheed Rufus', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '60', '21-02-2018'),
(7, 1, 5, 'Dele Williams', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '55', '21-02-2018'),
(8, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '66', '21-02-2018'),
(9, 1, 7, 'Judith Adelanre', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '55', '21-02-2018'),
(10, 1, 8, 'Adesola Gabriel', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '22', '21-02-2018'),
(11, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '45', '21-02-2018'),
(12, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '64', '21-02-2018'),
(13, 1, 11, 'Abraham Zuma', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '23', '21-02-2018'),
(14, 1, 12, 'William David', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '56', '21-02-2018'),
(15, 1, 13, 'James Iwealla', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '78', '21-02-2018'),
(16, 1, 14, 'Jacob welch', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '33', '21-02-2018'),
(17, 1, 15, 'Adejumoke william', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '23', '21-02-2018'),
(18, 1, 16, 'Nnenna Julius', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '88', '21-02-2018'),
(19, 1, 17, 'Seun Atinya', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '55', '21-02-2018'),
(20, 1, 18, 'Olawumi Irewole', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '45', '21-02-2018'),
(21, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '88', '21-02-2018'),
(22, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '78', '21-02-2018'),
(23, 1, 21, 'onyenso Abel', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '67', '21-02-2018'),
(24, 1, 2, 'Dele Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '100', '21-02-2018'),
(25, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '66', '21-02-2018'),
(26, 1, 4, 'Saheed Rufus', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '66', '21-02-2018'),
(27, 1, 5, 'Dele Williams', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '88', '21-02-2018'),
(28, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '65', '21-02-2018'),
(29, 1, 7, 'Judith Adelanre', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '88', '21-02-2018'),
(30, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '54', '21-02-2018'),
(31, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '84', '21-02-2018'),
(32, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '34', '21-02-2018'),
(33, 1, 11, 'Abraham Zuma', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '99', '21-02-2018'),
(34, 1, 12, 'William David', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '23', '21-02-2018'),
(35, 1, 13, 'James Iwealla', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '56', '21-02-2018'),
(36, 1, 14, 'Jacob welch', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '23', '21-02-2018'),
(37, 1, 15, 'Adejumoke william', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '76', '21-02-2018'),
(38, 1, 16, 'Nnenna Julius', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '32', '21-02-2018'),
(39, 1, 17, 'Seun Atinya', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '32', '21-02-2018'),
(40, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '89', '21-02-2018'),
(41, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '76', '21-02-2018'),
(42, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '56', '21-02-2018'),
(43, 1, 21, 'onyenso Abel', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test1', '23', '21-02-2018'),
(44, 1, 2, 'Dele Aderanti', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '77', '21-02-2018'),
(45, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '66', '21-02-2018'),
(46, 1, 4, 'Saheed Rufus', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '22', '21-02-2018'),
(47, 1, 5, 'Dele Williams', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '44', '21-02-2018'),
(48, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '56', '21-02-2018'),
(49, 1, 7, 'Judith Adelanre', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '34', '21-02-2018'),
(50, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '23', '21-02-2018'),
(51, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '22', '21-02-2018'),
(52, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '67', '21-02-2018'),
(53, 1, 11, 'Abraham Zuma', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '89', '21-02-2018'),
(54, 1, 12, 'William David', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '77', '21-02-2018'),
(55, 1, 13, 'James Iwealla', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '88', '21-02-2018'),
(56, 1, 14, 'Jacob welch', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test1', '99', '21-02-2018'),
(57, 1, 15, 'Adejumoke william', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '76', '21-02-2018'),
(58, 1, 16, 'Nnenna Julius', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '45', '21-02-2018'),
(59, 1, 17, 'Seun Atinya', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '34', '21-02-2018'),
(60, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '56', '21-02-2018'),
(61, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '76', '21-02-2018'),
(62, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '66', '21-02-2018'),
(63, 1, 21, 'onyenso Abel', 'Primary 1', 'Physics', '2017/2018', '1st', 'Test 1', '45', '21-02-2018'),
(64, 1, 2, 'Dele Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '75', '21-02-2018'),
(65, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '33', '21-02-2018'),
(66, 1, 4, 'Saheed Rufus', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '78', '21-02-2018'),
(67, 1, 5, 'Dele Williams', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '33', '21-02-2018'),
(68, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '88', '21-02-2018'),
(69, 1, 7, 'Judith Adelanre', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '44', '21-02-2018'),
(70, 1, 8, 'Adesola Gabriel', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '89', '21-02-2018'),
(71, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '33', '21-02-2018'),
(72, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '88', '21-02-2018'),
(73, 1, 11, 'Abraham Zuma', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '55', '21-02-2018'),
(74, 1, 12, 'William David', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '43', '21-02-2018'),
(75, 1, 13, 'James Iwealla', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '87', '21-02-2018'),
(76, 1, 14, 'Jacob welch', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '23', '21-02-2018'),
(77, 1, 15, 'Adejumoke william', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '77', '21-02-2018'),
(78, 1, 16, 'Nnenna Julius', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '67', '21-02-2018'),
(79, 1, 17, 'Seun Atinya', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '65', '21-02-2018'),
(80, 1, 18, 'Olawumi Irewole', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '57', '21-02-2018'),
(81, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '88', '21-02-2018'),
(82, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '77', '21-02-2018'),
(83, 1, 21, 'onyenso Abel', 'Primary 1', 'English', '2017/2018', '1st', 'Test2', '56', '21-02-2018'),
(84, 1, 2, 'Dele Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '44', '23-02-2018'),
(85, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '66', '23-02-2018'),
(86, 1, 4, 'Saheed Rufus', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '88', '23-02-2018'),
(87, 1, 5, 'Dele Williams', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '96', '23-02-2018'),
(88, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '56', '23-02-2018'),
(89, 1, 7, 'Judith Adelanre', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '77', '23-02-2018'),
(90, 1, 8, 'Adesola Gabriel', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '54', '23-02-2018'),
(91, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '43', '23-02-2018'),
(92, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '23', '23-02-2018'),
(93, 1, 11, 'Abraham Zuma', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '65', '23-02-2018'),
(94, 1, 12, 'William David', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '87', '23-02-2018'),
(95, 1, 13, 'James Iwealla', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '56', '23-02-2018'),
(96, 1, 14, 'Jacob welch', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '90', '23-02-2018'),
(97, 1, 15, 'Adejumoke william', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '32', '23-02-2018'),
(98, 1, 16, 'Nnenna Julius', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '78', '23-02-2018'),
(99, 1, 17, 'Seun Atinya', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '67', '23-02-2018'),
(100, 1, 18, 'Olawumi Irewole', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '54', '23-02-2018'),
(101, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '34', '23-02-2018'),
(102, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '22', '23-02-2018'),
(103, 1, 21, 'onyenso Abel', 'Primary 1', 'English', '2017/2018', '1st', 'Exam', '23', '23-02-2018'),
(104, 1, 2, 'Dele Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '66', '23-02-2018'),
(105, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '65', '23-02-2018'),
(106, 1, 4, 'Saheed Rufus', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '77', '23-02-2018'),
(107, 1, 5, 'Dele Williams', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '64', '23-02-2018'),
(108, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '65', '23-02-2018'),
(109, 1, 7, 'Judith Adelanre', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '96', '23-02-2018'),
(110, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '57', '23-02-2018'),
(111, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '96', '23-02-2018'),
(112, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '77', '23-02-2018'),
(113, 1, 11, 'Abraham Zuma', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '56', '23-02-2018'),
(114, 1, 12, 'William David', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '89', '23-02-2018'),
(115, 1, 13, 'James Iwealla', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '55', '23-02-2018'),
(116, 1, 14, 'Jacob welch', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '77', '23-02-2018'),
(117, 1, 15, 'Adejumoke william', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '67', '23-02-2018'),
(118, 1, 16, 'Nnenna Julius', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '98', '23-02-2018'),
(119, 1, 17, 'Seun Atinya', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '34', '23-02-2018'),
(120, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '55', '23-02-2018'),
(121, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '67', '23-02-2018'),
(122, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '77', '23-02-2018'),
(123, 1, 21, 'onyenso Abel', 'Primary 1', 'Mathematics', '2017/2018', '1st', '', '87', '23-02-2018'),
(124, 1, 2, 'Dele Aderanti', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '67', '26-02-2018'),
(125, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '45', '26-02-2018'),
(126, 1, 4, 'Saheed Rufus', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '66', '26-02-2018'),
(127, 1, 5, 'Dele Williams', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '78', '26-02-2018'),
(128, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '90', '26-02-2018'),
(129, 1, 7, 'Judith Adelanre', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(130, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '45', '26-02-2018'),
(131, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '55', '26-02-2018'),
(132, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '77', '26-02-2018'),
(133, 1, 11, 'Abraham Zuma', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '74', '26-02-2018'),
(134, 1, 12, 'William David', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(135, 1, 13, 'James Iwealla', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '55', '26-02-2018'),
(136, 1, 14, 'Jacob welch', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '65', '26-02-2018'),
(137, 1, 15, 'Adejumoke william', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '84', '26-02-2018'),
(138, 1, 16, 'Nnenna Julius', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '64', '26-02-2018'),
(139, 1, 17, 'Seun Atinya', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '69', '26-02-2018'),
(140, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '59', '26-02-2018'),
(141, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '34', '26-02-2018'),
(142, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '66', '26-02-2018'),
(143, 1, 21, 'onyenso Abel', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(144, 1, 2, 'Dele Aderanti', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '47', '26-02-2018'),
(145, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '66', '26-02-2018'),
(146, 1, 4, 'Saheed Rufus', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '43', '26-02-2018'),
(147, 1, 5, 'Dele Williams', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '71', '26-02-2018'),
(148, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '62', '26-02-2018'),
(149, 1, 7, 'Judith Adelanre', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '95', '26-02-2018'),
(150, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '67', '26-02-2018'),
(151, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '75', '26-02-2018'),
(152, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(153, 1, 11, 'Abraham Zuma', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '54', '26-02-2018'),
(154, 1, 12, 'William David', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '99', '26-02-2018'),
(155, 1, 13, 'James Iwealla', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '63', '26-02-2018'),
(156, 1, 14, 'Jacob welch', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '62', '26-02-2018'),
(157, 1, 15, 'Adejumoke william', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '95', '26-02-2018'),
(158, 1, 16, 'Nnenna Julius', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '72', '26-02-2018'),
(159, 1, 17, 'Seun Atinya', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '85', '26-02-2018'),
(160, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '52', '26-02-2018'),
(161, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(162, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '85', '26-02-2018'),
(163, 1, 21, 'onyenso Abel', 'Primary 1', 'Economics', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(164, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '67', '26-02-2018'),
(165, 1, 2, 'Dele Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '63', '26-02-2018'),
(166, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '99', '26-02-2018'),
(167, 1, 4, 'Saheed Rufus', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '43', '26-02-2018'),
(168, 1, 5, 'Dele Williams', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '23', '26-02-2018'),
(169, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '78', '26-02-2018'),
(170, 1, 7, 'Judith Adelanre', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '44', '26-02-2018'),
(171, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '62', '26-02-2018'),
(172, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '33', '26-02-2018'),
(173, 1, 11, 'Abraham Zuma', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(174, 1, 12, 'William David', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '66', '26-02-2018'),
(175, 1, 13, 'James Iwealla', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '95', '26-02-2018'),
(176, 1, 14, 'Jacob welch', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '83', '26-02-2018'),
(177, 1, 15, 'Adejumoke william', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '75', '26-02-2018'),
(178, 1, 16, 'Nnenna Julius', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '99', '26-02-2018'),
(179, 1, 17, 'Seun Atinya', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '74', '26-02-2018'),
(180, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '87', '26-02-2018'),
(181, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '93', '26-02-2018'),
(182, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '63', '26-02-2018'),
(183, 1, 21, 'onyenso Abel', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Exam', '84', '26-02-2018'),
(184, 1, 2, 'Dele Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(185, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '23', '26-02-2018'),
(186, 1, 4, 'Saheed Rufus', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '55', '26-02-2018'),
(187, 1, 5, 'Dele Williams', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '77', '26-02-2018'),
(188, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '44', '26-02-2018'),
(189, 1, 7, 'Judith Adelanre', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '78', '26-02-2018'),
(190, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '65', '26-02-2018'),
(191, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(192, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '64', '26-02-2018'),
(193, 1, 11, 'Abraham Zuma', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '95', '26-02-2018'),
(194, 1, 12, 'William David', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(195, 1, 13, 'James Iwealla', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '56', '26-02-2018'),
(196, 1, 14, 'Jacob welch', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '44', '26-02-2018'),
(197, 1, 15, 'Adejumoke william', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '97', '26-02-2018'),
(198, 1, 16, 'Nnenna Julius', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '75', '26-02-2018'),
(199, 1, 17, 'Seun Atinya', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '45', '26-02-2018'),
(200, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '98', '26-02-2018'),
(201, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '48', '26-02-2018'),
(202, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '67', '26-02-2018'),
(203, 1, 21, 'onyenso Abel', 'Primary 1', 'Mathematics', '2017/2018', '1st', 'Test2', '34', '26-02-2018'),
(204, 1, 2, 'Dele Aderanti', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '55', '26-02-2018'),
(205, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(206, 1, 4, 'Saheed Rufus', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '87', '26-02-2018'),
(207, 1, 5, 'Dele Williams', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '78', '26-02-2018'),
(208, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(209, 1, 7, 'Judith Adelanre', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '88', '26-02-2018'),
(210, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '78', '26-02-2018'),
(211, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '97', '26-02-2018'),
(212, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '76', '26-02-2018'),
(213, 1, 11, 'Abraham Zuma', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '88', '26-02-2018'),
(214, 1, 12, 'William David', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(215, 1, 13, 'James Iwealla', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '98', '26-02-2018'),
(216, 1, 14, 'Jacob welch', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '96', '26-02-2018'),
(217, 1, 15, 'Adejumoke william', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '94', '26-02-2018'),
(218, 1, 16, 'Nnenna Julius', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '93', '26-02-2018'),
(219, 1, 17, 'Seun Atinya', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '90', '26-02-2018'),
(220, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(221, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '95', '26-02-2018'),
(222, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '77', '26-02-2018'),
(223, 1, 21, 'onyenso Abel', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test1', '98', '26-02-2018'),
(224, 1, 2, 'Dele Aderanti', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(225, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '89', '26-02-2018'),
(226, 1, 4, 'Saheed Rufus', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '76', '26-02-2018'),
(227, 1, 5, 'Dele Williams', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '98', '26-02-2018'),
(228, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '76', '26-02-2018'),
(229, 1, 7, 'Judith Adelanre', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(230, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '76', '26-02-2018'),
(231, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(232, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '98', '26-02-2018'),
(233, 1, 11, 'Abraham Zuma', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(234, 1, 12, 'William David', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '98', '26-02-2018'),
(235, 1, 13, 'James Iwealla', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '76', '26-02-2018'),
(236, 1, 14, 'Jacob welch', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '76', '26-02-2018'),
(237, 1, 15, 'Adejumoke william', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '99', '26-02-2018'),
(238, 1, 16, 'Nnenna Julius', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(239, 1, 17, 'Seun Atinya', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '89', '26-02-2018'),
(240, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '67', '26-02-2018'),
(241, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(242, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '98', '26-02-2018'),
(243, 1, 21, 'onyenso Abel', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Test2', '89', '26-02-2018'),
(244, 1, 2, 'Dele Aderanti', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '66', '26-02-2018'),
(245, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '89', '26-02-2018'),
(246, 1, 4, 'Saheed Rufus', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '78', '26-02-2018'),
(247, 1, 5, 'Dele Williams', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '89', '26-02-2018'),
(248, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '78', '26-02-2018'),
(249, 1, 7, 'Judith Adelanre', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '87', '26-02-2018'),
(250, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(251, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(252, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '78', '26-02-2018'),
(253, 1, 11, 'Abraham Zuma', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(254, 1, 12, 'William David', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '78', '26-02-2018'),
(255, 1, 13, 'James Iwealla', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '67', '26-02-2018'),
(256, 1, 14, 'Jacob welch', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(257, 1, 15, 'Adejumoke william', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(258, 1, 16, 'Nnenna Julius', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(259, 1, 17, 'Seun Atinya', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(260, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '87', '26-02-2018'),
(261, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '76', '26-02-2018'),
(262, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(263, 1, 21, 'onyenso Abel', 'Primary 1', 'Yoruba', '2017/2018', '1st', 'Exam', '99', '26-02-2018'),
(264, 1, 2, 'Dele Aderanti', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '100', '26-02-2018'),
(265, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '88', '26-02-2018'),
(266, 1, 4, 'Saheed Rufus', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '66', '26-02-2018'),
(267, 1, 5, 'Dele Williams', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '87', '26-02-2018'),
(268, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '98', '26-02-2018'),
(269, 1, 7, 'Judith Adelanre', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(270, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(271, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '87', '26-02-2018'),
(272, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '98', '26-02-2018'),
(273, 1, 11, 'Abraham Zuma', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '78', '26-02-2018'),
(274, 1, 12, 'William David', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '77', '26-02-2018'),
(275, 1, 13, 'James Iwealla', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '95', '26-02-2018'),
(276, 1, 14, 'Jacob welch', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '67', '26-02-2018'),
(277, 1, 15, 'Adejumoke william', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '77', '26-02-2018'),
(278, 1, 16, 'Nnenna Julius', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '85', '26-02-2018'),
(279, 1, 17, 'Seun Atinya', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '66', '26-02-2018'),
(280, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '88', '26-02-2018'),
(281, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '90', '26-02-2018'),
(282, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '93', '26-02-2018'),
(283, 1, 21, 'onyenso Abel', 'Primary 1', 'Economics', '2017/2018', '1st', 'Test1', '92', '26-02-2018'),
(284, 1, 2, 'Dele Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '88', '26-02-2018'),
(285, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '78', '26-02-2018'),
(286, 1, 4, 'Saheed Rufus', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '90', '26-02-2018'),
(287, 1, 5, 'Dele Williams', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '96', '26-02-2018'),
(288, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '94', '26-02-2018'),
(289, 1, 7, 'Judith Adelanre', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '92', '26-02-2018'),
(290, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '91', '26-02-2018'),
(291, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '75', '26-02-2018'),
(292, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '89', '26-02-2018'),
(293, 1, 11, 'Abraham Zuma', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '77', '26-02-2018'),
(294, 1, 12, 'William David', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '67', '26-02-2018'),
(295, 1, 13, 'James Iwealla', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '89', '26-02-2018'),
(296, 1, 14, 'Jacob welch', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '98', '26-02-2018'),
(297, 1, 15, 'Adejumoke william', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '67', '26-02-2018'),
(298, 1, 16, 'Nnenna Julius', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '88', '26-02-2018'),
(299, 1, 17, 'Seun Atinya', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '98', '26-02-2018'),
(300, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '92', '26-02-2018'),
(301, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '99', '26-02-2018'),
(302, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '79', '26-02-2018'),
(303, 1, 21, 'onyenso Abel', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test1', '78', '26-02-2018'),
(304, 1, 2, 'Dele Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '73', '26-02-2018'),
(305, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '77', '26-02-2018'),
(306, 1, 4, 'Saheed Rufus', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(307, 1, 5, 'Dele Williams', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '88', '26-02-2018'),
(308, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '90', '26-02-2018'),
(309, 1, 7, 'Judith Adelanre', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '84', '26-02-2018'),
(310, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '92', '26-02-2018'),
(311, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '91', '26-02-2018'),
(312, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '93', '26-02-2018'),
(313, 1, 11, 'Abraham Zuma', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '76', '26-02-2018'),
(314, 1, 12, 'William David', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '75', '26-02-2018'),
(315, 1, 13, 'James Iwealla', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '81', '26-02-2018'),
(316, 1, 14, 'Jacob welch', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '87', '26-02-2018'),
(317, 1, 15, 'Adejumoke william', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '92', '26-02-2018'),
(318, 1, 16, 'Nnenna Julius', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '93', '26-02-2018'),
(319, 1, 17, 'Seun Atinya', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '84', '26-02-2018'),
(320, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '83', '26-02-2018'),
(321, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '77', '26-02-2018'),
(322, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '99', '26-02-2018'),
(323, 1, 21, 'onyenso Abel', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Test2', '83', '26-02-2018'),
(324, 1, 2, 'Dele Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '100', '26-02-2018'),
(325, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '100', '26-02-2018'),
(326, 1, 4, 'Saheed Rufus', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '100', '26-02-2018'),
(327, 1, 5, 'Dele Williams', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '45', '26-02-2018'),
(328, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '99', '26-02-2018'),
(329, 1, 7, 'Judith Adelanre', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '34', '26-02-2018'),
(330, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(331, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '67', '26-02-2018'),
(332, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '87', '26-02-2018'),
(333, 1, 11, 'Abraham Zuma', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(334, 1, 12, 'William David', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(335, 1, 13, 'James Iwealla', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '90', '26-02-2018'),
(336, 1, 14, 'Jacob welch', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '76', '26-02-2018'),
(337, 1, 15, 'Adejumoke william', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(338, 1, 16, 'Nnenna Julius', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '45', '26-02-2018'),
(339, 1, 17, 'Seun Atinya', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '90', '26-02-2018'),
(340, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '67', '26-02-2018'),
(341, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '87', '26-02-2018'),
(342, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '98', '26-02-2018'),
(343, 1, 21, 'onyenso Abel', 'Primary 1', 'Fine Art', '2017/2018', '1st', 'Exam', '88', '26-02-2018'),
(344, 1, 2, 'Dele Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '67', '23-04-2018'),
(345, 1, 3, 'Funmilayo Aderanti', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '12', '23-04-2018'),
(346, 1, 4, 'Saheed Rufus', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '28', '23-04-2018'),
(347, 1, 5, 'Dele Williams', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '89', '23-04-2018'),
(348, 1, 6, 'Adebimpe Andrew', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '43', '23-04-2018'),
(349, 1, 7, 'Judith Adelanre', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '33', '23-04-2018'),
(350, 1, 8, 'Adesola Gabriel', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '31', '23-04-2018'),
(351, 1, 9, 'Racheal Nnaemeka', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '33', '23-04-2018'),
(352, 1, 10, 'Ndubisi Isaac', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '55', '23-04-2018'),
(353, 1, 11, 'Abraham Zuma', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '43', '23-04-2018'),
(354, 1, 12, 'William David', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '65', '23-04-2018'),
(355, 1, 13, 'James Iwealla', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '34', '23-04-2018'),
(356, 1, 14, 'Jacob welch', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '31', '23-04-2018'),
(357, 1, 15, 'Adejumoke william', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '66', '23-04-2018'),
(358, 1, 16, 'Nnenna Julius', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '52', '23-04-2018'),
(359, 1, 17, 'Seun Atinya', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '22', '23-04-2018'),
(360, 1, 18, 'Olawumi Irewole', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '33', '23-04-2018'),
(361, 1, 19, 'Chidimma Kelechi', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '45', '23-04-2018'),
(362, 1, 20, 'Tobechukwu Ifeanyichukwu', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '67', '23-04-2018'),
(363, 1, 21, 'onyenso Abel', 'Primary 1', 'Fine Art', '2017/2018', '2nd', 'Exam', '54', '23-04-2018'),
(364, 0, 23, 'Dennis Dowards', 'Primary 1', 'English', '2017/2018', '1st', 'Test1', '67', '24-03-2022'),
(365, 0, 26, 'Adetunji Adeleke', 'Primary 1', 'English', '2017/2018', '1st', 'Test 1', '67', '03-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `phid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `location` varchar(50) NOT NULL,
  `created` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`phid`, `uid`, `location`, `created`) VALUES
(9, 1, 'images/del fig 1.PNG', '03-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `pick_subject_for_student`
--

CREATE TABLE `pick_subject_for_student` (
  `subjectid` bigint(4) NOT NULL,
  `staffid` bigint(4) NOT NULL,
  `studentid` bigint(4) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `classx` varchar(15) NOT NULL,
  `term` varchar(10) NOT NULL,
  `sessionx` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `current_year` varchar(11) NOT NULL,
  `current_term` varchar(7) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolid`, `uid`, `schoolname`, `address`, `website`, `email`, `contact`, `current_year`, `current_term`, `logo`, `period`) VALUES
(1, 1, 'Glory Land Group of Schools', '1, Adedoyin Street, Ajanlekoko Estate, Abeokuta South Lga., Abeokuta, Ogun State.', 'www.ggs.com.ng', 'contact@ggs.com', '08022446908', '2017/2018', '1st', 'images/mobile.png', '06-05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `securityid` bigint(4) NOT NULL,
  `id` bigint(4) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessionx`
--

CREATE TABLE `sessionx` (
  `sessionxid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `sessionx` varchar(9) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessionx`
--

INSERT INTO `sessionx` (`sessionxid`, `uid`, `sessionx`, `period`) VALUES
(1, 1, '2017/2018', '02-05-2018'),
(2, 1, '2018/2019', '02-05-2018'),
(3, 1, '2019/2010', '02-05-2018'),
(4, 1, '2020/2021', '02-05-2018'),
(5, 1, '2021/2022', '02-05-2018'),
(6, 1, '2022/2023', '02-05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `staff_comment`
--

CREATE TABLE `staff_comment` (
  `staff_commentid` bigint(4) NOT NULL,
  `studentid` bigint(4) NOT NULL,
  `staffid` bigint(4) NOT NULL,
  `staff_comment` varchar(40) NOT NULL,
  `classx` varchar(15) NOT NULL,
  `term` varchar(10) NOT NULL,
  `sessionx` varchar(10) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `sid` bigint(4) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `class` varchar(11) NOT NULL,
  `session` varchar(9) NOT NULL,
  `term` varchar(3) NOT NULL,
  `regno` varchar(6) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `degree` varchar(32) NOT NULL,
  `salary` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(15) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `reason` varchar(15) NOT NULL,
  `enrolled` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `uid`, `sid`, `firstname`, `middlename`, `lastname`, `gender`, `dateofbirth`, `class`, `session`, `term`, `regno`, `username`, `password`, `email`, `phone`, `degree`, `salary`, `address`, `type`, `role`, `status`, `reason`, `enrolled`) VALUES
(1, 1, 1, 'Daniel', 'Okechukwu', 'Njoku', 'Male', '06/11/2080', 'Admin', '2017/2018', '1st', 'DN7082', 'njokdan', 'b44f40ca00f427c5bf67389a8c2a4e33', 'njokdan@yahoo.com.sg', '08094451628', 'Phd', '600000', '1 samuel-oke street kuto', 'Staff', 'Admin', 'Active', '', '19-02-2018'),
(2, 1, 1, 'Dele', 'Jide', 'Aderanti', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'DA7218', 'deleaderanti', '2cd2cee29fdd659e74bd27a836347cec', 'deleaderanti@yahoo.com.sg', '08022446908', 'None', '', '5 ona oja kuto abeokuta', 'Non-Staff', 'Student', 'Active', '', '19-02-2018'),
(3, 1, 1, 'Funmilayo', 'Simbi', 'Aderanti', 'Female', '06/19/1984', 'Primary 1', '2017/2018', '1st', 'FA2609', 'funmilayo', 'ee53a3e8f4ae722da792dc9ca2724725', 'funmilayoaderanti@yahoo.com', '080977732423', 'None', '', '1 samuel-oke street kuto', 'Non-Staff', 'Student', 'Active', '', '19-02-2018'),
(4, 1, 1, 'Saheed', 'Olalekan', 'Rufus', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'SR4396', 'saheed', '4d2726f623c300781801cd5a7f41d7dc', 'saheedrufus@yahoo.com', '', 'None', '', '1 samuel-oke street kuto', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(5, 1, 1, 'Dele', 'Olakunle', 'Williams', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'DW5757', 'delewilliams', '8acc1c802fcf401709ee34b4dec76b13', 'delewilliams@yahoo.com', '080977732423', 'None', '', '1 adok ikam', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(6, 1, 1, 'Adebimpe', 'Giwa', 'Andrew', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'AA5780', 'adebimpe', 'f3d71f2881efd9d560296a2e6a25aa95', 'adebimpe@yahoo.com', '08022446908', 'None', '', '34 adelakun street, ogatuntun', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(7, 1, 1, 'Judith', 'Ruth', 'Adelanre', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'JA1045', 'judith', 'a908ba2c8127aca53c44ab71193b96bd', 'judithadelanre@yahoo.com', '08078321928', 'None', '', '1 adok ika', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(8, 1, 1, 'Adesola', 'Iyanu', 'Gabriel', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'AG8745', 'adesola', 'b7b326f816ea45655822bb5e0e11ee49', 'adesolagabriel@yahoo.com', '08097722345', 'None', '', '23 adesola street', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(9, 1, 1, 'Racheal', 'Loveth', 'Nnaemeka', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'RN3405', 'racheal', '9e29658df6210d6cfbca8bb7f1bdd80b', 'rachealloveth@yahoo.com', '08096654567', 'None', '', '21 ramuz street', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(10, 1, 1, 'Ndubisi', 'Maduabuchi', 'Isaac', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'NI6084', 'ndubisi', '98e7efc74428efb8ff4751f072305c1d', 'ndubisi@yahoo.com', '08055678987', 'None', '', '12 ndu street', 'Non-Staff', 'Student', 'Active', '', '20-02-2018'),
(11, 1, 1, 'Abraham', 'Jacob', 'Zuma', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'AZ4242', 'abraham', '248706c023957db08d14f39749879207', 'abrahamzuma@yahoo.com', '08056789867', 'None', '', '21 ramuz street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(12, 1, 1, 'William', 'Timothy', 'David', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'WD2210', 'william', 'fd820a2b4461bddd116c1518bc4b0f77', 'william@yahoo.com', '08078865755', '', '', '12 ndu street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(13, 1, 1, 'James', 'Emeka', 'Iwealla', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'JI9764', 'jamesiwealla', '6fc2467bf6b9f2ce1c665e618e03774e', 'jamesiwealla@yahoo.com', '07055522243', '', '', '43 adugbe street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(14, 1, 1, 'Jacob', 'sunday', 'welch', 'Male', '02/14/2018', 'Primary 1', '2017/2018', '1st', 'Jw0269', 'jacobwelch', '4ad6616217a96113dcce01e0737a5f79', 'jacobwelch@yahoo.com', '08067895644', '', '', '33 adigun street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(15, 1, 1, 'Adejumoke', 'Racheal', 'william', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'Aw5939', 'adejumoke', 'be6f3b877c073e451130c70263ebf876', 'adejumoke@yahoo.com', '08156654343', '', '', '50 bobo street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(16, 1, 1, 'Nnenna', 'Ruth', 'Julius', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'NJ2388', 'nnenna', '934c8db1c16241c42347489b2a59bafa', 'nnennajulius@yahoo.com', '08067895644', 'None', '', '22 iyanu street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(17, 1, 1, 'Seun', 'Peace', 'Atinya', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'SA9904', 'seunatinya', '7aaa414bd71a4b0106fc04961de818b3', 'seunatinya@gmail.com', '08056453453', '', '', '45 dugbe', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(18, 1, 1, 'Olawumi', 'magaret', 'Irewole', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'OI1043', 'olawumi', 'f77299ddb2f8913cd09f1ee03095882f', 'olawumimagaret@gmail.com', '09098765467', 'None', '', '66 bommy avenue', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(19, 1, 1, 'Chidimma', 'Ruth', 'Kelechi', 'Female', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'CK0672', 'chidimma', '69ea9dc412325aca669e8d55341d2d4d', 'chidimmakelechi@hotmail.com', '07053667788', '', '', '77 bamidele street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(20, 1, 1, 'Tobechukwu', 'matthew', 'Ifeanyichukwu', 'Male', '02/13/2018', 'Primary 1', '2017/2018', '1st', 'TI1455', 'tobechukwu', 'cdb9cfe6c31e4722ee58d5d9aa193e0b', 'tobechukwu@hotmail.com', '08097655788', '', '', '90 rumudara avenue', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(21, 1, 1, 'onyenso', 'felix', 'Abel', 'Male', '02/20/2018', 'Primary 1', '2017/2018', '1st', 'oA5838', 'onyenso', '4d1758bfdcc1f59e39b4c19b54296b2b', 'onyensoabel@gmail.com', '08067564534', 'None', '', '55 olateju street', 'Non-Staff', 'Student', 'Active', '', '21-02-2018'),
(22, 1, 1, 'Peter', 'Eneche', 'Andrew', 'Male', '05/21/1990', 'Primary 1', '2017/2018', '1st', 'PA8658', 'peter', '51dc30ddc473d43a6011e9ebba6ca770', 'peter@yahoo.com', '08067564534', 'None', '', '22 iyanu street', 'Non-Staff', 'Student', 'Active', '', '01-05-2018'),
(23, 1, 1, 'Dennis', 'dominion', 'Dowards', 'Male', '05/28/1990', 'Primary 1', '2017/2018', '1st', 'DD2141', 'dennis', '7daacea5f373b4c1c054158b126d317f', 'dennis@yahoo.com', '08097722345', 'None', '', '12 ndu street', 'Non-Staff', 'Student', 'Active', '', '01-05-2018'),
(24, 1, 1, 'Alonge', 'Suorah', 'sechem', 'Male', '05/21/2018', 'Primary 1', '2017/2018', '1st', 'As2890', 'alonge', '1823ee1744f0d4ed29d2a8d7a6d7f14a', 'alonge@yahoo.com', '08097655788', 'None', '', '23 adesola street', 'Non-Staff', 'Student', 'Active', '', '01-05-2018'),
(25, 1, 1, 'Alex', 'Okechukwu', 'Aderanti', 'Male', '05/21/2018', 'Primary 1', '2017/2018', '1st', 'AA1471', 'alexoke', '6fe7f24747dd98b6c113460697d78c32', 'alexoke@yahoo.com', '08067895644', 'None', '', '1 adok ikam', 'Non-Staff', 'Student', 'Active', '', '01-05-2018'),
(26, 1, 1, 'Adetunji', 'Adesola', 'Adeleke', 'Male', '02/09/2010', 'Primary 1', '2021/2022', '3rd', 'AA1509', 'adeade', '699460cfb115dcac4351d1b6d998921e', 'adeade@gmail.com', '07053762627', 'None', '', '26, Ajasa Street, Off King Geod', 'Non-Staff', 'Student', 'Active', '', '03-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `uid`, `subject`, `period`) VALUES
(1, 1, 'English', '01-05-2018'),
(2, 1, 'Mathematics', '01-05-2018'),
(3, 1, 'Economics', '01-05-2018'),
(4, 1, 'Yoruba', '01-05-2018'),
(5, 1, 'Fine Art', '01-05-2018'),
(6, 1, 'Agriculture', '04-05-2018'),
(7, 1, 'Physics', '04-05-2018'),
(8, 1, 'History', '05-05-2018'),
(9, 1, 'Geography', '05-05-2018');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `termid` bigint(4) NOT NULL,
  `uid` bigint(4) NOT NULL,
  `term` varchar(40) NOT NULL,
  `period` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`termid`, `uid`, `term`, `period`) VALUES
(1, 1, '1st', '02-05-2018'),
(2, 1, '2nd', '02-05-2018'),
(3, 1, '3rd', '02-05-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignschool`
--
ALTER TABLE `assignschool`
  ADD PRIMARY KEY (`assignid`);

--
-- Indexes for table `assign_subject_to_student`
--
ALTER TABLE `assign_subject_to_student`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `classx`
--
ALTER TABLE `classx`
  ADD PRIMARY KEY (`classxid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`markid`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`phid`);

--
-- Indexes for table `pick_subject_for_student`
--
ALTER TABLE `pick_subject_for_student`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`securityid`);

--
-- Indexes for table `sessionx`
--
ALTER TABLE `sessionx`
  ADD PRIMARY KEY (`sessionxid`);

--
-- Indexes for table `staff_comment`
--
ALTER TABLE `staff_comment`
  ADD PRIMARY KEY (`staff_commentid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`termid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignschool`
--
ALTER TABLE `assignschool`
  MODIFY `assignid` bigint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_subject_to_student`
--
ALTER TABLE `assign_subject_to_student`
  MODIFY `subjectid` bigint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classx`
--
ALTER TABLE `classx`
  MODIFY `classxid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `markid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `phid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pick_subject_for_student`
--
ALTER TABLE `pick_subject_for_student`
  MODIFY `subjectid` bigint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `securityid` bigint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessionx`
--
ALTER TABLE `sessionx`
  MODIFY `sessionxid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_comment`
--
ALTER TABLE `staff_comment`
  MODIFY `staff_commentid` bigint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `termid` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 01:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp_data`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `User_log` (IN `Uname` VARCHAR(50), IN `Upass` VARCHAR(50))  READS SQL DATA
SELECT * FROM usertable WHERE U_name=Uname AND U_pass=Upass$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `8th`
--

CREATE TABLE `8th` (
  `C_id` int(11) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Program` varchar(50) NOT NULL,
  `T_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8th`
--

INSERT INTO `8th` (`C_id`, `Subject`, `Semester`, `Program`, `T_id`) VALUES
(1, 'Enterpeniorship', 8, 'BSIT', 1),
(2, 'Network Security', 8, 'BSIT', 2),
(3, 'PP', 8, 'BSIT', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `Id` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `A_id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `A_file` varchar(150) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `sub_date` date NOT NULL,
  `program` varchar(50) NOT NULL,
  `Marks` int(11) NOT NULL,
  `T_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `File name` varchar(30) NOT NULL,
  `subject_name` varchar(150) NOT NULL,
  `tname` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `semester` varchar(120) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`File name`, `subject_name`, `tname`, `date`, `semester`, `file`) VALUES
('shabab', 'Oop', 'hamza', '2017-05-12', '1', 'upload/1494591283.pdf'),
('Assignment', 'Asp', 'Sir Waqas', '2017-05-12', '2', 'upload/1494592775.ppt'),
('Shabab Ahmad', '', 'hamza', '2017-05-12', '5', 'upload/1494593176.sql'),
('Ahmad', '', 'Sir Waqas', '2017-05-12', '4', 'upload/1494593246.html'),
('Ahmad', 'Web', 'Sir Waqas', '2017-05-12', '8', 'upload/1494593623.rar'),
('sjaja', 'Web', 'hamza', '2017-05-12', '3', 'upload/1494594664.txt'),
('Ahmad', 'Oop', 'Sir Waqas', '2017-05-12', '5', 'upload/1494594683.docx');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `L_id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `C_hour` varchar(20) NOT NULL,
  `C_file` varchar(150) NOT NULL,
  `program` varchar(50) NOT NULL,
  `Semester` int(11) NOT NULL,
  `T_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_id` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `P_no` varchar(20) NOT NULL,
  `R_no` varchar(20) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Program` varchar(20) NOT NULL,
  `U_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_id`, `F_name`, `L_name`, `E_mail`, `Address`, `P_no`, `R_no`, `Semester`, `Program`, `U_id`) VALUES
(1, 'Ali', 'Arsalan Haider', 'ali@gmail.com', 'chakwal', '0336-5113636', '13F-54', 7, 'BSIT', 1),
(2, 'Saqib', 'Hassan', 'saqib@gmail.com', 'KRL Kahuta', '03445449363', '13F-5`', 8, 'BSIT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_id` int(11) NOT NULL,
  `F_name` varchar(50) NOT NULL,
  `L_name` varchar(50) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `P_no` varchar(20) NOT NULL,
  `Des` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `U_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_id`, `F_name`, `L_name`, `E_mail`, `P_no`, `Des`, `Address`, `U_id`) VALUES
(1, 'Sohaib', 'Saleem', 'sohaib@gmail.com', '03335181933', 'Lecturar', 'KICSIT KRL', 1),
(2, 'Muhammad ', 'Waqas', 'waqas@gmail.com', '03335442332', 'Asst. Profer', 'KRL Kahuta', 2);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Days` varchar(10) DEFAULT NULL,
  `1st_Lecture` varchar(30) DEFAULT NULL,
  `2nd_Lecture` varchar(30) DEFAULT NULL,
  `3rd_Lecture` varchar(30) NOT NULL,
  `4th_Lecture` varchar(30) NOT NULL,
  `5th_Lecture` varchar(30) NOT NULL,
  `6th_Lecture` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Days`, `1st_Lecture`, `2nd_Lecture`, `3rd_Lecture`, `4th_Lecture`, `5th_Lecture`, `6th_Lecture`) VALUES
('Monday', 'Free', 'Free', 'NS', 'NS', 'NS', 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `U_id` int(11) NOT NULL,
  `U_name` varchar(50) DEFAULT NULL,
  `U_pass` varchar(50) DEFAULT NULL,
  `U_type` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`U_id`, `U_name`, `U_pass`, `U_type`) VALUES
(1, 'ali', '123', 'Student'),
(2, 'saqib ', '112', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `8th`
--
ALTER TABLE `8th`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `E_mail` (`E_mail`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_id`),
  ADD UNIQUE KEY `E_mail` (`E_mail`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_id`),
  ADD UNIQUE KEY `E_mail` (`E_mail`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`U_id`),
  ADD UNIQUE KEY `U_name` (`U_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `8th`
--
ALTER TABLE `8th`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `L_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

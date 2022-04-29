-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 02:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `emailAddress` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tbl`
--

CREATE TABLE `branch_tbl` (
  `id` int(10) NOT NULL,
  `branchName` varchar(50) DEFAULT NULL,
  `branchLocation` varchar(50) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_tbl`
--

INSERT INTO `branch_tbl` (`id`, `branchName`, `branchLocation`, `dateCreated`) VALUES
(4, 'Counelling Branch B', 'Mainland', '2022-04-14 16:14:03'),
(5, 'Counelling Branch A', 'Victoria Island', '2022-04-14 16:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `scheduletype_tbl`
--

CREATE TABLE `scheduletype_tbl` (
  `id` int(10) NOT NULL,
  `typeName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduletype_tbl`
--

INSERT INTO `scheduletype_tbl` (`id`, `typeName`) VALUES
(1, 'Physical'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Table structure for table `stages_tbl`
--

CREATE TABLE `stages_tbl` (
  `id` int(10) NOT NULL,
  `stageNo` varchar(10) DEFAULT NULL,
  `stageName` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `objectives` text DEFAULT NULL,
  `material` text DEFAULT NULL,
  `videoLink` text DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stages_tbl`
--

INSERT INTO `stages_tbl` (`id`, `stageNo`, `stageName`, `description`, `remarks`, `objectives`, `material`, `videoLink`, `dateCreated`) VALUES
(1, '1', 'Introduction to Career Development', 'Introduces candidates to what career is all about', 'Okay', 'Understanding what career is all about', NULL, NULL, '2022-04-14 16:56:38'),
(3, '2', 'Importance of Career Counselling', 'Enlighten candidates on the importance of Career Counselling', 'Okay', 'Ability to know the importance of Career Counselling, Choosing the right career', NULL, NULL, '2022-04-14 17:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `stagetracker_tbl`
--

CREATE TABLE `stagetracker_tbl` (
  `id` int(10) NOT NULL,
  `userId` varchar(20) DEFAULT NULL,
  `stageId` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dateStarted` varchar(255) DEFAULT NULL,
  `dateCompleted` varchar(50) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `dateCreated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stagetracker_tbl`
--

INSERT INTO `stagetracker_tbl` (`id`, `userId`, `stageId`, `status`, `dateStarted`, `dateCompleted`, `remark`, `dateCreated`) VALUES
(1, '4', '1', 'Completed', '2022-04-15 12:06:32', '2022-04-15 15:47:31', 'Satisfactory', '2022-04-15 12:06:32'),
(2, '3', '1', 'Completed', '2022-04-15 12:50:53', '2022-04-15 15:28:36', 'Satisfactory', '2022-04-15 12:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `substagetracker_tbl`
--

CREATE TABLE `substagetracker_tbl` (
  `id` int(10) NOT NULL,
  `userId` varchar(20) DEFAULT NULL,
  `stageId` varchar(20) DEFAULT NULL,
  `subStageId` varchar(20) DEFAULT NULL,
  `venue` text DEFAULT NULL,
  `scheduleDate` varchar(50) DEFAULT NULL,
  `fromTime` varchar(20) DEFAULT NULL,
  `toTime` varchar(20) DEFAULT NULL,
  `videoLink` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dateStarted` varchar(255) NOT NULL,
  `dateCompleted` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `dateCreated` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `substagetracker_tbl`
--

INSERT INTO `substagetracker_tbl` (`id`, `userId`, `stageId`, `subStageId`, `venue`, `scheduleDate`, `fromTime`, `toTime`, `videoLink`, `status`, `dateStarted`, `dateCompleted`, `remark`, `dateCreated`) VALUES
(4, '4', '1', '1', 'Meeting link', '2022-04-15', '15:00', '15:01', 'Video link', 'Completed', '2022-04-15 13:59:39', '2022-04-15 15:47:56', 'Satisfactory', '2022-04-15 13:59:39'),
(6, '3', '1', '1', 'Counelling Branch A', '2022-04-20', '17:09', '16:09', 'Video link', 'InProgress', '2022-04-15 14:09:45', '', '', '2022-04-15 14:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `substage_tbl`
--

CREATE TABLE `substage_tbl` (
  `id` int(10) NOT NULL,
  `stageId` varchar(10) DEFAULT NULL,
  `subStageNo` varchar(10) DEFAULT NULL,
  `subStageName` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `objectives` text DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `substage_tbl`
--

INSERT INTO `substage_tbl` (`id`, `stageId`, `subStageNo`, `subStageName`, `description`, `remark`, `objectives`, `dateCreated`) VALUES
(1, '1', '1', 'What is a Career', 'Defines and understand what a career is.', 'Okay', 'Defines and understand what a career is, Understand the meaning of a Career', '2022-04-14 17:29:09'),
(2, '1', '2', 'Different Types of Careers', 'Different Types of Careers', 'Okay', 'Different Types of Careers', '2022-04-14 17:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(10) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `emailAddress` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `qualificationGrade` varchar(50) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `scheduleTypeId` varchar(10) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `firstName`, `lastName`, `emailAddress`, `password`, `phoneNo`, `address`, `dob`, `gender`, `hobbies`, `course`, `qualification`, `qualificationGrade`, `skills`, `scheduleTypeId`, `dateCreated`) VALUES
(3, 'Ajose', 'Sewanu', 'Ajose22sewanu@gmail.com', '11111', '08137737285', '24, Iseyin Street off Agunlejika Cele IjeshaTedo Surulere Lagos State.', '2022-04-26', 'Male', 'Cooking', 'Computer Science', 'HND', 'Distinction 3.99', 'Drawing, Gaming', '1', '2022-04-14 23:51:20'),
(4, 'Adewale', 'Omoba', 'Adewaleomoba33@yahoo.com', '11111', '09099889930', '24, Iseyin Street off Agunlejika Surulere Lagos State.', '2022-04-28', 'Male', 'Travelling', 'Bus Adm', 'ND', 'Lower Credit', 'Reading', '2', '2022-04-14 23:52:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduletype_tbl`
--
ALTER TABLE `scheduletype_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages_tbl`
--
ALTER TABLE `stages_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stagetracker_tbl`
--
ALTER TABLE `stagetracker_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `substagetracker_tbl`
--
ALTER TABLE `substagetracker_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `substage_tbl`
--
ALTER TABLE `substage_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scheduletype_tbl`
--
ALTER TABLE `scheduletype_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stages_tbl`
--
ALTER TABLE `stages_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stagetracker_tbl`
--
ALTER TABLE `stagetracker_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `substagetracker_tbl`
--
ALTER TABLE `substagetracker_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `substage_tbl`
--
ALTER TABLE `substage_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

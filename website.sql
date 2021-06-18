-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2021 at 08:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(3) NOT NULL,
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `First Name`, `Last Name`, `Email`, `Message`) VALUES
(9, 'Shreya', 'Tiwari', 'abcd@gmailcom', 'sfffffff'),
(13, 'Shreya', 'Tiwari', 'abcd2@gmail.com', 'fwertgrey');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `ExerciseID` int(4) NOT NULL,
  `LessonChapter` varchar(256) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `OA` varchar(256) NOT NULL,
  `OB` varchar(256) NOT NULL,
  `OC` varchar(256) NOT NULL,
  `OD` varchar(256) NOT NULL,
  `Answer` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`ExerciseID`, `LessonChapter`, `Question`, `OA`, `OB`, `OC`, `OD`, `Answer`) VALUES
(10, 'Basic Numbers', 'What comes after 6?', ' 3', '7', '8', ' 9', '7'),
(11, 'Basic Numbers', 'What comes after 9?', '10', '1', '8', '6', '10');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `UName` text NOT NULL,
  `Email` varchar(256) NOT NULL,
  `RateMsg` text NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `Timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `UName`, `Email`, `RateMsg`, `Comment`, `Timestamp`) VALUES
(69, 'Shreya', 'abcd2@gmail.com', 'Satisfied', 'sdsf', '2021-06-18'),
(70, 'Vini', 'def@gmail.com', 'Very Good', 'Nice', '2021-06-18'),
(71, 'Sam Doe', 'xyz@gmail.com', 'Awesome', 'Excellent', '2021-06-18'),
(72, 'Sam ', 'xyz2@gmail.com', 'Good', 'Good', '2021-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `LessonID` int(4) NOT NULL,
  `LessonChapter` varchar(256) NOT NULL,
  `LessonTitle` varchar(255) NOT NULL,
  `FileLocation` text NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`LessonID`, `LessonChapter`, `LessonTitle`, `FileLocation`, `Category`) VALUES
(15, '1', 'Basic Numbers', 'videos/basic1.mp4', 'Video'),
(18, '2', 'Basic2', 'videos/basic2.mp4', 'Video'),
(23, '3', 'Basic3', 'videos/basic3.mp4', 'Video'),
(24, '4', 'Basic4', 'videos/basic5.mp4', 'Video'),
(25, '5', 'Basi5', 'videos/basic6.mp4', 'Video'),
(26, '6', 'Basic6', 'videos/basic6.mp4', 'Video');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(3) NOT NULL,
  `UName` text NOT NULL,
  `Gender` text NOT NULL,
  `Email` varchar(500) NOT NULL,
  `UPassword` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `UName`, `Gender`, `Email`, `UPassword`) VALUES
(29, 'Shreya', 'Female', 'abcd2@gmail.com', '123456'),
(30, 'Sam', 'Male', 'xyz2@gmail.com', 'sam456'),
(31, 'Sam Doe', 'Male', 'xyz@gmail.com', 'shreya'),
(32, 'Vini', 'Male', 'def@gmail.com', 'shreya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(3) NOT NULL,
  `UName` text NOT NULL,
  `Email` varchar(500) NOT NULL,
  `UPass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UName`, `Email`, `UPass`) VALUES
(13, 'Shreya', 'impmailhere@gmail.com', 789456),
(14, 'Vibha', 'abcd@gmail.com', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`ExerciseID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`LessonID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `ExerciseID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `LessonID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

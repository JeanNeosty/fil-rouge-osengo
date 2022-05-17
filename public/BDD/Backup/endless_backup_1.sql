-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endless`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentsession`
--

CREATE TABLE IF NOT EXISTS `currentsession` (
  `idSession` int(11) NOT NULL,
  `nameSession` varchar(20) NOT NULL,
  `StepIdSession` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE IF NOT EXISTS `steps` (
  `idSteps` int(11) NOT NULL,
  `Step1` int(11) NOT NULL,
  `Step2` int(11) NOT NULL,
  `Step3` int(11) NOT NULL,
  `Step4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usercreation`
--

CREATE TABLE IF NOT EXISTS `usercreation` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(80) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currentsession`
--
ALTER TABLE `currentsession`
  ADD PRIMARY KEY (`idSession`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`idSteps`);

--
-- Indexes for table `usercreation`
--
ALTER TABLE `usercreation`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currentsession`
--
ALTER TABLE `currentsession`
  MODIFY `idSession` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercreation`
--
ALTER TABLE `usercreation`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

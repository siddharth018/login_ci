-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2019 at 01:54 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `citestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `UserDetails`
--

CREATE TABLE `UserDetails` (
  `Id` int(11) NOT NULL,
  `Name` varchar(140) NOT NULL,
  `Email` varchar(140) NOT NULL,
  `Mobile` varchar(256) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `UserDetails`
--

INSERT INTO `UserDetails` (`Id`, `Name`, `Email`, `Mobile`, `Gender`, `Status`) VALUES
(1, 'name', 'nema@mial.com', '788777700', 'Male', 1),
(2, 'name', 'name@mail.cm', '87878787', 'Male', 1),
(3, 'name', 'nae@mail.com', '77778878778', 'Male', 1),
(4, 'anndn', 'ndnnd@mail.cnjdnnj', '77878787878', 'Male', 0),
(5, 'name', 'name@mail.com', '676767676767', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Pwd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Id`, `Name`, `Email`, `Pwd`) VALUES
(1, 'name', 'siddharthshukla089@gmail.com', 'admin18!@#$%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `UserDetails`
--
ALTER TABLE `UserDetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `UserDetails`
--
ALTER TABLE `UserDetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

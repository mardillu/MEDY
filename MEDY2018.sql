-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2017 at 10:55 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MEDY2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `DoctorID` int(11) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `HospitalID` int(11) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Speciality` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `HospitalID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `DoctorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Medication`
--

CREATE TABLE `Medication` (
  `PatientID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `HospitalID` int(11) NOT NULL,
  `Prescription` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `PatientID` int(11) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Lastname` int(200) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Height` double NOT NULL,
  `Weight` double NOT NULL,
  `BMI` varchar(100) NOT NULL,
  `BloodType` varchar(0) NOT NULL,
  `BloodPressure` double NOT NULL,
  `HospitalID` int(11) NOT NULL,
  `Genotype` varchar(100) NOT NULL,
  `Malaria` varchar(100) NOT NULL,
  `Typhoid` varchar(100) NOT NULL,
  `SugarLevel` varchar(50) NOT NULL,
  `Remarks` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `Hospital`
--
ALTER TABLE `Hospital`
  ADD PRIMARY KEY (`HospitalID`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Hospital`
--
ALTER TABLE `Hospital`
  MODIFY `HospitalID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

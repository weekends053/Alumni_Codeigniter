-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2020 at 08:51 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_educational`
--

CREATE TABLE `data_educational` (
  `Std_ID` int(11) NOT NULL,
  `Name_LastName` varchar(100) NOT NULL,
  `End_Year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_educational`
--

INSERT INTO `data_educational` (`Std_ID`, `Name_LastName`, `End_Year`) VALUES
(614259040, 'ธนายุทธ สามสังข์', '2562'),
(614259053, 'วรวุฒิ บุญศรี', '2561');

-- --------------------------------------------------------

--
-- Table structure for table `data_work`
--

CREATE TABLE `data_work` (
  `Std_ID` int(11) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Company_Address` varchar(100) NOT NULL,
  `Profession` varchar(50) NOT NULL,
  `Rank` varchar(50) NOT NULL,
  `Company_Tel` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_work`
--

INSERT INTO `data_work` (`Std_ID`, `Company_Name`, `Company_Address`, `Profession`, `Rank`, `Company_Tel`) VALUES
(614259040, 'True Touch', 'asdsdsad', 'ขายของ', 'ผู้จัดการ', '04259053'),
(614259053, 'True Touch', 'milk', 'ขายของ', 'ผู้จัดการ', '04259053');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Std_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Re_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Std_ID`, `Username`, `Password`, `Re_Password`) VALUES
(614259040, '614259040', '123456', '123456'),
(614259053, '614259053', '0801101892', '0801101892');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Std_ID` int(11) NOT NULL,
  `Name_LastName` varchar(100) NOT NULL,
  `ID_Card` char(13) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tel` char(10) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Facebook` varchar(50) NOT NULL,
  `Instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Std_ID`, `Name_LastName`, `ID_Card`, `Date_Of_Birth`, `Sex`, `Address`, `Tel`, `E_mail`, `Facebook`, `Instagram`) VALUES
(614259040, 'ธนายุทธ สามสังข์', '1739900091026', '2020-10-15', 'ชาย', 'asdfassd', '0955896970', '614259053@webmail.npru.ac.th', 'Thanayut Samsing', 'imbillyz'),
(614259053, 'วรวุฒิ บุญศรี', '1739900091026', '2020-10-19', 'ชาย', 'milk', '0955896970', '614259053@webmail.npru.ac.th', 'สะ\'บิว', 'imbillyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_educational`
--
ALTER TABLE `data_educational`
  ADD PRIMARY KEY (`Std_ID`);

--
-- Indexes for table `data_work`
--
ALTER TABLE `data_work`
  ADD PRIMARY KEY (`Std_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Std_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Std_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Std_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614259054;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Std_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614259054;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_educational`
--
ALTER TABLE `data_educational`
  ADD CONSTRAINT `data_educational_ibfk_1` FOREIGN KEY (`Std_ID`) REFERENCES `register` (`Std_ID`);

--
-- Constraints for table `data_work`
--
ALTER TABLE `data_work`
  ADD CONSTRAINT `data_work_ibfk_1` FOREIGN KEY (`Std_ID`) REFERENCES `register` (`Std_ID`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Std_ID`) REFERENCES `register` (`Std_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

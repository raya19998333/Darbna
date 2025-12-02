-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26 فبراير 2024 الساعة 19:29
-- إصدار الخادم: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darbna`
--

-- --------------------------------------------------------

--
-- بنية الجدول `owner_info`
--

DROP TABLE IF EXISTS `owner_info`;
CREATE TABLE IF NOT EXISTS `owner_info` (
  `OwnerID` varchar(8) NOT NULL,
  `OName` varchar(20) NOT NULL,
  `Address` varchar(18) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Phone` int(8) NOT NULL,
  `Age` int(3) NOT NULL,
  `Birthday` date NOT NULL,
  `Licensenumber` int(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `RePassword` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `passenger_info`
--

DROP TABLE IF EXISTS `passenger_info`;
CREATE TABLE IF NOT EXISTS `passenger_info` (
  `PassengerID` varchar(8) NOT NULL,
  `PName` varchar(20) NOT NULL,
  `Phone` int(8) NOT NULL,
  `address` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(9) NOT NULL,
  `Age` int(3) NOT NULL,
  `CivilNo` int(12) NOT NULL,
  `Nationality` varchar(25) NOT NULL,
  `Birthday` date NOT NULL,
  `job` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `RePassword` varchar(8) NOT NULL,
  PRIMARY KEY (`PassengerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `passenger_info`
--

INSERT INTO `passenger_info` (`PassengerID`, `PName`, `Phone`, `address`, `Email`, `Gender`, `Age`, `CivilNo`, `Nationality`, `Birthday`, `job`, `Password`, `RePassword`) VALUES
('raya1999', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya1997', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya195', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya90', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya66', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya334', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('5fff566', '5fvsdgvsx', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 22998312, 'Omani', '2024-01-28', 'Student', 'raya1999', 'raya1999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

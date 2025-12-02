-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04 مارس 2024 الساعة 19:47
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
-- بنية الجدول `companytransport_info`
--

DROP TABLE IF EXISTS `companytransport_info`;
CREATE TABLE IF NOT EXISTS `companytransport_info` (
  `CompanyID` varchar(13) NOT NULL,
  `Company_Name` varchar(30) NOT NULL,
  `Phone` int(8) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Fax` int(12) NOT NULL,
  `Transport_Number` int(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `RePassword` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `companytransport_info`
--

INSERT INTO `companytransport_info` (`CompanyID`, `Company_Name`, `Phone`, `Address`, `Fax`, `Transport_Number`, `Email`, `Password`, `RePassword`) VALUES
('4e3war', 'fsedrfs', 9232, 'rfws', 312312, 92424311, '', 'raya1999', 'raya1999'),
('4e3war', 'fsedrfs', 9232, 'rfws', 312312, 92424311, '', 'raya1999', 'raya1999'),
('4e3war', 'fsedrfs', 9232, 'rfws', 92424311, 312312, '', 'raya1999', 'raya1999'),
('4e3war', 'fsedrfs', 9232, 'rfws', 92424311, 312312, '', 'raya1999', 'raya1999'),
('4e3war', 'fsedrfs', 9232, 'rfws', 92424311, 312312, '', 'raya1999', 'raya1999'),
('4e3war', 'fsedrfs', 92424311, 'ererf', 2322, 92424311, '41s184@sct.edu.om', 'raya1999', 'raya1999'),
('raay222', 'fsedrfs', 92424311, 'ererf', 2322, 92424311, '41s184@sct.edu.om', 'raya1999', 'raya1999'),
('rr', '092424311', 92424311, 'Mirbat', 444, 4444, '41S184@SCT.EDU.OM', 'raya1999', 'raya1999');

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

--
-- إرجاع أو استيراد بيانات الجدول `owner_info`
--

INSERT INTO `owner_info` (`OwnerID`, `OName`, `Address`, `Email`, `Gender`, `Phone`, `Age`, `Birthday`, `Licensenumber`, `Password`, `RePassword`) VALUES
('rwr4', 'raya', 'ererf', '41s184@sct.edu.om', 'Female', 9999, 23, '2024-02-05', 7777, 'raya1999', 'raya1999'),
('rw0000', 'raya', 'ererf', '41s184@sct.edu.om', 'Male', 92424311, 12, '2024-02-15', 92424311, 'raya1999', 'raya1999');

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
('5fff50', '5fvsdgvsx', 92424311, 'Mirbat', '41s184@sct.edu.om', 'Male', 23, 92424311, 'Omani', '2024-02-14', 'Student', 'raya1999', 'raya1999'),
('raya1999', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya1997', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya195', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya90', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya66', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('raya334', '', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 9924311, 'Omani', '2024-02-28', 'Student', 'raya1999', 'raya1999'),
('5fff566', '5fvsdgvsx', 92424311, 'mirbat', '41s184@sct.edu.om', 'Male', 23, 22998312, 'Omani', '2024-01-28', 'Student', 'raya1999', 'raya1999'),
('5fff508', '5fvsdgvsx', 92424311, 'Mirbat', '41s184@sct.edu.om', 'Male', 23, 92424311, 'Omani', '2024-02-14', 'Student', 'raya1999', 'raya1999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

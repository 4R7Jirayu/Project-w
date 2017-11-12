-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 03:59 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `bockschedule`
--

CREATE TABLE `bockschedule` (
  `ID_Time` int(11) NOT NULL,
  `TimeS` time NOT NULL,
  `Bck1` varchar(10) NOT NULL,
  `Bck2` varchar(10) NOT NULL,
  `Bck3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bockschedule`
--

INSERT INTO `bockschedule` (`ID_Time`, `TimeS`, `Bck1`, `Bck2`, `Bck3`) VALUES
(1, '09:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '10:00:00', 'ไม่ว่าง', 'ว่าง', 'ว่าง'),
(5, '11:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(7, '12:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(9, '13:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(11, '14:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(13, '15:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(15, '16:00:00', 'ว่าง', 'ว่าง', 'ว่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bockschedule`
--
ALTER TABLE `bockschedule`
  ADD PRIMARY KEY (`ID_Time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

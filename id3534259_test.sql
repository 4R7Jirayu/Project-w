-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 10:29 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3534259_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `asd`
--

CREATE TABLE IF NOT EXISTS `asd` (
  `ID_CUS` int(20) NOT NULL,
  `NAME_CUS` varchar(20) NOT NULL,
  `PRICE_CUS` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asd`
--

INSERT INTO `asd` (`ID_CUS`, `NAME_CUS`, `PRICE_CUS`) VALUES
(1, 'asdasd', '100');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `ID_Bill` int(11) NOT NULL,
  `Cus_User` varchar(20) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Order_Name` varchar(30) NOT NULL,
  `Order_Time` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`ID_Bill`, `Cus_User`, `Total_Price`, `Order_Name`, `Order_Time`) VALUES
(16, 'gun', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(17, 'gun', 2000, 'เคลือบสี', '11:30:00'),
(19, 'test', 100, 'ปะยาง', '14:30:00'),
(20, 'test', 100, 'ปะยาง', '14:30:00'),
(21, 'gun1234', 120, 'ดูดฝุ่น', '09:30:00'),
(22, 'gun1234', 120, 'ดูดฝุ่น', '09:30:00'),
(23, 'gun1234', 120, 'ดูดฝุ่น', '09:30:00'),
(24, 'gun1234', 120, 'ดูดฝุ่น', '09:30:00'),
(25, 'gun1234', 120, 'ดูดฝุ่น', '09:30:00'),
(26, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(27, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(28, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(29, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(30, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(31, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(32, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(33, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(34, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(35, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(36, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(37, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(38, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00'),
(39, 'gun1234', 0, '', '09:30:00'),
(40, 'gun1234', 100, 'ปะยาง', '09:30:00'),
(41, 'gun1234', 100, 'ปะยาง', '09:30:00'),
(42, 'gun1234', 300, 'เปลี่ยนน้ำมันเครื่อง', '09:30:00'),
(43, 'gun1234', 2000, 'เคลือบสี', '09:30:00'),
(44, 'gun1234', 100, 'ปะยาง', '09:30:00'),
(45, 'gun1234', 1000, 'เปลี่ยนแบตเตอรี่', '09:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE IF NOT EXISTS `bill_detail` (
  `No` int(11) NOT NULL,
  `ID_Order` varchar(20) NOT NULL,
  `Car_id` varchar(10) NOT NULL,
  `Bill_Time` varchar(20) NOT NULL,
  `Order_Price` varchar(20) NOT NULL,
  `ID_Bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bockschedule`
--

CREATE TABLE IF NOT EXISTS `bockschedule` (
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
(2, '09:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '10:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(4, '10:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(5, '11:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(6, '11:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(7, '12:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(8, '12:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(9, '13:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(10, '13:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(11, '14:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(12, '14:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(13, '15:00:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(14, '15:30:00', 'ว่าง', 'ว่าง', 'ว่าง'),
(15, '16:00:00', 'ว่าง', 'ว่าง', 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `Car_id` varchar(10) NOT NULL,
  `Car_Model` varchar(40) NOT NULL,
  `Car_Size` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Car_id`, `Car_Model`, `Car_Size`) VALUES
('car_l_01', 'Honda HR-V', 'l'),
('car_l_3', 'Toyota Yaris', 'S'),
('car_m_01', 'Honda Accord', 'm'),
('car_s_01', 'Swift', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `car_cus`
--

CREATE TABLE IF NOT EXISTS `car_cus` (
  `CarCusID` varchar(20) NOT NULL,
  `Cus_User` varchar(20) NOT NULL,
  `Car_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_cus`
--

INSERT INTO `car_cus` (`CarCusID`, `Cus_User`, `Car_id`) VALUES
('user01', 'gun', 'car_m_01'),
('zxcxzczxc', 'gun', 'car_l_01');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cus_User` varchar(20) NOT NULL,
  `Cus_Pass` varchar(20) NOT NULL,
  `Cus_Fname` varchar(20) NOT NULL,
  `Cus_Lname` varchar(20) NOT NULL,
  `Cus_Tel` varchar(10) NOT NULL,
  `Cus_Email` varchar(30) NOT NULL,
  `Cus_Address` varchar(40) NOT NULL,
  `Cus_Status` varchar(10) NOT NULL,
  `Cus_Model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_User`, `Cus_Pass`, `Cus_Fname`, `Cus_Lname`, `Cus_Tel`, `Cus_Email`, `Cus_Address`, `Cus_Status`, `Cus_Model`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', ''),
('gun', '1234', 'asdsad', 'zxczxc', 'ewewqeqw', 'qweqwe', 'ewqeqwe', 'user', ''),
('gun1234', '1234', 'gunnowy', 'nooo', '0812121', 'register-games@hotmail.com', 'khonkaen', 'user', '2กย238'),
('test', '1234', 'testja', '123414214', 'ssssss', 'ddddddd', 'aaaaaaa', 'user', ''),
('testUser', 'pass', 'testFname', 'testLname', '0800000000', 'mail@mail.com', '123 KKU', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_User` varchar(10) NOT NULL,
  `ID_EmpPosition` varchar(10) NOT NULL,
  `Emp_Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_User`, `ID_EmpPosition`, `Emp_Pass`) VALUES
('testEmp', 'c01', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `emp_position`
--

CREATE TABLE IF NOT EXISTS `emp_position` (
  `ID_EmpPosition` varchar(10) NOT NULL,
  `Emp_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_position`
--

INSERT INTO `emp_position` (`ID_EmpPosition`, `Emp_Name`) VALUES
('c01', 'พนักงานล้างรถ');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `ID_Income` varchar(10) NOT NULL,
  `Emp_User` varchar(10) NOT NULL,
  `ID_EmpPosition` varchar(10) NOT NULL,
  `ID_Bill` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `Cus_User` varchar(20) NOT NULL,
  `ID_Order` varchar(20) NOT NULL,
  `statusPay` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE IF NOT EXISTS `orderlist` (
  `ID_Order` varchar(20) NOT NULL,
  `Order_Price` int(11) NOT NULL,
  `Order_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`ID_Order`, `Order_Price`, `Order_Name`) VALUES
('odr_s_01', 200, 'ล้างรถ'),
('odr_s_02', 120, 'ดูดฝุ่น'),
('odr_s_03', 1000, 'เปลี่ยนแบตเตอรี่'),
('odr_s_04', 300, 'เปลี่ยนน้ำมันเครื่อง'),
('odr_s_05', 100, 'ปะยาง'),
('odr_s_06', 2000, 'เคลือบสี');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `idDchedule` varchar(6) NOT NULL,
  `status` varchar(20) NOT NULL,
  `r` int(11) NOT NULL,
  `c` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`idDchedule`, `status`, `r`, `c`) VALUES
('B10900', '0', 0, 0),
('B10930', '0', 0, 0),
('B11000', '0', 0, 0),
('B11030', '0', 0, 0),
('B11100', '0', 0, 0),
('B11130', '0', 0, 0),
('B11200', '0', 0, 0),
('B11230', '0', 0, 0),
('B11300', '0', 0, 0),
('B11330', '0', 0, 0),
('B11400', '0', 0, 0),
('B11430', '0', 0, 0),
('B11500', '0', 0, 0),
('B11530', '0', 0, 0),
('B11600', '0', 0, 0),
('B20900', '0', 0, 0),
('B20930', '0', 0, 0),
('B21000', '0', 0, 0),
('B21030', '0', 0, 0),
('B21100', '0', 0, 0),
('B21130', '0', 0, 0),
('B21200', '0', 0, 0),
('B21230', '0', 0, 0),
('B21300', '0', 0, 0),
('B21330', '0', 0, 0),
('B21400', '0', 0, 0),
('B21430', '0', 0, 0),
('B21500', '0', 0, 0),
('B21530', '0', 0, 0),
('B21600', '0', 0, 0),
('B30900', '0', 0, 0),
('B30930', '0', 0, 0),
('B31000', '0', 0, 0),
('B31030', '0', 0, 0),
('B31100', '0', 0, 0),
('B31130', '0', 0, 0),
('B31200', '0', 0, 0),
('B31230', '0', 0, 0),
('B31300', '0', 0, 0),
('B31330', '0', 0, 0),
('B31400', '0', 0, 0),
('B31430', '0', 0, 0),
('B31500', '0', 0, 0),
('B31530', '0', 0, 0),
('B31600', '0', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asd`
--
ALTER TABLE `asd`
  ADD PRIMARY KEY (`ID_CUS`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`ID_Bill`),
  ADD KEY `Cus_User` (`Cus_User`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`No`,`ID_Bill`),
  ADD KEY `ID_Order` (`ID_Order`),
  ADD KEY `Car_id` (`Car_id`),
  ADD KEY `ID_Bill` (`ID_Bill`);

--
-- Indexes for table `bockschedule`
--
ALTER TABLE `bockschedule`
  ADD PRIMARY KEY (`ID_Time`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Car_id`);

--
-- Indexes for table `car_cus`
--
ALTER TABLE `car_cus`
  ADD KEY `Cus_User` (`Cus_User`),
  ADD KEY `Car_id` (`Car_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_User`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_User`),
  ADD KEY `ID_EmpPosition` (`ID_EmpPosition`);

--
-- Indexes for table `emp_position`
--
ALTER TABLE `emp_position`
  ADD PRIMARY KEY (`ID_EmpPosition`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`ID_Income`),
  ADD KEY `Emp_User` (`Emp_User`),
  ADD KEY `ID_EmpPosition` (`ID_EmpPosition`),
  ADD KEY `ID_Bill` (`ID_Bill`),
  ADD KEY `Cus_User` (`Cus_User`),
  ADD KEY `ID_Order` (`ID_Order`),
  ADD KEY `No` (`No`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`idDchedule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asd`
--
ALTER TABLE `asd`
  MODIFY `ID_CUS` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `ID_Bill` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `ID_Bill` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `ฺฺBill_ibfk_3` FOREIGN KEY (`Cus_User`) REFERENCES `customer` (`Cus_User`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `Bill_Detail_ibfk_1` FOREIGN KEY (`ID_Order`) REFERENCES `orderlist` (`ID_Order`),
  ADD CONSTRAINT `Bill_Detail_ibfk_2` FOREIGN KEY (`Car_id`) REFERENCES `car` (`Car_id`);

--
-- Constraints for table `car_cus`
--
ALTER TABLE `car_cus`
  ADD CONSTRAINT `Car_Cus_ibfk_1` FOREIGN KEY (`Cus_User`) REFERENCES `customer` (`Cus_User`),
  ADD CONSTRAINT `Car_Cus_ibfk_2` FOREIGN KEY (`Car_id`) REFERENCES `car` (`Car_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`ID_EmpPosition`) REFERENCES `emp_position` (`ID_EmpPosition`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `Income_ibfk_1` FOREIGN KEY (`Emp_User`) REFERENCES `employee` (`Emp_User`),
  ADD CONSTRAINT `Income_ibfk_2` FOREIGN KEY (`ID_EmpPosition`) REFERENCES `emp_position` (`ID_EmpPosition`),
  ADD CONSTRAINT `Income_ibfk_5` FOREIGN KEY (`Cus_User`) REFERENCES `customer` (`Cus_User`),
  ADD CONSTRAINT `Income_ibfk_6` FOREIGN KEY (`ID_Order`) REFERENCES `orderlist` (`ID_Order`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

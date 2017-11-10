-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2017 at 04:58 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3534257_projw`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bill_Detail`
--

CREATE TABLE `Bill_Detail` (
  `No` int(11) NOT NULL,
  `ID_Order` varchar(20) NOT NULL,
  `Car_id` varchar(10) NOT NULL,
  `Order_Amount` int(11) NOT NULL,
  `Order_Price` int(11) NOT NULL,
  `ID_Bill` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bill_Detail`
--

INSERT INTO `Bill_Detail` (`No`, `ID_Order`, `Car_id`, `Order_Amount`, `Order_Price`, `ID_Bill`) VALUES
(1, 'odr_s_01', 'car_s_01', 1, 200, '001'),
(2, 'odr_s_02', 'car_s_01', 1, 120, '001');

-- --------------------------------------------------------

--
-- Table structure for table `Calendar`
--

CREATE TABLE `Calendar` (
  `ID_Schedule` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `start` varchar(30) NOT NULL,
  `end` varchar(30) NOT NULL,
  `block` int(11) NOT NULL,
  `ID_Bill` varchar(20) NOT NULL,
  `Cus_User` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Calendar`
--

INSERT INTO `Calendar` (`ID_Schedule`, `Status`, `start`, `end`, `block`, `ID_Bill`, `Cus_User`) VALUES
(1, 'จอง', '2017-11-08T08:09:00', '2017-11-08T08:10:00', 1, '001', 'testUser');

-- --------------------------------------------------------

--
-- Table structure for table `Car`
--

CREATE TABLE `Car` (
  `Car_id` varchar(10) NOT NULL,
  `Car_Model` varchar(40) NOT NULL,
  `Car_Size` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Car`
--

INSERT INTO `Car` (`Car_id`, `Car_Model`, `Car_Size`) VALUES
('car_l_01', 'Honda HR-V', 'l'),
('car_m_01', 'Honda Accord', 'm'),
('car_s_01', 'Swift', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `Car_Cus`
--

CREATE TABLE `Car_Cus` (
  `CarCusID` varchar(20) NOT NULL,
  `Cus_User` varchar(20) NOT NULL,
  `Car_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Cus_User` varchar(20) NOT NULL,
  `Cus_Pass` varchar(20) NOT NULL,
  `Cus_Fname` varchar(20) NOT NULL,
  `Cus_Lname` varchar(20) NOT NULL,
  `Cus_Tel` varchar(10) NOT NULL,
  `Cus_Email` varchar(30) NOT NULL,
  `Cus_Address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Cus_User`, `Cus_Pass`, `Cus_Fname`, `Cus_Lname`, `Cus_Tel`, `Cus_Email`, `Cus_Address`) VALUES
('testUser', 'pass', 'testFname', 'testLname', '0800000000', 'mail@mail.com', '123 KKU');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Emp_User` varchar(10) NOT NULL,
  `ID_EmpPosition` varchar(10) NOT NULL,
  `Emp_Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Emp_User`, `ID_EmpPosition`, `Emp_Pass`) VALUES
('testEmp', 'c01', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `Emp_Position`
--

CREATE TABLE `Emp_Position` (
  `ID_EmpPosition` varchar(10) NOT NULL,
  `Emp_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Emp_Position`
--

INSERT INTO `Emp_Position` (`ID_EmpPosition`, `Emp_Name`) VALUES
('c01', 'พนักงานล้างรถ');

-- --------------------------------------------------------

--
-- Table structure for table `Income`
--

CREATE TABLE `Income` (
  `ID_Income` varchar(10) NOT NULL,
  `Emp_User` varchar(10) NOT NULL,
  `ID_EmpPosition` varchar(10) NOT NULL,
  `ID_Bill` varchar(20) NOT NULL,
  `No` int(11) NOT NULL,
  `Cus_User` varchar(20) NOT NULL,
  `ID_Order` varchar(20) NOT NULL,
  `statusPay` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `OrderList`
--

CREATE TABLE `OrderList` (
  `ID_Order` varchar(20) NOT NULL,
  `Order_Price` int(11) NOT NULL,
  `Order_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `OrderList`
--

INSERT INTO `OrderList` (`ID_Order`, `Order_Price`, `Order_Name`) VALUES
('odr_s_01', 200, 'ล้างรถ'),
('odr_s_02', 120, 'ดูดฝุ่น');

-- --------------------------------------------------------

--
-- Table structure for table `ฺฺBill`
--

CREATE TABLE `ฺฺBill` (
  `ID_Bill` varchar(20) NOT NULL,
  `Cus_User` varchar(20) NOT NULL,
  `Total_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ฺฺBill`
--

INSERT INTO `ฺฺBill` (`ID_Bill`, `Cus_User`, `Total_Price`) VALUES
('001', 'testUser', 320);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bill_Detail`
--
ALTER TABLE `Bill_Detail`
  ADD PRIMARY KEY (`No`),
  ADD KEY `ID_Order` (`ID_Order`),
  ADD KEY `Car_id` (`Car_id`),
  ADD KEY `ID_Bill` (`ID_Bill`);

--
-- Indexes for table `Calendar`
--
ALTER TABLE `Calendar`
  ADD PRIMARY KEY (`ID_Schedule`),
  ADD KEY `ID_Bill` (`ID_Bill`),
  ADD KEY `Cus_User` (`Cus_User`);

--
-- Indexes for table `Car`
--
ALTER TABLE `Car`
  ADD PRIMARY KEY (`Car_id`);

--
-- Indexes for table `Car_Cus`
--
ALTER TABLE `Car_Cus`
  ADD KEY `Cus_User` (`Cus_User`),
  ADD KEY `Car_id` (`Car_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Cus_User`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Emp_User`),
  ADD KEY `ID_EmpPosition` (`ID_EmpPosition`);

--
-- Indexes for table `Emp_Position`
--
ALTER TABLE `Emp_Position`
  ADD PRIMARY KEY (`ID_EmpPosition`);

--
-- Indexes for table `Income`
--
ALTER TABLE `Income`
  ADD PRIMARY KEY (`ID_Income`),
  ADD KEY `Emp_User` (`Emp_User`),
  ADD KEY `ID_EmpPosition` (`ID_EmpPosition`),
  ADD KEY `ID_Bill` (`ID_Bill`),
  ADD KEY `Cus_User` (`Cus_User`),
  ADD KEY `ID_Order` (`ID_Order`),
  ADD KEY `No` (`No`);

--
-- Indexes for table `OrderList`
--
ALTER TABLE `OrderList`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Indexes for table `ฺฺBill`
--
ALTER TABLE `ฺฺBill`
  ADD PRIMARY KEY (`ID_Bill`),
  ADD KEY `Cus_User` (`Cus_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bill_Detail`
--
ALTER TABLE `Bill_Detail`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Calendar`
--
ALTER TABLE `Calendar`
  MODIFY `ID_Schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bill_Detail`
--
ALTER TABLE `Bill_Detail`
  ADD CONSTRAINT `Bill_Detail_ibfk_1` FOREIGN KEY (`ID_Order`) REFERENCES `OrderList` (`ID_Order`),
  ADD CONSTRAINT `Bill_Detail_ibfk_2` FOREIGN KEY (`Car_id`) REFERENCES `Car` (`Car_id`),
  ADD CONSTRAINT `Bill_Detail_ibfk_3` FOREIGN KEY (`ID_Bill`) REFERENCES `ฺฺBill` (`ID_Bill`);

--
-- Constraints for table `Calendar`
--
ALTER TABLE `Calendar`
  ADD CONSTRAINT `Calendar_ibfk_1` FOREIGN KEY (`ID_Bill`) REFERENCES `ฺฺBill` (`ID_Bill`),
  ADD CONSTRAINT `Calendar_ibfk_3` FOREIGN KEY (`Cus_User`) REFERENCES `Customer` (`Cus_User`);

--
-- Constraints for table `Car_Cus`
--
ALTER TABLE `Car_Cus`
  ADD CONSTRAINT `Car_Cus_ibfk_1` FOREIGN KEY (`Cus_User`) REFERENCES `Customer` (`Cus_User`),
  ADD CONSTRAINT `Car_Cus_ibfk_2` FOREIGN KEY (`Car_id`) REFERENCES `Car` (`Car_id`);

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`ID_EmpPosition`) REFERENCES `Emp_Position` (`ID_EmpPosition`);

--
-- Constraints for table `Income`
--
ALTER TABLE `Income`
  ADD CONSTRAINT `Income_ibfk_1` FOREIGN KEY (`Emp_User`) REFERENCES `Employee` (`Emp_User`),
  ADD CONSTRAINT `Income_ibfk_2` FOREIGN KEY (`ID_EmpPosition`) REFERENCES `Emp_Position` (`ID_EmpPosition`),
  ADD CONSTRAINT `Income_ibfk_3` FOREIGN KEY (`ID_Bill`) REFERENCES `ฺฺBill` (`ID_Bill`),
  ADD CONSTRAINT `Income_ibfk_5` FOREIGN KEY (`Cus_User`) REFERENCES `Customer` (`Cus_User`),
  ADD CONSTRAINT `Income_ibfk_6` FOREIGN KEY (`ID_Order`) REFERENCES `OrderList` (`ID_Order`),
  ADD CONSTRAINT `Income_ibfk_7` FOREIGN KEY (`No`) REFERENCES `Bill_Detail` (`No`);

--
-- Constraints for table `ฺฺBill`
--
ALTER TABLE `ฺฺBill`
  ADD CONSTRAINT `ฺฺBill_ibfk_3` FOREIGN KEY (`Cus_User`) REFERENCES `Customer` (`Cus_User`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 06:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `user_name`, `pass`) VALUES
('Samia Ahmed', 'admin1', 101),
('Mehrab Ahmed', 'admin2', 102);

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE `employee_detail` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(256) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `salary` int(11) NOT NULL,
  `sector` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`employee_id`, `employee_name`, `phone_no`, `email`, `salary`, `sector`) VALUES
(1001, 'Saker Efaj', 192497395, 'saker@gmail.com', 5000, 'Guard'),
(1002, ' Efaj Rahman', 172447395, 'efaj@gmail.com', 5000, 'Sweeper'),
(1003, 'Rahima', 192497395, 'rahima@gmail.com', 10000, 'cook'),
(1004, 'Haeja', 192495, 'haeja@gmail.com', 8000, 'cook'),
(1005, 'rita rahman', 192497395, 'rita@gmail.com', 6000, 'cleaner'),
(1006, 'halima khatun', 497395, 'halima@gmail.com', 5000, 'cook'),
(1007, 'mofiz', 497395, 'mofiz@gmail.com', 5000, 'electrician'),
(1008, 'kamrul', 1798889233, 'ripa@gmail.com', 7000, 'plumber');

-- --------------------------------------------------------

--
-- Table structure for table `entry_list`
--

CREATE TABLE `entry_list` (
  `student_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `dept` varchar(256) DEFAULT NULL,
  `phone_no` int(11) DEFAULT NULL,
  `exit_time` varchar(256) DEFAULT NULL,
  `entry_time` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry_list`
--

INSERT INTO `entry_list` (`student_id`, `room_no`, `dept`, `phone_no`, `exit_time`, `entry_time`) VALUES
(1, 101, 'Botany', 192497395, '7:00 am', '3:15 pm'),
(2, 106, 'Botany', 17395, '8:00 am', '12:15 pm'),
(6, 104, 'Botany', 192494695, '4:00 pm', '7:15 pm'),
(3, 110, 'Management', 2497395, '10:00 am', '4:15 pm'),
(5, 108, 'ES', 1924995, '6:00 pm', '8:15 pm'),
(4, 103, 'LAW', 1997395, '11:00 am', '5:15 pm'),
(9, 104, 'ICT', 192497395, '2:00pm', '4:00pm'),
(1, 101, 'Botany', 192497395, '7:00am', '7:00pm'),
(3, 103, 'ES', 192497395, '2:00pm', '3:00pm'),
(3, 103, 'ES', 192497395, '2:00pm', '3:00pm'),
(1, 101, 'Botany', 1798889233, '2:30pm', '4:00pm'),
(5, 108, 'ES', 1798889233, '2:30pm', '4:00pm'),
(1, 101, 'Botany', 1798889233, '2:30pm', '4:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `hall_bill`
--

CREATE TABLE `hall_bill` (
  `student_id` int(11) NOT NULL,
  `total_bill` int(11) DEFAULT NULL,
  `due_bill` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall_bill`
--

INSERT INTO `hall_bill` (`student_id`, `total_bill`, `due_bill`) VALUES
(1, 4000, 2000),
(2, 6000, 2000),
(3, 6000, 4000),
(4, 6000, 0),
(5, 6000, 0),
(6, 6000, 2000),
(7, 6000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hal_doctors`
--

CREATE TABLE `hal_doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(256) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hal_doctors`
--

INSERT INTO `hal_doctors` (`doctor_id`, `doctor_name`, `phone_no`, `email`) VALUES
(1, 'MD shafiq', 192497395, 'shafiq@gmail.com'),
(2, 'MD rafiq', 92497395, 'rafiq@gmail.com'),
(3, 'haider', 192497395, 'ad@gmail.com\r\n'),
(4, 'raiyana', 192497395, 'rr@gmail.com\r\n'),
(5, 'arun', 1798889233, 'arun@gmail.com'),
(1001, 'bella', 192497395, 'bella@gmail.com'),
(1067, 'arun', 1798889233, 'ripa@gmail.com'),
(1067, 'arun', 1798889233, 'ripa@gmail.com'),
(1067, 'arun', 1798889233, 'ripa@gmail.com'),
(1067, 'arun', 1798889233, 'ripa@gmail.com'),
(2, 'arun', 1798889233, 'ripa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `student_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `student_pass` int(11) DEFAULT NULL,
  `employee_pass` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`student_id`, `employee_id`, `student_pass`, `employee_pass`) VALUES
(1, 1001, 101, 111),
(2, 1002, 102, 222),
(3, 1003, 103, 333),
(4, 1004, 104, 444),
(5, 1005, 105, 555),
(6, 1006, 106, 666),
(7, 1007, 107, 777),
(1001, 1008, 44, 33);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_genre` varchar(256) NOT NULL,
  `medicine_name` varchar(256) NOT NULL,
  `amount` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_genre`, `medicine_name`, `amount`) VALUES
('vomit', 'omidon(20mg)', '10 packets'),
('acidity', 'pentobex(20mg)', '20 packets'),
('acidity', 'entacid(500mg)', '20 packets'),
('acidity', 'seclo', '20 packets'),
('acidity', 'entacid(500mg) liquid', '20 bottles'),
('Fever', 'napa(500mg)', '20 packets'),
('Fever', 'ace(500mg)', '20 packets'),
('C-vit', 'vitamin C', '20 packets'),
('Vitamin D', 'D-rise', '10 packets');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `date` date NOT NULL,
  `meal` varchar(256) NOT NULL,
  `day` varchar(256) NOT NULL,
  `time` varchar(6) NOT NULL,
  `bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`date`, `meal`, `day`, `time`, `bill`) VALUES
('0000-00-00', 'rice,meat', 'Saturday', '00:00', 30),
('0000-00-00', 'rice,meat', 'Saturday', '00:00', 30),
('0000-00-00', 'rice,vegetables', 'Sunday', 'lunch', 30),
('0000-00-00', 'rice,vegetables', 'Sunday', 'Dinner', 30),
('0000-00-00', 'rice,chicken', 'Monday', 'Dinner', 60),
('0000-00-00', 'rice,chicken', 'Monday', 'Dinner', 60),
('0000-00-00', 'rice,vegetables', 'Tuesday', 'Lunch', 30),
('0000-00-00', 'rice,Fish', 'Tuesday', 'Dinner', 50),
('0000-00-00', 'rice,chicken', 'Wednesday', 'Lunch', 60),
('0000-00-00', 'rice,Fish', 'Wednesday', 'Dinner', 50),
('0000-00-00', 'Friedrice, Fried chicken', 'Thursday', 'Lunch', 130),
('0000-00-00', 'rice,Fish', 'Thursday', 'Dinner', 50),
('0000-00-00', 'rice,vegetables', 'Friday', 'Lunch', 30),
('0000-00-00', 'rice,Meat', 'Friday', 'Dinner', 80),
('0000-00-00', 'rice,meat', 'Saturday', '00:00', 30),
('0000-00-00', 'rice,meat', 'Saturday', '00:00', 30),
('2021-01-01', 'rice,meat', 'Saturday', '00:00', 30),
('2021-01-02', 'rice,meat', 'Saturday', '00:00', 30),
('2021-01-01', 'rice,meat', 'saturday', '00:00', 30);

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `student_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `dept` varchar(256) DEFAULT NULL,
  `problem` varchar(256) DEFAULT NULL,
  `phone_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`student_id`, `room_no`, `dept`, `problem`, `phone_no`) VALUES
(1, 101, 'Botany', 'Fan not working', 192497395),
(4, 103, 'Management', 'light not working', 162837395),
(6, 104, 'Botany', 'water is not coming', 162837395),
(5, 108, 'ES', 'Fan is not working', 2147483647),
(1, 101, 'Botany', 'fan not working', 1798889233);

-- --------------------------------------------------------

--
-- Table structure for table `room_detail`
--

CREATE TABLE `room_detail` (
  `room_no` int(11) NOT NULL,
  `status` varchar(256) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_detail`
--

INSERT INTO `room_detail` (`room_no`, `status`, `student_id`) VALUES
(101, 'Alloted', 1),
(102, 'alloted', 9),
(103, 'alloted', 4),
(104, 'alloted', 6),
(105, 'vacant', NULL),
(106, 'alloted', 2),
(107, 'vacant', NULL),
(108, 'alloted', 5),
(109, 'vacant', NULL),
(110, 'alloted', 3),
(111, 'alloted', 8),
(1010, 'vacant', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(256) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `permanent_address` varchar(256) NOT NULL,
  `dept` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`student_id`, `student_name`, `phone_no`, `email`, `permanent_address`, `dept`) VALUES
(1, 'Jamila Jahan Jerin', 192497395, 'jamila@gmail.com', 'bhola', 'Botany'),
(2, 'Trima', 192497395, 'trima@gmail.com', 'bhola', 'Botany'),
(3, 'Anika Tabassum', 1395935, 'anika@gmail.com', 'Kushtia', 'Management'),
(4, 'Tuhi', 19395, 'tuhi@gmail.com', 'Chittagong', 'LAW'),
(5, 'Roshana', 1904335, 'roshana@gmail.com', 'Rangpur', 'ES'),
(6, 'Zuha', 197395, 'zuha@gmail.com', 'bhola', 'Botany'),
(7, 'riya', 97395, 'riya@gmail.com', 'Dhaka', 'ICT'),
(8, 'ripa', 385492, 'ripa@gmail.com', 'Dhaka', 'ES'),
(9, 'trina', 385492, 'ttrina@gmail.com', 'Rajshahi', 'ICT'),
(1001, 'samia', 192497395, 'samiaomi22@gmail.com', 'Bhola', 'ICT'),
(1002, 'samira', 179639543, 'sami@hotmail.com', 'Bhola', 'ICT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_detail`
--
ALTER TABLE `employee_detail`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `entry_list`
--
ALTER TABLE `entry_list`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `hall_bill`
--
ALTER TABLE `hall_bill`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `room_detail`
--
ALTER TABLE `room_detail`
  ADD PRIMARY KEY (`room_no`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`student_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entry_list`
--
ALTER TABLE `entry_list`
  ADD CONSTRAINT `entry_list_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_detail` (`student_id`),
  ADD CONSTRAINT `entry_list_ibfk_2` FOREIGN KEY (`room_no`) REFERENCES `room_detail` (`room_no`);

--
-- Constraints for table `hall_bill`
--
ALTER TABLE `hall_bill`
  ADD CONSTRAINT `hall_bill_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_detail` (`student_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_detail` (`student_id`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee_detail` (`employee_id`);

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `problem_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_detail` (`student_id`),
  ADD CONSTRAINT `problem_ibfk_2` FOREIGN KEY (`room_no`) REFERENCES `room_detail` (`room_no`);

--
-- Constraints for table `room_detail`
--
ALTER TABLE `room_detail`
  ADD CONSTRAINT `room_detail_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_detail` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

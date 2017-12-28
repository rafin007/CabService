-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 05:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `customer_full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `review` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `customer_full_name`, `username`, `email`, `password`, `phone`, `gender`, `join_date`, `review`) VALUES
(1, 'Arefin', 'Arefin Mehedi', 'cus-arefin', 'rafin.ryan.07@outlook.com', 'mypass', '01764431859', 'Male', '2017-12-01', '5'),
(2, 'Asif', 'Pieas Asif', 'cus-pieas.asif', 'pieas.asif@gmail.com', '123456', '01917369985', 'Male', '2017-12-05', '5'),
(5, 'Raihan', 'Raihan Sharif', 'cus-raihan', 'raihan@gmail.com', '1234', '01932258996', 'Male', '2017-12-04', '5'),
(6, 'Farzana', 'Farzana Jhuma', 'cus-jhuma', 'farzana.jhuma@gmail.com', 'motherindia', '01676288890', 'Female', '2017-12-04', '4'),
(7, 'Sumaiya', 'Sumaiya Sultana', 'cus-sumaiya', 'Sumaiya.mailme@gmail.com', 'sumaiya001', '01772340641', 'Female', '2017-12-11', '4'),
(8, 'Kazi', 'Kazi Shahruk Ahmed', 'cus-shahruk', 'KaziShahruk@gmail.com', 'shahruk001', '01656341345', 'Male', '2017-12-05', '5');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `employee_full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `type` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `employee_full_name`, `username`, `password`, `email`, `phone`, `salary`, `type`, `gender`, `join_date`, `rating`) VALUES
(2, 'Jhuma', 'Farzana Afrin', 'emp-fjhuma', 'a123b234', 'fjhuma@gmail.com', '01689923748', '12000', 'Admin', 'Female', '2017-12-04', 0),
(3, 'Shimi', 'Suraiya Rahman', 'emp-shimi', '123456', 'shimi@gmail.com', '01782644589', '12000', 'Admin', 'Female', '2017-12-10', NULL),
(8, 'Mehedi', 'Arefin Mehedi', 'emp-arefin', 'mypasss', 'arefin.0107@live.com', '01764431859', '60000', 'Admin', 'Male', '2017-12-16', 0),
(9, 'Renessa', 'Renessa Tabassum', 'emp-renessa', '123456', 'renessa@gmail.com', '01911566321', '16000', 'Driver', 'Female', '2017-12-16', 0),
(10, 'Rahma', 'Ummay Rahma', 'emp-rahma', 'abcdef', 'rahma@outlook.com', '01718668232', '30000', 'Admin', 'Female', '2017-12-16', 0),
(11, 'Mahmud', 'Mahmud Hassan', 'emp-mahmud', '123456', 'mahmud@yahoo.com', '01814956498', '12000', 'Driver', 'Male', '2017-12-16', 0),
(14, 'Anik', 'Santo Anik', 'emp-anik', '123456', 'anik@gmail.com', '01814956498', '18000', 'Driver', 'Male', '2017-12-17', 4),
(15, 'Navid', 'Navid Adnan', 'emp-navid', 'iamnavid', 'navid@outlook.com', '01724240492', '50000', 'Admin', 'Male', '2017-12-22', 0),
(16, 'Abdul', 'Abdul Kuddus', 'emp-kuddus', 'kuddus001', 'kuddus00cool@gmail.com', '01743424567', '20000', 'Driver', 'Male', '2017-12-02', 5),
(17, 'Chunnu', 'Chunnu Mia', 'emp-chunnu', 'chunnu001', 'chunnu.mia@yahoo.com', '01931415517', '18000', 'Driver', 'Male', '2017-12-05', 4),
(18, 'Karim', 'Karim Arafat', 'emp-arafat', 'arafat001', 'arafat003@yahoo.com', '01882324566', '15000', 'Driver', 'Male', '2017-12-10', 3),
(19, 'Jakia', 'Jakia Choudhury', 'emp-jakia', 'jakia001', 'jakia00me@gmail.com', '01923435367', '18000', 'Driver', 'Female', '2017-12-11', 5);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `customer_id`, `title`, `comment`) VALUES
(1, 1, 'service', 'Very good service.'),
(6, 5, 'amazing', 'amazing service');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `rides_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `journey_type` varchar(20) NOT NULL,
  `pickup_point` varchar(255) NOT NULL,
  `drop_point` varchar(255) NOT NULL,
  `cab_type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `distance` double(10,0) NOT NULL,
  `fare` double(10,0) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`rides_id`, `customer_id`, `employee_id`, `journey_type`, `pickup_point`, `drop_point`, `cab_type`, `date`, `time`, `distance`, `fare`, `status`) VALUES
(2, 2, 11, 'Two way', 'Gulshan 1', 'Khilkhet', 'Regular', '2017-12-06', '00:00:00', 3, 350, 'Completed'),
(3, 5, 11, 'Two way', 'Mirpur 13', 'Mogbazar', 'Regular', '2017-12-06', '00:00:00', 3, 150, 'Completed'),
(8, 2, 14, 'Two way', 'Jamuna Future Park', 'Pan Pacific Sonargaon', 'Premium', '2017-12-22', '00:00:00', 4, 500, 'Queued'),
(11, 2, NULL, 'One way', 'Mohakhali DOHS', 'Mirpur DOHS', 'Regular', '2017-12-20', '00:00:00', 3, 300, 'Pending'),
(12, 5, 11, 'Two way', 'Dhanmondi', 'Banani', 'Regular', '2017-12-19', '00:00:00', 4, 370, 'Queued'),
(13, 2, 11, 'One way', 'Mogbazar', 'Kuratoli, Bishshwaroad', 'Regular', '2017-12-23', '00:00:00', 4, 300, 'Completed'),
(14, 5, NULL, 'One way', 'Rampura', 'Khilgaon', 'Economy', '2017-12-27', '12:10:00', 3, 300, 'Pending'),
(16, 1, NULL, 'Two way', 'Banani', 'Mirpur', 'Economy', '2017-12-28', '12:10:00', 3, 300, 'Pending'),
(17, 1, 11, 'One way', 'Dhanmondi', 'Savar', 'Regular', '2017-12-30', '16:00:00', 10, 1000, 'Completed'),
(18, 1, 14, 'Two way', 'Khilkhet', 'Abdullahpur', 'Regular', '2017-12-29', '18:00:00', 4, 400, 'Queued'),
(19, 7, 11, 'One way', 'Mirpur-13, Harman Minor School', 'Kuril Bishoroad, Kuratoli Bazar', 'Executive', '2017-12-20', '02:12:22', 13, 332, 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`rides_id`),
  ADD KEY `rides_ibfk_1` (`customer_id`),
  ADD KEY `rides_ibfk_2` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `rides_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `rides`
--
ALTER TABLE `rides`
  ADD CONSTRAINT `rides_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rides_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

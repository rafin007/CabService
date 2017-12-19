-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 07:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `review` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `customer_full_name`, `username`, `email`, `password`, `phone`, `gender`, `join_date`, `review`) VALUES
(1, 'Arefin', 'Arefin Mehedi', 'cus-arefin007', 'rafin.ryan.07@outlook.com', 'abcdef', '01764431859', 'Male', '2017-12-01', '5'),
(2, 'Asif', 'Pieas Asif', 'cus-pieas.asif', 'pieas.asif@gmail.com', '123456', '01917369985', 'Male', '2017-12-05', '5');

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
(1, 'Siam', 'Siamul Ikraj Shaj', 'emp-siamulikraj', 'ab12cd34', 'siam@gmail.com', '01676382391', '0', 'Driver', 'Male', '2017-12-03', 4.3),
(2, 'Jhuma', 'Farzana Afrin', 'emp-fjhuma', 'a123b234', 'fjhuma@gmail.com', '01689923748', '0', 'Admin', 'Female', '2017-12-04', 0),
(3, 'Shimi', 'Suraiya Rahman', 'emp-shimi', '123456', 'shimi@gmail.com', '01782644589', '0', 'Admin', 'Female', '2017-12-10', NULL),
(8, 'Arefin', 'Arefin Mehedi', 'emp-arefin', '123456', 'arefin.0107@live.com', '01764431859', '50000', 'Admin', 'Male', '2017-12-16', 0),
(9, 'Renessa', 'Renessa Tabassum', 'emp-renessa', '123456', 'renessa@gmail.com', '01911566321', '15000', 'Driver', 'Female', '2017-12-16', 0),
(10, 'Rahma', 'Ummay Rahma', 'emp-rahma', 'abcdef', 'rahma@outlook.com', '01718668232', '30000', 'Admin', 'Female', '2017-12-16', 0),
(11, 'Mahmud', 'Mahmud Hassan', 'emp-mahmud', '123456', 'mahmud@yahoo.com', '01814956498', '12000', 'Driver', 'Male', '2017-12-16', 0),
(14, 'Anik', 'Santo Anik', 'emp-anik', '123456', 'anik@gmail.com', '01814956498', '18000', 'Driver', 'Male', '2017-12-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `customer_id`, `message`) VALUES
(1, 1, 'Very good service.');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `rides_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `journey_type` varchar(20) NOT NULL,
  `pickup_point` varchar(255) NOT NULL,
  `drop_point` varchar(255) NOT NULL,
  `cab_type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `distance` double(10,0) NOT NULL,
  `fare` double(10,0) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`rides_id`, `customer_id`, `employee_id`, `journey_type`, `pickup_point`, `drop_point`, `cab_type`, `date`, `distance`, `fare`, `status`) VALUES
(2, 2, 11, 'Two way', 'Gulshan 1', 'Khilkhet', 'Regular', '2017-12-06', 3, 350, 'Completed'),
(3, 1, 11, 'Two way', 'Mirpur 13', 'Mogbazar', 'Regular', '2017-12-06', 3, 150, 'Completed'),
(4, 1, 9, 'Two way', 'Kuril, Bishshwaroad', 'Firmgate', 'Premium', '2017-12-08', 3, 450, 'Completed');

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
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `rides_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  ADD CONSTRAINT `rides_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `rides_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

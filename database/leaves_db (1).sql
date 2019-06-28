-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 10:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaves_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL,
  `leave_date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `other_names` varchar(50) NOT NULL,
  `positionj` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `leave_date`, `staff_id`, `first_name`, `other_names`, `positionj`, `department`, `purpose`, `date_from`, `date_to`) VALUES
(1, '2019-04-22', 1, 'Jackson', 'Mwangi', 'Trainer', 'Accounts', 'To seek medical treatment', '2019-04-22', '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `other_names` varchar(100) NOT NULL,
  `positionj` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `basic_salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `first_name`, `other_names`, `positionj`, `department`, `join_date`, `basic_salary`) VALUES
(1, 'Jackson', 'Mwangi', 'Trainer', 'Accounts', '0000-00-00', 0),
(2, 'Lucy', 'Karanja', 'Operations Manager', 'Administration', '2019-01-03', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `other_names` varchar(50) NOT NULL,
  `positionj` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `staff_id`, `first_name`, `other_names`, `positionj`, `department`, `username`, `password`, `user_group`) VALUES
(1, 1, 'Gideon', 'Koech', 'ICT Support', 'ICT', 'gideon', 'gideon2019', 'Systems Administrator'),
(2, 1, 'Jackson', 'Mwangi', 'Trainer', 'Accounts', 'jack', 'jack2019', 'Human Resource Manager'),
(3, 2, 'Lucy', 'Karanja', 'Operations Manager', 'Administration', 'lucykoi', 'koi2019', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

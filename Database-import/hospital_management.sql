-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 04:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(3) NOT NULL,
  `branch_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_name`) VALUES
(1, 'Bhopal'),
(3, 'Delhi'),
(2, 'Jabalpur'),
(5, 'Mumbai'),
(4, 'Ranchi');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(3) NOT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `phone`, `dob`, `branch`, `appointment_date`) VALUES
(1, 'carriers', '4587458965', '2020-06-30', 'ME', '2020-07-17'),
(2, 'hello', '4587965332', '2004-01-05', 'Bhopal', '2019-09-12'),
(3, 'sonu verman khan', '123455667', '1989-06-15', 'Bhopal', '2020-07-17'),
(4, 'atul raj maurya', '9898678098', '2020-07-22', 'Delhi', '2020-08-01'),
(5, 'atul raj maurya', '837464658', '2020-07-30', 'Jabalpur', '2021-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `phone`, `branch`) VALUES
(1, 'Om Raman', 'om@gmail.com', 'Om@123', 'admin', NULL, NULL),
(2, 'Aaditya', 'aadi@gmail.com', 'Aadi@123', 'staff', NULL, NULL),
(3, 'Staff', 'staff@gmail.com', 'Staff2123', 'staff', '7458963210', 'Jabalpur'),
(4, 'Admin', 'admin@gmail.com', 'Admin@123', 'admin', '1236547890', 'Delhi'),
(5, '', '', '', 'staff', '', 'Bhopal'),
(7, 'sonu verman khan', 'sonu@gmail.com', 'sonu@123', 'staff', '23445', 'Bhopal'),
(8, 'adityasingh', 'adityasinghrajput862@gmail.com', '12345', 'staff', '0808543334', 'Ranchi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_name` (`branch_name`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

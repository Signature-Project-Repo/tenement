-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 08:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenement`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_register`
--

CREATE TABLE `employee_register` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `housename` text NOT NULL,
  `street` varchar(20) NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `employeeid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`fname`, `lname`, `housename`, `street`, `district`, `state`, `zip`, `dob`, `gender`, `phonenumber`, `email`, `aadhar`, `password`, `employeeid`) VALUES
('Abhishek', 'Vishnu', 'Df', 'As', 'kottayam', 'kerala', 2020, '2010-09-23', 'male', '7306759463', 'joelshibu914@gmail.c', '123456', '12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` int(30) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`email`, `password`, `usertype`, `status`) VALUES
('joelshibu100@gmail.com', '1234', 1, 0),
('joelshibu914@gmail.com', '12', 2, 0),
('rahul@gmail.com', '12', 1, 0),
('rahul@gmail.comm', '12', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `state` text NOT NULL,
  `district` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`fname`, `lname`, `state`, `district`, `dob`, `gender`, `email`, `phonenumber`, `password`) VALUES
('Abhishek', 'Vishnu', 'kerala', 'kozhikode', '2010-09-02', 'male', 'joelshibu100@gmail.c', '1234567890', '1234'),
('Abhishek', 'Vishnu', 'kerala', 'kannur', '2010-09-08', 'male', 'rahul@gmail.com', '1234567890', '12'),
('Rahul', 'Vishnu', 'kerala', 'kasaragod', '2010-09-09', 'male', 'rahul@gmail.comm', '7306759463', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_register`
--
ALTER TABLE `employee_register`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

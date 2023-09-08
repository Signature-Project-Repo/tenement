-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 06:34 AM
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
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`fname`, `lname`, `housename`, `street`, `district`, `state`, `zip`, `dob`, `gender`, `phonenumber`, `email`, `aadhar`, `password`) VALUES
('Abhishek', 'Vishnu', 'Df', 'As', 'ernakulam', 'kerala', 2020, '2010-09-15', 'male', '7894561230', 'joelshibu100@gmail.c', '123456', '12'),
('Abhishek', 'Vishnu', 'Df', 'As', 'palakkad', 'kerala', 2020, '2010-09-01', 'male', '7894561230', 'rahul@gmail.com', '123456', '12'),
('Rahul', 'Vishnu', 'Df', 'As', 'thrissur', 'kerala', 2020, '2010-09-17', 'male', '7894561230', 'abhishek@gmail.comm', '123456', '123'),
('Abhishek', 'Vishnu', 'Df', 'As', 'kottayam', 'kerala', 2020, '2010-09-10', 'male', '7894561230', 'abhishek@gmail.com4', '123456', '123'),
('Quinlan', 'Teegan', 'Petra', 'Fugit', 'alapuzha', 'kerala', 98486, '1995-04-02', 'femal', '1234567890', 'fovyqiram@mailinator', 'Quia voluptatibus nu', 'Pa$$w0rd!');

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
('abhishek@gmail.com4', '123', 2, 0),
('abhishek@gmail.comm', '123', 2, 0),
('admin@gmail.com', 'admin123', 0, 1),
('bycynus@mailinator.com', 'Pa$$w0rd!', 1, 1),
('dyzokiky@mailinator.com', 'Pa$$w0rd!', 1, 0),
('fovyqiram@mailinator.com', 'Pa$$w0rd!', 2, 1),
('gujivih@mailinator.com', 'Pa$$w0rd!', 1, 0),
('joelshibu100@gmail.com', '12', 2, 0),
('latonika@mailinator.com', 'Pa$$w0rd!', 1, 1),
('novevyji@mailinator.com', 'Pa$$w0rd!', 1, 0),
('qyba@mailinator.com', 'Pa$$w0rd!', 1, 0),
('rahul@gmail.com', '12', 2, 0);

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
('Shelly', 'Chester', 'kerala', 'kasaragod', '2009-01-07', 'male', 'bycynus@mailinator.c', '9544131746', 'Pa$$w0rd!'),
('Cody', 'Rudyard', 'kerala', 'kollam', '1974-08-09', 'femal', 'dyzokiky@mailinator.', '9544131746', 'Pa$$w0rd!'),
('Sybill', 'Lyle', 'kerala', 'palakkad', '2000-02-07', 'other', 'gujivih@mailinator.c', '9544131746', 'Pa$$w0rd!'),
('Libby', 'Claudia', 'kerala', 'wayanad', '1971-07-28', 'femal', 'latonika@mailinator.', '9544131746', 'Pa$$w0rd!'),
('Glenna', 'Chava', 'kerala', 'kasaragod', '1982-08-27', 'male', 'novevyji@mailinator.', '9544131746', 'Pa$$w0rd!'),
('Breanna', 'Aphrodite', 'kerala', 'palakkad', '1999-07-22', 'male', 'qyba@mailinator.com', '1234567890', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

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

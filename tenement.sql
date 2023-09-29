-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 08:31 AM
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
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `title`, `description`, `priority`, `date`, `email`, `reply`) VALUES
(1, 'Velit non dolorem mi', 'Aut fuga Cillum rer', 'medium', '2023-09-24', 'qysisere@mailinator.com', 'ok'),
(2, 'Iure enim commodi qu', 'Doloribus in delenit', 'low', '2023-09-24', 'qysisere@mailinator.com', '0'),
(3, 'Aut amet adipisicin', 'Quo aute qui dolore ', 'medium', '2023-09-24', 'qysisere@mailinator.com', '0'),
(4, 'Vel eos enim consequ', 'Quis ullamco libero ', 'high', '2023-09-24', 'fujyv@mailinator.com', 'ougiug'),
(5, 'Id quis do voluptate', 'Sit totam minus aut ', 'low', '2023-09-24', 'fujyv@mailinator.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee_register`
--

CREATE TABLE `employee_register` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`fname`, `lname`, `housename`, `street`, `district`, `state`, `zip`, `dob`, `gender`, `phonenumber`, `email`, `aadhar`, `password`) VALUES
('Dantem', 'Uriel', 'Maia', 'Exercitationem', 'kottayam', 'kerala', 78445, '2004-01-21', 'female', '9544131746', 'jewo@mailinator.com', '9544797545', '147'),
('Jenett', 'Clio', 'Naomi', 'Irure', 'malappuram', 'kerala', 91155, '2000-01-14', 'male', '8583365478', 'fujyv@mailinator.com', '1245543456', 'Pa$$w0rd!'),
('Ryder', 'Ishmael', 'Hile', 'Accusamus', 'idukki', 'kerala', 21403, '1010-09-01', 'male', '9544131746', 'xyqoguxy@mailinator.com', '9544797545', 'Pa$$w0rd!'),
('Aiko', 'Isadora', 'Roary', 'Consequat', 'thrissur', 'kerala', 96528, '2010-09-28', 'male', '9544131746', 'higijeka@mailinator.com', '9544797545', 'Pa$$w0rd!'),
('Jamalia Bowen', 'Lewis Holt', 'Jack Sheppard', 'Quae', 'thiruvanathupuram', 'kerala', 59579, '1977-05-25', 'male', '9544131746', 'nizozucasy@mailinator.com', '9544797545', 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(50) NOT NULL,
  `services` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `services`, `description`) VALUES
(1, 'Corporis explicabo ', 'Dolorem earum omnis '),
(2, 'Corporis explicabo ', 'Dolorem earum omnis '),
(3, 'Cum necessitatibus q', 'Dolorum dolorem pari'),
(4, 'Exercitationem eu ma', 'Natus rerum magni au'),
(5, 'Consequatur velit do', 'Ducimus fugit face'),
(6, 'Quibusdam id quia es', 'Sed in quo nihil in '),
(7, 'Corrupti tenetur es', 'Ea exercitation volu'),
(8, 'Veniam ullamco illu', 'Assumenda omnis nihi');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(30) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`email`, `password`, `usertype`, `status`) VALUES
('admin@gmail.com', 'admin123', 0, 1),
('fujyv@mailinator.com', 'Pa$$w0rd!', 2, 1),
('higijeka@mailinator.com', 'Pa$$w0rd!', 2, -1),
('jewo@mailinator.com', '147', 2, 1),
('kafakagyn@mailinator.com', 'Pa$$w0rd!', 1, -1),
('nizozucasy@mailinator.com', 'Pa$$w0rd!', 2, -1),
('qysisere@mailinator.com', 'Pa$$w0rd!', 1, 1),
('synuje@mailinator.com', '123456', 1, 1),
('vyqovoqe@mailinator.com', 'Pa$$w0rd!', 1, 1),
('wizinib@mailinator.com', 'Pa$$w0rd!', 1, 1),
('xyqoguxy@mailinator.com', 'Pa$$w0rd!', 2, -1);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`fname`, `lname`, `state`, `district`, `dob`, `gender`, `email`, `phonenumber`, `password`) VALUES
('Nomlanga Sharpe', 'Cameran Sykes', 'kerala', 'kasaragod', '2002-10-03', 'other', 'kafakagyn@mailinator.com', '9544131746', 'Pa$$w0rd!'),
('Jarrod', 'Whoopi', 'kerala', 'kottayam', '1999-11-17', 'female', 'qysisere@mailinator.com', '8583365478', 'Pa$$w0rd!'),
('Ivory', 'Georgia', 'kerala', 'thrissur', '2010-09-03', 'female', 'synuje@mailinator.com', '9544131746', '123456'),
('Shelby Sandoval', 'Raja Jennings', 'kerala', 'kollam', '1989-12-27', 'other', 'vyqovoqe@mailinator.com', '1234567890', 'Pa$$w0rd!'),
('Brandon', 'Abraham', 'kerala', 'kasaragod', '1985-01-09', 'female', 'wizinib@mailinator.com', '9544131746', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

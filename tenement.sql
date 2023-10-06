-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 12:51 PM
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
-- Table structure for table `addservice`
--

CREATE TABLE `addservice` (
  `serviceid` int(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addservice`
--

INSERT INTO `addservice` (`serviceid`, `services`, `description`, `experience`, `rate`, `email`) VALUES
(1, 'Electrician', 'Electricians are responsible for inspecting, testing, repairing, installing, and modifying electrical components and systems. Electricians general work at homes, businesses, and construction sites, and generally work as contractors.\r\n\r\n', '10', '500', 'sivaji123@gmail.com'),
(2, 'Plumbing', 'plumbing, system of pipes and fixtures installed in a building for the distribution and use of potable (drinkable) water and the removal of waterborne wastes', '14', '900', 'sivaji123@gmail.com'),
(3, 'Painting', 'painting, the expression of ideas and emotions, with the creation of certain aesthetic qualities, in a two-dimensional visual language. The elements of this language—its shapes, lines, colours, tones, and textures—are used in various ways to produce sensations of volume, space, movement, and light on a flat surface', '8', '1000', 'sivaji123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `instructions` varchar(300) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `serviceid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `name`, `phone`, `date`, `time`, `address`, `district`, `city`, `instructions`, `landmark`, `url`, `status`, `email`, `serviceid`) VALUES
(1, 'Macy Torres', '78', '1974-09-07', '03:06', 'Rerum pariatur At d', 'thiruvanathupuram', 'Cumque non suscipit ', 'Omnis labore ut est ', 'Et a non molestiae e', 'https://www.cexaro.me.uk', 0, 'joelshibu100@gmail.com', 0),
(2, 'Inez Malone', '27', '2013-10-23', '07:58', 'Aute molestiae non c', 'kollam', 'Aperiam nostrud qui ', 'Et optio reprehende', 'Tempore quaerat vol', 'https://www.sixo.biz', 0, 'joelshibu100@gmail.com', 0);

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
  `reply` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `title`, `description`, `priority`, `date`, `email`, `reply`, `status`) VALUES
(1, 'Non magna eum eum so', 'Non excepturi accusa', 'medium', '2023-09-29', 'joelshibu100@gmail.com', 'ok', 0),
(2, 'Molestiae facere nis', 'Voluptas excepturi a', 'low', '2023-09-29', 'joelshibu100@gmail.com', '0', 0),
(3, 'Adipisicing cupidata', 'Non illum est dele', 'high', '2023-09-29', 'sivaji123@gmail.com', 'mm', 1),
(4, 'Culpa quia animi n', 'Numquam id corporis ', 'low', '2023-09-29', 'sivaji123@gmail.com', '0', 1);

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
('Jamalia Bowen', 'Lewis Holt', 'Jack Sheppard', 'Quae', 'thiruvanathupuram', 'kerala', 59579, '1977-05-25', 'male', '9544131746', 'nizozucasy@mailinator.com', '9544797545', 'Pa$$w0rd!'),
('Sopoline Jackson', 'Desiree Byers', 'Raven Bradley', 'Consequatur', 'thrissur', 'kerala', 27289, '1990-02-09', 'male', '9544131746', 'sivaji123@gmail.com', '9544797545', '123');

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
(1, 'Electrician', 'Electrical Works'),
(2, 'Plumbing', 'Plumbing Works\r\n'),
(3, 'Painting', 'Painting Works');

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
('joelshibu100@gmail.com', '100', 1, 1),
('kafakagyn@mailinator.com', 'Pa$$w0rd!', 1, -1),
('nizozucasy@mailinator.com', 'Pa$$w0rd!', 2, -1),
('qysisere@mailinator.com', 'Pa$$w0rd!', 1, 1),
('sivaji123@gmail.com', '123', 2, 1),
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
('Heather Kemp', 'Davis Rosario', 'kerala', 'thiruvanathupuram', '1987-01-10', 'female', 'joelshibu100@gmail.com', '9544131746', '100'),
('Nomlanga Sharpe', 'Cameran Sykes', 'kerala', 'kasaragod', '2002-10-03', 'other', 'kafakagyn@mailinator.com', '9544131746', 'Pa$$w0rd!'),
('Jarrod', 'Whoopi', 'kerala', 'kottayam', '1999-11-17', 'female', 'qysisere@mailinator.com', '8583365478', 'Pa$$w0rd!'),
('Ivory', 'Georgia', 'kerala', 'thrissur', '2010-09-03', 'female', 'synuje@mailinator.com', '9544131746', '123456'),
('Shelby Sandoval', 'Raja Jennings', 'kerala', 'kollam', '1989-12-27', 'other', 'vyqovoqe@mailinator.com', '1234567890', 'Pa$$w0rd!'),
('Brandon', 'Abraham', 'kerala', 'kasaragod', '1985-01-09', 'female', 'wizinib@mailinator.com', '9544131746', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addservice`
--
ALTER TABLE `addservice`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

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
-- AUTO_INCREMENT for table `addservice`
--
ALTER TABLE `addservice`
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

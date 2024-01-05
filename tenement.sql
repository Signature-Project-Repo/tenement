-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 01:23 PM
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
(1, 'Plumbing', 'system of pipes and fixtures installed in a building for the distribution and use of potable (drinkable) water and the removal of waterborne wastes. ', '12', '3000', 'sivaji123@gmail.com'),
(2, 'Electrician', ' skilled professional who specializes in installing, maintaining, and repairing electrical systems in buildings and structures.', '10', '5000', 'sivaji123@gmail.com'),
(3, 'Painting', 'Apply paint, stain, and coatings to walls and ceilings, buildings, large machinery and equipment, and bridges and other structures.', '4', '3000', 'sivaji123@gmail.com'),
(4, 'Medical', 'Pre-employment health check-up is a medical assessment for employees who may require being in good health to perform their job duties.', '15', '10000', 'sivaji123@gmail.com');

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
  `serviceid` int(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `name`, `phone`, `date`, `time`, `address`, `district`, `city`, `instructions`, `landmark`, `url`, `status`, `email`, `serviceid`, `rating`, `feedback`, `rate`, `services`) VALUES
(1, 'Jessamine Fernandez', '33', '2005-05-01', '08:36', 'Accusamus esse id qu', 'malappuram', 'Totam facilis aut mo', 'Unde eos error qui e', 'Voluptatem Aperiam ', 'https://www.lolyjinyly.us', 2, 'joelshibu100@gmail.com', 1, 5, 'Good', '3000', 'Plumbing'),
(2, 'Isabelle Kirk', '28', '1992-06-09', '04:08', 'Dolorem vel accusant', 'ernakulam', 'Dolor eius neque ut ', 'Reprehenderit in err', 'Quia architecto duci', 'https://www.rerot.tv', 0, 'joelshibu100@gmail.com', 2, 3, '', '5000', 'Electrician'),
(3, 'Maggy Mejia', '95', '1980-02-07', '05:40', 'Temporibus irure qui', 'kottayam', 'Eum occaecat ipsum a', 'Non voluptate et et ', 'In officia mollitia ', 'https://www.xalehuzaqub.ws', 0, 'joelshibu100@gmail.com', 4, 0, '', '10000', 'Medical'),
(4, 'Adena Robinson', '58', '1975-08-19', '15:09', 'Sed quisquam archite', 'wayanad', 'Cupiditate placeat ', 'Minima officia est ', 'Consequatur velit ad', 'https://www.cimybodofy.me.uk', 0, 'joelshibu100@gmail.com', 3, 0, '', '3000', 'Painting'),
(5, 'Nigel Hobbs', '73', '1999-07-16', '03:45', 'Ut enim eiusmod dolo', 'kannur', 'Dolore maxime beatae', 'Eu amet laborum Na', 'Laboriosam possimus', 'https://www.pajahevoguq.net', 2, 'joelshibu100@gmail.com', 4, 4, 'excellent\r\n', '10000', 'Medical');

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
(1, 'bbbbb', 'bbbbb', 'low', '2024-01-05', 'joelshibu100@gmail.com', '0', 0);

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
  `password` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`fname`, `lname`, `housename`, `street`, `district`, `state`, `zip`, `dob`, `gender`, `phonenumber`, `email`, `aadhar`, `password`, `img`) VALUES
('Sivaji', 'Mohan', 'Caleb', 'Est', 'pathanamthitta', 'kerala', 45626, '1979-04-19', 'other', '8583365478', 'sivaji123@gmail.com', '9847025456', '123', 'default.png'),
('Cedri', 'Uma', 'Richar', 'Ipsum', 'ernakulam', 'kerala', 68226, '2009-03-16', 'other', '8583365478', 'qolakohaq@mailinator.com', '8589920123', 'Pa$$w0rd!', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favid` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `serviceid` varchar(10) NOT NULL,
  `services` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(50) NOT NULL,
  `services` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `services`, `description`, `status`) VALUES
(1, 'Plumbing', 'system of pipes and fixtures installed in a building for the distribution and use of potable (drinkable) water and the removal of waterborne wastes. ', 0),
(2, 'Electrician', ' skilled professional who specializes in installing, maintaining, and repairing electrical systems in buildings and structures.', 0),
(3, 'Painting', 'Apply paint, stain, and coatings to walls and ceilings, buildings, large machinery and equipment, and bridges and other structures.', 0),
(4, 'Medical', 'Pre-employment health check-up is a medical assessment for employees who may require being in good health to perform their job duties.', 1);

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
('hevu@mailinator.com', 'Pa$$w0rd!', 1, 0),
('jera@mailinator.com', 'Pa$$w0rd!', 1, -2),
('joelshibu100@gmail.com', '100', 1, 1),
('lolo@mailinator.com', 'Pa$$w0rd!', 1, -1),
('powi@mailinator.com', 'Pa$$w0rd!', 1, 0),
('qolakohaq@mailinator.com', 'Pa$$w0rd!', 2, 0),
('roveh@mailinator.com', 'Pa$$w0rd!', 1, 0),
('sivaji123@gmail.com', '123', 2, 1),
('voxel@mailinator.com', 'Pa$$w0rd!', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `medid` int(11) NOT NULL,
  `bookingid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `hypertension` varchar(50) NOT NULL,
  `diabetesmellitus` varchar(50) NOT NULL,
  `disease` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medid`, `bookingid`, `name`, `phone`, `age`, `dob`, `address`, `district`, `city`, `height`, `weight`, `hypertension`, `diabetesmellitus`, `disease`) VALUES
(1, 3, 'Karen Combs', '95', '93', '2007-05-10', 'Odio nisi et quia id', 'palakkad', 'Consequatur Elit i', 'Quasi aut dicta nesc', 'Commodi lorem quis o', 'Earum temporibus acc', 'Animi ullam commodi', ''),
(2, 5, 'Maxwell Fuentes', '73', '28', '2008-06-21', 'Eu cupidatat ut omni', 'kozhikode', 'Rerum nihil iusto vi', 'Molestias sint et a', 'Incidunt vel ex ass', 'Perferendis et volup', 'Enim iste temporibus', '');

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
  `password` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`fname`, `lname`, `state`, `district`, `dob`, `gender`, `email`, `phonenumber`, `password`, `img`) VALUES
('Kirby', 'Wanda', 'kerala', 'alapuzha', '1888-09-16', 'male', 'hevu@mailinator.com', '9544131746', 'Pa$$w0rd!', 'default.png'),
('Mackenzie', 'Ursa', 'kerala', 'kottayam', '1971-10-16', 'other', 'jera@mailinator.com', '8589920123', 'Pa$$w0rd!', 'default.png'),
('Joel', 'Shibu', 'kerala', 'ernakulam', '2003-07-20', 'male', 'joelshibu100@gmail.com', '9544131746', '100', 'joelshibu100gmailcom.png'),
('Maxinen', 'Mariam', 'kerala', 'kasaragod', '2003-12-07', 'other', 'lolo@mailinator.com', '9544131746', 'Pa$$w0rd!', 'default.png'),
('Armando', 'Raja', 'kerala', 'pathanamthitta', '1973-04-04', 'other', 'powi@mailinator.com', '9544131746', 'Pa$$w0rd!', 'default.png'),
('Avram', 'Oscar', 'kerala', 'malappuram', '2005-12-16', 'other', 'roveh@mailinator.com', '8583365478', 'Pa$$w0rd!', 'default.png'),
('Candice', 'Nina', 'kerala', 'malappuram', '1977-08-14', 'female', 'voxel@mailinator.com', '9544131746', 'Pa$$w0rd!', 'default.png');

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
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favid`);

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
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`medid`);

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
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

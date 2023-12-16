-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 09:49 AM
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
(1, 'Plumbing', 'System of pipes and fixtures installed in a building for the distribution of potable water and the removal of waterborne wastes. Plumbing is usually distinguished from water and sewage systems, which ', '14', '2000', 'sivaji123@gmail.com'),
(2, 'Electrician', 'Ensures piping complies with electrical codes. Installs circuit breakers and other electrical hardware and connects wiring to them. Connects electrical systems to powerlines to provide electricity to ', '16', '4000', 'sivaji123@gmail.com'),
(3, 'Medical', 'any maintenance care of, or preventive care for, the human body, or care, service, or treatment of an illness or dysfunction of, or injury to, the human body.\r\n', '10', '5000', 'sivaji123@gmail.com');

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
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `name`, `phone`, `date`, `time`, `address`, `district`, `city`, `instructions`, `landmark`, `url`, `status`, `email`, `serviceid`, `rating`, `feedback`) VALUES
(1, 'Aline Mathews', '62', '1972-12-30', '22:55', 'Voluptatem doloremqu', 'thiruvanathupuram', 'Ut officia itaque il', 'Asperiores ipsa qui', 'Aut tenetur omnis qu', 'https://www.qaxoduwo.ws', 2, 'joelshibu100@gmail.com', 1, 0, ''),
(2, 'Quyn Pratt', '33', '1997-03-28', '00:00', 'Reprehenderit dolore', 'alapuzha', 'Nostrud voluptas sit', 'Repellendus Sequi q', 'Assumenda ut reicien', 'https://www.xomac.us', 2, 'joelshibu100@gmail.com', 2, 0, ''),
(3, 'Cade Fields', '93', '1999-01-07', '19:54', 'Ad quo accusantium e', 'kottayam', 'Nulla enim laborum m', 'Voluptates at dicta ', 'Dolore quis exercita', 'https://www.bysupewoga.org.au', 2, 'joelshibu100@gmail.com', 3, 0, ''),
(5, 'Robin Floyd', '64', '1994-05-22', '03:49', 'Duis cillum tempor t', 'idukki', 'Dolorem quo tempore', 'Nobis harum architec', 'Rerum doloribus vel ', 'https://www.jahezuhuguweduz.com', 0, 'joelshibu100@gmail.com', 3, 0, ''),
(6, 'Hasad Franklin', '36', '1989-11-10', '12:04', 'Do dolorem consectet', 'kottayam', 'Sed suscipit distinc', 'Voluptatem Temporib', 'Exercitation consequ', 'https://www.fywihyde.in', 0, 'joelshibu100@gmail.com', 1, 0, ''),
(7, 'Yen Stafford', '43', '1989-06-08', '11:30', 'Consectetur aliquid ', 'wayanad', 'Aliquip laborum aut ', 'Mollitia maiores har', 'Ea eveniet aut vero', 'https://www.dodikinogiz.org', 0, 'joelshibu100@gmail.com', 2, 0, ''),
(8, 'Elaine Duran', '61', '2002-04-01', '03:09', 'Labore voluptatem O', 'kottayam', 'Provident sint erro', 'Explicabo Ut nihil ', 'Ab veniam obcaecati', 'https://www.jotu.com', 0, 'joelshibu100@gmail.com', 2, 0, ''),
(9, 'Dean Beard', '10', '1980-10-20', '02:25', 'Sint aliquid maxime ', 'wayanad', 'Qui autem ad eos est', 'Do laudantium et es', 'Corrupti repellendu', 'https://www.wowisagihuny.org.au', 0, 'joelshibu100@gmail.com', 1, 0, ''),
(10, 'Rigel Cleveland', '11', '2004-03-25', '15:15', 'Ullam qui amet magn', 'kozhikode', 'Recusandae Ab autem', 'Adipisicing enim dis', 'Culpa odio et ad ve', 'https://www.bakam.ws', 0, 'joelshibu100@gmail.com', 3, 0, ''),
(11, 'Anne Clayton', '80', '1990-07-07', '22:09', 'Mollitia ea aut dolo', 'thrissur', 'Quaerat laudantium ', 'Laborum dolores sed ', 'Ea ut atque modi nat', 'https://www.kefovojyxeduz.me.uk', 0, 'joelshibu100@gmail.com', 3, 0, ''),
(12, 'Ian Navarro', '9', '1994-10-04', '06:41', 'Eos iure laborum I', 'kottayam', 'Corrupti in labore ', 'Sit quibusdam proide', 'Illum voluptas nisi', 'https://www.tady.cc', 0, 'joelshibu100@gmail.com', 3, 0, ''),
(13, 'Edan Golden', '32', '1978-01-25', '06:50', 'Porro eos perspiciat', 'kollam', 'Anim fugiat consequ', 'Itaque ipsum adipis', 'Nisi aliquam sit ame', 'https://www.zydodefawohumyx.in', 0, 'joelshibu100@gmail.com', 3, 0, '');

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
(1, 'Exercitationem aut d', 'Sapiente aut sint au', 'low', '2023-10-14', 'sivaji123@gmail.com', '0', 1),
(2, 'Quibusdam ullam itaque ullam ad aut in sed', 'Nesciunt quia cupiditate dolores rerum voluptas magnam fugiat id rerum', 'medium', '2023-12-09', 'joelshibu100@gmail.com', 'ok', 0),
(3, 'Nam porro quaerat doloribus corrupti rerum tempor', 'Officiis duis quidem quos ut occaecat eveniet aspernatur velit enim et saepe ducimus ratione tempore quis qui aspernatur', 'medium', '2023-12-09', 'joelshibu100@gmail.com', '0', 0),
(4, 'Aut minim similique magna modi sed et eum et accus', 'Est id ut ut irure est hic', 'low', '2023-12-09', 'sivaji123@gmail.com', 'bye', 1),
(5, 'Qui rerum facilis voluptas corporis', 'Nostrum et accusantium tempora eiusmod ex sapiente occaecat fuga Molestiae vero modi labore veniam aliquid esse qui aut', 'high', '2023-12-09', 'sivaji123@gmail.com', '0', 1);

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
('Sivaji', 'Mohan', 'Ezekiel', 'Est', 'pathanamthitta', 'kerala', 96730, '1997-02-11', 'other', '9544131746', 'sivaji123@gmail.com', '8589920123', '123', 'sivaji123gmailcom.jpg'),
('Kaitlin Mayo', 'Bruno Mcbride', 'Cora Buckner', 'Molestiae', 'wayanad', 'kerala', 99409, '1989-10-14', 'male', '4561230789', 'buqurogo@mailinator.com', '2134574777', 'Pa$$w0rd!', 'default.png');

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

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`favid`, `email`, `serviceid`, `services`, `fname`, `lname`, `description`, `rate`, `status`) VALUES
(1, 'joelshibu100@gmail.com', '1', 'Plumbing', 'Sivaji', 'Mohan', 'System of pipes and fixtures installed in a building for the distribution of potable water and the removal of waterborne wastes. Plumbing is usually distinguished from water and sewage systems, which ', '2000', '1');

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
(1, 'Medical', 'mmm', 1),
(2, 'Plumbing', 'mmmm', 0),
(3, 'Electrician', 'aaa', 0),
(4, 'Painting', 'ssss', 0);

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
('buqurogo@mailinator.com', 'Pa$$w0rd!', 2, 0),
('joelshibu100@gmail.com', '100', 1, 1),
('pyje@mailinator.com', 'Pa$$w0rd!', 1, -1),
('rahul@gmail.com', '000', 1, -2),
('rahuldamu760@gmail.com', '760', 1, 1),
('sivaji123@gmail.com', '123', 2, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `expiry` datetime NOT NULL,
  `sendtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('Joel', 'Shibu', 'kerala', 'kottayam', '1975-09-22', 'male', 'joelshibu100@gmail.com', '9544131746', '100', 'joelshibu100gmailcom.jpg'),
('Laith Contreras', 'Mary Warner', 'kerala', 'idukki', '2008-07-16', 'female', 'pyje@mailinator.com', '7894561230', 'Pa$$w0rd!', 'default.png'),
('Rahul', 'Reji', 'kerala', 'ernakulam', '2010-04-03', 'male', 'rahul@gmail.com', '8583365478', '000', 'default.png'),
('Rahul Reji', 'Damodaran', 'kerala', 'thiruvanathupuram', '1992-01-18', 'other', 'rahuldamu760@gmail.com', '8589920123', '760', 'rahuldamu760gmailcom.jpg');

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
  MODIFY `serviceid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

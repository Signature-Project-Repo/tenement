-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 05:58 PM
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
(1, 'Plumbing', 'Plumber duties depend on the project type they are undertaking; typically these include inspecting existing pipe work; testing pressure levels; locating blockages or leaks; fitting replacement parts such as valves or taps; installing new pipes or appliances such as toilets or showers; connecting waste disposal units to ...', '14', '1200', 'sivaji123@gmail.com'),
(2, 'Electrician', 'Electrical technicians play a key role in the production, installation, maintenance, and repair of electrical equipment. They may work on communication, lighting, and control systems in factories, homes, buildings, and job sites. They often collaborate closely with electrical engineers and electricians', '10', '3000', 'sivaji123@gmail.com'),
(3, 'Painting', 'Painting Services Introduction. Painting Services lend a professional hand to amateur efforts at restoring or renewing the interior and exterior walls of a property. In each and every case when painting services are employed the common aim is to beautify or redesign a certain wall section or even the entire space', '4', '2000', 'sivaji123@gmail.com'),
(4, 'Medical', 'Medical service means any medical treatment or any medical, surgical, diagnostic, chiropractic, dental, hospital, nursing, ambulances, or other related services; drugs, medicine, crutches, prosthetic appliances, braces, and supports; and where necessary, physical restorative services.', '20', '10000', 'sivaji123@gmail.com');

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
(1, 'Simon Kane', '89', '2024-01-09', '22:34:34', 'Culpa fugiat tenetur officia voluptatum culpa enim eius dolore dolor magni odio architecto nisi officia cupidatat reprehenderit', 'kannur', 'Ut et similique maxi', 'Ullam voluptatibus nobis qui autem ipsam qui dolor voluptate adipisci qui molestias eum est irure ad labore sequi consequat', 'Ad id Nam reprehenderit quia autem ipsam eos accusantium sed nesciunt et deleniti sunt nihil fug', 'https://www.wagyrape.com.au', 1, 'joelshibu100@gmail.com', 1, 4, '', '1200', 'Plumbing'),
(2, 'Galvin Rojas', '86', '2024-01-10', '13:54', 'Ut officia veritatis eligendi possimus laboris esse autem vitae ab voluptas consequatur quia magnam aut possimus', 'thrissur', 'Consectetur esse co', 'Dolorem consequuntur eos magna sit lorem sed illo consequuntur aut cumque tempor sit doloremque veritatis facere quidem non in', 'Sed et adipisicing libero rerum eos deleniti expedita rerum quaerat ullamco eos incidunt nemo et ', 'https://www.tavubimusyjubi.org', 0, 'joelshibu100@gmail.com', 2, 4, '', '3000', 'Electrician'),
(3, 'Dora Velazquez', '9544131746', '2024-01-21', '04:19', 'Consectetur omnis molestiae expedita dicta', 'alapuzha', 'Quo natus eu quo est', 'Tempora minus at quam numquam', 'Esse dolorem laborum similique praesentium reprehenderit sit iste laborum rerum', 'https://www.xuputegopydelus.us', 3, 'joelshibu100@gmail.com', 3, 5, 'Good\r\n', '2000', 'Painting'),
(4, 'Ivy Lawrence', '9544131746', '2024-01-10', '10:00', 'Officiis dolore molestiae qui laboris nisi voluptatibus soluta dolore', 'palakkad', 'Deserunt quibusdam c', 'Doloremque deserunt architecto cumque ad molestiae autem', 'Consequatur quae qui laboris excepturi earum sit minus', 'https://www.jisykyqak.com.au', -1, 'joelshibu100@gmail.com', 4, 3, '', '10000', 'Medical');

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
(1, 'Quisquam architecto qui nisi neque esse eum elige', 'Laboriosam ea obcaecati qui optio est dolore ut eos reiciendis eaque maiores ratione nisi ipsam consequatur quo', 'medium', '2024-01-09', 'sivaji123@gmail.com', 'ok', 1),
(2, 'Odio eiusmod ratione voluptate eiusmod aliquip ani', 'Corporis nesciunt consequatur Accusamus qui', 'high', '2024-01-09', 'sivaji123@gmail.com', '0', 1),
(3, 'Deserunt doloribus est animi laborum Velit labo', 'Vel eaque suscipit sunt quidem perferendis temporibus debitis excepteur dolorum non placeat', 'high', '2024-01-09', 'joelshibu100@gmail.com', 'ok', 0),
(4, 'Natus necessitatibus aut labore ipsum illum volu', 'Ratione cumque amet tempor sit repellendus Consequat Aute sit consequatur rem qui nostrum facilis repudiandae corrupti commodo', 'low', '2024-01-09', 'joelshibu100@gmail.com', '0', 0);

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
('Sivaji', 'Mohan', 'Elavanankuzhiyil', 'Illikamukkada', 'ernakulam', 'kerala', 682314, '2003-08-16', 'male', '7894561230', 'sivaji123@gmail.com', '8589920123', 'Sivaji@123', 'default.png'),
('Maxine', 'Powell', 'Iola', 'Rem', 'thrissur', 'kerala', 293810, '1987-07-24', 'other', '8583365478', 'himy@mailinator.com', '7854521521', 'Pa$$w0rd!', 'default.png'),
('Montana', 'Zorita', 'Hakeem Sutton', 'Ut Reici', 'idukki', 'kerala', 77652, '2000-11-21', 'other', '9577854564', 'taqef@mailinator.com', '7854521521', 'Pa$$w0rd!', 'default.png'),
('Russell', 'Dorsey', 'Melinda Carpenter', 'Nam', 'palakkad', 'kerala', 20777, '2000-06-21', 'female', '8589920123', 'daliguru@mailinator.com', '7854521521', 'Pa$$w0rd!', 'default.png');

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
(3, 'joelshibu100@gmail.com', '2', 'Electrician', 'Sivaji', 'Mohan', 'Electrical technicians play a key role in the production, installation, maintenance, and repair of electrical equipment. They may work on communication, lighting, and control systems in factories, homes, buildings, and job sites. They often collaborate closely with electrical engineers and electricians', '3000', '1'),
(4, 'joelshibu100@gmail.com', '3', 'Painting', 'Sivaji', 'Mohan', 'Painting Services Introduction. Painting Services lend a professional hand to amateur efforts at restoring or renewing the interior and exterior walls of a property. In each and every case when painting services are employed the common aim is to beautify or redesign a certain wall section or even the entire space', '2000', '1');

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
(1, 'Plumbing', ' system of pipes and fixtures installed in a building for the distribution and use of potable (drinkable) water and the removal of waterborne wastes. It is usually distinguished from water and sewage ', 0),
(2, 'Electrician', 'Electrical technicians play a key role in the production, installation, maintenance, and repair of electrical equipment. They may work on communication, lighting, and control systems in factories', 0),
(3, 'Painting', 'Painting Services Introduction. Painting Services lend a professional hand to amateur efforts at restoring or renewing the interior and exterior walls of a property. In each and every case when painti', 0),
(4, 'Medical', 'Medical service means any medical treatment or any medical, surgical, diagnostic, chiropractic, dental, hospital, nursing, ambulances, or other related services; drugs, medicine, crutches, prosthetic ', 1);

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
('daliguru@mailinator.com', 'Pa$$w0rd!', 2, -1),
('himy@mailinator.com', 'Pa$$w0rd!', 2, -2),
('joelshibu100@gmail.com', 'Joel@100', 1, 1),
('jyva@mailinator.com', 'Pa$$w0rd!', 1, -1),
('kucexuvume@mailinator.com', 'Pa$$w0rd!', 1, 0),
('sivaji123@gmail.com', 'Sivaji@123', 2, 1),
('taqef@mailinator.com', 'Pa$$w0rd!', 2, 0),
('wovekaxas@mailinator.com', 'Pa$$w0rd!', 1, -2);

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
(1, 4, 'Raja Tran', '9544131746', '43', '2010-03-17', 'Sed odit aut eum qua', 'kottayam', 'Sed aliquid harum ad', '200', '75', 'Qui et qui suscipit ', 'Voluptatem saepe rep', 'Fugit excepturi ab ');

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
('Joel', 'Shibu', 'kerala', 'ernakulam', '2003-07-20', 'male', 'joelshibu100@gmail.com', '9544131746', 'Joel@100', 'default.png'),
('Vincent', 'Vielka', 'kerala', 'pathanamthitta', '1986-09-16', 'female', 'jyva@mailinator.com', '7894561230', 'Pa$$w0rd!', 'default.png'),
('Nasim', 'Remedios', 'kerala', 'kozhikode', '1982-11-09', 'other', 'kucexuvume@mailinator.com', '4561230789', 'Pa$$w0rd!', 'default.png'),
('Caesar', 'Camilla', 'kerala', 'palakkad', '1985-07-11', 'other', 'wovekaxas@mailinator.com', '9555545454', 'Pa$$w0rd!', 'default.png');

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
  MODIFY `bookingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

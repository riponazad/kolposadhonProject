-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 09:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolposadhon_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `LastName`, `FirstName`, `email`, `password`) VALUES
(1, 'Azad', 'Ripon', 'rripon816@gmail.com', '12345'),
(8, 'Mickey', 'Mouse', 'akash@example.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `borrower_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `loan_amount` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`borrower_id`, `user_id`, `loan_amount`) VALUES
(1, 3, '10000.000'),
(5, 10, '30000.000'),
(6, 12, '25000.000'),
(7, 13, '10000.000'),
(8, 14, '0.000'),
(9, 14, '12000.000'),
(10, 13, '20000.000'),
(11, 6, '7000.000'),
(12, 1, '10000.000'),
(13, 10, '12000.000'),
(14, 9, '12000.000'),
(15, 9, '12000.000'),
(18, 18, '50000.000'),
(19, 15, '50000.000');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `business_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `fund_amount` decimal(10,3) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `duration` int(10) NOT NULL,
  `rate` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`business_id`, `title`, `catagory`, `borrower_id`, `fund_amount`, `description`, `duration`, `rate`) VALUES
(6, 'à¦®à§Žà¦¸à§à¦¯ à¦–à¦¾à¦®à¦¾à¦° ', 'à¦•à§ƒà¦·à¦¿', 7, '10000.000', '13', 6, '3.5'),
(8, 'à¦®à§à¦°à¦—à¦¿à¦° à¦–à¦¾à¦®à¦¾à¦°à¥¤ ', 'à¦•à§ƒà¦·à¦¿', 8, '12000.000', '14', 12, '3.8'),
(9, 'à¦•à§‹à¦°à¦¬à¦¾à¦¨à¦¿à¦° à¦—à¦°à§ à¦ªà¦¾à¦²à¦¨à¥¤ ', 'à¦•à§ƒà¦·à¦¿', 7, '20000.000', '13', 15, '4.5'),
(10, 'à¦§à¦¾à¦¨ à¦šà¦¾à¦·à¥¤ ', 'à¦•à§ƒà¦·à¦¿', 11, '7000.000', '6', 6, '2.5'),
(11, 'à¦†à¦à¦– à¦šà¦¾à¦·à¥¤ ', 'à¦•à§ƒà¦·à¦¿', 12, '10005.000', '1', 6, '4.5'),
(12, 'à¦•à¦¾à¦à¦šà¦¾ à¦®à¦¾à¦²à§‡à¦° à¦¦à§‹à¦•à¦¾à¦¨à¥¤ ', 'à¦•à§ƒà¦·à¦¿', 5, '12000.000', '10', 6, '3.5'),
(14, 'home tutor', 'à¦•à§ƒà¦·à¦¿', 14, '12000.000', 'Hello world', 10, '3.5'),
(16, 'Fashion Shop', 'à¦¦à§‹à¦•à¦¾à¦¨', 19, '50000.000', 'It would be a cloth shop.', 12, '3.5');

-- --------------------------------------------------------

--
-- Table structure for table `business_catagories`
--

CREATE TABLE `business_catagories` (
  `investor_id` int(11) NOT NULL,
  `catagory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `investment_id` int(11) NOT NULL,
  `investor_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `invest_amount` decimal(10,3) NOT NULL,
  `invest_duration` int(10) NOT NULL,
  `is_active` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `investor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` decimal(10,3) NOT NULL,
  `duration` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`investor_id`, `user_id`, `amount`, `duration`) VALUES
(2, 8, '134.000', 6),
(3, 9, '9998.000', 13),
(5, 16, '9998.000', 13),
(6, 15, '9998.000', 13),
(8, 14, '1008.000', 9),
(12, 1, '10000.000', 6),
(13, 13, '20000.000', 12),
(14, 8, '15000.000', 6),
(15, 9, '2000.000', 6),
(16, 1, '4000.000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `investor_list`
--

CREATE TABLE `investor_list` (
  `investor_id` int(11) NOT NULL,
  `amount` decimal(10,3) NOT NULL,
  `profit` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `phone_number` varchar(22) NOT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `email`, `password`, `birth_date`, `phone_number`, `gender`) VALUES
(1, 'Akash Sarker', 'Dhaka', 'akash@example.com', '123', '0000-00-00', '', 'male'),
(3, 'Ripon', 'Dhaka', 'ripon@example.com', '124', '1996-12-30', '01688047596', 'male'),
(6, 'Raj', 'Rajshahi', 'raj@example.com', '125', NULL, '', 'male'),
(7, 'Deepita Saha', 'Dhaka', 'deepita@example.com', '111', '0000-00-00', '', 'female'),
(8, 'Tanvir', 'Chittagong', 'tanvir@example.com', '222', '0000-00-00', '', 'male'),
(9, 'Efrana Jannat', 'Chittagong', 'efrana@example.com', '333', '0000-00-00', '', 'female'),
(10, 'Sadia Islam', 'Dhaka', 'sadia@example.com', '444', '0000-00-00', '', 'female'),
(11, 'Faima Ishana', 'Rangpur', 'ishana@example.com', '888', '0000-00-00', '', 'female'),
(12, 'Asif Ahmed', 'Barishal', 'asif@example.com', '897', '0000-00-00', '', 'male'),
(13, 'Jahan Ahmed', 'Dhaka', 'jahan@example.com', '120', '0000-00-00', '', 'male'),
(14, 'Kabir Hassan', 'Barishal', 'kabir@example.com', '987', '0000-00-00', '', 'male'),
(15, 'Riti Raisa', 'Barishal', 'riti@example.com', '777', '0000-00-00', '', 'female'),
(16, 'à¦°à¦¹à¦¿à¦® à¦®à¦¿à§Ÿà¦¾', 'Rangpur', 'rahim@example.com', '589', '0000-00-00', '', 'male'),
(17, 'Safiqul islam kunal', 'narayanganj', 'safiqulkunal@gmail.com', '1234567890', '0000-00-00', '01676182617', 'male'),
(18, 'Himu', '', 'himu@gmail.com', '1234', '0000-00-00', '', NULL),
(33, 'sdsa', 'sd', 'sds', 'sdas', '0000-00-00', 'sdsa', NULL),
(34, '', '', '', '', '0000-00-00', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`borrower_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`business_id`),
  ADD KEY `borrower_id` (`borrower_id`);

--
-- Indexes for table `business_catagories`
--
ALTER TABLE `business_catagories`
  ADD KEY `investor_id` (`investor_id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`investment_id`),
  ADD KEY `investor_id` (`investor_id`),
  ADD KEY `business_id` (`business_id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`investor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `investor_list`
--
ALTER TABLE `investor_list`
  ADD KEY `investor_id` (`investor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `borrower_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `investment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `investor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD CONSTRAINT `borrowers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `businesses`
--
ALTER TABLE `businesses`
  ADD CONSTRAINT `businesses_ibfk_1` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`borrower_id`);

--
-- Constraints for table `business_catagories`
--
ALTER TABLE `business_catagories`
  ADD CONSTRAINT `business_catagories_ibfk_1` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`investor_id`);

--
-- Constraints for table `investment`
--
ALTER TABLE `investment`
  ADD CONSTRAINT `investment_ibfk_1` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`investor_id`),
  ADD CONSTRAINT `investment_ibfk_2` FOREIGN KEY (`business_id`) REFERENCES `businesses` (`business_id`);

--
-- Constraints for table `investors`
--
ALTER TABLE `investors`
  ADD CONSTRAINT `investors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `investor_list`
--
ALTER TABLE `investor_list`
  ADD CONSTRAINT `investor_list_ibfk_1` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`investor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

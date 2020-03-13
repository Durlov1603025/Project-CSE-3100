-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 06:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qa`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(11) NOT NULL,
  `q_id` int(11) DEFAULT NULL,
  `ans_body` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `q_id`, `ans_body`, `email`, `time`) VALUES
(1, 1, 'Structured query language\r\n', 'durlovrahman32@gmail.com', '2019-10-19 05:14:24'),
(2, 1, 'It means Structured Query Language. It is non-procedural.', 'rmshoebne14@gmail.com', '2019-11-18 08:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_title` varchar(500) DEFAULT NULL,
  `q_description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_title`, `q_description`, `image`, `email`, `time`) VALUES
(1, 'SQL', 'What is meant by SQL?', NULL, 'isty@yahoo.com', '2019-10-18 09:33:15'),
(2, 'Differnce between primary key &amp; foreign key', 'What is the difference between these keys?\r\n', NULL, 'durlovrahman32@gmail.com', '2019-10-19 05:13:33'),
(3, 'loppp', 'What is for loop?', 'uploaded_images/Screenshot (10).png', 'durlovrahman32@gmail.com', '2019-12-21 06:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`first_name`, `last_name`, `email`, `password`, `phone_no`, `DOB`) VALUES
('Mahbubur Rahman', 'Durlov', 'durlovrahman32@gmail.com', '1603025', '01775964184', '1997-05-15'),
('Fatin', 'Faiaz', 'isty@yahoo.com', '1603011', '01728503056', '1997-05-20'),
('Riyad Morshed', 'Shoeb', 'rmshoebne14@gmail.com', '1603013', '01816756052', '1998-01-14'),
('Tauhid', 'Rahman', 'shammo@ymail.com', '12345', '02585', '1998-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `q_id` (`q_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `questions` (`q_id`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`email`) REFERENCES `user_info` (`email`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user_info` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

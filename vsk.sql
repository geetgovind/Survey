-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 06:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsk`
--

-- --------------------------------------------------------

--
-- Table structure for table `quesions`
--

CREATE TABLE `quesions` (
  `qid` int(2) NOT NULL,
  `question` varchar(500) NOT NULL,
  `ans1` varchar(500) NOT NULL,
  `ans2` varchar(500) NOT NULL,
  `ans3` varchar(500) NOT NULL,
  `ans4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quesions`
--

INSERT INTO `quesions` (`qid`, `question`, `ans1`, `ans2`, `ans3`, `ans4`) VALUES
(1, 'Question 1 here', 'option 1', 'option 2', 'option 3', 'option 4');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` varchar(255) NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`id`, `question_id`, `answer_text`, `is_correct`) VALUES
(1, 1, 'Redqqqqq', 1),
(2, 1, 'Blue', 1),
(3, 1, 'Green', 1),
(4, 1, 'Yellow', 1),
(5, 1, 'Blue', 1),
(6, 1, 'Green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'andhrapradesh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'arunachalpradesh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'assam@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'bihar@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'chhattisgarh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'goa@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'gujarat@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(9, 'haryana@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'himachalpradesh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'jharkhand@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'karnataka@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'kerala@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(14, 'madhyapradesh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(15, 'maharashtra@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'manipur@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'meghalaya@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(18, 'mizoram@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(19, 'nagaland@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(20, 'odisha@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(21, 'punjab@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(22, 'rajasthan@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(23, 'sikkim@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(24, 'tamil Nadu@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(25, 'telangana@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(26, 'tripura@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(27, 'uttarpradesh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(28, 'uttarakhand@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(29, 'westbengal@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(30, 'andamannicobar@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(31, 'chandigarh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(32, 'dadradaman@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(33, 'lakshadweep@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(34, 'delhi@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(35, 'puducherry@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(36, 'ladakh@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(37, 'kvs@vsk.in', '21232f297a57a5a743894a0e4a801fc3'),
(38, 'nvs@vsk.in', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quesions`
--
ALTER TABLE `quesions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quesions`
--
ALTER TABLE `quesions`
  MODIFY `qid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

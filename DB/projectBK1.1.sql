-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerID` int(11) NOT NULL,
  `userID` int(11) NOT NULL DEFAULT 0,
  `questionID` int(11) NOT NULL DEFAULT 0,
  `answer` longtext DEFAULT NULL,
  `likeCount` int(11) DEFAULT 0,
  `dislikeCount` int(11) NOT NULL DEFAULT 0,
  `aOrder` int(11) NOT NULL DEFAULT 0,
  `dateAdded` datetime NOT NULL,
  `dateModified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerID`, `userID`, `questionID`, `answer`, `likeCount`, `dislikeCount`, `aOrder`, `dateAdded`, `dateModified`, `status`) VALUES
(3, 19, 1, 'df', 4, 2, 2, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(4, 19, 1, 'df', 1, 0, 1, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(5, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(6, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(7, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(8, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(9, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(10, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(11, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(12, 19, 1, 'df', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(13, 19, 1, 'answers working', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(14, 19, 6, 'ad', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(15, 19, 6, 'The database', 0, 0, 0, '2021-05-20 00:00:00', '2021-05-20 00:00:00', 1),
(16, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(17, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(18, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(19, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(20, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(21, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(22, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(23, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(24, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(25, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(26, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(27, 19, 1, 'this is another answer', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(28, 19, 1, 'dbms', 0, 0, 0, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(29, 19, 1, 'all ok', 1, 0, 1, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(30, 19, 1, 'mkdir', 1, 0, 1, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(31, 19, 1, 'done', 3, 2, 1, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(32, 19, 1, 'my phone', 2, 0, 2, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(33, 19, 1, 'all ok', 1, 0, 1, '2021-05-22 00:00:00', '2021-05-22 00:00:00', 1),
(34, 19, 7, 'primary key', 0, 0, 0, '2021-05-27 00:00:00', '2021-05-27 00:00:00', 1),
(35, 19, 1, 'This is my 30th answer of question', 3, 1, 2, '2021-05-31 00:00:00', '2021-05-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quans`
--

CREATE TABLE `quans` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `askedby` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quans`
--

INSERT INTO `quans` (`id`, `question`, `askedby`, `userID`) VALUES
(1, 'What are the best books to learn algorithms and data structures?', 'ayusht2396', 0),
(2, 'How to calculate time complexity of loops ?', 'pjain', 0),
(3, 'How to calculate time complexity when there are many if, else statements inside loops ?', 'shub011', 0),
(4, 'Is a computer architecture class useful for a computer science major who wishes to work as a software engineer?', 'Ujwal_1997', 0),
(5, 'Is there a trick or easier way to learn the instruction set of microproccesor 8085?', 'ayusht2396', 0),
(6, 'What are advantages of DBMS over traditional file based systems ?', 'Shivam010', 0),
(7, 'What are super, primary, candidate and foreign keys?', 'Ujwal_1997', 0),
(8, 'What is the difference between primary key and unique constraints?', 'pjain', 0),
(9, 'What is database normalization?', 'shub011', 0),
(10, 'What is SQL?', 'ayusht2396', 0),
(11, 'What are the differences between DDL, DML and DCL in SQL?', 'Ujwal_1997', 0),
(12, 'What is the difference between having and where clause?', 'pjain', 0),
(13, 'Two dice are rolled once. Calculate the probability that the sum of the numbers on the two dice is 5.\r\n', 'shub011', 0),
(14, 'What is the probability of getting head when tossing a coin ?', 'Ujwal_1997', 0),
(15, 'What is computer software?', 'ayusht2396', 0),
(16, 'Can you differentiate computer software and computer program?\r\n', 'pjain', 0),
(17, 'What is software engineering?', 'shub011', 0),
(18, 'When you know programming, what is the need to learn software engineering concepts?\r\n', 'Shivam010', 0),
(19, 'What is software process or Software Development Life Cycle (SDLC)?\n', 'Ujwal_1997', 0),
(20, 'What are SDLC models available?\r\n', 'ayusht2396', 0),
(21, 'What are various phases of SDLC?\r\n', 'pjain', 0),
(22, 'Which SDLC model is the best?', 'Ujwal_1997', 0),
(23, 'What is software project management?\r\n', 'shub011', 0),
(24, 'Who is software project manager?\r\n', 'pjain', 0),
(25, 'What is SRS?\r\n', 'ayusht2396', 0),
(26, 'What are functional requirements?\r\n', 'Ujwal_1997', 0),
(27, 'What are non-functional requirements?\r\n', 'Ujwal_1997', 0),
(28, 'How many types of Grammars are there in theory of computation?', 'Shivam010', 0),
(29, 'How is the developer of Interrogate website?', 'Ujwal_1997', 0),
(30, 'Ask a Question?', 'Shivam010', 0),
(32, 'What is ShivamRathore?', 'Shivam010', 0),
(33, 'How is this page working?', 'ayusht2396', 0),
(39, 'Nothing to ask.', 'Shivam010', 0),
(40, 'Why need programming', 'ak', 0),
(41, 'Hey what\'s up', 'ak', 19),
(42, 'This is my second question ?', 'ak', 19),
(43, 'Which mobile phone is best ?', 'ak', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `join_date`) VALUES
(17, 'admin', '$2y$10$P8b3vf6Z9U81CyDhoe4XhOglpC6BNPmpwoY46oxCyuXB4P0JDLDEG', 'Shivam Rathore', 'shivam.rathore010@gmail.com', '2017-04-11 18:59:57'),
(19, 'ak', '$2y$10$A9eEjoyc52SdDZS4bsQkTu0.OwuO2ZnWtgpgMIItp2UoCveqCyVr6', 'Abdul Khan', 'ak@gmail.com', '2021-05-19 17:40:00'),
(9, 'ayusht2396', '$2y$10$sN9WIHwcj5urboVA.fHZouLQM7/neAf1QOHJaYi4Mqysps3kdYgBq', 'Ayush Tripathi', 'ayusht2396@gmail.com', '2017-03-30 16:34:59'),
(13, 'pjain', '$2y$10$iMvJcCrkuDaeaquwzjZZjehRFCdGrojkchTCLnJtihG6GNtviohjq', 'Prakhar Jain', 'pjain@gmail.com', '2017-03-30 17:09:07'),
(8, 'Shivam010', '$2y$10$QWwY6YAqgf2Vx1IOIzflHeMcmwKf7h/W1a.FfRYrLxpcLkRg13Ypm', 'Shivam Rathore', 'shivam.rathore010@gmail.com', '2017-03-30 13:26:51'),
(11, 'shub011', '$2y$10$eu7S5jsNaBHoI2twfrpPxOxcnUuvL0h7oGHzWH9sPPL96eNvR2QMC', 'Shubham Bairagi', 'sbv351997@gmail.com', '2017-03-30 16:43:21'),
(14, 'Ujwal_1997', '$2y$10$c4TeDn9ZuFeGOLkUfrbx6u5GtKhN5EKtVrAgBztCiLaeX33.pDt76', 'Ujwal Shah', 'ujwalsaurav@gmail.com', '2017-04-02 11:31:17'),
(16, 'user', '$2y$10$eEIXvBr8rUoxUbEBzag3N.fqKfrzTYfhC3p6.2g78ql2ujhOLy1Pa', 'Username', 'user@gmail.com', '2017-04-07 06:05:51'),
(15, 'xyz', '$2y$10$YOZ/L6mGVPJ6ng0vVoGXxO5h7rI8XizNl/2z.kaRGx/4338aaUaDe', 'XYZ', 'xyz@gmail.com', '2017-04-06 13:30:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerID`);

--
-- Indexes for table `quans`
--
ALTER TABLE `quans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `askedby` (`askedby`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `quans`
--
ALTER TABLE `quans`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quans`
--
ALTER TABLE `quans`
  ADD CONSTRAINT `quans_ibfk_1` FOREIGN KEY (`askedby`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

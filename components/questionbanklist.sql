-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:25 PM
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
-- Database: `uiu_helpline`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionbanklist`
--

CREATE TABLE `questionbanklist` (
  `id` int(11) NOT NULL,
  `question_title` varchar(100) NOT NULL,
  `question_details` varchar(500) NOT NULL,
  `question_file` varchar(300) NOT NULL,
  `question_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionbanklist`
--

INSERT INTO `questionbanklist` (`id`, `question_title`, `question_details`, `question_file`, `question_by`, `date`) VALUES
(20, 'SE Final Question', 'software engineering final question', 'Fall-2021-Solution (1).pdf', 8, '2023-04-19 16:29:54'),
(21, 'WEB Mid Question', 'Web programming mid term question', 'Mid_Term_Question_213_CSE4325_C_MHR (2).pdf', 8, '2023-04-19 16:50:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionbanklist`
--
ALTER TABLE `questionbanklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionbanklist`
--
ALTER TABLE `questionbanklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

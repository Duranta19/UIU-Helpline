-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:24 PM
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
-- Table structure for table `questionans`
--

CREATE TABLE `questionans` (
  `id` int(11) NOT NULL,
  `quesAns` varchar(500) NOT NULL,
  `ansBy` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `ansFile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionans`
--

INSERT INTO `questionans` (`id`, `quesAns`, `ansBy`, `question_id`, `date`, `ansFile`) VALUES
(11, 'Here Is the solution of the question', 8, 21, '2023-04-19 20:19:44', 'Fall-2021-Solution.pdf'),
(12, 'Another solution', 8, 21, '2023-04-19 20:20:58', 'VentureVest.pdf'),
(13, 'Here is the solution of SE ', 8, 20, '2023-04-19 20:21:38', 'CamScanner-02-14-2023-21.54 (1).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questionans`
--
ALTER TABLE `questionans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionans`
--
ALTER TABLE `questionans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

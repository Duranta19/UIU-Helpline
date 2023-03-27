-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 09:32 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `name` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `photo_loc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `username`, `password`, `c_password`, `userid`, `photo_loc`) VALUES
('rohit', '011201023', '1234', '1234', 1, ''),
('Musfiq', '011201023', 'm123 ', 'm123 ', 4, ''),
('rifat', '011201434', 'rifat ', 'rifat ', 5, ''),
('Abed Jafry', 'abed', 'abed ', 'abed ', 7, '147651229_2823273524579897_425605372278318166_n (1).jpg'),
('rifat', '011', '011 ', '011 ', 8, 'FullSizeRender.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `community_post`
--

CREATE TABLE `community_post` (
  `id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_details` text NOT NULL,
  `post_by` int(11) DEFAULT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_post`
--

INSERT INTO `community_post` (`id`, `post_title`, `post_details`, `post_by`, `date`) VALUES
(1, 'Hi', 'need help', 1, '2023-03-02 14:21:11.440469'),
(2, 'Hello', 'lorem amsdsnc awdj jdnwc wjhduwcx awbdwawn', 1, '2023-03-02 14:21:50.937770'),
(3, 'dawd', 'wfacvwcvweccascacacewcc wfdwfwacwcwdw', 1, '2023-03-02 14:22:08.250312'),
(4, 'cse', 'dhoinchar department', 1, '2023-03-02 14:46:21.037309'),
(6, 'PHP', 'Should I learn PHP?\r\n', 1, '2023-03-27 21:21:55.289264'),
(7, 'java', 'java sikho', 1, '2023-03-28 00:12:38.080845'),
(8, 'c++', 'c++++++', 8, '2023-03-28 01:28:27.022736');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(20) NOT NULL,
  `course_des` text NOT NULL,
  `prerequisite` varchar(10) NOT NULL,
  `offered_trimester` varchar(3) NOT NULL,
  `img` varchar(500) NOT NULL,
  `credit_hour` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_code`, `course_title`, `course_des`, `prerequisite`, `offered_trimester`, `img`, `credit_hour`) VALUES
(1, 'CSE 2121', 'Object', 'dacwcwecsdaces efvewsvwwvewvweve efegfwvev', 'CSE1101', '3', 'web-development-companies-scaled.jpg', '3'),
(2, 'OOP Lab', 'CSE 2202', 'csc fecds ferv ', 'SPL Lab', '3', 'web-development-companies-scaled.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

CREATE TABLE `course_review` (
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review` text NOT NULL,
  `difficulty_level` int(2) NOT NULL,
  `date` datetime(6) NOT NULL,
  `review_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_by` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `comment`, `comment_by`, `post_id`, `date`) VALUES
(4, 'dawdadwd', 1, 3, '0000-00-00 00:00:00.000000'),
(5, 'wddadaw', 1, 5, '0000-00-00 00:00:00.000000'),
(6, 'wddadaw', 1, 5, '0000-00-00 00:00:00.000000'),
(7, 'dadwadawfvcsvcdscdvedvev', 1, 5, '0000-00-00 00:00:00.000000'),
(8, 'vsdffdfv', 1, 2, '0000-00-00 00:00:00.000000'),
(9, 'yes ofcourse\r\n', 1, 6, '0000-00-00 00:00:00.000000'),
(10, 'sikhso?\r\n', 1, 7, '0000-00-00 00:00:00.000000'),
(11, 'yes', 1, 7, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `community_post`
--
ALTER TABLE `community_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_review`
--
ALTER TABLE `course_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `community_post`
--
ALTER TABLE `community_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_review`
--
ALTER TABLE `course_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

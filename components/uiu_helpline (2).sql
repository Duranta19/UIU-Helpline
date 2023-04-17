-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 11:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `username`, `password`, `c_password`, `userid`, `photo_loc`) VALUES
('rohit', '011201023', '1234', '1234', 1, ''),
('Musfiq', '011201023', 'm123 ', 'm123 ', 4, ''),
('rifat', '011201434', 'rifat ', 'rifat ', 5, ''),
('Abed Jafry', 'abed', 'abed ', 'abed ', 7, '147651229_2823273524579897_425605372278318166_n (1).jpg'),
('rifat', '011', '011 ', '011 ', 8, 'FullSizeRender.jpg'),
('Abu Sayem siam', '011201033', '011201033 ', '011201033 ', 0, 'profile.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `community_post`
--

INSERT INTO `community_post` (`id`, `post_title`, `post_details`, `post_by`, `date`) VALUES
(1, 'Hi', 'need help', 1, '2023-03-02 14:21:11.440469'),
(2, 'Hello', 'lorem amsdsnc awdj jdnwc wjhduwcx awbdwawn', 4, '2023-03-02 14:21:50.937770'),
(3, 'dawd', 'wfacvwcvweccascacacewcc wfdwfwacwcwdw', 5, '2023-03-02 14:22:08.250312'),
(4, 'cse', 'dhoinchar department', 8, '2023-03-02 14:46:21.037309'),
(6, 'PHP', 'Should I learn PHP?\r\n', 5, '2023-03-27 21:21:55.289264'),
(7, 'Hola', 'dwdwacwcacawcwc', 0, '2023-03-28 02:10:47.274827');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_code`, `course_title`, `course_des`, `prerequisite`, `offered_trimester`, `img`, `credit_hour`) VALUES
(1, 'CSE 2121', 'Object', 'dacwcwecsdaces efvewsvwwvewvweve efegfwvev', 'CSE1101', '3', 'web-development-companies-scaled.jpg', '3'),
(2, 'CSE 2202', 'Web Programming', 'csc fecds ferv ', 'SPL Lab', '3', 'web-development-companies-scaled.jpg', '1'),
(3, 'CSE 4880 ', 'Machine Learning', 'Basic of Machine learning, CNN,SVM, Neural Network', 'CSE 3550', '9', 'm2.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `course_review`
--

CREATE TABLE `course_review` (
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `review` text NOT NULL,
  `difficulty_level` int(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `review_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_review`
--

INSERT INTO `course_review` (`course_id`, `user_id`, `review`, `difficulty_level`, `date`, `review_id`) VALUES
(1, 1, 'dadwn wncuwuncwc wchbwdiuncq', 3, '2023-04-17 00:00:00', 4),
(1, 1, 'dwdwddcwacwcac', 2, '2023-04-17 00:00:00', 5),
(1, 1, 'sQSqsqs', 3, '2023-04-17 00:00:00', 6),
(1, 1, 'waddddwdawda', 2, '2023-04-17 13:25:43', 7),
(1, 7, 'dwdacd wcqwccc cceww', 4, '2023-04-17 14:14:36', 8),
(1, 7, 'thbrbtrf rgrg rd ', 3, '2023-04-17 14:16:08', 9),
(2, 7, 'wcc e dwd w ', 1, '2023-04-17 14:16:55', 10),
(2, 5, 'berfeve fe', 4, '2023-04-17 14:17:20', 11);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `comment`, `comment_by`, `post_id`, `date`) VALUES
(4, 'dawdadwd', 1, 3, '0000-00-00 00:00:00.000000'),
(5, 'wddadaw', 1, 5, '0000-00-00 00:00:00.000000'),
(6, 'wddadaw', 4, 5, '0000-00-00 00:00:00.000000'),
(7, 'dadwadawfvcsvcdscdvedvev', 5, 5, '0000-00-00 00:00:00.000000'),
(8, 'vsdffdfv', 4, 2, '0000-00-00 00:00:00.000000'),
(9, 'yes ofcourse\r\n', 5, 6, '0000-00-00 00:00:00.000000'),
(10, 'scxacwac', 1, 7, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `community_post`
--
ALTER TABLE `community_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_review`
--
ALTER TABLE `course_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

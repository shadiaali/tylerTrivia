-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 19, 2019 at 10:31 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trivia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(1, 'One'),
(2, 'Two'),
(3, 'Three'),
(4, 'Four'),
(5, 'Jeopardy'),
(6, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `q_id` int(10) UNSIGNED NOT NULL,
  `q_img` varchar(100) NOT NULL,
  `q_question` varchar(2000) NOT NULL,
  `q_answer` text NOT NULL,
  `q_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`q_id`, `q_img`, `q_question`, `q_answer`, `q_title`) VALUES
(105, 'organs.gif', 'Which organ is well developed in some herbivores but only vestigial in humans?', 'The Appendix', 'Question 1'),
(106, 'nfl.gif', 'What NFL team\'s logo is based on an animal mask from the Kwakwaka\'wakw people of British Columbia?', 'The Seattle Seahawks', 'Question 2'),
(107, 'motley.gif', 'Which member of Motley Crue had his own reality tv series, based on him going back to college?', 'Tommy Lee', 'Question 3'),
(108, 'mint.gif', 'What common plant is a hybrid of watermint and spearmint?', 'Peppermint', 'Question 4'),
(109, 'canada.gif', 'Since the 2015 federal election, how many major federal parties have replaced their leader?', '3 of them - Conservatives, NDP, Bloc Quebecois ', 'Question 5'),
(110, 'nfl.gif', 'Do Fanshawe Alumni get any discount on fees for courses?', 'paul', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_category`
--

CREATE TABLE `tbl_question_category` (
  `pc_id` int(10) UNSIGNED NOT NULL,
  `q_id` mediumint(9) NOT NULL,
  `cat_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_question_category`
--

INSERT INTO `tbl_question_category` (`pc_id`, `q_id`, `cat_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 5),
(22, 22, 5),
(23, 23, 5),
(24, 24, 5),
(25, 25, 5),
(26, 26, 6),
(27, 27, 6),
(28, 28, 6),
(29, 29, 6),
(30, 30, 6),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7),
(36, 31, 0),
(37, 36, 3),
(38, 37, 4),
(39, 38, 3),
(40, 39, 5),
(41, 40, 2),
(42, 41, 4),
(43, 42, 4),
(44, 43, 6),
(45, 44, 5),
(46, 45, 6),
(47, 46, 2),
(48, 47, 4),
(49, 48, 3),
(50, 49, 4),
(51, 50, 4),
(52, 51, 4),
(53, 52, 2),
(54, 50, 6),
(55, 51, 2),
(56, 52, 3),
(57, 53, 2),
(58, 54, 2),
(59, 55, 3),
(60, 56, 2),
(61, 58, 2),
(62, 59, 3),
(63, 60, 2),
(64, 61, 4),
(65, 62, 5),
(66, 63, 3),
(67, 64, 4),
(68, 65, 1),
(69, 66, 4),
(70, 67, 2),
(71, 68, 2),
(72, 69, 4),
(73, 70, 1),
(74, 71, 2),
(75, 92, 2),
(76, 93, 3),
(77, 94, 4),
(78, 95, 5),
(79, 96, 4),
(80, 97, 3),
(81, 98, 1),
(82, 99, 2),
(83, 100, 3),
(84, 101, 1),
(85, 102, 1),
(86, 103, 2),
(87, 104, 2),
(88, 105, 1),
(89, 106, 1),
(90, 107, 1),
(91, 108, 1),
(92, 109, 1),
(93, 110, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_fname` varchar(15) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Admin', 'Admin', 'admin@sportchek.ca', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD UNIQUE KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD UNIQUE KEY `prod_id` (`q_id`);

--
-- Indexes for table `tbl_question_category`
--
ALTER TABLE `tbl_question_category`
  ADD UNIQUE KEY `pc_id` (`pc_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tbl_question_category`
--
ALTER TABLE `tbl_question_category`
  MODIFY `pc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 08, 2019 at 07:51 AM
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
  `q_question` text NOT NULL,
  `q_answer` text NOT NULL,
  `q_title` text NOT NULL,
  `q_op1` text NOT NULL,
  `q_op2` text NOT NULL,
  `q_op3` text NOT NULL,
  `q_op4` text NOT NULL,
  `q_op5` text NOT NULL,
  `q_clipanswer` text NOT NULL,
  `q_vid` varchar(150) NOT NULL,
  `q_mq1` text NOT NULL,
  `q_mq2` text NOT NULL,
  `q_mq3` text NOT NULL,
  `q_mq4` text NOT NULL,
  `q_mq5` text NOT NULL,
  `q_ma1` text NOT NULL,
  `q_ma2` text NOT NULL,
  `q_ma3` text NOT NULL,
  `q_ma4` text NOT NULL,
  `q_ma5` text NOT NULL,
  `q_mia1` text NOT NULL,
  `q_mia2` text NOT NULL,
  `q_mia3` text NOT NULL,
  `q_mia4` text NOT NULL,
  `q_mia5` text NOT NULL,
  `q_mia6` text NOT NULL,
  `q_mia7` text NOT NULL,
  `q_songhint` text NOT NULL,
  `q_song` varchar(150) NOT NULL,
  `q_songanswer` text NOT NULL,
  `q_jepcat` text NOT NULL,
  `q_jepq1` text NOT NULL,
  `q_jepa1` text NOT NULL,
  `q_jepq2` text NOT NULL,
  `q_jepa2` text NOT NULL,
  `q_jepsong` varchar(150) NOT NULL,
  `q_jepq3` text NOT NULL,
  `q_jepa3` text NOT NULL,
  `q_jepimg` varchar(150) NOT NULL,
  `q_fq` text NOT NULL,
  `q_fqa` text NOT NULL,
  `q_fop1` text NOT NULL,
  `q_fop2` text NOT NULL,
  `q_fop3` text NOT NULL,
  `q_fop4` text NOT NULL,
  `q_fop5` text NOT NULL,
  `q_fanswer` text NOT NULL,
  `q_fvid` varchar(150) NOT NULL,
  `q_faq` text NOT NULL,
  `q_faudio` varchar(150) NOT NULL,
  `q_faanswer` text NOT NULL,
  `q_clipquestion` text NOT NULL,
  `q_mainq` text NOT NULL,
  `q_finalq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`q_id`, `q_question`, `q_answer`, `q_title`, `q_op1`, `q_op2`, `q_op3`, `q_op4`, `q_op5`, `q_clipanswer`, `q_vid`, `q_mq1`, `q_mq2`, `q_mq3`, `q_mq4`, `q_mq5`, `q_ma1`, `q_ma2`, `q_ma3`, `q_ma4`, `q_ma5`, `q_mia1`, `q_mia2`, `q_mia3`, `q_mia4`, `q_mia5`, `q_mia6`, `q_mia7`, `q_songhint`, `q_song`, `q_songanswer`, `q_jepcat`, `q_jepq1`, `q_jepa1`, `q_jepq2`, `q_jepa2`, `q_jepsong`, `q_jepq3`, `q_jepa3`, `q_jepimg`, `q_fq`, `q_fqa`, `q_fop1`, `q_fop2`, `q_fop3`, `q_fop4`, `q_fop5`, `q_fanswer`, `q_fvid`, `q_faq`, `q_faudio`, `q_faanswer`, `q_clipquestion`, `q_mainq`, `q_finalq`) VALUES
(193, 'Which organ is well developed in some herbivores but only vestigial in humans?', 'The Appendix.', 'Question 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194, '', '', 'Question 1', 'The Matrix', 'Bill and Ted\'s Bogus Journey', 'Dracula', 'Always be my Maybe', 'John Wick', 'Always be my Maybe', 'alwaysbemymaybe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Name this film', '', ''),
(195, '', '', 'Question 1', '', '', '', '', '', '', '', 'Titanium', 'Potassium', 'Mercury', 'Fluorine', 'Lead', 'Ti', 'K', 'Hg', 'F', 'Pb', 'Hg', 'F', 'K', 'Pb', 'Ti', 'Fr', 'Ta', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Match the element with its periodic symbol', ''),
(196, '', '', 'Question 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'This song was remixed in 2019 and became a smash hit among the Red Dead Redemption crowd:', 'oldt.mp3', 'Old Town Road', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(197, '', '', 'Question 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Animal Kingdom', 'Where is the heart of a shrimp located: head, body or tail?', 'Head', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(198, '', '', 'Question 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Animal Kingdom', 'Almost 3% of ice in Antarctic glaciers consists of the urine of which animal?', 'Penguins', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(199, '', '', 'Question 3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Animal Kingdom', 'True or False: an ostrich\'s eye is larger than its brain', 'True', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(200, '', '', 'Question 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Rugby', 'In the Olympic form of Rugby, how many players are on the field at one time for each team?', '7 ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(202, '', '', 'Question 2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Rugby', '', '', '', '', '', 'What is this commonly known as in a game of Rugby?', 'Scrum', 'scrum.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(203, '', '', 'Question 1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sitcom Theme Songs', '', '', 'This show ran from 2013 to present', 'Brooklyn Nine Nine', 'brook.mp3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(204, '', '', '1: Mr Misty', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Which fast food company introduced the Mr. Misty slush drink in 1961?', 'Dairy Queen', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(205, '', '', '2: Keanu Reeves', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'The Matrix', 'None, it\'s his actual real life', 'Always be my Maybe', '', '', 'Always be my maybe', 'alwaysbemymaybe', '', '', '', '', '', 'What is the name of this movie?'),
(206, '', '', '3: Cowboys', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Who does the protagonist of Old Town Road cheat on?', 'bb.mp3', 'His baby.', '', '', '');

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
(88, 105, 2),
(89, 106, 1),
(90, 107, 1),
(91, 108, 1),
(92, 109, 1),
(93, 110, 2),
(94, 111, 2),
(95, 112, 2),
(96, 113, 2),
(97, 114, 3),
(98, 115, 3),
(99, 116, 3),
(100, 119, 2),
(101, 120, 2),
(102, 121, 2),
(103, 123, 1),
(104, 124, 2),
(105, 124, 2),
(106, 125, 2),
(107, 126, 2),
(108, 127, 2),
(109, 130, 1),
(110, 131, 2),
(111, 132, 2),
(112, 133, 1),
(113, 134, 1),
(114, 135, 1),
(115, 136, 2),
(116, 137, 1),
(117, 138, 1),
(118, 139, 2),
(119, 140, 2),
(120, 141, 1),
(121, 142, 1),
(122, 143, 2),
(123, 144, 1),
(124, 145, 2),
(125, 146, 1),
(126, 147, 2),
(127, 148, 2),
(128, 149, 2),
(129, 150, 2),
(130, 151, 3),
(131, 152, 3),
(132, 153, 3),
(133, 154, 3),
(134, 155, 1),
(135, 156, 2),
(136, 157, 3),
(137, 158, 4),
(138, 159, 4),
(139, 160, 5),
(140, 161, 5),
(141, 162, 5),
(142, 163, 5),
(143, 164, 5),
(144, 165, 5),
(145, 166, 1),
(146, 167, 1),
(147, 168, 5),
(148, 169, 6),
(149, 170, 6),
(150, 171, 6),
(151, 172, 6),
(152, 173, 2),
(153, 174, 1),
(154, 175, 2),
(155, 176, 1),
(156, 177, 2),
(157, 178, 3),
(158, 179, 5),
(159, 180, 5),
(160, 181, 5),
(161, 182, 5),
(162, 183, 5),
(163, 184, 5),
(164, 185, 6),
(165, 186, 6),
(166, 187, 2),
(167, 188, 5),
(168, 189, 2),
(169, 190, 3),
(170, 191, 2),
(171, 193, 1),
(172, 194, 2),
(173, 195, 3),
(174, 196, 4),
(175, 197, 5),
(176, 198, 5),
(177, 199, 5),
(178, 200, 5),
(179, 201, 5),
(180, 202, 5),
(181, 203, 5),
(182, 204, 6),
(183, 205, 6),
(184, 206, 6);

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
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `tbl_question_category`
--
ALTER TABLE `tbl_question_category`
  MODIFY `pc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

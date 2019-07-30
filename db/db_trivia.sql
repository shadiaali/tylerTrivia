-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 30, 2019 at 04:39 AM
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
(5, 'JeopardyCategories'),
(6, 'Final'),
(7, 'JeopardyCategory1'),
(8, 'JeopardyCategory2'),
(9, 'JeopardyCategory3'),
(10, 'JeopardyCategory4'),
(11, 'JeopardyCategory5');

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
  `q_finalq` text NOT NULL,
  `q_jept1` varchar(150) NOT NULL,
  `q_jept2` varchar(150) NOT NULL,
  `q_jept3` varchar(150) NOT NULL,
  `q_jept4` varchar(150) NOT NULL,
  `q_jept5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`q_id`, `q_question`, `q_answer`, `q_title`, `q_op1`, `q_op2`, `q_op3`, `q_op4`, `q_op5`, `q_clipanswer`, `q_vid`, `q_mq1`, `q_mq2`, `q_mq3`, `q_mq4`, `q_mq5`, `q_ma1`, `q_ma2`, `q_ma3`, `q_ma4`, `q_ma5`, `q_mia1`, `q_mia2`, `q_mia3`, `q_mia4`, `q_mia5`, `q_mia6`, `q_mia7`, `q_songhint`, `q_song`, `q_songanswer`, `q_jepcat`, `q_jepq1`, `q_jepa1`, `q_jepq2`, `q_jepa2`, `q_jepsong`, `q_jepq3`, `q_jepa3`, `q_jepimg`, `q_fq`, `q_fqa`, `q_fop1`, `q_fop2`, `q_fop3`, `q_fop4`, `q_fop5`, `q_fanswer`, `q_fvid`, `q_faq`, `q_faudio`, `q_faanswer`, `q_clipquestion`, `q_mainq`, `q_finalq`, `q_jept1`, `q_jept2`, `q_jept3`, `q_jept4`, `q_jept5`) VALUES
(253, 'Which organ is well developed in some herbivores but only vestigial in humans?', 'The Appendix', 'Question #1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(254, '', '', 'Question #14', 'The Matrix', 'Bill and Ted\'s Bogus Journey', 'The Matrix', 'Always be my Maybe', 'John Wick', 'Always be my Maybe', 'alwaysbemymaybe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Name this film:', '', '', '', '', '', '', ''),
(255, '', '', 'Question #1', '', '', '', '', '', '', '', 'Titanium', 'Potassium', 'Mercury', 'Floride', 'Lead', 'Ti', 'K', 'Hg', 'F', 'Pb', 'Hg', 'F', 'K', 'Pb', 'Ti', 'Fr', 'Ta', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Match the element with its periodic symbol', '', '', '', '', '', ''),
(266, '', '', 'Jeopardy Category Images', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'animalkingdom.jpg', 'rugby.jpg', 'sitcomthemesongs.jpg', 'Oscars.jpg', 'nametool.jpg'),
(267, '', '', 'Question #1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Animal Kingdom', 'Where is the heart of a shrimp located:  Head, Body, or the Tail', 'Head', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(268, '', '', 'Question #1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Rugby', '', '', '', '', '', 'What is this commonly known as in a game of Rugby?', 'Scrum', 'scrum.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(269, '', '', 'Question #1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sitcom Theme Songs', '', '', 'This show ran from 2013 to present', 'Brooklyn Nine Nine', 'tr.mp3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(271, '', '', 'Question #1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Name that Tool', '', '', '', '', '', 'What is this dentist\'s tool called?', 'A scaler', 'scaler.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(272, '', '', '1: Mr. Misty', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8Which fast food company introduced the Mr. Misty slush drink in 1961?', 'Dairy Queen', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(273, '', '', '2: Keanu Reeves', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'The Matrix', 'It\'s not a movie, it\'s a clip of his life.', 'Always be my Maybe', '', '', 'Always be my maybe', 'alwaysbemymaybe', '', '', '', '', '', 'What is the name of this movie starring Keanu?', '', '', '', '', '');

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
(220, 245, 5),
(221, 246, 5),
(222, 247, 5),
(223, 248, 5),
(224, 249, 5),
(225, 250, 5),
(226, 251, 1),
(227, 253, 1),
(228, 254, 2),
(229, 255, 3),
(230, 256, 4),
(231, 257, 4),
(232, 258, 5),
(233, 259, 5),
(234, 260, 5),
(235, 261, 5),
(236, 262, 5),
(237, 263, 4),
(238, 264, 4),
(239, 265, 4),
(240, 266, 5),
(241, 267, 7),
(242, 268, 8),
(243, 269, 9),
(244, 270, 10),
(245, 271, 11),
(246, 272, 6),
(247, 273, 6),
(248, 274, 6),
(249, 275, 1),
(250, 276, 6),
(251, 277, 6),
(252, 278, 6),
(253, 279, 6),
(254, 280, 4),
(255, 281, 4),
(256, 282, 4),
(257, 283, 6),
(258, 284, 1);

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
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `tbl_question_category`
--
ALTER TABLE `tbl_question_category`
  MODIFY `pc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

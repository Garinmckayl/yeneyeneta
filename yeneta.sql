-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 05:35 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeneta`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `answered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `user_id`, `answer`, `answered_at`) VALUES
(9, 121, 59, '<p>i answer it by my self</p>\r\n', '2018-07-13 20:38:37'),
(10, 121, 60, '<p>pretty good answer</p>\r\n', '2018-07-15 12:40:23'),
(11, 123, 62, '<p>why this <strong>is so fucked up<img alt=\"angry\" src=\"http://127.0.0.1/yenetatomvc/assets/js/ckeditor/question/add/plugins/smiley/images/angry_smile.png\" xss=removed title=\"angry\">Ñ<sup>85</sup></strong></p>\r\n', '2018-07-15 19:47:02'),
(12, 128, 1, '<p>fujck you men thiis is fucked up</p>\r\n', '2018-07-18 13:00:49'),
(13, 130, 5, '<p>i answer my fuckin question by myself</p>\r\n', '2018-07-19 15:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 0, 'Technology', '2017-03-04 13:03:18'),
(2, 0, 'Physics', '2017-03-04 13:14:40'),
(3, 0, 'Natural Science', '2018-05-26 12:02:57'),
(4, 0, 'social Science', '2018-05-26 12:02:57'),
(5, 0, 'Mathimathics', '2018-05-26 12:04:16'),
(6, 0, 'Engineering', '2018-05-26 12:04:16'),
(7, 0, 'Computer Science', '2018-05-26 12:04:53'),
(8, 0, 'History', '2018-05-26 12:04:53'),
(9, 0, 'Music', '2018-05-26 12:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `like_id` int(11) NOT NULL,
  `quesion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `education` text NOT NULL,
  `skills` text NOT NULL,
  `interests` text NOT NULL,
  `awards` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `asked_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `user_id`, `author`, `subject`, `grade`, `question`, `asked_at`, `slug`) VALUES
(127, 64, 'natnaelgetenew', 'Biology', '3', '<p>trumyuy,putviu;l&#39;outi&#39;o;urtyio8p9</p>', '2018-07-17 22:17:43', '5b4e32c782f82384785679natnaelgetenew'),
(128, 1, 'natnaelgetenew', 'Art', '5', '<p> 2h6 h h3h6h3h tyh yh h th rhy26y6h thsh gh yeh ytej yh y3hyhy hyh yrwh rwyh wyrh</p>', '2018-07-18 16:37:28', '5b4f3488aeb85565486842natnaelgetenew'),
(129, 1, 'natnaelgetenew', 'General-Knowledge', 'Beyond ', '<p>who is son of a bitch</p>', '2018-07-19 12:25:54', '5b504b122be1b897521084natnaelgetenew'),
(130, 5, 'abel', 'software-Development', '5', '<p>what a great question</p>', '2018-07-19 19:21:12', '5b50ac68bb3a3176845637abel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userstatus` varchar(255) NOT NULL,
  `usertitle` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is a collection of both teachers and students';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userstatus`, `usertitle`, `school`, `email`, `password`, `user_image`, `bio`, `gender`) VALUES
(1, 'natnaelgetenew', 'student', 'Mr.', 'yehemdar-school', 'natnaelgetenew@gmail.com', '9c9c60306a5988dfed4240802897b967', '5b4f372c4eaf7_YENETA_IMG.png', 'i studied computer science at harvard universty and the i get in to stanford universty to be proffesser and then fuck the world i am a fucking proffessor!!!!!!!!!', ''),
(2, 'natnael', 'student', '', 'yehemdar-school', 'natnaelgetenew@aol.com', '9c9c60306a5988dfed4240802897b967', 'noimage.jpg', '', ''),
(3, 'john', 'teacher', '', 'yehemdar-school', 'john@doe.com', 'e10adc3949ba59abbe56e057f20f883e', 'noimage.jpg', '', ''),
(4, 'abc', 'student', '', 'yehemdar-school', 'abc@abc.abc', 'e10adc3949ba59abbe56e057f20f883e', 'noimage.jpg', '', ''),
(5, 'abel', 'student', 'Miss.', 'yehemdar-school', 'abel@abel.abel', 'e10adc3949ba59abbe56e057f20f883e', '5b50acdaa65b6_YENETA_IMG.png', 'i am fuckin female', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
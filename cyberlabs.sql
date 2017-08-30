-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 10:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberlabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_title` varchar(100) NOT NULL,
  `comment_body` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`comment_id`, `post_id`, `comment_title`, `comment_body`, `create_date`, `user_id`, `user_name`) VALUES
(1, 2, 'Is it possible?', 'I think it''s not possible.', '2017-08-31 01:41:01', 4, 'Tarun Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `title`, `body`, `link`, `create_date`, `user`) VALUES
(1, 'A To-Do List Handler', 'I am looking forward to develop a To-Do list handler website using jQuery. There will be a simple interface, containing the list and two buttons: Add a To-Do and Save Changes. I want to handle these buttons dynamically. The web pages should be responsive with fontawesome icons placed wherever needed.', 'https://github.com/skshivam64/ToDoList', '2017-08-11 17:01:00', 'Shivam Kumar'),
(2, 'Cricket Score Updates Using Python', 'Through web scraping and Twilio service, I want to make such a Python program which can send me regular cricket score updates through SMS. ', 'https://github.com/skshivam64/cricket-score-updates-using-twilio-and-python', '2017-08-11 17:02:28', 'Shivam Kumar'),
(3, 'Auto Signup Python Bot', 'I am trying to make a Python program using selenium module that visits a website, enter relevant information in the signup form and hit the register button to register an account.', 'https://github.com/skshivam64/auto-signup-python-bot', '2017-08-11 17:10:03', 'Shivam Kumar'),
(4, 'Captcha Generator', 'I am looking forward to make a simple captcha generator using PHP.', 'https://github.com/tarunk04/Captcha_Generator', '2017-08-11 17:19:47', 'Tarun Kumar'),
(5, 'Resume Builder Using jQuery', 'It will be so nice if there''d be a website where we can enter our information and it generates our resume. I also want it to prompt us to choose a template for our resume.', 'https://github.com/skshivam64/free-resume-builder-jquery', '2017-08-11 17:24:19', 'Shivam Kumar'),
(6, 'A simple Student Records Manager using Java', 'I am stuck in developing a command-line interface to manage student records, using Java.', 'https://github.com/skshivam64/Java_Student_Management_System', '2017-08-11 17:36:52', 'Shivam Kumar'),
(7, 'Youtube Playlist Downloader', 'Wouldn''t it be nice if there would be a program which could download a whole YouTube playlist and we wouldn''t have to bother about clicking each video and then using some sort of extension! Here''s a Python program to do the same. The modifications required in this project are: 1) Graphics User Interface(GUI), 2) Multiprocessing', 'https://github.com/tarunk04/YouTube_Playlist_Downloader', '2017-08-12 15:03:05', 'Tarun Kumar'),
(8, 'Amphibious Surveillance Robot(ASR)', 'This is a bot that can move on land as well as water. It is also provided with an in-built camera that sends the video feed to a remote server. The location of bot can be traced using PUBNUB api, on Google Maps.', 'https://github.com/tarunk04/YouTube_Playlist_Downloader', '2017-08-30 20:13:16', 'Shivam Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `auth` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `create_date`, `auth`) VALUES
(6, 'Sunny Kumar', 'sunny1234@gmail.com', 'ad25f9d320d07991e64a01df7dffbc5d', '2017-08-11 16:51:27', 0),
(7, 'Uttkarsh Bairoliya', 'uttkarsh420@gmail.com', 'ad25f9d320d07991e64a01df7dffbc5d', '2017-08-11 17:04:12', 0),
(8, 'Shivam Kumar', 'skshivam64@gmail.com', 'ad25f9d320d07991e64a01df7dffbc5d', '2017-08-11 17:18:26', 0),
(9, 'Shubham Rathour', 'shubhamdadu@gmail.com', 'ad25f9d320d07991e64a01df7dffbc5d', '2017-08-11 18:10:51', 1),
(10, 'Nishant Dubey', 'nishantdubey420@gmail.com', 'ad25f9d320d07991e64a01df7dffbc5d', '2017-08-12 19:11:24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
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
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

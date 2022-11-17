-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 04:16 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'เรื่องทั่วไป'),
(2, 'เรื่องเรียน'),
(3, 'เรื่องกีฬา'),
(4, 'เรื่องเพื่อน');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(20148) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `post_date`, `user_id`, `post_id`) VALUES
(1, '---', '2022-11-17 17:08:10', 2, 0),
(2, '---', '2022-11-17 17:08:15', 2, 0),
(5, 'helloo\r\n', '2022-11-17 22:13:55', 2, 9),
(6, 'ไทรเถอะแฮรี่ ', '2022-11-17 22:14:26', 2, 7),
(7, 'ผมเห็นด้วยๆ', '2022-11-17 22:14:51', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `post_date`, `cat_id`, `user_id`) VALUES
(1, 'จะรอดมั้ยครับ', '---', '2022-11-17 17:09:07', 2, 2),
(2, 'ผมจะรอดมั้ยครับ', 'งานเยอะมากเลยครับผมทำไม่ทัน', '2022-11-17 22:03:12', 2, 6),
(3, 'เพื่อนผมไม่ใช่คนปกติ', 'ผมควรจะอย่างไรกับเพื่อนผมดี', '2022-11-17 22:12:53', 4, 2),
(4, 'สวัสดีครับ', 'test test \r\n1234', '2022-11-17 22:13:38', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `role` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `gender`, `email`, `role`) VALUES
(2, 'admin', '8dc9fa69ec51046b4472bb512e292d959edd2aef', 'admin', 'm', 'admin@gmail.com', 'a'),
(3, 'admin1', '8dc9fa69ec51046b4472bb512e292d959edd2aef', 'JJJ', 'm', 'JJJJ', 'm'),
(4, 'asdasds', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'sss', 'm', 'sss', 'm'),
(5, 'JJJJ', 'eada2adf04ebb959f115ee2fd57ed97fee76ca14', 'JJ JJ', 'm', 'JJJJ', 'm'),
(6, 'harry', 'bf62280f159b1468fff0c96540f3989d41279669', 'harry', 'm', 'harry', 'm'),
(7, 'hello', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'JJJ', 'm', 'sss', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

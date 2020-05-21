-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 02:12 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loveworldnetworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` varchar(40) NOT NULL,
  `venue` varchar(40) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `venue`, `created_at`, `updated_at`) VALUES
(1, 'TeleThon Nigeriag', 'August Global Communion Service With Pastor Chris Was Mindblowing!', '18 Sept. 2018', 'LoveWorld Arena', '2018-09-18 15:48:27.000000', '2018-09-18 15:48:27.000000'),
(2, 'Title: IMM on the Move', 'Telethon Nigeria', '18 Sept. 2018', 'LoveWorld Arena', '2018-09-18 15:49:38.000000', '2018-09-18 15:49:38.000000'),
(3, 'August Healing School Session With Pastor Chris Oyahkhilome:', 'Welcome to another edition of the Healing School', '18 Sept. 2018', 'LoveWorld Arena', '2018-09-20 09:00:54.000000', '2018-09-20 09:00:54.000000'),
(4, 'August Healing School Session With Pastor Chris Oyahkhilome:', 'August Global Communion Service With Pastor Chris Was Mindblowing!', '18', 'LoveWorld Arena', '2018-09-20 14:47:41.000000', '2018-09-20 14:47:41.000000'),
(5, 'Latest Nigerian Fashion Styles for Ladies', 'Fashion switches with season but style is influenced by how factors like moral upbringing, religion, association with others, weather, etc. has affected you. No wonder Yves Saint Laurent said “fashion fades, style is eternal”. Jill Chivers says “', '23 Sept. 2018', 'LoveWorld Arena, Ikeja', '2018-09-20 14:56:32.000000', '2018-09-20 14:56:32.000000'),
(6, 'Post Title:  Tech For Nigerians , By CodeCamp', 'August Global Communion Service With Pastor Chris Was Mindblowing!', '23 Sept. 2018', 'LoveWorld Arena', '2018-09-21 10:52:33.000000', '2018-09-21 10:52:33.000000'),
(7, 'August Global Communion Service With Pastor Chris Was Mindblowing!', 'August Global Communion Service With Pastor Chris Was Mindblowing!', '18 Sept. 2018', 'LoveWorld Arena', '2018-09-21 10:54:54.000000', '2018-09-21 10:54:54.000000'),
(8, 'Post Title:  Tech For Nigerians , By CodeCamp', 'Telethon Nigeria', '23 Sept. 2018', 'LoveWorld Arena, Ikeja', '2018-09-21 10:59:25.000000', '2018-09-21 10:59:25.000000'),
(9, 'August Healing School Session With Pastor Chris Oyahkhilome:', 'Welcome to another edition of the Healing School', '23 Sept. 2018', 'LoveWorld Arena, Ikeja', '2018-09-21 11:00:04.000000', '2018-09-21 11:00:04.000000');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Post Title:  Tech For Nigerians , By CodeCamp', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '/uploads/boost.jpg', '2018-09-18 14:46:52.000000', '2018-09-18 14:46:52.000000'),
(2, 'Unilag Students Rocks', 'thi is exampleWhat is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '/uploads/Usage by Circuit.png', '2018-09-18 14:48:53.000000', '2018-09-18 14:48:53.000000'),
(3, 'August Global Communion Service With Pastor Chris Was Mindblowing!', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2018-09-18 14:51:02.000000', '2018-09-18 14:51:02.000000'),
(4, 'Post Title:  Tech For Nigerians , By CodeCamp', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2018-09-18 14:51:11.000000', '2018-09-18 14:51:11.000000'),
(5, 'Title: IMM on the Move', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '/uploads/images.jpg', '2018-09-18 14:51:23.000000', '2018-09-18 14:51:23.000000'),
(6, 'Title: IMM Tech For Nigerians', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '/uploads/creative.jpeg', '2018-09-18 17:10:51.000000', '2018-09-18 17:10:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `file_type` varchar(40) DEFAULT NULL,
  `file_path` varchar(40) DEFAULT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `title`, `file`, `file_type`, `file_path`, `created_at`, `updated_at`) VALUES
(26, 'Title: IMM on the Move', 'script.jpg', 'video', NULL, '2018-09-20 08:08:52.000000', '2018-09-20 08:08:52.000000'),
(27, 'Post Title:  Tech For Nigerians , By CodeCamp', '/uploads/1537432302.mp4', 'video', NULL, '2018-09-20 08:31:42.000000', '2018-09-20 08:31:42.000000'),
(28, 'Unilag Students Rocks', '/uploads/1537432535.docx', 'document', NULL, '2018-09-20 08:35:35.000000', '2018-09-20 08:35:35.000000'),
(29, 'August Healing School Session With Pastor Chris Oyahkhilome:', '/uploads/1537433774.doc', 'document', NULL, '2018-09-20 08:56:14.000000', '2018-09-20 08:56:14.000000'),
(30, 'new resource', '/uploads/1537434346.docx', 'document', NULL, '2018-09-20 09:05:46.000000', '2018-09-20 09:05:46.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Glory Nwa', 'glorynwa@loveworld360.com', '$2y$10$8S7Ht36j/aeikPp6rTo2UOnDzQws6sxCw.uCQnW5PkY845e1m.fiu', 'WqjlHPReqCOYcuWMSckfIq2bTmy22wlqnb5501qBI6gZGJhOXgdxMJnEIkCp', '2018-09-21 07:40:13', '2018-09-21 07:40:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

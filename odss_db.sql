-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 09:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `attachid` int(11) NOT NULL,
  `attach_file` blob,
  `datetime` datetime DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `docid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL,
  `co_msg` text,
  `datetime` datetime DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `docid` int(11) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `name`, `datetime`) VALUES
(1, 'IIT', '2023-08-23 16:23:56'),
(2, 'EEE', '2023-08-23 16:23:56'),
(3, 'CSTE', '2023-08-23 16:23:56'),
(4, 'ICE', '2023-08-23 16:23:56'),
(5, 'VC Dept', '2023-08-23 16:23:56'),
(6, 'Registrar Dept', '2023-08-23 16:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `docid` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`docid`, `title`, `description`, `file_json`, `user_id`, `date_created`, `status_id`) VALUES
(3, 'Application for financial approval', '																																																&lt;p style=&quot;text-align: center; &quot;&gt;&lt;b&gt;IIT, NSTU 2023&lt;/b&gt;&lt;/p&gt;&lt;p&gt;This is body of application...&lt;/p&gt;&lt;p&gt;&lt;b&gt;&lt;u&gt;&lt;br&gt;&lt;/u&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;Thank you.&lt;/p&gt;&lt;p&gt;&lt;b&gt;&lt;u&gt;&lt;br&gt;&lt;/u&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;&lt;u&gt;Faithfully&lt;/u&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;&lt;i&gt;Md Sanwar Hossain&lt;/i&gt;&lt;/b&gt;&lt;/p&gt;																																										', '[\"1686405720_ans.pdf\"]', 1, '2023-06-10 12:02:05', NULL),
(4, 'Application for  test', '&lt;p&gt;Hello,&lt;/p&gt;&lt;p&gt;Application body............;&lt;/p&gt;&lt;p&gt;yours faithfully&lt;/p&gt;&lt;p&gt;&lt;b&gt;Md Sanwar Hossain&lt;/b&gt;&lt;/p&gt;', '[\"1686407340_ans.pdf\"]', 1, '2023-06-10 20:29:49', NULL),
(5, '', '&lt;p&gt;nknjn,m&lt;/p&gt;&lt;p&gt;kjnm&lt;/p&gt;&lt;p&gt;&amp;nbsp; m&lt;/p&gt;', 'null', 1, '2023-07-18 14:44:23', NULL),
(6, 'Application For NOC', 'NSTU, VC name', 'null', 1, '2023-07-20 22:36:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rid`, `name`, `datetime`) VALUES
(1, 'Section Officer', '2023-08-23 16:32:45'),
(2, 'Teacher', '2023-08-23 16:32:45'),
(3, 'Department Head', '2023-08-23 16:32:45'),
(4, 'Registrar', '2023-08-23 16:32:45'),
(5, 'VC', '2023-08-23 16:32:45'),
(6, 'System Administrative', '2023-08-23 17:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stsid` int(11) NOT NULL,
  `st_m` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stsid`, `st_m`, `datetime`) VALUES
(1, 'delivered', '2023-08-23 15:49:43'),
(2, 'received', '2023-08-23 15:49:43'),
(3, 'onprocessing', '2023-08-23 15:49:43'),
(4, 'accepted', '2023-08-23 15:49:43'),
(5, 'rejected', '2023-08-23 15:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `middlename`, `contact`, `address`, `email`, `password`, `avatar`, `date_created`, `role_id`, `dept_id`) VALUES
(1, 'Md. Sanwar', 'Hossain', '', '01761617353', 'Shahrasti, Chandpur', 'sanwar@nstu.edu.bd', 'sanwar12', '1686398880_download.jpeg', '2020-11-11 15:35:19', NULL, NULL),
(3, 'Nasim', 'Molla', '', '0131234567', 'NSTU', 'nasim@gmail.com', '123456', '1686378840__129881089_gettyimages-1245302053.jpg.webp', '2023-06-10 12:34:10', NULL, NULL),
(4, 'Fazilater', 'Jahan', '', '0182345678', 'NSTU', 'bithy@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1686398220_Screenshot_44.png', '2023-06-10 12:50:53', NULL, NULL),
(5, 'Asif', 'Mahmud', '', '0193763683', 'IIT,NSTU', 'asif@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1686381960_46718942.png', '2023-06-10 13:26:29', NULL, NULL),
(6, 'Mahmud', 'ud', '', '89348947893', 'NSTU', 'zayedimtuaj123@gmail.com', 'c9b08bb6ae2f933cb5a61c203133c3d8', '', '2023-06-10 20:17:05', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`attachid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`docid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `attachid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `stsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachment`
--
ALTER TABLE `attachment`
  ADD CONSTRAINT `attachment_ibfk_2` FOREIGN KEY (`docid`) REFERENCES `documents` (`docid`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`docid`) REFERENCES `documents` (`docid`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`stsid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`rid`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`deptid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'Nitin Sharma', '1234', 'nitin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(10) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `date`, `time`, `user_id`) VALUES
(12, '2022-05-27', '19:0:th', '16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bodyscore`
--

CREATE TABLE `tbl_bodyscore` (
  `id` int(10) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `before_meal` varchar(255) NOT NULL,
  `post_meal` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `chest` varchar(255) NOT NULL,
  `waist` varchar(255) NOT NULL,
  `thigh` varchar(255) NOT NULL,
  `arms` varchar(255) NOT NULL,
  `fat` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `s_track` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bodyscore`
--

INSERT INTO `tbl_bodyscore` (`id`, `weight`, `before_meal`, `post_meal`, `height`, `chest`, `waist`, `thigh`, `arms`, `fat`, `date`, `user_id`, `s_track`) VALUES
(1, '25', '', '', '56', '25', '30', '20', '23', '20', '22-05-09', 0, ''),
(2, '45', '', '', '25', '20', '30', '12', '25', '15', '22-05-10', 0, ''),
(3, '45', '', '', '25', '20', '30', '12', '25', '15', '22-05-09', 2, ''),
(4, '', '', '', '', '', '', '', '', '', '22-05-09', 0, ''),
(5, '', '', '', '', '', '', '', '', '', '22-05-09', 0, ''),
(6, '', '', '', '', '', '', '', '', '', '22-05-09', 0, ''),
(7, '', '', '', '', '', '', '', '', '', '22-05-09', 0, ''),
(8, '', '', '', '', '', '', '', '', '', '22-05-09', 5, ''),
(9, '', '', '', '', '', '', '', '', '', '22-05-09', 6, ''),
(10, '', '', '', '', '', '', '', '', '', '22-05-09', 7, ''),
(11, '', '', '', '', '', '', '', '', '', '22-05-09', 8, ''),
(12, '', '', '', '', '', '', '', '', '', '22-05-09', 9, ''),
(13, '', '', '', '', '', '', '', '', '', '22-05-09', 10, ''),
(14, '', '', '', '', '', '', '', '', '', '22-05-09', 10, ''),
(15, '54', '', '', '658', '28', '67', '98', '', '354', '22-05-09', 11, ''),
(16, '12', '', '', '576', '68', '891', '583', '', '318', '22-05-10', 0, ''),
(17, '98', '', '', '292', '3', '138', '622', '', '514', '22-05-10', 13, ''),
(18, '45', '', '', '25', '20', '30', '12', '', '15', '22-05-10', 14, ''),
(19, '46', '', '', '603', '76', '216', '265', '', '292', '22-05-10', 15, ''),
(20, '21', '', '', '576', '68', '891', '583', '123', '318', '22-05-21', 16, ''),
(21, '45', '', '', '805', '2', '261', '267', '', '559', '22-05-18', 0, ''),
(22, '8', '', '', '627', '30', '383', '649', '', '552', '22-05-21', 0, ''),
(23, '78', '', '', '654', '74', '708', '173', '', '526', '22-05-21', 0, ''),
(24, '60', '', '', '359', '32', '150', '464', '', '868', '22-05-21', 0, ''),
(25, '45', '', '', '100', '25', '49', '24', '', '51', '22-05-21', 0, ''),
(26, '74', '', '', '85', '74', '51', '52', '', '41', '22-05-21', 0, ''),
(27, '74', '', '', '85', '74', '51', '52', '', '41', '22-05-21', 0, ''),
(28, '74', '', '', '85', '74', '51', '52', '', '41', '22-05-21', 0, ''),
(29, '74', '', '', '85', '74', '51', '52', '', '41', '22-05-21', 0, ''),
(30, '98', '', '', '820', '3', '416', '427', '', '700', '22-05-21', 0, ''),
(31, '98', '', '', '820', '3', '416', '427', '', '700', '22-05-21', 17, ''),
(32, '98', '', '', '820', '3', '416', '427', '', '700', '22-05-21', 18, ''),
(33, '35', '', '', '418', '71', '252', '875', '', '697', '22-05-21', 19, ''),
(34, '51', '', '', '369', '77', '214', '917', '', '30', '22-05-21', 20, ''),
(35, '49', '', '', '990', '52', '896', '211', '', '630', '22-05-21', 21, ''),
(36, '38', '', '', '169', '82', '858', '469', '', '562', '22-05-21', 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE `tbl_days` (
  `id` int(10) NOT NULL,
  `sunday` varchar(255) NOT NULL,
  `monday` varchar(255) NOT NULL,
  `tuesday` varchar(255) NOT NULL,
  `wednesday` varchar(255) NOT NULL,
  `thursday` varchar(255) NOT NULL,
  `friday` varchar(255) NOT NULL,
  `saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exercise`
--

CREATE TABLE `tbl_exercise` (
  `id` int(10) NOT NULL,
  `day` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `sets` varchar(255) NOT NULL,
  `reps` varchar(255) NOT NULL,
  `rest_time` varchar(255) NOT NULL,
  `kg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exercise_type`
--

CREATE TABLE `tbl_exercise_type` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_exercise_type`
--

INSERT INTO `tbl_exercise_type` (`id`, `title`) VALUES
(1, 'hyperextention'),
(2, 'crunch'),
(3, 'leg curl'),
(4, 'reverse leg curl'),
(5, 'body conditioning'),
(6, 'free weight'),
(7, 'fixed weight'),
(8, 'resisted crunch'),
(9, 'plank'),
(10, 'high leg pull-in'),
(11, 'crunch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groups`
--

CREATE TABLE `tbl_groups` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `no_of_member` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_groups`
--

INSERT INTO `tbl_groups` (`id`, `title`, `link`, `no_of_member`) VALUES
(3, 'Evening Batch', 'https://meet.google.com/', ''),
(4, 'Afternoon Batch', 'https://meet.google.com/', ''),
(5, 'Morning Batch', 'https://meet.google.com/', ''),
(6, 'Amela Mosley', 'Quaerat sint dolor ', ''),
(7, 'morning batch', 'www.yoga.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_livesession`
--

CREATE TABLE `tbl_livesession` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discreption` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `types` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nutrition`
--

CREATE TABLE `tbl_nutrition` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nutrition`
--

INSERT INTO `tbl_nutrition` (`id`, `name`, `pdf`, `group`, `member`, `user_id`, `created_at`) VALUES
(13, 'Edward Acosta', '1771b5f5b25b0150af103163b192107f.pdf', '4', '', NULL, ''),
(17, 'Driscoll Osborne', '1852043ffb16db872099087c58b0e359.pdf', '4', '', NULL, ''),
(18, 'Driscoll Osborne', 'bc091fe2dc6883366f0e30f3c17d97e5.pdf', '3', '', NULL, ''),
(19, 'Bianca Lucas', '8c9e788c0054096002a63b0f1176c897.pdf', '5', '', NULL, '2022-05-18'),
(21, 'rferg', 'e0f792d004d416f601e7962030f7fbc6.', '4', '', NULL, '2022-05-18'),
(22, 'Yugant', '83a10a2bc76a5eee37f3c203ae5bb445.pdf', '4', '', NULL, '2022-05-18'),
(23, 'Edward Acosta', '306e69a241cab6f4bb54ea9526a24835.pdf', '3', '', NULL, '2022-05-18'),
(24, 'test 1', '1ef2a55f6f1021329e479ab9d2bad32a.pdf', '3', '3', NULL, '2022-05-18'),
(25, 'test 2', '913aa75cc35f2ce75ebba41ce2320741.pdf', '4', '3', NULL, '2022-05-18'),
(27, 'Edward Acosta', 'b6c3f4c2fddeb59ea9feea50b33e57a7.pdf', '3', '6', NULL, '2022-05-18'),
(28, 'test for select', 'a2c5f8d2ca1662ece2ecc8d34a4cdf69.pdf', '5', '', NULL, '2022-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(10) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `transacttion_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_hide` varchar(255) DEFAULT NULL,
  `is_delete` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email`, `profile`, `group`, `dob`, `gender`, `address`, `city`, `state`, `zipcode`, `username`, `password`, `image`, `is_hide`, `is_delete`) VALUES
(16, 'shreyas', 'lewave', 'Justina', '904', 'hyga@mailinator.com', '', '', '1999-04-21', 'female', 'peheguj', 'Scarlet', 'mugazy', '319', 'zerero111', '685', '', '', '0'),
(18, 'Laurel', 'ribaram', 'Zoe', '599', 'fowydar@mailinator.com', '', '', '2000-12-30', 'female', 'symise', 'Lillith', 'kodykuziwo', '838', 'filuzukako', '348', 'wotafylyny', NULL, NULL),
(19, 'Christopher', 'nyqozup', 'Gail', '831', 'tyfok@mailinator.com', '', '3', '1996-11-09', 'female', 'zowoxoxez', 'Aurelia', 'qasowagy', '483', 'vaweninuky', '902', 'xujytuqu', NULL, NULL),
(20, 'Vladimir', 'wylemosyx', 'Simone', '380', 'cunigew@mailinator.com', '', '4', '2015-03-24', 'male', 'xanoty', 'Raja', 'masaku', '16', 'rakito', '566', '', NULL, NULL),
(21, 'Ora', 'kikaronuj', 'Patricia', '384', 'zefulaledo@mailinator.com', '', '5', '1998-02-28', 'female', 'nynowotad', 'Keefe', 'fesaju', '353', 'fiwef', '560', '', NULL, NULL),
(22, 'Grady', 'zukaxuj', 'Lucius', '710', 'mecofymu@mailinator.com', '', '4', '1988-01-20', 'male', 'wefetylijo', 'Kelsie', 'karisuzuv', '703', 'mugozolo', '390', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bodyscore`
--
ALTER TABLE `tbl_bodyscore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exercise`
--
ALTER TABLE `tbl_exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_exercise_type`
--
ALTER TABLE `tbl_exercise_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_livesession`
--
ALTER TABLE `tbl_livesession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nutrition`
--
ALTER TABLE `tbl_nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_bodyscore`
--
ALTER TABLE `tbl_bodyscore`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_exercise`
--
ALTER TABLE `tbl_exercise`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_exercise_type`
--
ALTER TABLE `tbl_exercise_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_livesession`
--
ALTER TABLE `tbl_livesession`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_nutrition`
--
ALTER TABLE `tbl_nutrition`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

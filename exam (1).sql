-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 01:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `board_id` int(11) NOT NULL,
  `board_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`board_id`, `board_name`) VALUES
(1, 'SSC'),
(2, 'CBSE'),
(3, 'ICSE');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_address`) VALUES
(1, 'Pawan Nagar', ''),
(2, 'Ashok Stambh', ''),
(3, 'Indira Nagar', ''),
(4, 'P And T colony', ''),
(5, 'Online Mode', '');

-- --------------------------------------------------------

--
-- Table structure for table `checked paper`
--

CREATE TABLE `checked paper` (
  `ch_p_id` int(11) NOT NULL,
  `cl_p_id` int(11) NOT NULL,
  `ch_marks` int(11) NOT NULL,
  `ch_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ch_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `collected_paper`
--

CREATE TABLE `collected_paper` (
  `cl_p_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `cl_p_link` varchar(255) NOT NULL,
  `ch_id` int(11) DEFAULT NULL,
  `p_submit_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collected_paper`
--

INSERT INTO `collected_paper` (`cl_p_id`, `p_id`, `s_id`, `cl_p_link`, `ch_id`, `p_submit_time`) VALUES
(6, 2, 3, '2_3.pdf', NULL, '2020-07-13 11:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`g_id`, `g_name`) VALUES
(1, '5th'),
(2, '6th'),
(3, '7th'),
(4, '8th Full Sanskrit'),
(5, '8th Composite Sanskrit'),
(6, '9th Full Sanskrit'),
(7, '9th Composite Sanskrit'),
(8, '10th Full Sanskrit'),
(9, '10th Composite Sanskrit'),
(10, '11th'),
(11, '12th'),
(12, 'Grammar Batch');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `p_id` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `p_s_time` time NOT NULL,
  `p_e_date` date NOT NULL,
  `p_e_time` time NOT NULL,
  `g_id` int(11) NOT NULL,
  `board_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `p_max_marks` int(11) NOT NULL,
  `p_topic` varchar(255) NOT NULL,
  `p_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`p_id`, `p_date`, `p_s_time`, `p_e_date`, `p_e_time`, `g_id`, `board_id`, `b_id`, `p_max_marks`, `p_topic`, `p_link`) VALUES
(1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 0, 0, 0, 0, '', ''),
(2, '2020-07-12', '03:50:08', '2020-07-14', '06:58:27', 3, 1, 2, 12, '123', '2.pdf'),
(3, '2020-12-30', '12:58:00', '2020-12-31', '12:59:00', 3, 1, 2, 123, 'Abc', '3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_school` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_board` int(11) NOT NULL,
  `s_grade` int(11) NOT NULL,
  `s_branch` int(11) NOT NULL,
  `s_gender` int(11) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_phone` varchar(12) NOT NULL,
  `s_res_address` varchar(255) NOT NULL,
  `s_q_number` int(11) NOT NULL,
  `s_q_answer` varchar(255) NOT NULL,
  `s_doj` date NOT NULL,
  `s_fees` int(11) NOT NULL,
  `s_status` int(11) NOT NULL DEFAULT 0,
  `t_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_school`, `s_address`, `s_board`, `s_grade`, `s_branch`, `s_gender`, `s_email`, `s_password`, `s_phone`, `s_res_address`, `s_q_number`, `s_q_answer`, `s_doj`, `s_fees`, `s_status`, `t_id`) VALUES
(3, 'Manas Sunil Joshi', 'ABC', 'Nashik', 1, 3, 2, 1, 'joshimanassunil@gmail.com', '$2y$10$JZbz3C3tHbcVq.r6WjruU.FPuH67LKIeLf3KFxwwDuQheerIYoSBa', '4 642 9184', 'Balaji Palace', 1, '$2y$10$/wQyZXZfzCEcr5/t9dy1he4dZyA170oCecTjgdFaNcc5iNkv8krpe', '0000-00-00', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_post` varchar(255) NOT NULL,
  `t_phone` int(12) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL,
  `t_branch` int(11) NOT NULL,
  `t_status` int(11) NOT NULL DEFAULT 0,
  `t_address` varchar(255) NOT NULL,
  `t_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `checked paper`
--
ALTER TABLE `checked paper`
  ADD PRIMARY KEY (`ch_p_id`);

--
-- Indexes for table `collected_paper`
--
ALTER TABLE `collected_paper`
  ADD PRIMARY KEY (`cl_p_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `t_email` (`t_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checked paper`
--
ALTER TABLE `checked paper`
  MODIFY `ch_p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collected_paper`
--
ALTER TABLE `collected_paper`
  MODIFY `cl_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

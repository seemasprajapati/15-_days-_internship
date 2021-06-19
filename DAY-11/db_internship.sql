-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_notes`
--

CREATE TABLE `db_notes` (
  `nt_id` int(11) NOT NULL,
  `nt_title` varchar(50) NOT NULL,
  `nt_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_notes`
--

INSERT INTO `db_notes` (`nt_id`, `nt_title`, `nt_description`) VALUES
(1, 'maths', 'complete chapter 1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('riya', 'riya'),
('maahi', 'maahi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `sno` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notes`
--

INSERT INTO `tbl_notes` (`sno`, `title`, `description`) VALUES
(85, 'maths', 'read the formula  of ch 5.'),
(86, 'biology', 'monday is your test .'),
(87, 'tution', 'time is 10:20 am.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_age` int(6) NOT NULL,
  `st_gender` varchar(6) NOT NULL,
  `st_dob` date NOT NULL,
  `st_email` varchar(30) NOT NULL,
  `st_mobile` bigint(50) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_pincode` int(10) NOT NULL,
  `st_area` varchar(20) NOT NULL,
  `st_bloodgroup` varchar(6) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`st_id`, `st_name`, `st_age`, `st_gender`, `st_dob`, `st_email`, `st_mobile`, `st_address`, `st_pincode`, `st_area`, `st_bloodgroup`, `is_delete`) VALUES
(1, 'riya', 12, 'female', '2021-06-11', 'riyag@gmail.com', 6543215677, 'shivnagar society,ha', 38800013, 'gujarat', 'o+', 0),
(2, 'jay', 18, 'Male', '2002-05-07', 'jaydp7@gmail.com', 123456798, 'shree nagar,bakrol,bharuch', 38811000, 'gandhinaga', 'AB+', 0),
(3, 'raaj', 12, 'Male', '2002-06-05', 'raaj@gmail.com', 1234567892, 'ram comlex,anand', 3118001, 'gujarat', 'A+', 1),
(6, 'jeel', 19, 'female', '2000-01-02', 'jeelupatel@gmail.com', 6453234454, 'ramnagar,lambhwel road', 3880011, 'Bharuch', 'o-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(6) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_mobile`, `is_delete`) VALUES
(1, 'riya', 'female', 1235476899, 0),
(2, 'maahi', 'female', 1235766896, 0),
(3, 'ram', 'Male', 1234567892, 0),
(4, 'jay', 'Male', 6543215671, 0),
(28, 'jiya', 'female', 1237728521, 1),
(31, 'rita ', 'female', 9122528561, 1),
(32, 'raaja', 'Male', 9801234566, 1),
(33, 'jahan', 'Male', 123456789, 1),
(34, 'jeena', 'female', 1234566543, 0),
(35, 'riya', 'female', 1234567890, 1),
(36, 'riya', 'Male', 1234567890, 1),
(37, 'raam', 'female', 1234, 1),
(38, '', '', 0, 1),
(39, 'jaan', 'Male', 65656565443, 1),
(40, 'vijay', 'Male', 1212345677, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_notes`
--
ALTER TABLE `db_notes`
  ADD PRIMARY KEY (`nt_id`);

--
-- Indexes for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_notes`
--
ALTER TABLE `db_notes`
  MODIFY `nt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 07:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@svecw.edu.in', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(20) NOT NULL,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `semester` varchar(40) NOT NULL,
  `email` varchar(220) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `designation`, `programme`, `semester`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(8, 'sudh9999', 'sudha Rani', 'proffessor', 'java', '4', 'sudharanicse@svecw.edu.in', 'svecw@123', 9999999999, '2021-06-20 17:34:06', 0),
(9, 'Madh8888', 'Madhavi', 'assistant lecturer', 'formal languages and automata theory', '4', 'madhavicse@svecw.edu.in', 'svecw@123', 8888888888, '2021-06-20 17:35:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Teacher provided the course outline having weekly content plan w` enum('5','4','3','2','1') NOT NULL,
  `Course objectives,learning outcomes and grading criteria are cle` enum('5','4','3','2','1') NOT NULL,
  `Course integrates throretical course concepts with the real worl` enum('5','4','3','2','1') NOT NULL,
  `Teacher is punctual,arrives on time and leaves on time` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at stimulating the interest in the course conten` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at explaining the subject matter` enum('5','4','3','2','1') NOT NULL,
  `Teacher's presentation was clear,loud ad easy to understand` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at using innovative teaching methods/ways` enum('5','4','3','2','1') NOT NULL,
  `Teacher is available and helpful during counseling hours` enum('5','4','3','2','1') NOT NULL,
  `Teacher has competed the whole course as per course outline` enum('5','4','3','2','1') NOT NULL,
  `Teacher was always fair and impartial:` enum('5','4','3','2','1') NOT NULL,
  `Assessments conducted are clearly connected to maximize learinin` enum('5','4','3','2','1') NOT NULL,
  `percentage` int(20) NOT NULL,
  `What I liked about the course` text NOT NULL,
  `Why I disliked about the course` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `faculty_id`, `Teacher provided the course outline having weekly content plan w`, `Course objectives,learning outcomes and grading criteria are cle`, `Course integrates throretical course concepts with the real worl`, `Teacher is punctual,arrives on time and leaves on time`, `Teacher is good at stimulating the interest in the course conten`, `Teacher is good at explaining the subject matter`, `Teacher's presentation was clear,loud ad easy to understand`, `Teacher is good at using innovative teaching methods/ways`, `Teacher is available and helpful during counseling hours`, `Teacher has competed the whole course as per course outline`, `Teacher was always fair and impartial:`, `Assessments conducted are clearly connected to maximize learinin`, `percentage`, `What I liked about the course`, `Why I disliked about the course`, `date`) VALUES
(37, '20b05a0514@svecw.edu.in', 'sudharanicse@gmail.com', '5', '5', '4', '3', '3', '3', '4', '4', '4', '4', '5', '5', 0, '\r\nyes', 'no\r\n', '2021-06-19'),
(38, '20b05a0514@svecw.edu.in', 'madhavicse@gmail.com', '5', '5', '5', '5', '5', '5', '4', '4', '4', '4', '5', '5', 0, 'yes\r\n', 'no\r\n', '2021-06-19'),
(39, '19B01A05h5@svecw.edu.in', 'sudharanicse@svecw.edu.in', '5', '5', '5', '5', '5', '4', '4', '5', '5', '5', '5', '5', 0, 'yes\r\n', 'no remarks\r\n', '2021-06-20'),
(40, '20b05a0515@svecw.edu.in', 'sudharanicse@svecw.edu.in', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 0, 'yes\r\n', 'no\r\n', '2021-06-20'),
(41, '19B01a05e0@svecw.edu.in', 'sudharanicse@svecw.edu.in', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 0, 'yes\r\n', 'no\r\n', '2021-06-21'),
(42, '19b01a05e9@svecw.edu.in', 'sudharanicse@svecw.edu.in', '5', '4', '5', '5', '5', '4', '5', '5', '5', '5', '4', '5', 0, '\r\nyes', 'no\r\n', '2021-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `sid` varchar(40) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `regid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `sid`, `name`, `email`, `pass`, `mobile`, `programme`, `semester`, `gender`, `dob`, `regid`) VALUES
(71, '19B01A05E0', 'durga', '19B01A05e0@svecw.edu.in', 'ce94d5281393184e7c9ef975bebcf957', 9704348338, 'CSE', '4', 'f', '2001-05-07', '2021-06-21 09:00:17'),
(72, '19B01A05H5', 'T. chandana', '19B01A05h5@svecw.edu.in', 'd80a147906d47616ab80576ea579ea76', 9999999999, 'CSE', '4', 'f', '2001-09-08', '2021-06-21 09:19:13'),
(73, '20b05a0514', 'Pasupuleti Bala Satya sri', '20b05a0514@svecw.edu.in', 'd80a147906d47616ab80576ea579ea76', 9704348338, 'CSE', '4', 'f', '2001-05-07', '2021-06-21 09:19:59'),
(74, '19B01A05I4', 'pranathi', '19B01A05i4@svecw.edu.in', 'd80a147906d47616ab80576ea579ea76', 8888888888, 'CSE', '4', 'f', '2001-07-07', '2021-06-21 09:20:53'),
(75, '19B01A05E9', 'Sindhu', '19b01a05e9@svecw.edu.in', '02ef0ae6c2e8b84f426f021e4e005d96', 9849776869, 'CSE', '4', 'f', '2001-05-09', '2021-06-21 10:13:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

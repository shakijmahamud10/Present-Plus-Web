-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.epizy.com
-- Generation Time: Aug 29, 2021 at 02:49 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28857973_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `firstname`, `middlename`, `lastname`) VALUES
(3, 'shakij02', 'shanto@4563', 'Admin', '', 'Shakij'),
(2, 'shakijmahamud40', 'shanto@7890', 'Shakij', '', 'Mahamud'),
(4, 'dipto221', 'Dipto998', 'Admin', '', 'Dipto'),
(5, 'sharukh01', 'shahrukh@890', 'Admin', '', 'Shahrukh');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_no` int(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `section` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `firstname`, `middlename`, `lastname`, `course`, `section`) VALUES
(4, 591, 'X', '', 'Y', '2nd Semest', '2020 B'),
(5, 592, 'Elias Hossain', '', 'Akash', '2nd Semest', '2020 B'),
(6, 593, 'Shakij', '', 'Mahamud Shanto', '2nd Semest', '2020 B'),
(7, 594, 'Tasfiqur', '', 'Rahman', '2nd Semest', '2020 B'),
(8, 595, 'Jakir', '', 'Hossen', '2nd Semest', '2020 B'),
(9, 596, 'X', '', 'Y', '2nd Semest', '2020 B'),
(10, 597, 'X', '', 'Y', '2nd Semest', '2020 B'),
(11, 598, 'Enayetul Islam', '', 'Ullash', '2nd Semest', '2020 B'),
(12, 599, 'X', '', 'Y', '2nd Semest', '2020 B'),
(13, 600, 'Shahrukh', '', 'Alam Chowdhury', '2nd Semest', '2020 B'),
(14, 601, 'Abdul Al', '', 'Saif', '2nd Semest', '2020 B'),
(15, 602, 'Rabby', '', 'Rahman', '2nd Semest', '2020 B'),
(16, 603, 'Ekramul', '', 'Amin', '2nd Semest', '2020 B'),
(17, 604, 'X', '', 'Y', '2nd Semest', '2020 B'),
(18, 605, 'Junnun', '', 'Hasan', '2nd Semest', '2020 B'),
(19, 606, 'Ahmed', '', 'Kobir', '2nd Semest', '2020 B'),
(20, 607, 'Farjana Akter', '', 'Rumpa', '2nd Semest', '2020 B'),
(21, 608, 'Razwan', '', 'Al Mahmud', '2nd Semest', '2020 B'),
(22, 609, 'X', '', 'Y', '2nd Semest', '2020 B'),
(23, 610, 'Mithun', '', 'Khan', '2nd Semest', '2020 B'),
(24, 611, 'X', '', 'Y', '2nd Semest', '2020 B'),
(25, 612, 'X', '', 'Y', '2nd Semest', '2020 B'),
(26, 613, 'X', '', 'Y', '2nd Semest', '2020 B'),
(27, 614, 'Sanjida Jahan', '', 'Sanju', '2nd Semest', '2020 B'),
(28, 615, 'Tasmia', '', 'Tabassum', '2nd Semest', '2020 B'),
(29, 616, 'X', '', 'Y', '2nd Semest', '2020 B'),
(30, 617, 'Ashraful', '', 'Alam', '2nd Semest', '2020 B'),
(31, 618, 'Momena Akter', '', 'Dina', '2nd Semest', '2020 B'),
(32, 619, 'Munira', '', 'Binte Ali', '2nd Semest', '2020 B'),
(33, 620, 'Mehedi', '', 'Hasan', '2nd Semest', '2020 B'),
(34, 621, 'X', '', 'Y', '2nd Semest', '2020 B'),
(35, 622, 'Samim', '', 'Hosan', '2nd Semest', '2020 B'),
(36, 623, 'Abdullah Al', '', 'Sharia', '2nd Semest', '2020 B'),
(37, 624, 'X', '', 'Y', '2nd Semest', '2020 B'),
(38, 625, 'Diganta', '', 'Gomes', '2nd Semest', '2020 B'),
(39, 626, 'Minhajul', '', 'Abedin', '2nd Semest', '2020 B'),
(40, 627, 'Lamia', '', 'Rahman', '2nd Semest', '2020 B'),
(41, 628, 'Ashfaria', '', 'Tabassum', '2nd Semest', '2020 B'),
(42, 629, 'X', '', 'Y', '2nd Semest', '2020 B'),
(43, 630, 'Asadul Islam', '', 'Prince', '2nd Semest', '2020 B'),
(44, 631, 'Falguni', '', 'D Costa', '2nd Semest', '2020 B'),
(45, 632, 'Golap Shah', '', 'Barsha', '2nd Semest', '2020 B'),
(46, 633, 'Tanzim', '', 'Islam', '2nd Semest', '2020 B'),
(47, 634, 'X', '', 'Y', '2nd Semest', '2020 B'),
(48, 635, 'X', '', 'Y', '2nd Semest', '2020 B'),
(49, 636, 'Shihab', '', 'Hossen', '2nd Semest', '2020 B'),
(51, 637, 'X', '', 'Y', '2nd Semest', '2020 B'),
(52, 638, 'Noman', '', '', '2nd Semest', '2020 B'),
(53, 639, 'X', '', 'Y', '2nd Semest', '2020 B'),
(54, 640, 'X', '', 'Y', '2nd Semest', '2020 B'),
(55, 640, 'X', '', 'Y', '2nd Semest', '2020 B'),
(56, 641, 'X', '', 'Y', '2nd Semest', '2020 B'),
(57, 642, 'X', '', 'Y', '2nd Semest', '2020 B'),
(58, 643, 'Shiper Fiage', '', 'Amin', '2nd Semest', '2020 B'),
(59, 644, 'X', '', 'Y', '2nd Semest', '2020 B'),
(60, 645, 'X', '', 'Y', '2nd Semest', '2020 B'),
(61, 646, 'X', '', 'Y', '2nd Semest', '2020 B'),
(62, 647, 'Johirul Islam', '', 'Noyon', '2nd Semest', '2020 B'),
(63, 648, 'Farhan', '', 'Labib', '2nd Semest', '2020 B'),
(64, 649, 'X', '', 'Y', '2nd Semest', '2020 B'),
(65, 650, 'Rizon', '', '', '2nd Semest', '2020 B'),
(66, 651, 'Minhaj', '', 'Mashrafi', '2nd Semest', '2020 B'),
(67, 652, 'X', '', 'Y', '2nd Semest', '2020 B'),
(68, 653, 'Natik', '', 'Mahmud', '2nd Semest', '2020 B'),
(69, 654, 'Mahim', '', 'Chowdhury', '2nd Semest', '2020 B'),
(70, 655, 'Shariar Al', '', 'Maruf', '2nd Semest', '2020 B'),
(71, 656, 'Shahrin', '', 'Dristy', '2nd Semest', '2020 B'),
(72, 657, 'Sajib', '', '', '2nd Semest', '2020 B'),
(73, 658, 'X', '', 'Y', '2nd Semest', '2020 B'),
(74, 659, 'Mahadi', '', 'Mohammod Emon', '2nd Semest', '2020 B'),
(75, 660, 'X', '', 'Y', '2nd Semest', '2020 B'),
(76, 661, 'Riyad', '', '', '2nd Semest', '2020 B'),
(77, 662, 'Ashak-a Alahi', '', 'Nirjhor', '2nd Semest', '2020 B'),
(78, 663, 'Saiful', '', 'Islam', '2nd Semest', '2020 B'),
(79, 664, 'Tajbiul Islam', '', 'Dipto', '2nd Semest', '2020 B'),
(80, 665, 'Ariful', '', '', '2nd Semest', '2020 B'),
(81, 666, 'X', '', 'Y', '2nd Semest', '2020 B'),
(82, 667, 'Mamun', '', '', '2nd Semest', '2020 B'),
(83, 668, 'Kazi Farhan', '', 'Noman', '2nd Semest', '2020 B'),
(84, 669, 'Abrar', '', '', '2nd Semest', '2020 B'),
(85, 670, 'X', '', 'Y', '2nd Semest', '2020 B'),
(86, 671, 'Israt Jahan', '', 'Jui', '2nd Semest', '2020 B'),
(87, 672, 'X', '', 'Y', '2nd Semest', '2020 B'),
(88, 673, 'Ferdous Hassan', '', 'Arnob', '2nd Semest', '2020 B'),
(89, 674, 'X', '', 'Y', '2nd Semest', '2020 B'),
(90, 675, 'Mahafujul Islam', '', 'Shanto', '2nd Semest', '2020 B'),
(91, 676, 'X', '', 'Y', '2nd Semest', '2020 B'),
(92, 677, 'X', '', 'Y', '2nd Semest', '2020 B'),
(93, 678, 'X', '', 'Y', '2nd Semest', '2020 B'),
(94, 678, 'X', '', 'Y', '2nd Semest', '2020 B'),
(95, 349, 'Robin', '', 'Ahmed (18-19 Session)', '2nd Semest', '2020 B'),
(96, 247, 'Sadik', '', 'Shuvo (18-19 Session)', '2nd Semester', '2020 B'),
(97, 279, 'KM', '', 'Shakil (18-19 Session)', '2nd Semest', '2020 B'),
(98, 242, 'Md', '', 'Nazmul (18-19 Session)', '2nd Semester', '2020 B'),
(99, 273, 'Shanjida ', '', 'Merian (18-19 Session)', '2nd Semester', '2020 B'),
(100, 2009007, 'Aliza', '', 'Farnaz (IIBS)', '2nd Semester', '2020 B');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `student_no` int(6) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `student_no`, `student_name`, `time`, `date`) VALUES
(1, 615, 'Tasmia Tabassum', '22:21:00', '2021-08-24'),
(2, 242, 'Md Nazmul (18-19 Session)', '08:28:00', '2021-08-24'),
(3, 242, 'Md Nazmul (18-19 Session)', '08:28:00', '2021-08-24'),
(4, 628, 'Ashfaria Tabassum', '22:17:00', '2021-08-26'),
(5, 628, 'Ashfaria Tabassum', '22:17:00', '2021-08-26'),
(6, 605, 'Junnun Hasan', '22:20:00', '2021-08-26'),
(7, 625, 'Diganta Gomes', '22:27:00', '2021-08-26'),
(8, 592, 'Elias Hossain Akash', '22:30:00', '2021-08-26'),
(9, 657, 'Sajib ', '22:56:00', '2021-08-26'),
(10, 643, 'Shiper Fiage Amin', '23:00:00', '2021-08-26'),
(11, 615, 'Tasmia Tabassum', '20:06:00', '2021-08-28'),
(12, 647, 'Johirul Islam Noyon', '22:07:00', '2021-08-28'),
(13, 623, 'Abdullah Al Sharia', '22:10:00', '2021-08-28'),
(14, 618, 'Momena Akter Dina', '22:11:00', '2021-08-28'),
(15, 603, 'Ekramul Amin', '22:12:00', '2021-08-28'),
(16, 592, 'Elias Hossain Akash', '22:13:00', '2021-08-28'),
(17, 592, 'Elias Hossain Akash', '22:13:00', '2021-08-28'),
(18, 614, 'Sanjida Jahan Sanju', '22:16:00', '2021-08-28'),
(19, 619, 'Munira Binte Ali', '22:16:00', '2021-08-28'),
(20, 615, 'Tasmia Tabassum', '22:18:00', '2021-08-28'),
(21, 643, 'Shiper Fiage Amin', '22:24:00', '2021-08-28'),
(22, 593, 'Shakij Mahamud Shanto', '22:30:00', '2021-08-28'),
(23, 600, 'Shahrukh Alam Chowdhury', '22:31:00', '2021-08-28'),
(24, 625, 'Diganta Gomes', '22:32:00', '2021-08-28'),
(25, 595, 'Jakir Hossen', '22:33:00', '2021-08-28'),
(26, 608, 'Razwan Al Mahmud', '22:36:00', '2021-08-28'),
(27, 607, 'Farjana Akter Rumpa', '22:36:00', '2021-08-28'),
(28, 671, 'Israt Jahan Jui', '22:40:00', '2021-08-28'),
(29, 675, 'Mahafujul Islam Shanto', '22:40:00', '2021-08-28'),
(30, 675, 'Mahafujul Islam Shanto', '22:41:00', '2021-08-28'),
(31, 610, 'Mithun Khan', '22:42:00', '2021-08-28'),
(32, 657, 'Sajib ', '22:53:00', '2021-08-28'),
(33, 662, 'Ashak-a Alahi Nirjhor', '22:56:00', '2021-08-28'),
(34, 668, 'Kazi Farhan Noman', '22:58:00', '2021-08-28'),
(35, 627, 'Lamia Rahman', '23:02:00', '2021-08-28'),
(36, 656, 'Shahrin Dristy', '23:02:00', '2021-08-28'),
(37, 617, 'Ashraful Alam', '23:12:00', '2021-08-28'),
(38, 598, 'Enayetul Islam Ullash', '23:22:00', '2021-08-29'),
(39, 598, 'Enayetul Islam Ullash', '23:22:00', '2021-08-29'),
(40, 598, 'Enayetul Islam Ullash', '23:22:00', '2021-08-29'),
(41, 615, 'Tasmia Tabassum', '23:32:00', '2021-08-29'),
(42, 631, 'Falguni D Costa', '23:35:00', '2021-08-29'),
(43, 631, 'Falguni D Costa', '23:35:00', '2021-08-29'),
(44, 592, 'Elias Hossain Akash', '23:38:00', '2021-08-29'),
(45, 592, 'Elias Hossain Akash', '00:36:00', '2021-08-29'),
(46, 617, 'Ashraful Alam', '01:44:00', '2021-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `time2`
--

CREATE TABLE `time2` (
  `time_id` int(11) NOT NULL,
  `student_no` int(6) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time2`
--

INSERT INTO `time2` (`time_id`, `student_no`, `student_name`, `time`, `date`) VALUES
(1, 610, 'Mithun Khan', '23:11:00', '2021-08-23'),
(2, 631, 'Falguni D Costa', '23:14:00', '2021-08-23'),
(3, 675, 'Mahafujul Islam Shanto', '23:15:00', '2021-08-23'),
(4, 643, 'Shiper Fiage Amin', '23:15:00', '2021-08-23'),
(5, 618, 'Momena Akter Dina', '23:23:00', '2021-08-23'),
(6, 662, 'Ashak-a Alahi Nirjhor', '23:24:00', '2021-08-23'),
(7, 592, 'Elias Hossain Akash', '23:24:00', '2021-08-23'),
(8, 614, 'Sanjida Jahan Sanju', '23:30:00', '2021-08-23'),
(9, 668, 'Kazi Farhan Noman', '23:30:00', '2021-08-23'),
(10, 619, 'Munira Binte Ali', '23:38:00', '2021-08-23'),
(11, 607, 'Farjana Akter Rumpa', '23:40:00', '2021-08-23'),
(12, 593, 'Shakij Mahamud Shanto', '01:16:00', '2021-08-24'),
(13, 628, 'Ashfaria Tabassum', '05:44:00', '2021-08-24'),
(14, 615, 'Tasmia Tabassum', '22:18:00', '2021-08-28'),
(15, 615, 'Tasmia Tabassum', '22:18:00', '2021-08-28'),
(16, 628, 'Ashfaria Tabassum', '22:38:00', '2021-08-28'),
(17, 647, 'Johirul Islam Noyon', '23:05:00', '2021-08-29'),
(18, 643, 'Shiper Fiage Amin', '23:07:00', '2021-08-29'),
(19, 668, 'Kazi Farhan Noman', '23:21:00', '2021-08-29'),
(20, 614, 'Sanjida Jahan Sanju', '23:22:00', '2021-08-29'),
(21, 608, 'Razwan Al Mahmud', '23:28:00', '2021-08-29'),
(22, 615, 'Tasmia Tabassum', '23:33:00', '2021-08-29'),
(23, 603, 'Ekramul Amin', '23:34:00', '2021-08-29'),
(24, 625, 'Diganta Gomes', '23:35:00', '2021-08-29'),
(25, 617, 'Ashraful Alam', '23:41:00', '2021-08-29'),
(26, 671, 'Israt Jahan Jui', '23:42:00', '2021-08-29'),
(27, 610, 'Mithun Khan', '23:46:00', '2021-08-29'),
(28, 631, 'Falguni D Costa', '00:31:00', '2021-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `time3`
--

CREATE TABLE `time3` (
  `time_id` int(11) NOT NULL,
  `student_no` int(6) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time3`
--

INSERT INTO `time3` (`time_id`, `student_no`, `student_name`, `time`, `date`) VALUES
(1, 614, 'Sanjida Jahan Sanju', '00:50:00', '2021-08-28'),
(2, 643, 'Shiper Fiage Amin', '01:12:00', '2021-08-28'),
(3, 647, 'Johirul Islam Noyon', '00:23:00', '2021-08-29'),
(4, 628, 'Ashfaria Tabassum', '00:27:00', '2021-08-29'),
(5, 601, 'Abdul Al Saif', '00:37:00', '2021-08-29'),
(6, 675, 'Mahafujul Islam Shanto', '00:39:00', '2021-08-29'),
(7, 607, 'Farjana Akter Rumpa', '00:39:00', '2021-08-29'),
(8, 657, 'Sajib ', '00:46:00', '2021-08-29'),
(9, 592, 'Elias Hossain Akash', '01:51:00', '2021-08-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `time2`
--
ALTER TABLE `time2`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `time3`
--
ALTER TABLE `time3`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `time2`
--
ALTER TABLE `time2`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `time3`
--
ALTER TABLE `time3`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

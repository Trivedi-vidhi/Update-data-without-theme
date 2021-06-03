-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 01:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE IF NOT EXISTS `student_table` (
  `Student_id` int(15) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Student_gender` varchar(20) NOT NULL,
  `Student_email` varchar(40) NOT NULL,
  `Student_dob` int(30) NOT NULL,
  `Student_mobile` bigint(13) NOT NULL,
  `Student_address` varchar(60) NOT NULL,
  `Student_bloodgroup` varchar(20) NOT NULL,
  `Student_password` varchar(20) NOT NULL,
  `Student_city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`Student_id`, `Student_name`, `Student_gender`, `Student_email`, `Student_dob`, `Student_mobile`, `Student_address`, `Student_bloodgroup`, `Student_password`, `Student_city`) VALUES
(0, '', '', '', 0, 0, '', '', '', ''),
(0, '', '', '', 0, 0, '', '', '', ''),
(123, 'vidhi', 'Female', 'trivedividhi@gmail.com', 13, 7285852903, 'parkwoods society', 'AB+', 'vidhi@1319', 'Vadodara');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

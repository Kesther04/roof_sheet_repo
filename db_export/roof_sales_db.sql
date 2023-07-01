-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2023 at 03:03 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roof_sales_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg_table`
--

DROP TABLE IF EXISTS `admin_reg_table`;
CREATE TABLE IF NOT EXISTS `admin_reg_table` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg_table`
--

INSERT INTO `admin_reg_table` (`id`, `username`, `email`, `password`, `phone_no`) VALUES
(1, 'OGBU KESTHER KENECHUKWU', 'ogbukesther@gmail.com', 'LINKERS', '08103416893');

-- --------------------------------------------------------

--
-- Table structure for table `quota_table`
--

DROP TABLE IF EXISTS `quota_table`;
CREATE TABLE IF NOT EXISTS `quota_table` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ref_id` int(100) NOT NULL,
  `quot_name` varchar(120) NOT NULL,
  `locat` text NOT NULL,
  `custom_name` varchar(120) NOT NULL,
  `itm` text NOT NULL,
  `qty` text NOT NULL,
  `runit` text NOT NULL,
  `total` text NOT NULL,
  `instal` text NOT NULL,
  `acces` text NOT NULL,
  `transprt` text NOT NULL,
  `wname` varchar(200) NOT NULL,
  `des_one` varchar(120) NOT NULL,
  `label_name_one` text NOT NULL,
  `label_prop_one` text NOT NULL,
  `des_two` varchar(120) NOT NULL,
  `label_name_two` text NOT NULL,
  `label_prop_two` text NOT NULL,
  `fullDay` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_registration`
--

DROP TABLE IF EXISTS `sales_registration`;
CREATE TABLE IF NOT EXISTS `sales_registration` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ref_id` int(100) NOT NULL,
  `cl_name` varchar(120) NOT NULL,
  `cl_phone` varchar(20) NOT NULL,
  `cl_add` text NOT NULL,
  `itm` text NOT NULL,
  `qty` text NOT NULL,
  `aunit` text NOT NULL,
  `total` text NOT NULL,
  `instal` text NOT NULL,
  `acces` text NOT NULL,
  `transprt` text NOT NULL,
  `fullDay` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

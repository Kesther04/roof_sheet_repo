-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2024 at 02:47 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

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
-- Table structure for table `house_receipts`
--

DROP TABLE IF EXISTS `house_receipts`;
CREATE TABLE IF NOT EXISTS `house_receipts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ref_id` int(100) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_address` text NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `pmtd` varchar(120) NOT NULL,
  `pur_pose` text NOT NULL,
  `total_amt` text NOT NULL,
  `amt_paid` text NOT NULL,
  `amt_rem` text NOT NULL,
  `writer_name` varchar(200) NOT NULL,
  `fullDay` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_receipts`
--

INSERT INTO `house_receipts` (`id`, `ref_id`, `customer_name`, `customer_address`, `phone_no`, `pmtd`, `pur_pose`, `total_amt`, `amt_paid`, `amt_rem`, `writer_name`, `fullDay`, `date`, `time`) VALUES
(3, 778493964, 'OGBU BRIAN CHIDUMEBI', 'NO. 1 PAUL IGANGA AVENUE, FEDERAL LOWCOST HOUSING', '08103416893', 'Bank Transfer', 'HOUSE RENT', '456000', '456000', '0', 'OGBU KESTHER KENECHUKWU', 'Sun 04th Feb,2024', '04/02/2024', '3:42:33.pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

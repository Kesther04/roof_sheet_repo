-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2023 at 10:13 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quota_table`
--

INSERT INTO `quota_table` (`id`, `ref_id`, `quot_name`, `locat`, `custom_name`, `itm`, `qty`, `runit`, `total`, `instal`, `acces`, `transprt`, `wname`, `des_one`, `label_name_one`, `label_prop_one`, `des_two`, `label_name_two`, `label_prop_two`, `fullDay`, `date`, `time`) VALUES
(1, 403256134, 'ROOFING SHEET & FLASHING', 'Opposite Ebonyi Hotel,Abakaliki Ebonyi State', 'ENGR. JEFF OGBU', 'ROOFING-|-CLADDING-|-FLASHING-|-PIPELINE-|-DRAINAGE', '355-|-456-|-34-|-23-|-34', '7899-|-7899-|-6789-|-89000-|-789', '8710741', '0', '20000', '0', 'Engr. Chibueze', 'ROOFING SHEET', 'PROFILE-|-THICKNESS-|-COLOR-|-TYPE', 'LONG SPAN-|-0.45-|-BLACK-|-ALUMINIUM LONG SPAN', 'FLASHING', 'PROFILE-|-THICKNESS-|-COLOR-|-TYPE', '-|-0.45-|-BLACK-|-', 'Sat 01st Jul,2023', '01/07/2023', '8:06:59.pm');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_tb`
--

DROP TABLE IF EXISTS `receipt_tb`;
CREATE TABLE IF NOT EXISTS `receipt_tb` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ref_id` int(100) NOT NULL,
  `customer_name` varchar(120) NOT NULL,
  `pmtd` varchar(120) NOT NULL,
  `products` text NOT NULL,
  `total` text NOT NULL,
  `writer_name` varchar(200) NOT NULL,
  `fullDay` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt_tb`
--

INSERT INTO `receipt_tb` (`id`, `ref_id`, `customer_name`, `pmtd`, `products`, `total`, `writer_name`, `fullDay`, `date`, `time`) VALUES
(2, 575433363, 'Ogbu Brian', 'Bank Transfer', 'PVC WATER COLLECTOR', '67800006688', 'Engr. Chibueze', 'Sat 15th Jul,2023', '15/07/2023', '11:52:01.am'),
(3, 93772635, 'Ogbu Gemma', 'Bank Deposit', 'PVC WATER COLLECTOR', '45000089000', 'Engr. Chibueze', 'Sun 16th Jul,2023', '16/07/2023', '11:04:50.am');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_registration`
--

INSERT INTO `sales_registration` (`id`, `ref_id`, `cl_name`, `cl_phone`, `cl_add`, `itm`, `qty`, `aunit`, `total`, `instal`, `acces`, `transprt`, `fullDay`, `date`, `time`) VALUES
(3, 514082939, 'OGBU KESTHER', '08103416893', 'No. 1 Paul Iganga Avenue', 'CLADDING-|-FLASHING-|-ROOFING-|-DRAINAGE SYSTEM-|-CUTLERY-|-PIPELINE-|-WATER COLLECTOR', '67-|-23-|-78-|-45-|-68-|-34-|-67', '78900-|-89000-|-12345-|-8901233-|-34568-|-7890-|-780', '411522839', '99000', '89000', '890000', 'Sat 01st Jul,2023', '01/07/2023', '7:54:51.pm'),
(4, 68232876, 'Ogbu Brian ', '08080530968', 'Saint Augustine Seminary', 'Cladding -|-Flashing-|-Roofing ', '253-|-23-|-23', '2323-|-2356-|-152', '645403', '0', '34000', '0', 'Tue 04th Jul,2023', '04/07/2023', '2:18:11.pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

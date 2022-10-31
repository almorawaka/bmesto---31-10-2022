-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2022 at 09:40 AM
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
-- Database: `bmes`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_card`
--

DROP TABLE IF EXISTS `job_card`;
CREATE TABLE IF NOT EXISTS `job_card` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `bes_unit` varchar(10) NOT NULL,
  `trn_date` date NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `h_type` varchar(10) NOT NULL,
  `equipment_name` varchar(50) NOT NULL,
  `equipment_make` varchar(20) DEFAULT NULL,
  `equipment_model` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `s_id` varchar(10) DEFAULT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_card`
--

INSERT INTO `job_card` (`id`, `bes_unit`, `trn_date`, `hospital_name`, `h_type`, `equipment_name`, `equipment_make`, `equipment_model`, `location`, `s_id`, `submittedby`) VALUES
(89, 'MN', '2022-10-31', 'NHSL', 'TH', 'Multi monitor', 'NA', 'NK', 'NA', '882', 'asanka'),
(90, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Multi monitor', 'NA', 'NA', 'NA', '882', 'asanka'),
(91, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Multi monitor', 'mindray', 'NA', 'NA', '902', 'jeevantha'),
(92, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Multi monitor', 'mindray', 'NA', 'NA', '902', 'jeevantha'),
(93, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Multi monitor', 'Edan', 'NA', 'NA', '902', 'jeevantha'),
(94, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Multi monitor', 'Edan', 'NA', 'NA', '902', 'jeevantha'),
(95, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Infution pump', 'Top', '3300', 'wd18', '902', 'jeevantha'),
(96, 'MN', '2022-10-31', 'Chillaw', 'GH', 'Infution pump', 'Top', '3300', 'WD18', '902', 'jeevantha'),
(97, 'MN', '2022-10-31', 'NHSL', 'TH', 'Multi monitor', 'Edan', 'iM50', 'ETU', '570', 'perera'),
(98, 'MN', '2022-10-31', 'NHSL', 'TH', 'Multi monitor', 'Mindtay', 'NA', 'VOT', '570', 'perera'),
(99, 'MN', '2022-10-31', 'NHRD Welisara', 'BH', 'Syringe Pump ', 'Bbraun', 'NA', 'HDU', 'N/A', 'Rathnayake'),
(100, 'MN', '2022-10-31', 'NHRD Welisara', 'TH', 'ECG Recorder', 'NA', 'NA', 'HDU', '602', 'Rathnayake'),
(101, 'MN', '2022-10-31', 'NHRD Welisara', 'GH', 'Multi monitor', 'Edan', 'iM50', 'WD04', 'staff', 'Rathnayake'),
(102, 'MN', '2022-10-31', 'THCS', 'TH', 'Short Wave Therapy', 'NA', 'NA', 'DPM', '597', 'perera'),
(103, 'MN', '2022-10-31', 'THCS', 'TH', 'Short Wave Therapy', 'NA', 'NA', 'DPM', '597', 'perera'),
(104, 'MN', '2022-10-31', 'THCS', 'TH', 'Short Wave Therapy', 'NA', 'NA', 'DPM', '597', 'perera'),
(105, 'MN', '2022-10-31', 'THCS', 'TH', 'Multi monitor', 'mindray', 'NA', 'DPM', '597', 'perera'),
(106, 'MN', '2022-10-31', 'THCS', 'TH', 'Infution pump', 'NA', 'NA', 'NA', '597', 'perera'),
(108, 'MN', '2022-10-31', 'Nigambo', 'DGH', 'Multi monitor', 'mindray', 'NA', 'SICU', '807', 'Costa'),
(109, 'MN', '2022-10-31', 'Nigambo', 'DGH', 'Multi monitor', 'NA', 'NA', 'SICU', '807', 'Costa'),
(110, 'MN', '2022-10-31', 'Nigambo', 'DGH', 'Multi monitor', 'NA', 'NA', 'SICU', '807', 'Costa'),
(111, 'MN', '2022-10-31', 'NHSL', 'TH', 'Multi monitor', 'Edan', 'iM50', 'WD20', '655', 'Weerakkody'),
(112, 'MN', '2022-10-31', 'LRH', 'TH', 'Multi monitor', 'NA', 'NA', 'WD01', '655', 'Weerakkody'),
(113, 'MN', '2022-10-31', 'DMH', 'TH', 'Infant Incubator', 'NA', 'NA', 'NICU', '807', 'Costa');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

DROP TABLE IF EXISTS `spareparts`;
CREATE TABLE IF NOT EXISTS `spareparts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `Hbook` varchar(10) NOT NULL,
  `stock_no` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `submitby` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id`, `job_id`, `Hbook`, `stock_no`, `description`, `qty`, `submitby`) VALUES
(65, 89, 'J700151', 'MPM', 'BP Cuff', '7', 'asanka');

-- --------------------------------------------------------

--
-- Table structure for table `status_tbl`
--

DROP TABLE IF EXISTS `status_tbl`;
CREATE TABLE IF NOT EXISTS `status_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `resons` varchar(200) NOT NULL,
  `submittedby` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_tbl_ibfk_1` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` int(20) DEFAULT NULL,
  `staff_id` int(4) DEFAULT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone_no`, `staff_id`, `trn_date`) VALUES
(28, 'Perera', 'perera@gmail.com', '202cb962ac59075b964b07152d234b70', 718254785, 570, '2022-10-26 10:51:51'),
(29, 'Asanka', 'almorawaka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 718278524, 882, '2022-10-31 03:09:55'),
(30, 'Jeevantha', 'rscjeewantha@gmail.com', '202cb962ac59075b964b07152d234b70', 714397606, 902, '2022-10-31 05:07:06'),
(31, 'Rathnayake', 'kv@gmail.com', '202cb962ac59075b964b07152d234b70', 71, 602, '2022-10-31 05:54:40'),
(32, 'Costa', 'costa@gmail.com', '202cb962ac59075b964b07152d234b70', 71, 807, '2022-10-31 06:44:03'),
(33, 'Weerakkody', 'gpweerakkody9@gmail.com', '202cb962ac59075b964b07152d234b70', 713603455, 655, '2022-10-31 06:54:24');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spareparts`
--
ALTER TABLE `spareparts`
  ADD CONSTRAINT `spareparts_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_card` (`id`);

--
-- Constraints for table `status_tbl`
--
ALTER TABLE `status_tbl`
  ADD CONSTRAINT `status_tbl_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_card` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

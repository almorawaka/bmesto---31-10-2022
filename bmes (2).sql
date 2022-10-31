-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2022 at 05:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

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
  `trn_date` datetime NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `h_type` varchar(10) NOT NULL,
  `equipment_name` varchar(50) NOT NULL,
  `equipment_make` varchar(20) DEFAULT NULL,
  `equipment_model` varchar(20) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `s_id` int(4) DEFAULT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_card`
--

INSERT INTO `job_card` (`id`, `trn_date`, `hospital_name`, `h_type`, `equipment_name`, `equipment_make`, `equipment_model`, `location`, `s_id`, `submittedby`) VALUES
(25, '2022-08-19 14:20:31', 'NHSL', 'TH', 'Defibrillator', 'Mindray', '2301k', 'ETU', 514, 'asanka'),
(27, '2022-08-19 13:21:58', 'LRH', 'TH', 'monitor', 'Phlips', 'D3', 'ETU', 221, 'asanka'),
(28, '2022-08-19 13:23:30', 'LRH', 'TH', 'monitor', 'Phlips', 'D3', 'ETU', 221, 'asanka'),
(29, '2022-08-19 13:24:02', 'LRH', 'TH', 'monitor', 'Phlips', 'D3', 'ETU', 221, 'asanka'),
(30, '2022-08-19 13:24:36', 'LRH', 'TH', 'Defibrillator', 'Mindray', 'D3', 'ETU', 221, 'asanka'),
(31, '2022-08-19 13:31:36', 'CWHW', 'TH', 'Defibrillator', 'Mindray', 'D3', 'ETU', 221, 'asanka'),
(32, '2022-08-19 13:32:41', 'CWHW', 'TH', 'Defibrillator', 'Mindray', 'D3', 'ETU', 221, 'asanka'),
(33, '2022-08-19 13:33:22', 'CWHW', 'TH', 'Defibrillator', 'Mindray', 'D3', 'ETU', 221, 'asanka'),
(34, '2022-08-19 13:35:46', 'CWHW', 'TH', 'Defibrillator', 'Mindray', 'D3', 'ETU', 221, 'asanka'),
(35, '2022-08-19 13:49:30', 'Ragama ', 'TH', 'Transport Incubator', 'Atom', 'incu i', 'PBU', 882, 'asanka'),
(36, '2022-08-19 14:02:22', 'Ragama ', 'TH', 'Patient Monitor', 'NK', '2301k', 'ETU', 882, 'asanka'),
(37, '2022-08-19 14:10:22', 'CWHW', 'TH', 'Transport Incubator', 'Atom', 'incu i', 'PBU', 902, 'asanka'),
(38, '2022-08-19 14:16:36', 'CWHW', 'TH', 'Transport Incubator', 'Atom', 'incu i', 'PBU', 902, 'asanka'),
(39, '2022-08-30 17:26:27', 'CWHW', 'TH', 'Defibrillator', 'Mindray', 'D3', 'ETU', 882, 'asankalakmal');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone_no`, `staff_id`, `trn_date`) VALUES
(10, 'asda', 'asd@gai.com', '1232', 213232, 0, '2022-08-18 20:58:25'),
(11, 'Lakmal', 'asdsa@gamil.com', '202cb962ac59075b964b07152d234b70', 78945, 0, '2022-08-19 04:59:42'),
(12, 'Lakmal', 'asdsa@gamil.com', '827ccb0eea8a706c4c34a16891f84e7b', 12345, 0, '2022-08-19 05:00:06'),
(13, 'kasun', 'asdsa@gamil.com', '202cb962ac59075b964b07152d234b70', 7894, 123, '2022-08-19 05:08:35'),
(14, 'Kumara', 'asdsa@gamil.com', '202cb962ac59075b964b07152d234b70', 78945, 1233, '2022-08-19 05:09:33'),
(15, 'slas-01', 'asdsa@gamil.com', '4c56ff4ce4aaf9573aa5dff913df997a', 718278524, 1233, '2022-08-19 05:13:05'),
(16, 'slas-01', 'asdsa@gamil.com', '4c56ff4ce4aaf9573aa5dff913df997a', 718278524, 1233, '2022-08-19 05:15:42'),
(17, 'Lakmal', 'almorawaka@gmail.com', 'f6e794a75c5d51de081dbefa224304f9', 718278524, 1233, '2022-08-19 05:22:50'),
(18, 'Lakmal', 'almorawaka@gmail.com', 'f6e794a75c5d51de081dbefa224304f9', 718278524, 1233, '2022-08-19 05:23:41'),
(19, 'asanka', 'almorawaka@gmail.com', '202cb962ac59075b964b07152d234b70', 718278524, 123, '2022-08-19 06:45:21'),
(20, 'Dinuth Sejan', 'almorawaka@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 718278524, 234, '2022-08-19 08:27:52'),
(21, 'Lakmal', 'almorawaka@gmail.com', '202cb962ac59075b964b07152d234b70', 718278524, 505, '2022-08-30 17:23:04'),
(22, 'asankalakmal', 'almorawaka@gmail.com', '202cb962ac59075b964b07152d234b70', 718278524, 505, '2022-08-30 17:24:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

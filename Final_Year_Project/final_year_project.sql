-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2023 at 02:11 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_year_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `identity_image` varchar(100) NOT NULL,
  `photo_upload` varchar(500) NOT NULL,
  `speciality` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `fb_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Available',
  `website` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Available',
  `twitter` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Not Available',
  `instagram` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Available',
  `github` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Not Available',
  `password` varchar(50) NOT NULL,
  `about` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `skill1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `skill2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `skill3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `skill4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `skill5` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`, `email`, `address`, `city`, `identity`, `identity_image`, `photo_upload`, `speciality`, `phone_no`, `fb_id`, `website`, `twitter`, `instagram`, `github`, `password`, `about`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`) VALUES
(28, 'Antra Kumari', 'aa@gmail.com', 'andul', 'Howarh', '1456287987', 'images (6).jpeg', 'profile-3.jpg', ' Teacher', ' 852741963', 'ak741@', 'www.as123@', '@ks123', 'ak123@', '@antra', '123', 'CHEMISTRY(PHD HOLDER) 8YEAR EXP', '', '', '', '', ''),
(29, 'Peter', 'pp@gmail.com', 'andul', 'Howarh', '1456287', 'images (1).png', 'profile-4.jpg', 'Lawyer', '7846532652', 'pp741@', 'www.pp123@', '@pp123', 'pp123@', '@peter', '123', '', '', '', '', '', ''),
(33, 'Anu Priya', 'aaa@gmail.com', 'sankrail', 'Howarh', '8456792', 'images (6).jpeg', 'profile-3.jpg', 'Makeup Artist', '9546781234', 'aa451@', 'www.aa123@', '@aa123', 'aa123@', '@anu', '123', '', '', '', '', '', ''),
(34, 'Sneha', 'hh@gmail.com', 'andul', 'Howarh', '457896', 'images (1).png', 'profile-3.jpg', 'Service', '7824613789', 'ak741@', 'www.aa123@', '@aa123', 'mm123@', '@krishna', '123', '', '', '', '', '', ''),
(37, 'Rahul', '1rr@gmail.com', 'sankaril', 'Howarh', '478536921', 'images (1).png', 'profile-4.jpg', 'Teacher', '9546232635', 'rs741@', 'http//rk.com', '@rahul123', 'rahul123@', '@rahul', '456', '', '', '', '', '', ''),
(38, 'Aryan', 'aa2@gmail.com', 'Haridapur', 'Kolkata', '457456896', 'download (4).jpeg', 'profile-2.jpg', 'Teacher', '8246130789', 'aa451@', 'http//ak.com', '@aa123', 'aa123@', '@aryan', '123', '', '', '', '', '', ''),
(39, 'Anu Priya', 'aa1@gmail.com', 'Mecheda', 'Howarh', '8456792', 'images (6).jpeg', 'profile-3.jpg', 'Lawyer', '8746232635', '@anu', 'http//ap.com', '@anu123', 'aa123@', '@anu', '456', '', '', '', '', '', ''),
(40, 'Rudra ', 'rr1@gmail.com', 'Mayapur', 'kolkata', '56287987', 'images (1).png', 'profile-2.jpg', ' Lawyer', ' 652741963', 'rudra@', 'http//rr.com', '@rr123', 'rr123@', '@rudra', '123', 'civil', '', '', '', '', ''),
(55, 'maya', '123m@gmail.com', 'Andul', 'Howarh', '7853', 'images (1).png', 'profile-3.jpg', 'Teacher', '8527419632', '@maya', 'http//mm.com', '@maya', '@maya', '@maya', '123', '', '', '', '', '', ''),
(53, 'Ritik', 'rr3@gmail.com', 'Andul', 'Howarh', '457896', 'images (1).png', 'profile-2.jpg', 'Video Editor', '6546232635', '@ritik', 'http//rr.com', '@ritik', '@ritik', '@ritik', '456', '', '', '', '', '', ''),
(52, 'Varun', 'vv@gmail.com', 'Andul', 'Howarh', '457896', 'images (1).png', 'profile-2.jpg', 'Photographer', '8527419632', '@varun', 'http//vv.com', '@varun', '@varun', '@varun', '123', '', '', '', '', '', ''),
(46, 'Alok', 'a12@gmail.com', 'Andul', 'Howarh', '4578964565', 'images (1).png', 'profile-2.jpg', 'Service', '9824613789', '@alok', 'http//aa.com', '@alok', '@alok', '@alok', '123', '', '', '', '', '', ''),
(47, 'Kavya', 'kk@gmail.com', 'Vidya Nagar ', 'kolkata', '1456287987', 'images (6).jpeg', 'profile-3.jpg', 'Makeup Artist', '6946232635', '@kavya', 'http//kk.com', '@kavya', '@kavya', '@kavya', '123', '', '', '', '', '', ''),
(48, 'Prity', 'pi@gmail.com', 'Sankaril', 'Howarh', '8456792458', 'images (6).jpeg', 'profile-3.jpg', 'Makeup Artist', '8527419634', '@prity', 'http//pp.com', '@prity', '@prity', '@prity', '741', '', '', '', '', '', ''),
(49, 'Hari', 'hari@gmail.com', 'Andul', 'Howarh', '8456792', 'images (1).png', 'profile-4.jpg', 'Service', '9824613789', '@hari', 'http//hari.com', '@hari', '@hari', '@hari', '741', '', '', '', '', '', ''),
(50, 'Sneha', 'sn@gmail.com', 'Andul', 'Howarh', '8456792', 'images (1).png', 'profile-3.jpg', ' Teacher', ' 852741963', '@sneha', 'http//ss.com', '@sneha', '@sneha', '@sneha', '123', 'BENGALI (5YERAR EXP)', '', '', '', '', ''),
(56, 'mandira', 'ma@gmail.com', 'Andul', 'Howarh', '1456287', 'images (1).png', 'profile-3.jpg', '  Teacher', '  85274196', '@man', 'http//ss.com', '@man', '@man', '@man', '123', 'civil', '', '', '', '', ''),
(57, '', '', '', '', '', '', '', '', '', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '', '', 'html', 'css', 'js', 'php', 'sql'),
(58, '', '', '', '', '', '', '', '', '', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', '', '', 'html', 'css', 'js', 'php', 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo_upload` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `photo_upload`, `address`, `city`, `phone_no`, `password`) VALUES
(13, 'rinky', 'rr@gmail.com', 'images (4).jpeg', 'Andul', 'Howarh', ' 982461378', '741'),
(12, 'merngldtmb', 'nn@gmail.com', 'images (3).jpeg', 'Andul', 'kjgktmgl', '   96567', '456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

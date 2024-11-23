-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2024 at 10:12 AM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petwellness_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_date`
--

CREATE TABLE `booking_date` (
  `id` int(11) NOT NULL,
  `time` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking_date`
--

INSERT INTO `booking_date` (`id`, `time`, `created_at`, `updated_at`) VALUES
(1, '9AM to 11PM', '2024-05-18 11:54:06', '0000-00-00 00:00:00'),
(2, '11AM to 1PM', '2024-05-18 11:54:44', '0000-00-00 00:00:00'),
(3, '1PM to 3PM', '2024-05-18 11:54:44', '0000-00-00 00:00:00'),
(4, '3PM to 5PM', '2024-05-18 11:55:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2024-05-06 14:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `whatsap_no` bigint(11) NOT NULL,
  `emergence_no` bigint(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `mobile`, `whatsap_no`, `emergence_no`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 9219441966, 9219441966, 3456789102, 'petwellnesshub@gmail.com', '168/170, Jhansi , Uttar Pradesh', 1, '2024-04-30 12:08:17', '2024-05-13 17:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquires`
--

CREATE TABLE `tbl_enquires` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` bigint(11) DEFAULT NULL,
  `whatsap_no` bigint(11) DEFAULT NULL,
  `address_location` varchar(200) DEFAULT NULL,
  `service_type` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `type` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_varify` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_enquires`
--

INSERT INTO `tbl_enquires` (`id`, `name`, `mobile`, `whatsap_no`, `address_location`, `service_type`, `description`, `email`, `type`, `status`, `is_varify`, `created_at`, `update_at`) VALUES
(1, 'demo', 9999999999, 9564646646, 'jhansi', 'any', 'sdasa', '', '0', 1, 0, '2024-05-06 19:07:57', '2024-05-13 11:59:50'),
(2, 'as', 0, 0, '', 'das', 'wqewq', 'ak@123gmail.com', '0', 1, 0, '2024-05-09 21:29:23', NULL),
(3, 'as', 0, 0, '', 'as', 'sadsa', 'valounteer@gmail.com', '0', 1, 1, '2024-05-09 21:56:25', '2024-05-10 11:39:47'),
(4, 'test', 9483655453, 9483655453, 'Sa@123', 'xf', 'dfsfs', NULL, 'contact', 1, 2, '2024-05-10 10:36:47', '2024-05-10 11:40:09'),
(5, 'test', 9483655453, 9483655453, 'Sa@123', 'xf', 'dfsfs', NULL, 'contact', 1, 0, '2024-05-10 10:39:27', NULL),
(6, 'er', 9670252274, 23232323232, 'sa@123gmail.coma', 'sasdad', 'asda', NULL, 'contact', 1, 0, '2024-05-10 11:07:57', NULL),
(7, 'a', 9670252272, 9483655453, 'wer', 'wer', 'ewr', NULL, 'contact', 1, 0, '2024-05-13 16:23:10', NULL),
(8, 'demo', 9999999999, 9999999999, 'demo', 'demo', 'saaad', NULL, 'contact', 1, 1, '2024-05-16 10:33:08', '2024-05-16 10:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`, `rating`, `status`, `created_at`, `update_at`) VALUES
(1, 'as', 'valounteer@gmail.com', 'dsad', 4, 2, '2024-05-09 22:57:59', '2024-05-13 23:59:12'),
(2, 'as', 'valounteer@gmail.com', 'dsad', 4, 1, '2024-05-09 23:05:52', '2024-05-10 19:36:13'),
(3, 'ssa', 'as@123', 'sa', 2, 1, '2024-05-10 10:09:20', '2024-05-10 19:32:16'),
(4, 'Sanny Kumar Tiwari', 'ak@123gmail.com', 'sasas', 1, 2, '2024-05-12 12:40:00', '2024-05-12 12:55:53'),
(5, 'Rocky Mike', 'valounteer@gmail.com', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.', 5, 1, '2024-05-12 12:42:03', NULL),
(6, 'Rony Jhon', 'rony@gmail.com', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.', 5, 1, '2024-05-12 12:43:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_faq`
--

CREATE TABLE `tbl_manage_faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(555) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_manage_faq`
--

INSERT INTO `tbl_manage_faq` (`id`, `question`, `answer`, `status`, `create_at`) VALUES
(1, 'In et finibus lectus. Donec scelerisque tortor?', 'Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus. Cras ut sollicitudin urna. Vivamus blandit,', 1, '2024-05-09 11:09:48'),
(3, 'Donec ac enim vitae ligula ultrices accum?', 'Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus. Cras ut sollicitudin urna. Vivamus blandit,', 1, '2024-05-09 11:11:13'),
(5, 'I have a press/media enquiry – who should I contac...', 'Pellentesque maximus augue orci, quis congue purus iaculis id. Maecenas eudocl lorem quis massal molestie vulputate in sit amet diam. Cras eu odio sit amet ont tellus. Cras ut sollicitudin urna. Vivamus blandit,', 1, '2024-05-09 12:40:17'),
(9, 'I have a press/media enquiry – who should I contac...', 'I have a press/media enquiry – who should I contac...', 1, '2024-05-12 07:57:02'),
(10, 'I have a press/media enquiry – who should I contac...', 'I have a press/media enquiry – who should I contac...', 1, '2024-05-12 07:57:08'),
(11, 'I have a press/media enquiry – who should I contac...', 'I have a press/media enquiry – who should I contac...\r\n', 1, '2024-05-12 07:57:53'),
(12, 'I have a press/media enquiry – who should I contac...', 'I have a press/media enquiry – who should I contac...', 1, '2024-05-12 07:57:53'),
(13, 'I have a press/media enquiry – who should I contac...', 'I have a press/media enquiry – who should I contac...\r\n', 1, '2024-05-12 07:57:57'),
(14, 'I have a press/media enquiry – who should I contac...', 'I have a press/media enquiry – who should I contac...', 1, '2024-05-12 07:57:57'),
(15, '98765463214', '987981987', 0, '2024-05-13 05:43:31'),
(17, 'sdfghjkdfghjk', 'dfghjkfghjk', 0, '2024-05-13 06:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_services`
--

CREATE TABLE `tbl_manage_services` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_manage_services`
--

INSERT INTO `tbl_manage_services` (`id`, `image`, `heading`, `description`, `price`, `status`, `created_at`, `update_at`) VALUES
(1, '/uploads/services/service31.png', 'Training', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.', 333, 1, '2024-05-04 16:37:59', '2024-05-18 11:53:16'),
(2, 'uploads/services/cat-item-9.jpg', '0', 'SWARAJ', 0, 2, '2024-05-04 16:49:51', '2024-05-06 16:56:04'),
(3, '', '0', 'qqqq', 0, 2, '2024-05-06 13:34:27', '2024-05-06 16:55:58'),
(4, '', '0', 'qqqqqqq', 0, 2, '2024-05-06 13:34:43', '2024-05-06 16:55:53'),
(5, '/uploads/services/service5.png', 'Pet Hostel & Bording ', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.', 310, 1, '2024-05-06 16:14:54', '2024-05-18 11:48:51'),
(6, '', '', '', 0, 2, '2024-05-06 16:16:21', '2024-05-06 16:55:38'),
(7, '/uploads/services/service2.png', 'Pet Relocation ', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse', 210, 1, '2024-05-07 22:09:13', '2024-05-18 11:52:28'),
(8, '', '', '', 0, 2, '2024-05-07 22:46:58', '2024-05-07 22:50:43'),
(9, '', '', '', 0, 2, '2024-05-07 22:47:07', '2024-05-07 22:50:40'),
(10, '', '', '', 0, 2, '2024-05-07 22:47:31', '2024-05-07 22:50:37'),
(11, '', '', '', 0, 2, '2024-05-07 22:47:55', '2024-05-07 22:50:34'),
(12, '', '', '', 0, 2, '2024-05-07 22:49:06', '2024-05-07 22:50:30'),
(13, '', '', '', 0, 2, '2024-05-07 22:49:19', '2024-05-07 22:50:26'),
(14, '', '', '', 0, 2, '2024-05-07 22:49:26', '2024-05-07 22:50:19'),
(15, '', '', '', 0, 2, '2024-05-07 22:49:47', '2024-05-07 22:50:23'),
(16, '/uploads/services/service11.png', 'Vet On Call', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse', 320, 1, '2024-05-07 23:08:46', '2024-05-18 11:51:13'),
(17, 'uploads/services/appstore.png', 'A', 'dsa', 3654, 2, '2024-05-07 23:11:39', '2024-05-08 15:12:53'),
(18, 'uploads/services/appstore.png', 'sa', 'sa', 3, 2, '2024-05-08 13:11:16', '2024-05-08 15:12:48'),
(19, 'uploads/services/model.webp', 'ass', 'adssa', 23, 2, '2024-05-08 13:14:45', '2024-05-08 13:43:56'),
(20, 'uploads/services/model.webp', 'ass', 'sadad', 3, 2, '2024-05-08 13:21:11', '2024-05-08 13:43:53'),
(21, 'uploads/services/model.webp', 'dssa', 'sad', 3, 2, '2024-05-08 13:21:43', '2024-05-08 13:43:47'),
(22, 'uploads/services/model.webp', 'sad', 'das', 3, 2, '2024-05-08 13:27:18', '2024-05-08 13:43:15'),
(23, 'uploads/services/model.webp', 'ada', 'sada', 3, 2, '2024-05-08 13:28:37', '2024-05-08 13:43:19'),
(24, 'uploads/services/model.webp', 'a', 'a', 2, 2, '2024-05-08 13:32:48', '2024-05-08 13:43:23'),
(25, 'uploads/services/model.webp', 'aa', 'a', 8, 2, '2024-05-08 13:35:15', '2024-05-08 13:43:27'),
(26, 'uploads/services/model.webp', 'aa', 'a', 8, 2, '2024-05-08 13:35:31', '2024-05-08 13:43:31'),
(27, 'uploads/services/model.webp', 'a', 'A', 2, 2, '2024-05-08 13:36:18', '2024-05-08 13:43:35'),
(28, 'uploads/services/model.webp', 'AA', 'AA', 2, 2, '2024-05-08 13:36:52', '2024-05-08 13:43:38'),
(29, 'uploads/services/model.webp', 'aa', 'dsa', 4, 2, '2024-05-08 13:41:20', '2024-05-08 13:43:44'),
(30, 'uploads/services/model.webp', 'DASD', 'DSD2', 3, 2, '2024-05-08 13:45:15', '2024-05-08 13:45:22'),
(31, '', '', '', 0, 2, '2024-05-08 13:48:50', '2024-05-08 13:49:03'),
(32, '/uploads/services/grooming22.svg', 'Grooming ', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.', 390, 1, '2024-05-08 13:59:32', '2024-05-16 20:33:01'),
(33, '/uploads/services/service4_(1).png', 'Pet Food', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse', 510, 1, '2024-05-08 15:26:12', '2024-05-18 11:56:14'),
(34, '/uploads/services/service3.png', 'Walking', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse.', 190, 1, '2024-05-08 15:27:14', '2024-05-18 11:49:36'),
(35, '/uploads/services/other.svg', 'Other', 'Pellentesque maximus augue orciquista ut aliquet risus In hac habitasse', 0, 1, '2024-05-08 15:33:28', '2024-05-14 18:19:51'),
(36, 'uploads/services/boy.png', 'sad', 'asdsad', 3, 2, '2024-05-08 15:45:06', '2024-05-13 14:11:06'),
(37, 'uploads/services/boarding2.svg', 'A', 'dsa', 344, 2, '2024-05-12 13:19:58', '2024-05-12 13:28:15'),
(38, 'uploads/services/website2.png', '98789779878', '987897484899', 9878, 2, '2024-05-13 11:06:33', '2024-05-13 14:10:31'),
(39, 'uploads/services/website.png', '               ', '                 ', 7896, 2, '2024-05-13 11:15:19', '2024-05-13 14:10:36'),
(40, 'uploads/services/logo.png', '3433', 'sadssad', 3, 2, '2024-05-13 13:55:44', '2024-05-13 14:10:41'),
(41, 'uploads/services/eye.png', '24353535353', 'ewe', 3, 2, '2024-05-13 13:59:25', '2024-05-13 14:10:46'),
(42, 'uploads/services/twitter.png', '123424324242', '2342', 3424, 2, '2024-05-13 14:02:31', '2024-05-13 14:10:55'),
(43, 'uploads/services/logo.png', 'SDFSF', 'SDFS', 3, 2, '2024-05-13 14:07:07', '2024-05-13 14:11:00'),
(44, '/uploads/services/web3.webp', 'rthtrttht', 'rthrt', 0, 2, '2024-05-14 11:15:37', '2024-05-14 11:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_form`
--

CREATE TABLE `tbl_service_form` (
  `id` int(11) NOT NULL,
  `service_id` int(200) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `service_type` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `type_of_pet` varchar(200) NOT NULL,
  `breed` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `size_pet` varchar(200) NOT NULL,
  `aggressive_pet` varchar(200) NOT NULL,
  `pet_age` int(200) NOT NULL,
  `your_home` varchar(200) NOT NULL,
  `flat_transparent_rate` varchar(200) NOT NULL,
  `p_experience` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_service_form`
--

INSERT INTO `tbl_service_form` (`id`, `service_id`, `name`, `mobile`, `address`, `service_type`, `duration`, `date`, `type_of_pet`, `breed`, `gender`, `size_pet`, `aggressive_pet`, `pet_age`, `your_home`, `flat_transparent_rate`, `p_experience`, `comment`, `created_at`, `updated_at`) VALUES
(1, 34, 'as', 9670252274, 'Khukhundoo ,tenua road', '', '11AM to 1PM', '05/15/2024', 'Dog', 'xzc', 'Female', 'Medium', 'Normal', 2, '', '', 0, 'asdad', '2024-05-13 23:42:41', NULL),
(2, 33, 'demo', 9999999999, 'jhansi', '', '1PM to 3PM', '05/09/2024', 'Cat', '23', 'Female', 'Medium', 'Normal', 2, '', '', 0, 'asads', '2024-05-15 12:09:09', NULL),
(3, 33, 'sa', 9483655453, 'demo', '', '11AM to 1PM', '05/17/2024', 'Dog', 'ew', 'Female', 'Medium', 'Low', 2, '', '', 0, 'sada', '2024-05-15 12:20:13', NULL),
(4, 33, 'sa', 9483655453, 'demo', '', '11AM to 1PM', '05/17/2024', 'Dog', 'ew', 'Female', 'Medium', 'Low', 2, '', '', 0, 'sada', '2024-05-15 12:20:16', NULL),
(5, 1, 'Anurag Pathak', 8756112202, 'anuragpathak62770@gmail.com', '', '9AM to 11AM', '05/17/2024', 'Dog', 'Gsd', 'Male', 'Medium', 'Low', 7, '', '', 0, 'Do carefully', '2024-05-16 21:02:49', NULL),
(6, 1, 'demo', 9483655453, 'demo', '', '1PM to 3PM', '05/29/2024', 'Dog', 'dd', 'Male', 'Medium', 'Normal', 2, '', '', 0, 'asda', '2024-05-18 10:49:59', NULL),
(7, 7, 'saas', 9670252274, 'asd', '', '1PM to 3PM', '05/25/2024', 'Dog', 'as', 'Female', 'Small', 'Normal', 3, '', '', 0, 'sadad', '2024-05-18 13:27:17', NULL),
(8, 7, 'as', 9889739881, 'Khukhundoo ,tenua road', '', '11AM to 1PM', '05/12/2024', 'Cat', 'sd', 'Female', 'Lagrge', 'Normal', 4, '', '', 0, 'ds', '2024-05-18 13:28:32', NULL),
(9, 1, 'adsd', 9483655453, 'sda', '', '11AM to 1PM', '05/24/2024', 'Cat', '23', 'Female', 'Medium', 'Low', 1, '', '', 0, 'sa', '2024-05-18 13:32:51', NULL),
(10, 5, 'dads', 9670252274, 'dsa', '', '9AM to 11PM', '05/08/2024', 'Dog', 'dsaadsdsa', 'Female', 'Medium', 'Normal', 2, '', '', 0, 'asdad', '2024-05-18 13:36:55', NULL),
(11, 1, 'as', 9889739881, 'Khukhundoo ,tenua road', '', '9AM to 11PM', '05/08/2024', 'Cat', 'a', 'Female', 'Lagrge', 'Normal', 5, '', '', 0, 'aaa', '2024-05-18 13:37:29', NULL),
(12, 5, 'asdas', 9483655453, 'dasas', '', '11AM to 1PM', '05/23/2024', 'Cat', '23', 'Female', 'Medium', 'Low', 1, '', '', 0, 'sads', '2024-05-18 13:39:51', NULL),
(13, 32, 'sdf', 9483655453, 'dfss', '', '11AM to 1PM', '05/24/2024', 'Dog', 'sfd', 'Female', 'Medium', 'Normal', 4, '', '', 0, 'sdfsf', '2024-05-18 14:01:08', NULL),
(14, 32, 'sdf', 9483655453, 'dfss', '', '11AM to 1PM', '05/24/2024', 'Dog', 'sfd', 'Female', 'Medium', 'Normal', 4, '', '', 0, 'sdfsf', '2024-05-18 14:02:29', NULL),
(15, 7, 'sadas', 9670252276, 'asdas', '', '1PM to 3PM', '05/24/2024', 'Cat', 'dsad', 'Female', 'Medium', 'Normal', 2, '', '', 0, 'sdd', '2024-05-18 15:17:40', NULL),
(16, 1, 'asds', 9483655453, 'asdsad', '', '11AM to 1PM', '05/25/2024', 'Cat', 'ads', 'Female', 'Small', 'Normal', 4, '', '', 0, 'dsfsf', '2024-05-18 15:18:56', NULL),
(17, 1, 'as', 9483655453, 'Khukhundoo ,tenua road', '', '11AM to 1PM', '05/19/2024', 'Cat', 'sad', 'Male', 'Medium', 'Normal', 1, '', '', 0, 'asdas', '2024-05-18 15:24:07', NULL),
(18, 1, 'aSA', 9889739881, 'ASAa', '', '11AM to 1PM', '05/19/2024', 'Cat', 'As', 'Female', 'Medium', 'Low', 2, '', '', 0, 'aS', '2024-05-18 16:22:26', NULL),
(19, 1, 'wee', 9670252276, 'sdf', '', '9AM to 11AM', '05/23/2024', 'Cat', 'sfs', 'Female', 'Medium', 'Normal', 2, '', '', 0, 'dsff', '2024-05-21 10:48:47', NULL),
(20, 1, 'demo', 9889739881, 'Khukhundoo ,tenua road', '', '9AM to 11PM', '05/23/2024', 'Cat', 'sfd', 'Female', 'Medium', 'Low', 4, '', '', 0, 'sdfs', '2024-05-21 10:50:23', NULL),
(21, 16, 'as', 9670252276, 'sss', '', '9AM to 11PM', '05/23/2024', 'Cat', '23', 'Female', 'Lagrge', 'Low', 2, '', '', 0, 'sss', '2024-05-21 11:05:50', NULL),
(22, 1, 'as', 9670252274, 'Khukhundoo ,tenua road', '', '9AM to 11PM', '05/23/2024', 'Dog', 'sad', 'Male', 'Medium', 'Normal', 2, '', '', 0, 'ccxc', '2024-05-21 11:06:35', NULL),
(23, 1, 'asda', 9889739881, 'asd', '', '11AM to 1PM', '05/23/2024', 'Dog', '23', 'Female', 'Medium', 'Normal', 1, '', '', 0, 'fdsdf', '2024-05-21 11:17:27', NULL),
(24, 1, 'as', 9670252276, 'da', '', '9AM to 11PM', '05/23/2024', 'Cat', 'sad', 'Female', 'Medium', 'Low', 2, '', '', 0, 'sdsfsd', '2024-05-21 11:18:10', NULL),
(25, 1, 'as', 9670252276, 'da', '', '9AM to 11PM', '05/23/2024', 'Cat', 'sad', 'Female', 'Medium', 'Low', 2, '', '', 0, 'sdsfsd', '2024-05-21 11:19:20', NULL),
(26, 7, 'sdfsf', 9483655453, 'Khukhundoo ,tenua road', '', '1PM to 3PM', '05/24/2024', 'Cat', 'sd', 'Male', 'Small', 'Low', 3, '', '', 0, 'sdfddf', '2024-05-21 11:28:38', NULL),
(27, 1, 'as', 9483655453, 'sdsa', '', '9AM to 11PM', '05/23/2024', 'Cat', '23', 'Male', 'Small', 'Low', 1, '', '', 0, 'sasS', '2024-05-21 11:36:58', NULL),
(28, 1, 'ass', 9483655453, 'sas', '', '11AM to 1PM', '05/23/2024', 'Cat', 'sdf', 'Male', 'Small', 'Low', 2, '', '', 0, 'ss', '2024-05-21 11:50:38', NULL),
(29, 5, 'as', 9483655453, 'Khukhundoo ,tenua road', '', '9AM to 11PM', '05/23/2024', 'Cat', 'dsd', 'Male', 'Medium', 'Normal', 3, '', '', 0, 'asdad', '2024-05-21 11:51:26', NULL),
(30, 1, 'sdsd', 9483655453, 'sdsd', '', '9AM to 11PM', '05/23/2024', 'Cat', 'dss', 'Male', 'Medium', 'Normal', 1, '', '', 0, 'sds', '2024-05-21 11:52:03', NULL),
(31, 7, 'test', 9999999999, 'Shiva ji nagar jhansi', '', '11AM to 1PM', '08/14/2024', 'Cat', '2', 'Male', 'Small', 'Low', 1, '', '', 0, 'sas', '2024-08-16 15:47:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_packages`
--

CREATE TABLE `tbl_service_packages` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `sub_heading` varchar(200) NOT NULL,
  `pricing` int(200) NOT NULL,
  `discount` int(200) NOT NULL,
  `is_available` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1:available 0:Not available',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_service_packages`
--

INSERT INTO `tbl_service_packages` (`id`, `service_id`, `sub_heading`, `pricing`, `discount`, `is_available`, `status`, `created_at`, `update_at`) VALUES
(1, 1, 'Aggression & Reactivity', 2234, 2, 1, 1, '2024-05-13 18:24:38', '2024-05-15 11:59:58'),
(2, 7, 'Teeth Cleaning', 1300, 10, 1, 1, '2024-05-13 18:41:00', '2024-05-15 12:03:55'),
(3, 7, 'Blow Dry', 1200, 10, 0, 1, '2024-05-13 18:41:01', '2024-05-14 18:14:56'),
(4, 33, 'Eye Cleaning\r\n', 222, 2, 1, 1, '2024-05-13 19:04:13', '2024-05-15 12:08:33'),
(5, 33, 'Handscissor Finish', 444, 2, 1, 1, '2024-05-13 23:35:59', '2024-05-15 12:04:32'),
(6, 34, 'Watering Plants', 333, 3, 1, 1, '2024-05-13 23:36:29', '2024-05-14 19:00:42'),
(7, 5, 'Conditioning Treatment', 654, 3, 1, 1, '2024-05-13 23:37:02', '2024-05-15 12:08:22'),
(8, 35, 'Ears Flushed & Cleaned', 212, 3, 1, 1, '2024-05-13 23:37:32', '2024-05-15 12:08:13'),
(9, 1, 'Puppy Training', 200, 2, 1, 1, '2024-05-14 18:20:31', '2024-05-15 12:00:39'),
(10, 35, 'Combing/Brushing', 300, 1, 1, 1, '2024-05-14 18:23:41', '2024-05-15 12:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `image` varchar(999) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `image`, `status`, `create_at`) VALUES
(1, '/uploads/services/pet11.webp', 1, '2024-05-09 14:07:53'),
(2, '/uploads/services/pet7.png', 1, '2024-05-09 14:11:08'),
(3, 'uploads/slider/slider4.jpg', 0, '2024-05-09 14:17:46'),
(4, 'uploads/slider/web.webp', 0, '2024-05-13 11:58:05'),
(5, '/uploads/services/pet51.png', 1, '2024-05-14 11:25:48'),
(6, '/uploads/services/pet8.webp', 1, '2024-05-14 11:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `name`, `description`, `image`, `status`, `create_at`) VALUES
(1, 'Swaraj ', 'DI 513', 'uploads/slider_image/22.jpg', 0, '2024-04-26 08:14:46'),
(2, 'Johndeer', 'Svg model', 'uploads/slider_image/nikita-kachanovsky-DXj9KrzecHo-unsplash.jpg', 0, '2024-04-26 08:42:59'),
(3, 'Donald James', 'Firstly, the staff at Chedan Motors are incredibly knowledgeable and skilled. They were able to diagnose and address the issues with my bike efficiently, and I felt confident leaving it in their capable hands.', 'uploads/slider_image/user-3.png', 0, '2024-04-26 12:51:00'),
(4, 'Sheggy O’Brain		', 'Firstly, the staff at Chedan Motors are incredibly knowledgeable and skilled. They were able to diagnose and address the issues with my bike efficiently, and I felt confident leaving it in their capable hands.', 'uploads/slider_image/user-3.png', 0, '2024-04-26 12:51:14'),
(5, 'Sheggy O’Brain', 'One of the standout aspects of Chedan Motors is their commitment to customer satisfaction. They take the time to listen to your concerns and explain the necessary repairs or maintenance in detail. ', 'uploads/slider_image/user-2.png', 0, '2024-04-26 12:52:46'),
(6, 'Albert D’Souza', 'Overall, I couldn\'t be happier with the service I received at Chedan Motors. If you\'re looking for a reliable and trustworthy service center for your two-wheeler, I highly recommend giving them a try.', 'uploads/slider_image/user-1.png', 0, '2024-04-26 12:53:56'),
(7, '', '', '', 0, '2024-04-26 13:07:01'),
(8, 'A.P.J ', 'asdfghjytrewertwertvdrgbtbbjkgbjfgbbfbbfjh fljbhb', 'uploads/slider_image/sir-apjn.png', 0, '2024-04-27 07:50:43'),
(9, 'kaku', 'asdfghjytrewertwertvdrgbtbbjkgbjfgbbfbbfjh fljbhb', 'uploads/slider_image/sir-apjn.png', 0, '2024-04-27 07:51:10'),
(10, 'sdfghjk', 'sdfghjk,.', 'uploads/slider_image/banner1.jpg', 0, '2024-04-27 07:52:22'),
(11, 'fghjk', 'hjkl', 'uploads/slider_image/banner1 (1).jpg', 0, '2024-04-27 08:09:32'),
(12, 'dfghjk', 'jkl;', 'uploads/slider_image/1download (2).jpg', 0, '2024-04-27 08:10:06'),
(13, '', '', '', 0, '2024-04-29 04:44:01'),
(14, '', '', '', 0, '2024-04-29 04:44:07'),
(15, '', '', '', 0, '2024-04-29 04:46:30'),
(16, '', '', '', 0, '2024-04-29 04:46:43'),
(17, '', '', '', 0, '2024-04-29 04:47:16'),
(18, '', '', '', 0, '2024-04-29 04:48:13'),
(19, '', '', '', 0, '2024-04-29 04:51:11'),
(20, 'dfghj', 'sdfghj', 'uploads/slider_image/news1.jpg', 0, '2024-04-29 04:51:40'),
(21, '', '', '', 0, '2024-04-29 04:54:40'),
(22, '', '', '', 0, '2024-04-29 05:00:02'),
(23, '', '', '', 0, '2024-04-29 05:14:48'),
(24, 'sdfghj', 'sdfghjk', 'uploads/slider_image/1download (2).jpg', 0, '2024-04-29 05:15:17'),
(25, 'dsfgfhjjkl', '', '', 0, '2024-04-29 05:22:38'),
(26, '', '', '', 0, '2024-04-29 05:24:05'),
(27, '', '', '', 0, '2024-04-29 05:24:17'),
(28, '', '', '', 0, '2024-04-29 05:26:56'),
(29, '', '', '', 0, '2024-04-29 05:47:33'),
(30, 'dfsdf', '', '', 0, '2024-04-29 05:53:45'),
(31, 'asa', 'asaas', '', 0, '2024-05-06 12:35:21'),
(32, 'as', 'aDA', '', 0, '2024-05-06 12:42:48'),
(33, '', '', '', 0, '2024-05-06 12:48:46'),
(34, 'aa', 'aaaa', '', 0, '2024-05-06 12:49:14'),
(35, '', '', '', 0, '2024-05-06 12:51:14'),
(36, 'adzcz', 'xcxzczc', '', 0, '2024-05-06 12:53:54'),
(37, 'adsda', 'sadad', '', 0, '2024-05-06 12:59:25'),
(38, 'dsasd', 'asdada', '', 0, '2024-05-06 13:03:27'),
(39, 'sadasd', 'dsasdsanny', 'uploads/slider_image/news3.jpg', 0, '2024-05-06 13:03:47'),
(40, 'aA', 'a', 'uploads/testimonial/imagess.jpg', 0, '2024-05-06 13:05:01'),
(41, 'Rasmika Jain', '          Pellentesque maximus augue orci, quisdal andosp Pellentesque maximus augue orci, quisoki congue Nullam egestas, nisi id mollis elementum.', '/uploads/services/h2-testi-1.png', 1, '2024-05-06 13:05:49'),
(42, 'CSAA', 'ZXCZ', 'uploads/testimonial/pexels-studio-art-smile-3476860.jpg', 0, '2024-05-06 13:10:58'),
(43, 'sdfsf', 'sdfsf', 'uploads/testimonial/3.jpg', 0, '2024-05-08 05:50:27'),
(44, 'Riya Sharma', 'Pellentesque maximus augue orci, quisdal andosp Pellentesque maximus augue orci, quisoki congue  Nullam egestas, nisi id mollis elementum.', '/uploads/services/h2-testi-21.png', 1, '2024-05-09 07:53:20'),
(45, 'qsqswqswqsq', '                              ', 'uploads/testimonial/web.webp', 0, '2024-05-13 06:19:03'),
(46, 'ss', '          ', 'uploads/testimonial/website.png', 0, '2024-05-13 06:19:39'),
(47, 'jdfbvhfdv', 'n vdfnv dfv', 'uploads/testimonial/web.webp', 0, '2024-05-13 06:20:02'),
(48, 'hellotest', 'hello test', '/uploads/services/h2-testi-2.png', 0, '2024-05-14 06:08:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_date`
--
ALTER TABLE `booking_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_enquires`
--
ALTER TABLE `tbl_enquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manage_faq`
--
ALTER TABLE `tbl_manage_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manage_services`
--
ALTER TABLE `tbl_manage_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_form`
--
ALTER TABLE `tbl_service_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_packages`
--
ALTER TABLE `tbl_service_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_date`
--
ALTER TABLE `booking_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_enquires`
--
ALTER TABLE `tbl_enquires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_manage_faq`
--
ALTER TABLE `tbl_manage_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_manage_services`
--
ALTER TABLE `tbl_manage_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_service_form`
--
ALTER TABLE `tbl_service_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_service_packages`
--
ALTER TABLE `tbl_service_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 02:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `silkonhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(15) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1=>''Active'',2=>''Inactive'''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `mobile`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'MTIzNDU2', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(3) DEFAULT NULL,
  `name` varchar(19) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `type`, `status`) VALUES
(153, 'Lucknow', 'Rural', 1),
(166, 'Rae Bareli', 'Rural', 1),
(166, 'Rae Bareli', 'Urban', 1),
(153, 'Lucknow', 'Urban', 1),
(109, 'Agra', 'Rural', 1),
(125, 'Bulandshahr', 'Rural', 1),
(168, 'Saharanpur', 'Rural', 1),
(163, 'Muzaffarnagar', 'Rural', 1),
(123, 'Bijnor', 'Rural', 1),
(162, 'Moradabad', 'Rural', 1),
(167, 'Rampur', 'Rural', 1),
(145, 'Amroha', 'Rural', 1),
(160, 'Meerut', 'Rural', 1),
(115, 'Baghpat', 'Rural', 1),
(136, 'Ghaziabad', 'Rural', 1),
(135, 'Gautam Buddha Nagar', 'Rural', 1),
(110, 'Aligarh', 'Rural', 1),
(154, 'Hathras', 'Rural', 1),
(158, 'Mathura', 'Rural', 1),
(134, 'Firozabad', 'Rural', 1),
(157, 'Mainpuri', 'Rural', 1),
(124, 'Budaun', 'Rural', 1),
(121, 'Bareilly', 'Rural', 1),
(164, 'Pilibhit', 'Rural', 1),
(171, 'Shahjahanpur', 'Rural', 1),
(150, 'Kheri', 'Rural', 1),
(174, 'Sitapur', 'Rural', 1),
(141, 'Hardoi', 'Rural', 1),
(177, 'Unnao', 'Rural', 1),
(584, 'Amethi', 'Rural', 1),
(132, 'Farrukhabad', 'Rural', 1),
(146, 'Kannauj', 'Rural', 1),
(130, 'Etawah', 'Rural', 1),
(113, 'Auraiya', 'Rural', 1),
(147, 'Kanpur Dehat', 'Rural', 1),
(148, 'Kanpur Nagar', 'Rural', 1),
(142, 'Jalaun', 'Rural', 1),
(144, 'Jhansi', 'Rural', 1),
(152, 'Lalitpur', 'Rural', 1),
(140, 'Hamirpur', 'Rural', 1),
(156, 'Mahoba', 'Rural', 1),
(119, 'Banda', 'Rural', 1),
(127, 'Chitrakoot', 'Rural', 1),
(133, 'Fatehpur', 'Rural', 1),
(165, 'Pratapgarh', 'Rural', 1),
(149, 'Kaushambi', 'Rural', 1),
(111, 'Allahabad', 'Rural', 1),
(120, 'Barabanki', 'Rural', 1),
(131, 'Faizabad', 'Rural', 1),
(112, 'Ambedkar Nagar', 'Rural', 1),
(176, 'Sultanpur', 'Rural', 1),
(116, 'Bahraich', 'Rural', 1),
(172, 'Shravasti', 'Rural', 1),
(118, 'Balrampur', 'Rural', 1),
(138, 'Gonda', 'Rural', 1),
(173, 'Siddharth Nagar', 'Rural', 1),
(122, 'Basti', 'Rural', 1),
(169, 'Sant Kabeer Nagar', 'Rural', 1),
(155, 'Maharajganj', 'Rural', 1),
(139, 'Gorakhpur', 'Rural', 1),
(139, 'Kheri', 'Rural', 1),
(151, 'Kushi Nagar', 'Rural', 1),
(128, 'Deoria', 'Rural', 1),
(114, 'Azamgarh', 'Rural', 1),
(159, 'Mau', 'Rural', 1),
(117, 'Ballia', 'Rural', 1),
(143, 'Jaunpur', 'Rural', 1),
(137, 'Ghazipur', 'Rural', 1),
(126, 'Chandauli', 'Rural', 1),
(178, 'Varanasi', 'Rural', 1),
(170, 'Bhadohi', 'Rural', 1),
(161, 'Mirzapur', 'Rural', 1),
(175, 'Sonbhadra', 'Rural', 1),
(129, 'Etah', 'Rural', 1),
(577, 'Kasganj', 'Rural', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_resgistration`
--

CREATE TABLE IF NOT EXISTS `user_resgistration` (
`id` int(11) NOT NULL,
  `registration_no` varchar(30) NOT NULL,
  `district_1` varchar(10) NOT NULL,
  `district_2` varchar(10) NOT NULL,
  `district_3` varchar(10) NOT NULL,
  `district_4` varchar(10) NOT NULL,
  `apply_post` varchar(10) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `category` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `date_of_birth` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `user_district` varchar(10) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `aadhar_no` varchar(15) NOT NULL,
  `pancard_no` varchar(30) NOT NULL,
  `seva_yojna_reg_no` varchar(200) NOT NULL,
  `degree_1` varchar(200) NOT NULL,
  `degree_2` varchar(200) NOT NULL,
  `degree_3` varchar(200) NOT NULL,
  `degree_4` varchar(10) NOT NULL,
  `degree_5` varchar(10) NOT NULL,
  `sub_streem_1` text NOT NULL,
  `sub_streem_2` text NOT NULL,
  `sub_streem_3` text NOT NULL,
  `sub_streem_4` text NOT NULL,
  `sub_streem_5` text NOT NULL,
  `passing_year_1` varchar(4) NOT NULL,
  `passing_year_2` varchar(4) NOT NULL,
  `passing_year_3` varchar(4) NOT NULL,
  `passing_year_4` varchar(4) NOT NULL,
  `passing_year_5` varchar(4) NOT NULL,
  `com_course_name` varchar(255) NOT NULL,
  `com_course_duration` varchar(10) NOT NULL,
  `com_course_pass_year` varchar(4) NOT NULL,
  `other_course_name` varchar(255) NOT NULL,
  `other_course_duration` varchar(10) NOT NULL,
  `other_course_pass_year` varchar(4) NOT NULL,
  `last_com_name` varchar(255) NOT NULL,
  `last_com_post` varchar(255) NOT NULL,
  `total_exp` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_resgistration`
--

INSERT INTO `user_resgistration` (`id`, `registration_no`, `district_1`, `district_2`, `district_3`, `district_4`, `apply_post`, `user_name`, `father_name`, `category`, `gender`, `date_of_birth`, `address`, `user_district`, `mobile_no`, `email_id`, `aadhar_no`, `pancard_no`, `seva_yojna_reg_no`, `degree_1`, `degree_2`, `degree_3`, `degree_4`, `degree_5`, `sub_streem_1`, `sub_streem_2`, `sub_streem_3`, `sub_streem_4`, `sub_streem_5`, `passing_year_1`, `passing_year_2`, `passing_year_3`, `passing_year_4`, `passing_year_5`, `com_course_name`, `com_course_duration`, `com_course_pass_year`, `other_course_name`, `other_course_duration`, `other_course_pass_year`, `last_com_name`, `last_com_post`, `total_exp`, `status`, `created_at`, `updated_at`) VALUES
(1, '123456', '125', '166', '168', '109', '5', 'sitaram', 'sfdas', '2', '2', '2019-02-15', 'hjknmn', '145', '4652165421', '56546@g.com', '456216541321', '12332132', '32132', '132132', '1321321', '3213', '1', '1', '4651', '545312', '21', '5+623', '2', '4561', '4130', '4651', '4651', '4651', '32512', '8', '5613', '5', '4', '5623', '56214561', '413245', '2', 1, '2019-02-15 10:38:20', '2019-02-15 10:38:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_resgistration`
--
ALTER TABLE `user_resgistration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_resgistration`
--
ALTER TABLE `user_resgistration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

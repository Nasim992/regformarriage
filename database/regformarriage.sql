-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 01:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regformarriage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `fullname`, `password`, `email`, `contact`) VALUES
(2, 'admin', 'John Doe ', '5fb6e2a60c9da41e0a94fe6157ddb93f', 'admin@gmail.com', '099343');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fathername` varchar(100) DEFAULT NULL,
  `mothername` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `word` varchar(100) DEFAULT NULL,
  `upozilla` varchar(100) DEFAULT NULL,
  `zilla` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `p_village` varchar(100) DEFAULT NULL,
  `p_post` varchar(100) DEFAULT NULL,
  `p_word` varchar(100) DEFAULT NULL,
  `p_upozilla` varchar(100) DEFAULT NULL,
  `p_zilla` varchar(100) DEFAULT NULL,
  `p_country` varchar(100) DEFAULT NULL,
  `p_nationality` varchar(100) DEFAULT NULL,
  `bloodgroup` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `height` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `exam_name` varchar(100) DEFAULT NULL,
  `education_group` varchar(100) DEFAULT NULL,
  `passing_year` varchar(100) DEFAULT NULL,
  `gpa` varchar(100) DEFAULT NULL,
  `board` varchar(100) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `father_work` varchar(100) DEFAULT NULL,
  `father_contact` varchar(100) DEFAULT NULL,
  `mother_contact` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `brother_details` varchar(1000) DEFAULT NULL,
  `special_quality` varchar(100) DEFAULT NULL,
  `patri_details` varchar(2000) DEFAULT NULL,
  `gallery_image_1` varchar(100) DEFAULT NULL,
  `gallery_image_2` varchar(100) DEFAULT NULL,
  `gallery_image_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `profile_picture`, `name`, `fathername`, `mothername`, `village`, `post`, `word`, `upozilla`, `zilla`, `country`, `nationality`, `p_village`, `p_post`, `p_word`, `p_upozilla`, `p_zilla`, `p_country`, `p_nationality`, `bloodgroup`, `religion`, `height`, `weight`, `color`, `contact`, `password`, `occupation`, `exam_name`, `education_group`, `passing_year`, `gpa`, `board`, `institute`, `father_work`, `father_contact`, `mother_contact`, `mother_occupation`, `brother_details`, `special_quality`, `patri_details`, `gallery_image_1`, `gallery_image_2`, `gallery_image_3`) VALUES
(8, 'Capture.PNG', 'নাসিম', 'সদ', 'সদস', 'সদস', 'সদস', 'দসদস', 'দসদস', 'দসদসদ', 'সদস', 'সদস', 'সদস', 'সদস', 'সদসদ', 'সদস', 'দসদ', 'সদসদস', 'দসদস', 'দসদস', 'দসদ', 'সদসদ', 'সদ', 'সদসদস', 'mdnasim6416@gmail.comসদসদসদ', 'Ab12345678দসদ', 'সদসদ', 'সদসদ', 'সদসদ', 'সদ', 'সদসদ', 'সদসদস', 'দসদস', 'দসদস', 'দসদসদ', 'সদস', 'দসদ', 'সদসদ', 'সদসদস', 'সদসদ', 'Capture.PNG', 'Capture.PNG', 'loginpannel.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

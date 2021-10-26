-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 03:59 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideacloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `doc_ID` int(11) NOT NULL,
  `doc_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `doc_author` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `doc_date` date DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `visibitity` int(11) NOT NULL,
  `type_file` char(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_groups`
--

CREATE TABLE `doc_groups` (
  `group_ID` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_detail`
--

CREATE TABLE `group_detail` (
  `doc_ID` int(11) DEFAULT NULL,
  `group_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL CHECK (`email` like '^[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,6}$'),
  `SDT` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL CHECK (`SDT` like '0[35789]\\d{8}$'),
  `status` tinyint(1) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `authorize` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`doc_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `doc_groups`
--
ALTER TABLE `doc_groups`
  ADD PRIMARY KEY (`group_ID`);

--
-- Indexes for table `group_detail`
--
ALTER TABLE `group_detail`
  ADD KEY `doc_ID` (`doc_ID`),
  ADD KEY `group_ID` (`group_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `doc_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_groups`
--
ALTER TABLE `doc_groups`
  MODIFY `group_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `docs`
--
ALTER TABLE `docs`
  ADD CONSTRAINT `docs_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `group_detail`
--
ALTER TABLE `group_detail`
  ADD CONSTRAINT `group_detail_ibfk_1` FOREIGN KEY (`doc_ID`) REFERENCES `docs` (`doc_ID`),
  ADD CONSTRAINT `group_detail_ibfk_2` FOREIGN KEY (`group_ID`) REFERENCES `doc_groups` (`group_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

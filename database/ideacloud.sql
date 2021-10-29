-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 04:51 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ideacloud`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docs`
--

CREATE TABLE `docs` (
  `doc_ID` int(11) NOT NULL,
  `doc_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `doc_author` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `doc_date` date DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `visibility` int(11) NOT NULL,
  `type_file` char(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `docs`
--

INSERT INTO `docs` (`doc_ID`, `doc_name`, `doc_author`, `doc_date`, `description`, `visibility`, `type_file`, `type`, `filename`, `user_ID`) VALUES
(1, 'Tài liệu 1', 'Tác giả 1', '2001-08-21', 'Mô tả 1, test', 0, 'docx', 1, 'Filename1.docx', 2),
(2, 'Tài liệu 2', 'Tác giả 2', '2001-08-21', 'Mô tả 2, test', 0, 'xlsx', 0, 'Filename2.xlsx', 4),
(3, 'Tài liệu 3', 'Tác giả 3', '2001-08-21', 'Mô tả 3, test', 0, 'pdf', 0, 'Filename3.pdf', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doc_groups`
--

CREATE TABLE `doc_groups` (
  `group_ID` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `doc_groups`
--

INSERT INTO `doc_groups` (`group_ID`, `group_name`, `parent`) VALUES
(9, 'Tài liệu CIA', NULL),
(10, 'Tài liệu NSA', NULL),
(11, 'Tài liệu FBI', NULL),
(12, 'Tài liệu DEA', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_detail`
--

CREATE TABLE `group_detail` (
  `doc_ID` int(11) DEFAULT NULL,
  `group_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `group_detail`
--

INSERT INTO `group_detail` (`doc_ID`, `group_ID`) VALUES
(1, 9),
(1, 10),
(2, 12),
(3, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL CHECK (`email` regexp '^[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,6}$'),
  `SDT` varchar(13) COLLATE utf8_vietnamese_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `authorize` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `password`, `email`, `SDT`, `status`, `code`, `authorize`) VALUES
(1, 'Toản chim bé', 'toantranct', '123456', 'mxhios@gmail.com', '065413014', 0, NULL, NULL),
(2, 'admin\'s fullname', 'admin', 'admin', 'admin@gmail.com', '1234564', 1, NULL, 1),
(3, 'test\'s fullname', 'test', '123', 'test@gmail.com', '1234567', 0, NULL, 0),
(4, 'user1\'s fullname', 'user1', '123', 'user1@gmail.com', '965132132', 1, NULL, 0),
(5, 'user2\'s fullname', 'user2', '123', 'user2@gmail.com', '541652164', 1, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`doc_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Chỉ mục cho bảng `doc_groups`
--
ALTER TABLE `doc_groups`
  ADD PRIMARY KEY (`group_ID`),
  ADD KEY `parent` (`parent`);

--
-- Chỉ mục cho bảng `group_detail`
--
ALTER TABLE `group_detail`
  ADD KEY `doc_ID` (`doc_ID`),
  ADD KEY `group_ID` (`group_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docs`
--
ALTER TABLE `docs`
  MODIFY `doc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `doc_groups`
--
ALTER TABLE `doc_groups`
  MODIFY `group_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `docs`
--
ALTER TABLE `docs`
  ADD CONSTRAINT `docs_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `doc_groups`
--
ALTER TABLE `doc_groups`
  ADD CONSTRAINT `doc_groups_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `doc_groups` (`group_ID`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `group_detail`
--
ALTER TABLE `group_detail`
  ADD CONSTRAINT `group_detail_ibfk_3` FOREIGN KEY (`doc_ID`) REFERENCES `docs` (`doc_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `group_detail_ibfk_4` FOREIGN KEY (`group_ID`) REFERENCES `doc_groups` (`group_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

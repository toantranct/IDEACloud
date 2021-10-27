-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 01:06 PM
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
  `visibility` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `type_file` char(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `docs`
--

INSERT INTO `docs` (`doc_ID`, `doc_name`, `doc_author`, `doc_date`, `description`, `visibility`, `type_file`, `type`, `filename`, `user_ID`) VALUES
(1, 'Tài liệu 1', 'Tác giả 1', '2001-08-21', 'Mô tả 1, test', 'Only Me', NULL, NULL, 'test.sql', 3),
(2, 'Tài liệu 2', 'Tác giả 2', '2001-08-21', 'Mô tả 2, test', 'Public', NULL, NULL, 'test2.sql', 4),
(3, 'Tài liệu 3', 'Tác giả 3', '2001-08-21', 'Mô tả 3, test', 'Public', NULL, NULL, 'test3.sql', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doc_groups`
--

CREATE TABLE `doc_groups` (
  `group_ID` int(11) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `doc_groups`
--

INSERT INTO `doc_groups` (`group_ID`, `group_name`) VALUES
(1, 'Excel'),
(2, 'Docx'),
(3, 'Ppt');

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
(1, 3),
(1, 2),
(2, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL CHECK (`email` regexp '^[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,6}$'),
  `SDT` int(13) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `code` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `authorize` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `SDT`, `status`, `code`, `authorize`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1234564, 1, NULL, 1),
(2, 'test', '123', 'test@gmail.com', 1234567, 0, NULL, 0),
(3, 'user1', '123', 'user1@gmail.com', 965132132, 1, NULL, 0),
(4, 'user2', '123', 'user2@gmail.com', 541652164, 1, NULL, 0);

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
  ADD PRIMARY KEY (`group_ID`);

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
  MODIFY `group_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `docs`
--
ALTER TABLE `docs`
  ADD CONSTRAINT `docs_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `group_detail`
--
ALTER TABLE `group_detail`
  ADD CONSTRAINT `group_detail_ibfk_1` FOREIGN KEY (`doc_ID`) REFERENCES `docs` (`doc_ID`),
  ADD CONSTRAINT `group_detail_ibfk_2` FOREIGN KEY (`group_ID`) REFERENCES `doc_groups` (`group_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

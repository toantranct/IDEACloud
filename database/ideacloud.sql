-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 05:47 PM
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
(48, 'Tài liệu 1', 'Tác giả 1', '2001-12-08', 'Mô tả 1, test', 1, 'docx', 0, 'Report_2021 (1).docx', 9),
(49, 'Tên 49', 'Tác giả 49', '2001-12-08', 'mô tả 49', 1, 'docx', 1, 'Tài liệu 2.docx', 9),
(51, 'báo cáo của bố', 'bố', '2001-12-08', 'của bố, cấm zo', 0, 'docx', 0, 'Baocaochuan.docx', 9),
(52, 'soạn thảo', 'Le Hoang', '2021-11-02', 'mô tả', 0, 'docx', 1, 'soạn thảo.docx', 9);

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
(19, 'Nhóm 1', NULL),
(20, 'Con 19', 19),
(21, 'con 20', 20),
(22, 'Nhóm 2', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group_detail`
--

CREATE TABLE `group_detail` (
  `doc_ID` int(11) DEFAULT NULL,
  `group_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `share`
--

CREATE TABLE `share` (
  `doc_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `share`
--

INSERT INTO `share` (`doc_id`, `username`) VALUES
(48, 'toantranct');

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
(8, 'toản chim bé', 'toantranct', '$2y$10$fvTVo2CWxDk.AtJqrMDztuAthO.Z3NXEa94C4ybVUbTb8RF96NUdi', 'toanchimbe@gmail.com', '05821657482', 1, '30617decbfe67193bef275a7ae0aa90e', 1),
(9, 'Le Hoang', 'huangdz', '$2y$10$U4HIZ1YLFKyYIhrKsQJKlu7IHKL7wSe4OsU3iyoLPf8mnoavmSgb2', 'hoangoku@gmail.com', '0582773218', 1, '70616ef93a6c144a6346476ef5f4a6f0', 1);

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
-- Chỉ mục cho bảng `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`doc_id`,`username`);

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
  MODIFY `doc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `doc_groups`
--
ALTER TABLE `doc_groups`
  MODIFY `group_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

--
-- Các ràng buộc cho bảng `share`
--
ALTER TABLE `share`
  ADD CONSTRAINT `share_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2019 lúc 09:07 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ows-contactdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone1`, `phone2`, `email`, `fb`, `company`) VALUES
(1, 'Truong', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT'),
(4, 'Truong', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(5, 'Truong', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(6, 'Truong', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(7, 'Truong', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(8, 'Truongggg', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(9, 'zzzz', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(12, 'cc', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(14, 'fffff', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1'),
(15, 'mmm', '0962830404', '0983103587', 'mybadboy196@gmail.com', 'Bình Yên', 'CNTT1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 31, 2021 lúc 03:29 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlphongmay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiao`
--

CREATE TABLE `chitietgiao` (
  `sophieugiao` int(11) NOT NULL,
  `matv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `soluonggiao` int(11) NOT NULL,
  `tinhtrangtb` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiao`
--

INSERT INTO `chitietgiao` (`sophieugiao`, `matv`, `soluonggiao`, `tinhtrangtb`) VALUES
(1, 'bàn phím', 23, 'moi'),
(2, 'bàn phím', 23, 'moi'),
(3, 'bàn phím', 23, 'moi'),
(4, 'bàn phím', 1, 'moi'),
(5, 'bàn phím', 2, 'moi'),
(6, 'bàn phím', 1, 'moi'),
(7, 'bàn phím', 1, 'moi'),
(8, 'bàn phím', 1, 'moi'),
(9, 'bàn phím', 1, 'moi'),
(18, 'ram', 1, 'moi'),
(20, 'chuột', 5, 'moi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnhan`
--

CREATE TABLE `chitietnhan` (
  `sophieunhan` int(11) NOT NULL,
  `tenvt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Soluongnhan` int(11) NOT NULL,
  `trinhtangvattu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietnhan`
--

INSERT INTO `chitietnhan` (`sophieunhan`, `tenvt`, `Soluongnhan`, `trinhtangvattu`) VALUES
(8, 'bàn phím', 5, 'moi'),
(9, 'chuột', 10, 'moi'),
(10, 'ram', 5, 'moi'),
(11, 'bàn phím', 10, 'moi'),
(12, 'ram', 10, 'moi'),
(13, 'chuột', 10, 'moi'),
(14, 'bàn ghế', 10, 'moi'),
(15, 'máy tính', 10, 'moi'),
(16, 'bàn phím', 10, 'moi'),
(17, 'bàn phím', 10, 'moi'),
(32, 'bàn phím', 22, 'moi'),
(33, 'bàn phím', 22, 'moi'),
(44, 'bàn phím', 10, 'moi'),
(45, 'chuột', 10, 'moi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pasword` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `username`, `pasword`) VALUES
(1, 'hieu', 'hieu123'),
(2, 'long', 'long123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tengv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `tengv`, `sdt`, `mail`) VALUES
('mgv1', 'Đào Phạm', 36459781, 'daopham@gmail.com'),
('mgv2', 'Thị Thu', 36494564, 'thithu@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitbvt`
--

CREATE TABLE `loaitbvt` (
  `maloai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhasx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `baohanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitbvt`
--

INSERT INTO `loaitbvt` (`maloai`, `tenloai`, `nhasx`, `baohanh`) VALUES
('ml1', 'máy cấu hình cao', 'Huền anh', '12 năm'),
('ml2', 'linh kiện', 'anh hoa', '10 năm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieugiao`
--

CREATE TABLE `phieugiao` (
  `sophieugiao` int(11) NOT NULL,
  `ngaygiao` datetime NOT NULL,
  `magv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `maxuong` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieugiao`
--

INSERT INTO `phieugiao` (`sophieugiao`, `ngaygiao`, `magv`, `maxuong`) VALUES
(6, '2021-11-27 16:12:35', 'Đào Phạm', 'xưởng 3'),
(7, '2021-11-27 16:14:34', 'Đào Phạm', 'xưởng 4'),
(8, '2021-11-27 16:14:41', 'Đào Phạm', 'xưởng 4'),
(9, '2021-11-27 16:25:37', 'Đào Phạm', 'xưởng 1'),
(10, '2021-11-27 16:29:36', 'thu hiền', 'xưởng 10'),
(11, '2021-11-27 16:30:18', 'thu hiền', 'xưởng 3'),
(12, '2021-12-01 02:38:45', 'Đào Phạm', 'xưởng 1'),
(15, '2021-12-28 14:16:58', 'thu hiền', 'xưởng A'),
(18, '2021-12-29 16:14:30', '', ''),
(19, '2021-12-30 04:07:23', 'thu hiền', 'xưởng 1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhan`
--

CREATE TABLE `phieunhan` (
  `sophieunhan` int(11) NOT NULL,
  `ngaynhan` datetime NOT NULL,
  `nguoigiao` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhan`
--

INSERT INTO `phieunhan` (`sophieunhan`, `ngaynhan`, `nguoigiao`) VALUES
(10, '2021-11-23 21:24:57', 'Đào Phạm'),
(11, '2021-11-23 21:25:58', 'Đào Phạm'),
(12, '2021-11-23 21:28:42', 'Đào Phạm'),
(13, '2021-11-23 22:09:58', 'Đào Phạm'),
(14, '2021-11-24 14:23:24', 'thu hiền'),
(15, '2021-11-26 21:03:10', 'thu hiền'),
(16, '2021-11-27 21:03:49', 'thu hiền'),
(17, '2021-11-27 22:19:52', 'thu hiền'),
(18, '2021-12-01 08:36:58', 'Đào Phạm'),
(19, '2021-12-16 18:29:55', 'Đào Phạm'),
(49, '2021-12-29 22:09:26', 'Đào Phạm'),
(50, '2021-12-30 10:06:40', 'Đào Phạm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongmay`
--

CREATE TABLE `phongmay` (
  `id` int(11) NOT NULL,
  `maphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `magv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongmay`
--

INSERT INTO `phongmay` (`id`, `maphong`, `tenphong`, `magv`, `trangthai`) VALUES
(3, 'maphong01', 'A2-235', 'mavg01  ', 'hoạt đông'),
(4, 'maphong02', 'A2-234', 'mavg02 ', 'hoạt đông'),
(5, 'maphong03', 'A2-233', 'mavg03', 'hoạt đông'),
(11, 'maphong04', 'A2-234', 'mavg01', 'hoạt đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thietbivt`
--

CREATE TABLE `thietbivt` (
  `id` int(11) NOT NULL,
  `mavt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maphong` text COLLATE utf8_unicode_ci NOT NULL,
  `tenvt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(50) NOT NULL,
  `tengv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thietbivt`
--

INSERT INTO `thietbivt` (`id`, `mavt`, `maphong`, `tenvt`, `maloai`, `soluong`, `tengv`, `ngaynhap`) VALUES
(56, 'mavt1', 'maphong01 ', 'chuột', 'ml01', 5, 'thu hiền', '2021-11-24 14:23:24'),
(57, 'mavt2', 'maphong01 ', 'ram', 'ml02', 9, 'thu hiền', '2021-11-26 21:03:10'),
(60, 'mavt3', 'maphong01 ', 'chuột', 'ml02', 10, 'Đào Phạm', '2021-12-01 08:36:58'),
(61, 'mavt4', 'maphong01 ', 'bàn ghế', 'ml02', 10, 'Đào Phạm', '2021-12-16 18:29:55'),
(62, 'mavt5', 'maphong02 ', 'máy tính', 'ml01', 10, 'thu hiền', '2021-12-16 18:31:56'),
(63, 'mavt6', 'maphong03 ', 'bàn phím', 'ml02', 9, 'Đào Phạm', '2021-12-16 18:34:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuathoadon`
--

CREATE TABLE `xuathoadon` (
  `mahd` int(11) NOT NULL,
  `tenvt` text COLLATE utf8_unicode_ci NOT NULL,
  `soluongtrongkho` int(11) NOT NULL,
  `soluongxuat` int(11) NOT NULL,
  `ngayxuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `xuathoadon`
--

INSERT INTO `xuathoadon` (`mahd`, `tenvt`, `soluongtrongkho`, `soluongxuat`, `ngayxuat`) VALUES
(1, 'ban phim', 100, 12, '2021-11-12 17:14:37'),
(2, 'bàn phím', 3900, 100, '0000-00-00 00:00:00'),
(55, 'bàn phím', 321, 1, '0000-00-00 00:00:00'),
(76, 'bàn phím', 5, 1, '0000-00-00 00:00:00'),
(77, 'bàn phím', 4, 1, '0000-00-00 00:00:00'),
(78, 'bàn phím', 3, 1, '0000-00-00 00:00:00'),
(79, 'bàn phím', 5, 1, '0000-00-00 00:00:00'),
(80, 'ram', 10, 1, '0000-00-00 00:00:00'),
(81, 'bàn phím', 10, 1, '0000-00-00 00:00:00'),
(82, 'bàn phím', 4, 1, '0000-00-00 00:00:00'),
(83, 'ram', 5, 1, '0000-00-00 00:00:00'),
(84, 'ram', 4, 1, '0000-00-00 00:00:00'),
(85, 'ram', 3, 1, '0000-00-00 00:00:00'),
(86, 'bàn phím', 10, 1, '0000-00-00 00:00:00'),
(87, 'ram', 10, 1, '0000-00-00 00:00:00'),
(88, '', 0, 0, '0000-00-00 00:00:00'),
(89, 'chuột', 10, 5, '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgiao`
--
ALTER TABLE `chitietgiao`
  ADD PRIMARY KEY (`sophieugiao`);

--
-- Chỉ mục cho bảng `chitietnhan`
--
ALTER TABLE `chitietnhan`
  ADD PRIMARY KEY (`sophieunhan`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- Chỉ mục cho bảng `loaitbvt`
--
ALTER TABLE `loaitbvt`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `phieugiao`
--
ALTER TABLE `phieugiao`
  ADD PRIMARY KEY (`sophieugiao`);

--
-- Chỉ mục cho bảng `phieunhan`
--
ALTER TABLE `phieunhan`
  ADD PRIMARY KEY (`sophieunhan`);

--
-- Chỉ mục cho bảng `phongmay`
--
ALTER TABLE `phongmay`
  ADD PRIMARY KEY (`id`,`maphong`);

--
-- Chỉ mục cho bảng `thietbivt`
--
ALTER TABLE `thietbivt`
  ADD PRIMARY KEY (`id`,`mavt`);

--
-- Chỉ mục cho bảng `xuathoadon`
--
ALTER TABLE `xuathoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietgiao`
--
ALTER TABLE `chitietgiao`
  MODIFY `sophieugiao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `chitietnhan`
--
ALTER TABLE `chitietnhan`
  MODIFY `sophieunhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phieugiao`
--
ALTER TABLE `phieugiao`
  MODIFY `sophieugiao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `phieunhan`
--
ALTER TABLE `phieunhan`
  MODIFY `sophieunhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `phongmay`
--
ALTER TABLE `phongmay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `thietbivt`
--
ALTER TABLE `thietbivt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `xuathoadon`
--
ALTER TABLE `xuathoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

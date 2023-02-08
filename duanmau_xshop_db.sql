-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 08, 2023 lúc 10:50 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau_xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `ma_binhluan` int(10) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_sanpham` int(11) NOT NULL,
  `ma_nguoidung` int(11) NOT NULL,
  `duyet` tinyint(4) DEFAULT 0,
  `ngay_binhluan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`ma_binhluan`, `noi_dung`, `ma_sanpham`, `ma_nguoidung`, `duyet`, `ngay_binhluan`) VALUES
(6, 'Sản phẩm tuyệt đẹp, tuyệt vời', 1, 12, 1, '2022-12-12 15:35:14'),
(11, 'oke fine', 18, 11, 1, '2022-12-15 10:16:24'),
(12, 'anh Hài hước lắm', 17, 11, 1, '2022-12-15 10:16:40'),
(13, 'Đúng là tiền nào của nấy', 18, 11, 1, '2022-12-15 10:16:55'),
(14, 'chuột nhìn xịn đấy', 22, 11, 1, '2022-12-15 10:17:11'),
(15, 'HUhu', 5, 11, 0, '2022-12-15 15:26:33'),
(16, 'no thing special', 5, 11, 1, '2022-12-15 15:28:01'),
(18, 'Hàng đẹp nhá', 7, 18, 1, '2023-01-09 14:52:00'),
(19, 'Sản phẩm đẹp', 3, 11, 1, '2023-01-30 14:16:16'),
(20, 'Hàng đẹp nhá', 14, 18, 1, '2023-01-30 14:51:59'),
(22, '', 3, 18, 0, '2023-01-30 15:32:16'),
(0, 'HELLO everyone', 20, 12, 1, '2023-02-08 16:28:36'),
(0, 'Hàng đẹp nhá', 20, 12, 1, '2023-02-08 16:28:42'),
(0, 'Woww, Amazing', 6, 12, 1, '2023-02-08 16:30:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(4) NOT NULL,
  `idsanpham` int(4) NOT NULL,
  `iddonhang` int(4) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `dongia` double(10,0) NOT NULL DEFAULT 0,
  `tensp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `idsanpham`, `iddonhang`, `soluong`, `dongia`, `tensp`, `hinhanh`) VALUES
(8, 7, 4, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(9, 3, 5, 1, 1056000, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 'content/Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không (1).jpg'),
(10, 7, 6, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(11, 7, 7, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(12, 6, 7, 1, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/[Mới 100_ Full Box] Laptop LG Gram 2 in_yyth.jpg'),
(13, 7, 8, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(14, 6, 8, 1, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/[Mới 100_ Full Box] Laptop LG Gram 2 in_yyth.jpg'),
(15, 6, 9, 3, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/[Mới 100_ Full Box] Laptop LG Gram 2 in_yyth.jpg'),
(16, 1, 10, 4, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/3-JA-1104MB10542.jpg'),
(17, 7, 11, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(19, 3, 13, 1, 1056000, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 'content/Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không (1).jpg'),
(20, 1, 14, 2, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/3-JA-1104MB10542.jpg'),
(21, 18, 14, 6, 3132800, 'Điện thoại Samsung Galaxy A04s (4Gb/ 64Gb/ Đen)', 'content/49330_dien_thoai_samsung_galaxy_a04s_black_3.jpg'),
(22, 3, 15, 2, 1056000, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 'content/dong-ho-nu-tissot-t122-210-11-159-00-day-thep-khong-gi-30mm-mau-bac-hong-6392ef7493975-0912202215190 - 2.jpg'),
(23, 7, 16, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(24, 13, 16, 1, 19200000, 'Máy ảnh KTS Sony Alpha ILCE-7 - Black', 'content/May anh KTS Sony Alpha ILCE-7 - Black.jpg'),
(25, 8, 17, 2, 21600000, 'Laptop Lenovo ThinkBook 14s Yoga ITL 20WE007MVN ', 'content/47383_laptop_lenovo_thinkbook_14s_yoga_itl_20we0059vn_touch_pen_grey_h6.jpg'),
(26, 6, 17, 3, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/DZ-03-www.laptopvip.vn-1665224193.jpg.png'),
(27, 1, 18, 1, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 5.jpg'),
(28, 6, 18, 2, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/DZ-03-www.laptopvip.vn-1665224193.jpg.png'),
(34, 1, 21, 82, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 5.jpg'),
(8, 7, 4, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(9, 3, 5, 1, 1056000, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 'content/Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không (1).jpg'),
(10, 7, 6, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(11, 7, 7, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(12, 6, 7, 1, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/[Mới 100_ Full Box] Laptop LG Gram 2 in_yyth.jpg'),
(13, 7, 8, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(14, 6, 8, 1, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/[Mới 100_ Full Box] Laptop LG Gram 2 in_yyth.jpg'),
(15, 6, 9, 3, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/[Mới 100_ Full Box] Laptop LG Gram 2 in_yyth.jpg'),
(16, 1, 10, 4, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/3-JA-1104MB10542.jpg'),
(17, 7, 11, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(19, 3, 13, 1, 1056000, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 'content/Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không (1).jpg'),
(20, 1, 14, 2, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/3-JA-1104MB10542.jpg'),
(21, 18, 14, 6, 3132800, 'Điện thoại Samsung Galaxy A04s (4Gb/ 64Gb/ Đen)', 'content/49330_dien_thoai_samsung_galaxy_a04s_black_3.jpg'),
(22, 3, 15, 2, 1056000, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 'content/dong-ho-nu-tissot-t122-210-11-159-00-day-thep-khong-gi-30mm-mau-bac-hong-6392ef7493975-0912202215190 - 2.jpg'),
(23, 7, 16, 1, 12600000, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg'),
(24, 13, 16, 1, 19200000, 'Máy ảnh KTS Sony Alpha ILCE-7 - Black', 'content/May anh KTS Sony Alpha ILCE-7 - Black.jpg'),
(25, 8, 17, 2, 21600000, 'Laptop Lenovo ThinkBook 14s Yoga ITL 20WE007MVN ', 'content/47383_laptop_lenovo_thinkbook_14s_yoga_itl_20we0059vn_touch_pen_grey_h6.jpg'),
(26, 6, 17, 3, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/DZ-03-www.laptopvip.vn-1665224193.jpg.png'),
(27, 1, 18, 1, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 5.jpg'),
(28, 6, 18, 2, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/DZ-03-www.laptopvip.vn-1665224193.jpg.png'),
(34, 1, 21, 82, 11440002, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 5.jpg'),
(0, 13, 22, 1, 19200000, 'Máy ảnh KTS Sony Alpha ILCE-7 - Black', 'content/May anh KTS Sony Alpha ILCE-7 - Black.jpg'),
(0, 22, 23, 1, 174800, 'Chuột không dây Targus W600 - Trắng', 'content/48475_targus_w600_white_a_1.gif'),
(0, 6, 24, 1, 22310000, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 'content/DZ-03-www.laptopvip.vn-1665224193.jpg.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `ma_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`ma_danhmuc`, `ten_danhmuc`) VALUES
(9, 'Đồng hồ đeo tay'),
(10, 'Máy tính xách tay'),
(11, 'Máy ảnh'),
(12, 'Điện thoại'),
(13, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoidung`
--

CREATE TABLE `tbl_nguoidung` (
  `id` int(10) NOT NULL,
  `tai_khoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `kich_hoat` tinyint(1) NOT NULL DEFAULT 1,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vai_tro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`id`, `tai_khoan`, `mat_khau`, `ho_ten`, `diachi`, `sodienthoai`, `kich_hoat`, `hinh_anh`, `email`, `vai_tro`) VALUES
(11, 'trannhatsang', '12345', 'Trần Nhât Sang', '19/7c', '0937988510', 1, 'https://images.unsplash.com/photo-1639149888905-fb39731f2e6c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80', 'nhatsang0102@gmail.com', 3),
(12, 'trannhatsang2', '123', 'Trần nhật Sang 2', '19/7c khu phố Đông Tác, phường Tân Đông Hiệp, thành phố Dĩ An, tỉnh Bình Dương', '0937988511', 1, 'https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80', 'nhatsang0102@gmail.com', 3),
(16, 'trannhatsang1234', '123', 'Trần nhật Sang', '19/7c khu phố Đông Tác, phường Tân Đông Hiệp, thành phố Dĩ An, tỉnh Bình Dương', '0937988510', 1, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80', 'nhatsang0101@gmail.com', 3),
(17, 'trannhatsang134', '123', 'Trần nhật Sang', '19/7c khu phố Đông Tác, phường Tân Đông Hiệp, thành phố Dĩ An, tỉnh Bình Dương', '0937988510', 1, 'https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80', 'nhatsang0101@gmail.com', 2),
(18, 'admin', '123', 'Tran Nhat Sang', '19/7c', '0937988510', 1, 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80', 'nhatsang0101@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(4) NOT NULL,
  `madonhang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tongdonhang` double(10,0) NOT NULL,
  `pttt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(4) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dienThoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timeorder` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(2) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madonhang`, `tongdonhang`, `pttt`, `iduser`, `name`, `dienThoai`, `email`, `address`, `ghichu`, `timeorder`, `trangthai`) VALUES
(11, 'YOURORDER9776835', 12600000, 'Thanh toán khi nhận hàng', 11, 'Trần Nhật Sang', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', '23423', '12/15/2022 10:03:20 am', 2),
(14, 'YOURORDER5670552', 41676804, 'Thanh toán khi nhận hàng', 11, 'Trần Nhật Sang', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', 'fàdứd', '01/09/2023 01:43:51 pm', 4),
(15, 'YOURORDER821914', 2112000, 'Thanh toán khi nhận hàng', 11, 'Trần Nhật Sang', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', '', '01/28/2023 02:46:28 pm', 4),
(16, 'YOURORDER862358', 31800000, 'Thanh toán khi nhận hàng', 12, 'Trần Nhật Sang 2', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', '', '01/30/2023 08:02:10 am', 3),
(17, 'YOURORDER5230564', 110130000, 'Thanh toán khi nhận hàng', 11, 'Trần Nhật Sang', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', '', '02/01/2023 09:34:14 am', 5),
(21, 'YOURORDER1588613', 938080144, 'Thanh toán khi nhận hàng', 11, 'Trần Nhật Sang', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', '', '02/08/2023 10:36:53 am', 2),
(22, 'YOURORDER7457491', 19200000, 'Thanh toán khi nhận hàng', 11, 'Trần Nhật Sang', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', 'No thank you', '02/08/2023 04:27:26 pm', 6),
(23, 'YOURORDER6139584', 174800, 'Thanh toán khi nhận hàng', 12, 'Trần Nhật Sang 2', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', 'Oke goood', '02/08/2023 04:28:17 pm', 1),
(24, 'YOURORDER2492982', 22310000, 'Thanh toán khi nhận hàng', 12, 'Trần Nhật Sang 2', '0937988510', 'nhatsang0101@gmail.com', 'nhatsang', 'Goood oke', '02/08/2023 04:31:17 pm', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `masanpham` int(11) NOT NULL,
  `tensp` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `ton_kho` int(3) NOT NULL DEFAULT 10,
  `giam_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `dac_biet` tinyint(1) NOT NULL DEFAULT 0,
  `so_luot_xem` int(11) NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_danhmuc` int(11) NOT NULL,
  `hinhanh1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`masanpham`, `tensp`, `don_gia`, `ton_kho`, `giam_gia`, `dac_biet`, `so_luot_xem`, `ngay_nhap`, `mo_ta`, `ma_danhmuc`, `hinhanh1`, `hinhanh2`, `hinhanh3`, `hinhanh4`) VALUES
(1, 'Mua Đồng Hồ Nam Julius JA-1104MB Màu Vàng Updated', 13000002.00, 0, 12.00, 0, 47, '2023-01-28 11:02:05', 'No thing special', 9, 'content/dong ho nam Julius JA-577M JU1129 mau vang - 5.jpg', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 4.jpg', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 3.jpg', 'content/dong ho nam Julius JA-577M JU1129 mau vang - 2.jpg'),
(3, 'Đồng Hồ Nữ Tissot T122.210.11.159.00 Dây Thép Không Gỉ 30mm ', 1200000.00, 9, 12.00, 0, 63, '2023-01-28 10:58:50', 'Đồng hồ Tissot nữ giá dây thép không gỉ', 9, 'content/dong-ho-nu-tissot-t122-210-11-159-00-day-thep-khong-gi-30mm-mau-bac-hong-6392ef7493975-0912202215190 - 2.jpg', 'content/dong-ho-nu-tissot-t122-210-11-159-00-day-thep-khong-gi-30mm-mau-bac-hong-6392ef7493975-0912202215190.jpg', 'content/Dong ho nu  Tissot T122.210.11.159.00 day thep khong gi.jpg', 'content/'),
(4, 'Đồng Hồ Nam Orient Sun Moon SAK00008 Màu Đen Bạc', 1320000.00, 20, 20.00, 0, 22, '2023-01-28 14:00:31', 'là chiếc đồng hồ mới ra mắt của hãng Orient nổi tiếng.', 9, 'content/dong ho nam orient sun moon  SAK00008 mau den - 4.jpg', 'content/dong ho nam orient sun moon  SAK00008 mau den - 3.jpg', 'content/dong ho nam orient sun moon  SAK00008 mau den - 2.jpg', 'content/dong ho nam orient sun moon  SAK00008 mau den.jpg'),
(5, 'Đồng Hồ Citizen Corso Eco-Drive Blue Dial Two-Tone Ladies Wa', 3800000.00, 12, 0.00, 0, 10, '2023-01-28 14:03:49', 'Đồng hồ đẹp chất lượng tốt, giá cả phải chăng', 9, 'content/Dong ho citizen Corso Eco - drvie blue dial two tone -4.jpg', 'content/Dong ho citizen Corso Eco - drvie blue dial two tone -3.jpg', 'content/Dong ho citizen Corso Eco - drvie blue dial two tone -2.jpg', 'content/Dong ho citizen Corso Eco - drvie blue dial two tone .jpg'),
(6, 'Laptop LG Gram 2 in 1 16T90Q-K.AAC7U1 - Intel Core i7 - 1260', 23000000.00, 12, 3.00, 0, 27, '2023-01-28 14:06:14', 'Laptop LG Gram là một trong những dòng laptop/ máy tính xách tay nổi bật nhất của thương hiệu LG. Với thiết kế cực mỏng nhẹ, cao cấp, màn hình chất lượng tuyệt đỉnh và cấu hình lại thuộc “top khủng” thì những sản phẩm nhà LG xứng đáng là những chiếc laptop dẫn đầu thời đại. Vừa mới đây, LG đã cho ra mắt phiên bản laptop mỏng nhẹ LG Gram 2 in 1 và nhận được rất nhiều sự chú ý của những người yêu thích công nghệ. ', 10, 'content/DZ-03-www.laptopvip.vn-1665224193.jpg.png', 'content/DZ-07-www.laptopvip.vn-1665224193.jpg.png', 'content/DZ-06-www.laptopvip.vn-1665224193.jpg.png', 'content/DZ-04-www.laptopvip.vn-1665224193.jpg.png'),
(7, 'Laptop Acer Aspire A315 58 53S6 NX.AM0SV.005', 14000000.00, 0, 10.00, 1, 47, '2022-12-11 00:00:00', 'Mang trên mình thiết kế sang trọng, màu vàng Gold trù phú. Máy tính xách tay giá rẻ Acer Aspire A315 không chỉ nâng tầm đẳng cấp người dùng bởi diện mạo và hệ thống linh kiện quý giá bên trong mà còn đem đến tài lộc vì vàng là màu của vàng bạc, châu báu. \r\n\r\nLaptop Acer có lớp vỏ kim loại cao cấp bao bọc các góc cạnh được bo tròn tỉ mỉ, trên mặt lưng còn thêm điểm nhấn thương hiệu logo Acer nổi bật, đẹp mắt.\r\nĐặc biệt để quá trình sử dụng thêm phần thuận lợi, lớp bản lề của Acer Aspire A315 58 có khả năng mở rộng 180 độ cho bạn yên tâm thể hiện ý tưởng của mình.', 10, 'content/47584_laptop_acer_aspire_a315_58_gold_h6.jpg', 'content/75_47584_laptop_acer_aspire_a315_58_gold_h1.jpg', 'content/47584_laptop_acer_aspire_a315_58_gold_h4.jpg', 'content/47584_laptop_acer_aspire_a315_58_gold_h5.jpg'),
(8, 'Laptop Lenovo ThinkBook 14s Yoga ITL 20WE007MVN ', 24000000.00, 0, 10.00, 0, 13, '2022-12-11 00:00:00', 'Thông số kỹ thuậtĐặc điểm nổi bậtVideoSản phẩm giá tương đươngBình luận người dùngĐánh giá sản phẩm\r\nĐẶC ĐIỂM NỔI BẬT\r\nLaptop Lenovo ThinkBook 14s Yoga ITL 20WE007MVN (Core i7 1165G7 / RAM 16Gb/ 512Gb SSD/ 14.0\'\'FHD Touch/ Pen/ Xoay/ Intel® Iris® Xe Graphics/ Win11/ Grey/ vỏ kim loại/ 2Y) \r\nThiết kế bản lề xoay gập linh hoạt cùng hiệu năng mạnh mẽ, Lenovo ThinkBook 14s Yoga ITL 20WE007MVN thuộc dòng máy tính mỏng nhẹ, phù hợp cho người dùng là sinh viên, nhân viên văn phòng, những người trẻ năng động cần di chuyển thường xuyên.', 10, 'content/47383_laptop_lenovo_thinkbook_14s_yoga_itl_20we0059vn_touch_pen_grey_h6.jpg', 'content/75_47383_laptop_lenovo_thinkbook_14s_yoga_itl_20we0059vn_touch_pen_grey_h_2.jpg', 'content/75_47383_laptop_lenovo_thinkbook_14s_yoga_itl_20we007mvn_touch_pen_grey_h8.jpg', 'content/75_47383_laptop_lenovo_thinkbook_14s_yoga_itl_20we007mvn_touch_pen_grey_h8.jpg'),
(9, 'Laptop Lenovo Thinkpad X1 NANO Gen 1 20UN00B6VN', 36000000.00, 30, 0.00, 0, 4, '2022-12-11 00:00:00', 'Lenovo Thinkpad X1 NANO Gen 1 20UN00B6VN chiếc laptop cao cấp phục vụ mọi yêu cầu của bạn cùng dịch vụ chăm sóc sau mua 100 điểm đến từ Lenovo Premier Support.', 10, 'content/46443_thinkpad_x1_nano_gen_1_ha6.jpg', 'content/75_46443_thinkpad_x1_nano_gen_1_ha1.jpg', 'content/75_46443_thinkpad_x1_nano_gen_1_ha3.jpg', 'content/75_46443_thinkpad_x1_nano_gen_1_ha4.jpg'),
(10, 'Laptop HP ProBook 450 G9 6M0Z5PA', 20000000.00, 23, 8.00, 0, 4, '2023-01-28 14:07:51', 'Được thiết kế với một vẻ ngoài sang trọng và mỏng nhẹ, laptop HP ProBook 450 G9 6M0Z5PA là thiết bị hỗ trợ hoàn hảo các tác vụ công việc hàng ngày của bạn, cùng bạn đi tới bất cứ nơi đâu mà chẳng lo cồng kềnh hay khó khăn trong quá trình vận chuyển. Hãy cùng Phúc Anh tìm hiểu thêm các thông tin chi tiết về chiếc laptop mỏng nhẹ đến từ ông lớn HP này bạn nhé!', 10, 'content/43878_laptop_hp_probook_450_g9_6m0z5pa___2_.jpg', 'content/43878_laptop_hp_probook_450_g9_6m0z5pa___5_.jpg', 'content/43878_laptop_hp_probook_450_g9_6m0z5pa___4_.jpg', 'content/43878_laptop_hp_probook_450_g9_6m0z5pa___1_.jpg'),
(11, 'Laptop Lenovo Thinkpad X1 Yoga G6 20XY00E0VN', 45000000.00, 25, 4.00, 0, 1, '2023-01-28 14:26:07', 'Laptop Lenovo Thinkpad X1 Yoga G6 20XY00E0VN giá tốt tại cửa hàng', 10, 'content/41669_laptop_lenovo_thinkpad_x1_yoga_gen_6_20xy00e0vn__6_.jpg', 'content/41669_laptop_lenovo_thinkpad_x1_yoga_gen_6_20xy00e0vn__7_.jpg', 'content/41669_laptop_lenovo_thinkpad_x1_yoga_gen_6_20xy00e0vn__8_.jpg', 'content/41669_laptop_lenovo_thinkpad_x1_yoga_gen_6_20xy00e0vn__1_.jpg'),
(12, 'Máy ảnh KTS Sony ZV-E10L (kèm ống kính zoom xa 16-50mm)', 1920000.00, 12, 10.00, 0, 0, '2022-12-11 00:00:00', 'Sony ZV-E10L là một sản phẩm chuyên dụng dành cho các vlogger, người làm nội dung cần một sản phẩm đa năng. Chiếc máy ảnh này là sự kết hợp hoản hảo của cảm biến lớn với sự linh hoạt của máy ảnh không gương lật.\r\n\r\nSony ZV-E10L được trang bị Màn hình LCD 3.0 inch với 921.600 điểm ảnh với thiết bị đa góc lật, thích hợp để bạn làm việc với những góc nhìn khác nhau. Với thiết kế này thì bạn có thể quay phim hoặc chụp ảnh selfie một cách tự nhiên. Thân máy trang bị các nút điều khiển trực quan kết hợp với cần zoom cho phép người dùng thao tác nhanh chóng, dễ dàng.', 10, 'content/48574_kts_sony_zv_e10l_a2.gif', 'content/75_48574_kts_sony_zv_e10l_a1.gif', 'content/75_48574_kts_sony_zv_e10l_a3.gif', 'content/75_48574_kts_sony_zv_e10l_a4.gif'),
(13, 'Máy ảnh KTS Sony Alpha ILCE-7 - Black', 20000000.00, 10, 4.00, 0, 10, '2023-01-28 14:35:44', 'Máy ảnh KTS Sony Alpha ILCE-7 - Black giá tốt tại cửa hàng', 11, 'content/May anh KTS Sony Alpha ILCE-7 - Black.jpg', 'content/May anh KTS Sony Alpha ILCE-7 - Black - 3.jpg', 'content/May anh KTS Sony Alpha ILCE-7 - Black - 2.jpg', 'content/May anh KTS Sony Alpha ILCE-7 - Black - 1.jpg'),
(14, 'Máy ảnh KTS Sony CyberShot DSC-H300 - Black', 6000000.00, 8, 21.00, 1, 7, '2022-12-11 00:00:00', '', 11, 'content/26799_ma__y_a__nh_kts_sony_cybershot_dsc_rx100m4___black__01.png', 'content/26799_ma__y_a__nh_kts_sony_cybershot_dsc_rx100m4___black__02.png', 'content/26799_MynhsonyRX100M4-2.jpg', 'content/26799_MynhsonyRX100M4-5.jpg'),
(15, 'Máy ảnh KTS Sony CyberShot DSC-W810 - Bạc', 3200000.00, 32, 4.00, 0, 21, '2023-01-28 14:31:09', 'Máy ảnh KTS Sony CyberShot DSC-W810 - Bạc giá tốt tại cửa hàng', 11, 'content/sony-cybershot-w810-bac.jpg', 'content/May anh Sony Cybershot DSC-W810 - bac.jpg', 'content/May anh Sony Cybershot DSC-W810 - bac - 1.jpg', 'content/May anh Sony Cybershot DSC-W810 - bac - 2.jpg'),
(16, 'Điện thoại DĐ Samsung Galaxy A03 (3Gb/32GB) - Đen', 279000.00, 101, 22.00, 0, 10, '2023-01-28 14:43:44', 'Điện thoại DĐ Samsung Galaxy A03 (3Gb/32GB) - Đen giá cực ưu đãi', 12, 'content/46305_samsung_galaxy_a03_black_ha3.jpg', 'content/galaxya03bvh2.jpg', 'content/46305_samsung_galaxy_a03_black_ha1.jpg', 'content/75_46305_samsung_galaxy_a03_black_ha2.jpg'),
(17, 'Xiaomi Redmi 9A 32Gb (Gray)- 6.5Inch/ 32Gb/ 2 Sim', 2300000.00, 0, 12.00, 0, 7, '2023-01-28 14:42:09', '', 12, 'content/Xiaomi Redmi 9A 32Gb (Gray)- 6.5Inch  32Gb _.jpg', 'content/Xiaomi Redmi 9A 32Gb (Gray)- 6.5Inch  32Gb _ - 2.jpg', 'content/Xiaomi Redmi 9A 32Gb (Gray)- 6.5Inch  32Gb _3.jpg', 'content/Xiaomi Redmi 9A 32Gb (Gray)- 6.5Inch  32Gb _4.jpg'),
(18, 'Điện thoại Samsung Galaxy A04s (4Gb/ 64Gb/ Đen)', 3560000.00, 35, 12.00, 0, 8, '2022-12-11 00:00:00', '', 12, 'content/49330_dien_thoai_samsung_galaxy_a04s_black_3.jpg', 'content/Điện thoại Samsung Galaxy A04s (4Gb  64Gb _y.jpg', 'content/75_49330_dien_thoai_samsung_galaxy_a04s_black_2.jpg', 'content/dien-thoai-samsung-galaxy-a04s-2.png'),
(19, 'Apple iPhone 11 64GB (VN/A) (White)- 6.1Inch/ 64Gb', 11200000.00, 40, 13.00, 0, 0, '2023-01-28 14:38:39', 'Apple iPhone 11 64GB (VN/A) (White)- 6.1Inch/ 64Gb giá cả tốt tại của hàng', 12, 'content/apple-iphone-11-64gb-6.1.png', 'content/apple-iphone-11-64gb-6.1 (1).png', 'content/ip11_white.png', 'content/51kGDXeFZKL._SL1024_.png'),
(20, 'Bộ nhớ trong MTXT Kingston DDR4 8Gb 3200', 890000.00, 0, 0.00, 0, 4, '2023-01-29 14:55:42', 'Bộ nhớ trong MTXT Kingston DDR4 8Gb 3200 tại cửa hàng', 13, 'content/38937_kingston_ddr4_8gb_3200_ha2.jpg', 'content/75_38937_kingston_ddr4_8gb_3200_ha2.jpg', 'content/Bộ nhớ trong MTXT Kingston DDR4 8Gb 3200.jpg', 'content/Bộ nhớ trong MTXT Kingston DDR4 4Gb 3200.jpg'),
(21, 'Ba lô Lenovo Lenovo Business Casual 17 Backpack_4X40X54260 C', 990000.00, 22, 13.00, 0, 5, '2022-12-11 00:00:00', '', 13, 'content/44617_4x40x54260_ha1.jpg', 'content/75_44617_4x40x54260_ha3.jpg', 'content/75_44617_4x40x54260_ha4.jpg', 'content/75_44617_4x40x54260_ha5.jpg'),
(22, 'Chuột không dây Targus W600 - Trắng', 190000.00, 22, 8.00, 1, 5, '2022-12-11 00:00:00', '', 13, 'content/48475_targus_w600_white_a_1.gif', 'content/75_48475_targus_w600_white_a_2.gif', 'content/75_48475_targus_w600_white_a_3.gif', 'content/48475_targus_w600_white_a_4.gif'),
(23, 'Pin dành cho laptop Lenovo G480', 780000.00, 0, 12.00, 0, 2, '2023-01-29 14:53:58', 'Pin dành cho laptop Lenovo G480 giá tốt tại cửa hàng', 13, 'content/19851_lenovo_g480__1_.jpg', 'content/75_19851_lenovo_g480__2_.jpg', 'content/Pin dành cho laptop Lenovo G480.jpg', 'content/Pin dành cho laptop Lenovo G480 (1).jpg'),
(24, 'Laptop HP Pavilion 15-eg2063TU 6K791PA', 14190000.00, 105, 10.00, 0, 0, '2022-12-16 15:01:19', '- Bộ VXL: Core i3 1215U 3.0Ghz-10Mb\r\n- Cạc đồ họa: Intel Graphics UHD\r\n- Bộ nhớ: 8Gb (2x4Gb)\r\n- Ổ cứng/ Ổ đĩa quang: 256GB PCIe® NVMe™ M.2 SSD\r\n- Màn hình: 15.6Inch Full HD\r\n- Hệ điều hành: Windows 11 Home\r\n- Màu sắc/ Chất liệu: Silver', 10, 'content/48042_laptop_hp_pavilion_15_eg2063tu__silver___a5.jpg', 'content/75_48042_laptop_hp_pavilion_15_eg2063tu__silver___a3.jpg', 'content/75_48042_laptop_hp_pavilion_15_eg2063tu__silver___a4.jpg', 'content/75_48042_laptop_hp_pavilion_15_eg2063tu__silver___a1.jpg'),
(25, 'Đồng Hồ Nữ Guess W0823L8 Glitter Sky Blue & Silver Ladies Wa', 24000000.00, 0, 3.00, 0, 1, '2023-01-28 10:17:34', 'Đồng Hồ Nữ Guess W0823L8 Glitter Sky Blue là chiếc đồng hồ đến từ thương hiệu Guess nổi tiếng.', 9, 'content/Đồng Hồ Nữ Guess W0823L8 Glitter Sky Blue &_ (1).jpg', 'content/Đồng Hồ Nữ Guess W0823L8 Glitter Sky Blue &_.jpg', 'content/dong-ho-nu-guess-w0823l8-glitter-sky-blue-silver-ladies-watch-mau-trang-xanh-63ad64dd5a23e-291220221.jpg', 'content/'),
(26, 'MÁY ẢNH SONY CYBERSHOT DSC-RX10M3/ RX10 III', 37800000.00, 300, 2.00, 0, 0, '2023-01-28 14:32:53', 'MÁY ẢNH SONY CYBERSHOT DSC-RX10M3/ RX10 III chất lượng cao tại cửa hàng', 11, 'content/sony-dscrx10m3.jpg', 'content/sony-dscrx10m32.jpg', 'content/sony-dscrx10m31.jpg', 'content/sony-dscrx10m3 (1).jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`ma_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_nguoidung` (`iduser`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `fk_sanpham_danhmuc` (`ma_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `ma_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `fk_order_nguoidung` FOREIGN KEY (`iduser`) REFERENCES `tbl_nguoidung` (`id`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`ma_danhmuc`) REFERENCES `tbl_danhmuc` (`ma_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2024 lúc 07:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Adidas'),
(66, 'Bitis'),
(2, 'Nike'),
(44, 'Puma');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`) VALUES
(36, 'Dép'),
(1, 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `date`, `rating`, `user_id`, `product_id`) VALUES
(9, 'eqweqw', '28-03-2024', 0, 18, 42),
(10, 'qưeqweqe', '28-03-2024', 0, 18, 42),
(11, 'đâs', '28-03-2024', 0, 18, 42),
(16, 'sadasd', '02-04-2024', 5, 18, 47),
(17, 'đâsd', '02-04-2024', 5, 18, 52),
(25, '111', '03-04-2024', 5, 19, 63),
(26, '1111', '03-04-2024', 5, 19, 63),
(27, '1111', '03-04-2024', 4, 19, 63),
(28, '1111', '03-04-2024', 3, 19, 63),
(29, 'wqeqwe', '04-04-2024', 4, 18, 45),
(30, 'qq', '04-04-2024', 1, 18, 45),
(31, 'a', '04-04-2024', 1, 18, 45),
(32, 'ưqeqwe', '08-04-2024', 3, 19, 42),
(33, 'qưeqwe', '08-04-2024', 5, 19, 42),
(36, 'qưeqw', '08-04-2024', 2, 19, 47),
(37, 'qưeqwe', '08-04-2024', 5, 19, 47),
(38, 'ewqwe', '08-04-2024', 4, 19, 47),
(39, '1111', '08-04-2024', 5, 19, 61),
(40, '2111', '08-04-2024', 1, 19, 61),
(41, '5', '08-04-2024', 2, 19, 61),
(42, '5', '08-04-2024', 3, 19, 61),
(43, '55', '08-04-2024', 5, 19, 61),
(44, '1', '08-04-2024', 2, 19, 49),
(45, '1', '08-04-2024', 3, 19, 49),
(46, '11', '08-04-2024', 4, 19, 49),
(47, '1111', '08-04-2024', 5, 19, 49),
(48, '1', '08-04-2024', 2, 19, 50),
(49, 'aaasdasdasdasdddddddddddddddddddd', '08-04-2024', 1, 19, 50),
(50, '111111', '08-04-2024', 4, 19, 50),
(51, '111111', '08-04-2024', 5, 19, 50),
(54, 'qq', '08-04-2024', 5, 19, 46),
(55, 'ưqeqw', '08-04-2024', 5, 19, 46),
(56, 'qưeqweqw', '08-04-2024', 4, 19, 46),
(57, 'đâs', '08-04-2024', 5, 19, 46),
(58, 'ahihh', '08-04-2024', 5, 19, 46),
(59, 'ádsadasdádasdasdasd', '08-04-2024', 5, 19, 46),
(68, 'đẹp quá xá', '09-04-2024', 3, 19, 48),
(69, 'Quá tuyệt', '09-04-2024', 5, 19, 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `ma_donhang` varchar(50) NOT NULL,
  `tong_donhang` int(11) NOT NULL,
  `phuongthuc_thanhtoan` tinyint(1) NOT NULL DEFAULT 0,
  `order_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `ma_donhang`, `tong_donhang`, `phuongthuc_thanhtoan`, `order_name`, `phone`, `address`, `id_status`, `id_user`, `create_at`) VALUES
(292, 'SHN137541', 705600, 2, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(293, 'SHN511490', 5879997, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(294, 'SHN121324', 6174000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(295, 'SHN964223', 29282400, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(296, 'SHN826560', 123826950, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(297, 'SHN166753', 34024200, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(298, 'SHN152177', 34024200, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-02'),
(299, 'SHN342724', 29908200, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 2, 19, '2024-04-09'),
(300, 'SHN646440', 23734200, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-01'),
(301, 'SHN442183', 20374200, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(302, 'SHN301465', 10663080, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(303, 'SHN646350', 41713080, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-03-09'),
(304, 'SHN163329', 54295440, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(305, 'SHN517000', 54295440, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-03-23'),
(306, 'SHN219343', 37495440, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(307, 'SHN962800', 17335440, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-03-16'),
(317, 'SHN650292', 5320199, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(318, 'SHN972159', 2841210, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(319, 'SHN945636', 768000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(326, 'SHN259404', 692010, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(327, 'SHN475951', 2700000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 2, 19, '2024-04-09'),
(328, 'SHN305325', 1970099, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(329, 'SHN661431', 958080, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 3, 19, '2024-04-09'),
(330, 'SHN792856', 768000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-02'),
(336, 'SHN263899', 3136000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-01'),
(338, 'SHN670158', 2475000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 2, 19, '2024-03-07'),
(339, 'SHN684657', 705600, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-02-06'),
(340, 'SHN429339', 12090960, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 2, 19, '2024-03-05'),
(341, 'SHN751984', 6909999, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(343, 'SHN919137', 768000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(344, 'SHN295143', 990000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-09'),
(345, 'SHN219168', 7408800, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 2, 19, '2024-04-09'),
(346, 'SHN153150', 14111997, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 2, 19, '2024-04-09'),
(347, 'SHN478356', 10506000, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 3, 18, '2024-04-09'),
(348, 'SHN388104', 2475000, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-09'),
(349, 'SHN321431', 2058000, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-10'),
(350, 'SHN978248', 20502192, 1, 'Đặng Văn Sơn', '0339530282', 'Thái Bình', 1, 21, '2024-04-11'),
(351, 'SHN404225', 20502192, 1, 'Đặng Văn Sơn', '0339530282', 'Thái Bình', 1, 21, '2024-04-11'),
(352, 'SHN304894', 20502192, 1, 'Đặng Văn Sơn', '0339530282', 'Thái Bình', 1, 21, '2024-04-11'),
(353, 'SHN792341', 20502192, 1, 'Đặng Văn Sơn', '0339530282', 'Thái Bình', 1, 21, '2024-04-11'),
(354, 'SHN933200', 20502192, 1, 'Đặng Văn Sơn', '0339530282', 'Thái Bình', 1, 21, '2024-04-11'),
(355, 'SHN833838', 20502192, 1, 'Đặng Văn Sơn', '0339530282', 'Thái Bình', 1, 21, '2024-04-11'),
(356, 'SHN456644', 1852200, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-11'),
(357, 'SHN590091', 2475000, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '2024-04-11'),
(358, 'SHN700827', 2699999, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(359, 'SHN343458', 44988630, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(360, 'SHN597206', 22393995, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(361, 'SHN882440', 24353994, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(362, 'SHN256610', 24353994, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(363, 'SHN959915', 2826000, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(364, 'SHN515378', 7635600, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(365, 'SHN994225', 19161000, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(366, 'SHN631690', 89000, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12'),
(367, 'SHN614170', 8900, 1, 'Đặng Sơn TB', '0987654321', 'thái bình', 1, 18, '2024-04-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `dongia` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `ten_sanpham` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_order`, `id_product`, `soluong`, `dongia`, `hinhanh`, `ten_sanpham`) VALUES
(134, 292, 48, 1, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(135, 293, 42, 3, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(136, 294, 49, 3, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(137, 295, 50, 12, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(138, 295, 48, 10, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(139, 296, 45, 3, 989010, 'giày 3.png', 'Giày Nike AF1'),
(140, 296, 47, 124, 958080, 'dép.png', 'Dép Jordan hixu'),
(141, 296, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(142, 297, 50, 11, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(143, 298, 50, 11, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(144, 299, 50, 11, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(145, 300, 50, 11, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(146, 301, 50, 11, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(147, 302, 45, 8, 989010, 'giày 3.png', 'Giày Nike AF1'),
(148, 302, 54, 1, 693000, 'Dep_DJi_Boi_adilette_dép.avif', 'Dép DJi_Boi'),
(149, 302, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(150, 303, 50, 11, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(151, 303, 58, 4, 2700000, 'RS-X-Suede-Multi-Sneakers.avif', 'Giày Puma Suede Multi'),
(152, 303, 47, 11, 958080, 'dép.png', 'Dép Jordan hixu'),
(153, 304, 48, 4, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(154, 304, 47, 13, 958080, 'dép.png', 'Dép Jordan hixu'),
(155, 304, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(156, 305, 48, 4, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(157, 305, 47, 13, 958080, 'dép.png', 'Dép Jordan hixu'),
(158, 305, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(159, 306, 48, 4, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(160, 306, 47, 13, 958080, 'dép.png', 'Dép Jordan hixu'),
(161, 306, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(162, 307, 48, 4, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(163, 307, 47, 13, 958080, 'dép.png', 'Dép Jordan hixu'),
(164, 307, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(165, 317, 43, 1, 2699999, 'air-jordan-legacy-312-low-older-shoes-giày.png', 'Giày nike air jordan legacy'),
(166, 317, 46, 1, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(167, 317, 50, 1, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(168, 318, 45, 1, 989010, 'giày 3.png', 'Giày Nike AF1'),
(169, 318, 50, 1, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(170, 319, 46, 1, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(171, 326, 59, 1, 692010, 'jordan-super-dép.png', 'Dép supper'),
(172, 327, 58, 1, 2700000, 'RS-X-Suede-Multi-Sneakers.avif', 'Giày Puma Suede Multi'),
(173, 328, 57, 1, 1970099, 'Roma-Classics-giayf.avif', 'Giày Puma roma classics'),
(174, 329, 47, 1, 958080, 'dép.png', 'Dép Jordan hixu'),
(175, 330, 46, 1, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(176, 333, 60, 1, 495000, 'RS-Sandal.avif', 'Dép Puma Sandal'),
(177, 336, 51, 1, 3136000, 'Giay_Superstar_Slip-On_trang_IE0399_01_giày.avif', 'Giày Supper_star'),
(178, 338, 65, 1, 2475000, 'ccd5df2095a25b3e72dc2308a6331c46.jpg', 'Dép Biti\'s Sandal White'),
(179, 339, 48, 1, 705600, 'jordan-hex-mule-shoes-dép.png', 'Dép Jordan hex mule'),
(180, 340, 55, 2, 297000, 'Dep_adilette_22_Mau_xanh_da_troi_dép.avif', 'Dép Adidas Adiletee'),
(181, 340, 47, 12, 958080, 'dép.png', 'Dép Jordan hixu'),
(182, 341, 42, 1, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(183, 341, 65, 2, 2475000, 'ccd5df2095a25b3e72dc2308a6331c46.jpg', 'Dép Biti\'s Sandal White'),
(184, 343, 46, 1, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(185, 344, 44, 1, 990000, 'giày 2.png', 'Giày Nike af1_mix'),
(186, 345, 50, 4, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(187, 346, 42, 3, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(188, 346, 49, 4, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(189, 347, 46, 11, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(190, 347, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(191, 348, 65, 1, 2475000, 'ccd5df2095a25b3e72dc2308a6331c46.jpg', 'Dép Biti\'s Sandal White'),
(192, 349, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(193, 350, 44, 3, 990000, 'giày 2.png', 'Giày Nike af1_mix'),
(194, 350, 42, 8, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(195, 350, 50, 1, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(196, 356, 50, 1, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(197, 357, 65, 1, 2475000, 'ccd5df2095a25b3e72dc2308a6331c46.jpg', 'Dép Biti\'s Sandal White'),
(198, 358, 43, 1, 2699999, 'air-jordan-legacy-312-low-older-shoes-giày.png', 'Giày nike air jordan legacy'),
(199, 359, 47, 8, 958080, 'dép.png', 'Dép Jordan hixu'),
(200, 359, 49, 6, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(201, 359, 46, 7, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(202, 359, 42, 10, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(203, 360, 46, 3, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(204, 360, 42, 5, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(205, 360, 49, 5, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(206, 361, 46, 3, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(207, 361, 42, 6, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(208, 361, 49, 5, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(209, 362, 46, 3, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(210, 362, 42, 6, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(211, 362, 49, 5, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(212, 363, 46, 1, 768000, 'jordan-sophia-slides-dép.jpg', 'Dép Jordan sophia '),
(213, 363, 49, 1, 2058000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Giày Samba OG'),
(214, 364, 50, 3, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(215, 364, 54, 3, 693000, 'Dep_DJi_Boi_adilette_dép.avif', 'Dép DJi_Boi'),
(216, 365, 50, 5, 1852200, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Giày Stan Smith'),
(217, 365, 44, 10, 990000, 'giày 2.png', 'Giày Nike af1_mix'),
(218, 366, 66, 10, 8900, 'iPad-Gen-10-sliver-thumb-600x600.jpg', 'Dép lào'),
(219, 367, 43, 0, 2699999, 'air-jordan-legacy-312-low-older-shoes-giày.png', 'Giày nike air jordan legacy'),
(220, 367, 66, 1, 8900, 'iPad-Gen-10-sliver-thumb-600x600.jpg', 'Dép lào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sale` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `view` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `image`, `description`, `sale`, `product_quantity`, `create_at`, `view`, `cate_id`, `brand_id`) VALUES
(42, 'Giày nike air jordan_1', 1999999, 'air-jordan-1-NIke.jpg', ' Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, 4, '2024-03-29', 2, 1, 2),
(43, 'Giày nike air jordan legacy', 2999999, 'air-jordan-legacy-312-low-older-shoes-giày.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 10, 0, '2024-03-29', 12345, 1, 2),
(44, 'Giày Nike af1_mix', 1000000, 'giày 2.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, 0, '2024-03-29', 12345, 1, 2),
(45, 'Giày Nike AF1', 999000, 'giày 3.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, 9, '2024-03-29', 12345, 1, 2),
(46, 'Dép Jordan sophia ', 800000, 'jordan-sophia-slides-dép.jpg', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 4, 6, '2024-03-29', 1234, 36, 2),
(47, 'Dép Jordan hixu', 998000, 'dép.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 4, 8, '2024-03-29', 1234, 36, 2),
(48, 'Dép Jordan hex mule', 720000, 'jordan-hex-mule-shoes-dép.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, 7, '2024-03-29', 1234, 36, 2),
(49, 'Giày Samba OG', 2100000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, 1, '2024-03-29', 1234, 1, 1),
(50, 'Giày Stan Smith', 1890000, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, 0, '2024-03-29', 1234, 1, 1),
(51, 'Giày Supper_star', 3200000, 'Giay_Superstar_Slip-On_trang_IE0399_01_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, 7, '2024-03-29', 1234, 1, 1),
(52, 'Gioày Forum_Mid', 1500000, 'Giay_Forum_Mid_trang_IG3754_01_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, 0, '2024-03-29', 1234, 1, 1),
(53, 'Dép  hex mule', 599000, 'Dep_Xo_Ngon_adilette_Comfort_trang_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004\r\n', 1, 7, '2024-03-29', 1234, 36, 1),
(54, 'Dép DJi_Boi', 700000, 'Dep_DJi_Boi_adilette_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, 5, '2024-03-29', 1234, 36, 1),
(55, 'Dép Adidas Adiletee', 300000, 'Dep_adilette_22_Mau_xanh_da_troi_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, 8, '2024-03-29', 1234, 36, 1),
(56, 'Dép Mule SupperStar', 989000, 'Giay_Mule_Superstar_trang_IF6184_01_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, 8, '2024-03-29', 1234, 36, 1),
(57, 'Giày Puma roma classics', 1989999, 'Roma-Classics-giayf.avif', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.', 1, 8, '2024-03-29', 1234, 1, 44),
(58, 'Giày Puma Suede Multi', 3000000, 'RS-X-Suede-Multi-Sneakers.avif', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.', 10, 8, '2024-03-29', 1234, 1, 44),
(59, 'Dép supper', 699000, 'jordan-super-dép.png', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.', 1, 0, '2024-03-29', 1234, 36, 44),
(60, 'Dép Puma Sandal', 500000, 'RS-Sandal.avif', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.\r\n', 1, 0, '2024-03-29', 1234, 36, 44),
(61, 'Giày Biti\'s Hunter Street Mid ', 2000000, '', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, 0, '2024-03-29', 2234, 1, 66),
(62, 'Dép Biti\'s Sandal OR', 800000, '662785d12c6311e325b83792fcb01932.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, 0, '2024-03-29', 2234, 36, 66),
(63, 'Dép Biti\'s Sandal Black', 699000, '777692a08f5da7794385d1139c9989d1.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, 0, '2024-03-29', 2234, 36, 66),
(64, 'Giày Biti\'s Hunter OR', 3500000, 'a9627c2c8259d882ebe08d00c5beaa87.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 4, 0, '2024-03-29', 1234, 1, 66),
(65, 'Dép Biti\'s Sandal White', 2500000, 'ccd5df2095a25b3e72dc2308a6331c46.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, 0, '2024-03-29', 1234, 36, 66),
(66, 'Dép lào', 10000, 'iPad-Gen-10-sliver-thumb-600x600.jpg', '   DÉp chuyên để đi  thả diều chăn trâu', 11, 89, '2024-04-12', 11, 36, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_number` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`size_id`, `size_number`) VALUES
(1, 38),
(2, 39),
(3, 40),
(4, 41),
(5, 42),
(6, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Chưa giao'),
(2, 'Đang giao'),
(3, 'Giao thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` tinyint(1) DEFAULT 0,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `fullname`, `email`, `phone`, `address`, `role`, `create_at`) VALUES
(18, 'dangvanson', 'anhsontb', 'Đặng Sơn TB', 'dangvanson210297@gmail.com', '0987654321', 'thái bình', 1, '04-04-24'),
(19, 'anhsontb', '12345678', 'Đặng Văn Sơn', 'dangson@gmail.com', '0986767222', 'Thái bình', 1, '06-04-24'),
(20, '123456789', '123456789', 'zcb', 'dangvanson2610297@gamail.com', '2345123450', 'thôn lai vy', 0, '06-04-24'),
(21, 'dangsontb', '12345678', 'Đặng Văn Sơn', 'Dangvanson@gmail.com', '0339530282', 'Thái Bình', 0, '11-04-24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `Tên thương hiệu` (`brand_name`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `cate_name` (`cate_name`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_comment` (`product_id`),
  ADD KEY `fk_comment2` (`user_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_oder` (`id_user`),
  ADD KEY `fk_odder2` (`id_status`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `Tên sản phẩm` (`name`),
  ADD KEY `fk_product1` (`brand_id`),
  ADD KEY `fk_product2` (`cate_id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`),
  ADD UNIQUE KEY `size_number` (`size_number`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_comment2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_odder2` FOREIGN KEY (`id_status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `fk_oder` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `fk_product2` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

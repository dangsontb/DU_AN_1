-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2024 lúc 06:37 PM
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
(28, '1111', '03-04-2024', 3, 19, 63);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_product`
--

CREATE TABLE `image_product` (
  `image_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(271, 'SHN387555', 8349997, 1, 'Đặng Văn Sơn', '0986767222', 'Thái bình', 1, 19, '03-04-2024');

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
(110, 271, 42, 1, 1959999, 'air-jordan-1-NIke.jpg', 'Giày nike air jordan_1'),
(111, 271, 44, 1, 990000, 'giày 2.png', 'Giày Nike af1_mix'),
(112, 271, 43, 2, 2699999, 'air-jordan-legacy-312-low-older-shoes-giày.png', 'Giày nike air jordan legacy');

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
  `create_at` date NOT NULL,
  `view` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `image`, `description`, `sale`, `create_at`, `view`, `cate_id`, `brand_id`) VALUES
(42, 'Giày nike air jordan_1', 1999999, 'air-jordan-1-NIke.jpg', ' Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, '2024-03-29', 2, 1, 2),
(43, 'Giày nike air jordan legacy', 2999999, 'air-jordan-legacy-312-low-older-shoes-giày.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 10, '2024-03-29', 12345, 1, 2),
(44, 'Giày Nike af1_mix', 1000000, 'giày 2.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, '2024-03-29', 12345, 1, 2),
(45, 'Giày Nike AF1', 999000, 'giày 3.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, '2024-03-29', 12345, 1, 2),
(46, 'Dép Jordan sophia ', 800000, 'jordan-sophia-slides-dép.jpg', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 4, '2024-03-29', 1234, 36, 2),
(47, 'Dép Jordan hixu', 998000, 'dép.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 4, '2024-03-29', 1234, 36, 2),
(48, 'Dép Jordan hex mule', 720000, 'jordan-hex-mule-shoes-dép.png', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, '2024-03-29', 1234, 36, 2),
(49, 'Giày Samba OG', 2100000, 'Giay_Samba_OG_trang_B75806_01_standard_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, '2024-03-29', 1234, 1, 1),
(50, 'Giày Stan Smith', 1890000, 'Giay_Stan_Smith_trang_FX7519_01_standard_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, '2024-03-29', 1234, 1, 1),
(51, 'Giày Supper_star', 3200000, 'Giay_Superstar_Slip-On_trang_IE0399_01_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 2, '2024-03-29', 1234, 1, 1),
(52, 'Gioày Forum_Mid', 1500000, 'Giay_Forum_Mid_trang_IG3754_01_giày.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, '2024-03-29', 1234, 1, 1),
(53, 'Dép  hex mule', 599000, 'Dep_Xo_Ngon_adilette_Comfort_trang_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004\r\n', 1, '2024-03-29', 1234, 36, 1),
(54, 'Dép DJi_Boi', 700000, 'Dep_DJi_Boi_adilette_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, '2024-03-29', 1234, 36, 1),
(55, 'Dép Adidas Adiletee', 300000, 'Dep_adilette_22_Mau_xanh_da_troi_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, '2024-03-29', 1234, 36, 1),
(56, 'Dép Mule SupperStar', 989000, 'Giay_Mule_Superstar_trang_IF6184_01_dép.avif', 'Angling for a sportier mule? The Jordan Hex Mule uses the same edgy design made iconic by the Hex Slide to bring a closed-toe option perfect for the changing seasons.\r\n\r\nColour Shown: Ozone Blue/Ozone Blue\r\nStyle: DX6405-004', 1, '2024-03-29', 1234, 36, 1),
(57, 'Giày Puma roma classics', 1989999, 'Roma-Classics-giayf.avif', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.', 1, '2024-03-29', 1234, 1, 44),
(58, 'Giày Puma Suede Multi', 3000000, 'RS-X-Suede-Multi-Sneakers.avif', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.', 10, '2024-03-29', 1234, 1, 44),
(59, 'Dép supper', 699000, 'jordan-super-dép.png', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.', 1, '2024-03-29', 1234, 36, 44),
(60, 'Dép Puma Sandal', 500000, 'RS-Sandal.avif', '\r\nCool Cat 2.0 PS Little Kids\' Sandals\r\nAverage: 3.7 / 5\r\n$14.99\r\n$30.00\r\nOr 4 payments of $3.75 byLearn more about Afterpay\r\nAfterpay\r\nColor\r\nBridal Rose-Rose Gold\r\nCool Dark Gray-PUMA BlackCool Dark Gray-PUMA Black\r\nPUMA Black-PUMA White-KNOCKOUT PINKPUMA Black-PUMA White-KNOCKOUT PINK\r\nBridal Rose-Rose GoldBridal Rose-Rose Gold\r\nPUMA Navy-PUMA White-For All Time RedPUMA Navy-PUMA White-For All Time Red\r\nSPEND $125+, GET 30% OFF WITH CODE: SPRING\r\n\r\nSelect fit\r\nSelect Size Group\r\n\r\nLITTLE KIDS\r\nSize\r\n11\r\nSize\r\n12\r\nSize\r\n13\r\nSize\r\n1\r\nSize\r\n2\r\nSize\r\n3\r\n\r\nSIZE GUIDE\r\nQUANTITY\r\n1\r\n\r\n1\r\n\r\nADD TO CART\r\n\r\nADD TO WISHLIST\r\nFree returns on all qualifying orders.\r\n\r\n\r\nFind out estimated arrival\r\nDescription\r\nGet your little one ready for fun in the sun with the Cool Cat 2.0 slides. They\'re made with a soft cushioned footbed and a padded strap, ensuring a comfortable fit for young feet.\r\nStyle: 390884_04\r\nColor: Bridal Rose-Rose Gold\r\n\r\nREAD MORE\r\nShipping and Returns\r\nFree standard shipping on orders over $60 before tax, plus free returns on all qualifying orders.\r\n', 1, '2024-03-29', 1234, 36, 44),
(61, 'Giày Biti\'s Hunter Street Mid ', 2000000, '33159d6f77497a9b2757270dd945e5cf.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, '2024-03-29', 2234, 1, 66),
(62, 'Dép Biti\'s Sandal OR', 800000, '662785d12c6311e325b83792fcb01932.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, '2024-03-29', 2234, 36, 66),
(63, 'Dép Biti\'s Sandal Black', 699000, '777692a08f5da7794385d1139c9989d1.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, '2024-03-29', 2234, 36, 66),
(64, 'Giày Biti\'s Hunter OR', 3500000, 'a9627c2c8259d882ebe08d00c5beaa87.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 4, '2024-03-29', 1234, 1, 66),
(65, 'Dép Biti\'s Sandal White', 2500000, 'ccd5df2095a25b3e72dc2308a6331c46.jpg', 'HIGHLIGHTS:\r\n\r\nThe model uses a 1-layer neck Knits for convenient wearing, convenient foot-piercing. The highlight SP woven straps with the logo Bird Wings combines the way the shoelaces are sewn with a more distinct difference.\r\n- SOLE: Phylon /Rubber\r\n\r\n- STRAP: Knits with stockings\r\n\r\n- With lanyard.\r\n\r\n- Due to the different monitor and light condition, the actual color of the item may be about 3-5% different.', 1, '2024-03-29', 1234, 36, 66);

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
(18, 'dangvanson', 'anhsontb', 'Đặng Sơn TB', 'dangvanson210297@gmail.com', '0987654321', 'thái bình', 0, '26-03-24'),
(19, 'anhsontb', '12345678', 'Đặng Văn Sơn', 'dangson@gmail.com', '0986767222', 'Thái bình', 0, '2024-03-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variation`
--

CREATE TABLE `variation` (
  `variation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `variation_image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `create_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Chỉ mục cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`image_product_id`);

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
-- Chỉ mục cho bảng `variation`
--
ALTER TABLE `variation`
  ADD PRIMARY KEY (`variation_id`),
  ADD KEY `fk_variation1` (`product_id`),
  ADD KEY `fk_variation2` (`size_id`);

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `image_product`
--
ALTER TABLE `image_product`
  MODIFY `image_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `variation`
--
ALTER TABLE `variation`
  MODIFY `variation_id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Các ràng buộc cho bảng `variation`
--
ALTER TABLE `variation`
  ADD CONSTRAINT `fk_variation1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_variation2` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

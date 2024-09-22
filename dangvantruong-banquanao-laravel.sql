-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2024 at 09:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `cart_owner` text NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL DEFAULT 1,
  `product_size` varchar(2) NOT NULL DEFAULT 'S',
  `location` text DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `cart_owner`, `cart_status`, `create_at`, `product_id`, `cart_count`, `product_size`, `location`, `updated_at`) VALUES
(1, 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm', 1, '2024-09-22 18:51:54', 5, 4, 'S', 'Đặng Văn Trưởng | 0332590853 | Số 18, NGT, Thị trấn Đa Phước, Huyện An Phú, Tỉnh An Giang, ', '2024-09-22 18:52:30'),
(2, 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 1, '2024-09-22 18:57:15', 3, 4, 'S', 'Khách hàng #nT5U2iuV7c | 0332590853 | Saan bong, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ', '2024-09-22 18:57:54'),
(3, 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 0, '2024-09-22 18:58:58', 1, 1, 'M', NULL, '2024-09-23 01:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `cart_history`
--

CREATE TABLE `cart_history` (
  `id` int(11) NOT NULL,
  `product_img` text NOT NULL,
  `product_name` text NOT NULL,
  `product_price` double NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_size` varchar(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `owner` text NOT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_history`
--

INSERT INTO `cart_history` (`id`, `product_img`, `product_name`, `product_price`, `product_count`, `product_size`, `created_at`, `status`, `owner`, `location`) VALUES
(1, 'dist/img/quannam1.png', 'Quần Kaki Slimfit Trơn QK019', 249000, 4, 'S', '2024-09-22 18:52:30', 0, 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm', 'Đặng Văn Trưởng | 0332590853 | Số 18, NGT, Thị trấn Đa Phước, Huyện An Phú, Tỉnh An Giang, '),
(2, 'dist/img/quannam1.png', 'Quần Kaki Slimfit Trơn QK018 Màu Xanh', 249000, 4, 'S', '2024-09-22 18:57:54', 0, 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 'Khách hàng #nT5U2iuV7c | 0332590853 | Saan bong, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_des`) VALUES
(1, 'Quần kaki nam', 'Quần kaki nam'),
(2, 'Quần tây nam', 'Quần kaki nam'),
(3, 'Áo sơ mi nam', 'Áo sơ mi nam');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_des` text NOT NULL,
  `product_price` double NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_count_m` int(11) NOT NULL,
  `product_count_l` int(11) NOT NULL,
  `product_count_xl` int(11) NOT NULL,
  `product_img` text NOT NULL,
  `product_lg_img` text NOT NULL,
  `category_linker_id` int(11) NOT NULL,
  `product_group` int(11) NOT NULL DEFAULT 0,
  `is_product_child` int(11) NOT NULL DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `sell_count` int(11) NOT NULL DEFAULT 0,
  `product_weight` float NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_des`, `product_price`, `product_status`, `product_count`, `product_count_m`, `product_count_l`, `product_count_xl`, `product_img`, `product_lg_img`, `category_linker_id`, `product_group`, `is_product_child`, `view_count`, `updated_at`, `created_at`, `sell_count`, `product_weight`) VALUES
(1, 'Quần Kaki Slimfit Trơn QK018', 'Thông tin sản phẩm: <br>\r\n                                            - Mã sản phẩm: SM158 <br>\r\n                                            - Chất liệu: Oxford <br>\r\n                                            - Họa tiết: Trơn <br>\r\n                                            - Form: Regular <br>\r\n                                            - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n                                            ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n                                            quốc.', 249000, 1, 999, 30, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 1, 0, 25, '2024-09-22 18:58:53', '2024-09-22 17:38:50', 0, 1),
(2, 'Quần Kaki Slimfit Trơn QK018 Màu Xám', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 1, 1, 2, '2024-09-22 12:04:05', '2024-09-22 17:38:50', 0, 1),
(3, 'Quần Kaki Slimfit Trơn QK018 Màu Xanh', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 1, 1, 2, '2024-09-22 18:57:12', '2024-09-22 17:38:50', 0, 1),
(4, 'Quần Kaki Slimfit Trơn QK018 Màu Đỏ', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 1, 1, 3, '2024-09-22 12:04:03', '2024-09-22 17:38:50', 0, 1),
(5, 'Quần Kaki Slimfit Trơn QK019', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 2, 0, 11, '2024-09-22 18:58:47', '2024-09-22 17:38:50', 0, 1),
(6, 'Quần Kaki Slimfit Trơn QK019 Màu Đỏ', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 10, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 2, 1, 0, '2024-09-22 17:35:28', '2024-09-22 17:38:50', 0, 1),
(7, 'Quần Kaki Slimfit Trơn QK019 Màu Đen', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 2, 1, 2, '2024-09-22 15:51:05', '2024-09-22 17:38:50', 0, 1),
(8, 'Quần Kaki Slimfit Trơn QK019 Màu Xanh', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 2, 1, 2, '2024-09-22 17:22:43', '2024-09-22 17:38:50', 0, 1),
(9, 'Quần Kaki Slimfit Trơn QK020', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 0, 1, '2024-09-22 11:41:04', '2024-09-22 17:38:50', 0, 1),
(10, 'Quần Kaki Slimfit Trơn QK020 Màu Đỏ', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 349000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 1, 0, '2024-09-22 17:35:28', '2024-09-22 17:38:50', 0, 1),
(11, 'Quần Kaki Slimfit Trơn QK020 Màu Xanh', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 1, 0, '2024-09-22 17:35:28', '2024-09-22 17:38:50', 0, 1),
(12, 'Quần Kaki Slimfit Trơn QK020 Màu Vàng', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 1, 0, '2024-09-22 17:35:28', '2024-09-22 17:38:50', 0, 1),
(13, 'Quần Kaki Slimfit Trơn QK021', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 50, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 3, 4, 0, 0, '2024-09-22 17:35:28', '2024-09-22 17:38:50', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_view`
--

CREATE TABLE `product_view` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `view_by_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_view`
--

INSERT INTO `product_view` (`id`, `product_id`, `created_at`, `view_by_token`) VALUES
(1, 1, '2024-09-22 18:12:50', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(2, 5, '2024-09-22 18:37:03', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(3, 8, '2024-09-22 18:37:05', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(4, 9, '2024-09-22 18:41:04', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(5, 5, '2024-09-22 18:49:11', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(6, 5, '2024-09-22 22:50:45', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(7, 5, '2024-09-22 22:50:48', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(8, 5, '2024-09-22 22:51:04', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(9, 7, '2024-09-22 22:51:05', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(10, 5, '2024-09-23 00:22:41', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(11, 8, '2024-09-23 00:22:43', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(12, 1, '2024-09-23 01:47:34', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(13, 5, '2024-09-23 01:51:49', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm'),
(14, 1, '2024-09-23 01:57:05', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J'),
(15, 3, '2024-09-23 01:57:12', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J'),
(16, 5, '2024-09-23 01:58:47', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J'),
(17, 1, '2024-09-23 01:58:53', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(11) NOT NULL,
  `user_full_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_number_phone` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_province_location` text DEFAULT NULL,
  `user_district_location` text DEFAULT NULL,
  `user_ward_location` text DEFAULT NULL,
  `user_other_location` text DEFAULT NULL,
  `user_token` text NOT NULL,
  `is_guest` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `user_full_name`, `username`, `password`, `user_number_phone`, `user_email`, `user_province_location`, `user_district_location`, `user_ward_location`, `user_other_location`, `user_token`, `is_guest`, `updated_at`, `level`) VALUES
(1, 'Dang Van Truong', 'dvtmod', '34518d140c301c6e7498ac7b7459a8b1', '0332590853', 'dvtmod@gmail.com', '', '', '', '', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh', 0, '2024-09-23 01:09:01', 0),
(13, 'Đặng Văn Trưởng', 'dvtmoddd', '34518d140c301c6e7498ac7b7459a8b1', '0332590853', 'dvtmod@gmail.com', '89', '886', '30373', 'Số 18, NGT', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm', 0, '2024-09-22 18:52:30', 1),
(14, 'Khách hàng #nT5U2iuV7c', 'nT5U2iuV7c', '6312c1843bdac66e7099a3d661a303f8', '0332590853', NULL, '40', '421', '17149', 'Saan bong', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 1, '2024-09-22 18:57:54', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_history`
--
ALTER TABLE `cart_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_view`
--
ALTER TABLE `product_view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_history`
--
ALTER TABLE `cart_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_view`
--
ALTER TABLE `product_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

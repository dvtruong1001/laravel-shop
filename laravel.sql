-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 11:15 PM
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
  `cart_token` text DEFAULT NULL,
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

INSERT INTO `carts` (`cart_id`, `cart_owner`, `cart_status`, `cart_token`, `create_at`, `product_id`, `cart_count`, `product_size`, `location`, `updated_at`) VALUES
(1, 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm', 1, NULL, '2024-09-22 18:51:54', 5, 4, 'S', 'Đặng Văn Trưởng | 0332590853 | Số 18, NGT, Thị trấn Đa Phước, Huyện An Phú, Tỉnh An Giang, ', '2024-09-22 18:52:30'),
(2, 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 1, NULL, '2024-09-22 18:57:15', 3, 4, 'S', 'Khách hàng #nT5U2iuV7c | 0332590853 | Saan bong, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ', '2024-09-22 18:57:54'),
(3, 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 0, NULL, '2024-09-22 18:58:58', 1, 1, 'M', NULL, '2024-09-23 01:58:58'),
(4, 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh', 1, NULL, '2024-09-24 10:37:59', 1, 5, 'S', 'Dang Van Truong | 0332590853 | Sân bóng xóm 3b, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ', '2024-09-24 10:38:45'),
(5, 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh', 1, NULL, '2024-09-24 20:50:02', 5, 10, 'S', 'Dang Van Truong | 0332590853 | Sân bóng xóm 3b, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ', '2024-09-24 20:50:10'),
(6, 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh', 1, NULL, '2024-09-24 21:03:38', 13, 10, 'S', 'Dang Van Truong | 0332590853 | Sân bóng xóm 3b, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ', '2024-09-24 21:03:44');

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
  `location` text DEFAULT NULL,
  `cart_token` text NOT NULL DEFAULT 'null',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_history`
--

INSERT INTO `cart_history` (`id`, `product_img`, `product_name`, `product_price`, `product_count`, `product_size`, `created_at`, `status`, `owner`, `location`, `cart_token`, `updated_at`) VALUES
(5, 'dist/img/quannam1.png', 'Quần Kaki Slimfit Trơn QK021', 249000, 10, 'S', '2024-09-24 21:03:44', 1, 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh', 'Dang Van Truong | 0332590853 | Sân bóng xóm 3b, Xã Quỳnh Tam, Huyện Quỳnh Lưu, Tỉnh Nghệ An, ', 'pcRhQc9ffG', '2024-09-24 21:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_des` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_des`, `updated_at`, `created_at`) VALUES
(1, 'Quần kaki namm', 'Quần kaki nam', '2024-09-24 19:59:05', '2024-09-25 03:00:52'),
(2, 'Quần tây nam', 'Quần kaki nam', '2024-09-25 02:59:03', '2024-09-25 03:00:52'),
(3, 'Áo sơ mi nam', 'Áo sơ mi nam', '2024-09-25 02:59:03', '2024-09-25 03:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_des` text NOT NULL,
  `product_price` double NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1,
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
(2, 'Quần Kaki Slimfit Trơn QK018 Màu Xám', 'Thông tin sản phẩm: <br>\n - Mã sản phẩm: SM158 <br>\n - Chất liệu: Oxford <br>\n - Họa tiết: Trơn <br>\n - Form: Regular <br>\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 0, 0, 9, '2024-09-24 21:14:49', '2024-09-22 17:38:50', 0, 1),
(3, 'Quần Kaki Slimfit Trơn QK018 Màu Xanh', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 1, 1, 4, '2024-09-24 18:27:19', '2024-09-22 17:38:50', 0, 1),
(4, 'Quần Kaki Slimfit Trơn QK018 Màu Đỏ', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 1, 1, 3, '2024-09-22 12:04:03', '2024-09-22 17:38:50', 0, 1),
(5, 'Quần Kaki Slimfit Trơn QK019', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 989, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 1, 2, 0, 16, '2024-09-24 20:50:22', '2024-09-22 17:38:50', 0, 1),
(6, 'Quần Kaki Slimfit Trơn QK019 Màu Đỏ', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 10, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 2, 1, 1, '2024-09-24 20:49:51', '2024-09-22 17:38:50', 0, 1),
(7, 'Quần Kaki Slimfit Trơn QK019 Màu Đen', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 2, 1, 4, '2024-09-24 20:49:52', '2024-09-22 17:38:50', 0, 1),
(8, 'Quần Kaki Slimfit Trơn QK019 Màu Xanh', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 2, 1, 3, '2024-09-24 20:49:53', '2024-09-22 17:38:50', 0, 1),
(9, 'Quần Kaki Slimfit Trơn QK020', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 0, 1, '2024-09-22 11:41:04', '2024-09-22 17:38:50', 0, 1),
(10, 'Quần Kaki Slimfit Trơn QK020 Màu Đỏ', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 349000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 1, 5, '2024-09-24 18:33:49', '2024-09-22 17:38:50', 0, 1),
(11, 'Quần Kaki Slimfit Trơn QK020 Màu Xanh', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 1, 1, '2024-09-24 19:17:27', '2024-09-22 17:38:50', 0, 1),
(12, 'Quần Kaki Slimfit Trơn QK020 Màu Vàng', 'Thông tin sản phẩm: <br>\r\n - Mã sản phẩm: SM158 <br>\r\n - Chất liệu: Oxford <br>\r\n - Họa tiết: Trơn <br>\r\n - Form: Regular <br>\r\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\r\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\r\n quốc.', 249000, 1, 999, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 3, 1, 2, '2024-09-24 19:28:51', '2024-09-22 17:38:50', 0, 1),
(13, 'Quần Kaki Slimfit Trơn QK021', 'Thông tin sản phẩm: <br>\n - Mã sản phẩm: SM158 <br>\n - Chất liệu: Oxford <br>\n - Họa tiết: Trơn <br>\n - Form: Regular <br>\n - Màu: Trắng / Be / Xanh biển / Xanh đen <br>\n ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn\n quốc.', 249000, 1, 40, 0, 0, 0, 'dist/img/quannam1.png', 'dist/img/quankakinam1-lg.png', 2, 4, 0, 8, '2024-09-24 21:03:44', '2024-09-22 17:38:50', 0, 1);

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
(17, 1, '2024-09-23 01:58:53', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J'),
(18, 5, '2024-09-24 17:14:57', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(19, 1, '2024-09-24 17:37:56', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(20, 1, '2024-09-24 19:32:35', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(21, 1, '2024-09-24 19:34:57', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(22, 1, '2024-09-24 19:35:32', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(23, 1, '2024-09-24 19:36:34', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(24, 1, '2024-09-24 19:36:57', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(25, 1, '2024-09-24 19:37:00', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(26, 2, '2024-09-24 19:37:31', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(27, 3, '2024-09-24 19:38:01', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(28, 1, '2024-09-24 19:40:10', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(29, 1, '2024-09-24 19:41:43', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(30, 2, '2024-09-24 19:43:19', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(31, 1, '2024-09-25 01:06:30', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(32, 1, '2024-09-25 01:06:41', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(33, 1, '2024-09-25 01:06:46', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(34, 1, '2024-09-25 01:14:34', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(35, 1, '2024-09-25 01:15:14', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(36, 1, '2024-09-25 01:16:02', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(37, 1, '2024-09-25 01:26:41', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(38, 3, '2024-09-25 01:27:19', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(39, 7, '2024-09-25 01:27:56', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(40, 10, '2024-09-25 01:28:57', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(41, 10, '2024-09-25 01:29:57', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(42, 10, '2024-09-25 01:30:43', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(43, 10, '2024-09-25 01:33:46', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(44, 10, '2024-09-25 01:33:49', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(45, 1, '2024-09-25 01:43:57', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(46, 1, '2024-09-25 01:44:30', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(47, 1, '2024-09-25 01:45:25', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(48, 1, '2024-09-25 01:45:34', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(49, 1, '2024-09-25 01:46:07', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(50, 14, '2024-09-25 02:12:35', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(51, 13, '2024-09-25 02:15:25', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(52, 13, '2024-09-25 02:15:54', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(53, 11, '2024-09-25 02:17:27', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(54, 5, '2024-09-25 02:17:46', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(55, 13, '2024-09-25 02:19:24', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(56, 12, '2024-09-25 02:28:34', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(57, 12, '2024-09-25 02:28:51', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(58, 13, '2024-09-25 02:32:50', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(59, 13, '2024-09-25 02:34:31', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(60, 13, '2024-09-25 02:35:54', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(61, 13, '2024-09-25 02:36:04', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(62, 5, '2024-09-25 03:49:49', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(63, 6, '2024-09-25 03:49:51', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(64, 7, '2024-09-25 03:49:52', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(65, 8, '2024-09-25 03:49:53', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(66, 5, '2024-09-25 03:49:54', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(67, 5, '2024-09-25 03:50:22', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(68, 13, '2024-09-25 04:03:30', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(69, 2, '2024-09-25 04:12:36', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(70, 2, '2024-09-25 04:12:42', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(71, 2, '2024-09-25 04:13:20', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(72, 2, '2024-09-25 04:14:31', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh'),
(73, 2, '2024-09-25 04:14:49', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh');

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
  `level` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `user_full_name`, `username`, `password`, `user_number_phone`, `user_email`, `user_province_location`, `user_district_location`, `user_ward_location`, `user_other_location`, `user_token`, `is_guest`, `updated_at`, `level`, `created_at`) VALUES
(1, 'Dang Van Truong', 'dvtmod', '34518d140c301c6e7498ac7b7459a8b1', '0332590853', 'dvtmod@gmail.com', '40', '421', '17149', 'Sân bóng xóm 3b', 'haaaaaaaaaaaaaadhsajkdsghdudwqijnejlksdlygdfytawvcstdwytdigsydakcvgsytdfgywuvvvviahjaaaaaaatcsgfuydfwtuvsdgh', 0, '2024-09-24 21:03:44', 1, '2024-09-24 17:42:21'),
(13, 'Đặng Văn Trưởng', 'dvtmoddd', '34518d140c301c6e7498ac7b7459a8b1', '0332590853', 'dvtmod@gmail.com', '89', '886', '30373', 'Số 18, NGT', 'oiLGOJUKlDCYmALvLdGuT6NQ3JEMiHEiPW92Wp5XM3ciwD1ABm', 0, '2024-09-22 18:52:30', 1, '2024-09-24 17:42:21'),
(14, 'Khách hàng #nT5U2iuV7c', 'nT5U2iuV7c', '6312c1843bdac66e7099a3d661a303f8', '0332590853', NULL, '40', '421', '17149', 'Saan bong', 'dhXE9d8B7ukC4IG77JGApcaYrGryBqr8T8CwfGYTtBkNS7sx1J', 1, '2024-09-22 18:57:54', 0, '2024-09-24 17:42:21');

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_history`
--
ALTER TABLE `cart_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_view`
--
ALTER TABLE `product_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 09, 2018 lúc 05:22 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `title`, `images`, `type`, `status`) VALUES
(2, 'title 1', 'tải xuống (2).jpg', NULL, 1),
(3, 'title 2', 'tải xuống (3).jpg', NULL, 0),
(4, 'aaa', 'tải xuống.jpg', NULL, 1),
(5, 'ad', 'tải xuống (1).jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Dell', 1, NULL, NULL),
(3, 'HP', 1, NULL, NULL),
(4, 'Asus', 1, NULL, NULL),
(5, 'Lenovo', 1, NULL, NULL),
(6, 'Acer', 1, NULL, NULL),
(7, 'Samsung', 1, NULL, NULL),
(8, 'LG', 1, NULL, NULL),
(9, 'Sony', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `address`, `phone`, `gender`) VALUES
(1, 'chien', 'aaa@gmail.com', NULL, 'qwe wq', 123123124, 1),
(2, 'chien', 'aaa@gmail.com', NULL, 'qwe wq', 123123124, 1),
(3, 'chien', 'aaa@gmail.com', NULL, 'qwe wq', 123123124, 1),
(4, 'chien', 'aaa@gmail.com', NULL, 'qwe wq', 123123124, 1),
(5, 'sdasdas', 'admin@gmail.com', NULL, 'ssdasd', 1231231231, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `product_id`, `images`, `status`) VALUES
(1, 1, '0', 1),
(2, 2, 'download (7).jpeg', 1),
(4, 8, 'download (7).jpeg', NULL),
(5, 8, 'download (6).jpeg', NULL),
(6, 9, 'download (6).jpeg', NULL),
(7, 9, 'download (7).jpeg', NULL),
(8, 9, 'images (3).jpeg', NULL),
(9, 9, 'download (7).jpeg', NULL),
(10, 9, 'download (5).jpeg', NULL),
(11, 3, 'download (3).jpeg', NULL),
(12, 3, 'download (7).jpeg', NULL),
(13, 3, 'download (5).jpeg', NULL),
(14, 3, 'download (4).jpeg', NULL),
(15, 3, 'download (7).jpeg', NULL),
(16, 3, '9200000078984664.jpg', NULL),
(17, 3, 'images (4).jpg', NULL),
(18, 3, 'images (1).jpg', NULL),
(19, 4, 'images (2).jpg', NULL),
(20, 4, 'images (3).jpg', NULL),
(21, 4, 'images (1).jpg', NULL),
(22, 5, '9200000078984664.jpg', NULL),
(23, 5, 'c05962448.png', NULL),
(24, 6, '9200000078984664.jpg', NULL),
(25, 6, '9200000078984664.jpg', NULL),
(26, 8, '9200000078984664.jpg', NULL),
(27, 8, '9200000078984664.jpg', NULL),
(28, 9, '9200000078984664.jpg', NULL),
(29, 9, '9200000078984664.jpg', NULL),
(30, 9, '9200000078984664.jpg', NULL),
(31, 9, '9200000078984664.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_01_154850_create_category_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date_orders` date DEFAULT NULL,
  `total` int(255) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `customer_id`, `date_orders`, `total`, `status`, `type`) VALUES
(1, 3, '2018-09-09', 11, 1, 1),
(2, 4, '2018-09-09', 11, 1, 1),
(3, 5, '2018-09-09', 11, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(255) NOT NULL,
  `price_unit` int(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `product_id`, `qty`, `price_unit`) VALUES
(1, 1, 3, 1, 10800000),
(2, 1, 2, 1, 9000000),
(3, 2, 3, 1, 10800000),
(4, 2, 2, 1, 9000000),
(5, 3, 2, 1, 9000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tosale` datetime DEFAULT NULL,
  `fromsale` datetime DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `cate_id`, `code`, `name`, `slug`, `content`, `description`, `price`, `sale`, `tosale`, `fromsale`, `image`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, '123123', 'sam sung123', 'ss', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><br></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\">đâsd</p>', '10000000', '10', NULL, NULL, 'images (3).jpeg', '123', 1, NULL, NULL),
(3, 3, '123', 'sam sungaa', 'ss', '<span style=\"font-size: 12pt; color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;</span><span style=\"font-size: 12pt; color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-weight: 700;\">Dell Inspiron 7559</span><span style=\"font-size: 12pt; color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif;\">&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><br></p>', '12000000', '10', NULL, NULL, 'images (3).jpeg', '1', 1, NULL, NULL),
(4, 4, '122331dd', 'sam sung21212', 'ss', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><br></p>', '12000000', '12', NULL, NULL, 'images (3).jpeg', '12', 1, NULL, NULL),
(5, 2, 'ss', 'dell 7559', 'ss', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '12000000', '0', NULL, NULL, 'images (3).jpeg', '12', 1, NULL, NULL),
(6, 9, '12d', 'sony ss4', 'ss', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><br></p>', '2000000', NULL, NULL, NULL, 'images (3).jpeg', '12', 1, NULL, NULL),
(8, 2, '12s', 'sam sung 12', 'ss', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><br></p>', '10000000', '10', NULL, NULL, 'images (3).jpeg', '12', 1, NULL, NULL),
(9, 2, 'd12', 'ss', 'ss', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao, đáp ứng với nhu cầu của người dùng chơi game và làm đồ họa</span></p><p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Chiếc laptop&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được bán tại Laptop88 hàng chính hãng Dell . Mọi chức năng của máy hoạt động hoàn hảo, hình thức của máy còn đẹp đến 99%.</span></p>', '<p style=\"color: rgb(34, 34, 34); font-family: Roboto, arial, Helvetica, sans-serif; font-size: 13px;\"><span style=\"font-size: 12pt;\">Thuộc phân khúc laptop chơi game trung cấp,&nbsp;<span style=\"font-weight: 700;\">Dell Inspiron 7559</span>&nbsp;được hãng Dell ra mắt năm 2016 với thiết kế kiểu dáng bắt mắt, trang bị hệ thống tản nhiệt khủng 2 quạt tản nhiệt, cấu hình cao,&nbsp;</span></p>', '23000000', '20', NULL, NULL, 'images (3).jpeg', '21', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Văn Chiến', 'chiendv92@gmail.com', '123123', 1, NULL, NULL, NULL),
(2, 'sdsad', 'chiendv1992@gmail.com', '$2y$10$5PkNG5RH5WxJOSDcTpKUZ.43rVpmFYr1YRCkpvvj.cnnGaFd3whke', 1, 'DjWuUE2KcvXAhZHtR5yhXj7I7BywaiDMXUiqkL2fiISZekl92N1Iyrrpv0Ep', NULL, NULL),
(3, 'chiendv1992@gmail.com', 'asdchiendv1992@gmail.com', '$2y$10$AjwFwWROWCnOU6WUcvYIeeeEX8jvRNMeYy8vpAo7q2Q8kB.khDWSG', 1, NULL, NULL, NULL),
(4, 'admin', 'admin@gmail.com', '$2y$10$E/x.iCF0.4ti03Mi3RpdD..Sw1Iq6xJvQ3EesHygmWf.cPpMhehnS', 1, NULL, NULL, NULL),
(5, '123123', 's@gmail.com', '$2y$10$lPtGIcD6Hek/j5srnDFwm.9zsUudNdVd7ZYxH2Hc0P.OKwY75Uv.6', 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

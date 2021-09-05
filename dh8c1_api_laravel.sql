-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 05, 2021 lúc 07:07 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dh8c1_api_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_09_04_032921_create_student', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `hoTen`, `diaChi`, `lop`, `anh`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Tuấn Phong', 'Hà Tây', 'DH8C7', '1630840661_Ephoto360.com_160ed029110a58.jpg', NULL, NULL),
(2, 'Nguyễn Long Vũ', 'Đan Phượng', 'DH8C1', '1630840695_longvuuuuuuu.jpg', NULL, NULL),
(4, 'Nguyễn Minh Hiếu', 'Đan Phượng', 'DH8C1', NULL, NULL, NULL),
(5, 'Hồ Hồng Đức', 'Thanh Hóa', 'DH8C1', NULL, NULL, NULL),
(7, 'Đỗ Tuấn Phong', 'Ứng Hòa', 'DH8C12', NULL, NULL, NULL),
(13, 'Nguyễn Văn A', 'Ứng Hòa', 'DH8C1', NULL, NULL, NULL),
(14, 'test', 'GEm', 'đăqưq', NULL, NULL, NULL),
(20, 'Đỗ Tuấn Phong', 'Ứng Hòa', 'DH8C1', NULL, NULL, NULL),
(21, 'uptate 1', 'dwqad', 'DH8C7', NULL, NULL, NULL),
(22, 'asdqwdq', 'qweqwe', 'sadadad', NULL, NULL, NULL),
(23, 'adsa', 'qweqwe', 'sadadad', NULL, NULL, NULL),
(25, 'Đỗ Tuấn Phong', 'qweqwe', 'sadadad', NULL, NULL, NULL),
(27, 'adsa', 'qweqwe', 'DH8C7', NULL, NULL, NULL),
(29, 'Đỗ Tuấn Phong', 'qweqwe', 'DH8C7', NULL, NULL, NULL),
(30, 'Đỗ Tuấn Phong', 'qweqwe', 'DH8C7', NULL, NULL, NULL),
(31, 'adsa', 'qweqwe', 'DH8C7', NULL, NULL, NULL),
(32, 'alo alo 12 3 4  alo', 'Hà Nội', 'DH8C7', NULL, NULL, NULL),
(33, 'ALo alo', 'Ứng Hòa', 'DH8C1', NULL, NULL, NULL),
(34, 'alo alo 12 3 4  alo', 'dwqad', 'sadadad', NULL, NULL, NULL),
(35, 'adsa', 'qweqwe', 'sadadad', NULL, NULL, NULL),
(43, 'alo alo 12 3 4  alo', 'qweqwe', 'DH8C7', '1630837790_Bai_tap_ma_hoa_co_dien.jpg', NULL, NULL),
(44, 'Đỗ Tuấn Phong', 'Hà Tây', 'DH8C12', '1630838823_icons8-add-user-group-man-man-100.png', NULL, NULL),
(45, 'Đỗ Tuấn Phong', 'Hà Tây', 'DH8C12', '1630838844_icons8-add-user-group-man-man-100.png', NULL, NULL),
(46, 'Đỗ Tuấn Phong', 'Hà Tây', 'DH8C12', '1630838861_icons8-add-user-group-man-man-100.png', NULL, NULL),
(47, 'test ảnh', 'qweqwe', 'qwee', 'default.png', NULL, NULL),
(48, 'Đỗ Tuấn Phong', 'Hà Tây', 'DH8C12', 'default.png', NULL, NULL),
(49, 'Đỗ Tuấn Phong', 'Hà Tây', 'DH8C1', 'default.png', NULL, NULL),
(54, 'Vũ Nữ', 'Đan Phượng', 'DH8C1', '1630859025_longvuuuuuuu.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Tuấn Phong', 'Phongdo789@gmail.com', NULL, '$2y$10$zkJstJsnzRomsaiGGsAPk.0xbZduAmXOKgxdUvqbn928chE545e3K', NULL, '2021-09-04 20:02:19', '2021-09-04 20:02:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

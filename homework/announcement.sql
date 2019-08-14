-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-08-14 13:54:20
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `announcement`
--

-- --------------------------------------------------------

--
-- 資料表結構 `announcements`
--

CREATE TABLE `announcements` (
  `ann_id` bigint(20) UNSIGNED NOT NULL,
  `ann_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ann_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ann_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `announcements`
--

INSERT INTO `announcements` (`ann_id`, `ann_title`, `ann_content`, `ann_image`, `created_at`, `updated_at`) VALUES
(1, 'Nobody One', 'Content One', 'image01.png', '2019-08-13 18:00:00', '2019-08-13 21:44:53'),
(3, 'Announcement Three', 'Content Three', 'image03.jpg', '2019-08-14 01:10:16', '2019-08-14 01:15:27'),
(4, 'Announcement Four', 'Content Four', 'image04.png', '2019-08-14 08:09:23', '2019-08-14 01:15:33'),
(5, 'Announcement Five', 'Content Five', 'image05.jpg', '2019-08-13 22:10:13', '2019-08-14 01:15:38'),
(6, 'Announcement Six', 'Content Six', 'image06.jpg', '2019-08-13 20:17:21', '2019-08-14 01:15:44'),
(7, '4444', '4444', 'image01.png', '2019-08-13 21:19:55', '2019-08-13 21:19:55');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_13_083741_create_userdatas_table', 1),
(4, '2019_08_13_083800_create_announcements_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `userdatas`
--

CREATE TABLE `userdatas` (
  `ud_id` bigint(20) UNSIGNED NOT NULL,
  `ud_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ud_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ud_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ud_admin` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `userdatas`
--

INSERT INTO `userdatas` (`ud_id`, `ud_account`, `ud_password`, `ud_name`, `ud_admin`, `created_at`, `updated_at`) VALUES
(1, 'toby01', '1qaz2wsx', 'Toby', 1, '2019-08-13 19:02:42', '2019-08-14 03:02:54'),
(3, 'jude01', '1qaz2wsx', 'Jude', 0, '2019-08-13 19:13:21', '2019-08-13 19:13:21'),
(4, 'chih01', '1qaz2wsx', 'Chih', 0, '2019-08-13 19:24:55', '2019-08-13 19:24:55');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ann_id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `userdatas`
--
ALTER TABLE `userdatas`
  ADD PRIMARY KEY (`ud_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ann_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `userdatas`
--
ALTER TABLE `userdatas`
  MODIFY `ud_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

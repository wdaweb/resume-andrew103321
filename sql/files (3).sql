-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `name` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原始檔名',
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案類型',
  `path` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '檔案路徑',
  `sh` int(11) NOT NULL DEFAULT 0,
  `sh2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `path`, `sh`, `sh2`) VALUES
(13, 'dasdas.png', 'image/png', '../img/dasdas.png', 0, 1),
(14, 'dasdas.png', 'image/png', '../img/dasdas.png', 0, 1),
(15, 'dasdas.jpg', 'image/jpeg', '../img/dasdas.jpg', 0, 1),
(16, 'dasdad.jpg', 'image/jpeg', '../img/dasdad.jpg', 0, 1),
(17, 'dasdas.png', 'image/png', '../img/dasdas.png', 0, 1),
(18, 'images.jpg', 'image/jpeg', '../img/images.jpg', 1, 1),
(19, 'dsd.jpg', 'image/jpeg', '../img/dsd.jpg', 0, 1),
(20, 'dsd.jpg', 'image/jpeg', '../img/dsd.jpg', 0, 1),
(21, 'dasdas.png', 'image/png', '../img/dasdas.png', 0, 1),
(22, 'dasdas.jpg', 'image/jpeg', '../img/dasdas.jpg', 0, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

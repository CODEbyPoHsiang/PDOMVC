-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-28 18:21:38
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 資料庫： `ajax`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ename` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `township` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `phone`, `ename`, `email`, `sex`, `city`, `township`, `postcode`, `address`, `notes`, `created_at`, `updated_at`) VALUES
(2, 'ww', 'rr', 'www', 'qqqqqqqqqqqqqqqq', '', '', 'qqqqqqqqqqqqq', '', 'qqqqqqqqqqqqqq', '', '2020-05-21 03:23:45', '2020-05-21 03:25:38');

-- --------------------------------------------------------

--
-- 資料表結構 `music`
--

CREATE TABLE `music` (
  `id` int(12) NOT NULL,
  `name` varchar(65) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(65) CHARACTER SET utf8mb4 NOT NULL,
  `ename` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `music`
--

INSERT INTO `music` (`id`, `name`, `phone`, `ename`, `email`) VALUES
(17, '阿明', '0919000999', 'jay', '0939cool@gmail.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `music`
--
ALTER TABLE `music`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

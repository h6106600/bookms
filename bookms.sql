-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-20 12:30:13
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bookms`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin@gmail.com', '123', '2020-08-20 06:03:48');

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `book_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `borrow_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `borrow_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `borrow_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`id`, `book_number`, `book_name`, `borrow_status`, `borrow_time`, `borrow_name`, `created_at`) VALUES
(1, '0000000001', '被討厭的勇氣', '1', '2020/8/20', '', '2020-08-20 02:57:51'),
(2, '0000000002', '情緒智商', '0', '0', '', '2020-08-20 02:58:56'),
(3, '0000000003', '網內人', '0', '0', '', '2020-08-20 03:17:44'),
(4, '0000000004', '淒月', '0', '0', '', '2020-08-20 03:18:23'),
(5, '0000000005', '魔笛', '0', '0', '', '2020-08-20 03:18:44'),
(6, '0000000006', 'K.I.N.G.：天災對策室', '0', '0', '', '2020-08-20 03:19:00'),
(7, '0000000007', '13．67', '0', '0', '', '2020-08-20 03:19:32'),
(8, '0000000008', '原子習慣', '0', '0', '', '2020-08-20 03:19:59'),
(9, '0000000009', '諸神的起源', '0', '0', '', '2020-08-20 03:24:28'),
(10, '0000000010', '四季', '0', '0', '', '2020-08-20 03:24:55'),
(11, '0000000011', '真確：扭轉十大直覺偏誤，發現事情比你想的美好', '0', '0', '', '2020-08-20 03:25:18'),
(12, '0000000012', '氣球人', '0', '0', '', '2020-08-20 03:25:41'),
(13, '0000000013', '筷：怪談競演奇物語', '0', '0', '', '2020-08-20 03:26:05');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'user@gmail.com', '123', '2020-08-20 07:57:00'),
(2, 'aaa@gmail.com', '123', '2020-08-20 08:11:32');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

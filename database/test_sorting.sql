-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-09-02 21:38:05
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `quatrefoil`
--

-- --------------------------------------------------------

--
-- 資料表結構 `test_sorting`
--

CREATE TABLE `test_sorting` (
  `id` int(11) NOT NULL,
  `winter_1` int(5) NOT NULL,
  `summer_1` int(5) NOT NULL,
  `autumn_1` int(5) NOT NULL,
  `spring_1` int(5) NOT NULL,
  `winter_2` int(5) NOT NULL,
  `summer_2` int(5) NOT NULL,
  `autumn_2` int(5) NOT NULL,
  `spring_2` int(5) NOT NULL,
  `winter_3` int(5) NOT NULL,
  `summer_3` int(5) NOT NULL,
  `autumn_3` int(5) NOT NULL,
  `spring_3` int(5) NOT NULL,
  `winter_4` int(5) NOT NULL,
  `summer_4` int(5) NOT NULL,
  `autumn_4` int(5) NOT NULL,
  `spring_4` int(5) NOT NULL,
  `season` varchar(10) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `test_sorting`
--
ALTER TABLE `test_sorting`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `test_sorting`
--
ALTER TABLE `test_sorting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-29 00:36:47
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `quatrefoil`
--

-- --------------------------------------------------------

--
-- 資料表結構 `4seasonquiz`
--

CREATE TABLE `4seasonquiz` (
  `id` int(100) NOT NULL,
  `account` varchar(20) NOT NULL,
  `Q1` int(10) NOT NULL,
  `Q2` int(10) NOT NULL,
  `Q3` int(10) NOT NULL,
  `Q4` int(10) NOT NULL,
  `Q5` int(10) NOT NULL,
  `Q6` int(10) NOT NULL,
  `Q7` int(10) NOT NULL,
  `Q8` int(10) NOT NULL,
  `Q9` int(10) NOT NULL,
  `Q10` int(10) NOT NULL,
  `Q11` int(10) NOT NULL,
  `Q12` int(10) NOT NULL,
  `Q13` int(10) NOT NULL,
  `Q14` int(10) NOT NULL,
  `Q15` int(10) NOT NULL,
  `Q16` int(10) NOT NULL,
  `Q17` int(10) NOT NULL,
  `Q18` int(10) NOT NULL,
  `Q19` int(10) NOT NULL,
  `Q20` int(10) NOT NULL,
  `Q21` int(10) NOT NULL,
  `Q22` int(10) NOT NULL,
  `Q23` int(10) NOT NULL,
  `Q24` int(10) NOT NULL,
  `Q25` int(10) NOT NULL,
  `Q26` int(10) NOT NULL,
  `Q27` int(10) NOT NULL,
  `Q28` int(10) NOT NULL,
  `Q29` int(10) NOT NULL,
  `Q30` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `4seasonquiz`
--

INSERT INTO `4seasonquiz` (`id`, `account`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `Q22`, `Q23`, `Q24`, `Q25`, `Q26`, `Q27`, `Q28`, `Q29`, `Q30`) VALUES
(0, '', 0, 2, 2, 2, 2, 3, 1, 2, 1, 3, 2, 1, 2, 2, 2, 2, 2, 2, 3, 2, 3, 2, 3, 3, 2, 2, 2, 2, 4, 5),
(0, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(0, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(0, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

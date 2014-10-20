-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2014 年 2 月 26 日 11:24
-- サーバのバージョン: 5.5.16
-- PHP のバージョン: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `the_stone`
--
CREATE DATABASE `the_stone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `the_stone`;

-- --------------------------------------------------------

--
-- テーブルの構造 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(5) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size_x` int(11) NOT NULL,
  `size_y` int(11) NOT NULL,
  `size_z` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `release` date NOT NULL,
  `detail` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータをダンプしています `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `color`, `size_x`, `size_y`, `size_z`, `weight`, `price`, `release`, `detail`) VALUES
(1, '○○石', '製品１', 'WHITE', 35, 15, 20, 30, 100, '2014-02-24', '某所にて拾ってきた石。<br />\r\n白く透き通るような質感が良い。<br />\r\n汚れも少なく一番のオススメ！'),
(2, '??石', '製品２', 'BLACK', 24, 25, 26, 29, 90, '2014-02-25', '新横浜で拾った石。<br />\r\n黒い。\r\n'),
(3, '複合石', '製品３', 'MIX', 30, 35, 33, 40, 95, '2014-02-26', '新横浜で拾った石。<br />\r\n建築材の破片と思われる。<br />\r\n一部に緑色の綺麗な石が混ざっている。');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

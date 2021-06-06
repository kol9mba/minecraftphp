-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2021 г., 02:14
-- Версия сервера: 5.1.71-community-log
-- Версия PHP: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `lab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ideas`
--

CREATE TABLE IF NOT EXISTS `ideas` (
  `ud` int(11) NOT NULL AUTO_INCREMENT,
  `idea` varchar(255) NOT NULL,
  PRIMARY KEY (`ud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `ideas`
--

INSERT INTO `ideas` (`ud`, `idea`) VALUES
(1, 'dfsfds'),
(2, 'fdsfdsfds'),
(3, 'fff'),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, 'dasdas'),
(9, 'ddad'),
(10, 'dsadsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

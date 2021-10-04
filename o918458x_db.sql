-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2021 г., 03:31
-- Версия сервера: 5.6.47
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `o918458x_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `camp_dates`
--

CREATE TABLE `camp_dates` (
  `id` int(8) NOT NULL,
  `date_from` varchar(256) NOT NULL,
  `date_to` varchar(256) NOT NULL,
  `season` varchar(256) NOT NULL,
  `camp` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_dates`
--

INSERT INTO `camp_dates` (`id`, `date_from`, `date_to`, `season`, `camp`) VALUES
(7, '12/01/2021', '12/02/2021', 'winter', 'Лагерь 333'),
(8, '10/01/2021', '10/02/2021', 'outumn', 'Лагерь 11'),
(9, '10/01/2021', '10/02/2021', 'outumn', 'Лагерь 22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `camp_dates`
--
ALTER TABLE `camp_dates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `camp_dates`
--
ALTER TABLE `camp_dates`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

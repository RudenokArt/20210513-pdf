-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2022 г., 00:58
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
-- Структура таблицы `camp_contacts`
--

CREATE TABLE `camp_contacts` (
  `id` int(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_contacts`
--

INSERT INTO `camp_contacts` (`id`, `name`, `value`, `icon`) VALUES
(1, 'main-site-url', 'https://семейныйлагерь.рф/', ''),
(2, 'phone', '+79184517137', ''),
(5, 'social', 'https://www.instagram.com/familyclub7p/', 'instagram'),
(6, 'social', 'https://vk.com/lager7', 'vk'),
(7, 'social', 'https://tlgg.ru/@Yulia_Pladas', 'telegram'),
(8, 'tag-title', 'Семейный лагерь на море', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `camp_contacts`
--
ALTER TABLE `camp_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `camp_contacts`
--
ALTER TABLE `camp_contacts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

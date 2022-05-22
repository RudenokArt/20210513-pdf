-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2022 г., 01:26
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
  `value` text NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_contacts`
--

INSERT INTO `camp_contacts` (`id`, `name`, `value`, `icon`) VALUES
(1, 'main-site-url', 'https://семейныйлагерь.рф/', ''),
(2, 'phone', '+79184517137 ', ''),
(5, 'social', 'https://www.instagram.com/familyclub7p/', 'instagram'),
(6, 'social', 'https://vk.com/lager7', 'vk'),
(7, 'social', 'https://tlgg.ru/@Yulia_Pladas', 'telegram'),
(8, 'tag-title', 'Семейный лагерь на море', ''),
(9, 'email', 'Lager7putei@gmail.com', ''),
(10, 'contacts_pdf', '<p><strong>Индивидуальный предприниматель Пладас<br>Юлия Владимировна</strong> <br></p><p>ОГРНИП 321237500016519, <br></p><p>ИНН: 434592130436<br>Дата рождения: 20.07.1987 г.р<br>Паспорт: 3311 091887, выдан ОУФМС России по Кировской<br>области в Нововятском районе города Кирова, 15 августа 2011<br>года<br>Адрес регистрации: Краснодарский край, Северский район,<br>станица Григорьевская, территория Здравое, дом 3<br>Электронная почта: lager7putei@gmail.com<br>Телефон: 89184517137<br>Банковские реквизиты:<br>Расчетный счет: 4080 2810 3000 0181 5612<br>Банк: АО ТИНЬКОФФ БАНК<br>ИНН банка: 7710140679<br>БИК банка: 044525974<br></p>', ''),
(11, 'supplement_1', 'N', ''),
(12, 'supplement_2', 'Y', ''),
(13, 'supplement_3', 'Y', ''),
(15, 'password', '12345', '');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

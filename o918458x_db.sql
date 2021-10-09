-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2021 г., 01:06
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

-- --------------------------------------------------------

--
-- Структура таблицы `camp_paragraph`
--

CREATE TABLE `camp_paragraph` (
  `id` int(8) NOT NULL,
  `paragraph_type` varchar(50) NOT NULL,
  `paragraph_number` int(8) NOT NULL,
  `paragraph_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_paragraph`
--

INSERT INTO `camp_paragraph` (`id`, `paragraph_type`, `paragraph_number`, `paragraph_text`) VALUES
(3, 'contract', 1, '3.1. При заключении Договора, Заказчик обязуется внести Исполнителю обеспечительный платеж в размере 15 000 (Пятнадцать тысяч) рублей, для обеспечения своевременной и надлежащей оплаты услуг, на основании п. 2 Договора.\r\n        '),
(5, 'contract', 2, '3.2. Моментом внесения обеспечительного платежа признается поступление соответствующих денежных средств на расчетный счет Исполнителя, при этом в соответствующих платежных документах должны быть указаны: назначение платежа: <i>“Обеспечительный платеж по Договору от _____”</i>. В случае оплаты обеспечительного платежа частями (несколькими платежами), моментом внесения обеспечительного платежа признается поступление на расчетный счет Исполнителя последней части суммы обеспечительного платежа.\r\n        '),
(6, 'contract', 3, '3.3. Обеспечительный платеж, не является платежом по Договору, выполняет исключительно обеспечительную функцию, и по соглашению сторон гарантирует Исполнителю надлежащее исполнение обязательства, предусмотренного п. 2 Договора.\r\n        ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `camp_dates`
--
ALTER TABLE `camp_dates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `camp_paragraph`
--
ALTER TABLE `camp_paragraph`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `camp_dates`
--
ALTER TABLE `camp_dates`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `camp_paragraph`
--
ALTER TABLE `camp_paragraph`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

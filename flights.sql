-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 03 2018 г., 17:07
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `flights`
--

-- --------------------------------------------------------

--
-- Структура таблицы `arrival`
--

CREATE TABLE `arrival` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(255) NOT NULL,
  `dep_point` varchar(255) NOT NULL,
  `arr_point` varchar(255) NOT NULL,
  `dep_time` datetime NOT NULL,
  `arr_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `arrival`
--

INSERT INTO `arrival` (`flight_id`, `flight_name`, `dep_point`, `arr_point`, `dep_time`, `arr_time`, `status`) VALUES
(1, 'A222B', 'Париж', 'Москва', '2018-12-03 04:00:00', '2018-12-03 08:00:00', 1),
(2, 'B22C', 'Рига', 'Москва', '2018-12-03 07:00:00', '2018-12-03 11:00:00', 1),
(3, 'C22D', 'Таллин', 'Москва', '2018-12-03 13:00:00', '2018-12-03 15:00:00', 2),
(4, 'D22E', 'Вашингтон', 'Москва', '2018-12-03 20:00:00', '2018-12-04 07:00:00', 2),
(5, 'E22F', 'Мадрид', 'Москва', '2018-12-03 17:00:00', '2018-12-03 21:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `departure`
--

CREATE TABLE `departure` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(255) NOT NULL,
  `dep_point` varchar(255) NOT NULL,
  `arr_point` varchar(255) NOT NULL,
  `dep_time` datetime NOT NULL,
  `arr_time` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `departure`
--

INSERT INTO `departure` (`flight_id`, `flight_name`, `dep_point`, `arr_point`, `dep_time`, `arr_time`, `status`) VALUES
(1, 'A11B', 'Москва', 'Лондон', '2018-12-03 16:00:00', '2018-12-03 19:00:00', 1),
(2, 'B11C', 'Москва', 'Милан', '2018-12-03 20:00:00', '2018-12-03 23:00:00', 1),
(3, 'C11D', 'Москва', 'Нью-Йорк', '2018-12-03 16:00:00', '2018-12-04 02:00:00', 2),
(4, 'D11E', 'Москва', 'Берлин', '2018-12-03 16:00:00', '2018-12-03 20:00:00', 2),
(5, 'E11F', 'Москва', 'Дубаи', '2018-12-03 13:00:00', '2018-12-03 21:00:00', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `arrival`
--
ALTER TABLE `arrival`
  ADD PRIMARY KEY (`flight_id`);

--
-- Индексы таблицы `departure`
--
ALTER TABLE `departure`
  ADD PRIMARY KEY (`flight_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `arrival`
--
ALTER TABLE `arrival`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `departure`
--
ALTER TABLE `departure`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

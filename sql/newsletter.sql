-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2017 г., 11:01
-- Версия сервера: 5.5.50-log
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newsletter`
--
CREATE DATABASE IF NOT EXISTS `newsletter` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `newsletter`;

-- --------------------------------------------------------

--
-- Структура таблицы `ListOfLectureHall`
--

DROP TABLE IF EXISTS `ListOfLectureHall`;
CREATE TABLE IF NOT EXISTS `ListOfLectureHall` (
  `id_lecture_hall` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Список аудиторий';

--
-- Очистить таблицу перед добавлением данных `ListOfLectureHall`
--

TRUNCATE TABLE `ListOfLectureHall`;
--
-- Дамп данных таблицы `ListOfLectureHall`
--

INSERT INTO `ListOfLectureHall` (`id_lecture_hall`, `name`) VALUES
(1, '104'),
(2, '107'),
(3, '109'),
(4, '201'),
(5, '207'),
(6, '209'),
(7, '300'),
(8, '400'),
(9, '401 (мал. акт. зал)'),
(10, '405'),
(11, '406'),
(12, '409'),
(13, 'Актовый зал');

-- --------------------------------------------------------

--
-- Структура таблицы `ListOfPair`
--

DROP TABLE IF EXISTS `ListOfPair`;
CREATE TABLE IF NOT EXISTS `ListOfPair` (
  `id_pair` int(10) unsigned NOT NULL COMMENT 'Идентификатор и номер пары',
  `start_time` varchar(255) NOT NULL COMMENT 'Начало пары',
  `end_time` varchar(255) NOT NULL COMMENT 'Конец пары'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Список пар';

--
-- Очистить таблицу перед добавлением данных `ListOfPair`
--

TRUNCATE TABLE `ListOfPair`;
--
-- Дамп данных таблицы `ListOfPair`
--

INSERT INTO `ListOfPair` (`id_pair`, `start_time`, `end_time`) VALUES
(1, '9:00', '10:30'),
(2, '10:40', '12:10'),
(3, '12:40', '14:10'),
(4, '14:20', '15:50'),
(5, '16:20', '17:50'),
(6, '18:00', '19:30'),
(7, '19:40', '21:10');

-- --------------------------------------------------------

--
-- Структура таблицы `Notes`
--

DROP TABLE IF EXISTS `Notes`;
CREATE TABLE IF NOT EXISTS `Notes` (
  `id_note` int(10) unsigned NOT NULL COMMENT 'Идентификатор записки',
  `caption` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Объявления';

--
-- Очистить таблицу перед добавлением данных `Notes`
--

TRUNCATE TABLE `Notes`;
-- --------------------------------------------------------

--
-- Структура таблицы `Schedule`
--

DROP TABLE IF EXISTS `Schedule`;
CREATE TABLE IF NOT EXISTS `Schedule` (
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Расписание (в формате JSON)';

--
-- Очистить таблицу перед добавлением данных `Schedule`
--

TRUNCATE TABLE `Schedule`;
--
-- Дамп данных таблицы `Schedule`
--

INSERT INTO `Schedule` (`data`) VALUES
('[["\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","","","","","","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f"],["","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","",""],["","","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","","","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f",""],["\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","","","","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f",""],["","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f"],["","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","",""],["\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","","\\u0412 \\u0433\\u0440\\u0443\\u043f\\u043f\\u0435 403 \\u0432\\u043c\\u0435\\u0441\\u0442\\u043e \\u0438\\u0441\\u0442\\u043e\\u0440\\u0438\\u0438 \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0444\\u0438\\u043b\\u043e\\u0441\\u043e\\u0444\\u0438\\u044f","","",""]]');

-- --------------------------------------------------------

--
-- Структура таблицы `Settings`
--

DROP TABLE IF EXISTS `Settings`;
CREATE TABLE IF NOT EXISTS `Settings` (
  `id_settings` int(10) unsigned NOT NULL,
  `update_interval` int(11) NOT NULL COMMENT 'Интервал обновления главной страницы'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `Settings`
--

TRUNCATE TABLE `Settings`;
--
-- Дамп данных таблицы `Settings`
--

INSERT INTO `Settings` (`id_settings`, `update_interval`) VALUES
(1, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ListOfLectureHall`
--
ALTER TABLE `ListOfLectureHall`
  ADD PRIMARY KEY (`id_lecture_hall`);

--
-- Индексы таблицы `ListOfPair`
--
ALTER TABLE `ListOfPair`
  ADD PRIMARY KEY (`id_pair`);

--
-- Индексы таблицы `Notes`
--
ALTER TABLE `Notes`
  ADD PRIMARY KEY (`id_note`);

--
-- Индексы таблицы `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ListOfLectureHall`
--
ALTER TABLE `ListOfLectureHall`
  MODIFY `id_lecture_hall` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `ListOfPair`
--
ALTER TABLE `ListOfPair`
  MODIFY `id_pair` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор и номер пары',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `Notes`
--
ALTER TABLE `Notes`
  MODIFY `id_note` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор записки';
--
-- AUTO_INCREMENT для таблицы `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id_settings` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

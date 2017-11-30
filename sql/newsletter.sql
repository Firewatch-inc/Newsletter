-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2017 г., 18:14
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
-- Структура таблицы `Courses`
--

DROP TABLE IF EXISTS `Courses`;
CREATE TABLE IF NOT EXISTS `Courses` (
  `id_course` int(10) unsigned NOT NULL COMMENT 'Идентификатор',
  `caption` varchar(255) NOT NULL COMMENT 'Название',
  `address` varchar(255) NOT NULL,
  `contactor` varchar(255) NOT NULL COMMENT 'Ответственный'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='Курсы';

--
-- Очистить таблицу перед добавлением данных `Courses`
--

TRUNCATE TABLE `Courses`;
--
-- Дамп данных таблицы `Courses`
--

INSERT INTO `Courses` (`id_course`, `caption`, `address`, `contactor`) VALUES
(2, 'Борьба (вольная, рукопашный бой)', 'ул.Земляной Вал, 71', 'Албычаков Аркадий   Андреевич'),
(3, 'Плавание (юноши, девушки)', 'ул.Земляной Вал, 71)', 'Гершун Герман Станиславович'),
(4, 'Волейбол (юноши, девушки)', '', 'Лахтин Артем Юрьевич '),
(5, 'Легкая атлетика (ГТО)', '', 'Щепелев Александр Анатольевич'),
(6, 'Баскетбол (юноши, девушки)', '', 'Лахтин Артем Юрьевич '),
(7, 'Боевые виды искусств (самбо, каратэ и т.д.)', 'ул.Земляной Вал, 71)', 'Тоноян Хорен Аветисович'),
(8, 'Казачье историческое фехтование и фланкировка', 'ул.Земляной Вал, 71)', 'Капырин Петр Алексеевич '),
(9, 'Настольный теннис (юноши, девушки)', '', 'Ушаков Георгий '),
(10, 'Пилатес', 'ул.Земляной Вал, 71)', 'Колокатова Лариса Федоровна'),
(11, 'Дартс (юноши, девушки)', '', 'Воробьев Андрей Алексеевич'),
(12, 'Футбол (юноши)', '', 'Лахтин Артем Юрьевич '),
(13, 'Силовое троеборье (пауэрлифтинг)', 'ул.Земляной Вал, 71)', 'Масленников Игорь Марселевич'),
(14, 'Шахматы  (юноши, девушки)', 'ул.Земляной Вал, 71)', 'Лахтин Артем Юрьевич '),
(15, 'Скандинавская ходьба, ЛФК', '', 'Колокатова Лариса Федоровна'),
(16, 'Оздоровительное плавание и СМГ', 'ул.Земляной Вал, 71)', 'Инструкторы бассейна'),
(17, 'ОФП по институтам (элективные курсы)', '', 'Преподаватели физкультуры');

-- --------------------------------------------------------

--
-- Структура таблицы `ListOfDays`
--

DROP TABLE IF EXISTS `ListOfDays`;
CREATE TABLE IF NOT EXISTS `ListOfDays` (
  `id_day` int(10) unsigned NOT NULL COMMENT 'Идентификатор',
  `caption` varchar(255) NOT NULL COMMENT 'Полное название дня',
  `short_caption` varchar(255) NOT NULL COMMENT 'Сокращённое название дня'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Дни недели';

--
-- Очистить таблицу перед добавлением данных `ListOfDays`
--

TRUNCATE TABLE `ListOfDays`;
--
-- Дамп данных таблицы `ListOfDays`
--

INSERT INTO `ListOfDays` (`id_day`, `caption`, `short_caption`) VALUES
(1, 'Понедельник', 'ПН'),
(2, 'Вторник', 'ВТ'),
(3, 'Среда', 'СР'),
(4, 'Четверг', 'ЧТ'),
(5, 'Пятница', 'ПТ'),
(6, 'Суббота', 'СБ'),
(7, 'Воскресенье', 'ВС');

-- --------------------------------------------------------

--
-- Структура таблицы `ListOfInstitute`
--

DROP TABLE IF EXISTS `ListOfInstitute`;
CREATE TABLE IF NOT EXISTS `ListOfInstitute` (
  `id_institute` int(11) unsigned NOT NULL COMMENT 'Идентификатор',
  `caption` varchar(255) NOT NULL COMMENT 'Название',
  `short_caption` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL COMMENT 'Адрес'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Институты';

--
-- Очистить таблицу перед добавлением данных `ListOfInstitute`
--

TRUNCATE TABLE `ListOfInstitute`;
--
-- Дамп данных таблицы `ListOfInstitute`
--

INSERT INTO `ListOfInstitute` (`id_institute`, `caption`, `short_caption`, `address`) VALUES
(1, 'ИНСТИТУТ СИСТЕМНОЙ АВТОМАТИЗАЦИИ, ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И ПРЕДПРИНИМАТЕЛЬСТВА', 'САИТП', 'Москва, ул. Новая Басманная, д. 9 (главный корпус); Москва, ул. Талалихина, д. 31 '),
(2, 'ИНСТИТУТ ТЕХНОЛОГИЙ ПИЩЕВЫХ ПРОДУКТОВ И ТЕХНОЛОГИЧЕСКОГО МЕНЕДЖМЕНТА', 'ТППИТМ', 'Москва, ул. Николоямская, д. 30'),
(3, 'ИНСТИТУТ СОЦИАЛЬНО-ГУМАНИТАРНЫХ ТЕХНОЛОГИЙ', 'СГТ', ' Москва, Земляной вал, д. 73'),
(4, 'ИНСТИТУТ БИОТЕХНОЛОГИЙ И РЫБНОГО ХОЗЯЙСТВА', 'БИРХ', 'Москва, ул. Шаболовка, д. 14, стр. 9 '),
(5, 'ИНСТИТУТ ЭКОНОМИКИ, МЕНЕДЖМЕНТА И ПРАВА', 'ЭМиП', ' Москва, ул. Народного ополчения, д. 38, корп. 2, стр. 2'),
(6, 'УНИВЕРСИТЕТСКИЙ КОЛЛЕДЖ ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ', 'УКИТ', 'Москва, Костомаровская наб., д. 29');

-- --------------------------------------------------------

--
-- Структура таблицы `ScheduleCourses`
--

DROP TABLE IF EXISTS `ScheduleCourses`;
CREATE TABLE IF NOT EXISTS `ScheduleCourses` (
  `id_course_schedule` int(11) unsigned NOT NULL,
  `id_course` int(10) unsigned NOT NULL,
  `day` int(10) unsigned NOT NULL,
  `start_time` varchar(6) NOT NULL,
  `end_time` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Очистить таблицу перед добавлением данных `ScheduleCourses`
--

TRUNCATE TABLE `ScheduleCourses`;
--
-- Дамп данных таблицы `ScheduleCourses`
--

INSERT INTO `ScheduleCourses` (`id_course_schedule`, `id_course`, `day`, `start_time`, `end_time`) VALUES
(1, 2, 2, '16:00', '18:00'),
(2, 2, 5, '16:00', '18:00'),
(3, 2, 6, '16:00', '18:00');

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

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `vcoursesschedule`
--
DROP VIEW IF EXISTS `vcoursesschedule`;
CREATE TABLE IF NOT EXISTS `vcoursesschedule` (
`id_course` int(10) unsigned
,`course_caption` varchar(255)
,`course_short_caption` varchar(255)
,`day` int(10) unsigned
,`start_time` varchar(6)
,`end_time` varchar(6)
);

-- --------------------------------------------------------

--
-- Структура для представления `vcoursesschedule`
--
DROP TABLE IF EXISTS `vcoursesschedule`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `vcoursesschedule` AS select `sc`.`id_course` AS `id_course`,`ld`.`caption` AS `course_caption`,`ld`.`short_caption` AS `course_short_caption`,`sc`.`day` AS `day`,`sc`.`start_time` AS `start_time`,`sc`.`end_time` AS `end_time` from ((`schedulecourses` `sc` join `courses` `c` on((`sc`.`id_course` = `c`.`id_course`))) join `listofdays` `ld` on((`sc`.`day` = `ld`.`id_day`)));

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`id_course`),
  ADD UNIQUE KEY `caption` (`caption`);

--
-- Индексы таблицы `ListOfDays`
--
ALTER TABLE `ListOfDays`
  ADD PRIMARY KEY (`id_day`),
  ADD KEY `id_day` (`id_day`);

--
-- Индексы таблицы `ListOfInstitute`
--
ALTER TABLE `ListOfInstitute`
  ADD PRIMARY KEY (`id_institute`),
  ADD UNIQUE KEY `caption` (`caption`),
  ADD UNIQUE KEY `short_caption` (`short_caption`),
  ADD KEY `id_institute` (`id_institute`);

--
-- Индексы таблицы `ScheduleCourses`
--
ALTER TABLE `ScheduleCourses`
  ADD PRIMARY KEY (`id_course_schedule`),
  ADD KEY `id_course_schedule` (`id_course_schedule`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `day` (`day`);

--
-- Индексы таблицы `Settings`
--
ALTER TABLE `Settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id_course` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор',AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `ListOfDays`
--
ALTER TABLE `ListOfDays`
  MODIFY `id_day` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `ListOfInstitute`
--
ALTER TABLE `ListOfInstitute`
  MODIFY `id_institute` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор',AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `ScheduleCourses`
--
ALTER TABLE `ScheduleCourses`
  MODIFY `id_course_schedule` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id_settings` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ScheduleCourses`
--
ALTER TABLE `ScheduleCourses`
  ADD CONSTRAINT `schedulecourses_ibfk_1` FOREIGN KEY (`day`) REFERENCES `ListOfDays` (`id_day`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedulecourses_ibfk_3` FOREIGN KEY (`id_course`) REFERENCES `Courses` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

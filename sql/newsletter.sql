-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 01 2017 г., 10:47
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

CREATE TABLE IF NOT EXISTS `Courses` (
  `id_course` int(10) unsigned NOT NULL COMMENT 'Идентификатор',
  `caption` varchar(255) NOT NULL COMMENT 'Название',
  `address` varchar(255) NOT NULL,
  `contactor` varchar(255) NOT NULL COMMENT 'Ответственный'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='Курсы';

--
-- Дамп данных таблицы `Courses`
--

INSERT INTO `Courses` (`id_course`, `caption`, `address`, `contactor`) VALUES
(2, 'Борьба (вольная, рукопашный бой)', 'ул.Земляной Вал, 71', 'Албычаков Аркадий   Андреевич'),
(3, 'Плавание (юноши, девушки)', 'ул.Земляной Вал, 71', 'Гершун Герман Станиславович'),
(4, 'Волейбол (юноши, девушки)', 'Костомаровская наб.29', 'Лахтин Артем Юрьевич '),
(5, 'Легкая атлетика (ГТО)', 'ул.Народного Ополчения, 38', 'Щепелев Александр Анатольевич'),
(6, 'Баскетбол (юноши, девушки)', 'Костомаровская наб.29', 'Лахтин Артем Юрьевич '),
(7, 'Боевые виды искусств (самбо, каратэ и т.д.)', 'ул.Земляной Вал, 71', 'Тоноян Хорен Аветисович'),
(8, 'Казачье историческое фехтование и фланкировка', 'ул.Земляной Вал, 71', 'Капырин Петр Алексеевич '),
(9, 'Настольный теннис (юноши, девушки)', 'ул.Народного Ополчения, 38', 'Ушаков Георгий '),
(10, 'Пилатес', 'ул.Земляной Вал, 71', 'Колокатова Лариса Федоровна'),
(11, 'Дартс (юноши, девушки)', 'ул.Народного Ополчения, 38', 'Воробьев Андрей Алексеевич'),
(12, 'Футбол (юноши)', 'Костомаровская наб.29', 'Лахтин Артем Юрьевич '),
(13, 'Силовое троеборье (пауэрлифтинг)', 'ул.Земляной Вал, 71', 'Масленников Игорь Марселевич'),
(14, 'Шахматы  (юноши, девушки)', 'ул.Земляной Вал, 71', 'Лахтин Артем Юрьевич '),
(15, 'Скандинавская ходьба, ЛФК', 'ул.Народного Ополчения, 38', 'Колокатова Лариса Федоровна'),
(16, 'Оздоровительное плавание и СМГ', 'ул.Земляной Вал, 71', 'Инструкторы бассейна'),
(17, 'ОФП по институтам (элективные курсы)', 'по учебному расписанию', 'Преподаватели физкультуры');

-- --------------------------------------------------------

--
-- Структура таблицы `ListOfDays`
--

CREATE TABLE IF NOT EXISTS `ListOfDays` (
  `id_day` int(10) unsigned NOT NULL COMMENT 'Идентификатор',
  `caption` varchar(255) NOT NULL COMMENT 'Полное название дня',
  `short_caption` varchar(255) NOT NULL COMMENT 'Сокращённое название дня'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Дни недели';

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

CREATE TABLE IF NOT EXISTS `ListOfInstitute` (
  `id_institute` int(11) unsigned NOT NULL COMMENT 'Идентификатор',
  `caption` varchar(255) NOT NULL COMMENT 'Название',
  `short_caption` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL COMMENT 'Адрес'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Институты';

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

CREATE TABLE IF NOT EXISTS `ScheduleCourses` (
  `id_course_schedule` int(11) unsigned NOT NULL,
  `id_course` int(10) unsigned NOT NULL,
  `day` int(10) unsigned NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=801 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ScheduleCourses`
--

INSERT INTO `ScheduleCourses` (`id_course_schedule`, `id_course`, `day`, `start_time`, `end_time`) VALUES
(685, 6, 1, '12', '12'),
(688, 6, 2, '', ''),
(689, 6, 3, '15', '15'),
(690, 6, 4, '', ''),
(691, 6, 5, '', ''),
(692, 6, 6, '', ''),
(693, 6, 7, '', ''),
(694, 7, 1, '', ''),
(695, 7, 2, '', ''),
(696, 7, 3, '', ''),
(697, 7, 4, '', ''),
(698, 7, 5, '', ''),
(699, 7, 6, '', ''),
(700, 7, 7, '', ''),
(701, 2, 1, '', ''),
(702, 2, 2, '', ''),
(703, 2, 3, '', ''),
(704, 2, 4, '', ''),
(705, 2, 5, '', ''),
(706, 2, 6, '', ''),
(707, 2, 7, '', ''),
(708, 4, 1, '', ''),
(709, 4, 2, '', ''),
(710, 4, 3, '', ''),
(711, 4, 4, '', ''),
(712, 4, 5, '', ''),
(713, 4, 6, '', ''),
(714, 4, 7, '', ''),
(715, 11, 1, '', ''),
(716, 11, 2, '', ''),
(717, 11, 3, '', ''),
(718, 11, 4, '', ''),
(719, 11, 5, '', ''),
(720, 11, 6, '', ''),
(721, 11, 7, '', ''),
(722, 8, 1, '', ''),
(723, 8, 2, '', ''),
(724, 8, 3, '', ''),
(725, 8, 4, '', ''),
(726, 8, 5, '', ''),
(727, 8, 6, '', ''),
(728, 8, 7, '', ''),
(729, 5, 1, '', ''),
(730, 5, 2, '', ''),
(731, 5, 3, '', ''),
(732, 5, 4, '', ''),
(733, 5, 5, '', ''),
(734, 5, 6, '', ''),
(735, 5, 7, '', ''),
(736, 9, 1, '', ''),
(737, 9, 2, '', ''),
(738, 9, 3, '', ''),
(739, 9, 4, '', ''),
(740, 9, 5, '', ''),
(741, 9, 6, '', ''),
(742, 9, 7, '', ''),
(743, 16, 1, '', ''),
(744, 16, 2, '', ''),
(745, 16, 3, '', ''),
(746, 16, 4, '', ''),
(747, 16, 5, '', ''),
(748, 16, 6, '', ''),
(749, 16, 7, '', ''),
(750, 17, 1, '', ''),
(751, 17, 2, '', ''),
(752, 17, 3, '', ''),
(753, 17, 4, '', ''),
(754, 17, 5, '', ''),
(755, 17, 6, '', ''),
(756, 17, 7, '', ''),
(757, 10, 1, '', ''),
(758, 10, 2, '', ''),
(759, 10, 3, '', ''),
(760, 10, 4, '', ''),
(761, 10, 5, '', ''),
(762, 10, 6, '', ''),
(763, 10, 7, '', ''),
(764, 3, 1, '', ''),
(765, 3, 2, '', ''),
(766, 3, 3, '', ''),
(767, 3, 4, '', ''),
(768, 3, 5, '', ''),
(769, 3, 6, '', ''),
(770, 3, 7, '', ''),
(771, 13, 1, '', ''),
(772, 13, 2, '', ''),
(773, 13, 3, '', ''),
(774, 13, 4, '', ''),
(775, 13, 5, '', ''),
(776, 13, 6, '', ''),
(777, 13, 7, '', ''),
(778, 15, 1, '', ''),
(779, 15, 2, '', ''),
(780, 15, 3, '', ''),
(781, 15, 4, '', ''),
(782, 15, 5, '', ''),
(783, 15, 6, '', ''),
(784, 15, 7, '', ''),
(785, 12, 1, '', ''),
(786, 12, 2, '', ''),
(787, 12, 3, '', ''),
(788, 12, 4, '', ''),
(789, 12, 5, '', ''),
(790, 12, 6, '', ''),
(791, 12, 7, '', ''),
(792, 14, 1, '', ''),
(793, 14, 2, '', ''),
(794, 14, 3, '', ''),
(795, 14, 4, '', ''),
(796, 14, 5, '', ''),
(797, 14, 6, '', ''),
(798, 14, 7, '', ''),
(799, 6, 3, '15', '15'),
(800, 7, 2, '14', '15');

-- --------------------------------------------------------

--
-- Структура таблицы `Settings`
--

CREATE TABLE IF NOT EXISTS `Settings` (
  `id_settings` int(10) unsigned NOT NULL,
  `update_interval` int(11) NOT NULL COMMENT 'Интервал обновления главной страницы'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Settings`
--

INSERT INTO `Settings` (`id_settings`, `update_interval`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `vcoursesschedule`
--
CREATE TABLE IF NOT EXISTS `vcoursesschedule` (
`id_course` int(10) unsigned
,`course_caption` varchar(255)
,`course_short_caption` varchar(255)
,`day` int(10) unsigned
,`start_time` varchar(255)
,`end_time` varchar(255)
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
  MODIFY `id_course` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Идентификатор',AUTO_INCREMENT=20;
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
  MODIFY `id_course_schedule` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=801;
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

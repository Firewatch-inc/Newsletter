DROP DATABASE IF EXISTS `newsletter`;
CREATE DATABASE IF NOT EXISTS `newsletter` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `newsletter`;

/* Создание таблицы "Пользователи" */
CREATE TABLE IF NOT EXISTS `news` (
	id_news int PRIMARY KEY AUTO_INCREMENT,
    caption varchar(255) NOT NULL,
    content text NOT NULL,
    date datetime NOT NULL
) ENGINE = InnoDB	 CHARACTER SET = UTF8;


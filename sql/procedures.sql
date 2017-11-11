use `newsletter`;

DROP PROCEDURE IF EXISTS addNews;
DROP PROCEDURE IF EXISTS removeNews;
DROP PROCEDURE IF EXISTS changeNewsCaption;
DROP PROCEDURE IF EXISTS changeNewsContent;

DELIMITER //

/*
	Хранимые процедуры для таблицы News
*/

CREATE PROCEDURE addNews(
	n_caption varchar(255), n_content text, n_author varchar(255), n_date date
)
BEGIN
	INSERT INTO `news`
    (`caption`, `content`, `author`, `date`)
    VALUES
    (n_caption, n_content, n_author, n_date);
END;

CREATE PROCEDURE removeNews(
	id_news int
)
BEGIN
	DELETE FROM `news` WHERE `id_news`=id_news;
END;

CREATE PROCEDURE changeNewsCaption(
	id_news int, new_caption varchar(255)
)
BEGIN
	UPDATE `news` SET `caption`=new_caption WHERE `id_news`=id_news;
END;

CREATE PROCEDURE changeNewsContent(
	id_news int, new_content text
)
BEGIN
	UPDATE `news` SET `content`=new_content WHERE `id_news`=id_news;
END;


//

DELIMITER ;
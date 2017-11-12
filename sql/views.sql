use newsletter;

DROP VIEW IF EXISTS vNews;

CREATE VIEW vNews(n_caption, n_content, n_author, n_date) 
AS SELECT `caption`, `content`, `author`, `date` FROM `news`
WHERE `date` >= NOW() OR `date` <= ADDDATE(NOW(), INTERVAL 7 DAY) 
ORDER BY `date`;


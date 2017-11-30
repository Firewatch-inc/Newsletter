use newsletter;

DROP VIEW IF EXISTS vNews;

CREATE VIEW vNews(n_caption, n_content, n_author, n_date) 
AS SELECT `caption`, `content`, `author`, `date` FROM `news`
WHERE `date` >= NOW() OR `date` <= ADDDATE(NOW(), INTERVAL 7 DAY) 
ORDER BY `date`;

CREATE VIEW vCoursesSchedule (id_course, course_caption, course_short_caption, day, start_time, end_time)
AS SELECT sc.id_course, ld.caption, ld.short_caption, sc.day, sc.start_time, sc.end_time FROM `ScheduleCourses` sc
	INNER JOIN `Courses` c ON sc.id_course=c.id_course
    INNER JOIN `ListOfDays` ld ON sc.day=ld.id_day;
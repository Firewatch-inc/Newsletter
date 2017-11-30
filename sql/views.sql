use newsletter;

CREATE VIEW vCoursesSchedule (id_course, course_caption, course_short_caption, day, start_time, end_time)
AS SELECT sc.id_course, ld.caption, ld.short_caption, sc.day, sc.start_time, sc.end_time FROM `ScheduleCourses` sc
	INNER JOIN `Courses` c ON sc.id_course=c.id_course
    INNER JOIN `ListOfDays` ld ON sc.day=ld.id_day;
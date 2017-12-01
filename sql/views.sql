use newsletter;

DROP VIEW IF EXISTS vCoursesSchedule;
DROP VIEW IF EXISTS vGroups;

CREATE VIEW vCoursesSchedule (id_course, course_caption, course_short_caption, day, start_time, end_time)
AS SELECT sc.id_course, ld.caption, ld.short_caption, sc.day, sc.start_time, sc.end_time FROM `ScheduleCourses` sc
	INNER JOIN `Courses` c ON sc.id_course=c.id_course
    INNER JOIN `ListOfDays` ld ON sc.day=ld.id_day;
	
	
CREATE VIEW vGroups (id_group, group_caption, education_form_caption, education_course, specialty_caption)
AS SELECT g.id_group, g.caption as group_caption, lef.caption as education_form_caption, lec.number as education_course, ls.caption as specialty_caption FROM `Groups` g
	INNER JOIN `ListOfEducationForm` lef ON g.id_education_form=lef.id_education_form
    INNER JOIN `ListOfEducationCourse` lec ON g.id_education_course=lec.id_education_course
    INNER JOIN `ListOfSpecialty` ls ON g.specialty=ls.id_specialty
    
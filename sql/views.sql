use newsletter;

DROP VIEW IF EXISTS vCoursesSchedule;
DROP VIEW IF EXISTS vMainSchedule;
DROP VIEW IF EXISTS vGroups;

CREATE VIEW vCoursesSchedule (id_course, course_caption, course_short_caption, day, start_time, end_time)
  AS SELECT sc.id_course,
       ld.caption,
       ld.short_caption,
       sc.day,
       sc.start_time,
       sc.end_time
     FROM `ScheduleCourses` sc
       INNER JOIN `Courses` c ON sc.id_course=c.id_course
       INNER JOIN `ListOfDays` ld ON sc.day=ld.id_day;
	
CREATE VIEW vMainSchedule (id_group, day, pair, pair_start, pair_end, subject_1, subject_2, lecture_hall)
  AS SELECT g.id_group,
       sm.day,
       lp.number,
       lp.start_time,
       lp.end_time,
       ls_1.caption,
       ls_2.caption,
       sm.lecture_hall
     FROM `ScheduleMain` sm
       INNER JOIN `Groups` g ON sm.id_group=g.id_group
       INNER JOIN `ListOfPair` lp ON sm.id_pair=lp.id_pair
       INNER JOIN `ListOfSubject` ls_1 ON sm.id_subject_1=ls_1.id_subject
       INNER JOIN `ListOfSubject` ls_2 ON sm.id_subject_2=ls_2.id_subject
     ORDER BY sm.id_pair;


CREATE VIEW vGroups (id_group, institute, institute_caption, group_caption, education_form_caption, education_form, education_course, specialty_caption)
  AS SELECT g.id_group,
       g.id_institute as institute,
	   li.caption as institute_caption,
       g.caption as group_caption,
       lef.caption as education_form_caption,
       g.id_education_form as education_form,
       lec.number as education_course,
       ls.caption as specialty_caption
     FROM `Groups` g
       INNER JOIN `ListOfEducationForm` lef ON g.id_education_form=lef.id_education_form
       INNER JOIN `ListOfEducationCourse` lec ON g.id_education_course=lec.id_education_course
       INNER JOIN `ListOfSpecialty` ls ON g.specialty=ls.id_specialty
	   INNER JOIN `ListOfInstitute` li ON g.id_institute=li.id_institute

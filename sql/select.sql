
USE `newsletter`;

SELECT g.id_institute,
  g.id_education_course,
  g.id_education_form,
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

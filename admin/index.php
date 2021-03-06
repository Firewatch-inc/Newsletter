<?php
	
	require_once "start.php";
	
	if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
		$CT->Show("login.tpl");
		
		if (!empty($_POST['loginButton'])) {
			$login = htmlspecialchars($_POST['login']);
			$password = md5($_POST['passwd']);
			
			if ((!empty($login)) && (!empty($password))) {
                
                $get_admin_data = $DB->prepare("SELECT * FROM `admins` WHERE `email`=:email AND `password`=:password");
                
                $get_admin_data->bindValue(":email", $login);
                $get_admin_data->bindValue(":password", $password);
                
                $admin_data = array();
                if ($get_admin_data->execute()) {
                    $admin_data = $get_admin_data->fetchAll(PDO::FETCH_ASSOC);
                    $admin_data = $admin_data[0];
                } else {
                    die("Произошла ошибка при аутентификации");
                }
                
                if (!empty($admin_data)) {
					$_SESSION['admin'] = new User($login, $password);
					CTools::redirect("index.php");
                } else {
                    CTools::Message("Пользователь не найден");
                }
			} else {
				CTools::Message("Поля с логином и паролем не могут быть пустыми");
			}
			
		}

	} elseif (($_SESSION['admin'] instanceof User) && 
                isAdmin($_SESSION['admin']->login(), $_SESSION['admin']->password())
	) {

		$CT->assign("courses", $CoursesManager->get());
		$CT->assign("main_schedule", $ScheduleManager->getSchedule($_SESSION['current_group']));
		$CT->assign("courses_schedule", $CoursesManager->getSchedule());
		$CT->assign("institutes", $InstitutesManager->get());
		$CT->assign("subjects", $SubjectsManager->get());
		$CT->assign("pairs", $PairsManager->get());
		$CT->assign("days", $DaysManager->getStudyDays());
		$CT->assign("groups", $GroupsManager->get());
		$CT->assign("count_groups", $GroupsManager->count());
        $CT->assign("specialties", $DB->query("SELECT DISTINCT `specialty` as co FROM `Groups`")->fetchAll(PDO::FETCH_ASSOC));
		$CT->assign("educationCourses", $EducationCoursesManager->get());
		$CT->assign("educationForms", $EducationFormsManager->get());
		$CT->Show("index.tpl");

		if (!empty($_POST['logoutButton'])) {
			unset($_SESSION['admin']);
			CTools::Redirect("index.php");
		}

		try
		{

			if (!empty($_POST['selectGroupScheduleButton'])) {
			    $id_group = $_POST['group'];
                $_SESSION['current_group'] = $id_group;

                CTools::Redirect("index.php");
            }

            if (!empty($_POST['saveGroupScheduleButton'])) {
                $id_group = $_POST['group'];
                $day = $_POST['day'];
                $pair = $_POST['pair'];
                $subject_1 = $_POST['subject_1'];
                $subject_2 = $_POST['subject_2'];
                $lecture_hall_1 = $_POST['lecture_hall_1'];
                $lecture_hall_2 = $_POST['lecture_hall_2'];
                $teacher_1 = $_POST['teacher_1'];
                $teacher_2 = $_POST['teacher_2'];
                
                if ($ScheduleManager->add([
                    "group" => $id_group,
                    "day" => $day,
                    "pair" => $pair,
                    "subject_1" => $subject_1,
                    "subject_2" => $subject_2,
					"lecture_hall_1" => $lecture_hall_1,
					"lecture_hall_2" => $lecture_hall_2,
					"teacher_1" => $teacher_1,
					"teacher_2" => $teacher_2,
                ])) {
                    CTools::Message("Расписание сохранено");
                    CTools::Redirect("index.php");
                } else {
                    CTools::Message("Не удалось сохранить расписание");
                }
			}

            /*!
				Обработка событий для работы с предметами
            */

            if (!empty($_POST['addSubjectButton'])) {
            	$caption = $_POST['caption'];

                if ($SubjectsManager->add(
                    new Subject($caption)
                )) {
                    CTools::Message("Предмет добавлен");
                    CTools::Redirect("index.php");
                } else {
                    CTools::Message("Не удалось добавить предмет");
                }
			}

			if (!empty($_POST['removeSubjectsButton'])) {
                $subjects = $_POST['subjects'];

                if (!empty($subjects)) {
                    $result = true;
                    foreach ($subjects as $subject_id) {
                        $result *= $SubjectsManager->remove($subject_id);
                    }

                    if ($result) {
                        CTools::Message("Выбранные предметы были удалены");
                        CTools::Redirect("index.php");
                    } else {
                        CTools::Message("Не удалось удалить выбранные предметы");
                    }
                } else {
                    CTools::Message("Вы не выбрали специальности");
                }
			}

            /*!
            	Обработка событий для работы с группами
            */

            if (!empty($_POST['addGroupButton'])) {
            	$caption = htmlspecialchars($_POST['caption']);
            	$education_form = htmlspecialchars($_POST['educationForm']);
                $education_course = htmlspecialchars($_POST['educationCourse']);
                $educationDirection = htmlspecialchars($_POST['educationDirection']);
                $specialty = htmlspecialchars($_POST['specialty']);
                $institute = htmlspecialchars($_POST['institute']);

            	if ($GroupsManager->add(
            		new Group($caption, $education_form, $education_course, $educationDirection, $specialty, $institute)
				)) {
                    CTools::Message("Группа добавлена");
                    CTools::Redirect("index.php");
				} else {
                    CTools::Message("Не удалось добавить группу");
				}
			}

            if (!empty($_POST['removeGroupButton'])) {
                $groups = $_POST['groups'];

                if (!empty($groups)) {
                    $result = true;
                    foreach ($groups as $groups_id) {
                        $result *= $GroupsManager->remove($groups_id);
                    }

                    if ($result) {
                        CTools::Message("Выбранные группы были удалены");
                        CTools::Redirect("index.php");
                    } else {
                        CTools::Message("Не удалось удалить выбранные группы");
                    }
                } else {
                    CTools::Message("Вы не выбрали специальности");
                }

            }


            /*!
            	Обработка событий для работы со специальностями
            */

            if (!empty($_POST['addSpecialtyButton'])) {
            	$caption = htmlspecialchars($_POST['caption']);
            	$code = htmlspecialchars($_POST['code']);

                if ($SpecialtiesManager->add(
                    new Specialty($caption, $code)
                )) {
                    CTools::Message("Специальность добавлена");
                    CTools::Redirect("index.php");
                } else {
                    CTools::Message("Не удалось добавить специальность");
                }
			}

			if (!empty($_POST['removeSpecialtyButton'])) {
                $specialties = $_POST['specialties'];

                if (!empty($specialties)) {
                    $result = true;
                    foreach ($specialties as $specialty_id) {
                        $result *= $SpecialtiesManager->remove($specialty_id);
                    }

                    if ($result) {
                        CTools::Message("Выбранные специальности были удалены");
                        CTools::Redirect("index.php");
                    } else {
                        CTools::Message("Не удалось удалить выбранные специальности");
                    }
                } else {
                	CTools::Message("Вы не выбрали специальности");
				}

            }
	
			/*!
				Обработка событий для работы с курсами
			*/
			
			if (!empty($_POST['addCourseButton'])) {
				$caption = htmlspecialchars($_POST['caption']);
				$address = htmlspecialchars($_POST['address']);
				$contactor = htmlspecialchars($_POST['contactor']);
	
				if ($CoursesManager->add(
					new Course($caption, $address, $contactor)
				)) {
					CTools::Message("Курс успешно добавлен");
					CTools::Redirect("index.php");
				} else {
					CTools::Message("Не удалось добавить курс");
				}
	
			}

			if (!empty($_POST['removeCourseButton'])) {
				$courses = $_POST['courses'];

				if (!empty($courses)) {
                    $result = true;
                    foreach ($courses as $course_id) {
                        $result *= $CoursesManager->remove($course_id);
                    }

                    if ($result) {
                        CTools::Message("Выбранные курсы были удалены");
                        CTools::Redirect("index.php");
                    } else {
                        CTools::Message("Не удалось удалить выбранные курсы");
                    }
                } else {
					// FIXME:
				}

            }

			if (!empty($_POST['saveCoursesScheduleButton'])) {
				
				$schedules = array();
				foreach ($CoursesManager->get() as $course) {

					$course_schedule = new CourseSchedule($course);
					$days = array("", "", "", "", "", "", "");
					for ($i = 0; $i < 7; $i++) {
						if (!empty($_POST['start_time_row_'.$course->id()][$i]) &&
							!empty($_POST['end_time_row_'.$course->id()][$i])
						) {
							$days[$i] = $_POST['start_time_row_'.$course->id()][$i]." - ".$_POST['end_time_row_'.$course->id()][$i];
						} else {
							$days[$i] = "";
						}
					}
	
					$course_schedule->setDays($days);
					$schedules[] = $course_schedule;
				}
				
				if ($CoursesManager->setSchedule($schedules)) {
					CTools::Message("Расписание сохранено");
					CTools::Redirect("index.php");
				} else {
					CTools::Message("Не удалось сохранить расписание");
				}

			}
	
			/* ----------------------------------------------------- */

			if (!empty($_POST['addInstituteButton'])) {
				$caption = htmlspecialchars($_POST['caption']);
				$short_caption = htmlspecialchars($_POST['shortCaption']);
				$address = htmlspecialchars($_POST['address']);

                if ($InstitutesManager->add(
                    new Institute($caption, $short_caption, $address)
                )) {
                    CTools::Message("Институт успешно добавлен");
                    CTools::Redirect("index.php");
                } else {
                    CTools::Message("Не удалось добавить институт");
                }
			}

			if (!empty($_POST['removeInstituteButton'])) {
				$institutes = $_POST['institutes'];

                if (!empty($institutes)) {
                    $result = true;
                    foreach ($institutes as $institute_id) {
                        $result *= $InstitutesManager->remove($institute_id);
                    }

                    if ($result) {
                        CTools::Message("Выбранные институты были удалены");
                        CTools::Redirect("index.php");
                    } else {
                        CTools::Message("Не удалось удалить выбранные институты");
                    }
                } else {
                    // FIXME:
                }

			}

		} catch (Exception $e) {
			CTools::Message($e->getMessage());
			CTools::Redirect("index.php");
		}

	}
	
?>

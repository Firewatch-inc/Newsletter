<?php
	
	require_once "start.php";
	
	if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
		$CT->Show("login.tpl");
		
		if (!empty($_POST['loginButton'])) {
			$login = $_POST['login'];
			$password = $_POST['passwd'];
			
			if ((!empty($login)) && (!empty($password))) {
				if (($login === "admin") && (md5($password) === md5("admin"))) {
					$_SESSION['admin'] = new User($login, md5($password));
					CTools::redirect("index.php");
				} else {					
					CTools::Message("Неверные аутентификационные данные");
				}
			} else {
				CTools::Message("Поля с логином и паролем не могут быть пустыми");
			}
			
		}
		
	} elseif(($_SESSION['admin'] instanceof User) &&
		$_SESSION['admin']->login() === "admin" &&
		$_SESSION['admin']->password() === md5("admin")
	) {

		$CT->assign("courses", $CoursesManager->get());
		$CT->assign("courses_schedule", $CoursesManager->getSchedule());
		$CT->assign("institutes", $InstitutesManager->get());
		$CT->assign("educationCourses", $EducationCoursesManager->get());
		$CT->Show("index.tpl");
		
		if (!empty($_POST['logoutButton'])) {
			unset($_SESSION['admin']);
			CTools::Redirect("index.php");
		}

		try
		{
	
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

		} catch (Exception $e) {
			CTools::Message($e->getMessage());
			CTools::Redirect("index.php");
		}

	}
	
?>

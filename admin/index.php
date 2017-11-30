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
				$contactor = htmlspecialchars($_POST['contactor']);
	
				if ($CoursesManager->add(
					new Course($caption, $contactor)
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
	
			/* ----------------------------------------------------- */

		} catch (Exception $e) {
			CTools::Message($e->getMessage());
			CTools::Redirect("index.php");
		}

	}
	
?>

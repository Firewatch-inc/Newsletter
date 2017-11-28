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

		$CT->assign("settings", $SettingsManager->get());
        $CT->assign("notes", $NoteManager->get());
        $CT->assign("schedule", $ScheduleManager->get());
		$CT->Show("index.tpl");
		
		if (!empty($_POST['logoutButton'])) {
			unset($_SESSION['admin']);
			CTools::Redirect("index.php");
		}
		
		if (!empty($_POST['setUpdateIntervalButton'])) {
			$updateInterval = (int)$_POST['updateInterval'];

			if ($updateInterval >= 0) {
				if ($SettingsManager->setUpdateInterval($updateInterval)) {
					CTools::Message("Интервал успешно задан");
					CTools::Redirect("index.php");
				} else {
					CTools::Message("Произошла ошибка");
				}
			} else {
				CTools::Message("Выбран некорректный интервал обновления");
			}

		}

		if (!empty($_POST['saveScheduleButton'])) {
			$schedule_id = $_POST['schedule_id'];
			$schedule_data = $_POST['schedule'];

			$schedule = array();

			for ($i = 0, $j = 0, $current = 0; $i < 90; $i++) {
				if (empty($schedule_data[$i])) {
					$schedule_data[$i] = "";
				}

				$schedule[$current][] = $schedule_data[$i];
				
				if ($j < 12) {
					$j++;
				} else {
					$current++;
					$j = 0;
				}
			}

			$schedule_json = json_encode($schedule);

			if ($ScheduleManager->add(array(
				"schedule_id" => $schedule_id,
				"schedule" => $schedule_json
			))) {
				CTools::Message("Изменения сохранены");
				CTools::Redirect("index.php");
			} else {
				CTools::Message("Ошибка при сохранении изменений");
			}

		}

		if (!empty($_POST['addNoteButton'])) {
			$caption = htmlspecialchars($_POST['caption']);
			$content = htmlspecialchars($_POST['content']);
			$date = htmlspecialchars($_POST['date']);

			$note = new Note($caption, $content, $date);
			
			if ($NoteManager->add($note)) {
				CTools::Message("Обявление добавлено");
				CTools::Redirect("index.php");
			} else {
				CTools::Message("Ошибка при добавлении объявления");
			}
		}
		
		if (!empty($_POST['removeNoteButton'])) {
			$notes = $_POST['notes'];

			if (!empty($notes)) {

				$result = true;
				foreach ($notes as $note) {
					$result *= $NoteManager->remove($note);
				}

				if ($result) {
					CTools::Message("Выбранные объявления были удалены");
					CTools::Redirect("index.php");
				} else {
					CTools::Message("Ошибка при удалении объявлений");
				}

			} else {
				CTools::Message("Вы не выбрали объявления");
			}
		}

	}
	
?>

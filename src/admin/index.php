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
		$CT->Show("index.tpl");
		
		
		if (!empty($_POST['logoutButton'])) {
			unset($_SESSION['admin']);
			CTools::Redirect("index.php");
		}
		
	}
	
?>

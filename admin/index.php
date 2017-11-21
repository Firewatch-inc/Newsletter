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
        $CT->assign("news", $NewsManager->getAll());
		$CT->Show("index.tpl");
		
		if (!empty($_POST['logoutButton'])) {
			unset($_SESSION['admin']);
			CTools::Redirect("index.php");
		}
    
        if (!empty($_POST['removeNewsButton'])) {
            $ids = $_POST['id_news'];
            
            if (!empty($ids)) {
                $result = true;
                foreach ($ids as $id) {
                    $result *= $NewsManager->remove($id);
                }
                
                if ($result) {
                    CTools::Message("Выбранные новости были удалены");
                } else {
                    CTools::Message("Произошла ошибка при удалении новостей");
                }
                
                CTools::Redirect("index.php");
            } else {
                CTools::Message("Выберете новости для удаления");
            }
          
        }
        
        if (!empty($_POST['addNewsButton'])) {
          $n_caption = $_POST['n_caption'];
          $n_author = $_POST['n_author'];
          $n_content = $_POST['n_content'];
          $n_date = $_POST['n_date'];
          
          $news = new News(
            $n_caption,
            $n_content,
            $n_author,
            $n_date
          );
          
          if ($NewsManager->add($news)) {
            CTools::Message("Новость успешно опубликована");
          } else {
            CTools::Message("Произошла ошибка при публикации новости");
          }
          
          CTools::Redirect("index.php");
        }
            
	}
	
?>

<?php
	
	class User
	{
		private $login;
		private $password;
		
		public function __construct($login, $password)
		{
			$this->login = $login;
			$this->password = $password;
		}
		
		public function login()
		{
			return $this->login;
		}
		
		public function password()
		{
			return $this->password;
		}
		
	}

?>

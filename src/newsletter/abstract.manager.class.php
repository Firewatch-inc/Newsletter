<?php
	
	abstract class AbstractManager
	{
		protected $odbc;
		
		public function __construct($odbc)
		{
			$this->odbc = $odbc;
		}
		
		public function setODBC($odbc)
		{
			$this->odbc = $odbc;
		}
		
        protected function query($sql, $params = array())
		{
			if (!empty($params)) {
                $query = $this->odbc->prepare($sql);
                $result = $query->execute($params);
                return ($result) ? $query->fetchAll(PDO::FETCH_ASSOC) : false;
            } else {
                return $this->odbc->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            }
		}
		
		abstract public function add($data);
		abstract public function get();
	}
	
?>
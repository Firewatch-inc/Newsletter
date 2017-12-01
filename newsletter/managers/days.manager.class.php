<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

    class DaysManager extends AbstractManager
    {
		public function __construct($odbc)
		{
			parent::__construct($odbc);
		}
        
        public function add($pair)
        {
            return false;
        }

        public function getStudyDays()
        {
            $days = $this->get();
            array_pop($days);
            return $days;
        }

		public function get()
		{
            $db_days = $this->query("SELECT * FROM `ListOfDays` ORDER BY `id_day`");

            $days = array();
            foreach ($db_days as $db_day) {
                $day = new class ($db_day['caption'], $db_day['short_caption']) {

                    private $id;
                    private $caption;
                    private $short_caption;

                    public function __construct($caption, $short_caption)
                    {
                        $this->caption = $caption;
                        $this->short_caption = $short_caption;
                        $this->id = 0;
                    }

                    public function id()
                    {
                        return $this->id;
                    }

                    public function setId($id)
                    {
                        if ($this->id === 0 && $id > 0) {
                            $this->id = $id;
                        }
                    }

                    public function caption()
                    {
                        return $this->caption;
                    }

                    public function shortCaption()
                    {
                        return $this->short_caption;
                    }

                };
                $day->setId((int)$db_days['id_day']);
                $days[] = $day;
            }

            return $days;
        }

    }

?>

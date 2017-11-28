<?php

    require_once $_SERVER['DOCUMENT_ROOT']."/newsletter/abstract.manager.class.php";

    class SettingsManager extends AbstractManager
    {

        public function setUpdateInterval($interval)
        {
            if ($interval >= 0) {
                $update_query = $this->odbc->prepare("UPDATE `Settings` SET `update_interval`=:interval WHERE `id_settings`=1");
                $update_query->bindValue(":interval", $interval);
                return $update_query->execute();
            } else {
                throw new Exception("Incorrect interval for update");
            }
        }

        public function add($data)
        {
            return false;
        }

        public function get()
        {
            return $this->query("SELECT * FROM `Settings` WHERE `id_settings`=1")[0];
        }

    }

?>
<?php
    include_once('models/database.php');
    class M_subject extends Database
    {
        public function getAllSubject()
        {
            $sql = "SELECT * FROM subject";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }

?>
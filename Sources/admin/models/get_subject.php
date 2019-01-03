<?php
require_once('database.php');
    class M_subject extends database
    {
        public function getSubject($id)
        {
            $sql = "SELECT title FROM subject WHERE id=$id";
            $this->setQuery($sql);
            return $this->loadRow()->title;
        }
    }
?>
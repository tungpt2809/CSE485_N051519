<?php
require_once('database.php');
    class M_exam extends Database
    {
        public function updateAfterDeleteQuestion($id)
        {
            $sql = "UPDATE `exam` SET `number_of_questions` = (`number_of_questions` - 1) WHERE `id` = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
    }

?>
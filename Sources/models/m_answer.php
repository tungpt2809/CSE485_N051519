<?php
    include_once('models/database.php');
    class M_answer extends Database
    {
        public function getAnswerByQuestionId($question_id)
        {
            $sql = "SELECT * FROM answer WHERE question_id = $question_id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }
?>
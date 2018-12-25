<?php
    include_once('models/database.php');
    class M_answer extends Database
    {
        public function getAnswerByQuestionId($question_id)
        {
            $sql = "SELECT * FROM answer WHERE question_id = $question_id ORDER BY RAND()";
            $this->setQuery($sql);
            return $this->loadAllRows(array($question_id));
        }
        public function getAnswerById($id)
        {
            $sql = "SELECT id, content, correct FROM answer WHERE answer.id = $id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }
?>
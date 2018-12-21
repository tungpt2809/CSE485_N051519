<?php
    class M_answer extends Databse
    {
        public function getAnswerByQuestionId($question_id)
        {
            $sql = "SELECT * FROM answer WHERE question_id = $question_id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }
?>
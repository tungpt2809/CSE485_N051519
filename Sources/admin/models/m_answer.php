<?php
    require_once('database.php');
    class M_answer extends Database
    {
        public function getAnswerByQuestionId($question_id)
        {
            $sql = "SELECT * FROM answer WHERE question_id = $question_id";
            $this->setQuery($sql);
            return $this->loadAllRows(array($question_id));
        }
        public function deleteAnswerByQuestionId($question_id)
        {
            $sql = "DELETE FROM answer WHERE question_id = $question_id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function insertAnswer($question_id, $content, $correct)
        {
            $sql = "INSERT INTO answer(question_id, content, correct) VALUES ($question_id, '$content', $correct)";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function updateAnswer($question_id, $content, $correct, $id)
        {
            $sql = "UPDATE answer SET content = '$content', correct = $correct WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
    }
?>
<?php
    include_once('models/database.php');
    class M_question extends Database
    {
        public function getQuestionByExam($exam)
        {
            $sql = "SELECT question.id, question.content FROM question INNER JOIN exam_info ON question.id = exam_info.question_id WHERE exam_info.exam_id = $exam->id ORDER BY RAND() LIMIT $exam->number_of_questions";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function getQuestionById($id)
        {
            $sql = "SELECT id, content, solution FROM question WHERE question.id = $id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
        public function getExamIncludeQuestion($question_id)
        {
            $sql = "SELECT * FROM exam_info INNER JOIN exam ON exam.id = exam_info.exam_id WHERE question_id = $question_id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }
?>  
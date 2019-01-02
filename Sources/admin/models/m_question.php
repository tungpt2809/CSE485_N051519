<?php
    require_once('database.php');
    class M_question extends database
    {
        public function getAllQuestion($from_record_num = -1 , $records_per_page = -1)
        {
            $sql = "SELECT * FROM question";
            if(($from_record_num > -1)  && ($records_per_page >= 1)){
                $sql .= " LIMIT $from_record_num, $records_per_page";
            }
            $this->setQuery($sql);

            return $this->loadAllRows();
        }
        public function countAll()
        {
            $sql = 'SELECT COUNT(*) as num FROM question';
            $this->setQuery($sql);
            return $this->loadRow()->num;
        }
        public function deleteQuestionOfAnExam($question_id, $exam_id)
        {
            $sql = "DELETE FROM exam_info WHERE question_id = $question_id AND exam_id = $exam_id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function deleteQuestion($id)
        {
            $sql = "DELETE FROM question WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function getExamIncludeQuestion($question_id)
        {
            $sql = "SELECT * FROM exam_info INNER JOIN exam ON exam.id = exam_info.exam_id WHERE question_id = $question_id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
        public function insertQuestion($content, $level_of_difficult, $solution, $subject_id)
        {
            $sql = "INSERT INTO question(content, level_of_difficult, solution, subject_id) VALUES ('$content', $level_of_difficult, '$solution', $subject_id)";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function updateQuestion($content, $level_of_difficult, $solution, $subject_id, $id)
        {
            $sql = "UPDATE question SET content = '$content', level_of_difficult = $level_of_difficult, solution = '$solution', subject_id = $subject_id WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function getSubject($id)
        {
            $sql = "SELECT * FROM subject WHERE id = $id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
    }
?>
<?php
require_once('database.php');
    class M_exam extends Database
    {
        public function getAllExam($from_record_num = -1 , $records_per_page = -1)
        {
            $sql = "SELECT * FROM exam";
            if(($from_record_num > -1)  && ($records_per_page >= 1)){
                $sql .= " LIMIT $from_record_num, $records_per_page";
            }
            $this->setQuery($sql);

            return $this->loadAllRows();
        }
        public function countAll()
        {
            $sql = 'SELECT COUNT(*) as num FROM exam';
            $this->setQuery($sql);
            return $this->loadRow()->num;
        }
        public function updateAfterDeleteQuestion($id)
        {
            $sql = "UPDATE `exam` SET `number_of_questions` = (`number_of_questions` - 1) WHERE `id` = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function deleteExam($id)
        {
            $sql = "DELETE FROM exam WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function deleteExamInfo($id)
        {
            $sql = "DELETE FROM exam_info WHERE exam_id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function insertExam($exam_name, $duration, $question_num, $subject_id)
        {
            $sql = "INSERT INTO exam(exam_name, duration, number_of_questions, subject_id) VALUES ('$exam_name', $duration, $question_num, $subject_id)";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function updateExam($exam_name, $duration, $question_num, $subject_id, $id)
        {
            $sql = "UPDATE exam SET exam_name = '$exam_name', duration = $duration, number_of_questions = $question_num, subject_id = $subject_id WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function updateAfterAdd($id)
        {
            $sql = "UPDATE exam SET number_of_questions = (number_of_questions + 1) WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function updateAfterRemove($id)
        {
            $sql = "UPDATE exam SET number_of_questions = (number_of_questions - 1) WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
    }

?>
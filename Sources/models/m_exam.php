<?php
    include_once('models/database.php');
    class M_exam extends Database
    {
        public function getAllExams()
        {
            $sql = "SELECT * FROM exam";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function getExamById($exam_id)
        {
            $sql = "SELECT * FROM exam WHERE id = ".$exam_id;
            $this->setQuery($sql);
            return $this->loadRow(array($exam_id));
        }
        public function getExamsBySubjectId($subject_id)
        {
            $sql = "SELECT * FROM exam WHERE subject_id = ?";
            $this->setQuery($sql);
            return $this->loadAllRows(array($subject_id));
        }
    }
?>
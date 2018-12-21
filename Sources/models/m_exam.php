<?php
    include("database.php");
    class M_exam extends Database
    {
        public function getAllExams()
        {
            $sql = "SELECT * FROM exam";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function getExamsBySubjectId($subject_id)
        {
            $sql = "SELECT * FROM exam WHERE subject_id = ?";
            $this->setQuery($sql);
            return $this->LoadAllRows(array($subject_id));
        }
    }
?>
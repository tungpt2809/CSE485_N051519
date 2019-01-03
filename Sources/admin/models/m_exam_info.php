<?php
require_once('database.php');
    class M_exam_info extends Database
    {
        public function numberOfSet($question_id, $exam_id)
        {
            $sql = "SELECT * FROM exam_info WHERE question_id = $question_id AND exam_id = $exam_id";
            $this->setQuery($sql);
            return $this->loadRow();
        }
        public function insert($qid, $eid)
        {
            $sql = "INSERT INTO exam_info(question_id, exam_id) VALUES ($qid, $eid)";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function remove($qid, $eid)
        {
            $sql = "DELETE FROM exam_info WHERE exam_info.question_id = $qid AND exam_info.exam_id = $eid";
            $this->setQuery($sql);
            return $this->execute();
        }
    }
?>
<?php
    class M_result extends Database
    {
        public function insertResult($user_id, $exam_id, $point, $num)
        {
            $sql = "INSERT INTO result(user_id, exam_id, point, completion_time, number_done_question) VALUE ($user_id, $exam_id, $point, NOW(), $num)";
            $this->setQuery($sql);
            return $this->execute(array($user_id, $exam_id, $point, $num));
        }
    }
?>
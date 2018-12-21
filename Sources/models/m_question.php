<?php
    class M_question extends Database
    {
        public function getQuestionByExamId($exam_id)
        {
            $sql = "SELECT question.id, question.content FROM question INNER JOIN exam_info ON question.id = exam_info.question_id WHERE exam_info.exam_id = $exam_id ORDER BY RAND()";

        }
    }
?>  
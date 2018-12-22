<?php
    class C_answer
    {
        public function answerByQuestionId($question_id)
        {
            include('models/m_answer.php');
            $m_answer = new M_answer();
            $answer = $m_answer->getAnswerByQuestionId($question_id);
            return $answer;
        }
    }
?>
<?php
    class C_question
    {
        public function questionByExamId($exam)
        {
            include_once('models/m_question.php');
            $m_question = new M_question();
            $question = $m_question->getQuestionByExam($exam);
            return array('question'=>$question);
        }

    }

?>
<?php
    class C_examInfo
    {
        public function showExamInfoPage()
        {
            if(isset($_GET['eid']))
                $exam_id = $_GET['eid'];
            else echo "Khong thay exam id";
            
            include_once('models/m_exam.php');
            $m_exam = new M_exam();
            $exam = $m_exam->getExamById($exam_id);

            include_once('controllers/c_question.php');
            $c_question = new C_question();
            $question = $c_question->questionByExamId($exam)['question'];
            
            require_once('views/v_examInfo.php');
        }
    }
?>
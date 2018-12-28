<?php
require_once("models/m_exam.php");
require_once('controllers/c_question.php');
require_once('models/m_answer.php');
    class C_exam
    {
        public function allExams()
        {
            $m_exam = new M_exam();
            $exams = $m_exam->getAllExams();
            return array('exams'=>$exams);
        }
        public function examsBySubjectId($subject_id)
        {
            $m_exam = new M_exam();
            $examsBySubjectId = $m_exam->getExamsBySubjectId($subject_id);
            return array('examsBySubjectId'=>$examsBySubjectId);
        }
        public function showExamInfoPage()
        {
            if(isset($_GET['eid']))
                $exam_id = $_GET['eid'];
            else echo "Khong thay exam id";
                        
            $m_exam = new M_exam();
            $exam = $m_exam->getExamById($exam_id);
            $_SESSION['exam_id'] = NULL;
            $_SESSION['exam_id'] = $exam_id;

            $c_question = new C_question();
            $question = $c_question->questionByExamId($exam)['question'];

            $m_answer = new M_answer();
            require_once('views/v_exam.php');
        }
    }
?>
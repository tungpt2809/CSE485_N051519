<?php
    include("models/m_exam.php");
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
    }
?>
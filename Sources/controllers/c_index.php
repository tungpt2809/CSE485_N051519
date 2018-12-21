<?php
    class C_index
    {
        public function showIndexPage()
        {
            include_once('config/core.php');
            include('controllers/c_exam.php');
            $c_exam = new C_exam();
            $allExams = $c_exam->allExams();
            $exam = $allExams["exams"];
            require_once('views/v_index.php');
        }
        public function showSubjectPage()
        {   
            include_once('config/core.php');
            include('controllers/c_exam.php');
            if(isset($_GET['subject_id']))
                $subject_id = $_GET['subject_id'];
            else echo "Khong co subject_id";
            $c_exam = new C_exam();
            $allExams = $c_exam->examsBySubjectId($subject_id);
            $exam = $allExams["examsBySubjectId"];
            require_once('views/v_index.php');
        }
    }
?>
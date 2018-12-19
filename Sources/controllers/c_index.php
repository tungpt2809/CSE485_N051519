<?php
    class C_index
    {
        public function showIndexPage(){
            include_once('config/core.php');
            include('controllers/c_exam.php');
            $c_exam = new C_exam();
            $allExams = $c_exam->allExams();
            $exam = $allExams["exams"];
            require_once('views/v_index.php');
        }

    }
?>
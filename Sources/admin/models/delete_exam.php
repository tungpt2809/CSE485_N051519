<?php
    if(isset($_POST['delete_id']))
    {
        $id = $_POST['delete_id'];
        include('m_exam.php');
        $m_exam = new M_exam();
        $m_exam->deleteExamInfo($id);
        $m_exam->deleteExam($id);
    }
?>
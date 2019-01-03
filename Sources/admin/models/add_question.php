<?php
    if(isset($_POST['add_qid']) && isset($_POST['add_eid']))
    {
        $qid = $_POST['add_qid'];
        $eid = $_POST['add_eid'];
        include('m_exam_info.php');
        include('m_exam.php');
        $m_exam_info = new M_exam_info();
        $m_exam = new M_exam();
        $m_exam_info->insert($qid, $eid);
        $m_exam->updateAfterAdd($eid);
    }
?>
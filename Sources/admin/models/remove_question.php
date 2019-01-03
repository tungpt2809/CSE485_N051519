<?php
    if(isset($_POST['remove_qid']) && isset($_POST['remove_eid']))
    {
        $qid = $_POST['remove_qid'];
        $eid = $_POST['remove_eid'];
        include('m_exam_info.php');
        include('m_exam.php');
        $m_exam_info = new M_exam_info();
        $m_exam = new M_exam();
        $m_exam_info->remove($qid, $eid);
        $m_exam->updateAfterRemove($eid);
    }
?>
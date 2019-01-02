<?php
    if(isset($_POST['delete_id']))
    {
        $id = $_POST['delete_id'];
        include('m_question.php');
        include('m_answer.php');
        include('m_exam.php');
        $m_answer = new M_answer();
        $m_answer->deleteAnswerByQuestionId($id);
        $m_question = new M_question();
        $exam_id = $m_question->getExamIncludeQuestion($id)->id;

        $m_question->deleteQuestionOfAnExam($id, $exam_id);
        $m_question->deleteQuestion($id);
        $m_exam = new M_exam();
        $m_exam->updateAfterDeleteQuestion($exam_id);
    }
?>
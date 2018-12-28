<?php 
    require_once('models/m_question.php');
    require_once('models/m_answer.php');
    require_once('models/m_result.php');

    class C_result
    {
        public function showResultPage()
        {
            $m_question = new M_question();
            $m_answer = new M_answer();
            $m_result = new M_result();
            $number_done = 0;
            $point = 0;

            $arr = $_POST;
            $exam = $m_question->getExamIncludeQuestion(array_keys($arr)[0]);
            foreach($arr as $key=>$value)
            {
                if(is_numeric($key) && is_numeric($value))
                {
                    $number_done++;
                    $ans = $m_answer->getAnswerById($value);
                    if($ans->correct == 1)
                        $point++;    
                }
            }
            if(!$m_result->insertResult($_SESSION['user_id'], $exam->id, $point, $number_done)){
                echo "Không thể thêm kết quả";
            }
            
            require_once('views/v_result.php');
        }
    }
?> 

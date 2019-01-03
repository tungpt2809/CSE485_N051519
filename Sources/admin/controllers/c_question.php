<?php
require_once('models/m_question.php');
require_once('models/m_answer.php');
require_once('models/get_subject.php');
    class C_question
    {
        public function showQuestionPage()
        {
            unset($_SESSION['isInserted']);
            unset($_SESSION['isUpdated']);
            $this->insertQuestion();
            $this->updateQuestion();
            $m_question = new M_question();
            $m_answer = new M_answer();
            $m_subject = new M_subject();
            $total_rows = $m_question->countAll();
            $records_per_page = 5;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $total_pages = ceil($total_rows / $records_per_page);
            // index of start record
            $from = $records_per_page * ($page - 1);
            // range of links to show
            $range = 2;
            $stt = $page * $records_per_page;
            // display links to 'range of pages' around 'current page'
            $initial_num = $page - $range;
            $condition_limit_num = ($page + $range)  + 1;

            $questionList = $m_question->getAllQuestion($from, $records_per_page);
            require_once('views/question/v_danh_sach_question.php');
        }
        public function insertQuestion()
        {
            if(isset($_POST['btn_add']))
            {
                $m_question = new M_question();
                $m_answer = new M_answer();
                $content = $_POST['content'];
                $answer_a = $_POST['answer_a'];
                $answer_b = $_POST['answer_b'];
                $answer_c = $_POST['answer_c'];
                $answer_d = $_POST['answer_d'];
                $correct = $_POST['correct'];
                $subject_id = $_POST['subject_id'];
                $solution = $_POST['solution'];
                $level_of_difficult = $_POST['level_of_difficult'];
                if($m_question->insertQuestion($content, $level_of_difficult, $solution, $subject_id))
                {
                    $id = $m_question->getLastId();
                    if($correct == 'A'){
                        $m_answer->insertAnswer($id, $answer_a, 1);
                        $m_answer->insertAnswer($id, $answer_b, 0);
                        $m_answer->insertAnswer($id, $answer_c, 0);
                        $m_answer->insertAnswer($id, $answer_d, 0);
                    }
                    else if($correct == 'B'){
                        $m_answer->insertAnswer($id, $answer_a, 0);
                        $m_answer->insertAnswer($id, $answer_b, 1);
                        $m_answer->insertAnswer($id, $answer_c, 0);
                        $m_answer->insertAnswer($id, $answer_d, 0);
                    }
                    else if($correct == 'C'){
                        $m_answer->insertAnswer($id, $answer_a, 0);
                        $m_answer->insertAnswer($id, $answer_b, 0);
                        $m_answer->insertAnswer($id, $answer_c, 1);
                        $m_answer->insertAnswer($id, $answer_d, 0);
                    }
                    else{
                        $m_answer->insertAnswer($id, $answer_a, 0);
                        $m_answer->insertAnswer($id, $answer_b, 0);
                        $m_answer->insertAnswer($id, $answer_c, 0);
                        $m_answer->insertAnswer($id, $answer_d, 1);
                    }
                    $_SESSION['isInserted'] = "<div class='alert alert-success alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Thêm thành công</div>";
                }
                else $_SESSION['isInserted'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Không thể thêm</div>";
            }
        }
        public function updateQuestion()
        {
            if(isset($_POST['btn_update']))
            {
                $m_question = new M_question();
                $m_answer = new M_answer();
                $content = $_POST['content'];
                $answer_A = $_POST['answer_A'];
                $answer_B = $_POST['answer_B'];
                $answer_C = $_POST['answer_C'];
                $answer_D = $_POST['answer_D'];
                $id = $_POST['question_id'];
                $idA = $_POST['answer_A_id'];
                $idB = $_POST['answer_B_id'];
                $idC = $_POST['answer_C_id'];
                $idD = $_POST['answer_D_id'];
                $correct = $_POST['correct'];
                $subject_id = $_POST['subject_id'];
                $solution = $_POST['solution'];
                $level_of_difficult = $_POST['level_of_difficult'];
                if($m_question->updateQuestion($content, $level_of_difficult, $solution, $subject_id, $id))
                {
                    if($correct == 'A'){
                        $m_answer->updateAnswer($id, $answer_A, 1, $idA);
                        $m_answer->updateAnswer($id, $answer_B, 0, $idB);
                        $m_answer->updateAnswer($id, $answer_C, 0, $idC);
                        $m_answer->updateAnswer($id, $answer_D, 0, $idD);
                    }
                    else if($correct == 'B'){
                        $m_answer->updateAnswer($id, $answer_A, 0, $idA);
                        $m_answer->updateAnswer($id, $answer_B, 1, $idB);
                        $m_answer->updateAnswer($id, $answer_C, 0, $idC);
                        $m_answer->updateAnswer($id, $answer_D, 0, $idD);
                    }
                    else if($correct == 'C'){
                        $m_answer->updateAnswer($id, $answer_A, 0, $idA);
                        $m_answer->updateAnswer($id, $answer_B, 0, $idB);
                        $m_answer->updateAnswer($id, $answer_C, 1, $idC);
                        $m_answer->updateAnswer($id, $answer_D, 0, $idD);
                    }
                    else{
                        $m_answer->updateAnswer($id, $answer_A, 0, $idA);
                        $m_answer->updateAnswer($id, $answer_B, 0, $idB);
                        $m_answer->updateAnswer($id, $answer_C, 0, $idC);
                        $m_answer->updateAnswer($id, $answer_D, 1, $idD);
                    }
                    $_SESSION['isUpdated'] = "<div class='alert alert-success alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Cập nhật thành công</div>";
                }
                else $_SESSION['isUpdated'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Không thể cập nhật</div>";
            }    
        }
    }
?>
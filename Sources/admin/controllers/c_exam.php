<?php
require_once('models/m_exam.php');
require_once('models/m_exam_info.php');
require_once('models/m_question.php');
require_once('models/get_subject.php');
    class C_exam
    {
        public function showExamPage()
        {
            unset($_SESSION['isInserted']);
            unset($_SESSION['isUpdated']);
            $this->insertExam();
            $this->updateExam();
            $m_exam = new M_exam();
            $m_exam_info = new M_exam_info();
            $m_question = new M_question();
            $m_subject = new M_subject();

            $total_rows = $m_exam->countAll();
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

            $examList = $m_exam->getAllExam($from, $records_per_page);
            require_once('views/exam/v_danh_sach_exam.php');
        }
        public function insertExam()
        {
            if(isset($_POST['btn_add']))
            {
                $exam_name = $_POST['exam_name'];
                $duration = $_POST['duration'];
                $question_num = $_POST['question_num'];
                $subject_id = $_POST['subject_id'];

                $m_exam = new M_exam();
                if($m_exam->insertExam($exam_name, $duration, $question_num, $subject_id))
                    $_SESSION['isInserted'] = "<div class='alert alert-success alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Thêm thành công</div>";
                else $_SESSION['isInserted'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Không thể thêm</div>";
            }
        }
        public function updateExam()
        {
            if(isset($_POST['btn_update']))
            {
                $id = $_POST['id'];
                $exam_name = $_POST['exam_name'];
                $duration = $_POST['duration'];
                $question_num = $_POST['question_num'];
                $subject_id = $_POST['subject_id'];

                $m_exam = new M_exam();
                if($m_exam->updateExam($exam_name, $duration, $question_num, $subject_id, $id))
                    $_SESSION['isUpdated'] = "<div class='alert alert-success alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Cập nhật thành công</div>";
                else $_SESSION['isUpdated'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Không thể lưu</div>";
            }
        }
    }

?>
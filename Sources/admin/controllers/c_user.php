<?php
require_once('models/m_user.php');
    class C_user
    {
        public function showUserPage()
        {
            unset($_SESSION['isInserted']);
            $isInserted = $this->insertUser();
            $m_user = new M_user();

            $total_rows = $m_user->countAll();
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

            $userList = $m_user->getAllUser($from, $records_per_page);
            require_once('views/user/v_danh_sach_user.php');
        }
        public function insertUser()
        {
            if(isset($_POST["btn_add"])){
                $m_user = new M_user();
                $full_name = $_POST['full_name'];
                $phone_number = $_POST['phone_number'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $email = htmlspecialchars(strip_tags($email));
                $password = $_POST['pwd'];
                $level = $_POST['level'];
                $status = $_POST['status'];
                
                if($m_user->insertUser($full_name, $phone_number, $address, $email, $password, $level, $status))
                    $_SESSION['isInserted'] = "<div class='alert alert-success alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button>Thêm thành công</div>";
                else $_SESSION['isInserted'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button> Không thể thêm</div>";
            }
        }
    }
?>
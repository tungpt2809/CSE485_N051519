<?php
    class C_login
    {
        function login()
        {
            include('models/m_user.php');
            include('config/home_url.php');
            require_once('views/v_login.php');
            $m_user = new M_user();
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];
                $emailExists = $m_user->emailExists($email);
                if($emailExists && password_verify($pwd, $m_user->pwd) && $m_user->status == 1)
                {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['access_level'] = $m_user->level;
                    if($m_user->level=='Admin'){
                        header("Location: {$home_url}admin/index.php?action=login_success");
                    }
                    else{
                        header("Location: {$home_url}index.php?action=login_success");
                    }
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'>
                        Access Denied.<br />
                        Your username or password maybe incorrect
                        </div>";
                }
            }
        }
        

    }
?>
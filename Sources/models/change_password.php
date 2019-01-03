<?php
    if(isset($_POST['oldpwd'])){
        $old1 = $_POST['oldpwd'];
        $new1 = $_POST['newpwd'];
        $id = $_POST['id'];
        include_once('m_user.php');

        $m_user = new M_user();
        if(password_verify($old1, $m_user->getPassword($id)))
        {
            $hash = password_hash($new1, PASSWORD_BCRYPT);
            if($m_user->changePassword($hash, $id))
            {
                $_SESSION['isUpdated2'] = "<div class='alert alert-success alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>Thành công ! </div>";
                return true;
            }
            else
            {
                $_SESSION['isUpdated2'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button> Thất bại </div>";
                return false;
            }
        }
        $_SESSION['isUpdated2'] = "<div class='alert alert-danger alert-dismissible container'><button type='button' class='close' data-dismiss='alert'>&times;</button> Thất bại </div>";
        return false;
    }
    

?>
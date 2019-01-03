<?php 
    require_once('controllers/c_user.php');
    require_once('views/v_user.php');
    $c_user = new C_user();
    
    if(isset($_GET['action']) && $_GET['action'] == 'update_info')
    {
        $c_user->updateUserInfo();
    }
?>

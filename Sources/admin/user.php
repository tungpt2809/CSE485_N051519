<?php
    require_once('../config/core.php');
    require('login_checker.php');
    include('controllers/c_user.php');

    $c_user = new C_user();
    $c_user->showUserPage();
    
?>

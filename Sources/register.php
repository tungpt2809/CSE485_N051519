<?php 
    $require_login=false;
    $page_title = "Sign Up";
    include_once('views/layout/home_head.php');
    include_once('login_checker.php');
    include('controllers/c_register.php');
    $c_register = new C_register();
    $c_register->register();
    include_once('views/layout/home_foot.php');
?>


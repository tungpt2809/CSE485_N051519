<?php
    $require_login=false;
    $page_title = "Login";
    include_once('views/layout/home_head.php');
    include_once('login_checker.php');
    include('controllers/c_login.php');
    $c_login = new C_login();
    $c_login->login();
    include_once('views/layout/home_foot.php');
?>

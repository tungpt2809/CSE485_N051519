<?php 
    session_start();
    if(!isset($_SESSION['access_level']))    
        $require_login = true;
    require('login_checker.php');
    require_once('controllers/c_result.php');
    $c_result = new C_result();
    $c_result->showResultPage();
?> 

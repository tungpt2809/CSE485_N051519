<?php
    session_start();
    if(!isset($_SESSION['access_level']))    
        $require_login = true;
    require('login_checker.php');
    require_once('controllers/c_exam.php');
    $c_exam = new C_exam();
    $c_exam->showExamInfoPage();
?>  
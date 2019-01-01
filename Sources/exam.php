<?php
    session_start();
    if(!isset($_SESSION['access_level']))    
        header("Location: {$home_url}login.php?action=please_login");
    require_once('controllers/c_exam.php');
    $c_exam = new C_exam();
    $c_exam->showExamInfoPage();
?>  
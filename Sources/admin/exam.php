<?php
    require_once('../config/core.php');
    require('login_checker.php');
    require('controllers/c_exam.php');
    $c_exam = new C_exam();
    $c_exam->showExamPage();
?>
<?php
    require_once('../config/core.php');
    require('login_checker.php');
    require('controllers/c_question.php');
    
    $c_question = new c_question();
    $c_question->showQuestionPage();
?>  
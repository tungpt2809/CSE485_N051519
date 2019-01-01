<?php 
    session_start();
    if(!isset($_SESSION['access_level']))    
        header("Location: {$home_url}login.php?action=please_login");
    require_once('controllers/c_result.php');
    $c_result = new C_result();
    $c_result->showResultPage();
?> 

<?php
    // core configuration
    include_once('../config/core.php');
    
    // check if logged in as admin
    include_once('login_checker.php');
    
    // set page title
    $page_title="Admin Index";
    
    include_once('views/v_index.php');
    
?>
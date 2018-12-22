<?php
    require('controllers/c_examInfo.php');
    $c_examInfo = new C_examInfo();
    $c_examInfo->showExamInfoPage();
    require_once('views/v_examInfo.php');
?>  
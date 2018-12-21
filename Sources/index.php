<?php
    include('controllers/c_index.php');
    $c_index = new C_index();
    if(isset($_GET['subject_id']))    
        $c_index->showSubjectPage();
    else
        $c_index->showIndexPage();
?>
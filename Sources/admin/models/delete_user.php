<?php
    if(isset($_POST['delete_id']))
    {
        $id = $_POST['delete_id'];
        include_once('m_user.php');
        $m_user = new M_user();
        $m_user->deleteUser($id);
    }
?>
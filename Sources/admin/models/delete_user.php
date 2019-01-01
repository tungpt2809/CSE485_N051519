<?php
    if(isset($_POST['delete_id']))
    {
        $id = $_POST['delete_id'];
        include('m_user.php');
        $m_user = new M_user();
        $m_user->deleteUser($id);
    }
?>
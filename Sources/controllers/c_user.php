<?php
require('models/m_user.php');
    class C_user
    {
        public function updateUserInfo() //require login
        {
            $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : $_SESSION['full_name'];
            $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : $_SESSION['phone_number'];
            $address = isset($_POST['address']) ? $_POST['address'] : $_SESSION['address'];
            
            $email = $_SESSION['email'];

            $m_user = new M_user();
            $m_user->updateUserInfo($full_name, $phone_number, $address, $email);

            $_SESSION['full_name'] = $full_name;
            $_SESSION['phone_number'] = $phone_number;
            $_SESSION['address'] = $address;
        }
    }

?>
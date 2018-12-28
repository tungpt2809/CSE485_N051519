<?php
    include_once('models/database.php');
    class M_user extends Database
    {
        public $id;
        public $status;
        public $level;
        public $phone_number;
        public $address;
        public $full_name;
        
        public function addUser($email, $password, $status, $access_code, $level)
        {
            $sql = "INSERT INTO users(email, password, status, access_code, level) VALUES(?,?,?,?,?)";
            $this->setQuery($sql);
            $result = $this->execute(array($email, $password, $status, $access_code, $level));
            return $result;
        }
        public function emailExists($email)
        {
            $sql = "SELECT id, password, status, level, full_name, phone_number, address FROM users WHERE email = ?";
            $this->setQuery($sql);
            
            $email=htmlspecialchars(strip_tags($email));
            $user = $this->loadRow(array($email));
            
            if($user != false)
            {
                $this->id = $user->id;
                $this->pwd = $user->password;
                $this->status = $user->status;
                $this->level = $user->level;
                $this->full_name = $user->full_name;
                $this->phone_numer = $user->phone_number;
                $this->address = $user->address;
                return true;
            }    
            return false;
        }

        public function updateStatusByAccessCode($access_code){
            $sql = "UPDATE users SET status = 1  WHERE access_code = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(1, $access_code);
            $stmt->execute();
        }

        public function accessCodeExists($access_code){
            $sql = "SELECT id FROM users WHERE access_code = ? ";
            $stmt = $this->conn->prepare( $sql );
            $access_code = htmlspecialchars(strip_tags($access_code));
            $stmt->bindParam(1, $access_code);
            $stmt->execute();

            $num = $stmt->rowCount();
            if($num>0){
                return true;
            }
            return false;
        }

        public function updateUserInfo($full_name, $phone_number, $address, $email)
        {
            $sql = "UPDATE users SET full_name = ?, phone_number = ?, address = ? WHERE email = ?";
            $this->setQuery($sql);
            $email = htmlspecialchars(strip_tags($email));
            
            return $this->execute(array($full_name, $phone_number, $address, $email));
        }
    }
?>
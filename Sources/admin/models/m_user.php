<?php
require_once('database.php');
    class M_user extends Database
    {
        public function getAllUser($from_record_num = -1 , $records_per_page = -1)
        {
            $sql = "SELECT * FROM users";
            if(($from_record_num > -1)  && ($records_per_page >= 1)){
                $sql .= " LIMIT $from_record_num, $records_per_page";
            }
            $this->setQuery($sql);

            return $this->loadAllRows();
        }
        public function countAll()
        {
            $sql = 'SELECT COUNT(*) as num FROM users';
            $this->setQuery($sql);
            return $this->loadRow()->num;
        }
        public function deleteUser($id)
        {
            $sql = "DELETE FROM users WHERE id = $id";
            $this->setQuery($sql);
            return $this->execute();
        }
        public function insertUser($full_name, $phone_number, $address, $email, $password, $level, $status)
        {
            if(!$this->emailExists($email))
            {
                $sql = "INSERT INTO users(full_name, phone_number, address, email, password, level, status) VALUES (?,?,?,?,?,?,?)";
                $this->setQuery($sql);
                return $this->execute(array($full_name, $phone_number, $address, $email, $password, $level, $status));
            }
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
    }
?>
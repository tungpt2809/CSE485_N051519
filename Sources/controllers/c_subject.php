<?php
require_once('models/m_subject.php');
    class C_subject 
    {
        public function allSubject()
        {
            $m_subject = new M_subject();
            $subject = $m_subject->getAllSubject();
            return array('subject'=>$subject);
        }
        

    }

?>
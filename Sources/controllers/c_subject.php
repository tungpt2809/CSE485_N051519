<?php
    class C_subject 
    {
        public function allSubject()
        {
            include('models/m_subject.php');
            $m_subject = new M_subject();
            $subject = $m_subject->getAllSubject();
            return array('subject'=>$subject);
        }
        

    }

?>
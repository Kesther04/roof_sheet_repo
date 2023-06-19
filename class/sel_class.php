
<?php
    //class for selecting data in database
    class SEL
    {
        public function sel_log_admin($email,$pass) {
            require("d_con/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM admin_reg_table WHERE email = '$email' AND password = '$pass' ");
    
            return $sel;
            
        }   

        public function sel_log_admin_uname($uname,$pass) {
            require("d_con/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM admin_reg_table WHERE username = '$uname' AND password = '$pass' ");
    
            return $sel;
            
        }   
    }


?>
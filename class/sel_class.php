
<?php
    //class for selecting data in database
    class SEL
    {
        public function sel_log_admin($email,$pass) {
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM admin_reg_table WHERE email = '$email' AND password = '$pass' ");
    
            return $sel;
            
        }   

        public function sel_log_admin_uname($uname,$pass) {
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM admin_reg_table WHERE username = '$uname' AND password = '$pass' ");
    
            return $sel;
            
        }   

       
        public function sel_sales_id($id) {
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM sales_registration  WHERE id = '$id' ");
    
            return $sel;
            
        }

        public function sel_sales_rid($id) {
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM sales_registration  WHERE ref_id = '$id' ");
    
            return $sel;
            
        }


        public function sel_quot_all(){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM quota_table  ");
    
            return $sel;
        }

        public function sel_sales_all(){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM sales_registration  ");
    
            return $sel;
        }

        public function sel_recp_all(){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM receipt_tb  ");
    
            return $sel;
        }

        public function sel_house_recp_all(){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM house_receipts  ");
    
            return $sel;
        }

        

        public function sel_quot($id){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM quota_table  WHERE ref_id = '$id'  ");
    
            return $sel;
        }

        public function sel_recp($id){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM receipt_tb  WHERE ref_id = '$id'  ");
    
            return $sel;
        }

        public function sel_house_recp($id){
            require("db/database_connection.php");
            
            $sel = $con->query(" SELECT * FROM house_receipts  WHERE ref_id = '$id'  ");
    
            return $sel;
        }


        

        

        
    }


?>
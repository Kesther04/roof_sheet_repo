
<?php
    //class for deleting data in database
   
    class  DEL
    {
        public function del_save($id){
            require("db/database_connection.php");
    
            $del = $con->query("DELETE FROM quota_table WHERE id = '$id' ");
    
            return $del;
        } 

        public function del_save_sales($id){
            require("db/database_connection.php");
    
            $del = $con->query("DELETE FROM sales_registration WHERE id = '$id' ");
    
            return $del;
        } 

     
    }
    
?>
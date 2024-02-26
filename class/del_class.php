
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

        public function del_recp($id){
            require("db/database_connection.php");
    
            $del = $con->query("DELETE FROM receipt_tb WHERE id = '$id' ");
    
            return $del;
        } 

        public function del_house_recp($id){
            require("db/database_connection.php");
    
            $del = $con->query("DELETE FROM house_receipts WHERE id = '$id' ");
    
            return $del;
        } 

     
    }
    
?>
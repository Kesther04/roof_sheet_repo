
<?php
    //class for inserting data in database
    class INS
    {
        public function ins_admin_reg($uname,$email,$pass,$pno,$fullDay,$date,$time){
            require("d_con/database_connection.php");

            $ins = $con->query("INSERT INTO admin_reg_table(username,email,password,phone_no,fullDay,date,time)VALUE('$uname','$email','$pass','$pno','$fullDay','$date','$time')");
            
            return $ins;
        }
    }

?>

<?php
    //class for inserting data in database
    class INS
    {
        public function ins_admin_reg($uname,$email,$pass,$pno,$fullDay,$date,$time){
            require("db/database_connection.php");

            $ins = $con->query("INSERT INTO admin_reg_table(username,email,password,phone_no,fullDay,date,time)VALUE('$uname','$email','$pass','$pno','$fullDay','$date','$time')");
            
            return $ins;
        }

        public function ins_sales_reg($rid,$clname,$clphone,$cladd,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$fullDay,$date,$time){
            require("db/database_connection.php");

            $ins = $con->query("INSERT INTO sales_registration(ref_id,cl_name,cl_phone,cl_add,itm,qty,aunit,total,instal,acces,transprt,fullDay,date,time)VALUE('$rid','$clname','$clphone','$cladd','$itm','$qty','$unit','$tot','$instal','$acces','$tprt','$fullDay','$date','$time')");
            
            return $ins;
        }

        public function ins_recp($rid,$cname,$pmtd,$prod,$total,$wname,$fullDay,$date,$time){
            require("db/database_connection.php");

            $ins = $con->query("INSERT INTO receipt_tb(ref_id,customer_name,pmtd,products,total,writer_name,fullDay,date,time)VALUE('$rid','$cname','$pmtd','$prod','$total','$wname','$fullDay','$date','$time')");

            return $ins;
        }

        public function ins_receipt($rid,$client,$address,$phone,$pmtd,$purpose,$total,$amt,$bal,$writer,$fullDate,$date,$time){
            require("db/database_connection.php");

            $ins = $con->query("INSERT INTO house_receipts(ref_id,customer_name,customer_address,phone_no,pmtd,pur_pose,total_amt,amt_paid,amt_rem,writer_name,fullDay,date,time)VALUE('$rid','$client','$address','$phone','$pmtd','$purpose','$total','$amt','$bal','$writer','$fullDate','$date','$time')");

            return $ins;
        }

        public function ins_quota($rfid,$quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$fullDay,$date,$time){
            require("db/database_connection.php");

            $ins = $con->query("INSERT INTO quota_table(ref_id,quot_name,locat,custom_name,itm,qty,runit,total,instal,acces,transprt,wname,des_one,label_name_one,label_prop_one,des_two,label_name_two,label_prop_two,fullDay,date,time)VALUE('$rfid','$quot','$locat','$clname','$itm','$qty','$unit','$tot','$instal','$acces','$tprt','$wnm','$qdeson','$desnmon','$despropon','$qdestw','$desnmtw','$desproptw','$fullDay','$date','$time')");
            
            return $ins;
        }

       
    }

   
    
?>
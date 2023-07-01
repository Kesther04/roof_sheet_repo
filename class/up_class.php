
<?php
    //class for updating data in database
    class UPD
    {
        public function upd_sales_reg($clname,$clphone,$cladd,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$rid,$id){
            require("db/database_connection.php");
            
            $update = $con->query(" UPDATE  sales_registration SET cl_name='$clname',cl_phone='$clphone',cl_add='$cladd',itm='$itm',qty='$qty',aunit='$unit',total='$tot',instal='$instal',acces='$acces',transprt='$tprt'  WHERE ref_id = '$rid' AND id = '$id' ");
    
            return $update;
        }

        public function upd_quota($quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$rid,$id){
            require("db/database_connection.php");

            $update = $con->query("UPDATE quota_table SET quot_name='$quot',locat='$locat',custom_name='$clname',itm='$itm',qty='$qty',runit='$unit',total='$tot',instal='$instal',acces='$acces',transprt='$tprt',wname='$wnm',des_one='$qdeson',label_name_one='$desnmon',label_prop_one='$despropon',des_two='$qdestw',label_name_two='$desnmtw',label_prop_two='$desproptw' WHERE ref_id='$rid' AND id = '$id' ");
            
            return $update;
        }
    }

?>
<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $rid = pint();
    $cname = $_POST['clname'];
    $prod = $_POST['prod'];
    $wname = $_POST['wname'];
    $total = $_POST['amt'];
    $pmtd = $_POST['pmtd'];

    
    require("../../date_la_time.php");


    require("../../class/ins_class.php");

    $ins_ob = new INS();


    //to insert into the table of the database that such receipt has been made
    $ins_con = $ins_ob->ins_recp($rid,$cname,$pmtd,$prod,$total,$wname,$fullDate,$date,$time);
    if ($ins_con) {
           
        echo "<script>window.location='../receipt.php?rd=$rid'</script>";
           
    }else {
        echo "<script>window.location='../receipt_reg.php?msg=Receipt Was not recorded'</script>";
    }
    
    
}



function pint(){
    $len = 9;
    $char = '123456789';
    $pin = '';
    
    for ($i=0; $i <=$len; $i++) {
       @$pin.=$char[mt_rand(0,strlen($char))];
    }
    return $pin;
}

?>
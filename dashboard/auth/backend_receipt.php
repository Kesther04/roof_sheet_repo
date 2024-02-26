<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $rid = pint();
    $client = $_POST['client'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $pmtd = $_POST['pmtd'];
    $purpose = $_POST['purpose'];
    $total = $_POST['total'];
    $amt = $_POST['amt'];
    $bal = $_POST['bal'];
    $writer = $_POST['writer'];

    require("../../date_la_time.php");
    require("../../class/ins_class.php");
    $ins_ob = new INS();

    //to insert into the table of the database that such receipt has been made
    $ins_con = $ins_ob->ins_receipt($rid,$client,$address,$phone,$pmtd,$purpose,$total,$amt,$bal,$writer,$fullDate,$date,$time);
    if ($ins_con) {
        echo "<script>window.location='../house_receipt.php?rd=$rid'</script>";           
    }else {
        echo "<script>window.location='../house_rent_receipt.php?msg=Receipt was not created'</script>";
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
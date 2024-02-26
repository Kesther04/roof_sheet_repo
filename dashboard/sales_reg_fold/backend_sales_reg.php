<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $rid = pint();
    $clname = $_POST['clname'];
    $clphone = $_POST['clphone'];
    $cladd = $_POST['cladd'];
    $bfitm = $_POST['item'];
    $itm = implode("-|-",$bfitm);
    $bfqty = $_POST['qty'];
    $qty = implode("-|-",$bfqty);
    $bfunit = $_POST['unit'];
    $unit = implode("-|-",$bfunit);
    $tot = $_POST['tot'];
    if (empty($_POST['instal'])) {
        $instal = 0;
    }else {
        $instal = $_POST['instal'];
    }

    if (empty($_POST['acces'])) {
        $acces = 0;
    }else {
        $acces = $_POST['acces'];
    }

    if (empty($_POST['transprt'])) {
        $tprt = 0;
    }else {
        $tprt = $_POST['transprt'];
    }

    
    require("../../date_la_time.php");


    require("../../class/ins_class.php");

    $ins_ob = new INS();

    require("../../class/sel_class.php");

    $sel_ob = new SEL();

    //to insert into the table of the database showing that such sales was recorded
    $ins_con = $ins_ob->ins_sales_reg($rid,$clname,$clphone,$cladd,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$fullDate,$date,$time);
    if ($ins_con) {
           
        echo "<script>window.location='../invoice.php?rd=$rid'</script>";
           
    }else {
        echo "<script>window.location='../sales_reg.php?msg=Sales was not recorded'</script>";
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
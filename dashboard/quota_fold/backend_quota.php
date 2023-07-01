<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $qid = pint();
    $clname = $_POST['clname'];
    $quot = $_POST['quotate'];
    $locat = $_POST['locat'];
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

    $wnm = $_POST['wtname'];
    require("../../date_la_time.php");

    require("../../class/ins_class.php");

    $ins_ob = new INS();

    require("../../class/sel_class.php");

    $sel_ob = new SEL();

    if (empty($_POST['qdeson'])  AND empty($_POST['qdestw'])) {
        $qdeson = 0;
        $qdestw = 0;
        $desnmon = 0;
        $despropon = 0;
        $desnmtw = 0;
        $desproptw = 0;

        //to insert values into the quota table
        $ins_con = $ins_ob->ins_quota($qid,$quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$fullDate,$date,$time);
        if ($ins_con) {     
            
            echo "<script>window.location='../quota_prt.php?rd=$qid'</script>";
        
        }else{
            echo "<script>window.location='../quota.php?msg=Not Inserted'</script>";
        }
            
            
    }else {
        $qdeson = $_POST['qdeson'];
        $qdestw = $_POST['qdestw'];
        $bfdesnmon = $_POST['desnmon'];
        $desnmon = implode("-|-",$bfdesnmon);
        $bfdesnmtw = $_POST['desnmtw'];
        $desnmtw = implode("-|-",$bfdesnmtw);
        $bfdespropon = $_POST['despropon'];
        $despropon = implode("-|-",$bfdespropon);
        $bfdesproptw = $_POST['desproptw'];
        $desproptw = implode("-|-",$bfdesproptw);
            
        //to insert values into the quota table
        $ins_con = $ins_ob->ins_quota($qid,$quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$fullDate,$date,$time);
        if ($ins_con) {
     
            echo "<script>window.location='../quota_prt.php?rd=$qid'</script>";
      
        }else{
            echo "<script>window.location='../quota.php?msg=Not Inserted'</script>";
        }
     
        
    }


    

    
}



function pint(){
    $len = 9;
    $char = '1234567890';
    $pin = '';
    
    for ($i=0; $i <=$len; $i++) {
       @$pin.=$char[mt_rand(0,strlen($char))];
    }
    return $pin;
}


?>
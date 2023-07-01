<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['sid'];
    $qid = $_POST['ref_id'];
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

    // require("../../class/sel_class.php");
    // $sel_ob = new SEL();

    require("../../class/del_class.php");

    $del_ob = new DEL();

    require("../../class/up_class.php");

    $up_ob = new UPD();

    if (!isset($_POST['qdeson']) AND !isset($_POST['qdestw'])) {
        $qdeson = 0;
        $qdestw = 0;
        $desnmon = 0;
        $desnmtw = 0;
        $despropon = 0;
        $desproptw = 0;

        //to update values in the quota table
        $up_con = $up_ob->upd_quota($quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$qid,$id);
        if ($up_con) {
            echo "<script>window.location='../quota_prt.php?rd=$qid'</script>";     
        }else{
            echo "<script>window.location='../quota_upd.php?rd=$qid&msg=No Updates Made'</script>";
        }
        
    }else {

        if (empty($_POST['qdeson'])  AND empty($_POST['qdestw']) ) {
            $qdeson = 0;
            $qdestw = 0;
            $desnmon = 0;
            $desnmtw = 0;
            $despropon = 0;
            $desproptw = 0;

            //to update values in the quota table
            $up_con = $up_ob->upd_quota($quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$qid,$id);
            if ($up_con) {
                echo "<script>window.location='../quota_prt.php?rd=$qid'</script>";
            }else{
                echo "<script>window.location='../quota_upd.php?rd=$qid&msg=No Updates Made'</script>";
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

            //to update values in the quota table
            $up_con = $up_ob->upd_quota($quot,$locat,$clname,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$wnm,$qdeson,$desnmon,$despropon,$qdestw,$desnmtw,$desproptw,$qid,$id);
            if ($up_con) {
                echo "<script>window.location='../quota_prt.php?rd=$qid'</script>";
            }else{
                echo "<script>window.location='../quota_upd.php?rd=$qid&msg=No Updates Made'</script>";
            }
        }
    }

   

    
}



?>
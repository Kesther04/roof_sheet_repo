<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['sid'];
    $rid = $_POST['ref_id'];
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

    // require("../../class/sel_class.php");

    // $sel_ob = new SEL();

    require("../../class/del_class.php");

    $del_ob = new DEL();

    
    require("../../class/up_class.php");

    $up_ob = new UPD();

    //to update the table of the database showing that such sales was recorded
    $up_con = $up_ob->upd_sales_reg($clname,$clphone,$cladd,$itm,$qty,$unit,$tot,$instal,$acces,$tprt,$rid,$id);
    if ($up_con) {
       
        echo "<script>window.location='../receipt.php?rd=$rid'</script>";
        
    }else {
        echo "<script>window.location='../rcp_upd.php?rd=$rid&msg=Sales was not recorded'</script>";
    }
    
}




?>
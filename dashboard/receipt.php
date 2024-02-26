<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sdash.css" media="all">
    <script src="../js/jquery.js"></script>
    <script src="../js/snd_dash.js"></script>
    <script src="../js/feat.js"></script>
    <title>DASHBOARD</title>
</head>
<body onload="window.print()">

    <div class="bf-top-line-recp">
        <div class="top-line-recp-container">

            <div class="header">
                <div class="logo"><img src="../images/logo.png"></div>
                <div class="con-fst-snd-nd">
                    <div class="fst-hd"> PEC ALUMINIUM DESIGNERS</div>
                    <div class="snd-hd">Long span roofing,sheet,PVC ceiling, accesories and installations</div>
                </div>
            </div>

            <div class="af-header">
                <div>
                    BRANCH OFFICE<br>
                    New Timber Shade,<br>
                    Abakaliki Ebonyi State
                </div>

                <div>
                    3 Obiora Arinze Street,Emene<br>
                    Enugu East L.G.A Enugu State<br>
                    Tel: 08066528601,08024557122<br>
                    e-mail-Chidihisgrace@yahoo.com
                </div>
            </div>

            <hr style="height:5px;background:rgb(37, 75, 200);">
            <div class="main-con">
                <?php 
                    $rid = $_GET['rd'];
                    require("../class/sel_class.php");
                    $sel_ob = new SEL();
                    $sel_con = $sel_ob->sel_recp($rid);
                    if ($sel_con) {
                        $row = $sel_con->fetch_assoc();
                    
                ?>
                <div class="fst-inner-main-con">
                    <div id="recp-head">Official Receipt</div>
                    <div class="af-recp-head">NO.<?php echo $row['ref_id']; ?></div>
                    <div class="af-recp-head">DATE:<?php echo $row['date']; ?></div>
                </div>
                
                <div class="snd-inner-main-con">
                    <div class="simc-con">
                        <div class="small-simc-con">Received From</div>
                        <div class="big-simc-con"><?php echo $row['customer_name']; ?></div>
                    </div>
                    <div class="simc-con">
                        <div class="small-simc-con">The Sum Of</div>
                        <div class="big-simc-con"><?php echo '<strike>N</strike>'.$row['total']; ?></div>
                    </div>
                    <div class="simc-con">
                        <div class="small-big-simc-con">By <?php echo $row['pmtd']; ?></div>
                        <div class="small-big-simc-con">Drawn On: <?php echo $row['date']; ?></div>
                    </div>
                    <div class="simc-con">
                        <div class="small-simc-con">Being</div>
                        <div class="big-simc-con"><?php echo $row['products']; ?></div>
                    </div>
                </div>

                <div class="thr-inner-main-con">
                    <div class="timc-con">
                        <div></div>
                        For PecAluminium Designers
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>
    </div>
    <script src="../js/metr.js"></script>
    
</body>
</html>
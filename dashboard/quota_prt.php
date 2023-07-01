<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sdash.css" media="all">
    <!-- <link rel="stylesheet" href="../css/sdash_rep.css" media="all"> -->
    <script src="../js/jquery.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/snd_dash.js"></script>
    <script src="../js/feat.js"></script>
    
    <title>QUOTATION</title>
    
</head>
<body onload="window.print()">

    <script></script>


    <section class="recp-div-container">
        <div class="ano-sec-recp-div">

            <div class="line-div-container">

                <div class="top-line-div-container">

                    <div class="header">
                        <div class="fst-hd">PEC ALUMINIUM DESIGNERS</div>
                        <div class="snd-hd">Long span roofing,sheet,PVC ceiling, accesories and installations</div>
                    </div>

                    <div class="af-header">
                        <div class="logo"><img src="../images/logo.png"></div>

                        <div>
                            Nwadigo Junction Igbeagu Izzi,<br>
                            Along Abakaliki Expressway,<br>
                            Ebonyi State.<br>
                            08066528601/08054540473
                        </div>
                    </div>

                    <hr style="height:15px;background:rgb(37, 75, 200);">

                </div>


                <?php 
                    require("../class/sel_class.php");
                    $sel_ob = new SEL();
                    $id = $_GET['rd'];
                    $sel_con = $sel_ob->sel_quot($id);
                    if ($sel_con) {
                        $row = $sel_con->fetch_assoc();
                    
                
                ?>
                <div class="next-line-div-container">
                    <h3 class="fst-h3">QUOTATION FOR <?php echo $row['quot_name'];  ?></h3>
                    <h3>CUSTOMER: <?php echo $row['custom_name'];  ?></h3>

                    <div class="snd-nldc">
                        <div>ADDRESS:<?php echo $row['locat']; ?></div>
                        <div>Date:<?php echo $row['date'];  ?></div>
                    </div>

                    <?php 
                        if ($row['des_one'] == "0" AND $row['des_two']=="0") {
                            echo "";
                        }else {     
                    ?>
                    <div class="thr-nldc">
                        
                        <table>
                            <thead>
                                <tr><td><h3>DESCRIPTION OF <?php echo $row['des_one']; ?></h3></td></tr>
                            </thead>

                            <tbody>
                            <?php  
                                $dlno = explode("-|-",$row['label_name_one']);
                                $dlpo = explode("-|-",$row['label_prop_one']);
                                foreach ($dlno as $key => $value) {
                                    if ($dlpo[$key] == "") {
                                        echo "";
                                    }else {
                                        echo '<tr><td>'.$value.':</td>'.'<td>'.$dlpo[$key].'</td></tr>';
                                    }
                                    
                                }
                            ?>
                            </tbody>

                           
                        </table>
                    
                        
                        <table>
                            <thead>
                                <tr><td><h3>DESCRIPTION OF <?php echo $row['des_two']; ?></h3></td></tr>
                            </thead>

                            <tbody>
                            <?php  
                                $dlnt = explode("-|-",$row['label_name_two']);
                                $dlpt = explode("-|-",$row['label_prop_two']);
                                foreach ($dlnt as $key => $value) {
                                    if ($dlpt[$key] == "") {
                                        echo "";
                                    }else {
                                        echo '<tr><td>'.$value.':</td><td>'. $dlpt[$key].'</td></tr>';
                                    }
                                    
                                }
                            ?>
                            </tbody>
                            
                        </table>
                            
                    </div>
                    <?php } ?>


                    <div class="fir-div-container fth-nldc">
                        <table class="main-info-rep">

                            <thead>
                                <tr class="top-fth-nldc">
                                    <td>ITEMS DESCRIPTION</td>
                                    <td>QTY(LM)</td>
                                    <td>RATE</td>
                                    <td>AMOUNT(<strike>N</strike>)</td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                    $itm = explode("-|-",$row['itm']);
                                    $qty = explode("-|-",$row['qty']);
                                    $unit = explode("-|-",$row['runit']);
                                    foreach ($itm as $key => $value) {
                                        
                                ?>
                                <tr>
                                    <td><?php echo $value; ?></td>
                                    <td><?php echo number_format($qty[$key],0); ?></td>
                                    <td><?php echo number_format($unit[$key],2); ?></td>
                                    <?php $amt = $qty[$key]*$unit[$key]; ?>
                                    <td><?php echo number_format($amt,2); ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>

                            <tfoot>
                                <tr class="top-fth-nldc">
                                    <td colspan="3">SUB-TOTAL</td>
                                    <td><?php echo number_format($row['total'],2); ?></td>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="main-info-rep">
                            <tfoot>
                                <tr>
                                    <td colspan="3">INSTALLATION</td>
                                    <td></td>
                                    <td><?php echo number_format($row['instal'],2); ?></td>
                                </tr>

                                <tr>
                                    <td colspan="3">ACCESORIES</td>
                                    <td></td>
                                    <td><?php echo number_format($row['acces'],2); ?></td>
                                </tr>

                                <tr>
                                    <td colspan="3">TRANSPORTATION</td>
                                    <td></td>
                                    <td><?php echo number_format($row['transprt'],2); ?></td>
                                </tr>

                                <tr class="top-fth-nldc">
                                    <td colspan="3">TOTAL</td>
                                    <td></td>
                                    <td>
                                        <?php 
                                            $total_iat = $row['instal']+$row['acces']+$row['transprt']; 
                                            echo number_format($total_iat,2);
                                        ?>
                                    </td>
                                </tr>
                                
                            </tfoot>

                        </table>

                        <table class="main-info-rep">
                            <tfoot>
                                <tr class="top-fth-nldc">
                                    <td colspan="3">TOTAL CONTRACT SUM</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?php
                                            $bgr = $row['total'] + $total_iat;
                                            echo number_format($bgr,2); 
                                        ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="sxth-nldc">
                        <p>YOURS FAITHFULLY,</p>
                        <p><?php echo $row['wname']; ?></p>
                    </div>

                    
                </div>

                <?php } ?>
                
            </div>

        </div>
        <div class="inner-masag-cot-back" title="back to page">
            <a href="quota.php">
                <img src="../images/arro.svg" width="30" class="sec-img">
                <img src="../images/arro-fill.svg" width="30" class="fir-img">
            </a>
        </div>
    </section>
</body>
</html>
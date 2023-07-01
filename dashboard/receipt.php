<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sdash.css" media="all">
    <!-- <link rel="stylesheet" href="../css/sdash_rep.css" media="all"> -->
    <script src="../js/jquery.js"></script>
    <script src="../js/snd_dash.js"></script>
    <script src="../js/feat.js"></script>
    <script src="../js/ajax.js"></script>
    <title>RECEIPT</title>
</head>
<body onload="window.print()">
    

<section class="recp-div-container">

    
    <?php
        require("../class/sel_class.php");
        $sel_ob = new SEL();
        $id = $_GET['rd'];
        $sel_con = $sel_ob->sel_sales_rid($id);
        if ($sel_con) {
            $row = $sel_con->fetch_assoc();
        
    ?>
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


        <div class="fir-div-container">

            <div class="rep-header">
                <table class="comp-info-rep">
                    <tr><td>Address:</td></tr>
                    <tr><td>Opposite Ebonyi Hotel,Abakaliki Ebonyi State</td></tr>
                </table>

                <div class="inner-rep-header">INVOICE</div>
            </div>

            <div class="otter-info">
                <table class="user-info-rep">
                    <tr><td>Invoice To:</td></tr>
                    <tr><td><span>Name:</span><?php echo $row['cl_name']; ?></td></tr>
                    <tr><td><span>Address:</span><?php echo $row['cl_add']; ?></td></tr>
                    <tr><td><span>Contact No.:</span><?php echo $row['cl_phone']; ?></td></tr>
                </table>

                <div class="oi-dat">
                    Date:<?php echo $row['date']; ?>
                </div>

            </div>
            <table class="main-info-rep">

                <thead>
                    <tr>
                        <td>Description of Items</td>
                        <td>Quantity</td>
                        <td>Unit Price(<strike>N</strike>)</td>
                        <td>Amount(<strike>N</strike>)</td>
                    </tr>
                </thead>

                

                <tbody>
                    <?php

                        $itm = explode("-|-",$row['itm']);
                        $qty = explode("-|-",$row['qty']);
                        $unit = explode("-|-",$row['aunit']);
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
                    <tr class="tbold">
                        <td colspan="3">Total</td>
                        <td><?php echo number_format($row['total'],2); ?></td>
                    </tr>

                    

                </tfoot>

            </table>

            <table class="main-info-rep">
                <tfoot>
                    <tr>
                        <td colspan="3">Installation</td>
                        <td></td>
                        <td><?php echo number_format($row['instal'],2); ?></td>
                    </tr>

                    <tr>
                        <td colspan="3">Accessories</td>
                        <td></td>
                        <td><?php echo number_format($row['acces'],2); ?></td>
                    </tr>

                    <tr>
                        <td colspan="3">Transportation & Handling</td>
                        <td></td>
                        <td><?php echo number_format($row['transprt'],2); ?></td>
                    </tr>

                    <tr class="tbold">
                        <td colspan="3">Total</td>
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
                    <tr class="tbold">
                        
                        <td colspan="4">Grand Total</td>
                        <td></td>
                        <td></td>
                        <td></td>
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

            <table class="main-info-rep">
                <tfoot>
                    <tr>
                        <td colspan="4"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>REFERENCE ID</td>
                        <td><?php echo $row['ref_id']; ?></td>
                    </tr>
                </tfoot>
            </table>

        </div>
    
    <?php } ?>

    <div class="inner-masag-cot-back" title="back to page">
        <a href="sales_reg.php">
            <img src="../images/arro.svg" width="30" class="sec-img">
            <img src="../images/arro-fill.svg" width="30" class="fir-img">
        </a>
    </div>

</section>

    <script src="../js/metr.js"></script>
    
</body>
</html>
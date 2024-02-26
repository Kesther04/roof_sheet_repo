<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sdash.css" media="all">
    <link rel="stylesheet" href="../css/sdash_rep.css" media="all">
    <script src="../js/jquery.js"></script>
    <script src="../js/snd_dash.js"></script>
    <script src="../js/feat.js"></script>
    <title>DASHBOARD</title>
</head>
<body>
    

<?php  require("dashboard_layout.php"); ?>

<section class="main-div-container">
    <div class="sec-div-container">

        <?php
            require("../class/sel_class.php");
            $sel_ob = new SEL();
            $selr = $sel_ob->sel_recp_all();
            $sele = $sel_ob->sel_house_recp_all();
            $selq = $sel_ob->sel_quot_all();
        ?>
        <h1>ACCESS TO ALL FEATURES</h1>
        <div class="contrl-div-con">
            <div class="fst-contrl-div-con">
                <div class="inner-fcdc">
                    <h3>TOTAL RECEIPTS MADE</h3>
                    <p><?php echo mysqli_num_rows($selr); ?></p>
                </div>

                <div class="inner-fcdc">
                    <h3>TOTAL QUOTATIONS CREATED</h3>
                    <p><?php echo mysqli_num_rows($selq); ?></p>
                </div>

                <div class="inner-fcdc">
                    <h3>TOTAL HOUSE RENT RECEIPTS MADE</h3>
                    <p><?php echo mysqli_num_rows($sele); ?></p>
                </div>
            </div>

            <div class="snd-contrl-div-con">
                <a href="sales_reg.php"><button>MAKE INVOICE</button></a>
                <a href="view_invoice.php"><button>VIEW INVOICE</button></a>
                <a href="receipt_reg.php"><button>MAKE RECEIPT</button></a>
                <a href="view_receipt.php"><button>VIEW RECEIPT</button></a>
                <a href="house_rent_receipt.php"><button>HOUSE RENT RECEIPT</button></a>
                <a href="view_house_receipt.php"><button>VIEW HOUSE RECEIPT</button></a>
                <a href="quota.php"><button>CREATE QUOTATION</button></a>
                <a href="quota_fill.php"><button>VIEW QUOTATIONS</button></a>
            </div>
        </div>
    </div>
</section>

    <script src="../js/metr.js"></script>
</body>
</html>
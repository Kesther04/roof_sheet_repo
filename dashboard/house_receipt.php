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
<body  onload="window.print()">
    
    <section class="receipt bf-top-line-recp">
        <?php
            require("../class/sel_class.php");
            $sel_ob = new SEL();
            $sel_con = $sel_ob->sel_house_recp($_GET['rd']);
            $row = $sel_con->fetch_assoc();
        ?>
        <div class="first-div-receipt">
            <h1>HOUSE RENT RECEIPT</h1>
            <p>Date: <span><?php echo $row['date']; ?></span></p>
            <p>Receipt No: <span><?php echo $row['ref_id']; ?></span></p>
        </div>

        <div class="second-div-receipt">
            <p>Received from: <span><?php echo $row['customer_name']; ?></span> the amount of</p>
            <p><span><?php echo '<strike>N</strike>'.number_format($row['amt_paid'],2); ?></span> for</p>
            <p>Payment of <span><?php echo $row['pur_pose']; ?></span></p>
            <p>to <span><?php echo $row['writer_name']; ?></span></p>
        </div>

        <div class="third-div-receipt">
            <table>
                <tr>
                    <td>Total Amount to be Received</td>
                    <td><?php echo  '<strike>N</strike>'.number_format($row['total_amt'],2); ?></td>
                </tr>

                <tr>
                    <td>Amount Received</td>
                    <td><?php echo  '<strike>N</strike>'.number_format($row['amt_paid'],2); ?></td>
                </tr>

                <tr>
                    <td>Balance</td>
                    <td><?php echo  '<strike>N</strike>'.number_format($row['amt_rem'],2); ?></td>
                </tr>
            </table>
        </div>

        <div class="forth-div-receipt">
            <p>Received By: <span><?php echo $row['pmtd']; ?></span></p>
            <p>Address: <span><?php echo $row['customer_address']; ?></span></p>
            <p>Phone: <span><?php echo $row['phone_no']; ?></span></p>
        </div>

    </section>

    
</body>
</html>
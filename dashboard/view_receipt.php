<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sdash.css" media="all">
    <link rel="stylesheet" href="../css/sdash_rep.css" media="all">
    <link rel="stylesheet" href="../css/dt.css" media="all">
    <script src="../js/jquery.js"></script>
    <script src="../js/snd_dash.js"></script>
    <script src="../js/feat.js"></script>
    <script src="../js/dt.js"></script>
    <script src="../js/ajax.js"></script>
    <script>
        $(document).ready(function(){

            new DataTable('.myTable');
        })
    </script>
    <title>DASHBOARD</title>
</head>
<body id="total-div">
    

<?php  require("dashboard_layout.php"); ?>

<div id="masag">
    <div class="msg">    
        <div class="msa"></div>
        <a href="sales_reg" title="return to page">
            <button class="aj-btn">COMPLETE</button>
        </a>
    </div>
</div>

<section class="main-div-container">

        <div class="sec-div-container">

            <h1>RECEIPT RECORDS</h1>
    
            <div class="secun-div-container">
                <table class="myTable">
                    <thead>
                        <tr id="top-line-div-table">
                            <th>REFERENCE_ID</th>
                            <th>RECEIVED FROM</th>
                            <th>STATEMENT</th>
                            <th>DATE_RECORDED</th>
                            <th>PRINT</th>
                            <th>DOWNLOADS</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php  
                            require("../class/sel_class.php");
                            $sel_ob = new SEL();
                            $sel_con = $sel_ob->sel_recp_all();
                            if ($sel_con) {while ($row = $sel_con->fetch_assoc()) {
                    
                        ?>
                        <tr>
                            <td><?php echo $row['ref_id']; ?></td>
                            <td><?php echo $row['customer_name']; ?></td>
                            <td><?php echo $row['products']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><button class="cond-btn" onclick="window.open('receipt.php?rd=<?php echo $row['ref_id'] ?>', '_blank', 'width=500')">PRINT</button></td>
                            <td><button class="cond-btn">DOWNLOAD</button></td>
                            <td title="Delete Receipt">
                                <form class="recp-fsi" action="sales_reg_fold/receipt_del.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required readonly>
                                    <input type="hidden" name="rid" value="<?php echo $row['ref_id']; ?>" required readonly>
                                    <button>&times;</button>
                                </form>
                            </td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>

            </div>
            
        </div>


    <div class="seco-div-container"></div>
</section>

    <script src="../js/metr.js"></script>
    

</body>
</html>
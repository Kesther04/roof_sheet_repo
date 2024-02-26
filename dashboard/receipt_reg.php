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

    <form  class="recp_upl" id="itm_quotatn" action="sales_reg_fold/backend_receipt_reg.php" method="post" enctype="multipart/form-data">
    
        <div class="sec-div-container">
            <?php
                if (isset($_GET['msg'])) {
                    echo "<div class='msg-log'>$_GET[msg]</div>";
                }
        
            ?>

            <h1>MAKE RECEIPT</h1>

    
            <div class="fir-div-container">
                
                <table>
                    <tr>
                        <td>
                            <span>Client</span>
                            <input type="text" name="clname" placeholder="Enter the Name of the client" required>
                        </td>

                        <td>
                            <span>Statement of Receipt</span>
                            <input type="text" name="prod" placeholder="Enter the Statement of receipt" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Total Amount</span>
                            <input type="number" name="amt" placeholder="Enter the Total Amount of Commodity / ies" required>
                        </td>    
                        
                        <td>
                            <span>Name of Writer</span>
                            <input type="text" name="wname" placeholder="Enter your Name as the writer of this receipt" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Payment Method</span>
                            <select name="pmtd" required>
                                <option></option>
                                <option>Cash</option>
                                <option>Bank Transfer</option>
                                <option>Bank Deposit</option>
                            </select>
                        </td>
                    </tr>

                </table>
                
            </div>
            
            <div class="con-btn-div">
                <button class="con-btn">CREATE</button>
            </div>
    

   
        </div>

    </form>
   

</section>

    <script src="../js/metr.js"></script>
    
</body>
</html>
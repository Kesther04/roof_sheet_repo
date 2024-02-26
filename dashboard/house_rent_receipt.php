<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sdash.css" media="all">
    <link rel="stylesheet" href="../css/sdash_rep.css" media="all">
    <script src="../js/jquery.js"></script>
    <script src="../js/snd_dash.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <!-- this page describes the creation of the receipts -->
    <?php
        require("dashboard_layout.php");
    ?>

    
    <section class="main-div-container">

        <form id="recp" action="auth/backend_receipt.php" method="post" enctype="multipart/form-data">

            <div class="sec-div-container">
                <?php
                    if (isset($_GET['msg'])) {
                        echo "<div class='msg-log'>$_GET[msg]</div>";
                    }
            
                ?>

                <h1>CREATE HOUSE RENT RECEIPT</h1>


                <div class="fir-div-container">
                    
                    <table>
                        <tr>
                            <td>
                                <span>Client</span>
                                <input type="text" name="client" placeholder="Enter the Name of the Client" required>
                            </td>

                            <td>
                                <span>Purpose of Receipt</span>
                                <input type="text" name="purpose" placeholder="Enter the Purpose of Receipt" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span>Client Address</span>
                                <input type="text" name="address" placeholder="Enter the Address of the Client"  required>
                            </td>    
                            
                            <td>
                                <span>Client Phone Number</span>
                                <input type="number" name="phone" placeholder="Enter Client Phone Number" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span>Amount Paid</span>
                                <input type="number" name="amt" id="amt" onkeyup="erbal()" placeholder="Enter the Amount Paid by the customer" required>
                            </td>    
                            
                            <td>
                                <span>Total Amount</span>
                                <input type="number" name="total" id="total" onkeyup="erbal()" placeholder="Enter the Total Amount" required>
                            </td>  
                        </tr>

                        <tr>
                            <td>
                                <span>Balance</span>
                                <input type="number" name="bal" id="bal" placeholder="Balance Remaining" required readonly>
                            </td>    
                            
                            <td>
                                <span>Name of Writer</span>
                                <input type="text" name="writer" placeholder="Enter your Name as the writer of this receipt" required>
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

    <script src="../js/bal.js"></script>
</body>
</html>
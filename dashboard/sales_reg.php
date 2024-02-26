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

    <form  class="itm_upl" id="itm_quotatn" action="sales_reg_fold/backend_sales_reg.php" method="post" enctype="multipart/form-data">
    
        <div class="sec-div-container">
            <?php
                if (isset($_GET['msg'])) {
                    echo "<div class='msg-log'>$_GET[msg]</div>";
                }
        
            ?>

            <h1>MAKE INVOICE</h1>

    
            <div class="fir-div-container">

                <fieldset>
                    <legend>Customer Info</legend>
                    <table>
                        <tr>
                            <td>
                                <span>Client</span>
                                <input type="text" name="clname" placeholder="Enter the fullname of the client" required>
                            </td>    
                        
                            <td>
                                <span>Contact No.</span>
                                <input type="number" name="clphone" placeholder="Enter the contact number of client" required>
                            </td>
                    
                            <td>
                                <span>Address of Client</span>
                                <input type="text" name="cladd" placeholder="Enter the Address of the Client" required > 
                            </td> 
                        </tr>
                    </table>
                </fieldset>
                
                <table class="first-max">

                    <tr>
                        <td>Description of Items</td>
                        <td>Quantity</td>
                        <td>Unit Price(<strike>N</strike>)</td>
                        <td>Amount(<strike>N</strike>)</td>
                    </tr>

                    <tr>
                        <td> <input type="text" name="item[]"  required placeholder="Enter Item Description" > </td>
                        <td> <input type="number" name="qty[]" onkeyup="quantity(this)"  required placeholder="Enter Quantity"> </td>
                        <td> <input type="number" name="unit[]" onkeyup="price(this)"  required placeholder="Enter Unit Price"> </td>
                        <td> <input type="text" name="amt[]" class="amt"  required readonly > </td>
                    </tr>
                    
                </table>

                <div class="firm-div-con">
                    <input type="button" id="bcl" value="Add More Fields">
                    
                </div>

                <table>
                    <tr>
                        <td>
                            <span>Total Price of Materials</span>
                            <input type="number" name="tot" id="total" onchange="grandTot()"  required readonly>
                        </td>
                    
                    </tr>

                    <tr>
                    
                        <td>
                            <span>Installation</span>
                            <input type="number" name="instal" id="instal" onkeyup="grandTot()"  placeholder="Optional">
                        </td>
                    

                    
                        <td>
                            <span>Accesories</span>
                            <input type="number" name="acces" id="acces" onkeyup="grandTot()"  placeholder="Optional">
                        </td>
                    

                    
                        <td>
                            <span>Transportation & Handling</span>
                            <input type="number" name="transprt" id="transprt" onkeyup="grandTot()" placeholder="Optional">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Grand Total</span>
                            <input type="number" name="gr_tot" id="grtot" required readonly>
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
    

    <script>
        // var arr = ['john',1991,'0702222',20];
        // const[x,...z] = arr;
        

        // var arr1 = ['john',1991,'0702222',20];
        // var arr2 = [100,2000];
        // const [i,...l] = [...arr1,...arr2];
    </script>
</body>
</html>
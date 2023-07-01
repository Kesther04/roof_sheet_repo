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
<div id="masag">
    <div class="msx"></div>
</div>
<body>
    <?php  require("dashboard_layout.php"); ?>

        
    

    <section class="main-div-container">

        <form  class="itm_quota" id="itm_quotatn" action="quota_fold/backend_quota.php" method="post" enctype="multipart/form-data">
            <div class="sec-div-container">
                 
                <?php
                if (isset($_GET['msg'])) {
                    echo "<div class='msg-log'>$_GET[msg]</div>";
                }
            
                ?>
                <h1>CREATE QUOTATION</h1>

                <div class="fir-div-container">

                    <fieldset>
                        <legend>First Main Info</legend>
                        <table>
                            <tr>
                                <td>
                                    <span>Customer</span>
                                    <input type="text" name="clname" placeholder="Enter the name of the customer" required>
                                </td>    
                            

                                <td>
                                    <span>Quotation</span>
                                    <input type="text" name="quotate" placeholder="Enter the name of the quotation" required>
                                    <input type="hidden" name="locat" value="Opposite Ebonyi Hotel,Abakaliki Ebonyi State">
                                </td>    


                               


                            </tr>
                        </table>
                    </fieldset>

                    <div class="quot-des">
                        
                        <fieldset>
                            <legend>Quotation Descriptions(For Roofing Only)</legend>

                            <table class="des-ccl">
                                <tr>
                                    <td>Description One <input type="text" name="qdeson"  placeholder="Enter Description"></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span>Profile</span>
                                        <input type="hidden" name="desnmon[]" value="PROFILE" readonly>
                                        <input type="text" name="despropon[]" placeholder="Enter Profile">
                                    </td>

                                    <td>
                                        <span>Thickness</span>
                                        <input type="hidden" name="desnmon[]" value="THICKNESS" readonly>
                                        <input type="text" name="despropon[]" placeholder="Enter Thickness">
                                    </td>

                                    <td>
                                        <span>Color</span>
                                        <input type="hidden" name="desnmon[]" value="COLOR" readonly>
                                        <input type="text" name="despropon[]" placeholder="Enter Color" >
                                    </td>

                                    <td>
                                        <span>Type</span>
                                        <input type="hidden" name="desnmon[]" value="TYPE" readonly>
                                        <input type="text" name="despropon[]" placeholder="Enter Type" >
                                    </td>
                                 
                                </tr>
            
                            </table>

                            <div class="firm-div-con">
                                <input type="button" id="ccl" value="Add More">
                            </div>


                            <table class="des-dcl">
                                <tr>
                                    <td>Description two <input type="text" name="qdestw"  placeholder="Enter Description"></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <span>Profile</span>
                                        <input type="hidden" name="desnmtw[]" value="PROFILE" readonly>
                                        <input type="text" name="desproptw[]" placeholder="Enter Profile">
                                    </td>

                                    <td>
                                        <span>Thickness</span>
                                        <input type="hidden" name="desnmtw[]" value="THICKNESS" readonly>
                                        <input type="text" name="desproptw[]" placeholder="Enter Thickness">
                                    </td>

                                    <td>
                                        <span>Color</span>
                                        <input type="hidden" name="desnmtw[]" value="COLOR" readonly>
                                        <input type="text" name="desproptw[]" placeholder="Enter Color" >
                                    </td>

                                    <td>
                                        <span>Type</span>
                                        <input type="hidden" name="desnmtw[]" value="TYPE" readonly>
                                        <input type="text" name="desproptw[]" placeholder="Enter Type" >
                                    </td>
                                 
                                </tr>
                            </table>
                            
                            <div class="firm-div-con">
                                <input type="button" id="dcl" value="Add More">
                            </div>
                            
                        </fieldset>
                         
                    </div>

                    <fieldset>
                        <legend>Other Item Descriptions</legend>
                        <table class="first-max">
                            <tr>
                                <td>Items Description</td>
                                <td>Quantity</td>
                                <td>Rate</td>
                                <td>Amount(<strike>N</strike>)</td>
                            </tr>

                            <tr>
                                <td> <input type="text" name="item[]"  required placeholder="Enter Item Description" > </td>
                                <td> <input type="number" name="qty[]" onkeyup="quantity(this)"  required placeholder="Enter Quantity"> </td>
                                <td> <input type="number" name="unit[]" onkeyup="price(this)"  required placeholder="Enter Unit Price"> </td>
                                <td> <input type="text" name="amt[]"  class="amt" required readonly > </td>
                            </tr>
                
                        </table>
                    </fieldset>

                    <div class="firm-div-con">
                        <input type="button" id="bcl" value="Add More Fields">
                    </div>

                    <table>
                        <tr>
                            <td>
                                <span>Sub-Total</span>
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
                                <span>Total Contract Sum</span>
                                <input type="number" name="gr_tot" id="grtot"  required readonly>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <span>Writer's Name</span>
                                <input type="text" name="wtname"  required placeholder="Enter Name of Writer">
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
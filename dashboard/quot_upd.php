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

        <form  class="itm_quota" id="itm_quotatn" action="quota_fold/backend_quot_upd.php" method="post" enctype="multipart/form-data">
            <div class="sec-div-container">
                <?php
                    if (isset($_GET['msg'])) {
                        echo "<div class='msg-log'>$_GET[msg]</div>";
                    }
            
                ?>
                <h1>UPDATE QUOTATION</h1>

                <?php
                    require("../class/sel_class.php");
                    $sel_ob = new SEL();

                    $id = $_GET['rd'];
                    $sel_con = $sel_ob->sel_quot($id);
                    if ($sel_con) {
                        
                    $row = $sel_con->fetch_assoc();
                ?>

                <div class="fir-div-container">

                    <fieldset>
                        <legend>First Main Info</legend>
                        <table>
                            <tr>
                                <td>
                                    <span>Customer</span>
                                    <input type="text" name="clname" placeholder="Enter the name of the customer" value="<?php echo $row['custom_name'];  ?>" required>
                                </td>    
                            

                                <td>
                                    <span>Quotation</span>
                                    <input type="text" name="quotate" placeholder="Enter the name of the quotation" value="<?php echo $row['quot_name'];  ?>" required>
                                </td>    


                                <td>
                                    <span>Location</span>
                                    <input type="text" name="locat" placeholder="Enter Location" value="<?php echo $row['locat'];  ?>" required>
                                </td>    


                            </tr>
                        </table>
                    </fieldset>

                    <?php 
                       
                        if ($row['des_one'] == "0" AND $row['des_two']=="0") {
                            echo "";
                        }else {     
                            
                    ?>
                    <div class="quot-des">
                        
                        <fieldset>
                            <legend>Quotation Descriptions(For Roofing Only)</legend>
                            
                            <table class="des-ccl">
                                <tr>
                                    <td>Description One <input type="text" name="qdeson"  placeholder="Enter Description" value="<?php echo $row['des_one']; ?>" required></td>
                                </tr>

                                
                                <tr>
                                    <?php
                                        $dlno = explode('-|-',$row['label_name_one']);
                                        $dlpo = explode('-|-',$row['label_prop_one']);
                                        foreach ($dlno as $key => $value) {
                                            
                                        
                                    ?>
                                    <td>
                                        <span><?php echo $value;?></span>
                                        <input type="hidden" name="desnmon[]" value="<?php echo $value; ?>" readonly >
                                        <input type="text" name="despropon[]" placeholder="Enter <?php echo $value; ?>" value="<?php echo $dlpo[$key]; ?>">
                                        
                                    </td>
                                    <?php  } ?>

                                    
                                </tr>
            
                            </table>

                            <div class="firm-div-con">
                                <input type="button" id="ccl" value="Add More">
                            </div>


                            <table class="des-dcl">
                                <tr>
                                    <td>Description two <input type="text" name="qdestw"  placeholder="Enter Description" value="<?php echo $row['des_two']; ?>" required></td>
                                </tr>
                                
                                <tr>
                                    <?php
                                        $dlnt = explode('-|-',$row['label_name_two']);
                                        $dlpt = explode('-|-',$row['label_prop_two']);
                                        foreach ($dlnt as $key => $value) {
                                            
                                        
                                    ?>
                                    <td>
                                        <span><?php echo $value;?></span>
                                        <input type="hidden" name="desnmtw[]" value="<?php echo $value; ?>" readonly >
                                        <input type="text" name="desproptw[]" placeholder="Enter <?php echo $value;?>" value="<?php echo $dlpt[$key]; ?>">
                                        
                                    </td>
                                    <?php  } ?>
                                </tr>
                            </table>
                            
                            <div class="firm-div-con">
                                <input type="button" id="dcl" value="Add More">
                            </div>
                            
                        </fieldset>
                        
                        
                    </div>
                    <?php } ?>

                    <fieldset>
                        <legend>Other Item Descriptions</legend>
                        <table class="first-max">
                            <tr>
                                <td>Items Description</td>
                                <td>Quantity</td>
                                <td>Rate</td>
                                <td>Amount(<strike>N</strike>)</td>
                            </tr>

                            <?php
                                $itm = explode("-|-",$row['itm']);
                                $qty = explode("-|-",$row['qty']);
                                $unit = explode("-|-",$row['runit']);
                                foreach ($itm as $key => $value) {
                                
                            ?>

                            <tr>
                                <td> <input type="text" name="item[]"  required placeholder="Enter Item Description" value="<?php echo $value; ?>" > </td>
                                <td> <input type="number" name="qty[]" onkeyup="quantity(this)"  required placeholder="Enter Quantity" value="<?php echo $qty[$key]; ?>"> </td>
                                <td> <input type="number" name="unit[]" onkeyup="price(this)"  required placeholder="Enter Unit Price" value="<?php echo $unit[$key]; ?>"> </td>
                                <td> <input type="text" name="amt[]" class="amt" value="<?php echo $qty[$key]*$unit[$key]; ?>" required readonly ></td>
                            </tr>

                            <?php  }  ?>
                    
                        </table>

                    </fieldset>

                    <div class="firm-div-con">
                        <input type="button" id="bcl" value="Add More Fields">
                    </div>

                    <table>
                        <tr>
                            <td>
                                <span>Sub-Total</span>
                                <input type="number" name="tot" id="total" onchange="grandTot()"  required readonly value="<?php echo $row['total']; ?>">
                            </td>
                        
                        </tr>

                        <tr>
                        
                            <td>
                                <span>Installation</span>
                                <input type="number" name="instal" id="instal" onkeyup="grandTot()"  placeholder="Optional" value="<?php echo $row['instal']; ?>">
                            </td>
                        

                        
                            <td>
                                <span>Accesories</span>
                                <input type="number" name="acces" id="acces" onkeyup="grandTot()"  placeholder="Optional" value="<?php echo $row['acces']; ?>">
                            </td>
                        

                        
                            <td>
                                <span>Transportation & Handling</span>
                                <input type="number" name="transprt" id="transprt" onkeyup="grandTot()" placeholder="Optional" value="<?php echo $row['transprt']; ?>">
                            </td>
                        </tr>

                        <tr>
                            <?php
                                $total_iat = $row['instal']+$row['acces']+$row['transprt']; 
                                $bgr = $row['total'] + $total_iat;
                            ?>
                            <td>
                                <span>Total Contract Sum</span>
                                <input type="number" name="gr_tot" id="grtot" value="<?php echo $bgr; ?>" required readonly>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <span>Writer's Name</span>
                                <input type="text" name="wtname" value="<?php echo $row['wname']; ?>" required placeholder="Enter Name of Writer">
                                <input type="hidden" name="ref_id" value="<?php echo $row['ref_id']; ?>" required readonly>
                                <input type="hidden" name="sid" value="<?php echo $row['id']; ?>" required readonly>
                            </td>
                        </tr>
                    </table>

                </div>

                <div class="con-btn-div">
                    <button class="con-btn">UPDATE</button>
                </div>

                <?php } ?>
            </div>
        </form>
    </section>
    <script src="../js/metr.js"></script>
</body>
</html>
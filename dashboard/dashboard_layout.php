<?php 
    @session_start();
    if(!isset($_SESSION['id'])){
        echo "<script>window.location='../'</script>";
    }
?>

<script src="../js/dash.js"></script>

<div  id="peon" >&#9776;</div>

    <div class="dashboard">
        <div id="losec">&times;</div>
       

        <img src="../images/dash_logo.png" class="dash-logo">

       
        <div class="dash-b">
            <a href="index.php">
                <span>
                    <img src="../images/home.svg"  class="fir-img"><img src="../images/lhome.svg" class="sec-img" >CONTROL CENTRE
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="sales_reg.php">
                <span>
                    <img src="../images/item_upload.svg"  class="fir-img"><img src="../images/lblog.svg" class="sec-img" >MAKE INVOICE
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="view_invoice.php">
                <span>
                <img src="../images/save-fill.svg"  class="fir-img"><img src="../images/save.svg" class="sec-img">VIEW INVOICE
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="receipt_reg.php">
                <span>
                    <img src="../images/item_upload.svg"  class="fir-img"><img src="../images/lblog.svg" class="sec-img" >MAKE RECEIPT
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="view_receipt.php">
                <span>
                <img src="../images/save-fill.svg"  class="fir-img"><img src="../images/save.svg" class="sec-img">VIEW RECEIPT
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="house_rent_receipt.php">
                <span>
                    <img src="../images/item_upload.svg"  class="fir-img"><img src="../images/lblog.svg" class="sec-img" >HOUSE RENT RECEIPT
                </span>
            </a>
        </div>

        <div class="dash-b">
            <a href="view_house_receipt.php">
                <span>
                <img src="../images/save-fill.svg"  class="fir-img"><img src="../images/save.svg" class="sec-img">VIEW HOUSE RECEIPT
                </span>
            </a>
        </div>


        <div class="dash-b">
            <a href="quota.php">
                <span>
                    <img src="../images/upd-fill.svg"  class="fir-img"><img src="../images/upd.svg" class="sec-img" >CREATE QUOTATION
                </span>
            </a>
        </div>


        <div class="dash-b">
            <a href="quota_fill.php">
                <span>
                <img src="../images/save-fill.svg"  class="fir-img"><img src="../images/save.svg" class="sec-img">VIEW QUOTATIONS
                </span>
            </a>
        </div>

        <div class="dash-b">
           
                
            <button onclick="if(window.confirm('Are you sure want to log out of this page')){window.location='../';}">
                <span>
                    <img src="../images/box_log (2).svg"  class="fir-img"><img src="../images/litem.svg" class="sec-img">LOG OUT
                </span>
            </button>

            
        </div>
        
    </div>



   


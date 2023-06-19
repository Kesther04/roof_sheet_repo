<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pno = $_POST['pno'];
    require("../../date_la_time.php");

    require("../../class/ins_class.php");

    $ins_ob = new INS();

    require("../../class/sel_class.php");

    $sel_ob = new SEL();

    if (empty($name)) {
        header("location:login?msg=ENTER YOUR USERNAME");
    }
    elseif (empty($email)) {
        header("location:login?msg=ENTER YOUR EMAIL ADDRESS");
    }
    elseif (empty($pass)) {
        header("location:login?msg=ENTER YOUR PASSWORD");
    }
    elseif (empty($pno)) {
        header("location:login?msg=ENTER YOUR PHONE NUMBER");
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header("location:login?msg=INVALID EMAIL ADDRESS");
    }else {

        //to select if password and email entered already exists in the database table 
        $sel_con = $sel_ob->sel_log_admin($email,$pass);
        if ($sel_con) {
            $row = $sel_con->fetch_assoc();

            if (isset($row['email']) AND isset($row['password'])) {
                
                header("location:register?msg=PASSWORD ALREADY IN USE PLEASE CREATE ANOTHER PASSWORD");
        
            }else {
            
                //to insert all posted values into the table for registration of admin
                $ins_con = $ins_ob->ins_admin_reg($name,$email,$pass,$pno,$fullDate,$date,$time);
                if ($ins_con) {
                    header("location:../login/login");
                }else {
                    header("location:register?msg=NOT REGISTERED");
                }

            }
        }

    }
}


?>
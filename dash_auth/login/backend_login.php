<?php

session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {    
    $unemail = $_POST['email'];
    $pass = $_POST['pass'];
    
    require("../../class/sel_class.php");

    $sel_ob = new SEL();


    if (empty($unemail)) {
        header("location:login?msg=ENTER YOUR EMAIL ADDRESS OR USERNAME");
    }
    elseif (empty($pass)) {
        header("location:login?msg=ENTER YOUR PASSWORD");
    }
    elseif (filter_var($unemail,FILTER_VALIDATE_EMAIL)) {
        //to select from the database where email and password provided are available
        $sel_con = $sel_ob->sel_log_admin($unemail,$pass);
        if($sel_con->num_rows>0){
            $row =$sel_con->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['name'] = $row['username'];
            $_SESSION['pno'] = $row['phone_no'];
    
            header("location:../../dashboard/user/profile");
        }else {
            header("location:login?msg=INCORRECT EMAIL OR PASSWORD");
        }
    }else {
        //to select from the database where username and password provided are available
        $sel_con = $sel_ob->sel_log_admin_uname($unemail,$pass);
        if($sel_con->num_rows>0){
            $row =$sel_con->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['password'];
            $_SESSION['name'] = $row['username'];
            $_SESSION['pno'] = $row['phone_no'];
    
            header("location:../../dashboard/user/profile");
        }else {
            header("location:login?msg=INCORRECT EMAIL OR PASSWORD");
        }
    }
}





?>
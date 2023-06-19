<?php

    require("database_connection.php");

    //to create the database
    $db = $con->query("CREATE DATABASE if not exists roof_sales_db");
    if ($db) {
        echo "Database created";
    }

    //to create table for the registration of the admin
    $login_tb = $con->query("CREATE TABLE if not exists admin_reg_table
    (id int(100)not null primary key auto_increment,
    username varchar(120)not null,
    email varchar(120)not null,
    password  varchar(120)not null,
    phone_no varchar(12)not null,
    fullDay varchar(20)not null,
    date varchar(20)not null,
    time varchar(20)not null)ENGINE=innoDB");
    if ($login_tb) {
        echo "<p>table created</p>";
    }else {
        echo "<p>table not created</p>";
    }

?>
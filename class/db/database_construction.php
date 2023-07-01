<?php

    require("database_connection.php");

    //to create the database
    // $db = $con->query("CREATE DATABASE if not exists roof_sales_db");
    // if ($db) {
    //     echo "Database created";
    // }

    //to create table for the registration of the admin
    $login_tb = $con->query("CREATE TABLE if not exists admin_reg_table
    (id int(100)not null primary key auto_increment,
    username varchar(120)not null,
    email varchar(120)not null,
    password  varchar(120)not null,
    phone_no varchar(12)not null)ENGINE=innoDB");
    if ($login_tb) {
        echo "<p>table created</p>";
    }else {
        echo "<p>table not created</p>";
    }



    //to create table for registering sales of items
    $sales_tb = $con->query("CREATE TABLE if not exists sales_registration
    (id int(100)not null primary key auto_increment,
    ref_id int(100)not null,
    cl_name varchar(120)not null,
    cl_phone varchar(20)not null,
    cl_add text not null,
    itm text not null,
    qty text not null,
    aunit text not null,
    total text not null,
    instal text not null,
    acces text not null,
    transprt text not null,
    fullDay varchar(20)not null,
    date varchar(20)not null,
    time varchar(20)not null)ENGINE=innoDB");
    if ($sales_tb) {
        echo "<p>sales table created</p>";
    }else {
        echo "<p>sales table not created</p>";
    }


    //to create table for recording quotation of items
    $quot_tb = $con->query("CREATE TABLE if not exists quota_table
    (id int(100)not null primary key auto_increment,
    ref_id int(100)not null,
    quot_name varchar(120)not null,
    locat text not null,
    custom_name varchar(120)not null,
    itm text not null,
    qty text not null,
    runit text not null,
    total text not null,
    instal text not null,
    acces text not null,
    transprt text not null,
    wname varchar(200)not null,
    des_one varchar(120)not null,
    label_name_one text not null,
    label_prop_one text not null,
    des_two varchar(120)not null,
    label_name_two text not null,
    label_prop_two text not null,
    fullDay varchar(20)not null,
    date varchar(20)not null,
    time varchar(20)not null)ENGINE=innoDB");

    if ($quot_tb) {
        echo "<p>qout table created</p>";
    }else {
        echo "<p>quot table not created</p>";
    }


   
?>
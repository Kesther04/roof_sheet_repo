<?php

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $id = $_POST['id'];
        $rid = $_POST['rid'];
        
        require("../../class/del_class.php");

        $del_ob = new DEL();

        $del_con = $del_ob->del_save($id);
        if ($del_con) {
            echo "deleted";   
        }else {
            echo "not deleted";
        }
    }




?>
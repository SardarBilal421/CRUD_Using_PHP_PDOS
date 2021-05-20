<?php

    include ("./db.config.php");
        $db = new Database();
        $ID = $_GET['id'];
        $qry = "Delete from employee where id = '".$ID."'";

        if($db->UDI($qry) == true){
            echo " <br> Deleted Successfully \n";
            echo "<a href='./index.php'>Home</a>";


        }else{
            echo "Error".$qry."\n ".$db->error;
        }

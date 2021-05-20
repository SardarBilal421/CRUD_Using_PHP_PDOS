<?php


        include ("./db.config.php");
        $db = new Database();
        $ID = $_GET['id'];
        $qry = "Delete from supplies where id = '".$ID."'";

        if($db->UDI($qry) == true){
        echo " <br> Deleted Successfully \n";
        echo "<a href='./PDOSuppliesSelection.php'>Home</a>";


        }else{
        echo "Error".$qry."\n ".$db->error;
        }

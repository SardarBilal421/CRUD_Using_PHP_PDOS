<?php
include('./db.config.php');
        $Name = $_POST['name'];
        $Model_Number = $_POST['model_number'];
        $IMEI = $_POST['IMEI'];
        $Price = $_POST['price'];
        $Release_Year = $_POST['release_year'];


        $db = new  Database();
        $qry = "INSERT INTO cellphones 
                (name,model_number,IMEI,price,release_year) 
                VALUES ( '" . $Name . "','" . $Model_Number . "',
            '" . $IMEI . "','" .$Price . "','" .$Release_Year . "'
        )";

         if($db->UDI($qry) == true){
             echo '<br> Inserted<br>';
             echo "<a href='./index.php' style='font-size: 20px'>Home</a>";
         }else {
             echo 'Record Not Inserted';
         }


<?php
    include('./db.config.php');


            $AssetID = $_POST['asset_id'];
            $SupplierName = $_POST['SupplierName'];
            $Description = $_POST['description'];
            $Item = $_POST['item'];

            $db = new  Database();
            $qry = "INSERT INTO supplies (asset_id,supplier_Name,description,item) VALUES (
                            '" . $AssetID . "','" . $SupplierName . "','" . $Description . "','" .$Item . "'
                            )";


            if($db->UDI($qry) == true){
                echo '<br> Inserted<br>';
                echo "<a href='./PDOSuppliesSelection.php' style='font-size: 20px'>Home</a>";

            }else {
                echo 'Record Not Inserted';
            }


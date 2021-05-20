<?php


    include('./db.config.php');
    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Gender = $_POST['gender'];
    $EyeColour = $_POST['colour'];
    $Phone = $_POST['phone'];
    $Description = $_POST['des'];
    $StreetAddress = $_POST['sAddress'];
    $Age = $_POST['age'];


        $db = new  Database();
        $qry = "INSERT INTO info (fName,lName,gender,eyeColour,phone,Description,sAddress,age) VALUES (
              '" . $FirstName . "','" . $LastName . "','" . $Gender . "','" .$EyeColour . "','" .$Phone . "','" .$Description . "','" .$StreetAddress . "','" .$Age . "'
                                    )";


        if($db->UDI($qry) == true){
            echo '<br> Inserted<br>';
            echo "<a href='./PDOSelection.php.php' style='font-size: 20px'>Home</a>";
        }else {
            echo 'Record Not Inserted';
        }


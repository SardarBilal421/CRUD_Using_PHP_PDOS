<?php
$ID = $_POST['id'];
$FirstName = $_POST['fname'];
$LastName = $_POST['lname'];
$Gender = $_POST['gender'];
$EyeColour = $_POST['colour'];
$Phone = $_POST['phone'];
$Description = $_POST['des'];
$StreetAddress = $_POST['sAddress'];
$Age = '20';
include ('./db.config.php');
$db = new Database();
$qry = "UPDATE info SET fName ='" . $FirstName . "',lName ='" . $LastName . "',gender ='" . $Gender . "', eyeColour ='" . $EyeColour . "', phone ='" . $Phone . "', Description ='" . $Description . "', sAddress ='" . $StreetAddress . "', age ='" . $Age . "' WHERE id='" . $ID . "'";
if ($db->UDI($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $db->error;
}
echo "<br>";
echo "<a href='./PDOSelection.php'>Home</a>";
<?php
include ("./db.config.php");
$ID=$_POST['id'];
$Name=$_POST['name'];
$Employee_Code=$_POST['employee_code'];
$Designation=$_POST['designation'];
$Age=$_POST['age'];
$Role=$_POST['role'];
$db = new Database();
$qry = "UPDATE employee SET name ='" . $Name . "',employee_code ='" . $Employee_Code . "',designation ='" . $Designation . "', role ='" . $Role . "', age ='" . $Age . "' WHERE id='" . $ID . "'";
if ($db->UDI($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $db->error;
}
echo "<br>";
echo "<a href='./index.php'>Home</a>";
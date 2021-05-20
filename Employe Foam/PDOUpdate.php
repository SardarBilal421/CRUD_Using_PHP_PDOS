<?php
include ("./db.config.php");
$id = $_GET['id'];
$db = new Database();
$qry = "SELECT * FROM employee WHERE id = '".$id."'";
$result = $db->Search($qry,ProductInfo::class);
if($result != null){
    foreach ($result as $valuess){

?>

<!DOCTYPE html>
<html>
<head>
    <title>First Form</title>

</head>
<body>
<form id="s1" style="border: solid black 2px" action="./PDOUpdated.php" method="post" >

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?php echo $valuess->getName()?>"><br><br>
    <label for="employee_code">Employee Code</label>
    <input type="text" id="employee_code" name="employee_code" value="<?php echo $valuess->getEmployeeCode()?>"><br><br>
    <label for="des">Designation</label>
    <input type="text" id="des" name="designation" value="<?php echo $valuess->getDesignation() ?>"><br><br>
    <label for="role">Role</label>
    <input type="text" id="role" name="role" value="<?php echo $valuess->getRole()?>"><br><br>
    <label for="age">Age</label>
    <input type="text" id="age" name="age" value="<?php echo $valuess->getAge() ?>"><br><br>
    <input type="hidden" id="id" name="id" value="<?php echo $valuess->getId() ?>">

    <input type="submit" value="Update" formaction="./PDOUpdated.php?id='.$valuess->getId().'">


    <?php
    }
    }else {
        echo "No record Fond" ;
    }

    ?>
</form>
</body>
</html>


<!DOCTYPE html>
<html>
<head><h1>Recorrd</h1>

    <style>
        table{
            border-collapse: collapse;
        }
        tr , td {
            border: solid black;
            padding: 10px;
        }
    </style>

</head>
<body>
<table>
    <tr>
        <tr>Details</tr>
        <tr>Actions</tr>
    </tr>
<?php
    include ("./db.config.php");
     $db = new Database();

    $qry = 'Select * from employee';
    $classRef = 'User';
    $employee = $db->Search($qry,$classRef);


    if($employee != null){
        foreach ($employee as $employe){
            echo  $employe->getDetail();
        }
    }else {
 echo "No record Fond" ;
    }
    ?>
    <tr>
       <td style="text-align: center"> <a href="./table1Foam.html">Add Records</a> </td>
    </tr>
</table>
</body>
</html>


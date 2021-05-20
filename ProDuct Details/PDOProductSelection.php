
<!DOCTYPE html>
<html>
<head>
    <h1> Product Record</h1>
    <style>
        table{
            border-collapse: collapse;
            background-color: aquamarine;
        }tr ,td ,th{
             border: 2px black solid;
             text-align: center;
             padding: 10px;
         }

    </style>

</head>

<body>
<table>
    <tr>
        <th>Details Of All Staff</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>


    <?php
    include ("./db.config.php");

    $db = new Database();
    $qry = 'Select * from products';
    $classRef = 'ProductInfo';
    $Product = $db->Search($qry,$classRef);


    if($Product != null){
        foreach ($Product as $SingleProduct){
            echo  $SingleProduct->getDetail();
        }
    }else {
        echo "No record Fond" ;
    }
    ?>
    <tr>
        <td style="text-align: center"> <a href="./ProductFoam.html">Add Records</a> </td>
    </tr>
</table>
</body>
</html>




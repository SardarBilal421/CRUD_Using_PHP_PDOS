
<!DOCTYPE html>
<html>
<head>
    <h1> user Record</h1>
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
                include ('db.config.php');

                         $db = new Database();
                $qry = 'Select * from supplies';
                $classRef = 'SupplierInfo';
                $Supplies = $db->Search($qry,$classRef);


                if($Supplies != null){
                    foreach ($Supplies as $supply){
                        echo  $supply->getDetail();
                    }
                }else {
                    echo "No record Fond" ;
                }
                ?>
    <tr>
        <td style="text-align: center"> <a href="./SupplierFoam.html">Add Records</a> </td>
    </tr>
</table>
</body>
</html>




<?php
    include ("./db.config.php");
    $id = $_GET['id'];
    $db = new Database();
    $qry = "SELECT * FROM supplies WHERE id = '".$id."'";
    $Supplies = $db->Search($qry,SupplierInfo::class);
    if($Supplies != null){
    foreach ($Supplies as $Supply){

?>

<!DOCTYPE html>
<html>
<head>
    <title>First Form</title>

</head>
    <body>
    <h1 style="font-family: Gabriola"><center>Supplier Update Records</center></h1>
    <form id="s1" style="border: solid black 2px" action="./PDOSuppliesUpdated.php?id='.$Supply->getId().'" method="post" >

            <label for="assetId">Asset ID</label>
            <input type="text" id="assetId" name="asset_id" value="<?php echo $Supply->getAssetId()?>"><br><br>
            <label for="s_name">Supplier Name</label>
            <input type="text" id="s_name" name="SupplierName" value="<?php echo $Supply->getSupplierName()?>"><br><br>
            <label for="des">Description</label>
            <input type="text" id="des" name="description" value="<?php echo $Supply->getDescription()?>"><br><br>
            <label for="item">Item</label>
            <input type="text" id="item" name="item" value="<?php echo $Supply->getItem()?>"><br><br>
        <label for=""></label>
              <input type="hidden" value="<?php echo $Supply->Id() ?>"><br><br>
            <input type="submit" value="Save" formaction="./PDOSuppliesUpdated.php?id='.$Supply->getId().'">


        <?php
        }
        }else {
            echo "No record Fond" ;
        }

        ?>


    </form>
    </body>
    </html>
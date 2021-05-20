<?php
$ID = $_POST['id'];
$AssetID = $_POST['asset_id'];
$SupplierName = $_POST['SupplierName'];
$Description = $_POST['description'];
$Item = $_POST['item'];
include ('./db.config.php');
$db = new Database();
$qry = "UPDATE info SET asset_id ='" . $AssetID . "',supplier_Name ='" . $SupplierName . "',description ='" . $Description . "', item ='" . $Item . "' WHERE id='" . $ID . "'";
if ($db->UDI($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $db->error;
}
echo "<br>";
echo "<a href='./PDOSelection.php'>Home</a>";
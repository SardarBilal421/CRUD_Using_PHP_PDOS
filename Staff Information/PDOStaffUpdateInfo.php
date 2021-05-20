<?php
include ("./db.config.php");
$id = $_GET['id'];
$db = new Database();
$qry = "SELECT * FROM info WHERE id = '".$id."'";
$result = $db->Search($qry,StaffInfo::class);
if($result != null){
foreach ($result as $data){

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Staff Data Updateion</title>
</head>
<body >
<h1 style="font-family: Gabriola"> <center>Update Foam</center></h1>
<form id="s1" style="border: solid black 2px" action="./PDOStaffUpdated.php?id='.$data->getId().'" method="post"  >
    <table>
        <tr>
            <td><input type="hidden" id="id" name="id" value="<?php echo $id?>"><br><br></td>
        </tr>
        <tr>
            <td> <label for="name">Name</label></td>
            <td><input type="text" id="fname" name="fname" value="<?php echo $data->getFName()?>"><br><br></td>
            <td><input type="text" id="lname" name="lname" value="<?php echo $data->getLName()?>"><br><br></td>
        </tr>
        <tr>

            <td> <label for="gender">Gender</label></td>
            <td>    <label  for="gender" >Male</label>
                <input type="radio" id="gender" name="gender" value="Male" <?php
                if ($data->getGender() == "Male"){
                    echo "checked";
                }
                ?>
                ></td>
            <td> <label for="female">Female</label>
                <input type="radio" id="gender" name="gender" value="Female" <?php
                if ($data->getGender() == "Female"){
                    echo "checked";
                }
                ?>
                ></td>
        </tr>
        <tr>
            <td> <lable>Eye Colour</lable></td>
            <td><select name="colour" id="colour" value="<?php echo $data->getEyeColour()?>">
                    <option value="blueStar">Blue Star</option>
                    <option value="lipas">Lipas</option>
                    <option value="nomad">Nomad</option>
                    <option value="parisbrun">Paris Brun</option>
                    <option value="cobalt">Cobalt</option>
                </select></td>
        </tr>
        <tr>
            <td> <label for="phone">Phone</label></td>
            <td><input type="text" id="phone" name="phone" value="<?php echo $data->getPhone()?>"><br><br></td>

        </tr>
        <tr>
            <td> <label for="des">Description</label></td>
            <td><input type="text" id="des" name="des" value="<?php echo $data->getDescriptions()?>"><br><br></td>
        </tr>
        <tr>
            <td> <label for="name">Street Address</label></td>
            <td ><input type="text" id="sAddress" name="sAddress" value="<?php echo $data->getAddress()?>"><br><br></td>
        </tr>
        <tr>
<!--            <td>    <input type="checkbox" id="over18" name="age" value="<?php /*echo $data->getAge()*/?>">
                <label for="over18"> Over 18</label><br>
                <input type="checkbox" id="over25" name="age">
                <label for="over25"> Over 25</label><br>
                <input type="checkbox" id="over50" name="age">
                <label for="over50"> Over 50 </label><br>
            </td>-->
          </tr>

        <tr><td><input type="submit" value="Update" "></td></tr>
    </table>



    </form>
            <?php
            }
            }else {
                echo "No record Fond" ;
            }

            ?>
</body>
</html>
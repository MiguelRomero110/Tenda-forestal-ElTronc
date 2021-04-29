<!Doctype html>
<html lang="ca">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";
        ?>
    
    </body>


    <?php
$query="select ID,nom from proveidor";
$result=mysqli_query($bbdd,$query);
while($row=mysql_fetch_assoc($result){
    echo"<option_value=/"$row[ID]/">
    $row[nom]
    </option>";
}
?>
</select>
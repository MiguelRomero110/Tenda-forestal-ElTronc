<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> Stock:".$_POST["Stock"]."</p>";
    echo "<p> ID_proveidor:".$_POST["ID_proveidor"]."</p>";
    $query="INSERT INTO producte (Nom, Preu, Stock, fkID_proveidor)
            VALUES (\"$_POST[Nom]\" , \"$_POST[Preu]\" , \"$_POST[Stock]\" , \"$_POST[ID_proveidor]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    echo"error query";
   print(mysqli_error($bbdd));


}
?>


<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> CP:".$_POST["CP"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";
    echo "<p> Poblacio:".$_POST["Poblacio"]."</p>";
    echo "<p> Telefon:".$_POST["Telefon"]."</p>";
    $query="INSERT INTO proveidor (Nom, CP, Adreca, Poblacio, Telefon)
            VALUES (\"$_POST[Nom]\" , \"$_POST[CP]\" , \"$_POST[Adreca]\" , \"$_POST[Poblacio]\" , \"$_POST[Telefon]\" );";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    echo"error query";
   print(mysqli_error($bbdd));


}
?>

<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> CP:".$_POST["CP"]."</p>";
    echo "<p> DNI_client:".$_POST["DNI_client"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";
    echo "<p> Poblacio:".$_POST["Poblacio"]."</p>";
    echo "<p> Telefon:".$_POST["Telefon"]."</p>";
    echo "<p> email:".$_POST["email"]."</p>";
    $query="INSERT INTO client (Nom, CP, DNI_client, Adreca, Poblacio, Telefon, email)
            VALUES (\"$_POST[Nom]\" , \"$_POST[CP]\", \"$_POST[DNI_client]\" , \"$_POST[Adreca]\" , \"$_POST[Poblacio]\" , \"$_POST[Telefon]\", \"$_POST[email]\" );";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    echo"error query";
   print(mysqli_error($bbdd));


}
?>
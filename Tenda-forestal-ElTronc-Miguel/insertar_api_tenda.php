<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> CP:".$_POST["CP"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";
    echo "<p> ID_tenda:".$_POST["ID_tenda"]."</p>";
    echo "<p> Poblacio:".$_POST["Poblacio"]."</p>";
    $query="INSERT INTO tenda (Nom, CP, Adreca, ID_tenda, Poblacio)
            VALUES (\"$_POST[Nom]\" , \"$_POST[CP]\" , \"$_POST[Adreca]\" , \"$_POST[ID_tenda]\" , \"$_POST[Poblacio]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    echo"error query";
   print(mysqli_error($bbdd));


}
?>

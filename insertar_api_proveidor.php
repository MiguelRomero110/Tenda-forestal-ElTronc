<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Adreça:".$_POST["Adreca"]."</p>";
    echo "<p> Codi Postal:".$_POST["CP"]."</p>";
    echo "<p> Població:".$_POST["Poblacio"]."</p>";
    echo "<p> Telèfon:".$_POST["Telefon"]."</p>";
    $query="INSERT INTO proveidor (Nom, Adreca, CP, Poblacio, Telefon)
            VALUES (\"$_POST[Nom]\" , \"$_POST[Adreca]\" , \"$_POST[CP]\" , \"$_POST[Poblacio]\" , \"$_POST[Telefon]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);

?>
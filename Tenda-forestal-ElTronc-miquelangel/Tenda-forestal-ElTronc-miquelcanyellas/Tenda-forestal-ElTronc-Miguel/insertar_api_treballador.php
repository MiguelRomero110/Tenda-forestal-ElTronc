<?php
require "includes/header.php";
    require "includes/mysql.php";
    echo "<p> DNI_treballador:".$_POST["DNI_treballador"]."</p>";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Adreça:".$_POST["Adreca"]."</p>";
    echo "<p> Codi Postal:".$_POST["CP"]."</p>";
    echo "<p> Població:".$_POST["Poblacio"]."</p>";
    echo "<p> Telèfon:".$_POST["Telefon"]."</p>";
    echo "<p> Horari:".$_POST["Horari"]."</p>";
    echo "<p> ID_tenda:".$_POST["ID_tenda"]."</p>";
    $query="INSERT INTO treballador (DNI_treballador,Nom,Adreca,CP,Poblacio,Telefon,Horari,fkID_tenda)
            VALUES (\"$_POST[DNI_treballador]\",\"$_POST[Nom]\",\"$_POST[Adreca]\",\"$_POST[CP]\",\"$_POST[Poblacio]\",\"$_POST[Telefon]\",\"$_POST[Horari]\",\"$_POST[ID_tenda]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print(mysqli_error($bbdd));
    }

?>

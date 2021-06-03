<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Adreça:".$_POST["Adreca"]."</p>";
    echo "<p> Codi Postal:".$_POST["Codi_Postal"]."</p>";
    echo "<p> Població:".$_POST["Poblacio"]."</p>";
    $query="INSERT INTO tenda (Nom,Adreca,Codi_Postal,Poblacio)
            VALUES (\"$_POST[Nom]\",\"$_POST[Adreca]\",\"$_POST[Codi_Postal]\",\"$_POST[Poblacio]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    echo "error query";
    mysqli_error($bbdd);
    print(mysqli_error($bbdd));
}

?>
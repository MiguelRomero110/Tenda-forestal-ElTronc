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
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: ok.php');
}
?>
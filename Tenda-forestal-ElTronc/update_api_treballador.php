<?php 
    require "includes/mysql.php";
    $query="UPDATE treballador
    SET Nom = \"$_POST[Nom]\", 
    Adreca = \"$_POST[Adreca]\", CP = \"$_POST[CP]\", Poblacio = \"$_POST[Poblacio]\", 
    Telefon = \"$_POST[Telefon]\", Horari = \"$_POST[Horari]\", fkID_tenda = \"$_POST[ID_tenda]\" 
    WHERE DNI_treballador = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>

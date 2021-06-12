<?php 
    require "includes/mysql.php";
    $query="UPDATE tenda
    SET Nom = \"$_POST[Nom]\", 
    Adreca = \"$_POST[Adreca]\", Codi_Postal = \"$_POST[Codi_Postal]\", Poblacio = \"$_POST[Poblacio]\" 
    WHERE ID_tenda = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>

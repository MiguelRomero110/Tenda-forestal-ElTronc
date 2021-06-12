<?php 
    require "includes/mysql.php";
    $query="UPDATE client
    SET Nom = \"$_POST[Nom]\", 
    Adreca = \"$_POST[Adreca]\", CP = \"$_POST[CP]\", Poblacio = \"$_POST[Poblacio]\", 
    Telefon = \"$_POST[Telefon]\", email = \"$_POST[email]\" 
    WHERE DNI_client = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>

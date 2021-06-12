<?php 
    require "includes/mysql.php";
    $query="UPDATE venta
    SET Preu = \"$_POST[Preu]\", 
    fkDNI_treballador = \"$_POST[DNI_treballador]\", fkDNI_client = \"$_POST[DNI_client]\", Data_venta = \"$_POST[Data_venta]\" 
    WHERE ID_venta = \"$_GET[id]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>

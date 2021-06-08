<?php 
    require "includes/mysql.php";
    $query="UPDATE producte
    SET ID = \"$_POST[ID_producte]\", Nom = \"$_POST[Nom]\", 
    Preu = \"$_POST[Preu]\", Stock = \"$_POST[Stock]\", ID_Proveidor = \"$_POST[fkID_proveidor]\",
    WHERE ID_producte = \"$_GET[ID_producte]\";";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>

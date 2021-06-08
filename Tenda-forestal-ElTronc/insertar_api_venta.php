<?php
require "includes/mysql.php";

//Insertam una nova venta

$query = "INSERT INTO venta (Preu, fkDNI_treballador, fkDNI_client, Data_venta)
          VALUES (\"$_POST[Preu]\" , \"$_POST[DNI_treballador]\" , \"$_POST[DNI_client]\" , \"$_POST[Data_venta]\");";
$result = mysqli_query($bbdd, $query);


    //Recull el darrer ID insertat
    $query = "SELECT MAX(ID_Venta) as maxim FROM venta";
    $result = mysqli_query($bbdd, $query);
    $id = mysqli_fetch_assoc($result)['maxim'];

    //Insertam els productes de la venta
    if (isset($_POST['producteVenta'])) {
        foreach ($_POST['producteVenta'] as $idProducte) {
            $query = "INSERT INTO prod_vent (fkID_venta, fkID_producte) values ($id, $idProducte)";
            mysqli_query($bbdd, $query);
        }
    }

if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: ok.php');
}


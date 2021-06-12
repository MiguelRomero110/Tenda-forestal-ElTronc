<?php 
    require "includes/mysql.php";
    $img = '';
    if($_FILES["imgProducte"]){
        //PUJAM IMATGE
        $tmp_name = $_FILES["imgProducte"]["tmp_name"];
        $location = 'Imatges/productes/' . $_GET['id'] . '.jpg';
        @unlink('Imatges/productes/' . $_GET['id'] . '.jpg');
        if(move_uploaded_file($tmp_name, $location)){
            $img = ", imatge = \"$_GET[id].jpg\" ";
        }
    }
    $query="UPDATE producte
    SET Nom = \"$_POST[Nom]\", 
    Preu = \"$_POST[Preu]\", Stock = \"$_POST[Stock]\", fkID_Proveidor = \"$_POST[ID_proveidor]\" $img
    WHERE ID_producte = \"$_GET[id]\";";

    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        $error = (mysqli_error($bbdd));
        header('Location: error.php?error=' . $error);
    }else{
        header('Location: ok.php');
    }
?>

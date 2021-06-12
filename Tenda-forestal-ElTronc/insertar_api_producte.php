<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> Stock:".$_POST["Stock"]."</p>";
    echo "<p> ID_proveidor:".$_POST["ID_proveidor"]."</p>";
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
    $query="INSERT INTO producte (Nom, Preu, Stock, fkID_proveidor)
            VALUES (\"$_POST[Nom]\" , \"$_POST[Preu]\" , \"$_POST[Stock]\" , \"$_POST[ID_proveidor]\" $img);";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    $error = (mysqli_error($bbdd));
    header('Location: error.php?error=' . $error);
}else{
    header('Location: ok.php');
}
?>
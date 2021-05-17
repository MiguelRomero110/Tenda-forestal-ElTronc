<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> Stock:".$_POST["Stock"]."</p>";
    echo "<p> fkID_proveidor:".$_POST["fkID_proveidor"]."</p>";
    $query="INSERT INTO producte (Nom,Preu,Stock,fkID_proveidor)
            VALUES (\"$_POST[Nom]\" , \"$_POST[Preu]\" , \"$_POST[Stock]\" , \"$_POST[fkID_proveidor]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);
if($result==true){
    header("location: Ok.php");

}else{
    header("location: error.php");
}
?>


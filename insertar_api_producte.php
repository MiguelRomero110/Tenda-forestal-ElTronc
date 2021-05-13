<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> Stock:".$_POST["Stock"]."</p>";
    echo "<p> fkID_proveidor:".$_POST["fkID_proveidor"]."</p>";

$result=mysqli_query($bbdd, $query);
if($result==true){
    header("location: Ok.php");

}else{
    header("location: error.php");
}
?>


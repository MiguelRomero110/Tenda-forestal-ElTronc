<?php
require "includes/mysql.php";
echo "<p> Preu:".$_POST["Preu"]."</p>";
echo "<p> Stock:".$_POST["Stock"]."</p>";
echo "<p> fkID_proveidor:".$_POST["fkID_proveidor"]."</p>";

<?php
$result=mysqli_query($bbdd, )
if($result==true){
    header("location: Ok.php")

}else{
    header("location: error.php")
}
?>


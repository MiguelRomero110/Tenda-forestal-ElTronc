<?php
require "includes/mysql.php";
$query="DELETE FROM tend_prod where ID_Tend_prod=\"$_GET[ID_Tend_prod]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
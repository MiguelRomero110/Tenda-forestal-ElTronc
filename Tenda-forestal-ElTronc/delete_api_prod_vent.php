<?php
require "includes/mysql.php";
$query="DELETE FROM prod_vent where ID_Prod_vent=\"$_GET[ID_Prod_vent]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
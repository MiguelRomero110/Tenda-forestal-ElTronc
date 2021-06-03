<?php
require "includes/mysql.php";
$query="DELETE FROM venta where ID_Venta=\"$_GET[ID_Venta]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
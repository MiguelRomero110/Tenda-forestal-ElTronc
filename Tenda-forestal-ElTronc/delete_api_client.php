<?php
require "includes/mysql.php";
$query="DELETE FROM client where DNI_client=\"$_GET[DNI_client]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
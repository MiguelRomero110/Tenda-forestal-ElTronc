<?php
require "includes/mysql.php";
$query="DELETE FROM proveidor where ID_proveidor=\"$_GET[ID_proveidor]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
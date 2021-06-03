<?php
require "includes/mysql.php";
$query="DELETE FROM tenda where ID_tenda=\"$_GET[ID_tenda]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
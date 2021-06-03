<?php
require "includes/mysql.php";
$query="DELETE FROM treballador where DNI_treballador=\"$_GET[DNI_treballador]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
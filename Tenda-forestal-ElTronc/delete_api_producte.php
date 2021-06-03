<?php
require "includes/mysql.php";
$query="DELETE FROM producte where ID_producte=\"$_GET[ID_producte]\";";
$result=mysqli_query($bbdd,$query);

if($result){
    echo "ok";


}
else{
    print(mysqli_error($bbdd));
}
?>
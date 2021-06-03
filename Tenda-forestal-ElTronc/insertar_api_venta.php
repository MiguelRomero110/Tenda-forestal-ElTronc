<?php
    require "includes/mysql.php";
    echo "<p> Preu:".$_POST["Preu"]."</p>";
    echo "<p> DNI_treballador:".$_POST["DNI_treballador"]."</p>";
    echo "<p> DNI_client:".$_POST["DNI_client"]."</p>";
    echo "<p> Data_venta:".$_POST["Data_venta"]."</p>";
    $query="INSERT INTO venta (Preu, fkDNI_treballador, fkDNI_client, Data_venta)
            VALUES (\"$_POST[Preu]\" , \"$_POST[DNI_treballador]\" , \"$_POST[DNI_client]\" , \"$_POST[Data_venta]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);

?>
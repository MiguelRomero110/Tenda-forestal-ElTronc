<?php
    require "includes/mysql.php";
    echo "<p> ID_Prod_vent:".$_POST["ID_Prod_vent"]."</p>";
    echo "<p> fkID_venta:".$_POST["fkID_venta"]."</p>";
    echo "<p> fkID_producte:".$_POST["fkID_producte"]."</p>";
    $query="INSERT INTO prod_vent (ID_Prod_vent,fkID_venta,fkID_producte)
            VALUES (\"$_POST[ID_Prod_vent]\",\"$_POST[fkID_venta]\",\"$_POST[fkID_producte]\");";
    echo $query;
    $result = mysqli_query($bbdd, $query);
    if(!$result){
        echo "error query";
        mysqli_error($bbdd);
        print(mysqli_error($bbdd));
    }

?>
<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2>Insertar Producte<h2>
        <h9>Bebesitaaaa uaaaaa</h9>
        <p>Parrafo para los rials</p>
        <from action="insertar_api_producte.php" method="post">
            <div>
                <lable>
<select>
<?php

$query="SELECT ID_proveidor,Nom from proveidor;";
$result = mysqli_query($bbdd, $query) OR DIE ("Error");
while($proveidor = mysql_fetch_assoc ($result)){
    echo "<option_value = \"$proveidor[ID_proveidor]\">
    $proveidor[Nom]
    </option>";
}
?>
</select>
    </body>
</html>

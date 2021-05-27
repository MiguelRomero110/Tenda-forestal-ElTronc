<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>

    <h2> Llistar proveidor<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<form action="list_proveidor.php" method="GET">
    <select name="Poblacio">
    <?php
        $query="SELECT Poblacio FROM proveidor ORDER BY Nom;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
</form>
<h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th> Nom </th>
            <th> Adreca </th>
            <th> Codi Posatal </th>
            <th> Població </th>
            <th> Telèfon </th>
            <th> Opciones </th>
        </tr>
    </thead>
    <tbody>
<?php

$query= "SELECT * FROM proveidor ORDER BY Nom;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[ID_proveidor]</td>
            <td>$row[Nom]</td>
            <td>$row[Adreca]</td>
            <td>$row[CP]</td>
            <td>$row[Poblacio]</td>
            <td>$row[Telefon]</td>
            <td><a href=\"delete_api_proveidor.php?ID_producte=$row[ID_proveidor]\"> Elimina </a></td>
        </tr>"
?>
</tbody>
</table>
</h1>
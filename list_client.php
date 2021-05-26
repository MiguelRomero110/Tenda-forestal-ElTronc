<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>

    <h2> Llistar client<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<form action="list_client.php" method="GET">
    <select name="client">
    <?php
        $query="SELECT Nom, Poblacio FROM proveidor ORDER BY Nom;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Nom] </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
</form>
<h1>
<table>
    <thead>
        <tr>
            
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
$where= "";
if (isset($_GET["proveidor"])) {
    $where= "WHERE pd.ID_proveidor = \"$_GET[proveidor]\" ";
}
$query= "SELECT pr.*, pd.Nom AS Nomproveidor FROM producte AS pr INNER JOIN proveidor AS pd ON (pr.fkID_proveidor = pd.ID_proveidor)
    $where ORDER BY pr.Nom;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[Nom]</td>
            <td>$row[Preu]</td>
            <td>$row[Stock]</td>
            <td>$row[fkID_proveidor]</td>
            <td><a href=\"delete_api_producte.php?ID_producte=$row[ID_producte]\"> Elimina </a></td>
        </tr>"
?>
</tbody>
</table>
</h1>
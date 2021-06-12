<!DOCTYPE html>
<center>
    <html lang= "es">
<?php require "includes/head.php";?>

<title>ElTronc</title>
<body>

    <h2> Llistar venta</h2>
    <p>Parrafo no importante </p>
<form action="list_venta.php" method="GET">
    <select name="Data_venta">
    <option value="">  </option>
    <?php
        $query="SELECT DISTINCT Data_venta FROM venta ORDER BY Preu;";
    $result = mysqli_query ($bbdd, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value = \"$row[Data_venta]\"> $row[Data_venta] </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
<button><a href="list_venta.php">Reset</a></button>
<HR WIDTH=0% SIZE=0 />
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Preu</th>
            <th> DNI_client </th>
            <th> DNI_treballador </th>
            <th> Data_venta </th>
            <th> Opciones </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["Data_venta"])) {
    $where = " WHERE ve.Data_venta = \"$_GET[Data_venta]\"";
}
$query= "SELECT ve.*, cl.Nom AS Nomclient, tr.Nom AS Nomtreballador FROM venta AS ve INNER JOIN client AS cl ON (ve.fkDNI_client = cl.DNI_client) INNER JOIN treballador AS tr ON (ve.fkDNI_treballador = tr.DNI_treballador)
    $where ORDER BY ID_Venta;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[ID_Venta]</td>
            <td>$row[Preu]</td>
            <td>$row[fkDNI_client]</td>
            <td>$row[fkDNI_treballador]</td>
            <td>$row[Data_venta]</td>
            <td><button><a href=\"list_prod_vent.php?ID_Venta=$row[ID_Venta]\"> Productes venuts</a></button>
            <button><a href=\"delete_api_venta.php?ID_Venta=$row[ID_Venta]\"> Elimina </a></button>
            <button><a href=\"insert_venta.php?ID_Venta=$row[ID_Venta]\"> Edita </a></button></td>
        </tr>"
?>
</center>
</tbody>
</table>
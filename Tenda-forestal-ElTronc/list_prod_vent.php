<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>

    <h2> Llistar Prod_vent<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>

<h1>
<table>
    <thead>
        <tr>
            <th>ID_Prod_vent</th>
            <th> fkID_venta </th>
            <th> fkID_producte </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["prod_vent"])) {
    $where= " WHERE ve.ID_venta = \"$_GET[venta]\", WHERE pd.ID_producte = \"$_GET[producte]\" ";
}
$query= "SELECT tr.*, td.Nom AS Nomtenda FROM treballador AS tr INNER JOIN tenda AS td ON (tr.fkID_tenda = td.ID_tenda)
    $where ORDER BY ID_tenda;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[DNI_treballador]</td>
            <td>$row[Nom]</td>
            <td>$row[Adreca]</td>
            <td>$row[CP]</td>
            <td>$row[Poblacio]</td>
            <td>$row[Telefon]</td>
            <td>$row[Horari]</td>
            <td>$row[fkID_tenda]</td>
            <td><a href=\"delete_api_treballador.php?DNI_treballador=$row[DNI_treballador]\"> Elimina </a></td>
        </tr>"
?>
</tbody>
</table>
</h1>
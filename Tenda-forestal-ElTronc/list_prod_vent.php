<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>
<h2>
                <?php
                $query = "SELECT * FROM venta WHERE ID_Venta = \"$_GET[ID_Venta]\";  ";
                $result = mysqli_query($bbdd, $query);
                $venta = mysqli_fetch_assoc($result);
                echo " Llista de productes de la venta:  $venta[ID_Venta]";
                ?>
            </h2>
<h1>
<table>
    <thead>
            <th> fkID_venta </th>
            <th> fkID_producte </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["ID_Venta"])) {
    $where= " WHERE ve.ID_Venta = \"$_GET[ID_Venta]\" ";
}
$query= "SELECT pv.*, ve.ID_Venta, pd.ID_producte, pd.Nom FROM prod_vent AS pv INNER JOIN venta AS ve ON (pv.fkID_venta = ve.ID_Venta) INNER JOIN producte AS pd ON (pv.fkID_producte = pd.ID_producte)
    $where ORDER BY ID_Venta;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[fkID_venta]</td>
            <td>$row[Nom]</td>
        </tr>"
?>
</tbody>
</table>
</h1>
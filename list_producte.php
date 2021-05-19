<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<body>
<?php require "includes/header.php";?>
    <h2> Llistar producte<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<form action="list_producte.php" method="GET">
    <select name="proveidor">
    <?php
        $query="SELECT Nom, ID_proveidor FROM proveidor order by Nom;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[ID_proveidor]\">
        $row [Nom]
        </option>";
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
            <th> Preu </th>
            <th> Stock </th>
            <th> ID_proveidor </th>
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
        </tr>";
?>
</tbody>
</table>
</h1>
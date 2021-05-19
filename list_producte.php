<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<body>
<?php require "includes/header.php";?>
    <h2> Llistar producte<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<from action="list_producte.php" method="GET">
    <select name="proveidor">
    <?php
        $query="SELECT Nom, ID_proveidor FROM proveidor order by Nom";
    $result=mysqli_query($bbdd, $query);
    while ($proveidor= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$proveidor[ID_proveidor]\">
        $proveidor [Nom]
        </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
</from>
<?php require "includes/header.php";?>
    <h2> Llistar producte<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<table>
    <thead>
        <tr>
            <th> Nom </th>
            <th> Preu </th>
            <th> Stock </th>
            <th> fkID_proveidor </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET[proveidor])) {
    "$where  WHERE pd.ID_proveidor = $_GET[proveidor] ";
}
$query= "SELECT pr.* pd.Nom AS Nom proveidor FROM producte AS pr INNER JOIN proveidor AS pd ON (pr fkID_producte = pd.ID_proveidor)
    $where ORDER BY pr.Nom";     
$result=mysqli_query($bbdd,$query);
while($producte=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$producte[Nom]</td>
            <td>$producte[Preu]</td>
            <td>$producte[Stock]</td>
            <td>$producte[fkID_proveidor]</td>
        </tr>";
?>
</tbody>
</table>
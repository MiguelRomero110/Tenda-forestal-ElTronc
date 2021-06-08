<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>

    <h2> Llistar tenda<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<body bgcolor="">
<form action="list_tenda.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
    <?php
        $query="SELECT Poblacio FROM tenda ORDER BY Poblacio;";
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
            <th> Nom </th>
            <th> Adreça </th>
            <th> Codi Postal </th>
            <th> Poblacio </th>
            <th> Opciones </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["Poblacio"])) {
    $where = " WHERE Poblacio = \"$_GET[Poblacio]\" ";
}
$query= "SELECT * FROM tenda $where ORDER BY Nom;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[Nom]</td>
            <td>$row[Adreca]</td>
            <td>$row[Codi_Postal]</td>
            <td>$row[Poblacio]</td>
            <td><a href=\"delete_api_tenda.php?ID_tenda=$row[ID_tenda]\"> Elimina </a></td>
        </tr>"
?>
</tbody>
</table>
</h1>
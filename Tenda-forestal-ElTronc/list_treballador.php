<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>

    <h2> Llistar Treballador<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>
<form action="list_treballador.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
    <?php
        $query="SELECT Poblacio FROM treballador ORDER BY Poblacio;";
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
            <th>DNI</th>
            <th> Nom </th>
            <th> Adreca </th>
            <th> Codi Posatal </th>
            <th> Població </th>
            <th> Telèfon </th>
            <th> Horari </th>
            <th> ID_Tenda </th>
            <th> Opciones </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["Poblacio"])) {
    $where= " WHERE tr.Poblacio = \"$_GET[Poblacio]\" ";
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
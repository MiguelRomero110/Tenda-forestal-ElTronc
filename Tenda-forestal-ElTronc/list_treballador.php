<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>

<title>ElTronc</title><center>
<body>

    <h2> Llistar Treballador</h2>
    <p> Llista de tots els treballadors </p>
<form action="list_treballador.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
    <?php
        $query="SELECT DISTINCT Poblacio FROM treballador ORDER BY Poblacio;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
<button><a href="list_treballador.php">Reset</a></button>
<HR WIDTH=0% SIZE=0 />
</form>
</form>
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
            <td><button><a href=\"delete_api_treballador.php?DNI_treballador=$row[DNI_treballador]\"> Elimina </a></button>
            <button><a href=\"insert_treballador.php?DNI_treballador=$row[DNI_treballador]\"> Edita </a></button></td>
        </tr>"
?>
</tbody>
</table>
</center>
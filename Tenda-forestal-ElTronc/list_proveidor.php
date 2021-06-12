<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>

<title>ElTronc</title>
<center>
<body>

    <h2> Llistar proveidor</h2>
    <p>Proveïdors disponibles </p>
<form action="list_proveidor.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
    <?php
        $query="SELECT DISTINCT Poblacio FROM proveidor ORDER BY Poblacio;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
<button><a href="list_proveidor.php">Reset</a></button>
<HR WIDTH=0% SIZE=0 />
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th> Nom </th>
            <th> Adreca </th>
            <th> Codi Postal </th>
            <th> Població </th>
            <th> Telèfon </th>
            <th> Opciones </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["Poblacio"])) {
    $where= " WHERE Poblacio = \"$_GET[Poblacio]\" ";
}
$query= "SELECT * FROM proveidor $where ORDER BY Nom;";     
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[ID_proveidor]</td>
            <td>$row[Nom]</td>
            <td>$row[Adreca]</td>
            <td>$row[CP]</td>
            <td>$row[Poblacio]</td>
            <td>$row[Telefon]</td>
            <td><button><a href=\"delete_api_proveidor.php?ID_proveidor=$row[ID_proveidor]\"> Elimina </a></button>
            <button><a href=\"insert_proveidor.php?ID_proveidor=$row[ID_proveidor]\"> Edita</a></button></td>
        </tr>"
?>
</tbody>
</table></center>
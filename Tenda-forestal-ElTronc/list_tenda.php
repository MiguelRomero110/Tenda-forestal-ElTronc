<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>


<title>ElTronc</title>
<body>
<center>
    <h2> Llistar tenda</h2>
    <p> Llista de totes les tendes disponibles </p>
<body bgcolor="">
<form action="list_tenda.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
    <?php
        $query="SELECT DISTINCT Poblacio FROM tenda ORDER BY Poblacio;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
    } 
?> 
</select>
<button type="submit"> Filtrar </button>
<button><a href="list_tenda.php">Reset</a></button>
<HR WIDTH=0% SIZE=0 />
</form>
<table>
    <thead>
        <tr> 
            <th> Nom </th>
            <th> Adreça </th>
            <th> Codi Postal </th>
            <th> Població </th>
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
            <td><button><a href=\"delete_api_tenda.php?ID_tenda=$row[ID_tenda]\"> Elimina </a></button>
            <button><a href=\"insert_tenda.php?ID_tenda=$row[ID_tenda]\"> Edita</a></button></td>
        </tr>"
?>
</tbody>
</table>
</center>
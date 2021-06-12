<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>


<title>ElTronc</title>
<body>

<center>
    <h2> Llistar producte</h2>
    <p>Tots els productes disponibles </p>
<body bgcolor="">
<form action="list_producte.php" method="GET">
    <select name="proveidor">
    <option value="">  </option>
    <?php
        $query="SELECT Nom, ID_proveidor FROM proveidor ORDER BY Nom;";
        $result=mysqli_query($bbdd, $query);
        while ($row= mysqli_fetch_assoc($result)) {
            echo "<option value=\"$row[ID_proveidor]\"> $row[Nom] </option>";
        } 
    ?> 
</select>
<button class="Filtrar" type="submit"> Filtrar </button>
<button><a href="list_producte.php">Reset</a></button>
<HR WIDTH=0% SIZE=0 />
</form>

<table>
    <thead>
        <tr> 
            <th> Nom </th>
            <th> Preu </th>
            <th> Stock </th>
            <th> ID Proveïdor </th>
            <th> Imatge </th>
            <th> Opciones </th>
        </tr>
    </thead>
    <tbody>
<?php
$where= "";
if (isset($_GET["proveidor"])) {
    $where= " WHERE pd.ID_proveidor = \"$_GET[proveidor]\" ";
}
$query= "SELECT pr.*, pd.Nom AS Nomproveidor FROM producte AS pr INNER JOIN proveidor AS pd ON (pr.fkID_proveidor = pd.ID_proveidor)
    $where ORDER BY ID_producte;";
$result=mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
while($row=mysqli_fetch_assoc($result))
    echo"<tr>
            <td>$row[Nom]</td>
            <td>$row[Preu]</td>
            <td>$row[Stock]</td>
            <td>$row[fkID_proveidor]</td>
            <td><img src=\"Imatges/productes/$row[imatge] \" width=\"80\"></td>
            <td><button><a href=\"delete_api_producte.php?ID_producte=$row[ID_producte]\"> Elimina</a></button>
            <button><a href=\"insert_producte.php?ID_producte=$row[ID_producte]\"> Edita</a></button></td>
        </tr>"
?>
</tbody>
</table>
</center>
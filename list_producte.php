<from action="insert_producte.php" method="get">
    <select name="proveior">
    <?php
        $query="select nom, id from proveïdor order by nom";
    $result=mysql_query($bbdd, $query);
    while ($row= mysqli_fetihassoc($result)){
        echo "<option value=\"$row[ID]\">
        $row [nom]
        </option>";
    } 
?> 
</select>
<button type="submit"> filtrar </button>
</from>
<?php
$where= "";
if (isset($_GET[proveidor])){
    $where="where pd.ID= $_GET [proveidor]";
}
$query= "select pr.* pd.Nom as Nom Proveidor from producte as pr inner join proveidor as pd on (pr fk_idproducte = pd.ID)
    $where order by pr.Nom";     
?>
<form>
<input name="nom"/>
<select name="IDProveidor">

</form>


<table>
    <thead>
        <tr>
            <th>Preu</th>
            <th>Stock</th>
            <th>fkID_proveidor</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query="select * from productes order by nom";
        $result=mysqli_query($bbdd,$query);
        while($row=mysql_fetch_assoc($result)){
            echo"<tr>
                    <td>$row[Preu]</td>
                    <td>$row[Stock]</td>
                    <td>$row[fkID_proveidor]</td>
                </tr>";
        }
        ?>
    </tbody>
</table>
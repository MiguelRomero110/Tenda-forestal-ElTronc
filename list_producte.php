<?php require "includes/head.php";?>
<?php require "includes/header.php";?>

<from action="insert_producte.php" method="get">
    <select name="proveior">
    <?php
        $query="select nom, id from proveïdor order by nom";
    $result=mysqli_query($bbdd, $query);
    while ($proveidor= mysqli_fetihassoc($result)){
        echo "<option value=\"$proveidor[ID_proveidor]\">
        $proveidor [Nom]
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
<input name="Nom"/>
<select name="ID_proveidor">

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
        $query="select * from producte order by nom";
        $result=mysqli_query($bbdd,$query);
        while($producte=mysqli_fetch_assoc($result)){
            echo"<tr>
                    <td>$producte[Preu]</td>
                    <td>$producte[Stock]</td>
                    <td>$producte[fkID_proveidor]</td>
                </tr>";
        }
        ?>
    </tbody>
</table>
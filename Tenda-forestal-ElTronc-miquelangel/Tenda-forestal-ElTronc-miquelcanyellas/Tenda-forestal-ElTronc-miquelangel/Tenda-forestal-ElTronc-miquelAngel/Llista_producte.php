<form>
<input name="nom"/>
<select name="IDProveidor">
<?php
$query="select ID,nom from proveidor";
$result=mysqli_query($bbdd,$query);
while($row=mysql_fetch_assoc($result){
    echo"<option_value=/"$row[ID]/">
    $row[nom]
    </option>";
}
?>
</select>
</form>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producte</th>
            <th>Proveïdor</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query="select * from productes order by nom";
        $result=mysqli_query($bbdd,$query);
        while($row=mysql_fetch_assoc($result)){
            echo"<tr>
                    <td>$row[ID]</td>
                    <td>$row[nom]</td>
                    <td>$row[proveidor]</td>
                </tr>";
        }
        ?>
    </tbody>
</table>
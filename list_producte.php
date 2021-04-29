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
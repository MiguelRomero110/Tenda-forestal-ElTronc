<?php
id= $row[ID]
<a href= ""> Eliminar </a>
$query="DELETE FROM productes where id=\"$_GET[ID_producte]\"";
$result=mysqli_query($bbdd,$query);
?>
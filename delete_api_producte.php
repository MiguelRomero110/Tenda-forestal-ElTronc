<?php
$query="DELETE FROM productes where id=\"$_GET[ID_producte]\"";
$result=mysqli_query($bbdd,$query);

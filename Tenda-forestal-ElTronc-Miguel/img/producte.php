<?php

 $conexion=mysqli_connect('direccion','root','password','bbdd'); 


 $directorio1="/img/producte";

 
 $archivo1=$_FILES['Imatge']['tmp_name'];

 
 $nombrearchivo1=$_FILES['Imatge']['name'];

 
 if(move_uploaded_file($archive,$directory."/".$nombrearchivo)) { 

 $mysql ="INSERT INTO producte (Nom, Preu, Stock, ID_proveidor, Imatge) VALUES (   '" . $_POST['Nom'] . "','" . $_POST['Preu'] . "','" . $_POST['Stock'] . "',   '" . 
 $_FILES['Imatge']['Nom'] . "',   '" . $_POST['ID_proveidor'] . "')"; 
 echo mysqli_query($conexion,$mysql); }else {  }

?>

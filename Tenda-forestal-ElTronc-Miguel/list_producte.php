<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<B><FONT COLOR="red">
<center>
   <?php require "includes/header.php"; ?>
   <h1> Productes </h1>
   <HR WIDTH=80% SIZE=5>
   <body bgcolor="#2AB46">

   </body>

</html>

<table>
 <thead> 
  <tr> 
   <th>Nom</th>
   <th>Preu</th>
   <th>Stock</th>
   <th>ID proveidor</th>
   <th>Opcions</th>
  </tr>
  </thead>
   <tbody>
      <?php
      $query = "SELECT * FROM producte ORDER BY Nom";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[Preu]</td>
                  <td>$row[Stock]</td>
                  <td>$row[fkID_proveidor]</td>
                  <td><a href=\"delete_api_producte.php?ID_producte=$row[ID_producte]\">Elimina</a></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</FONT>
<br>
</center>
<HR WIDTH=80% SIZE=5>
<IMG SRC="http://www.canalgif.net/Gifs-animados/Herramientas/Motosierras/Imagen-animada-Motosierra-04.gif"ALIGN=MIDDLE>
</body>
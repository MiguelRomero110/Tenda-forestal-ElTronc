<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<B><FONT COLOR="red">
<center>
   <?php require "includes/header.php"; ?>
   <h1> Proveidors </h1>
   <HR WIDTH=80% SIZE=5>
   <body bgcolor="#68C89">
   </body>

</html>

<table>
 <thead> 
  <tr> 
   <th>Nom</th>
   <th>CP</th>
   <th>Adreça</th>
   <th>Telefon</th>
   <th>Poblacio</th>
   <th>Opcions</th>
  </tr>
  </thead>
   <tbody>
      <?php
      $query = "SELECT * FROM proveidor ORDER BY Nom";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[CP]</td>
                  <td>$row[Adreca]</td>
                  <td>$row[Telefon]</td>
                  <td>$row[Poblacio]</td>
                  <td><a href=\"delete_api_proveidor.php?ID_proveidor=$row[ID_proveidor]\">Elimina</a></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</center>
</FONT>
<br>
<HR WIDTH=80% SIZE=5>
</body>
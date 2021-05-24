<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<center>
   <?php require "includes/header.php"; ?>
   <h1> Productes </h1>

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
               </tr>";
      }
      ?>
   </tbody>
</table>
</center>
</body>
<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
   <?php require "includes/header.php"; ?>
   <h1> Proveidors </h1>

   <body bgcolor="#6AC89">
   </body>

</html>
<style>
   td {
      border: 1px solid;
   }
</style>
<table>
 <thead> 
  <tr> 
   <th>Nom</th>
   <th>CP</th>
   <th>Direcció</th>
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
               </tr>";
      }
      ?>
   </tbody>
</table>
<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<center>
   <?php require "includes/header.php"; ?>
   <h1> Proveidors </h1>

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
</center>
</body>
<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<B><FONT COLOR="red">
<center>

   <h1> Proveidors </h1>

   <body bgcolor="#68C89">
   </body>
   <form action="list_proveidor.php" method="GET">
    <select name="proveidor">
   <?php
        $query="SELECT Poblacio FROM proveidor ORDER BY Nom;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
    }
    ?>
    </select>
    <button type="submit"> Filtrar </button>
    </form>
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
<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<B><FONT COLOR="red">
<center>

   <h1> Tendes </h1>

   <body bgcolor="#68C89">
   </body>
   <form action="list_tenda.php" method="GET">
    <select name="tenda">
   <?php
        $query="SELECT Poblacio FROM tenda ORDER BY Nom;";
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
   <th>ID Tenda</th>
   <th>Poblacio</th>
   <th>Opcions</th>
   <th>Imatge</th>
  </tr>
  </thead>
   <tbody>
      <?php
      $query = "SELECT * FROM tenda ORDER BY Nom";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[CP]</td>
                  <td>$row[Adreca]</td>
                  <td>$row[ID_tenda]</td>
                  <td>$row[Poblacio]</td>
                  <td><a href=\"delete_api_tenda.php?ID_tenda=$row[ID_tenda]\">Elimina</a></td>
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
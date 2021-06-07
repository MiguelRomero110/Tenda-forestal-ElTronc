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
   <form action="list_client.php" method="GET">
    <select name="client">
    <option value="">  </option>
   <?php
        $query="SELECT Poblacio FROM client ORDER BY Poblacio;";
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
   <th>DNI</th>
   <th>Adreça</th>
   <th>Telefon</th>
   <th>Poblacio</th>
   <th>Email</th>
   <th>Opcions</th>
  </tr>
  </thead>
   <tbody>
      <?php
      $query = "SELECT * FROM client ORDER BY Nom";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[CP]</td>
                  <td>$row[DNI_client]</td>
                  <td>$row[Adreca]</td>
                  <td>$row[Telefon]</td>
                  <td>$row[Poblacio]</td>
                  <td>$row[email]</td>
                  <td><a href=\"delete_api_client.php?DNI_client=$row[DNI_client]\">Elimina</a></td>
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
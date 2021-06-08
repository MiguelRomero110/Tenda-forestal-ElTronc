<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>

    <h2> Llistar clients<h2>
    <h6> Er Serresiete <h6>
    <p>Parrafo no importante <p>

<body>
   
   <h1> Clients </h1>
   </body>
   <form action="list_client.php" method="GET">
    <select name="Poblacio">
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
<h1>
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
      $where= "";
      if (isset($_GET["Poblacio"])) {
          $where = " WHERE Poblacio = \"$_GET[Poblacio]\" ";
      }
      $query = "SELECT * FROM client $where ORDER BY Nom";
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
<br>
</body>
<h1>
    </html>
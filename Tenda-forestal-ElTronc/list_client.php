<!DOCTYPE html>
    <html lang= "es">
<?php require "includes/head.php";?>

<title>ElTronc</title>
<center>
<body>

    <h2> Llistar clients</h2>
    <p>Clients registrats </p>

<body>
   
   </body>
   <form action="list_client.php" method="GET">
    <select name="Poblacio">
    <option value="">  </option>
   <?php
        $query="SELECT DISTINCT Poblacio FROM client ORDER BY Poblacio;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Poblacio]\"> $row[Poblacio] </option>";
    }
    ?>
    </select>
    <button type="submit"> Filtrar </button>
<button><a href="list_client.php">Reset</a></button>
    </form>
    <HR WIDTH=0% SIZE=0 />

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
                  <td><button><a href=\"delete_api_client.php?DNI_client=$row[DNI_client]\">Elimina</a></button>
                  <button><a href=\"insert_client.php?DNI_client=$row[DNI_client]\"> Edita</a></button></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</body>
    </html>
    </center>
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
   <form action="list_producte.php" method="GET">
    <select name="producte">
    <?php
        $query="SELECT Nom FROM proveidor ORDER BY Nom;";
    $result=mysqli_query($bbdd, $query);
    while ($row= mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[Nom]\"> $row[Nom] </option>";
    }
    ?>
    </select>
    <button type="submit"> Filtrar </button>
</html>

<table>
 <thead> 
  <tr> 
   <th>Nom</th>
   <th>Preu</th>
   <th>Stock</th>
   <th>ID proveidor</th>
   <th>Imatge</th>
   <th>Opcions</th>
  </tr>
  </thead>
   <tbody>
      <?php
      $where= "";
      if (isset($_GET["proveidor"])) {
          $where= "WHERE pd.ID_proveidor = \"$_GET[proveidor]\" ";
      }
      $query= "SELECT pr.*, pd.Nom AS Nomproveidor FROM producte AS pr INNER JOIN proveidor AS pd ON (pr.fkID_proveidor = pd.ID_proveidor)
          $where ORDER BY pr.Nom;";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[Preu]</td>
                  <td>$row[Stock]</td>
                  <td>$row[fkID_proveidor]</td>
                  <td>$row[Imatge]</td>
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
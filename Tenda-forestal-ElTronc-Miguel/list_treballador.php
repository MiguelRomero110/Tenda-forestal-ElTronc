<!DOCTYPE html>
<html lang="es">

<?php require "includes/head.php";?>
<header>
  
</header>

<body>
<B><FONT COLOR="red">
<center>

   <?php require "includes/header.php"; ?>
   <h1> Treballadors </h1>
   <HR WIDTH=80% SIZE=5>
   <body bgcolor="#2AB46">

   </body>
   <form action="list_treballador.php" method="GET">
    <select name="treballador">
    <?php
        $query="SELECT Nom FROM treballador ORDER BY Nom;";
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
   <th>DNI</th>
   <th>CP</th>
   <th>Adreça</th>
   <th>Població</th>
   <th>Telèfon</th>
   <th>Imatge</th>
   <th>Horari</th>
   <th>ID Tenda</th>
   <th>Opcions</th>
  </tr>
  </thead>
   <tbody>
      <?php
      $where= "";
      if (isset($_GET["tenda"])) {
          $where= "WHERE ID_tenda = \"$_GET[tenda]\" ";
      }
      $query= "SELECT tr.*, td.Nom AS Nomtenda FROM treballador AS tr INNER JOIN tenda AS td ON (tr.fkID_tenda = td.ID_tenda)
          $where ORDER BY tr.Nom;";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                  <td>$row[Nom]</td>
                  <td>$row[DNI_treballador]</td>
                  <td>$row[CP]</td>
                  <td>$row[Adreca]</td>
                  <td>$row[Poblacio]</td>
                  <td>$row[Telefon]</td>
                  <td>$row[Horari]</td>
                  <td>$row[fkID_tenda]</td>
                  <td><a href=\"delete_api_treballador.php?ID_treballador=$row[ID_treballador]\">Elimina</a></td>
               </tr>";
      }
      ?>
   </tbody>
</table>
</FONT>
<br>
</center>
<HR WIDTH=80% SIZE=5>
</body>
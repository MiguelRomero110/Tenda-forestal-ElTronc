<?php require "includes/head.php";?>
<?php require "includes/header.php";?>
<?php
    require "includes/mysql.php";
    echo "<p> Nom:".$_POST["Nom"]."</p>";
    echo "<p> DNI_treballador:".$_POST["DNI_treballador"]."</p>";
    echo "<p> Adreca:".$_POST["Adreca"]."</p>";
    echo "<p> ID_tenda:".$_POST["fkID_tenda"]."</p>";
    echo "<p> CP:".$_POST["CP"]."</p>";
    echo "<p> Poblacio:".$_POST["Poblacio"]."</p>";
    echo "<p> Telefon:".$_POST["Telefon"]."</p>";
    echo "<p> Horari:".$_POST["Horari"]."</p>";
    $query="INSERT INTO treballador (Nom,  DNI_treballador, Adreca, fkID_tenda, CP, Poblacio, Telefon, Horari)
            VALUES (\"$_POST[Nom]\" , \"$_POST[DNI_treballador]\" , \"$_POST[Adreca]\" , \"$_POST[ID_tenda]\", \"$_POST[CP]\", \"$_POST[Poblacio]\", \"$_POST[Telefon]\", \"$_POST[Horari]\");";
            echo $query;
$result = mysqli_query($bbdd, $query);
if(!$result){
    echo"error query";
   print(mysqli_error($bbdd));


}
?>

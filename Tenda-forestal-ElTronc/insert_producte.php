<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<center>
    
    <title>ElTronc</title>

    <body>
       
        <h1>Insertar Producte<h1>
                <h2>Productes de forestal de bona qualitat</h2>
</center>
<?php
$id_producte = '';
$nom = '';
$preu = '';
$stock = '';
$fkID_proveidor = '';
$imagen = '';
if (isset($_GET['ID_producte'])) {
    $query = "SELECT * FROM producte WHERE ID_producte = \"$_GET[ID_producte]\";";
    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
    $producte = mysqli_fetch_assoc($result);
    if ($producte["ID_producte"]) {
        $id_producte = $producte["ID_producte"];
        $nom = $producte["Nom"];
        $preu = $producte["Preu"];
        $stock = $producte["Stock"];
        $fkID_proveidor = $producte["fkID_proveidor"];
        $imagen = $producte["imatge"];
    }
}
?>
<div>
    <center>
        <?php
        if ($id_producte) {
            echo '<h2> Actualitzant el producte amb ID: ' . $id_producte . '</h2>';
        } else {
            echo '<h2> Inserta un nou producte </h2>';
        }
        ?></center>
</div>
<form class="box" action="<?= ($id_producte) ? "update_api_producte.php?id=$id_producte" : 'insertar_api_producte.php' ?>" method="post" enctype="multipart/form-data">
    <div>
        <input type="text" maxlength="255" placeholder="Nom" required minlenghth="2" name="Nom" value="<?= $nom ?>">
    </div>
    <div>
        <input type="number" required min="0.01" placeholder="Preu" step="0.01" value="<?= $preu ?>">
    </div>
    <div>
        <input type="number" required min="1" placeholder="Stock" name="Stock" value="<?= $stock ?>">
    </div>
    <div>
        <input type="file" name="imgProducte" placeholder="Imatge" step="0.01" value="<?= $imagen ?>">
    </div>
    <HR WIDTH=0% SIZE=0 />
    <label>
        Proveïdors
    </label>
    <div>
        <select name="ID_proveidor" required>
            <option value=""></option>
            <?php
            $query = "SELECT ID_proveidor, Nom from proveidor;";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($proveidor = mysqli_fetch_assoc($result)) {
                $selected = '';
                if ($proveidor['ID_proveidor'] == $fkID_proveidor) {
                    $selected = 'selected';
                }
                echo "<option $selected value=\"$proveidor[ID_proveidor]\">$proveidor[Nom]</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <input type="reset">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
</body>

</html>
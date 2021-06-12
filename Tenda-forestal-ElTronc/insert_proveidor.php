<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<title>ElTronc</title>
<body>
<center>
        <h2>Insertar proveïdor<h2>
        <p>Fica les dades del proveïdor a continuació:</p>
        </center>
            <?php
        $id_proveidor = '';
        $nom = '';
        $adreca = '';
        $cp = '';
        $poblacio = '';
        $telefon = '';
        if (isset($_GET['ID_proveidor'])) {
            $query = "SELECT * FROM proveidor WHERE ID_proveidor = \"$_GET[ID_proveidor]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $proveidor = mysqli_fetch_assoc($result);
            if ($proveidor["ID_proveidor"]) {
                $id_proveidor = $proveidor["ID_proveidor"];
                $nom = $proveidor["Nom"];
                $adreca = $proveidor["Adreca"];
                $cp = $proveidor["CP"];
                $poblacio = $proveidor["Poblacio"];
                $telefon = $proveidor["Telefon"];
            }
        }
        ?>
        <div><center>
            <?php
                if ($id_proveidor) {
                    echo '<h2> Actualitzant el proveidor amb ID: ' . $id_proveidor . '</h2>';
                } else {
                    echo '<h2> Inserta un nou proveidor </h2>';
                }
            ?></center>
        </div>
        <form class="box" action="<?= ($id_proveidor) ? "update_api_proveidor.php?id=$id_proveidor" : 'insertar_api_proveidor.php' ?>" method="post" enctype="multipart/form-data">
                <div>
                    <input type="text" maxlength="255" placeholder="Nom" required minlenghth="2" name="Nom" value="<?=$nom?>">
                </div>
                <div>
                    <input type="text" required minlenghth="10" placeholder="Adreca" name="Adreca" value="<?=$adreca?>">
                </div>
                <div>
                    <input type="text" maxlength="7" required minlenghth="1" placeholder="Codi Postal" name="CP" value="<?=$cp?>">
                </div>
                <div>
                    <input type="text" maxlenght="255" required minlenghth="5" placeholder="Població" name="Poblacio" value="<?=$poblacio?>">
                </div>
                <div>
                    <input type="text" maxlength="9" required minlenghth="9" placeholder="Telèfon" name="Telefon" value="<?=$telefon?>">
                </div>
                <div>
                    <input type="reset">
                </div>
                <div>
                    <input type="submit" value="Enviar" > 
                </div>
            </form>
</body>

</html>
<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<title>ElTronc</title>
<body><center>
    <h2>Insertar Tenda</h2>
            <p>Inserta les dades de la nova tenda</p>
            <?php
        $id_tenda = '';
        $nom = '';
        $adreca = '';
        $codi_postal = '';
        $poblacio = '';
        if (isset($_GET['ID_tenda'])) {
            $query = "SELECT * FROM tenda WHERE ID_tenda = \"$_GET[ID_tenda]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $tenda = mysqli_fetch_assoc($result);
            if ($tenda["ID_tenda"]) {
                $id_tenda = $tenda["ID_tenda"];
                $nom = $tenda["Nom"];
                $adreca = $tenda["Adreca"];
                $codi_postal = $tenda["Codi_Postal"];
                $poblacio = $tenda["Poblacio"];
            }
        }
        ?>
        <div>
            <?php
                if ($id_tenda) {
                    echo '<h2> Actualitzant la tenda amb ID: ' . $id_tenda . '</h2>';
                } else {
                    echo '<h2> Inserta una nova tenda </h2>';
                }
            ?></center>
        </div>
        <form class="box" action="<?= ($id_tenda) ? "update_api_tenda.php?id=$id_tenda" : 'insertar_api_tenda.php' ?>" method="post" enctype="multipart/form-data">
                <div>
                    <input type="text" maxlength="255" placeholder="Nom" required minlenghth="2" name="Nom" value="<?=$nom?>">
                </div>
                <div>
                    <input type="text"  required minlenghth="1" placeholder="Adreça" name="Adreca" value="<?=$adreca?>">
                </div>
                <div>
                    <input type="text" maxlength="10" placeholder="Codi Postal" required minlenghth="1" name="Codi_Postal" value="<?=$codi_postal?>">
                </div>
                <div>
                    <input type="text" required minlenghth="1" placeholder="Població" name="Poblacio" value="<?=$poblacio?>">
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
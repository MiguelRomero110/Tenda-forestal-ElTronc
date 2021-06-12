<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<title>ElTronc</title>
<center>
<body>
    <h2>Insertar Treballador</h2>
            <p>Insertar les dades del nou treballador</p>
            
            <?php
        $dni_treballador = '';
        $nom = '';
        $adreca = '';
        $cp = '';
        $poblacio = '';
        $telefon = '';
        $horari = '';
        $fkID_tenda = '';

        if (isset($_GET['DNI_treballador'])) {
            $query = "SELECT * FROM treballador WHERE DNI_treballador = \"$_GET[DNI_treballador]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $treballador = mysqli_fetch_assoc($result);
            if ($treballador["DNI_treballador"]) {
                $dni_treballador = $treballador["DNI_treballador"];
                $nom = $treballador["Nom"];
                $adreca = $treballador["Adreca"];
                $cp = $treballador["CP"];
                $poblacio = $treballador["Poblacio"];
                $telefon = $treballador["Telefon"];
                $horari = $treballador["Horari"];
                $fkID_tenda = $treballador["fkID_tenda"];
            }
        }
        ?>
        <div>
            <?php
                if ($dni_treballador) {
                    echo '<h2> Actualitzant el treballador amb DNI: ' . $dni_treballador . '</h2>';
                } else {
                    echo '<h2> Inserta un nou treballador </h2>';
                }
            ?>
        </div>
        <form class="box" action="<?= ($dni_treballador) ? "update_api_treballador.php?id=$dni_treballador" : 'insertar_api_treballador.php' ?>" method="post" enctype="multipart/form-data">
                 <div>
                    <input type="text" maxlength="9" required minlenghth="9" placeholder="DNI" name="DNI_treballador" value="<?=$dni_treballador?>">
                </div>
                <div>
                    <input type="text" maxlength="255" placeholder="Nom" required minlenghth="2" name="Nom" value="<?=$nom?>">
                </div>
                <div>
                    <input type="text" required minlenghth="10" placeholder="Adreça" name="Adreca" value="<?=$adreca?>">
                </div>
                <div>
                    <input type="text" maxlength="7" placeholder="Codi postal" required minlenghth="1" name="CP" value="<?=$cp?>">
                </div>
                <div>
                    <input type="text" maxlenght="255" placeholder="Població" required minlenghth="5" name="Poblacio" value="<?=$poblacio?>">
                </div>
                <div>
                    <input type="text" maxlength="9" placeholder="Telèfon" required minlenghth="9" name="Telefon" value="<?=$telefon?>">
                </div>
                <div>
                    <input type="text" maxlength="11" placeholder="Horari" required minlenghth="11" name="Horari" value="<?=$horari?>">
                </div>
                <div>
                    <label>
                        Tendes
                    </label>
                    <select aria-placeholder="Tendes" name="ID_tenda" required >
                        <option value=""></option>
                        <?php
                        $query = "SELECT DISTINCT ID_tenda, Nom from tenda;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($tenda = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$tenda[ID_tenda]\"> $tenda[Nom]</option>";
                            $selected = '';
                            if($tenda['ID_tenda'] == $fkID_tenda){
                                $selected = 'selected';
                            }
                            echo "<option $selected value=\"$tenda[ID_tenda]\">$tenda[Nom]</option>";
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

</html></center>
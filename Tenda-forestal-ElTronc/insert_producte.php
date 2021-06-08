<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>
    <h2>Insertar Producte<h2>
            <h9>Bebesitaaaa uaaaaa</h9>
            <p>Parrafo para los rials</p>
            <form action="insertar_api_producte.php" method="post">
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
            <?php
                if ($id_producte) {
                    echo '<h2> Actualitzant el producte amb ID: ' . $id_producte . '</h2>';
                } else {
                    echo '<h2> Inserta un nou producte </h2>';
                }
            ?>
        </div>
                <div>
                    <lable>
                        Nom
                    </lable>
                    <input type="text" maxlength="255" required minlenghth="2" name="Nom" value="<?=$nom?>">
                </div>
                <div>
                    <lable>
                        Preu
                    </lable>
                    <input type="number" required min="0.01" name="Preu" step="0.01" value="<?=$preu?>">
                </div>
                <div>
                    <lable>
                        Stock
                    </lable>
                    <input type="number" required min="1" name="Stock" value="<?=$stock?>">
                </div>
                <div>
                    <lable>
                        imatge
                    </lable>
                    <input type="file" name="imatge" step="0.01" value="<?=$imagen?>">
                </div>
                <div>
                    <select name="ID_proveidor"  required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT ID_proveidor, Nom from proveidor;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($proveidor = mysqli_fetch_assoc($result)) {
                            $selected = '';
                            if($proveidor['ID_proveidor'] == $fkID_proveidor){
                                $selected = 'selected';
                            }
                            echo "<option $selected value=\"$proveidor[ID_proveidor]\">$proveidor[Nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>
                        Reset
                    </label>
                    <input type="reset">
                </div>
                <div>
                    <button type="submit">
                        Enviar
                    </button>
                </div>
            </form>
</body>

</html>
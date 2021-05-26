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
                <div>
                    <lable>
                        Nom
                    </lable>
                    <input type="text" maxlength="255" required minlenghth="2" name="Nom">
                </div>
                <div>
                    <lable>
                        Preu
                    </lable>
                    <input type="number" max="2000" required min="1" name="Preu" step="0.01">
                </div>
                <div>
                    <lable>
                        Stock
                    </lable>
                    <input type="number" required min="1" name="Stock">
                </div>
                <div>
                    <select name="ID_proveidor" required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT ID_proveidor, Nom from proveidor;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($proveidor = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$proveidor[ID_proveidor]\">
    $proveidor[Nom]
    </option>";
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
<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
    <body>
    <center>
        <?php require "includes/header.php";?>
        <h2> Tenda Forestal El Tronc tot el que necessites <h2>
        <h9>  Tenda per a feines de Forestal </h9>
        <p>  Insertar un Producte per comprar: </p>
        <form action="insertar_api_producte.php" method="post">
            <div>
                <input type="text" placeholder="Nom" maxlength="255" required minlenghth="2" name="Nom">
            </div>
            <div>
                <input type="number" placeholder="Preu" max="2000" required min="1" name="Preu" step="0.01">
            </div>
            <div>
                <input type="number" placeholder="Stock" required min="1" name="Stock">
            </div>
<div>
<select name="ID_proveidor" required>
<option value=""></option>
</div>
<?php
$query="SELECT ID_proveidor, Nom from proveidor;";
$result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
while($proveidor = mysqli_fetch_assoc($result)) {
    echo "<option value = \"$proveidor[ID_proveidor]\">
    $proveidor[Nom]
    </option>";
}
?>
</select>
            </div>
            <div>
                <label>
                    
                </label>
                <input type="reset" value="Reset">
            </div>
            <div>
            <button type="submit" value="Enviar">
                Enviar
            </button>
            </div>
        </form>
    </body>
    </center>
</html>

<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
    <body>
        <?php require "includes/header.php";?>
        <h2>Tenda Forestal El Tronc tot el que necessites<h2>
        <h9>Tenda per a feines de Forestal</h9>
        <p>Crea el teu perfil de proveidor per començar a vendre productes forestals:</p>
        <form action="insertar_api_proveidor.php" method="post">
            <div>
                <lable>
                    Nom
                </lable>
                <input type="text" maxlength="255" required minlenghth="2" name="Nom">
            </div>
            <div>
                <lable>
                    CP
                </lable>
                <input type="number" max="20000" required min="1" name="CP">
            </div>
            <div>
                <lable>
                    Adreca
                </lable>
                <input type="text" required min="10" name="Adreca">
            </div>
            <div>
                <lable>
                    Poblacio
                </lable>
                <input type="text" required min="10" name="Poblacio">
            </div>
            <div>
                <lable>
                    Telefon
                </lable>
                <input type="number" max="800000000" required min="600000000" name="Telefon">
            </div>

</select>
            </div>
            <div>
                <label>
                    
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

<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<body>
    <?php require "includes/header.php"; ?>
    <h2>Insertar Proveidor<h2>
            <h9>Bebesitaaaa uaaaaa</h9>
            <p>Parrafo para los rials</p>
            <form action="insertar_api_proveidor.php" method="post">
                <div>
                    <lable>
                        Nom
                    </lable>
                    <input type="text" maxlength="255" required minlenghth="2" name="Nom">
                </div>
                <div>
                    <lable>
                        Adreca
                    </lable>
                    <input type="text" required minlenghth="10" name="Adreça">
                </div>
                <div>
                    <lable>
                        CP
                    </lable>
                    <input type="text" maxlength="7" required minlenghth="1" name="Codi Postal">
                </div>
                <div>
                    <lable>
                        Poblacio
                    </lable>
                    <input type="text" maxlenght="255" required minlenghth="5" name="Població">
                </div>
                <div>
                    <lable>
                        Telefon
                    </lable>
                    <input type="text" maxlenght="12" required minlenghth="9" name="Telefon">
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
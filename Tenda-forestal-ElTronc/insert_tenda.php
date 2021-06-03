<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>
    <h2>Insertar Tenda<h2>
            <h9>Bebesitaaaa uaaaaa</h9>
            <p>Parrafo para los rials</p>
            <form action="insertar_api_tenda.php" method="post">
                <div>
                    <lable>
                        Nom
                    </lable>
                    <input type="text" maxlength="255" required minlenghth="2" name="Nom">
                </div>
                <div>
                    <lable>
                        Adreça
                    </lable>
                    <input type="text"  required minlenghth="1" name="Adreca">
                </div>
                <div>
                    <lable>
                        Codi Postal
                    </lable>
                    <input type="text" maxlength="10" required minlenghth="1" name="Codi_Postal">
                </div>
                <div>
                    <lable>
                        Poblacio
                    </lable>
                    <input type="text" required minlenghth="1" name="Poblacio">
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
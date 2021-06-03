<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
    <body>

    <B><FONT COLOR="red">
    <center>
        <?php require "includes/header.php";?>
        <h2>Tenda Forestal El Tronc tot el que necessites<h2>
        <h9>Tenda per a feines de Forestal</h9>
        <HR WIDTH=80% SIZE=5>
        <p>Crea el teu perfil de client per començar a comprar productes forestals:</p>
        <form action="insertar_api_client.php" method="post">
            <div>

                <input type="text" placeholder="DNI" maxlength="9" required minlenghth="2" name="DNI_client">
            </div>
            <div>

                <input type="text" placeholder="CP" max="9" required min="1" name="CP">
            </div>
            <div>

                <input type="text" placeholder="Adreça" required min="10" name="Adreca">
            </div>
            <div>

                <input type="text" placeholder="Població" required min="10" name="Poblacio">
            </div>
            <div>

                <input type="text" placeholder="Telèfon" maxlength="9" required min="9" name="Telefon">
            </div>
            <div>

         <input type="text" placeholder="Nom" maxlength="255" required minlength="2" name="Nom">
     </div>
     <div>

         <input type="text" placeholder="email" maxlength="255" name="email" requirep>
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
        </center>
        </FONT>
<br>
        <HR WIDTH=80% SIZE=5>
        <IMG SRC="" ALIGN=MIDDLE>
    </body>
</html>
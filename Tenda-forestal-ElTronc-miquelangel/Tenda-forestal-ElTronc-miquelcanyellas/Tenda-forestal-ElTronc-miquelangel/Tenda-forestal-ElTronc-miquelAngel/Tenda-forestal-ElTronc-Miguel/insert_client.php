<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
    <HR WIDTH=80% SIZE=5>
    <body>

    <B><FONT COLOR="#802A00">
    <center>
   

        <p>Creant ja el teu perfil de client per començar a comprar productes forestals:</p>
        <form class="box" action="insertar_api_client.php" method="post">
            <div>

                <input type="text" placeholder="DNI" maxlength="255" required minlenghth="2" name="DNI_client">
            </div>
            <div>

                <input type="text" placeholder="CP" max="20000" required min="1" name="CP">
            </div>
            <div>

                <input type="text" placeholder="Adreça" required min="10" name="Adreca">
            </div>
            <div>

                <input type="text" placeholder="Població" required min="10" name="Poblacio">
            </div>
            <div>

                <input type="number" placeholder="Telèfon" max="800000000" required min="600000000" name="Telefon">
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
            <input type="submit" value="Enviar">
            </div>
        </form>
        </center>
        </FONT>
<br>
        <HR WIDTH=80% SIZE=5>
        <IMG SRC="" ALIGN=MIDDLE>
    </body>
</html>
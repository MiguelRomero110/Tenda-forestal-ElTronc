<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<body>
    <B>
        <FONT COLOR="red">
            <center>

               
                <p> Insertar un Producte per comprar: </p>
                <form class="box" action="insertar_api_producte.php" method="post" enctype="multipart/form-data">
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

                        <input type="file" name="producte">
                    </div>
                    <div>
                        <label>

                        </label>
                        <input type="reset" value="Reset">
                    </div>
                    <div>
                    <input type="submit" value="Enviar">
                    </div>
                </form>
                <HR WIDTH=80% SIZE=5 />
                <IMG SRC="https://m.gifmania.com.mx/Gifs-Animados-Personas/Gif-Animadas-Profesiones/Imagenes-Animadas-Lenadores/Lenador-Cortando-Un-Tronco-60027.gif" ALIGN=MIDDLE>
</body>
</FONT>
<br>
<h5>
<audio src="WAKAWAKA.mp3" controls="" loop="loop" autoplay="autoplay"></audio>
</h5>
</center>

</html>
<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<body>
    <B>
        <FONT COLOR="red">
            <center>


                <p> Insertar una Tenda: </p>
                <form class="box" action="insertar_api_tenda.php" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="text" placeholder="Nom" maxlength="255" required minlenghth="2" name="Nom">
                    </div>
                    <div>
                        <input type="text" placeholder="Adreca" max="2000" required min="1" name="Adreca" step="0.01">
                    </div>
                    <div>
                        <input type="number" placeholder="CP" required min="1" name="CP">
                    </div>
                    <div>
                        <input type="text" placeholder="Poblacio" required min="1" name="Poblacio">
                    </div>
                    <div>
                     
                            <option value=""></option>
                    <?php
                    $query = "SELECT ID_tenda, Nom from tenda;";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($proveidor = mysqli_fetch_assoc($result)) {
                        echo "<option value = \"$tenda[ID_tenda]\">
                                $tenda[Nom]
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
</body>
</FONT>
<br>
</center>

</html>
<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<body>
    <B>
        <FONT COLOR="red">
            <center>
                <?php require "includes/header.php"; ?>
                <h2> Tenda Forestal El Tronc tot el que necessites </h2>
                <h9> Tenda per a feines de Forestal </h9>
                <HR WIDTH=80% SIZE=5 />
                <p> Insertar un Treballador per feina: </p>
                <form action="insertar_api_treballador.php" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="text" placeholder="Nom" maxlength="255" required minlenghth="2" name="Nom">
                    </div>
                    <div>
                        <input type="text" placeholder="DNI" max="2000" required min="1" name="DNI">
                    </div>
                    <div>
                        <input type="text" placeholder="Adreca" required min="1" name="Adreca">
                    </div>
                    <div>
                        <input type="number" placeholder="CP" required min="1" name="CP">
                    </div>
                    <div>
                        <input type="text" placeholder="Població" required min="1" name="Població">
                    </div>
                    <div>
                        <input type="number" placeholder="Telèfon" required min="1" name="Telèfon">
                    </div>
                    <div>
                        <input type="date" placeholder="Horari" required min="1" name="Horari">
                    </div>
                    <div>
                        <select name="ID_tenda" required>
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

                        <input type="file" name="foto treballador">
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
                <HR WIDTH=80% SIZE=5 />
</body>
</FONT>
<br>
</center>

</html>
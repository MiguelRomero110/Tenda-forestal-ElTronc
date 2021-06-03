<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>

<body>
    <B>
        <FONT COLOR="red">
            <center>


                <p> Insertar una Tenda: </p>
            <form class="box" action="insertar_api_treballador.php" method="post">
                 <div>
                    <input type="text" placeholder="DNI" maxlength="9" required minlenghth="9" name="DNI_treballador">
                </div>
                <div>
                    <input type="text" placeholder="Nom" maxlength="255" required minlenghth="2" name="Nom">
                </div>
                <div>
                    <input type="text" placeholder="Adreça" required minlenghth="10" name="Adreca">
                </div>
                <div>
                    <input type="text" placeholder="CP" maxlength="7" required minlenghth="1" name="CP">
                </div>
                    <input type="text" placeholder="Poblacio" maxlenght="255" required minlenghth="5" name="Poblacio">
                </div>
                <div>
                    <input type="text" placeholder="Telefon" maxlength="9" required minlenghth="9" name="Telefon">
                </div>
                <div>
                    <input type="text" placeholder="Horari" maxlength="11" required minlenghth="11" name="Horari">
                </div>
                <div>
                    <select name="ID_tenda" required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT ID_tenda, Nom from tenda;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($tenda = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$tenda[ID_tenda]\"> $tenda[Nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="reset">
                </div>
                       <input type="submit">

            </form>
</body>

</html>
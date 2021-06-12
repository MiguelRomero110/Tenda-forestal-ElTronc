<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
 
    <title>ElTronc</title>
    <body>

        <center>
        <h2>Tenda Forestal El Tronc tot el que necessites</h2>
        <p>Crea el teu perfil de client per començar a comprar productes forestals:</p>
        </center>
        <?php
        $dni_client = '';
        $nom = '';
        $adreca = '';
        $cp = '';
        $poblacio = '';
        $telefon = '';
        $email = '';
        if (isset($_GET['DNI_client'])) {
            $query = "SELECT * FROM client WHERE DNI_client = \"$_GET[DNI_client]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $client = mysqli_fetch_assoc($result);
            if ($client["DNI_client"]) {
                $dni_client = $client["DNI_client"];
                $nom = $client["Nom"];
                $adreca = $client["Adreca"];
                $cp = $client["CP"];
                $poblacio = $client["Poblacio"];
                $telefon = $client["Telefon"];
                $email = $client["email"];
            }
        }
        ?>
        <center>
        <div>
            <?php
                if ($dni_client) {
                    echo '<h2> Actualitzant el client amb DNI: ' . $dni_client . '</h2>';
                } else {
                    echo '<h2> Inserta un nou client </h2>';
                }
            ?></center>
        </div>
        <form class="box"  action="<?= ($dni_client) ? "update_api_client.php?id=$dni_client" : 'insertar_api_client.php' ?>" method="post" enctype="multipart/form-data">
        <div>
                <input type="text" maxlength="9" placeholder="DNI" required minlenghth="2" name="DNI_client" value="<?=$dni_client?>">
            </div>
            <div>
                <input type="text" max="9" placeholder="CP" required min="1" name="CP" value="<?=$cp?>">
            </div>
            <div>
                <input type="text" required min="10" placeholder="Adreça" name="Adreca" value="<?=$adreca?>">
            </div>
            <div>
                <input type="text" required min="10" placeholder="Població" name="Poblacio" value="<?=$poblacio?>">
            </div>
            <div>
                <input type="text" maxlength="9" placeholder="Telèfon" required min="9" name="Telefon" value="<?=$telefon?>">
            </div>
            <div>
         <input type="text" maxlength="255" placeholder="Nom" required minlength="2" name="Nom" value="<?=$nom?>">
     </div>
     <div>
         <input type="text" maxlength="255" placeholder="Email" name="email" requirep value="<?=$email?>">
     </div>
</select>
            </div>
            <div>
                <input type="reset">
            </div>
            <div>
            <input type="submit" value="Enviar">
            </div>
        </form>
    </body>
</html>
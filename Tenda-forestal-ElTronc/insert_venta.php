<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>


<title>ElTronc</title>
<center>
<body>
    <h2>Insertar venta</h2>
            <p>Inserta les dades de la venta</p>
            
            <?php
        $id_Venta = '';
        $preu = '';
        $fkDNI_treballador = '';
        $fkDNI_client = '';
        $Data_venta = '';
        if (isset($_GET['ID_Venta'])) {
            $query = "SELECT * FROM venta WHERE ID_Venta = \"$_GET[ID_Venta]\";";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            $venta = mysqli_fetch_assoc($result);
            if ($venta["ID_Venta"]) {
                $id_Venta = $venta["ID_Venta"];
                $preu = $venta["Preu"];
                $fkDNI_treballador = $venta["fkDNI_treballador"];
                $fkDNI_client = $venta["fkDNI_client"];
                $Data_venta = $venta["Data_venta"];
            }
        }
        ?>
        <div>
            <?php
                if ($id_Venta) {
                    echo '<h2> Actualitzant la venta amb ID: ' . $id_Venta . '</h2>';
                } else {
                    echo '<h2> Inserta una nova venta </h2>';
                }
            ?>
        </div>
        <form class="box" action="<?= ($id_Venta) ? "update_api_venta.php?id=$id_Venta" : 'insertar_api_venta.php' ?>" method="post" enctype="multipart/form-data">
                <label>
                    Preu
                </label>
                <div>
                    <input type="number" required min="0.01" name="Preu" step="0.01" value="<?=$preu?>">
                </div>
                <div>
                <label>
                    Treballador
                </label>
                    <select name="DNI_treballador" required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT DNI_treballador, Nom from treballador;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($treballador = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$treballador[DNI_treballador]\">$treballador[Nom]</option>";
                            $selected = '';
                            if($treballador['DNI_treballador'] == $fkDNI_treballador){
                                $selected = 'selected';
                            }
                            echo "<option $selected value=\"$treballador[DNI_treballador]\">$treballador[Nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>
                        Client
                    </label>
                    <select name="DNI_client" required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT DNI_client, Nom from client;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($client = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$client[DNI_client]\">$client[Nom]</option>";
                            $selected = '';
                            if($client['DNI_client'] == $fkDNI_client){
                                $selected = 'selected';
                            }
                            echo "<option $selected value=\"$client[DNI_client]\">$client[Nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label>
                        Data de la venta
                    </label>
                    <input type="date" name="Data_venta" value="<?=$Data_venta?>">
                </div>
                <div>
                <h4>Productes comprats</h4>
                        <?php
                        $query = "SELECT * FROM producte order by Nom";
                        $result = mysqli_query($bbdd,$query);
                        while($prod = mysqli_fetch_assoc($result)){
                            //Cercam si el producte està dins venta
                            $query = "SELECT * FROM prod_vent WHERE fkID_venta = '$id_Venta' AND fkID_producte = '$prod[ID_producte]' ";
                            $result2 = mysqli_query($bbdd,$query);
                            $checked = (mysqli_num_rows($result2) > 0) ? 'checked' : '';
                            echo "<div>
                                    <input $checked type='checkbox' name='producteVenta[]' value='$prod[ID_producte]'/>
                                    <label>$prod[Nom] - ($prod[Preu]€)</label>
                                  </div>";
                        }
                        ?>
                </div>
                <div>
                    <input type="reset">
                </div>
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
</body>

</html></center>
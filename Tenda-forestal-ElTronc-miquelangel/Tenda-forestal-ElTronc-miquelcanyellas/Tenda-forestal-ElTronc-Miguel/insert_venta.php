<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>
<body>
<center>
    <b><FONT COLOR="#802A00">
    <h2>Insertar venta:<h2>
            <form class="box" action="insertar_api_venta.php" method="post">
                <div>
                    <input type="number" placeholder="Preu" required min="0.01" name="Preu" step="0.01">
                </div>
                <div>
                <lable>
                    Treballador
             </lable>
                    <select name="DNI_treballador" required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT DNI_treballador, Nom from treballador;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($treballador = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$treballador[DNI_treballador]\">$treballador[Nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <lable>
                        Client
                    </lable>
                    <select name="DNI_client" required>
                        <option value=""></option>
                        <?php
                        $query = "SELECT DNI_client, Nom from client;";
                        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                        while ($client = mysqli_fetch_assoc($result)) {
                            echo "<option value = \"$client[DNI_client]\">$client[Nom]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <lable>
                        Data Venta
                    </lable>
                    <input type="date" name="Data_venta">
                </div>
                <div>
                <p>Productes comprats</p>
                        <?php
                        $query = "SELECT * FROM producte order by Nom";
                        $result = mysqli_query($bbdd,$query);
                        while($prod = mysqli_fetch_assoc($result)){
                            echo "<div>
                                    <input type='checkbox' name='producteVenta[]' value='$prod[ID_producte]'/>
                                    <label>$prod[Nom] - ($prod[Preu]€)</label>
                                  </div>";
                        }
                        ?>
                </div>
                <div>
                    <input type="reset">
                </div>
                <div>
                    <input type="submit">
                </div>
            </form>
                    </FONT>
            </center>
</body>

</html>
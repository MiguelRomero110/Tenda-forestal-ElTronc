<!Doctype html>
<html lang="es">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<br><br><br><br><br><br>
<body>
    <h2>Insertar venta<h2>
            <h9>Bebesitaaaa uaaaaa</h9>
            <p>Parrafo para los rials</p>
            <form action="insertar_api_venta.php" method="post">
                <div>
                    <lable>
                        Preu
                    </lable>
                    <input type="number" required min="0.01" name="Preu" step="0.01">
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
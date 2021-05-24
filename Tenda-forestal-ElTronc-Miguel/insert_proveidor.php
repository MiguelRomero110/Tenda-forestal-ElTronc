<!Doctype html>
<html lang="es">
    <?php require "includes/head.php";?>
    <body>
    <center>
        <?php require "includes/header.php";?>
        <h2>Tenda Forestal El Tronc tot el que necessites<h2>
        <h9>Tenda per a feines de Forestal</h9>
        <p>Crea el teu perfil de proveidor per començar a vendre productes forestals:</p>
        <form action="insertar_api_proveidor.php" method="post">
            <div>
              
                <input type="text" placeholder="Nom" maxlength="255" required minlenghth="2" name="Nom">
            </div>
            <div>
              
                <input type="number" placeholder="CP" max="20000" required min="1" name="CP">
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
    </body>
</html>

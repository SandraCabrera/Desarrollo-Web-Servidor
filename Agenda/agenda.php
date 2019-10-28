<!DOCTYPE html>
<?php
/**
 * Practica php creación
 * de una agenda, en la que
 * podemos guardar nombres y 
 * números de télefonos.
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
</head>
<body>
    <?php
        //declaración de las variables
        if (isset($_GET["nombre"])) {
            $nombre = ($_GET["nombre"]);
        } else {
            $nombre = "";
        }

        $telefono = isset($_GET["telefono"]) ? $_GET["telefono"] : $telefono = "";

        if (isset($_GET["agenda"])) {
            $agenda = $_GET["agenda"];
        } else {
            $agenda = [];
        }

        if (isset($_GET["submit"])) {
            $nombre_nuevo = $_GET["nombre"];
            $telefono_nuevo = $_GET["telefono"];
            if (empty($telefono_nuevo)) {
                unset($agenda[$nombre_nuevo]);
            } else {
                $agenda[$nombre] = $telefono;
            }
        }
    ?>

    <h2>Agenda</h2>
    <form method="get">
        <?php 
            foreach ($agenda as $nombre => $telefono) {
                echo "<input type='hidden' name='agenda[".$nombre."]' value='".$telefono."'>";
            }
        ?>
        Nombre: <input type="text" name="nombre">
        <br><br>
        Telefono: <input type="text" name="telefono">
        <input type="submit" name="submit" value="Guardar">  
    </form>

    <?php
      

        echo "<h2>Tu agenda:</h2>";
        print_r($agenda);
    ?>
</body>
</html>
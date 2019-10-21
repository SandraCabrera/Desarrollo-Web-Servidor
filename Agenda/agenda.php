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
        //definimos las variables
        $nombre = "";
        $numero = "";
        $agenda = array();
    ?>
    <h1>Agenda</h1>
    <form method="get">
        Introduzca el nombre del contacto:<br>
        <input type="text" name="nombre">
        <br>
        Introduzca el número del contacto:<br>
        <input type="text" name="numero">
        <br><br>
        <input type="submit" value="Guardar">
    </form>

    <?php
        if (isset($_GET["submit"])) {
            $nombre = $_GET["nombre"];
            $numero = $_GET["numero"];
            echo $nombre;
            echo $numero;
        }
    ?>
</body>
</html>
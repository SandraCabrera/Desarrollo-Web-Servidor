<!DOCTYPE html>
<?php
/**
 * Primera practica php.
 * Creación tabla de multiplicar.
 */

/**
 * Desclaración de las constantes.
 */

 define("NUMEROS", 10);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <table>
        <?php
            for ($i = 1; $i <= NUMEROS; $i++) {
                echo "<tr><td>Tabla de: ".$i."</td>";

                for ($j = 1; $j <= NUMEROS; $j++) {
                    echo "<td>".$i * $j."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
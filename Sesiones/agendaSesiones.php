<!DOCTYPE html>
<?php
/**
 * Practica php agenda.
 * Usando sesiones.
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda con Sesiones</title>
</head>
<body>
    <?php
        session_start();
        (isSet($_SESSION['agenda'])) ? $_SESSION['agenda'] = $_SESSION['agenda'] : $_SESSION['agenda' ]= [];
        if(isSet($_GET['submit'])) {
            $name = filter_input(INPUT_GET,"name");
            if(!$name) {
            echo "<p>Introduce un nombre</p>";
            } else {
                $phone = filter_input(INPUT_GET,"phone");
                if (!$phone) {
                unset($_SESSION['agenda'][$name]);
                } else {
                $_SESSION['agenda'][$name] = $phone;
                }
            }    
        } 
        echo '<form>';
        foreach ($_SESSION['agenda'] as $name => $phone){
            echo"<input type='hidden' name='agenda[".$name."]'value='" . $phone . "'>";
        }
        echo 'Name: <input type="text" name="name"></br>';
        echo 'Teléfono: <input type="text" name="phone"><br>';
        echo '<input type="submit" name="submit" value="Submit">';
        echo '<table style="border: 1px solid blue">';
        echo '<theader> <th>Nombre</th> <th>Teléfono</th> </theader>';
        foreach ($_SESSION['agenda'] as $name => $phone){
        echo "<tr><td>$name</td>";
        echo "<td>$phone</td></tr>";
        }
    echo '</table>';
    ?></form>
</body>
</html>
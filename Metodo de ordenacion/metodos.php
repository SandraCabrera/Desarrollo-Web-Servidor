<!DOCTYPE html>
<?php
/**
 * Practica php creación
 * de métodos de ordenación.
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Métodos de ordenación</title>
</head>
<body>
  <?php
    /**
     * Creamos un Array formado por los nombres
     * de los diferentes métodos, para su selección.
     */
    $metodos = ['burbuja', 'insercion'];
    $metodoSelecionado = '';
    $metodo = $_POST['metodoSelecionado'];
    $nombreMetodo=($metodos[$metodo]); // Para que el select sepa el nombre del método elegido.  
    /**
     * Método de la burbuja.
     */
    function burbuja($array) {
      $tamaño = count($array) - 1;
      for ($i = 0; $i < $tamaño; $i++) {
        for ($j = 0; $j < $tamaño - $i; $j++) {
          $k = $j + 1;
          if ($array[$k] < $array[$j]) {
              list($array[$j], $array[$k]) = array($array[$k], $array[$j]);
          };
        };
      };
    return $array;
    };
    /**
     * Método de Inserción directa.
     */
    function insercion($array) {
      $tamaño = sizeof($array);
      for ($i = 1; $i < $tamaño; $i++) {
        $vector = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $array[$j] > $vector) {
          $array[$j + 1] = $array[$j];
          $j--;
        };
      $array[$j + 1] = $vector;
    };
    return $array;   
    };
  ?>
  <h1>Métodos de ordenación</h3>
  <form method="post">
  <h3>Introduce los números que quieres que sean ordenados</h3>
  <p>¿Quiere generar un Array de manera aleatoria?</p>
  <input type="number" name="aleatorio" min="0" max="12000">
  <br>
  <p>¿Quiere introducir un Array manualmente?</p>
  <input type="text" name="manual">
  <h3>Selecciona el método de ordenación</h3>
  Métodos: 
  <?php 
    /**
     * Creación del select.
     */
    $output='<select name="metodoSelecionado">';
    foreach($metodos as $i=>$valor) {
      $output.='<option value="'.$i.'">'.str_replace('_', ' ', $valor).'</option>';
    }
    echo $output;
  ?>
  <input type="submit" value="Ordenar"><hr>
  <h3>La solución</h3>
  <?php
  /**
   * Introducción de datos aleatorios.
   */
    if (isset($_POST['aleatorio']) && $_POST['aleatorio'] > 0) {
      $tamaño = $_POST['aleatorio'];
      $array = [];
      for ($i=0; $i<$tamaño; $i++) { // Creación del Array
        $array[$i] = rand(0, 12000);
      }
      $output = $nombreMetodo;
      $sortedArray = $metodos[$metodo]($array);
      $output.= implode(', ', $sortedArray);
      echo $output;
    }
  /**
   * Instroducción de datos
   */
    if (isset($_POST['manual']) && $_POST['manual'] != "") {
      $input = $_POST['manual'];
      $array = explode(',', $input);
      $output = $nombreMetodo;
      $sortedArray = $metodos[$metodo]($array);
      $output.= implode(', ', $sortedArray);
      echo $output;
    }
  ?>
  </form>
</body>
</html>
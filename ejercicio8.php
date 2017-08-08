<!-- Algoritmo  que imprima toda la suma de los numeros impares entre el 1 al 100-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <h3>la suma de todos los impares del 1 al 100 es:</h3>

    <?php
    $i=1;
    $suma=0;
    while ($i <= 100) {
      if ($i % 2 != 0) {

        $suma=$suma+$i;


      }
      $i++;
    }
      echo "$suma <br/>";



     ?>


  </body>
</html>

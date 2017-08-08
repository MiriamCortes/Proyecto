<!--Algoritmo que imprima la suma de todos los numeros que van del 1 al 100 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <h3>la suma de todos los numeros del 1 al 100 es:</h3>
    <?php
    $i=1;
    $suma=0;
    while ($i <= 100) {
      $suma=$suma+$i;

        $i++;

    }
      echo " $suma <br/>";
     ?>

  </body>
</html>

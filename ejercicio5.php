<!--Algoritmo que muestre los numeros primos que haya del 1 al 100-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <h3> los numeros primos del 100 al 1 son:</h3>
    <?php

    $n=1;

    while ($n <= 100) {
     if (($n==2) or ($n==3) or ($n==5) or ($n==7) or ($n==11) or ($n==13) or ($n==17) or ($n==19) or ($n==23) or ($n==29) or ($n==31) or ($n==37) or ($n==41) or
      ($n==43) or ($n==47) or ($n==53) or ($n==59) or ($n==61) or ($n==67) or ($n==71) or ($n==73) or ($n==79) or ($n==83) or ($n==89) or ($n==97)){
         echo "$n </br>";
    }
          $n++;
  }


     ?>

  </body>
</html>

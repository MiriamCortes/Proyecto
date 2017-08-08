<!--Algoritmo que muestre los números pares entre  1 al 100.-->

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Ejercicio 3</title>
   </head>
   <body>
     <h3> los numeros pares del 1 al 100 son:</h3>
    <?php
    $i=1;

    while ($i <= 100) {
      if ($i % 2 == 0) {
        echo "$i <br/>";

      }
      $i++;
    }
     ?>




   </body>
 </html>

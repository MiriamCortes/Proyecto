<!--Resuelva un algoritmo que al ingresar un numero del 1 al 5 imprima si es primo o no es primo-->

<?php

$a=7;
$cont=0;
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewprt" content="width=device=width, initial=scale1,shirink=to=fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesoma.min.css">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <div class="container">
      <h2>número: <?php echo $a ?></h2>


<?php
     for ($i=1; $i <=$a ; $i++) {
      if($a % $i==0){
       $cont=$cont+1;

     }
}

       if($cont==2){
          echo "<h5> el numero es primo </h5> ";
       }
       else {
         echo "<h5> el numero no es primo </h5> ";
       }




?>
</div>

          </body>
        </html>

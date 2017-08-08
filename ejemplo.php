<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewprt" content="width=device=width, initial=scale1,shirink=to=fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesoma.min.css">
    <title>Ejemplo</title>
  </head>
  <body>
    <div class="container">
      <h3>ejemplo: PHP Estructura condicional</h3>
      <h4>usuario: <?php $usuario = "admin"; echo $usuario ?></h4>
      <?php

      if($usuario == "abmin"){ echo "<h5> bienvenido usuario de administrador</5>";}

      elseif ($usuario =="invitado") { echo "<h5> Bienvenido usuario invitado</h5>";}

      else {echo "<h5> Bienvenido a la pagina de usuarios </h5>";}

      ?>




    </div>

  </body>
</html>

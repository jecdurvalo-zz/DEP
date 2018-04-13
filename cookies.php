<?php
    $nome   = 'NomeDoCookie';
    $valor  = 100;
    $expira = time() + (60 * 60 * 24 * 30);

    setcookie($nome, $valor, $expira);

    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
   
    
  </body>
</html>

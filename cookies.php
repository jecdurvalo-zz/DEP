<?php
    $nome   = 'NomeDoCookie';
    $valor  = 100;
    $expira = time() + (60 * 60 * 24 * 30);

    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>
  <?php 
    if(isset($_COOKIE['NomeDoCookie'])){
        echo "Oi sumido! Você já tem o cookie ( ͡° ͜ʖ ͡°)";
    }else{
        echo "<img src='img/cookie.gif'>";
        setcookie($nome, $valor, $expira);
    }
  ?>
   
    
  </body>
</html>

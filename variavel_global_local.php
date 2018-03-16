<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <h1>Variável global e local</h1>
    <?php
      //global
      $x = "Global <br>";

      function teste(){
        //Para manter global
        global $x;

        //Local sobrescreve a global
        $x = "Dentro";
      }
      echo $x;
      echo "<br>";

      teste();
      echo $x;

    ?>
  </body>
</html>

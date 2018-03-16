<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <h1>Funções de String</h1>
    <?php
      $string = "Hoje é sexta-feira!";

      //Função imprime o N de caracteres da string
      echo strlen($string);
      echo "<br>";

      //Função para deixar as letras em caixa alta
      echo strtoupper($string);
      echo "<br>";

      //Função para deixar as letras em caixa baixa
      echo strtolower($string);
      echo "<br>";

      //Função verifica se existe um certo tipo de caracter
      //strstr(a variavel, o que você quer verificar)
      if (!strstr($string, 'x')) {
        echo "Não contém o caracter";
      }else {
        echo "Contém o caracter";
      }
    ?>
  </body>
</html>

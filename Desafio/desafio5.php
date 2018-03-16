<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 5</title>
    </head>    
    
    <body>
        <?php
            function temperatura($c){
                return ($c * 1.8) + 32;
            }
            echo "A Temperatura em Graus Fahrenheit é: " . temperatura(35) . "ºF";
        ?>
    </body>    
</html>    

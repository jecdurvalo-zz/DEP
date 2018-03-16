<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 4</title>
    </head>    
    
    <body>
        <?php
            for($x = 1; $x <= 10; $x++){
                echo "Tabuada do $x <br>";
                for($y = 1; $y <= 10; $y++){
                    //Usando concatenação
                    echo $x . " x " . $y . " = " . $x * $y . "<br>";
                }
                echo "<br>";
            }
        
        ?>
    </body>    
</html>    

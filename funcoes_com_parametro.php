<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funções com Parâmetro</title>
    </head>    
    
    <body>
        <?php
            function somar($x, $y){
                return $x + $y;
            } 
//            echo somar(5, 3);
        
            function subtrair($x, $y){
               return $x - $y;  
            }
            
            function multiplicar($x, $y, $z){
                 return $x * $y * $z;
            }
        
            function dividir($x, $y){
                 return $x / $y;
            }
        
    //   echo multiplicar(5, 3, 10);
        
        ?>
    </body>    
</html>    

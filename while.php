<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - While</title>
    </head>    
    
    <body>
    <?php
        // LOOP INFINITO    
//        while(4 < 10){
//            echo "Bom dia!!!";
//        }  
        
        $contador = 0;
        while($contador < 10){
            echo "Bom dia!!!" . "<br>";
            //$contador = $contador + 1;
            $contador++;
        }
        
    ?>    
        
    </body>    
</html>    

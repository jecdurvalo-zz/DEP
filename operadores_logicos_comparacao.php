<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Operadores Lógicos & Comparação</title>
    </head>    
    
    <body>
        <?php
            if(4 == 4){
                //echo "Sim, é verdade!";
            }
            if(4 < 4){
                echo "?";
            }
            if(4 != 4){
                echo "Diferente!";
            }
            if(4 === "4"){
                echo "verdade";
            }
            if(4 <= 4){
                echo "ok";
            }
        
            // Operadores Lógicos
        
            if( 4 === "4" || 4 < 5){
                echo "Sim é verdade";
            }
        
            if( 4 == "4" && 4 < 5){
                echo "Sim é verdade";
            }
        
        ?>
    </body>    
</html>    

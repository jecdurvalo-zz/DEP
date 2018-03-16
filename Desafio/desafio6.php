<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 6</title>
    </head>    
    
    <body>
        <?php
            
        

        
        
        
        
        
        
        function sorteioMega(){
                // Sortear 6 números
//                for($i = 1; $i <=6; $i++){
//                    $n[] = rand(1,60);
//                }
                $n = array();
                
                while(count($n) < 6){
                    $valor = rand(1,60);
                    $n[$valor] = $valor;  
                }
            
                //Colocando em Ordem Crescente
                sort($n);
                //Exibir mensagem com números separados
                echo "Os números sorteados da Mega Sena são: " . implode(' - ', $n);
            }
            sorteioMega();
        
        ?>
    </body>    
</html>    

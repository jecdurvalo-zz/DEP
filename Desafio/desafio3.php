<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 3</title>
    </head>    
    
    <body>
        <?php
            //Notas
            $nota_nac = 7;
            $nota_am = 8.7;
            $nota_ps = 1.2;
        
            //Pesos
            $peso_nac = 0.2;
            $peso_am = 0.3;
            $peso_ps = 0.5;
            
            $nota_final = ($nota_nac * $peso_nac) + ($nota_am * $peso_am) + ($nota_ps * $peso_ps);
        
            //echo $nota_final;
        
            //Faltas
            $total_aulas = 70;
            $total_faltas = 14;
        
            $porcentagem_permitida = 0.2;
        
            $faltas_permitidas = $total_aulas * $porcentagem_permitida;
        
            if($nota_final >= 6 && $total_faltas <= $faltas_permitidas) {
                echo "Sua nota foi $nota_final. Parabéns você foi aprovado!";
            }elseif($nota_final >= 6 && $total_faltas > $faltas_permitidas){
                echo "Sua nota foi $nota_final, mas você foi retido por faltas #chateado";
            }else{
                echo "Sua nota foi $nota_final. Portanto você foi reprovado!!!";
            }
        
            
        
        ?>
    </body>    
</html>    

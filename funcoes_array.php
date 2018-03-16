<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funções com Array</title>
    </head>    
    
    <body>
        <?php
        $lista = array(343, 34, 323, 23, 54, 232, 453);
        
        //Função que exibe o maior número do array:
        echo max($lista);
        echo "<br>";
        //Função que exibe o menor número do array:
        echo min($lista);
        echo "<br>";
        //Ordem Crescente
        sort($lista);
        //Função que imprime o array inteiro
        print_r($lista);
        echo "<br>";
        
        
        $dados = array('Gustavo', 'Torrente', '11954001111');
        $implode = implode(", ", $dados);
        echo $implode;
        ?>
    </body>    
</html>    

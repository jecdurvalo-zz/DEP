<?php

    function mostrarCategorias(){

    global $connection;

    $query = "SELECT * FROM categoria";
                $select_todas_categorias = mysqli_query($connection, $query);
                
                     while($row = mysqli_fetch_assoc($select_todas_categorias)){
                     $cat_nome = $row['cat_nome'];
                     echo '<li><a href="#">' . $cat_nome . '</a></li>';
        }
}

    function lerCategoria(){

    global $connection;

    $query = "SELECT * FROM categoria";
                $select_categoria = mysqli_query($connection, $query);
                
                     while($row = mysqli_fetch_assoc($select_categoria)){
                    $cat_id = $row['cat_id'];
                     $cat_nome = $row['cat_nome'];
                    
                    echo '<tr>';
                    echo '<td>' . $cat_id . '</td>';
                    echo '<td>' . $cat_nome . '</td>';
                    echo "<td><a href='categorias.php?delete=
                    {$cat_id}'>Apagar</td>";
                    echo '</tr>';
    }
}


    function adicionarCategoria(){
        global $connection;

        if (isset($_POST['adicionar'])) {
            $cat_nome = $_POST['cat_nome'];

            if($cat_nome == ""){
                echo "<div class='alert alert-danger' role='alert'>Insira uma categoria!!</div>";
            } else{
                // Tratamento de SQL Injection
                  $cat_nome = mysqli_real_escape_string($connection, $cat_nome);
            
                  $query = "INSERT INTO categoria (cat_nome) VALUES('$cat_nome')";
          
                 $novaCategoria = mysqli_query($connection, $query);
                    if (!$novaCategoria) {
                      die('Erro da criação de novo usuário: ' . mysqli_error($connection));
                       } else {
                    echo "<div class='alert alert-success' role='alert'>Categoria adicionada com sucesso!</div>";
            }
          }
        }
    }

?>
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
                    echo '<td>'  $cat_id . '</td>';
                    echo '<td>' . $cat_nome . '</td>';
                    echo '</tr>';
    }
}


    function adicionarCategoria(){
        
    }

?>
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

?>
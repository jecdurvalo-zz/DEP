<?php

    ob_start(); // Buffer de saída

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
                    echo "<td><a href='categorias.php?delete={$cat_id}'>Apagar</a></td>";
                    echo "<td><a href='categorias.php?edit={$cat_id}'>Editar</a></td>";
                    echo '</tr>';
    }
}


    function add(){
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
function delete(){
    global $connection;

    if(isset($_GET['delete'])){
        $cat_id = $_GET['delete'];
        $query = "DELETE FROM categoria WHERE cat_id = $cat_id";

        $resultQuery = mysqli_query($connection, $query);


        header('Location:categorias.php');
    }
}

function edit(){

    if(isset($_GET['edit'])){
        $cat_id = $_GET['edit'];

    $query = "SELECT * FROM categoria WHERE cat_id = $cat_id";
    $select_categoria = mysqli_query($connection, $query);
    
         while($row = mysqli_fetch_assoc($select_categoria)){
        $cat_id = $row['cat_id'];
         $cat_nome = $row['cat_nome'];

         echo '<div class="form-group">';
         echo '<input value="' . if(isset($cat_nome)){ echo $cat_nome;} . '" type="text" class="form-control" name="cat_nome">';
         echo '</div>';

        }
    }



}


function update(){
    global $con;   
    if(isset($_GET['edit'])){
        $cat_id = $_GET['edit'];

        $query = "SELECT * FROM categoria WHERE cat_id  = $cat_id";
        $select_categorias = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($select_categorias)){
            $cat_id = $row['cat_id'];
            $cat_nome = $row['cat_nome'];
            if(isset($cat_nome)) {
                echo '<input type="text" name="cat_nome" id="' . $cat_id . '" value="' . $cat_nome . '" class="form-control">';
            }
        }
    }
    else {
        echo '<input type="text" name="cat_nome" id="nome" class="form-control">';
    }
    if(isset($_POST['edit'])){
        //$cat_id = $_GET['cat_id'];
        $cat_nome = $_GET['nome'];
        $query = "UPDATE categoria SET cat_nome = 'cat_nome' WHERE cat_id  = $cat_id";

        $result = mysqli_query($con, $query);

        if(!$result){
            die('<div class="alert alert-success">Falha na atualização</div>');
        } else {
            echo '<div class="alert alert-success"> Dados atualizados com sucesso!</div>';
        }
    }
}



?>
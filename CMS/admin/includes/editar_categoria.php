<?php     
if(isset($_GET['edit'])){
                $cat_id = $_GET['edit'];
                                        
                $query = "SELECT * FROM categoria WHERE cat_id =  $cat_id";
                $select_todas_categorias = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_assoc($select_todas_categorias)){
                        $cat_id = $row['cat_id'];
                        $cat_nome = $row['cat_nome'];
    ?>      
            <form action="" method="post">
            <div class="form-group">
            <label for="cat_nome">Editar categoria:</label>
                                                  
            <input value="<?php if(isset($cat_nome)){echo $cat_nome;} ?>" type="text" class="form-control" name="cat_nome">
             </div> 
                <div class="form-group">
                <input type="submit" class="btn btn-primary" name="atualizar" value="ATUALIZAR">
                </div>   
             </form>                         
<?php                                    
            }
        }
 ?>
                    
              <?php
                if(isset($_POST['atualizar'])){
                    $edita_cat_nome = $_POST['cat_nome'];
                  //  echo $edita_cat_nome;
                    $query = "UPDATE categoria SET cat_nome = '$edita_cat_nome' WHERE cat_id = $cat_id";
                    mysqli_query($connection, $query);
                } 
?>
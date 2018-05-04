<?php ob_start();?>
<?php include 'includes/functions.php';?>
<?php include 'includes/admin_header.php'; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php'; ?>
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Posts
                            <small>/ Ver todos os posts</small>
                        </h1>
                        
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Autor</th>
                                    <th>Imagem</th>
                                    <th>Data</th>
                                    <th>Conteúdo</th>
                                <tr>    
                            </thead>    
                            
                                <tbody>
                                    <?php
                    $query = "SELECT * FROM posts";
                    $select_todos_posts = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_todos_posts)){
                        $post_id = $row['post_id'];
                        $post_titulo = $row['post_titulo'];
                        $post_autor = $row['post_autor'];
                        $post_imagem  = $row['post_imagem'];   
                        $post_data  = $row['post_data'];
                        $post_conteudo   = $row['post_conteudo'];  
                        
                        echo "<tr>";
                        echo "<td>" . $post_id . "</td>";
                        echo "<td>" . $post_titulo . "</td>";
                        echo "<td>" . $post_autor . "</td>";
    echo "<td><img src='../images/$post_imagem' class ='img-responsive' ></td>";
                        echo "<td>" . $post_data . "</td>";
                        echo "<td>" . $post_conteudo . "</td>";
                        echo "</tr>";
                        
                        
                    }
                                    
                                    ?>
                                </tbody>    
                            
                        </table>    
          
                        
                      </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'includes/admin_footer.php'; ?>


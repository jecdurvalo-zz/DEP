<?php include 'includes/db.php';
      include 'includes/header.php';
     ?>

     <!-- Navigation -->
   <?php include 'includes/navigation.php' ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Posts da Semana
                    <small>Maravilha!</small>
                </h1>

                <?php 
                     $query = "SELECT * FROM post";
                     $select_post = mysqli_query($connection, $query);
                     
                          while($row = mysqli_fetch_assoc($select_post)){
                          $post_titulo = $row['post_titulo'];
                          $post_autor = $row['post_autor'];
                          $post_data = $row['post_data'];
                          $post_conteudo = $row['post_conteudo'];
                          $post_imagem = $row['post_imagem'];      
            
                ?>

                <!-- First Blog Post -->
                <h2>
                    <?php echo $post_titulo;?>
                </h2>
                <p class="lead">
                    por <a href="index.php"><?php echo $post_autor;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Postado dia <?php echo date('d/m/Y', strtotime($post_data)); ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_imagem; ?>" alt="">
                <hr>
                <p><?php echo $post_conteudo; ?></p>
                <a class="btn btn-primary" href="#">Leia mais <span class="glyphicon glyphicon-chevron-right"></span></a>
                <br>
                <hr>               

                <?php } ?>
    </div>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php' ?>


        <!-- Footer -->
<?php include 'includes/footer.php' ?>
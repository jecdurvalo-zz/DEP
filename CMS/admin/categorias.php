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
                            Bem vindo ao Painel de Controle
                            <small>/ Categorias</small>
                        </h1>
                        
                        
                        <div class="col-sm-6">
                            
                            <?php // INSERE CATEGORIA
                                inserirCategoria();
                            ?>
                            
                                <form action="categorias.php" method="post">
                                <div class="form-group">
                                    <label for="cat_nome">Adicionar categoria:</label>
                                    <input type="text" class="form-control" name="cat_nome">
                                </div>    
                                             
                            
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="adicionar" value="ADICIONAR">
                                </div>
                                
                                </form> 
                            
                            <hr>
                                                                      
                <?php include "includes/editar_categoria.php"; ?>                         
                        
                        </div>    
                        
                        
                        <div class="col-sm-6">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome da Categoria</th>
                                    </tr>    
                                </thead>    
                                
                                <tbody>
                                    
                            <?php // READ (select na tabela)
                                mostraDadosCategoria();
                            ?>
                                    
                                    
                            <?php // DELETA CATEGORIA
                                deletaCategoria();
                            ?>                            

                                </tbody>    
                                
                            </table>    
                        
                        </div>
                        
                        
                        
                      </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'includes/admin_footer.php'; ?>


<?php include "includes/admin_header.php";
      include "../includes/functions.php"
      
      ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Bienvenido al panel de control!
                        <small>Categorias</small>
                    </h1>

                    <div class="col-sm-6">
                        <form action="categorias.php" method="POST">

                            <?php adicionarCategoria(); ?>

                            <label for="cat_nome">Adicionar categoria </label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cat_nome">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="adicionar" value="ADICIONAR">
                            </div>

                        </form>
                    </div>

                    <div class="col-sm-6">
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categorias</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <?php lerCategoria(); ?>
                                </tr>
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

    <?php include "includes/admin_footer.php" ?>
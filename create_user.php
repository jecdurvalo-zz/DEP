<?php include 'db.php';
      include 'functions.php';
      createUser();
?>

<?php include 'header.php'; ?>
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h1>Cadastro</h1>
          <h6>Ainda não possui cadastro? Faça seu cadastro no formulário abaixo :)</h6>
          <hr>
          <br>

          <form action="create_user.php" method="post">

            <div class="form-group">
              <label for="text">Usuário</label>
              <input type="text" name="username" placeholder="Nome de usuário" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" name="password" placeholder="Senha" class="form-control">
            </div>

            <input type="submit" name="submit" value="Cadastrar" class="btn btn-default">
            <br> <br>

            <?php include 'buttons.php'; ?>

          </form>
        </div>
      </div>
    </div>

   <?php include 'footer.php'; ?>
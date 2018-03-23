<?php include "db.php";
      include "functions.php";
      updateUser();
?>

<?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h2>Atualizar cadastro</h2>
          <h6>Atualize seu cadastro aqui :)</h6>
          <hr>
          <br>
          <form action="update_user.php" method="post">
            <div class="form-group">
              <label for="text">Usuário</label>
              <input type="text" name="username" placeholder="Nome de usuário" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" name="password" placeholder="Senha" class="form-control">
            </div>
            <div class="form-group">
              <select name="id">
                <?php
                  showData();
                ?>   
              </select>
            </div>
            <input type="submit" name="submit" value="Atualizar" class="btn btn-default">
          </form>
          <br>
          <?php include 'buttons.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
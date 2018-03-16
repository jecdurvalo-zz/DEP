<?php include "db.php";
      include "functions.php";

      update();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h1>Atualizar cadastro</h1>
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
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
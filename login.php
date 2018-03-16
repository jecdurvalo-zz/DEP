<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="wrap">
        <h1>Login</h1>
        <form class="" action="loginphp.php" method="post">
          <div class="form-group">
            <label for="exampleInputUser1">Usuário</label>
            <input type="text" name="user" placeholder="Nome" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="password" placeholder="Senha" class="form-control">
          </div>
          <div class="form-group">
              <input type="submit" name="submit" value="Enviar" class="btn">
          </div>

        </form>
      </div>

    </div>
  </body>
</html>

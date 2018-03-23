<?php include 'db.php';
      include 'functions.php';
      createPokemon();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
  
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h2>Cadastro</h2>
          <h6>Adicione aqui um pokemon :)</h6>
          <hr>
          <br>

          <form action="create_pokemon.php" method="post">

            <div class="form-group">
              <label for="text">Nome do Pokemon</label>
              <input type="text" name="name" placeholder="Nome do Pokemon" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Tipo</label>
              <input type="text" name="type" placeholder="Tipo" class="form-control">
            </div>

             <div class="form-group">
              <label for="text">HP</label>
              <input type="text" name="hp" placeholder="HP" class="form-control">
            </div>

            <input type="submit" name="submit" value="Cadastrar" class="btn btn-default">
            <br> <br>

            <?php include 'buttons.php'; ?>

          </form>
        </div>
      </div>
    </div>

   <?php include 'footer.php'; ?>
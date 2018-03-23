<?php include "db.php";
      include "functions.php";
      updatePokemon();
?>

<?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h2>Atualizar Pokemon</h2>
          <h6>Atualize seu pokemon aqui :)</h6>
          <hr>
          <br>
          <form action="update_pokemon.php" method="post">
            <div class="form-group">
              <label for="text">Nome do pokemon</label>
              <input type="text" name="name" placeholder="Nome do pokemon" class="form-control">
            </div>

            <div class="form-group">
              <label for="text">Tipo</label>
              <input type="text" name="type" placeholder="Tipo" class="form-control">
            </div>

            <div class="form-group">
              <label for="text">HP</label>
              <input type="text" name="hp" placeholder="HP" class="form-control">
            </div>

            <div class="form-group">
              <select name="id">
                <?php
                  showPokemon();
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
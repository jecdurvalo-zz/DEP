<?php include "db.php";
      include "functions.php";
      deletePokemon();
?>

<?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h2>Deseja deletar o pokemon? :(</h2>
          <hr>
          <br>

          <form action="delete_pokemon.php" method="post">

            <div class="form-group">
            <label for="exampleFormControlSelect1">Escolha o ID</label>
              <select name="id">
                <?php
                  showPokemon();
                ?>   
                
              </select>
            </div>

            <input type="submit" name="submit" value="Deletar" class="btn btn-default">            
          </form>
          <br>
          <?php include 'buttons.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
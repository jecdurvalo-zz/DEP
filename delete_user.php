<?php include "db.php";
      include "functions.php";
      deleteUser();
?>

<?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h1>Deseja deletar seu cadastro? :(</h1>
          <hr>
          <br>

          <form action="delete_user.php" method="post">

            <div class="form-group">
            <label for="exampleFormControlSelect1">Escolha o ID</label>
              <select name="id">
                <?php
                  showData();
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
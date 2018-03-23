<?php include 'db.php';
      include 'functions.php';
?>

<?php include 'header.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h1>Lista de usuários plataforma</h1>
          <hr>
          <br>
             <p>
                <?php
                  readUser();
                  ?>

             <?php include 'buttons.php'; ?>
            </p>
        </div>
      </div>

<?php include 'footer.php'; ?>
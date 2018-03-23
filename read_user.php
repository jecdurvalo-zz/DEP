<?php include 'db.php';
      include 'functions.php';
?>

<<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <h2>Lista de usuários plataforma</h2>
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
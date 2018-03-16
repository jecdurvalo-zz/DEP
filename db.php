<?php
  $connection = mysqli_connect('localhost', 'root', 'fiap', 'classapp');

  if(!$connection) {
    die('Erro de conexão');
  }
?>
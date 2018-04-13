<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'cms';

  $connection = mysqli_connect($host, $user, $pass, $db_name);

  //Caso exista erro de conexão, exiba a mensagem
  if (!$connection) {
      die('Opa! Deu ruim :( ' . mysqli_error());
  }
?>
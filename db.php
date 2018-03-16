<?php
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  //Caso exista erro de conexão, exiba a mensagem
  if (!$connection) {
      die('Opa! Deu ruim :( ' . mysqli_error());
  } 
?>
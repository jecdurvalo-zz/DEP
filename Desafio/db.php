<?php
  $connection = mysqli_connect('localhost', 'root', '', 'desafio');

  //Caso exista erro de conexão, exiba a mensagem
  if (!$connection) {
      die('Opa! Deu ruim :( ' . mysqli_error());
  } 
?>
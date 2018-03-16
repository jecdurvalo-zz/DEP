<?php
    $connection = mysqli_connect('localhost', 'root', '', 'desafio');
        if (!$connection) {
            die("Erro de conexão" . mysqli_error());
        }
?>